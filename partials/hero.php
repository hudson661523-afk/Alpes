<?php $config = site_config(); ?>
<section class="hero" id="accueil" aria-labelledby="hero-title">
    <div class="hero-media" aria-hidden="true"></div>
    <div class="hero-shade" aria-hidden="true"></div>

    <div class="container hero-content">
        <div class="hero-copy">
            <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span> Chauffeur privé · Chamonix–Mont-Blanc</p>

            <h1 id="hero-title">L’art du voyage <em>au cœur des Alpes.</em></h1>

            <p class="hero-lead">
                Transferts aéroport, déplacements d’affaires et escapades sur mesure depuis Chamonix.
                Un service privé, discret et parfaitement orchestré, à votre rythme.
            </p>

            <div class="hero-actions">
                <a class="btn btn-gold" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">
                    Réserver un trajet
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                </a>
                <a class="btn btn-outline" href="#services">
                    Découvrir nos services
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                </a>
            </div>

            <ul class="hero-markers" aria-label="Points forts du service">
                <li>Depuis 2011</li>
                <li>24h/24 sur réservation</li>
                <li>Chauffeurs multilingues</li>
                <li>France · Suisse · Italie</li>
            </ul>
        </div>
    </div>

    <p class="hero-rail" aria-hidden="true">45°55′ N — 6°52′ E</p>

    <a class="scroll-cue" href="#intro">
        <span>Explorer</span>
        <span class="sr-only">Faire défiler vers la section suivante</span>
        <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M8 2v11m-5-5 5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.4"/></svg>
    </a>
</section>
