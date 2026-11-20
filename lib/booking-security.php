<?php
/**
 * Security helpers shared by the booking form and the booking endpoint.
 *
 * No credentials or personal data are stored in these helpers.
 */
if (!function_exists('alpes_booking_session')) {
    function alpes_booking_session(): void
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            return;
        }

        $forwardedProto = strtolower(trim(explode(',', (string) ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? ''))[0]));
        $https = (!empty($_SERVER['HTTPS']) && strtolower((string) $_SERVER['HTTPS']) !== 'off')
            || $forwardedProto === 'https';

        session_name('alpes_booking');
        session_set_cookie_params([
            'lifetime' => 0,
            'path' => '/',
            'secure' => $https,
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
        session_start();
    }
}

if (!function_exists('alpes_booking_csrf_token')) {
    function alpes_booking_csrf_token(): string
    {
        alpes_booking_session();

        $token = $_SESSION['alpes_booking_csrf'] ?? null;
        if (!is_string($token) || strlen($token) !== 64) {
            if (function_exists('session_regenerate_id')) {
                @session_regenerate_id(true);
            }
            $token = bin2hex(random_bytes(32));
            $_SESSION['alpes_booking_csrf'] = $token;
        }

        return $token;
    }
}

if (!function_exists('alpes_booking_csrf_valid')) {
    function alpes_booking_csrf_valid($token): bool
    {
        $expected = $_SESSION['alpes_booking_csrf'] ?? null;
        if (!is_string($expected) || !is_string($token) || strlen($token) !== 64) {
            return false;
        }

        return hash_equals($expected, $token);
    }
}

if (!function_exists('alpes_booking_request_scheme')) {
    function alpes_booking_request_scheme(): string
    {
        $forwardedProto = strtolower(trim(explode(',', (string) ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? ''))[0]));
        if ($forwardedProto === 'https') {
            return 'https';
        }
        if (!empty($_SERVER['HTTPS']) && strtolower((string) $_SERVER['HTTPS']) !== 'off') {
            return 'https';
        }

        return 'http';
    }
}

if (!function_exists('alpes_booking_expected_origin')) {
    function alpes_booking_expected_origin(): string
    {
        $host = strtolower(trim((string) ($_SERVER['HTTP_HOST'] ?? '')));
        if ($host === '') {
            return '';
        }

        $validHost = preg_match('/^[a-z0-9.-]+(?::[0-9]+)?$/i', $host)
            || preg_match('/^\[[0-9a-f:]+\](?::[0-9]+)?$/i', $host);
        if (!$validHost) {
            return '';
        }

        return alpes_booking_request_scheme() . '://' . $host;
    }
}

if (!function_exists('alpes_booking_same_origin')) {
    function alpes_booking_same_origin(): bool
    {
        $expected = alpes_booking_expected_origin();
        if ($expected === '') {
            return false;
        }

        $origin = rtrim(trim((string) ($_SERVER['HTTP_ORIGIN'] ?? '')), '/');
        if ($origin !== '') {
            return hash_equals($expected, $origin);
        }

        $referer = trim((string) ($_SERVER['HTTP_REFERER'] ?? ''));
        if ($referer === '') {
            return false;
        }

        $parts = parse_url($referer);
        if (!is_array($parts) || empty($parts['scheme']) || empty($parts['host'])) {
            return false;
        }

        $refererOrigin = strtolower($parts['scheme']) . '://' . strtolower($parts['host']);
        if (isset($parts['port'])) {
            $refererOrigin .= ':' . (int) $parts['port'];
        }

        return hash_equals($expected, rtrim($refererOrigin, '/'));
    }
}

if (!function_exists('alpes_booking_honeypot_clean')) {
    function alpes_booking_honeypot_clean(array $data): bool
    {
        $value = $data['website'] ?? '';
        if ($value === null) {
            return true;
        }

        return is_scalar($value) && trim((string) $value) === '';
    }
}

if (!function_exists('alpes_booking_rate_allow')) {
    function alpes_booking_rate_allow(): bool
    {
        alpes_booking_session();

        $window = 600;
        $limit = 5;
        $now = time();
        $attempts = $_SESSION['alpes_booking_attempts'] ?? [];

        if (!is_array($attempts)) {
            $attempts = [];
        }
        $attempts = array_values(array_filter($attempts, static function ($timestamp) use ($now, $window): bool {
            return is_int($timestamp) && $timestamp > ($now - $window);
        }));

        if (count($attempts) >= $limit) {
            $_SESSION['alpes_booking_attempts'] = $attempts;
            return false;
        }

        $attempts[] = $now;
        $_SESSION['alpes_booking_attempts'] = $attempts;
        return true;
    }
}
