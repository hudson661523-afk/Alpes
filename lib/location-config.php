<?php
/**
 * Location autocomplete provider configuration.
 *
 * The active provider is the public Photon demo API, for the limited
 * development and staging testing authorised by the project owner. It is not
 * a guaranteed commercial production service. See docs/location-autocomplete.md.
 *
 * Supported providers:
 *   - photon      Public Photon demo API (no key).
 *   - self-hosted A private Photon-compatible OSM geocoder endpoint.
 *
 * Configuration sources, in order:
 *   1. Environment variables (recommended on Hostinger).
 *   2. lib/location-key.local.php - git-ignored and HTTP-denied local override.
 */
$locationEnv = static function (string $name): string {
    $value = getenv($name);
    return is_string($value) ? trim($value) : '';
};

$provider = strtolower($locationEnv('QB_LOCATION_PROVIDER'));
if ($provider === '') {
    $provider = 'photon';
}

$providerDefaults = [
    'photon' => [
        'endpoint' => 'https://photon.komoot.io/api/',
        'key' => '',
    ],
    'self-hosted' => [
        'endpoint' => $locationEnv('QB_LOCATION_ENDPOINT'),
        'key' => $locationEnv('QB_LOCATION_API_KEY'),
    ],
];

if (!isset($providerDefaults[$provider])) {
    $provider = 'photon';
}

$settings = $providerDefaults[$provider];

$localConfig = __DIR__ . '/location-key.local.php';
if (is_file($localConfig)) {
    $local = require $localConfig;
    if (is_array($local)) {
        foreach (['provider', 'endpoint', 'key'] as $name) {
            if (isset($local[$name]) && is_string($local[$name]) && trim($local[$name]) !== '') {
                if ($name === 'provider' && isset($providerDefaults[strtolower(trim($local[$name]))])) {
                    $provider = strtolower(trim($local[$name]));
                    $settings = $providerDefaults[$provider];
                } elseif ($name !== 'provider') {
                    $settings[$name] = trim($local[$name]);
                }
            }
        }
    } elseif (is_string($local) && trim($local) !== '') {
        // Backwards-compatible shorthand for a private-instance key.
        $settings['key'] = trim($local);
    }
}

return [
    'provider' => $provider,
    'endpoint' => $settings['endpoint'],
    'key' => $settings['key'],
    'language' => 'fr',
    // Chamonix-Mont-Blanc. A bias, never a boundary: other European results remain possible.
    'bias_lat' => '45.9237',
    'bias_lon' => '6.8694',
];
