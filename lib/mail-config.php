<?php
/**
 * Server-only mail configuration.
 *
 * Secrets are read from environment variables or from a protected PHP file
 * outside the deployed web root. Nothing here is sent to the browser.
 */
if (!function_exists('alpes_mail_env')) {
    function alpes_mail_env(string $name): string
    {
        $value = getenv($name);
        if ($value === false || trim((string) $value) === '') {
            $value = $_SERVER[$name] ?? '';
        }

        return is_scalar($value) ? trim((string) $value) : '';
    }
}

if (!function_exists('alpes_mail_private_config')) {
    function alpes_mail_private_config(): array
    {
        $path = alpes_mail_env('ALPES_MAIL_CONFIG');

        if ($path === '') {
            $documentRoot = (string) ($_SERVER['DOCUMENT_ROOT'] ?? '');
            $realRoot = $documentRoot !== '' ? realpath($documentRoot) : false;
            if ($realRoot !== false) {
                $path = dirname($realRoot) . '/alpes-transport-private/mail.php';
            }
        }

        if ($path === '' || !is_file($path)) {
            return [];
        }

        try {
            $config = require $path;
        } catch (Throwable $error) {
            error_log('Alpes booking: private mail configuration could not be loaded.');
            return [];
        }

        return is_array($config) ? $config : [];
    }
}

if (!function_exists('alpes_mail_config')) {
    function alpes_mail_config(): array
    {
        $private = alpes_mail_private_config();

        $value = static function (string $key, string $environmentName, string $default) use ($private): string {
            $fromEnvironment = alpes_mail_env($environmentName);
            if ($fromEnvironment !== '') {
                return $fromEnvironment;
            }
            if (isset($private[$key]) && is_scalar($private[$key]) && trim((string) $private[$key]) !== '') {
                return trim((string) $private[$key]);
            }

            return $default;
        };

        return [
            'smtp_host' => $value('smtp_host', 'ALPES_SMTP_HOST', 'smtp.gmail.com'),
            'smtp_port' => (int) $value('smtp_port', 'ALPES_SMTP_PORT', '587'),
            'smtp_encryption' => strtolower($value('smtp_encryption', 'ALPES_SMTP_ENCRYPTION', 'starttls')),
            'smtp_username' => $value('smtp_username', 'ALPES_SMTP_USERNAME', 'alpestransport@gmail.com'),
            'smtp_password' => $value('smtp_password', 'ALPES_SMTP_PASSWORD', ''),
            'from_email' => $value('from_email', 'ALPES_FROM_EMAIL', 'alpestransport@gmail.com'),
            'to_email' => $value('to_email', 'ALPES_BOOKING_TO', 'alpestransport@gmail.com'),
        ];
    }
}
