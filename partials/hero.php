<?php
$config = site_config();

$slides = [
    [
        'image'    => 'images/alpes-hero-mountains.webp',
        'position' => 'center 42%',
        'eyebrow'  => 'CHAUFFEUR PRIVÉ · CHAMONIX-MONT-BLANC',
        'before'   => 'L’art du voyage',
        'accent'   => 'au cœur des Alpes.',
        'lead'     => 'Découvrez un service de chauffeur privé à Chamonix, pensé pour vos transferts aéroport, déplacements professionnels et voyages sur mesure dans les Alpes.',
    ],
    [
        'image'    => 'images/alpes-hero-valley.webp',
        'position' => 'center 52%',
        'eyebrow'  => 'VOYAGES SUR MESURE · CHAMONIX',
        'before'   => 'Explorez les Alpes',
        'accent'   => 'avec élégance.',
        'lead'     => "De Chamonix à Megève, Annecy et Courmayeur, profitez de trajets privés et d'escapades alpines adaptés à vos envies.",
    ],
    [
        'image'    => 'images/alpes-hero-mercedes-v-class.webp',
        'position' => '35% 55%',
        'eyebrow'  => 'TRANSFERTS PRIVÉS · CONFORT & ESPACE',
        'before'   => 'Voyagez ensemble,',
        'accent'   => 'dans un confort absolu.',
        'lead'     => 'Pour vos transferts aéroport, séjours en famille et voyages en groupe, découvrez le confort de nos services de transport privé.',
    ],
    [
        'image'    => 'images/alpes-hero-mercedes-s-class.webp',
        'position' => '68% 55%',
        'eyebrow'  => 'CHAUFFEUR PRIVÉ · SERVICE HAUT DE GAMME',
        'before'   => 'L’excellence',
        'accent'   => 'du voyage privé.',
        'lead'     => 'Pour vos rendez-vous professionnels, transferts et déplacements privés, profitez d’une expérience de voyage élégante et personnalisée.',
    ],
];
?>
<section class="hero" id="accueil" data-hero-slider aria-labelledby="hero-title">
    <div class="hero-media" aria-hidden="true">
        <?php foreach ($slides as $index => $slide): ?>
            <div class="hero-slide-image<?= $index === 0 ? ' is-active' : '' ?>" data-slide-image="<?= $index ?>" style="--slide-position: <?= e($slide['position']) ?>">
                <?php if ($index === 0): ?>
                    <img src="<?= e(asset($slide['image'])) ?>" alt="" width="1672" height="941" fetchpriority="high" decoding="async">
                <?php else: ?>
                    <img data-src="<?= e(asset($slide['image'])) ?>" alt="" width="1672" height="941" decoding="async">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="hero-shade" aria-hidden="true"></div>

    <p class="sr-only" id="hero-slide-status" aria-live="polite"></p>

    <div class="container hero-content">
        <div class="hero-copy">
            <div class="hero-slides" aria-live="off">
                <?php foreach ($slides as $index => $slide): ?>
                    <article
                        class="hero-slide<?= $index === 0 ? ' is-active' : '' ?>"
                        data-slide-content="<?= $index ?>"
                        <?= $index === 0 ? 'aria-hidden="false"' : 'aria-hidden="true" inert' ?>
                    >
                        <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span> <?= e($slide['eyebrow']) ?></p>

                        <?php if ($index === 0): ?>
                            <h1 class="hero-heading" id="hero-title"><?= e($slide['before']) ?> <em><?= e($slide['accent']) ?></em></h1>
                        <?php else: ?>
                            <h2 class="hero-heading"><?= e($slide['before']) ?> <em><?= e($slide['accent']) ?></em></h2>
                        <?php endif; ?>

                        <p class="hero-lead"><?= e($slide['lead']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

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

    <div class="hero-controls">
        <button class="hero-arrow hero-arrow-prev" type="button" aria-label="Diapositive précédente">
            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M15 5l-7 7 7 7" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>

        <div class="hero-indicators" role="group" aria-label="Choisir une diapositive">
            <?php foreach ($slides as $index => $slide): ?>
                <button
                    class="hero-indicator<?= $index === 0 ? ' is-active' : '' ?>"
                    type="button"
                    data-slide-target="<?= $index ?>"
                    aria-label="Afficher la diapositive <?= $index + 1 ?> sur <?= count($slides) ?>"
                    <?= $index === 0 ? 'aria-current="true"' : '' ?>
                ></button>
            <?php endforeach; ?>
        </div>

        <button class="hero-arrow hero-arrow-next" type="button" aria-label="Diapositive suivante">
            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M9 5l7 7-7 7" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
    </div>

    <a class="scroll-cue" href="#intro">
        <span>Explorer</span>
        <span class="sr-only">Faire défiler vers la section suivante</span>
        <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M8 2v11m-5-5 5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.4"/></svg>
    </a>
</section>
