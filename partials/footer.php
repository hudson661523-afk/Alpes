<?php
$config = site_config();

$socialIcons = [
    'X' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 5l14 14M19 5 5 19" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>',
    'Facebook' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M13.6 21v-8h2.7l.4-3.1h-3.1V7.9c0-.9.3-1.5 1.6-1.5h1.6V3.6c-.3 0-1.3-.1-2.4-.1-2.4 0-4.1 1.5-4.1 4.2v2.2H7.8V13h2.5v8h3.3Z"/></svg>',
    'YouTube' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="2.5" y="5.5" width="19" height="13" rx="4" fill="none" stroke="currentColor" stroke-width="1.6"/><path d="m10.2 9.2 5 2.8-5 2.8V9.2Z"/></svg>',
    'Instagram' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="3.5" y="3.5" width="17" height="17" rx="5" fill="none" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="12" r="4" fill="none" stroke="currentColor" stroke-width="1.6"/><circle cx="17" cy="7" r="1" fill="currentColor"/></svg>',
];
?>
<section class="pre-footer" aria-labelledby="pre-footer-title">
    <div class="container pre-footer-inner">
        <div>
            <span class="section-kicker section-kicker-light">UN TRAJET, UNE ATTENTION PARTICULIÈRE</span>
            <h2 id="pre-footer-title">Votre prochain voyage <em>commence ici.</em></h2>
        </div>
        <div class="pre-footer-side">
            <p>Confiez-nous votre transfert à Chamonix et vers les destinations alpines voisines. Nous organisons votre trajet selon votre programme, avec une attention particulière portée à votre confort.</p>
            <div class="pre-footer-actions">
                <a class="btn btn-gold" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">
                    Réserver votre transfert
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                </a>
                <a class="footer-text-link" href="<?= e($config['contact_url']) ?>" target="_blank" rel="noopener noreferrer">
                    Nous contacter
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.7"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container footer-main">
        <div class="footer-grid">
            <div class="footer-column footer-brand-column">
                <a class="brand" href="<?= e($config['home_url']) ?>">
                    <img
                        class="brand-logo"
                        src="<?= e(asset('images/logo-Alpes-Transport.png')) ?>"
                        alt="Alpes Transport – Chauffeur privé à Chamonix-Mont-Blanc"
                        width="904"
                        height="225"
                        loading="lazy"
                        decoding="async"
                    >
                </a>
                <p class="footer-description">À Chamonix-Mont-Blanc, Alpes Transport vous accompagne pour vos transferts aéroport, vos déplacements privés et vos trajets dans les Alpes, avec une attention personnalisée à chaque étape.</p>
                <p class="footer-location">
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z" fill="none" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.6"/></svg>
                    <span>Chamonix-Mont-Blanc, France</span>
                </p>
                <ul class="footer-socials" aria-label="Réseaux sociaux">
                    <?php foreach ($config['socials'] as $social): ?>
                        <li>
                            <a href="<?= e($social['url']) ?>" target="_blank" rel="noopener noreferrer">
                                <?= $socialIcons[$social['label']] ?>
                                <span class="sr-only"><?= e($social['label']) ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <nav class="footer-column" aria-labelledby="footer-services-title">
                <h2 class="footer-heading" id="footer-services-title">Nos Services</h2>
                <ul class="footer-links">
                    <?php foreach ($config['services'] as $service): ?>
                        <li><a href="<?= e($service['url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($service['label']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <nav class="footer-column" aria-labelledby="footer-destinations-title">
                <h2 class="footer-heading" id="footer-destinations-title">Destinations</h2>
                <ul class="footer-links">
                    <?php foreach ($config['footer_destinations'] as $destination): ?>
                        <li><a href="<?= e($destination['url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($destination['label']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="footer-column footer-contact-column">
                <h2 class="footer-heading" id="footer-contact-title">Contact &amp; Réservations</h2>
                <ul class="footer-contact-list" aria-labelledby="footer-contact-title">
                    <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M6.6 2.8 9 7.1 7.4 9c1 2 2.6 3.6 4.6 4.6l1.9-1.6 4.3 2.4-.4 3.1c-.2 1.1-1.1 1.9-2.2 1.9C8.2 19.4 4.6 15.8 4 7.5c0-1.1.8-2 1.8-2.2l.8-.5Z"/></svg>
                        <a href="<?= e($config['phone_href']) ?>"><?= e($config['phone']) ?></a>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 5.5h18v13H3v-13Zm1.6 1.5L12 13l7.4-6H4.6Z"/></svg>
                        <a href="<?= e($config['email_href']) ?>"><?= e($config['email']) ?></a>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z" fill="none" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.6"/></svg>
                        <a href="<?= e($config['maps_url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($config['address']) ?></a>
                    </li>
                </ul>
                <p class="footer-business-details">SIRET <?= e($config['siret']) ?> · <?= e(implode(' · ', $config['licences'])) ?></p>
                <div class="footer-actions">
                    <a class="btn btn-whatsapp" href="<?= e($config['whatsapp']) ?>" target="_blank" rel="noopener noreferrer">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M20 11.7c0 4.3-3.5 7.8-7.8 7.8-1.3 0-2.6-.3-3.7-.9L3 20l1.5-4.4A7.7 7.7 0 0 1 3.3 11C3.3 6.7 6.8 3.2 11 3.2S20 6.7 20 11Zm-5.5 3.1c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1-.2-.1-1-.4-2-1.2-.7-.6-1.2-1.4-1.3-1.6-.1-.2 0-.3.1-.4l.4-.5c.1-.1.1-.3.2-.4 0-.1 0-.3 0-.4l-.8-1.8c-.2-.4-.4-.4-.5-.4h-.5c-.2 0-.4.1-.6.3-.2.2-.7.7-.7 1.7s.7 2 .8 2.1c.1.2 1.4 2.1 3.4 2.9 1.2.5 1.6.6 2.2.5.3 0 1-.1 1.6-.6.5-.4.8-1 .9-1.1.1-.2.1-.3 0-.4Z"/></svg>
                        WhatsApp
                    </a>
                    <a class="btn btn-gold" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">
                        Réserver en ligne
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p>© <?= date('Y') ?> <?= e($config['site_name']) ?> — Tous droits réservés.</p>
            <p class="footer-demo-note">Site de démonstration — en développement</p>
            <nav class="footer-bottom-links" aria-label="Informations légales">
                <a href="<?= e($config['cookie_policy_url']) ?>" target="_blank" rel="noopener noreferrer">Politique de cookies</a>
            </nav>
        </div>
    </div>
</footer>
