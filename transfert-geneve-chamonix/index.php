<?php
require_once __DIR__ . '/../lib/helpers.php';
$config = site_config();

$pageTitle = 'Transfert Genève Chamonix | Alpes Transport';
$pageDescription = 'Réservez votre transfert Genève Chamonix avec Alpes Transport : trajet privé entre l’aéroport ou le centre de Genève et la vallée de Chamonix, sur réservation.';
$canonical = 'https://alpestransport.fr/transfert-geneve-chamonix/';
$ogImage = 'https://alpestransport.fr' . asset('images/alpes-airport-transfer.webp');
$ogType = 'website';
$preloadImage = asset('images/alpes-airport-transfer.webp');
$activeNav = 'services';

$schemaExtra = [
    [
        '@type' => 'BreadcrumbList',
        '@id' => $canonical . '#breadcrumb',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => 'https://alpestransport.fr/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Transfert Genève Chamonix', 'item' => $canonical],
        ],
    ],
];
?>
<!doctype html>
<html lang="fr">
<head>
    <?php require __DIR__ . '/../partials/head.php'; ?>
</head>
<body class="page-transfert-geneve-chamonix">
    <a class="skip-link" href="#main">Aller au contenu</a>
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main id="main">
        <section class="tgc-hero" aria-labelledby="tgc-hero-title">
            <div class="tgc-hero-media" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-airport-transfer.webp')) ?>" alt="" width="1448" height="1086" fetchpriority="high" decoding="async">
            </div>
            <div class="tgc-hero-overlay" aria-hidden="true"></div>
            <div class="container tgc-hero-content">
                <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span>TRANSFERT GENÈVE – CHAMONIX</p>
                <h1 class="tgc-hero-title" id="tgc-hero-title">Transfert <em>Genève Chamonix</em></h1>
                <p class="tgc-hero-lead">Organisez votre transfert privé entre Genève et Chamonix-Mont-Blanc avec Alpes Transport. Depuis l’aéroport de Genève ou le centre-ville, réservez votre trajet vers la vallée de Chamonix, ou dans le sens inverse, selon votre itinéraire.</p>
                <div class="hero-actions tgc-hero-actions">
                    <a class="btn btn-gold" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">
                        RÉSERVER MON TRANSFERT
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                    <a class="btn btn-outline" href="#trajet-geneve-chamonix">
                        DÉCOUVRIR LE TRAJET
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <section class="tgc-intro" id="trajet-geneve-chamonix" aria-labelledby="tgc-intro-title">
            <div class="container tgc-intro-inner">
                <div class="tgc-intro-lead">
                    <span class="section-kicker">GENÈVE &amp; CHAMONIX-MONT-BLANC</span>
                    <h2 id="tgc-intro-title">Votre trajet entre <em>Genève et Chamonix-Mont-Blanc</em></h2>
                    <span class="tgc-intro-rule" aria-hidden="true"></span>
                </div>
                <div class="tgc-intro-copy">
                    <p>Alpes Transport organise des transferts privés entre Genève et Chamonix-Mont-Blanc, dans les deux sens. Que vous partiez de l’aéroport de Genève, du centre-ville ou de la vallée de Chamonix, votre trajet est préparé sur réservation selon votre lieu de départ, votre destination, le nombre de passagers et l’horaire souhaité.</p>
                    <p>Ce trajet transfrontalier entre la Suisse et la France relie Genève à la vallée de Chamonix. Pour faciliter l’organisation de votre transfert Genève Chamonix ou Chamonix Genève, il est utile de préciser l’adresse exacte de prise en charge, les informations de voyage pertinentes et les éventuels bagages ou équipements à prévoir.</p>
                    <ul class="tgc-intro-points" aria-label="Points clés">
                        <li><span class="tgc-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 12h18M7 8l-4 4 4 4M17 8l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>Aller et retour</li>
                        <li><span class="tgc-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 22s7-6 7-12a7 7 0 1 0-14 0c0 6 7 12 7 12Z" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.7"/></svg></span>Aéroport ou centre-ville</li>
                        <li><span class="tgc-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M16 2v4M8 2v4M3 10h18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>Sur réservation</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="tgc-routes" aria-labelledby="tgc-routes-title">
            <div class="container">
                <div class="tgc-heading">
                    <div>
                        <span class="section-kicker">TRAJETS PRINCIPAUX</span>
                        <h2 id="tgc-routes-title">Les principaux trajets <em>Genève–Chamonix</em></h2>
                    </div>
                    <p>Trois points de départ et de destination fréquents pour organiser votre transfert entre Genève et la vallée de Chamonix.</p>
                </div>

                <div class="tgc-route-grid">
                    <article class="tgc-route-card">
                        <div class="tgc-route-media">
                            <img src="<?= e(asset('images/alpes-destination-geneve-aeroport.webp')) ?>" alt="Transfert privé entre Chamonix et l’aéroport de Genève" width="1448" height="1086" loading="lazy" decoding="async">
                            <span class="tgc-route-badge">GVA</span>
                        </div>
                        <div class="tgc-route-body">
                            <p class="tgc-route-label">Aéroport de Genève</p>
                            <h3>Transfert Aéroport de Genève – Chamonix</h3>
                            <p>Organisez votre trajet privé entre l’aéroport de Genève et Chamonix-Mont-Blanc, au départ ou à l’arrivée. Communiquez votre horaire, les informations de vol utiles et votre adresse de prise en charge pour préparer votre transfert.</p>
                        </div>
                    </article>

                    <article class="tgc-route-card">
                        <div class="tgc-route-media">
                            <img src="<?= e(asset('images/alpes-destination-geneve-centre.webp')) ?>" alt="Transfert privé entre Genève centre et Chamonix-Mont-Blanc" width="1448" height="1086" loading="lazy" decoding="async">
                            <span class="tgc-route-badge">GENÈVE CENTRE</span>
                        </div>
                        <div class="tgc-route-body">
                            <p class="tgc-route-label">Centre-ville</p>
                            <h3>Transfert Genève Centre – Chamonix</h3>
                            <p>Depuis un hôtel, une résidence ou un lieu de rendez-vous à Genève, Alpes Transport organise votre transfert privé vers Chamonix-Mont-Blanc. Précisez votre adresse et l’horaire souhaité lors de votre réservation.</p>
                        </div>
                    </article>

                    <article class="tgc-route-card">
                        <div class="tgc-route-media">
                            <img src="<?= e(asset('images/alpes-destination-vallee-chamonix.webp')) ?>" alt="Vallée de Chamonix-Mont-Blanc, destination desservie depuis Genève" width="1448" height="1086" loading="lazy" decoding="async">
                            <span class="tgc-route-badge">CHAMONIX</span>
                        </div>
                        <div class="tgc-route-body">
                            <p class="tgc-route-label">Vallée de Chamonix</p>
                            <h3>Transfert vers la Vallée de Chamonix</h3>
                            <p>Selon votre destination, votre trajet peut concerner Chamonix centre ou les communes de la vallée, notamment Les Houches, Argentière et Servoz. Indiquez l’adresse précise lors de votre demande afin de préparer votre arrivée.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="tgc-practical" aria-labelledby="tgc-practical-title">
            <div class="container">
                <div class="tgc-heading tgc-heading-center">
                    <span class="section-kicker">INFORMATIONS PRATIQUES</span>
                    <h2 id="tgc-practical-title">Préparer votre transfert <em>Genève–Chamonix</em></h2>
                </div>
                <div class="tgc-practical-grid">
                    <article class="tgc-info-card">
                        <span class="tgc-info-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg></span>
                        <h3>Arrivées et départs</h3>
                        <p>Pour un transfert aéroport Genève Chamonix, indiquez l’horaire souhaité, le terminal ou les informations de vol utiles. Pour un départ depuis Chamonix, précisez l’heure de prise en charge et l’aéroport ou l’adresse à Genève.</p>
                    </article>
                    <article class="tgc-info-card">
                        <span class="tgc-info-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 22s7-6 7-12a7 7 0 1 0-14 0c0 6 7 12 7 12Z" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.7"/></svg></span>
                        <h3>Adresses de prise en charge</h3>
                        <p>Le transfert peut être organisé depuis un aéroport, un hôtel, une résidence ou une adresse privée. Préciser le lieu exact permet de préparer le trajet entre Genève et Chamonix-Mont-Blanc dans de bonnes conditions.</p>
                    </article>
                    <article class="tgc-info-card">
                        <span class="tgc-info-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M9 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm8 1a2.5 2.5 0 1 0 0-5M3 19c0-2.8 2.2-5 5-5h2c2.8 0 5 2.2 5 5M16 14c1.7 0 3.3.8 4.3 2.1" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Passagers et bagages</h3>
                        <p>Indiquez le nombre de passagers, les bagages et les équipements spécifiques éventuels lors de la demande. Ces informations permettent d’adapter l’organisation du transfert à votre besoin.</p>
                    </article>
                    <article class="tgc-info-card">
                        <span class="tgc-info-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 19l5-9 4 6 2-3 7 6H3z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M12 4v3M10.5 5.5h3" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Route et conditions saisonnières</h3>
                        <p>Le trajet entre Genève et Chamonix traverse une zone transfrontalière et des routes alpines. La durée peut varier selon la circulation, la météo et les conditions saisonnières.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="tgc-steps" aria-labelledby="tgc-steps-title">
            <div class="container tgc-steps-inner">
                <div>
                    <span class="section-kicker">RÉSERVATION</span>
                    <h2 id="tgc-steps-title">Comment réserver <em>votre transfert ?</em></h2>
                    <p class="tgc-steps-lead">Quelques informations essentielles suffisent pour organiser votre trajet privé entre Genève et la vallée de Chamonix.</p>
                    <a class="btn btn-gold" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">
                        RÉSERVER EN LIGNE
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                </div>
                <ol class="tgc-step-list">
                    <li><span class="tgc-step-num">01</span><div><h3>Lieu de départ</h3><p>Indiquez votre lieu de départ à Genève, à l’aéroport, au centre-ville ou dans la vallée de Chamonix.</p></div></li>
                    <li><span class="tgc-step-num">02</span><div><h3>Destination</h3><p>Précisez votre destination à Genève ou Chamonix-Mont-Blanc, avec l’adresse exacte si possible.</p></div></li>
                    <li><span class="tgc-step-num">03</span><div><h3>Détails du voyage</h3><p>Renseignez la date, l’horaire, le nombre de passagers et les bagages ou équipements à prévoir.</p></div></li>
                    <li><span class="tgc-step-num">04</span><div><h3>Demande en ligne</h3><p>Envoyez votre demande via la réservation en ligne pour organiser votre transfert Genève Chamonix.</p></div></li>
                </ol>
            </div>
        </section>

        <section class="tgc-why" aria-labelledby="tgc-why-title">
            <div class="container">
                <div class="tgc-heading tgc-heading-center">
                    <span class="section-kicker">ALPES TRANSPORT</span>
                    <h2 id="tgc-why-title">Pourquoi choisir Alpes Transport <em>pour ce trajet ?</em></h2>
                </div>
                <div class="tgc-why-grid">
                    <article class="tgc-why-card">
                        <span class="tgc-why-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="3" y="4" width="18" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M16 2v4M8 2v4M3 10h18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Transport privé sur réservation</h3>
                        <p>Votre trajet est organisé à l’avance selon les informations communiquées lors de la demande de réservation.</p>
                    </article>
                    <article class="tgc-why-card">
                        <span class="tgc-why-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M4 12h16M7 8l-4 4 4 4M17 8l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                        <h3>Trajets entre Genève et Chamonix</h3>
                        <p>La page est dédiée aux liaisons entre Genève, l’aéroport de Genève et la vallée de Chamonix-Mont-Blanc, dans les deux sens.</p>
                    </article>
                    <article class="tgc-why-card">
                        <span class="tgc-why-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2M9 5a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Organisation selon votre voyage</h3>
                        <p>Horaire, lieu de rendez-vous, passagers et bagages sont pris en compte pour préparer le transfert de manière claire.</p>
                    </article>
                    <article class="tgc-why-card">
                        <span class="tgc-why-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 19l5-9 4 6 2-3 7 6H3z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg></span>
                        <h3>Confort pour les déplacements alpins</h3>
                        <p>Le trajet entre Genève et Chamonix est préparé avec attention, notamment pour les déplacements vers la vallée et les routes alpines.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="tgc-faq" aria-labelledby="tgc-faq-title">
            <div class="container tgc-faq-inner">
                <div class="tgc-faq-head">
                    <span class="section-kicker">FAQ</span>
                    <h2 id="tgc-faq-title">Questions fréquentes sur le <em>transfert Genève–Chamonix</em></h2>
                </div>
                <div class="tgc-faq-list">
                    <details class="tgc-faq-item">
                        <summary>Peut-on réserver un transfert de Genève vers Chamonix ?</summary>
                        <p>Oui, vous pouvez demander un transfert privé au départ de Genève, notamment depuis l’aéroport ou le centre-ville, vers Chamonix-Mont-Blanc.</p>
                    </details>
                    <details class="tgc-faq-item">
                        <summary>Proposez-vous également le trajet Chamonix vers Genève ?</summary>
                        <p>Oui, le transfert peut aussi être organisé dans le sens Chamonix vers Genève, selon l’adresse de départ, la destination et l’horaire souhaité.</p>
                    </details>
                    <details class="tgc-faq-item">
                        <summary>Quelle est la différence entre Genève Aéroport et Genève Centre ?</summary>
                        <p>Genève Aéroport correspond à une prise en charge ou un dépôt à l’aéroport, tandis que Genève Centre concerne un hôtel, une résidence ou un autre lieu de rendez-vous en ville. Il est important de préciser le point exact lors de la réservation.</p>
                    </details>
                    <details class="tgc-faq-item">
                        <summary>Quelles informations faut-il fournir pour la réservation ?</summary>
                        <p>Il est utile d’indiquer le lieu de départ, la destination, la date, l’horaire, le nombre de passagers et les bagages. Pour un transfert aéroport, vous pouvez également communiquer les informations de vol utiles.</p>
                    </details>
                    <details class="tgc-faq-item">
                        <summary>Peut-on indiquer des bagages ou des équipements spécifiques ?</summary>
                        <p>Oui, vous pouvez mentionner les bagages ou équipements spécifiques lors de votre demande afin que l’organisation du trajet soit préparée en conséquence.</p>
                    </details>
                    <details class="tgc-faq-item">
                        <summary>La durée du trajet est-elle toujours la même ?</summary>
                        <p>Non, la durée du trajet peut varier selon la circulation, la météo et les conditions saisonnières sur l’itinéraire entre Genève et Chamonix.</p>
                    </details>
                </div>
            </div>
        </section>

        <section class="tgc-related" aria-labelledby="tgc-related-title">
            <div class="container tgc-related-inner">
                <div>
                    <span class="section-kicker">LIENS UTILES</span>
                    <h2 id="tgc-related-title">Autres pages <em>utiles</em></h2>
                </div>
                <div class="tgc-related-links">
                    <a class="service-link" href="/transferts-aeroport/">Transferts aéroport <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                    <a class="service-link" href="/nos-services/">Nos services <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                    <a class="service-link" href="/destinations/">Destinations <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                </div>
            </div>
        </section>

        <section class="nos-final-cta final-cta tgc-final-cta" aria-labelledby="tgc-final-cta-title">
            <div class="nos-final-cta-bg" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-hero-mountains.webp')) ?>" alt="" width="1672" height="941" loading="lazy" decoding="async">
            </div>
            <div class="final-cta-overlay" aria-hidden="true"></div>
            <div class="container nos-final-cta-content tgc-final-cta-content">
                <span class="section-kicker">RÉSERVATION</span>
                <h2 id="tgc-final-cta-title">Réserver votre transfert <em>Genève–Chamonix</em></h2>
                <p>Communiquez votre itinéraire, votre date de voyage et les informations utiles pour organiser votre prochain transfert entre Genève et Chamonix-Mont-Blanc.</p>
                <div class="final-cta-actions">
                    <a class="btn btn-gold final-cta-btn" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">
                        RÉSERVER EN LIGNE
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                    <a class="btn btn-outline final-cta-btn-secondary" href="<?= e($config['phone_href']) ?>">Nous appeler</a>
                </div>
            </div>
        </section>
    </main>

    <?php require __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
