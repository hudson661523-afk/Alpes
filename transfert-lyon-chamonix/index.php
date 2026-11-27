<?php
require_once __DIR__ . '/../lib/helpers.php';
$config = site_config();

$pageTitle = 'Transfert Lyon Chamonix | Alpes Transport';
$pageDescription = 'Réservez votre transfert Lyon Chamonix avec Alpes Transport : trajet privé entre l’aéroport Lyon-Saint-Exupéry, Lyon et la vallée de Chamonix, sur réservation.';
$canonical = 'https://alpestransport.fr/transfert-lyon-chamonix/';
$ogImage = 'https://alpestransport.fr' . asset('images/alpes-lyon-saint-exupery-airport.webp');
$ogType = 'website';
$preloadImage = asset('images/alpes-lyon-saint-exupery-airport.webp');
$activeNav = 'services';

$schemaExtra = [
    [
        '@type' => 'BreadcrumbList',
        '@id' => $canonical . '#breadcrumb',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => 'https://alpestransport.fr/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Transfert Lyon Chamonix', 'item' => $canonical],
        ],
    ],
];
?>
<!doctype html>
<html lang="fr">
<head>
    <?php require __DIR__ . '/../partials/head.php'; ?>
</head>
<body class="page-transfert-lyon-chamonix">
    <a class="skip-link" href="#main">Aller au contenu</a>
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main id="main">
        <section class="tlc-hero" aria-labelledby="tlc-hero-title">
            <div class="container tlc-hero-grid">
                <div class="tlc-hero-copy">
                    <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span>TRANSFERT LYON – CHAMONIX</p>
                    <h1 class="tlc-hero-title" id="tlc-hero-title">Transfert <em>Lyon Chamonix</em></h1>
                    <p class="tlc-hero-lead">Organisez votre transfert privé entre Lyon et Chamonix-Mont-Blanc avec Alpes Transport. Depuis l’aéroport Lyon-Saint-Exupéry ou le centre-ville de Lyon, réservez un trajet vers la vallée de Chamonix, ou dans le sens inverse, selon votre itinéraire.</p>
                    <div class="hero-actions tlc-hero-actions">
                        <a class="btn btn-gold" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">
                            RÉSERVER MON TRANSFERT
                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                        </a>
                        <a class="btn btn-outline" href="#trajets-lyon-chamonix">
                            DÉCOUVRIR LES TRAJETS
                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                        </a>
                    </div>
                    <ul class="tlc-hero-points" aria-label="Points clés">
                        <li>Aller et retour</li>
                        <li>LYS ou Lyon centre</li>
                        <li>Sur réservation</li>
                    </ul>
                </div>
                <div class="tlc-hero-visual">
                    <figure class="tlc-hero-figure">
                        <img src="<?= e(asset('images/alpes-lyon-saint-exupery-airport.webp')) ?>" alt="Véhicule premium pour un transfert privé à l’aéroport Lyon-Saint-Exupéry" width="1448" height="1086" fetchpriority="high" decoding="async">
                        <figcaption class="tlc-hero-caption">
                            <span class="tlc-caption-kicker">AÉROPORT LYON-SAINT-EXUPÉRY</span>
                            <span class="tlc-caption-text">Un trajet privé vers la vallée de Chamonix-Mont-Blanc</span>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <section class="tlc-intro" id="trajets-lyon-chamonix" aria-labelledby="tlc-intro-title">
            <div class="container tlc-intro-grid">
                <div class="tlc-intro-head">
                    <span class="section-kicker">LYON &amp; CHAMONIX-MONT-BLANC</span>
                    <h2 id="tlc-intro-title">Votre trajet privé entre<br><em>Lyon et Chamonix-Mont-Blanc</em></h2>
                    <span class="tlc-rule" aria-hidden="true"></span>
                    <p class="tlc-intro-lead">Alpes Transport organise des transferts privés entre Lyon et Chamonix-Mont-Blanc, dans les deux sens. Vous pouvez partir de l’aéroport Lyon-Saint-Exupéry, du centre-ville de Lyon ou de la vallée de Chamonix, en précisant votre adresse de prise en charge, votre destination, la date, l’horaire, le nombre de passagers et les bagages à prévoir.</p>
                    <p class="tlc-intro-lead">Ce trajet régional relie la métropole lyonnaise aux Alpes françaises en traversant la Savoie et en remontant vers la vallée de Chamonix. La durée du parcours peut varier selon la circulation, la météo et les conditions saisonnières. En communiquant vos informations de voyage à l’avance, vous facilitez l’organisation de votre transfert Lyon Chamonix ou Chamonix Lyon.</p>
                    <ul class="tlc-intro-points" aria-label="Points clés">
                        <li><span class="tlc-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 12h18M7 8l-4 4 4 4M17 8l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>Aller et retour</li>
                        <li><span class="tlc-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 22s7-6 7-12a7 7 0 1 0-14 0c0 6 7 12 7 12Z" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.7"/></svg></span>Aéroport ou centre-ville</li>
                        <li><span class="tlc-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M16 2v4M8 2v4M3 10h18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>Sur réservation</li>
                    </ul>
                </div>
                <div class="tlc-intro-copy">
                    <figure class="tlc-intro-figure">
                        <img src="<?= e(asset('images/alpes-airport-transfer.webp')) ?>" alt="Véhicule premium pour un transfert privé entre Lyon et Chamonix-Mont-Blanc" width="1448" height="1086" loading="lazy" decoding="async">
                    </figure>
                </div>
            </div>
        </section>

        <section class="tlc-routes" aria-labelledby="tlc-routes-title">
            <div class="container">
                <div class="tlc-section-head">
                    <span class="section-kicker">TRAJETS PRINCIPAUX</span>
                    <h2 id="tlc-routes-title">Les trajets <em>Lyon–Chamonix</em></h2>
                    <p>Trois points de départ fréquents pour organiser un transfert privé entre Lyon, l’aéroport Lyon-Saint-Exupéry et la vallée de Chamonix.</p>
                </div>

                <article class="tlc-feature">
                    <div class="tlc-feature-media">
                        <img src="<?= e(asset('images/alpes-lyon-saint-exupery-airport.webp')) ?>" alt="Véhicule premium pour un transfert privé à l’aéroport Lyon-Saint-Exupéry" width="1448" height="1086" loading="lazy" decoding="async">
                        <span class="tlc-feature-tag">LYS</span>
                    </div>
                    <div class="tlc-feature-body">
                        <p class="tlc-feature-label">Aéroport Lyon-Saint-Exupéry</p>
                        <h3>Transfert Aéroport Lyon-Saint-Exupéry – Chamonix</h3>
                        <p>Organisez votre trajet privé entre l’aéroport Lyon-Saint-Exupéry et Chamonix-Mont-Blanc, pour un départ ou une arrivée. Précisez votre horaire, les informations de vol utiles et votre adresse de prise en charge lors de la réservation.</p>
                        <ul class="tlc-feature-list">
                            <li>Départ ou arrivée à LYS</li>
                            <li>Adresse de destination à Chamonix-Mont-Blanc</li>
                            <li>Informations de voyage communiquées à l’avance</li>
                        </ul>
                    </div>
                </article>

                <article class="tlc-feature tlc-feature-reverse">
                    <div class="tlc-feature-media">
                        <img src="<?= e(asset('images/alpes-lyon-centre-chamonix.webp')) ?>" alt="Transfert privé entre Lyon centre et Chamonix-Mont-Blanc" width="1448" height="1086" loading="lazy" decoding="async">
                        <span class="tlc-feature-tag">LYON CENTRE</span>
                    </div>
                    <div class="tlc-feature-body">
                        <p class="tlc-feature-label">Centre-ville de Lyon</p>
                        <h3>Transfert Lyon Centre – Chamonix</h3>
                        <p>Depuis un hôtel, une gare, une résidence ou un lieu de rendez-vous à Lyon, Alpes Transport organise votre trajet privé vers Chamonix-Mont-Blanc. Communiquez l’adresse exacte et l’horaire souhaité pour préparer votre déplacement.</p>
                        <ul class="tlc-feature-list">
                            <li>Prise en charge à l’adresse indiquée</li>
                            <li>Trajet vers Chamonix ou retour vers Lyon</li>
                            <li>Horaire défini lors de la réservation</li>
                        </ul>
                    </div>
                </article>

                <article class="tlc-feature">
                    <div class="tlc-feature-media">
                        <img src="<?= e(asset('images/alpes-destination-vallee-chamonix.webp')) ?>" alt="Vallée de Chamonix-Mont-Blanc, destination des transferts depuis Lyon" width="1448" height="1086" loading="lazy" decoding="async">
                        <span class="tlc-feature-tag">CHAMONIX</span>
                    </div>
                    <div class="tlc-feature-body">
                        <p class="tlc-feature-label">Vallée de Chamonix</p>
                        <h3>Transfert vers la Vallée de Chamonix</h3>
                        <p>Votre destination peut se situer à Chamonix centre, aux Houches, à Argentière ou à Servoz. Précisez le lieu exact de votre arrivée afin de préparer le trajet depuis Lyon selon votre itinéraire.</p>
                        <ul class="tlc-feature-list">
                            <li>Chamonix centre, Les Houches, Argentière, Servoz</li>
                            <li>Adresse précise recommandée</li>
                            <li>Organisation adaptée à votre itinéraire</li>
                        </ul>
                    </div>
                </article>
            </div>
        </section>

        <section class="tlc-practical" aria-labelledby="tlc-practical-title">
            <div class="container">
                <div class="tlc-section-head tlc-center">
                    <span class="section-kicker">INFORMATIONS PRATIQUES</span>
                    <h2 id="tlc-practical-title">Préparer votre trajet <em>entre Lyon et Chamonix</em></h2>
                </div>
                <div class="tlc-practical-grid">
                    <article class="tlc-info-card">
                        <span class="tlc-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg></span>
                        <h3>Arrivée ou départ aéroport</h3>
                        <p>Pour un transfert aéroport Lyon Chamonix, indiquez l’horaire souhaité et les informations de vol utiles. Pour un départ depuis Chamonix, précisez l’heure de prise en charge et le terminal ou l’adresse à Lyon.</p>
                    </article>
                    <article class="tlc-info-card">
                        <span class="tlc-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 22s7-6 7-12a7 7 0 1 0-14 0c0 6 7 12 7 12Z" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.7"/></svg></span>
                        <h3>Adresse à Lyon ou à Chamonix</h3>
                        <p>La prise en charge peut se faire à l’aéroport Lyon-Saint-Exupéry, en centre-ville de Lyon, dans un hôtel, une gare, une résidence ou à une adresse dans la vallée de Chamonix.</p>
                    </article>
                    <article class="tlc-info-card">
                        <span class="tlc-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M9 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm8 1a2.5 2.5 0 1 0 0-5M3 19c0-2.8 2.2-5 5-5h2c2.8 0 5 2.2 5 5M16 14c1.7 0 3.3.8 4.3 2.1" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Passagers, bagages et équipements</h3>
                        <p>Précisez le nombre de passagers, les bagages et les équipements spécifiques tels que du matériel de ski. Ces informations permettent de préparer le transfert dans de bonnes conditions.</p>
                    </article>
                    <article class="tlc-info-card">
                        <span class="tlc-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 19l5-9 4 6 2-3 7 6H3z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M12 4v3M10.5 5.5h3" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Trafic et conditions saisonnières</h3>
                        <p>Le trajet entre Lyon et Chamonix traverse des axes routiers et alpins dont les conditions peuvent évoluer. La durée varie selon la circulation, la météo et la saison.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="tlc-booking" aria-labelledby="tlc-booking-title">
            <div class="container tlc-booking-grid">
                <div class="tlc-booking-copy">
                    <span class="section-kicker">RÉSERVATION</span>
                    <h2 id="tlc-booking-title">Comment réserver votre <em>transfert Lyon–Chamonix ?</em></h2>
                    <p>Transmettez les informations essentielles de votre trajet pour organiser votre demande de transfert privé entre Lyon et Chamonix-Mont-Blanc.</p>
                    <a class="btn btn-gold" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">
                        RÉSERVER EN LIGNE
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                </div>
                <ol class="tlc-steps">
                    <li><span class="tlc-step-num">01</span><div><h3>Lieu de départ</h3><p>Indiquez votre lieu de départ à Lyon, à l’aéroport Lyon-Saint-Exupéry ou dans la vallée de Chamonix.</p></div></li>
                    <li><span class="tlc-step-num">02</span><div><h3>Destination</h3><p>Précisez votre destination, avec l’adresse exacte à Lyon ou à Chamonix-Mont-Blanc.</p></div></li>
                    <li><span class="tlc-step-num">03</span><div><h3>Informations de voyage</h3><p>Renseignez la date, l’heure, le nombre de passagers et les bagages ou équipements à prévoir.</p></div></li>
                    <li><span class="tlc-step-num">04</span><div><h3>Demande de réservation</h3><p>Envoyez votre demande de réservation en ligne pour organiser votre transfert Lyon Chamonix.</p></div></li>
                </ol>
            </div>
        </section>

        <section class="tlc-why" aria-labelledby="tlc-why-title">
            <div class="container">
                <div class="tlc-section-head tlc-center">
                    <span class="section-kicker">ALPES TRANSPORT</span>
                    <h2 id="tlc-why-title">Pourquoi choisir Alpes Transport <em>pour votre trajet ?</em></h2>
                </div>
                <div class="tlc-why-grid">
                    <article class="tlc-why-card">
                        <span class="tlc-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="3" y="4" width="18" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M16 2v4M8 2v4M3 10h18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Transport privé sur réservation</h3>
                        <p>Votre trajet est organisé selon les informations transmises lors de votre demande, pour un déplacement privé entre Lyon et Chamonix.</p>
                    </article>
                    <article class="tlc-why-card">
                        <span class="tlc-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Organisation selon votre itinéraire</h3>
                        <p>L’horaire, l’adresse de prise en charge et la destination sont pris en compte pour préparer le transfert selon votre programme.</p>
                    </article>
                    <article class="tlc-why-card">
                        <span class="tlc-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 19l5-9 4 6 2-3 7 6H3z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg></span>
                        <h3>Confort pour un trajet vers les Alpes</h3>
                        <p>Le parcours entre Lyon et la vallée de Chamonix est un trajet longue distance vers les Alpes, à prévoir avec les conditions de route.</p>
                    </article>
                    <article class="tlc-why-card">
                        <span class="tlc-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2M9 5a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Informations préparées à l’avance</h3>
                        <p>Les détails de prise en charge, passagers et bagages communiqués en amont facilitent l’organisation de votre transfert.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="tlc-faq" aria-labelledby="tlc-faq-title">
            <div class="container tlc-faq-grid">
                <div class="tlc-faq-head">
                    <span class="section-kicker">FAQ</span>
                    <h2 id="tlc-faq-title">Questions fréquentes sur le <em>transfert Lyon–Chamonix</em></h2>
                </div>
                <div class="tlc-faq-list">
                    <details class="tlc-faq-item">
                        <summary>Peut-on réserver un transfert de Lyon vers Chamonix ?</summary>
                        <p>Oui, vous pouvez demander un transfert privé au départ de Lyon, notamment depuis l’aéroport Lyon-Saint-Exupéry ou le centre-ville, vers Chamonix-Mont-Blanc.</p>
                    </details>
                    <details class="tlc-faq-item">
                        <summary>Proposez-vous le trajet Chamonix vers Lyon ?</summary>
                        <p>Oui, le transfert peut aussi être organisé dans le sens Chamonix vers Lyon, selon l’adresse de départ, la destination et l’horaire souhaité.</p>
                    </details>
                    <details class="tlc-faq-item">
                        <summary>Quelle est la différence entre Lyon Aéroport et Lyon Centre ?</summary>
                        <p>Lyon Aéroport correspond à une prise en charge ou un dépôt à l’aéroport Lyon-Saint-Exupéry, tandis que Lyon Centre concerne un hôtel, une gare, une résidence ou un autre lieu de rendez-vous en ville. Il est important de préciser le point exact lors de la réservation.</p>
                    </details>
                    <details class="tlc-faq-item">
                        <summary>Quelles informations faut-il fournir pour réserver ?</summary>
                        <p>Il est utile d’indiquer le lieu de départ, la destination, la date, l’heure, le nombre de passagers et les bagages. Pour un transfert aéroport, vous pouvez également communiquer les informations de vol utiles.</p>
                    </details>
                    <details class="tlc-faq-item">
                        <summary>Peut-on préciser les bagages ou équipements de ski ?</summary>
                        <p>Oui, vous pouvez mentionner les bagages ou équipements de ski lors de votre demande afin que l’organisation du transfert soit préparée en conséquence.</p>
                    </details>
                    <details class="tlc-faq-item">
                        <summary>La durée du trajet Lyon–Chamonix est-elle fixe ?</summary>
                        <p>Non, la durée du trajet peut varier selon la circulation, la météo et les conditions saisonnières sur l’itinéraire entre Lyon et Chamonix.</p>
                    </details>
                </div>
            </div>
        </section>

        <section class="tlc-related" aria-labelledby="tlc-related-title">
            <div class="container tlc-related-inner">
                <div>
                    <span class="section-kicker">LIENS UTILES</span>
                    <h2 id="tlc-related-title">Autres pages <em>utiles</em></h2>
                </div>
                <div class="tlc-related-links">
                    <a class="service-link" href="/transferts-aeroport/">Transferts aéroport <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                    <a class="service-link" href="/nos-services/">Nos services <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                    <a class="service-link" href="/destinations/">Destinations <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                </div>
            </div>
        </section>

        <section class="nos-final-cta final-cta tlc-final-cta" aria-labelledby="tlc-final-cta-title">
            <div class="nos-final-cta-bg" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-hero-mountains.webp')) ?>" alt="" width="1672" height="941" loading="lazy" decoding="async">
            </div>
            <div class="final-cta-overlay" aria-hidden="true"></div>
            <div class="container nos-final-cta-content tlc-final-cta-content">
                <span class="section-kicker">RÉSERVATION</span>
                <h2 id="tlc-final-cta-title">Réserver votre transfert <em>Lyon–Chamonix</em></h2>
                <p>Communiquez votre itinéraire, votre date de voyage et les informations utiles pour organiser votre prochain trajet entre Lyon et Chamonix-Mont-Blanc.</p>
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
