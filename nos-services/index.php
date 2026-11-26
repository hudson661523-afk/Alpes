<?php
require_once __DIR__ . '/../lib/helpers.php';
$config = site_config();

$pageTitle = 'Services de taxi à Chamonix | Alpes Transport';
$pageDescription = 'Découvrez les services de taxi à Chamonix : transferts aéroport, chauffeur privé, voyages d’affaires, événements et tourisme avec Alpes Transport.';
$canonical = 'https://alpestransport.fr/nos-services/';
$ogImage = 'https://alpestransport.fr' . asset('images/alpes-hero-mountains.webp');
$ogType = 'website';
$preloadImage = asset('images/alpes-hero-mountains.webp');
$activeNav = 'services';

$schemaExtra = [
    [
        '@type' => 'BreadcrumbList',
        '@id' => $canonical . '#breadcrumb',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Accueil',
                'item' => 'https://alpestransport.fr/',
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Nos Services',
                'item' => $canonical,
            ],
        ],
    ],
];

$services = [
    [
        'title' => 'Transferts Aéroport',
        'image' => 'images/alpes-airport-transfer.webp',
        'alt' => 'Véhicule premium Alpes Transport pour un transfert aéroport depuis Chamonix',
        'description' => 'Rejoignez ou quittez les aéroports desservis depuis Chamonix-Mont-Blanc avec un transfert privé organisé sur réservation. Ce service convient aux arrivées, aux départs et aux correspondances vers les principales destinations alpines.',
        'detail' => 'Idéal pour les liaisons vers Genève, Lyon ou Milan, avec une prise en charge adaptée à votre itinéraire.',
        'url' => 'https://alpestransport.fr/transferts-aeroport/',
        'cta' => 'Découvrir les transferts aéroport',
        'width' => 1448,
        'height' => 1086,
    ],
    [
        'title' => 'Service de Chauffeur Privé',
        'image' => 'images/alpes-private-chauffeur.webp',
        'alt' => 'Chauffeur privé Alpes Transport à Chamonix-Mont-Blanc',
        'description' => 'Profitez d’un chauffeur privé à Chamonix pour vos déplacements sur mesure, qu’il s’agisse d’un trajet ponctuel, d’une mise à disposition ou d’un accompagnement sur plusieurs arrêts dans la vallée.',
        'detail' => 'Pratique pour les rendez-vous, le shopping, les visites ou les déplacements personnels à votre rythme.',
        'url' => 'https://alpestransport.fr/service-de-chauffeur-prive/',
        'cta' => 'Découvrir le chauffeur privé',
        'width' => 1448,
        'height' => 1086,
    ],
    [
        'title' => 'Événements et Occasions Spéciales',
        'image' => 'images/alpes-evenements-occasions-speciales.webp',
        'alt' => 'Transport privé pour un événement spécial avec Alpes Transport',
        'description' => 'Organisez vos déplacements pour des événements privés, professionnels ou des occasions spéciales avec un service de transport élégant et discret. Alpes Transport accompagne vos invités, vos équipes ou vos participants selon le programme prévu.',
        'detail' => 'Adapté aux conférences, soirées privées, réceptions ou transferts VIP sur réservation.',
        'url' => 'https://alpestransport.fr/evenements-occasions-speciales/',
        'cta' => 'Découvrir les événements',
        'width' => 1672,
        'height' => 941,
    ],
    [
        'title' => 'Service Touristique',
        'image' => 'images/alpes-chamonix-alpine-tour.webp',
        'alt' => 'Excursion alpine privée au départ de Chamonix-Mont-Blanc',
        'description' => 'Explorez Chamonix, les Alpes et les destinations environnantes grâce à un service touristique privé. Vos excursions et visites sont organisées avec confort, pour profiter pleinement des paysages et des étapes de votre parcours.',
        'detail' => 'Une solution agréable pour les excursions, visites culturelles et découvertes locales en famille ou entre amis.',
        'url' => 'https://alpestransport.fr/service-touristique/',
        'cta' => 'Découvrir le service touristique',
        'width' => 1448,
        'height' => 1086,
    ],
    [
        'title' => 'Voyages d’Affaires',
        'image' => 'images/alpes-voyages-daffaires.webp',
        'alt' => 'Chauffeur privé pour un voyage d’affaires au départ de Chamonix',
        'description' => 'Simplifiez vos déplacements professionnels avec un transport fiable et confortable entre hôtels, lieux de rendez-vous, gares ou aéroports. Le service est pensé pour les voyageurs d’affaires qui recherchent ponctualité et sérénité.',
        'detail' => 'Convient aux réunions, conférences, transferts professionnels et itinéraires à horaires définis.',
        'url' => 'https://alpestransport.fr/voyages-daffaires/',
        'cta' => 'Découvrir les voyages d’affaires',
        'width' => 1672,
        'height' => 941,
    ],
    [
        'title' => 'Voyages pour Mariages et Événements',
        'image' => 'images/alpes-voyages-pour-mariages-et-evenements.webp',
        'alt' => 'Transport privé pour mariage et événement dans les Alpes',
        'description' => 'Assurez les déplacements liés à votre mariage avec un transport soigné pour les mariés, les proches ou les invités. Chaque trajet est organisé sur réservation pour accompagner les différents moments de la journée.',
        'detail' => 'Idéal pour les transferts des mariés, des familles et des invités entre hébergement, cérémonie et lieu de réception.',
        'url' => 'https://alpestransport.fr/voyages-pour-mariages-et-evenements/',
        'cta' => 'Découvrir les mariages et événements',
        'width' => 1448,
        'height' => 1086,
    ],
];

