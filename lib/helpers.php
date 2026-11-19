<?php
/**
 * Small helper functions shared by all partials.
 */
if (!function_exists('site_config')) {
    function site_config(): array
    {
        static $config = null;
        if ($config === null) {
            $config = require __DIR__ . '/config.php';
        }
        return $config;
    }
}

if (!function_exists('e')) {
    function e($value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}

if (!function_exists('asset')) {
    function asset(string $path): string
    {
        $relative = ltrim($path, '/');
        $url = '/assets/' . $relative;
        $file = __DIR__ . '/../assets/' . $relative;

        if (is_file($file)) {
            $modified = filemtime($file);
            if ($modified !== false) {
                $url .= '?v=' . $modified;
            }
        }

        return $url;
    }
}
