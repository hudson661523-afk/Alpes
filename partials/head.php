<?php
$config = site_config();
$heroImage = asset('images/alpes-hero-mountains.webp');
$canonical = 'https://alpestransport.fr/';
$ogImage = 'https://alpestransport.fr' . asset('images/alpes-hero-mountains.webp');
$siteUrl = 'https://alpestransport.fr/';
$logoUrl = 'https://alpestransport.fr' . asset('images/logo-Alpes-Transport.png');
$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => ['LocalBusiness', 'TaxiService'],
            '@id' => $siteUrl . '#business',
            'name' => $config['site_name'],
            'url' => $siteUrl,
            'image' => $ogImage,
            'logo' => $logoUrl,
            'telephone' => $config['phone'],
            'email' => $config['email'],
            'identifier' => 'SIRET ' . $config['siret'],
            'description' => $config['page_description'],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '15 Route des Combes',
                'postalCode' => '74400',
                'addressLocality' => 'Chamonix-Mont-Blanc',
                'addressCountry' => 'FR',
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Chamonix-Mont-Blanc'],
                ['@type' => 'Country', 'name' => 'France'],
                ['@type' => 'Country', 'name' => 'Suisse'],
                ['@type' => 'Country', 'name' => 'Italie'],
            ],
            'openingHoursSpecification' => [[
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                'opens' => '00:00',
                'closes' => '23:59',
                'description' => 'Disponible 24h/24 sur réservation',
            ]],
            'sameAs' => $config['schema_socials'],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Services de transport privé',
                'itemListElement' => [
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Transferts aéroport']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Chauffeur privé']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Service touristique']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Voyages d’affaires']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Événements et occasions spéciales']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Voyages pour mariages et événements']],
                ],
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $siteUrl . '#website',
            'url' => $siteUrl,
            'name' => $config['site_name'],
            'inLanguage' => 'fr-FR',
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $config['page_title'],
            'description' => $config['page_description'],
            'inLanguage' => 'fr-FR',
            'isPartOf' => ['@id' => $siteUrl . '#website'],
            'about' => ['@id' => $siteUrl . '#business'],
        ],
    ],
];
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= e($config['page_description']) ?>">
<meta name="theme-color" content="#15191C">
<meta name="format-detection" content="telephone=no">

<!-- Staging must remain hidden from search engines. Production SEO is untouched. -->
<meta name="robots" content="noindex, nofollow, noarchive">
<meta name="googlebot" content="noindex, nofollow, noarchive">

<title><?= e($config['page_title']) ?></title>
<link rel="canonical" href="<?= e($canonical) ?>">

<meta property="og:locale" content="fr_FR">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= e($config['site_name']) ?>">
<meta property="og:title" content="<?= e($config['page_title']) ?>">
<meta property="og:description" content="<?= e($config['page_description']) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta property="og:image" content="<?= e($ogImage) ?>">
<meta property="og:image:alt" content="Alpes Transport - chauffeur privé et taxi à Chamonix-Mont-Blanc">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($config['page_title']) ?>">
<meta name="twitter:description" content="<?= e($config['page_description']) ?>">
<meta name="twitter:image" content="<?= e($ogImage) ?>">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="<?= e(asset('images/favicon-32.png')) ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?= e(asset('images/favicon-180.png')) ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="image" href="<?= e($heroImage) ?>" fetchpriority="high">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
<script src="<?= e(asset('js/location-providers.js')) ?>" defer></script>
<script src="<?= e(asset('js/location-autocomplete.js')) ?>" defer></script>
<script src="<?= e(asset('js/main.js')) ?>" defer></script>