$reasons = [
    [
        'title' => 'Une offre de transport complète',
        'text' => 'Transferts aéroport, chauffeur privé, tourisme, voyages d’affaires et événements : nos prestations couvrent les principaux besoins de déplacement depuis Chamonix.',
        'icon' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 7h11v8H3zM14 10h4l3 3v2h-7z" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="7" cy="17" r="1.8" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="17" cy="17" r="1.8" fill="none" stroke="currentColor" stroke-width="1.7"/></svg>',
    ],
    [
        'title' => 'Une connaissance de Chamonix et des Alpes',
        'text' => 'Basés à Chamonix-Mont-Blanc, nous organisons des trajets vers les destinations alpines, les aéroports et les villes voisines en France, en Suisse et en Italie.',
        'icon' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3 19l5-9 4 6 2-3 7 6H3z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="M12 4v3M10.5 5.5h3" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>',
    ],
    [
        'title' => 'Des solutions adaptées aux voyageurs',
        'text' => 'Voyageur seul, famille, groupe ou déplacement professionnel : chaque prestation est pensée selon votre destination, votre horaire et le contexte de votre trajet.',
        'icon' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="9" cy="8" r="2.5" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M4.5 18c0-2.5 2-4.5 4.5-4.5s4.5 2 4.5 4.5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/><path d="M15.5 11.5a2 2 0 1 0 0-4M14.5 14c1.7 0 3.2 1 4 2.5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>',
    ],
    [
        'title' => 'Un service sur réservation',
        'text' => 'Vous communiquez les détails de votre trajet à l’avance pour organiser la prise en charge : lieu, destination, date, horaire et nombre de passagers.',
        'icon' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="4" y="5" width="16" height="15" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M8 3v4M16 3v4M4 9h16" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/><path d="m9 14 2 2 4-4" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    ],
];
?>
<!doctype html>
<html lang="fr">
<head>
    <?php require __DIR__ . '/../partials/head.php'; ?>
</head>
<body class="page-nos-services">
    <a class="skip-link" href="#main">Aller au contenu</a>
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main id="main">
        <section class="nos-hero" aria-labelledby="nos-services-title">
            <div class="nos-hero-media" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-hero-mountains.webp')) ?>" alt="" width="1672" height="941" fetchpriority="high" decoding="async">
            </div>
            <div class="nos-hero-overlay" aria-hidden="true"></div>
            <div class="container nos-hero-content">
                <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span>NOS SERVICES</p>
                <h1 class="nos-hero-title" id="nos-services-title">Services de taxi à <em>Chamonix</em></h1>
                <p class="nos-hero-lead">Découvrez les services de transport proposés par Alpes Transport à Chamonix-Mont-Blanc : transferts aéroport, chauffeur privé, déplacements professionnels, événements et excursions dans les Alpes. Choisissez la prestation adaptée à votre trajet.</p>
                <div class="hero-actions">
                    <a class="btn btn-gold" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">
                        RÉSERVER UN TRAJET
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                    <a class="btn btn-outline" href="#nos-prestations">
                        DÉCOUVRIR NOS SERVICES
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <section class="nos-intro" aria-labelledby="nos-intro-title">
            <div class="container nos-intro-inner">
                <div>
                    <span class="section-kicker">TRANSPORT SUR RÉSERVATION</span>
                    <h2 id="nos-intro-title">Des solutions de transport pour <em>chaque déplacement</em></h2>
                </div>
                <div class="nos-intro-copy">
                    <p>Depuis Chamonix-Mont-Blanc, Alpes Transport organise vos trajets sur réservation pour répondre à des besoins variés : transfert aéroport, chauffeur privé, déplacement professionnel, sortie touristique ou événement particulier.</p>
                    <p>Que vous voyagiez seul, en famille, en groupe ou dans un cadre professionnel, vous pouvez choisir la prestation la plus adaptée à votre itinéraire. Notre équipe vous accompagne avec une approche claire, confortable et orientée service.</p>
                </div>
            </div>
        </section>

        <section class="nos-services-section" id="nos-prestations" aria-labelledby="nos-prestations-title">
            <div class="container">
                <div class="nos-heading">
                    <div>
                        <span class="section-kicker">NOS PRESTATIONS</span>
                        <h2 id="nos-prestations-title">Découvrez nos <em>prestations</em></h2>
                    </div>
                    <p>Six services pour organiser vos déplacements depuis Chamonix, avec un accès direct à chaque page dédiée.</p>
                </div>

                <div class="nos-grid">
                    <?php foreach ($services as $service): ?>
                        <article class="nos-card">
                            <div class="nos-card-media">
                                <img src="<?= e(asset($service['image'])) ?>" alt="<?= e($service['alt']) ?>" width="<?= e((string) $service['width']) ?>" height="<?= e((string) $service['height']) ?>" loading="lazy" decoding="async">
                            </div>
                            <div class="nos-card-body">
                                <h3><?= e($service['title']) ?></h3>
                                <p class="nos-card-desc"><?= e($service['description']) ?></p>
                                <p class="nos-card-detail"><?= e($service['detail']) ?></p>
                                <div class="nos-card-actions">
                                    <a class="service-link" href="<?= e($service['url']) ?>">
                                        <?= e($service['cta']) ?>
                                        <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="nos-reasons" aria-labelledby="nos-reasons-title">
            <div class="container">
                <div class="nos-heading nos-heading-center">
                    <span class="section-kicker">L'EXPERTISE ALPES TRANSPORT</span>
                    <h2 id="nos-reasons-title">Pourquoi choisir Alpes Transport <em>à Chamonix ?</em></h2>
                </div>
                <div class="nos-reasons-grid">
                    <?php foreach ($reasons as $reason): ?>
                        <article class="nos-reason-card">
                            <span class="nos-reason-icon"><?= $reason['icon'] ?></span>
                            <h3><?= e($reason['title']) ?></h3>
                            <p><?= e($reason['text']) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="nos-practical" aria-labelledby="nos-practical-title">
            <div class="container nos-practical-inner">
                <div>
                    <span class="section-kicker">PRÉPARER VOTRE RÉSERVATION</span>
                    <h2 id="nos-practical-title">Organiser votre trajet <em>depuis Chamonix</em></h2>
                    <p class="nos-practical-lead">Pour préparer votre demande, quelques informations essentielles permettent d’organiser un service adapté à votre itinéraire, qu’il s’agisse d’un transfert local, d’un trajet vers un aéroport ou d’un déplacement transfrontalier.</p>
                    <div class="nos-practical-links">
                        <a class="service-link" href="https://alpestransport.fr/destinations/">Voir les destinations <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        <a class="service-link" href="https://alpestransport.fr/transferts-aeroport/">Voir les transferts aéroport <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                    </div>
                </div>
                <div class="nos-practical-panel">
                    <ul class="nos-practical-list">
                        <li>
                            <span class="nos-practical-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.7"/></svg></span>
                            <div><h3>Lieu de prise en charge</h3><p>Indiquez l’adresse, l’hôtel, la gare ou le point de rendez-vous à Chamonix ou dans les environs.</p></div>
                        </li>
                        <li>
                            <span class="nos-practical-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M4 12h16m-4-4 4 4-4 4M20 12H4m4-4-4 4 4 4" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                            <div><h3>Destination</h3><p>Précisez votre destination, qu’il s’agisse d’un aéroport, d’une station, d’une ville ou d’un trajet local.</p></div>
                        </li>
                        <li>
                            <span class="nos-practical-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="8.5" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                            <div><h3>Date et horaire</h3><p>Communiquez la date et l’heure souhaitées afin d’organiser votre transport selon votre programme.</p></div>
                        </li>
                        <li>
                            <span class="nos-practical-icon"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M9 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm8 1a2.5 2.5 0 1 0 0-5M3 19c0-2.8 2.2-5 5-5h2c2.8 0 5 2.2 5 5M16 14c1.7 0 3.3.8 4.3 2.1" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span>
                            <div><h3>Passagers et bagages</h3><p>Indiquez le nombre de passagers et précisez, si nécessaire, les bagages ou équipements de ski.</p></div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="nos-final-cta final-cta" aria-labelledby="nos-final-cta-title">
            <div class="nos-final-cta-bg" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-hero-mountains.webp')) ?>" alt="" width="1672" height="941" loading="lazy" decoding="async">
            </div>
            <div class="final-cta-overlay" aria-hidden="true"></div>
            <div class="container nos-final-cta-content">
                <span class="section-kicker">RÉSERVATION</span>
                <h2 id="nos-final-cta-title">Votre prochain trajet avec <em>Alpes Transport</em></h2>
                <p>Choisissez votre prestation et communiquez les détails de votre déplacement pour organiser votre réservation.</p>
                <div class="final-cta-actions">
                    <a class="btn btn-gold final-cta-btn" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">
                        RÉSERVER EN LIGNE
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                    <a class="btn btn-outline final-cta-btn-secondary" href="<?= e($config['phone_href']) ?>">
                        Nous appeler
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php require __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>