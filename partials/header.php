<?php $config = site_config(); ?>
<header class="site-header" id="site-header">
    <div class="utility-bar">
        <div class="container utility-inner">
            <ul class="utility-list">
                <li>
                    <a href="<?= e($config['phone_href']) ?>">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M6.6 2.8 9 7.1 7.4 9c1 2 2.6 3.6 4.6 4.6l1.9-1.6 4.3 2.4-.4 3.1c-.2 1.1-1.1 1.9-2.2 1.9C8.2 19.4 4.6 15.8 4 7.5c0-1.1.8-2 1.8-2.2l.8-.5Z"/></svg>
                        <span><?= e($config['phone']) ?></span>
                    </a>
                </li>
                <li>
                    <a href="<?= e($config['whatsapp']) ?>" target="_blank" rel="noopener noreferrer">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M20 11.7c0 4.3-3.5 7.8-7.8 7.8-1.3 0-2.6-.3-3.7-.9L3 20l1.5-4.4A7.7 7.7 0 0 1 3.3 11C3.3 6.7 6.8 3.2 11 3.2S20 6.7 20 11Zm-5.5 3.1c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1-.2-.1-1-.4-2-1.2-.7-.6-1.2-1.4-1.3-1.6-.1-.2 0-.3.1-.4l.4-.5c.1-.1.1-.3.2-.4 0-.1 0-.3 0-.4l-.8-1.8c-.2-.4-.4-.4-.5-.4h-.5c-.2 0-.4.1-.6.3-.2.2-.7.7-.7 1.7s.7 2 .8 2.1c.1.2 1.4 2.1 3.4 2.9 1.2.5 1.6.6 2.2.5.3 0 1-.1 1.6-.6.5-.4.8-1 .9-1.1.1-.2.1-.3 0-.4Z"/></svg>
                        <span>WhatsApp</span>
                    </a>
                </li>
                <li>
                    <a href="<?= e($config['email_href']) ?>">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 5.5h18v13H3v-13Zm1.6 1.5L12 13l7.4-6H4.6Z"/></svg>
                        <span><?= e($config['email']) ?></span>
                    </a>
                </li>
            </ul>
            <p class="utility-note">Chamonix · 24h/24 sur réservation</p>
        </div>
    </div>

    <div class="container header-inner">
        <a class="brand" href="#accueil">
            <span class="brand-mark" aria-hidden="true">
                <svg viewBox="0 0 70 50" fill="none" focusable="false">
                    <path d="M4 43 24 14l11 15L46 5l20 38" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    <path d="m18 22 6-8 5 7M40 18l6-13 7 14" stroke="currentColor" stroke-width="2"/>
                </svg>
            </span>
            <span class="brand-text">
                <strong>ALPES TRANSPORT</strong>
                <small>CHAMONIX · MONT-BLANC</small>
            </span>
        </a>

        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="Ouvrir le menu">
            <span></span><span></span><span></span>
        </button>

        <nav class="primary-nav" id="primary-navigation" aria-label="Navigation principale">
            <a class="nav-link is-active" href="#accueil" aria-current="page">Accueil</a>

            <div class="nav-item">
                <button class="nav-link nav-dropdown-toggle" type="button" aria-expanded="false" aria-controls="services-dropdown">
                    Nos services
                    <svg class="nav-chevron" viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="m3 6 5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.6"/></svg>
                </button>
                <div class="nav-dropdown" id="services-dropdown">
                    <a class="dropdown-heading" href="https://alpestransport.fr/nos-services/">Toutes les prestations</a>
                    <?php foreach ($config['services'] as $service): ?>
                        <a href="<?= e($service['url']) ?>"><?= e($service['label']) ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="nav-item">
                <button class="nav-link nav-dropdown-toggle" type="button" aria-expanded="false" aria-controls="destinations-dropdown">
                    Destinations
                    <svg class="nav-chevron" viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="m3 6 5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.6"/></svg>
                </button>
                <div class="nav-dropdown" id="destinations-dropdown">
                    <?php foreach ($config['destinations'] as $destination): ?>
                        <a href="<?= e($destination['url']) ?>"><?= e($destination['label']) ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <a class="nav-link" href="<?= e($config['about_url']) ?>">À propos</a>
            <a class="nav-link" href="<?= e($config['contact_url']) ?>">Contact</a>

            <a class="btn btn-gold nav-cta" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">
                Réserver
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
            </a>
        </nav>
    </div>
</header>
