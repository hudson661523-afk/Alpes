<?php
declare(strict_types=1);

/**
 * POST-only booking request endpoint.
 *
 * It validates input server-side, verifies CSRF and origin, applies a small
 * per-session rate limit, then sends a plain-text request through Gmail SMTP.
 * Public responses never include credentials, SMTP details or personal data.
 */
require_once dirname(__DIR__) . '/lib/helpers.php';
require_once dirname(__DIR__) . '/lib/booking-security.php';
require_once dirname(__DIR__) . '/lib/mail-config.php';
require_once dirname(__DIR__) . '/lib/booking-mail.php';

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Cache-Control: no-store, max-age=0');

const ALPES_BOOKING_SUCCESS = 'Votre demande a été envoyée. Notre équipe vous contactera pour confirmer la disponibilité.';
const ALPES_BOOKING_FAILURE = "Votre demande n'a pas pu être envoyée. Veuillez réessayer.";

function alpes_booking_respond(bool $ok, string $message, int $status): void
{
    http_response_code($status);
    echo json_encode(['ok' => $ok, 'message' => $message], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

alpes_booking_session();

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    error_log('Alpes booking: non-POST request rejected.');
    alpes_booking_respond(false, ALPES_BOOKING_FAILURE, 405);
}

if (!alpes_booking_same_origin()) {
    error_log('Alpes booking: origin verification failed.');
    alpes_booking_respond(false, ALPES_BOOKING_FAILURE, 403);
}

$rawBody = file_get_contents('php://input');
$data = json_decode($rawBody === false ? '' : $rawBody, true);
if (!is_array($data)) {
    error_log('Alpes booking: malformed request body rejected.');
    alpes_booking_respond(false, ALPES_BOOKING_FAILURE, 400);
}

if (!alpes_booking_csrf_valid($data['csrf_token'] ?? null)) {
    error_log('Alpes booking: CSRF token rejected.');
    alpes_booking_respond(false, ALPES_BOOKING_FAILURE, 403);
}

if (!alpes_booking_honeypot_clean($data)) {
    error_log('Alpes booking: honeypot triggered.');
    alpes_booking_respond(false, ALPES_BOOKING_FAILURE, 422);
}

if (!alpes_booking_rate_allow()) {
    error_log('Alpes booking: rate limit reached.');
    alpes_booking_respond(false, ALPES_BOOKING_FAILURE, 429);
}

$validation = alpes_booking_validate_booking($data);
if (!$validation['valid']) {
    error_log('Alpes booking: server-side validation failed.');
    alpes_booking_respond(false, ALPES_BOOKING_FAILURE, 422);
}

$config = alpes_mail_config();
if ($config['smtp_password'] === '') {
    error_log('Alpes booking: SMTP password is not configured.');
    alpes_booking_respond(false, ALPES_BOOKING_FAILURE, 503);
}

try {
    $sent = alpes_booking_send_booking_request($validation['data'], $config);
} catch (Throwable $error) {
    error_log('Alpes booking: mailer error (' . get_class($error) . ').');
    alpes_booking_respond(false, ALPES_BOOKING_FAILURE, 502);
}

if (!$sent) {
    error_log('Alpes booking: SMTP did not accept the message.');
    alpes_booking_respond(false, ALPES_BOOKING_FAILURE, 502);
}

alpes_booking_respond(true, ALPES_BOOKING_SUCCESS, 200);
