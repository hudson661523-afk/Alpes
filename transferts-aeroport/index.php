<?php
require_once __DIR__ . '/../lib/helpers.php';
$config = site_config();

$pageTitle = 'Transfert aéroport Chamonix | Alpes Transport';
$pageDescription = 'Organisez votre transfert aéroport à Chamonix vers Genève, Lyon, Milan et les Alpes avec Alpes Transport, chauffeur privé sur réservation.';
$canonical = 'https://alpestransport.fr/transferts-aeroport/';
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
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Transferts Aéroport', 'item' => $canonical],
        ],
    ],
];
?>
<!doctype html>
<html lang="fr">
<head>
    <?php require __DIR__ . '/../partials/head.php'; ?>
</head>
<body class="page-transferts-aeroport">
    <a class="skip-link" href="#main">Aller au contenu</a>
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main id="main">
        <section class="ta-hero" aria-labelledby="ta-hero-title">
            <div class="ta-hero-media" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-airport-transfer.webp')) ?>" alt="" width="1448" height="1086" fetchpriority="high" decoding="async">
            </div>
            <div class="ta-hero-overlay" aria-hidden="true"></div>
            <div class="container ta-hero-content">
                <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span>TRANSFERTS AÉROPORT</p>
                <h1 class="ta-hero-title" id="ta-hero-title">Transfert aéroport <em>à Chamonix</em></h1>
                <p class="ta-hero-lead">Organisez votre transfert privé entre Chamonix-Mont-Blanc et les aéroports desservis, notamment Genève, Lyon et Milan. Alpes Transport vous accompagne pour vos départs et vos arrivées, avec un trajet sur réservation adapté à votre itinéraire.</p>
                <div class="hero-actions ta-hero-actions">
                    <a class="btn btn-gold" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">
                        RÉSERVER UN TRANSFERT
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                    <a class="btn btn-outline" href="#aeroports-desservis">
                        VOIR LES AÉROPORTS
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <section class="ta-intro" aria-labelledby="ta-intro-title">
            <div class="container ta-intro-inner">
                <div class="ta-intro-lead">
                    <span class="section-kicker">DEPUIS CHAMONIX-MONT-BLANC</span>
                    <h2 id="ta-intro-title">Votre transfert aéroport <em>depuis Chamonix-Mont-Blanc</em></h2>
                    <span class="ta-intro-rule" aria-hidden="true"></span>
                </div>
                <div class="ta-intro-copy">
                    <p>Alpes Transport organise des transferts privés vers les aéroports desservis depuis la vallée de Chamonix, aussi bien pour un départ que pour une arrivée. Chaque trajet est préparé sur réservation, en fonction de votre lieu de prise en charge, de votre destination et des informations liées à votre voyage.</p>
                    <p>Que vous voyagiez seul, en famille ou en groupe, vous pouvez demander un transport adapté à votre itinéraire entre Chamonix-Mont-Blanc et les aéroports de la région alpine. L’objectif est de vous proposer un trajet clair, confortable et organisé selon vos besoins.</p>
                    <ul class="ta-intro-points" aria-label="Points clés">
                        <li><span class="ta-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 12h18M7 8l-4 4 4 4M17 8l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>Départs et arrivées</li>
                        <li><span class="ta-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M8.5 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>Voyageurs, familles et groupes</li>
                        <li><span class="ta-point-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M16 2v4M8 2v4M3 10h18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>Trajet sur réservation</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="ta-airports" id="aeroports-desservis" aria-labelledby="ta-airports-title">
            <div class="container">
                <div class="ta-heading">
                    <div>
                        <span class="section-kicker">AÉROPORTS DESSERVIS</span>
                        <h2 id="ta-airports-title">Aéroports desservis <em>depuis Chamonix</em></h2>
                    </div>
                    <p>Trois destinations aéroportuaires principales, avec un lien direct vers les pages de transfert dédiées pour préparer votre trajet.</p>
                </div>

                <div class="ta-airport-grid">
                    <article class="ta-airport-card">
                        <div class="ta-airport-media">
                            <img src="<?= e(asset('images/alpes-destination-geneve-aeroport.webp')) ?>" alt="Transfert privé entre Chamonix et l’aéroport de Genève" width="1448" height="1086" loading="lazy" decoding="async">
                            <span class="ta-airport-code">GVA</span>
                        </div>
                        <div class="ta-airport-body">
                            <p class="ta-airport-label">Genève · Suisse</p>
                            <h3>Aéroport de Genève (GVA)</h3>
                            <p>Depuis Chamonix-Mont-Blanc, organisez un transfert privé vers l’aéroport de Genève ou une prise en charge après votre arrivée. Précisez votre vol, le lieu de rendez-vous et les informations utiles à votre réservation.</p>
                            <a class="service-link" href="https://alpestransport.fr/transfert-geneve-chamonix/">
                                Voir le transfert Genève
                                <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                            </a>
                        </div>
                    </article>

                    <article class="ta-airport-card">
                        <div class="ta-airport-media ta-airport-visual">
                            <div class="ta-visual-panel" aria-hidden="true">
                                <div class="ta-visual-lines"></div>
                                <svg class="ta-visual-plane" viewBox="0 0 24 24" focusable="false"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5Z" fill="currentColor"/></svg>
                                <span class="ta-visual-code">LYS</span>
                                <span class="ta-visual-name">Lyon-Saint-Exupéry</span>
                            </div>
                            <span class="ta-airport-code">LYS</span>
                        </div>
                        <div class="ta-airport-body">
                            <p class="ta-airport-label">Lyon · France</p>
                            <h3>Aéroport de Lyon-Saint-Exupéry (LYS)</h3>
                            <p>Planifiez votre trajet privé entre Chamonix et l’aéroport de Lyon-Saint-Exupéry. Communiquez votre lieu de départ, la date et l’horaire souhaités afin de préparer votre transfert.</p>
                            <a class="service-link" href="https://alpestransport.fr/transfert-lyon-chamonix/">
                                Voir le transfert Lyon
                                <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                            </a>
                        </div>
                    </article>

                    <article class="ta-airport-card">
                        <div class="ta-airport-media ta-airport-visual">
                            <div class="ta-visual-panel" aria-hidden="true">
                                <div class="ta-visual-lines"></div>
                                <svg class="ta-visual-plane" viewBox="0 0 24 24" focusable="false"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5Z" fill="currentColor"/></svg>
                                <span class="ta-visual-code">MILAN</span>
                                <span class="ta-visual-name">Aéroports desservis</span>
                            </div>
                            <span class="ta-airport-code">MILAN</span>
                        </div>
                        <div class="ta-airport-body">
                            <p class="ta-airport-label">Milan · Italie</p>
                            <h3>Aéroports de Milan</h3>
                            <p>Alpes Transport propose des trajets privés entre Chamonix et Milan pour vos déplacements vers les aéroports desservis. Précisez l’aéroport concerné lors de votre demande de réservation.</p>
                            <a class="service-link" href="https://alpestransport.fr/transfert-milan-chamonix/">
                                Voir le transfert Milan
                                <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="ta-benefits" aria-labelledby="ta-benefits-title">
            <div class="container">
                <div class="ta-heading ta-heading-center">
                    <span class="section-kicker">ORGANISATION DU TRAJET</span>
                    <h2 id="ta-benefits-title">Un trajet organisé <em>selon votre voyage</em></h2>
                </div>
                <div class="ta-benefits-grid">
                    <article class="ta-benefit-card">
                        <span class="ta-benefit-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="8.5" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Prise en charge selon votre horaire</h3>
                        <p>Votre transfert est préparé en fonction de l’heure de départ, d’arrivée et des informations que vous communiquez lors de la réservation.</p>
                    </article>
                    <article class="ta-benefit-card">
                        <span class="ta-benefit-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M4 12h16M7 8l-4 4 4 4M17 8l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                        <h3>Trajet privé entre les lieux convenus</h3>
                        <p>Le transport s’effectue entre votre point de prise en charge et l’aéroport ou la destination indiquée, selon l’itinéraire prévu.</p>
                    </article>
                    <article class="ta-benefit-card">
                        <span class="ta-benefit-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M9 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm8 1a2.5 2.5 0 1 0 0-5M3 19c0-2.8 2.2-5 5-5h2c2.8 0 5 2.2 5 5M16 14c1.7 0 3.3.8 4.3 2.1" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Informations sur les passagers et bagages</h3>
                        <p>Indiquez le nombre de personnes et les bagages prévus afin que votre demande de transfert soit préparée avec les bons éléments.</p>
                    </article>
                    <article class="ta-benefit-card">
                        <span class="ta-benefit-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 19l5-9 4 6 2-3 7 6H3z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M12 4v3M10.5 5.5h3" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                        <h3>Déplacements depuis la vallée de Chamonix</h3>
                        <p>Les transferts sont organisés depuis Chamonix-Mont-Blanc et la vallée, avec une connaissance des itinéraires alpins et des liaisons routières.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="ta-steps" aria-labelledby="ta-steps-title">
            <div class="container ta-steps-inner">
                <div>
                    <span class="section-kicker">RÉSERVATION</span>
                    <h2 id="ta-steps-title">Comment organiser <em>votre transfert aéroport ?</em></h2>
                    <p class="ta-steps-lead">Quelques informations suffisent pour préparer votre demande de transfert et faciliter l’organisation de votre trajet vers ou depuis l’aéroport.</p>
                    <a class="btn btn-gold" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">
                        DEMANDER UN TRANSFERT
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                </div>
                <ol class="ta-step-list">
                    <li><span class="ta-step-num">01</span><div><h3>Départ et destination</h3><p>Indiquez votre lieu de départ et l’aéroport ou la destination concernée.</p></div></li>
                    <li><span class="ta-step-num">02</span><div><h3>Date, horaire et vol</h3><p>Précisez la date, l’horaire souhaité et, si nécessaire, les informations de vol.</p></div></li>
                    <li><span class="ta-step-num">03</span><div><h3>Passagers et bagages</h3><p>Renseignez le nombre de passagers ainsi que les bagages ou équipements à prévoir.</p></div></li>
                    <li><span class="ta-step-num">04</span><div><h3>Demande de réservation</h3><p>Envoyez votre demande via le système de réservation existant pour organiser votre transfert.</p></div></li>
                </ol>
            </div>
        </section>

        <section class="ta-practical" aria-labelledby="ta-practical-title">
            <div class="container ta-practical-inner">
                <div class="ta-practical-media">
                    <img src="<?= e(asset('images/alpes-hero-mountains.webp')) ?>" alt="Paysage alpin près de Chamonix-Mont-Blanc" width="1672" height="941" loading="lazy" decoding="async">
                </div>
                <div class="ta-practical-copy">
                    <span class="section-kicker">INFORMATIONS UTILES</span>
                    <h2 id="ta-practical-title">Préparer votre trajet <em>vers l’aéroport</em></h2>
                    <p>Avant votre départ, vérifiez l’aéroport concerné, le terminal si vous le connaissez, ainsi que l’heure souhaitée pour la prise en charge. Ces informations permettent d’organiser un transfert adapté à votre itinéraire.</p>
                    <p>Pour une arrivée, indiquez le lieu de rendez-vous, le nombre de passagers et le volume de bagages. Si vous voyagez avec des équipements spécifiques, mentionnez-les lors de votre demande afin de préparer le trajet dans de bonnes conditions.</p>
                    <div class="ta-practical-links">
                        <a class="service-link" href="/nos-services/">Découvrir nos services <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        <a class="service-link" href="/destinations/">Voir les destinations <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="ta-why" aria-labelledby="ta-why-title">
            <div class="container">
                <div class="ta-heading ta-heading-center">
                    <span class="section-kicker">ALPES TRANSPORT</span>
                    <h2 id="ta-why-title">Pourquoi choisir <em>Alpes Transport ?</em></h2>
                </div>
                <div class="ta-why-grid">
                    <article class="ta-why-card"><h3>Organisation selon votre voyage</h3><p>Chaque transfert est préparé en fonction des informations que vous fournissez : lieu de prise en charge, destination, horaire et contexte du trajet.</p></article>
                    <article class="ta-why-card"><h3>Liaisons privées directes</h3><p>Votre trajet s’effectue en transport privé entre les points convenus, sans correspondance imposée pendant le transfert.</p></article>
                    <article class="ta-why-card"><h3>Confort pour les trajets longue distance</h3><p>Les trajets entre Chamonix et les aéroports de la région demandent du confort, notamment lorsque vous voyagez avec des bagages.</p></article>
                    <article class="ta-why-card"><h3>Connaissance des routes alpines</h3><p>Basés à Chamonix-Mont-Blanc, nous organisons des déplacements sur les axes reliant la vallée aux principaux aéroports de la région.</p></article>
                </div>
            </div>
        </section>

        <section class="ta-faq" aria-labelledby="ta-faq-title">
            <div class="container ta-faq-inner">
                <div class="ta-faq-head">
                    <span class="section-kicker">QUESTIONS FRÉQUENTES</span>
                    <h2 id="ta-faq-title">Informations utiles avant <em>votre réservation</em></h2>
                </div>
                <div class="ta-faq-list">
                    <details class="ta-faq-item">
                        <summary>Quels aéroports sont présentés sur cette page ?</summary>
                        <p>Cette page présente principalement les transferts vers l’aéroport de Genève, l’aéroport de Lyon-Saint-Exupéry et les aéroports de Milan. Pour toute autre destination aéroportuaire, précisez votre demande lors de la réservation.</p>
                    </details>
                    <details class="ta-faq-item">
                        <summary>Comment demander un transfert aéroport ?</summary>
                        <p>Vous pouvez envoyer votre demande via la page de réservation en ligne en indiquant votre lieu de départ, votre destination, la date, l’horaire et le nombre de passagers.</p>
                    </details>
                    <details class="ta-faq-item">
                        <summary>Quelles informations faut-il fournir pour organiser le trajet ?</summary>
                        <p>Il est utile de préciser le lieu de prise en charge, l’aéroport ou la destination, la date et l’heure souhaitées, le nombre de passagers et les bagages ou équipements éventuels.</p>
                    </details>
                    <details class="ta-faq-item">
                        <summary>Peut-on réserver un trajet au départ de Chamonix ?</summary>
                        <p>Oui, les transferts présentés sur cette page peuvent être organisés au départ ou à destination de Chamonix-Mont-Blanc, selon votre itinéraire.</p>
                    </details>
                </div>
            </div>
        </section>

        <section class="nos-final-cta final-cta ta-final-cta" aria-labelledby="ta-final-cta-title">
            <div class="nos-final-cta-bg" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-airport-transfer.webp')) ?>" alt="" width="1448" height="1086" loading="lazy" decoding="async">
            </div>
            <div class="final-cta-overlay" aria-hidden="true"></div>
            <div class="container nos-final-cta-content ta-final-cta-content">
                <span class="section-kicker">RÉSERVATION</span>
                <h2 id="ta-final-cta-title">Réserver votre <em>transfert aéroport</em></h2>
                <p>Communiquez les informations de votre voyage pour organiser votre prochain trajet avec Alpes Transport.</p>
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
