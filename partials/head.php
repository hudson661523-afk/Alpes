<?php
$config = site_config();
$heroImage = asset('images/alpes-hero-mountains.webp');
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= e($config['page_description']) ?>">
<meta name="theme-color" content="#15191C">

<!-- Staging must remain hidden from search engines. Production SEO is untouched. -->
<meta name="robots" content="noindex, nofollow">

<title><?= e($config['page_title']) ?></title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="image" href="<?= e($heroImage) ?>" fetchpriority="high">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
<script src="<?= e(asset('js/main.js')) ?>" defer></script>
