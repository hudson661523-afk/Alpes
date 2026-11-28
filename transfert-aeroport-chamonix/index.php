<?php
require_once __DIR__ . '/../lib/helpers.php';
$config = site_config();

$pageTitle = 'Transfert privé Chamonix vers les aéroports | Alpes Transport';
$pageDescription = 'Réservez votre transfert privé Chamonix avec Alpes Transport. Organisez votre trajet sur réservation vers les aéroports de Genève, Lyon et Milan.';
$canonical = 'https://alpestransport.fr/transfert-aeroport-chamonix/';
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
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Transfert privé Chamonix', 'item' => $canonical],
        ],
    ],
];
?>
<!doctype html>
<html lang="fr">
<head>
    <?php require __DIR__ . '/../partials/head.php'; ?>
</head>
<body class="page-transfert-aeroport-chamonix">
    <a class="skip-link" href="#main">Aller au contenu</a>
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main id="main">
        <section class="tac-hero" aria-labelledby="tac-hero-title">
            <div class="tac-hero-media" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-airport-transfer.webp')) ?>" alt="" width="1448" height="1086" fetchpriority="high" decoding="async">
            </div>
            <div class="tac-hero-overlay" aria-hidden="true"></div>
            <div class="container tac-hero-content">
                <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span>TRANSFERTS PRIVÉS &amp; AÉROPORTS</p>
                <h1 class="tac-hero-title" id="tac-hero-title">Transfert privé <em>Chamonix</em></h1>
                <p class="tac-hero-lead">Organisez un transfert privé entre Chamonix-Mont-Blanc et les aéroports desservis, au départ ou à l’arrivée. Alpes Transport vous accompagne pour préparer votre trajet vers Genève, Lyon ou Milan, avec une réservation adaptée à votre itinéraire.</p>
                <div class="hero-actions tac-hero-actions">
                    <a class="btn btn-gold" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">
                        RÉSERVER MON TRANSFERT
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                    <a class="btn btn-outline" href="#tac-liaisons">
                        DÉCOUVRIR LES LIAISONS
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <section class="tac-intro" aria-labelledby="tac-intro-title">
            <div class="container tac-intro-grid">
                <div class="tac-intro-head">
                    <span class="section-kicker">DEPUIS CHAMONIX-MONT-BLANC</span>
                    <h2 id="tac-intro-title">Un service de transfert privé <em>centré sur Chamonix</em></h2>
                    <span class="tac-rule" aria-hidden="true"></span>
                </div>
                <div class="tac-intro-copy">
                    <p>Alpes Transport organise votre transfert privé Chamonix pour les trajets entre la vallée de Chamonix-Mont-Blanc et les principaux aéroports de la région. Que vous arriviez à l’aéroport ou que vous partiez de Chamonix, le trajet est préparé sur réservation selon votre destination, votre horaire et les informations de voyage communiquées.</p>
                    <p>Cette page est dédiée aux transferts aéroport au départ ou à destination de Chamonix, dans les deux sens. Pour les liaisons les plus demandées, vous pouvez consulter les pages dédiées aux trajets vers Genève, Lyon et Milan. Pour une vue d’ensemble, retrouvez également nos <a href="/transferts-aeroport/">transferts depuis les aéroports alpins</a>.</p>
                    <ul class="tac-points" aria-label="Points clés">
                        <li><span class="tac-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 12h18M7 8l-4 4 4 4M17 8l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>Départs et arrivées</li>
                        <li><span class="tac-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M16 2v4M8 2v4M3 10h18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>Transfert sur réservation</li>
                        <li><span class="tac-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 22s7-6 7-12a7 7 0 1 0-14 0c0 6 7 12 7 12Z" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.7"/></svg></span>Itinéraire à préciser</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="tac-airports" id="tac-liaisons" aria-labelledby="tac-airports-title">
            <div class="container">
                <div class="tac-section-head">
                    <span class="section-kicker">LIAISONS AÉROPORTUAIRES</span>
                    <h2 id="tac-airports-title">Les aéroports reliés à <em>Chamonix</em></h2>
                    <p>Des liaisons privées entre Chamonix-Mont-Blanc et les aéroports les plus utilisés pour rejoindre la vallée, avec une organisation adaptée à votre trajet.</p>
                </div>
                <div class="tac-airport-grid">
                    <article class="tac-airport-card">
                        <div class="tac-airport-media">
                            <img src="<?= e(asset('images/alpes-destination-geneve-aeroport.webp')) ?>" alt="Transfert privé entre Chamonix-Mont-Blanc et l’aéroport de Genève" width="1448" height="1086" loading="lazy" decoding="async">
                            <span class="tac-airport-code">GVA</span>
                        </div>
                        <div class="tac-airport-body">
                            <p class="tac-airport-label">Genève · Suisse</p>
                            <h3>Aéroport de Genève (GVA)</h3>
                            <p>Point de passage fréquent pour rejoindre la vallée, l’aéroport de Genève permet d’organiser un transfert privé vers Chamonix-Mont-Blanc, ou dans le sens inverse, selon votre vol et votre adresse.</p>
                            <a class="service-link" href="/transfert-geneve-chamonix/">Découvrir le trajet Genève–Chamonix <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        </div>
                    </article>
                    <article class="tac-airport-card">
                        <div class="tac-airport-media">
                            <img src="<?= e(asset('images/alpes-lyon-saint-exupery-airport.webp')) ?>" alt="Transfert privé entre Chamonix-Mont-Blanc et l’aéroport Lyon-Saint-Exupéry" width="1448" height="1086" loading="lazy" decoding="async">
                            <span class="tac-airport-code">LYS</span>
                        </div>
                        <div class="tac-airport-body">
                            <p class="tac-airport-label">Lyon · France</p>
                            <h3>Aéroport Lyon-Saint-Exupéry (LYS)</h3>
                            <p>Pour un départ ou une arrivée via Lyon, vous pouvez prévoir un transfert privé entre l’aéroport Lyon-Saint-Exupéry et Chamonix. Cette liaison est utile pour les voyageurs reliant la vallée au réseau aérien lyonnais.</p>
                            <a class="service-link" href="/transfert-lyon-chamonix/">Découvrir le trajet Lyon–Chamonix <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        </div>
                    </article>
                    <article class="tac-airport-card">
                        <div class="tac-airport-media">
                            <img src="<?= e(asset('images/alpes-milan-airports.webp')) ?>" alt="Transfert privé entre Chamonix-Mont-Blanc et les aéroports desservant Milan" width="1448" height="1086" loading="lazy" decoding="async">
                            <span class="tac-airport-code">MILAN</span>
                        </div>
                        <div class="tac-airport-body">
                            <p class="tac-airport-label">Milan · Italie</p>
                            <h3>Aéroports desservant Milan</h3>
                            <p>Selon votre itinéraire, un transfert privé peut être envisagé entre Chamonix et les aéroports desservant Milan. Précisez l’aéroport concerné lors de votre demande afin d’organiser le trajet dans les bonnes conditions.</p>
                            <a class="service-link" href="/transfert-milan-chamonix/">Découvrir le trajet Milan–Chamonix <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="tac-prep" aria-labelledby="tac-prep-title">
            <div class="container">
                <div class="tac-section-head tac-center">
                    <span class="section-kicker">PRÉPARER LE TRAJET</span>
                    <h2 id="tac-prep-title">Prise en charge et <em>dépose</em></h2>
                    <p>Quelques informations simples permettent d’organiser plus facilement votre transfert privé entre l’aéroport et Chamonix-Mont-Blanc.</p>
                </div>
                <div class="tac-info-grid">
                    <article class="tac-info-card">
                        <span class="tac-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg></span>
                        <h3>Arrivée à l’aéroport</h3>
                        <p>Indiquez l’aéroport, le terminal si vous le connaissez, l’horaire souhaité et les informations de vol utiles. Pour Genève, vous pouvez consulter le <a href="https://www.gva.ch/fr/" target="_blank" rel="noopener noreferrer">site officiel de l’aéroport de Genève</a>. Pour Lyon, référez-vous au <a href="https://www.lyonaeroports.com/" target="_blank" rel="noopener noreferrer">site de Lyon Aéroport</a>.</p>
                    </article>
                    <article class="tac-info-card">
                        <span class="tac-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 12l2-2 4 4L19 4l2 2-12 12-6-6Z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                        <h3>Départ depuis Chamonix</h3>
                        <p>Pour un transfert vers l’aéroport, précisez votre adresse à Chamonix-Mont-Blanc, la date, l’heure de prise en charge et l’aéroport de destination. Prévoyez une marge adaptée aux conditions de circulation et à votre horaire de vol.</p>
                    </article>
                    <article class="tac-info-card">
                        <span class="tac-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 22s7-6 7-12a7 7 0 1 0-14 0c0 6 7 12 7 12Z" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.7"/></svg></span>
                        <h3>Adresse exacte</h3>
                        <p>Hôtel, résidence, chalet, gare ou adresse privée : communiquer le lieu précis de prise en charge ou de dépose facilite l’organisation du trajet et limite les imprévus le jour du déplacement.</p>
                    </article>
                    <article class="tac-info-card">
                        <span class="tac-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M9 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm8 1a2.5 2.5 0 1 0 0-5M3 19c0-2.8 2.2-5 5-5h2c2.8 0 5 2.2 5 5M16 14c1.7 0 3.3.8 4.3 2.1" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Passagers et besoins</h3>
                        <p>Indiquez le nombre de voyageurs, les bagages et tout besoin particulier à signaler au moment de la demande. Ces éléments permettent de préparer votre transfert privé Chamonix avec les informations utiles.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="tac-practical" aria-labelledby="tac-practical-title">
            <div class="container tac-practical-grid">
                <div class="tac-practical-copy">
                    <span class="section-kicker">INFORMATIONS UTILES</span>
                    <h2 id="tac-practical-title">Voyager vers les aéroports <em>depuis Chamonix</em></h2>
                    <p>Les transferts entre Chamonix-Mont-Blanc et les aéroports de la région impliquent des itinéraires routiers et alpins. Les conditions de circulation, la météo ou la saison peuvent influencer le déroulement du trajet. Il est donc préférable de prévoir une marge adaptée, notamment pour un départ vers l’aéroport.</p>
                    <p>Pour les trajets impliquant Genève ou Milan, le parcours peut inclure un contexte transfrontalier. Pensez à vérifier les documents nécessaires à votre voyage et à communiquer les informations utiles lors de la réservation. Notre équipe organise le transfert sur réservation en fonction des éléments que vous transmettez.</p>
                    <a class="service-link" href="/nos-services/">Découvrir nos services <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                </div>
                <div class="tac-practical-media">
                    <img src="<?= e(asset('images/alpes-hero-mountains.webp')) ?>" alt="Route alpine dans la vallée de Chamonix-Mont-Blanc" width="1672" height="941" loading="lazy" decoding="async">
                </div>
            </div>
        </section>

        <section class="tac-steps" aria-labelledby="tac-steps-title">
            <div class="container tac-steps-grid">
                <div class="tac-steps-copy">
                    <span class="section-kicker">RÉSERVATION</span>
                    <h2 id="tac-steps-title">Comment réserver votre <em>transfert aéroport ?</em></h2>
                    <p>Préparez votre demande en quelques étapes simples pour organiser un trajet privé entre Chamonix-Mont-Blanc et l’aéroport concerné.</p>
                    <a class="btn btn-gold" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">
                        DEMANDER UN TRANSFERT
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                </div>
                <ol class="tac-step-list">
                    <li><span class="tac-step-num">01</span><div><h3>Indiquez votre itinéraire</h3><p>Précisez l’aéroport, Chamonix-Mont-Blanc ou l’adresse exacte de départ et de destination.</p></div></li>
                    <li><span class="tac-step-num">02</span><div><h3>Choisissez votre date et horaire</h3><p>Renseignez la date, l’heure souhaitée et, si nécessaire, les informations utiles liées à votre vol.</p></div></li>
                    <li><span class="tac-step-num">03</span><div><h3>Précisez les passagers et bagages</h3><p>Indiquez le nombre de voyageurs, les bagages et tout équipement spécifique à prévoir.</p></div></li>
                    <li><span class="tac-step-num">04</span><div><h3>Effectuez votre demande de réservation</h3><p>Envoyez votre demande via la réservation en ligne pour organiser votre transfert privé Chamonix.</p></div></li>
                </ol>
            </div>
        </section>

        <section class="tac-why" aria-labelledby="tac-why-title">
            <div class="container">
                <div class="tac-section-head tac-center">
                    <span class="section-kicker">ALPES TRANSPORT</span>
                    <h2 id="tac-why-title">Pourquoi choisir Alpes Transport <em>pour votre transfert ?</em></h2>
                </div>
                <div class="tac-why-grid">
                    <article class="tac-why-card">
                        <span class="tac-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="3" y="4" width="18" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M16 2v4M8 2v4M3 10h18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Transfert privé sur réservation</h3>
                        <p>Votre trajet est organisé à l’avance selon les informations que vous communiquez, pour un déplacement privé entre Chamonix et l’aéroport.</p>
                    </article>
                    <article class="tac-why-card">
                        <span class="tac-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Itinéraire préparé selon votre trajet</h3>
                        <p>L’heure, le lieu de prise en charge, la destination et le contexte du voyage sont pris en compte pour préparer le transfert.</p>
                    </article>
                    <article class="tac-why-card">
                        <span class="tac-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                        <h3>Informations communiquées avant le départ</h3>
                        <p>Les détails essentiels du trajet sont clarifiés lors de la demande afin de faciliter la prise en charge à l’aéroport ou à Chamonix.</p>
                    </article>
                    <article class="tac-why-card">
                        <span class="tac-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 19l5-9 4 6 2-3 7 6H3z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/></svg></span>
                        <h3>Organisation adaptée à votre demande</h3>
                        <p>Passagers, bagages, adresse et sens du trajet sont pris en compte pour répondre à votre besoin de transfert aéroport.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="tac-faq" aria-labelledby="tac-faq-title">
            <div class="container tac-faq-grid">
                <div class="tac-faq-head">
                    <span class="section-kicker">FAQ</span>
                    <h2 id="tac-faq-title">Questions fréquentes sur le <em>transfert aéroport</em></h2>
                </div>
                <div class="tac-faq-list">
                    <details class="tac-faq-item">
                        <summary>Quels aéroports sont desservis pour un transfert privé Chamonix ?</summary>
                        <p>Les liaisons les plus demandées concernent l’aéroport de Genève, l’aéroport Lyon-Saint-Exupéry et les aéroports desservant Milan. Pour un autre aéroport, vous pouvez préciser votre itinéraire lors de la demande de réservation.</p>
                    </details>
                    <details class="tac-faq-item">
                        <summary>Peut-on réserver un transfert au départ ou à l’arrivée de Chamonix ?</summary>
                        <p>Oui, le transfert peut être organisé dans les deux sens : depuis un aéroport vers Chamonix-Mont-Blanc, ou depuis Chamonix vers l’aéroport de votre départ.</p>
                    </details>
                    <details class="tac-faq-item">
                        <summary>Quelles informations faut-il fournir pour organiser un transfert aéroport ?</summary>
                        <p>Il est utile d’indiquer la date, l’horaire, le lieu de prise en charge, la destination, le nombre de passagers, les bagages et, si nécessaire, les informations de vol utiles.</p>
                    </details>
                    <details class="tac-faq-item">
                        <summary>Peut-on réserver un transfert entre Chamonix et Genève, Lyon ou Milan ?</summary>
                        <p>Oui, ces liaisons font partie des trajets aéroportuaires les plus fréquents depuis Chamonix. Des pages dédiées présentent également les trajets Genève–Chamonix, Lyon–Chamonix et Milan–Chamonix.</p>
                    </details>
                    <details class="tac-faq-item">
                        <summary>Peut-on indiquer des bagages ou des équipements spécifiques lors de la réservation ?</summary>
                        <p>Oui, vous pouvez mentionner les bagages ou équipements spécifiques lors de votre demande afin que l’organisation du transfert soit préparée en conséquence.</p>
                    </details>
                    <details class="tac-faq-item">
                        <summary>Le trajet peut-il varier selon les conditions de route ?</summary>
                        <p>Oui, la durée et le déroulement du trajet peuvent varier selon la circulation, la météo et les conditions saisonnières, notamment sur les itinéraires alpins.</p>
                    </details>
                </div>
            </div>
        </section>

        <section class="tac-related" aria-labelledby="tac-related-title">
            <div class="container tac-related-inner">
                <div>
                    <span class="section-kicker">LIENS UTILES</span>
                    <h2 id="tac-related-title">Autres pages <em>utiles</em></h2>
                </div>
                <div class="tac-related-links">
                    <a class="service-link" href="/transferts-aeroport/">Transferts aéroport <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                    <a class="service-link" href="/transfert-geneve-chamonix/">Trajet Genève–Chamonix <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                    <a class="service-link" href="/transfert-lyon-chamonix/">Trajet Lyon–Chamonix <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                    <a class="service-link" href="/transfert-milan-chamonix/">Trajet Milan–Chamonix <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                    <a class="service-link" href="/destinations/">Destinations <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                </div>
            </div>
        </section>

        <section class="nos-final-cta final-cta tac-final-cta" aria-labelledby="tac-final-cta-title">
            <div class="nos-final-cta-bg" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-hero-mountains.webp')) ?>" alt="" width="1672" height="941" loading="lazy" decoding="async">
            </div>
            <div class="final-cta-overlay" aria-hidden="true"></div>
            <div class="container nos-final-cta-content tac-final-cta-content">
                <span class="section-kicker">RÉSERVATION</span>
                <h2 id="tac-final-cta-title">Réserver votre transfert privé <em>depuis Chamonix</em></h2>
                <p>Communiquez votre itinéraire, votre date, l’aéroport concerné et les informations utiles pour organiser votre transfert privé entre Chamonix-Mont-Blanc et l’aéroport de votre choix.</p>
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
