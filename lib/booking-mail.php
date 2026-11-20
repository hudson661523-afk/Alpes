<?php
/**
 * Booking validation and PHPMailer delivery.
 *
 * The endpoint never renders visitor input as HTML. All values are normalised
 * as plain text, with line breaks and control characters removed before they
 * are placed in the plain-text message body.
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if (!function_exists('alpes_booking_normalize_text')) {
    function alpes_booking_normalize_text($value, int $maxLength): string
    {
        if (!is_scalar($value)) {
            return '';
        }

        $text = (string) $value;
        $text = preg_replace('/[\r\n]+/', ' ', $text) ?? $text;
        $text = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/', '', $text) ?? $text;
        $text = trim($text);

        if (function_exists('mb_substr')) {
            return mb_substr($text, 0, $maxLength, 'UTF-8');
        }

        return substr($text, 0, $maxLength);
    }
}

if (!function_exists('alpes_booking_validate_booking')) {
    function alpes_booking_validate_booking(array $data): array
    {
        $pickup = alpes_booking_normalize_text($data['pickup'] ?? '', 180);
        $destination = alpes_booking_normalize_text($data['destination'] ?? '', 180);
        $rawDate = alpes_booking_normalize_text($data['date'] ?? '', 10);
        $rawTime = alpes_booking_normalize_text($data['time'] ?? '', 5);
        $passengersRaw = alpes_booking_normalize_text($data['passengers'] ?? '', 3);

        $customerName = alpes_booking_normalize_text($data['customer_name'] ?? '', 100);
        $customerEmail = alpes_booking_normalize_text($data['customer_email'] ?? '', 254);

        $errors = [];
        $date = null;
        $time = null;

        $timezone = new DateTimeZone('Europe/Paris');
        $dateObject = DateTime::createFromFormat('!Y-m-d', $rawDate, $timezone);
        if (
            $dateObject instanceof DateTime
            && $dateObject->format('Y-m-d') === $rawDate
            && $dateObject->format('Y-m-d') >= date('Y-m-d')
        ) {
            $date = $dateObject;
        } else {
            $errors[] = 'date';
        }

        $timeObject = DateTime::createFromFormat('!H:i', $rawTime, $timezone);
        if ($timeObject instanceof DateTime && $timeObject->format('H:i') === $rawTime) {
            $time = $timeObject;
        } else {
            $errors[] = 'time';
        }

        $passengers = filter_var($passengersRaw, FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1, 'max_range' => 50],
        ]);
        if ($passengers === false) {
            $errors[] = 'passengers';
            $passengers = 0;
        }

        if ($pickup === '') {
            $errors[] = 'pickup';
        }
        if ($destination === '') {
            $errors[] = 'destination';
        }
        if ($customerEmail !== '' && !filter_var($customerEmail, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'customer_email';
        }

        return [
            'valid' => $errors === [],
            'errors' => $errors,
            'data' => [
                'pickup' => $pickup,
                'destination' => $destination,
                'date' => $date instanceof DateTime ? $date->format('d/m/Y') : $rawDate,
                'time' => $time instanceof DateTime ? $time->format('H:i') : $rawTime,
                'passengers' => (int) $passengers,
                'customer_name' => $customerName,
                'customer_email' => $customerEmail,
            ],
        ];
    }
}

if (!function_exists('alpes_booking_build_email_body')) {
    function alpes_booking_build_email_body(array $booking): string
    {
        $lines = [
            'Bonjour,',
            '',
            'Une nouvelle demande de réservation a été envoyée depuis le site Alpes Transport.',
            '',
            'Détails du trajet :',
            '- Lieu de prise en charge : ' . $booking['pickup'],
            '- Destination : ' . $booking['destination'],
            '- Date de prise en charge : ' . $booking['date'],
            '- Heure de prise en charge : ' . $booking['time'],
            '- Nombre de passagers : ' . $booking['passengers'],
        ];

        if (!empty($booking['customer_name'])) {
            $lines[] = '- Nom du client : ' . $booking['customer_name'];
        }
        if (!empty($booking['customer_email'])) {
            $lines[] = '- Adresse e-mail du client : ' . $booking['customer_email'];
        }

        $lines[] = '';
        $lines[] = 'Il s’agit d’une demande de réservation : le trajet n’est pas confirmé.';
        $lines[] = 'Merci de vérifier la disponibilité puis de répondre au client.';
        $lines[] = '';
        $lines[] = 'Cordialement,';
        $lines[] = 'Site Alpes Transport';

        return implode("\n", $lines);
    }
}

if (!function_exists('alpes_booking_create_mailer')) {
    function alpes_booking_create_mailer(array $config): PHPMailer
    {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = $config['smtp_host'];
        $mail->Port = (int) $config['smtp_port'];
        $mail->SMTPAuth = true;
        $mail->SMTPAutoTLS = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Username = $config['smtp_username'];
        $mail->Password = $config['smtp_password'];
        $mail->SMTPDebug = 0;
        $mail->Timeout = 15;
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => true,
                'verify_peer_name' => true,
                'allow_self_signed' => false,
            ],
        ];

        return $mail;
    }
}

if (!function_exists('alpes_booking_send_booking_request')) {
    function alpes_booking_send_booking_request(array $booking, array $config, $mailerFactory = null): bool
    {
        $password = (string) ($config['smtp_password'] ?? '');
        $from = (string) ($config['from_email'] ?? '');
        $to = (string) ($config['to_email'] ?? '');

        if ($password === '' || !filter_var($from, FILTER_VALIDATE_EMAIL) || !filter_var($to, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        $mail = is_callable($mailerFactory)
            ? $mailerFactory($config)
            : alpes_booking_create_mailer($config);

        $mail->CharSet = 'UTF-8';
        $mail->isHTML(false);
        $mail->setFrom($from, 'Alpes Transport - site');
        $mail->addAddress($to, 'Alpes Transport');
        $mail->Subject = 'Nouvelle demande de réservation – Alpes Transport';

        $body = alpes_booking_build_email_body($booking);
        $mail->Body = $body;
        $mail->AltBody = $body;

        return $mail->send();
    }
}
