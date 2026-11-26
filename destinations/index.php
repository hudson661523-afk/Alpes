<?php
require_once __DIR__ . '/../lib/helpers.php';
$config = site_config();

$pageTitle = 'Destinations depuis Chamonix | Alpes Transport';
$pageDescription = 'Découvrez les destinations desservies depuis Chamonix : Genève, Annecy, Megève, Courmayeur, Milan, Montreux, Interlaken et la vallée de Chamonix.';
$canonical = 'https://alpestransport.fr/destinations/';
$ogImage = 'https://alpestransport.fr' . asset('images/alpes-destination-vallee-chamonix.webp');
$ogType = 'website';
$preloadImage = asset('images/alpes-destination-vallee-chamonix.webp');
$activeNav = 'destinations';

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
                'name' => 'Destinations',
                'item' => $canonical,
            ],
        ],
    ],
];

$destinations = [
    [
        'slug' => 'geneve-aeroport',
        'name' => 'Genève Aéroport',
        'region' => 'Suisse · Aéroport international',
        'image' => 'images/alpes-destination-geneve-aeroport.webp',
        'alt' => 'Transfert privé entre Chamonix et l’aéroport de Genève',
        'description' => 'Rejoignez l’aéroport de Genève depuis Chamonix avec un chauffeur privé qui organise votre prise en charge selon votre horaire de vol, vos bagages et votre lieu de départ.',
        'link' => 'https://alpestransport.fr/transfert-geneve-chamonix/',
        'link_label' => 'Voir le transfert Genève – Chamonix',
    ],
    [
        'slug' => 'geneve-centre',
        'name' => 'Genève Centre',
        'region' => 'Suisse · Ville & lac Léman',
        'image' => 'images/alpes-destination-geneve-centre.webp',
        'alt' => 'Chauffeur privé entre Chamonix et le centre de Genève',
        'description' => 'Pour un rendez-vous professionnel, un hôtel en centre-ville ou une arrivée au bord du lac Léman, nous assurons un trajet confortable entre Chamonix et Genève.',
        'link' => 'https://alpestransport.fr/transfert-geneve-chamonix/',
        'link_label' => 'Découvrir le trajet Genève – Chamonix',
        'secondary_link' => 'https://alpestransport.fr/geneve-suisse/',
        'secondary_label' => 'Explorer Genève',
    ],
    [
        'slug' => 'vallee-chamonix',
        'name' => 'Vallée de Chamonix',
        'region' => 'France · Alpes du Mont-Blanc',
        'image' => 'images/alpes-destination-vallee-chamonix.webp',
        'alt' => 'Chauffeur privé dans la vallée de Chamonix-Mont-Blanc',
        'description' => 'Déplacez-vous facilement dans la vallée de Chamonix-Mont-Blanc, entre Les Houches, Argentière, les hôtels, les gares et les lieux de départ de vos activités.',
        'link' => 'https://alpestransport.fr/chauffeur-prive-chamonix/',
        'link_label' => 'Découvrir le chauffeur privé à Chamonix',
    ],
    [
        'slug' => 'annecy',
        'name' => 'Annecy',
        'region' => 'France · Haute-Savoie',
        'image' => 'images/alpes-destination-annecy.webp',
        'alt' => 'Excursion privée entre Chamonix et Annecy',
        'description' => 'Profitez d’un trajet privé vers Annecy pour découvrir son lac, sa vieille ville et ses panoramas alpins, avec un transport organisé depuis Chamonix.',
        'link' => 'https://alpestransport.fr/service-touristique/',
        'link_label' => 'Voir le service touristique',
    ],
    [
        'slug' => 'megeve',
        'name' => 'Megève',
        'region' => 'France · Domaine alpin',
        'image' => 'images/alpes-destination-megeve.webp',
        'alt' => 'Transfert privé entre Chamonix et Megève',
        'description' => 'Rejoignez Megève depuis Chamonix pour un séjour au ski, un week-end ou un événement, avec un chauffeur privé attentif à votre confort tout au long du trajet.',
        'link' => 'https://alpestransport.fr/service-touristique/',
        'link_label' => 'Voir le service touristique',
    ],
    [
        'slug' => 'courmayeur',
        'name' => 'Courmayeur',
        'region' => 'Italie · Vallée d’Aoste',
        'image' => 'images/alpes-destination-courmayeur.webp',
        'alt' => 'Trajet privé entre Chamonix et Courmayeur en Italie',
        'description' => 'Traversez le Mont-Blanc pour rejoindre Courmayeur en Italie. Alpes Transport vous accompagne pour vos escapades, séjours ou déplacements dans la Vallée d’Aoste.',
        'link' => 'https://alpestransport.fr/service-touristique/',
        'link_label' => 'Voir le service touristique',
    ],
    [
        'slug' => 'milan',
        'name' => 'Milan',
        'region' => 'Italie · Métropole lombarde',
        'image' => 'images/alpes-destination-milan.webp',
        'alt' => 'Transfert privé entre Chamonix et Milan',
        'description' => 'Voyagez entre Chamonix et Milan dans un véhicule confortable, pour un transfert longue distance, un départ depuis l’aéroport ou un déplacement professionnel.',
        'link' => 'https://alpestransport.fr/transfert-milan-chamonix/',
        'link_label' => 'Voir le transfert Milan – Chamonix',
    ],
    [
        'slug' => 'montreux',
        'name' => 'Montreux',
        'region' => 'Suisse · Riviera vaudoise',
        'image' => 'images/alpes-destination-montreux.webp',
        'alt' => 'Excursion privée entre Chamonix et Montreux en Suisse',
        'description' => 'Depuis Chamonix, partez à la découverte de Montreux et des rives du lac Léman lors d’un trajet privé pensé pour vos excursions et vos déplacements en Suisse.',
        'link' => 'https://alpestransport.fr/service-touristique/',
        'link_label' => 'Voir le service touristique',
    ],
    [
        'slug' => 'interlaken',
        'name' => 'Interlaken',
        'region' => 'Suisse · Alpes bernoises',
        'image' => 'images/alpes-destination-interlaken.webp',
        'alt' => 'Voyage privé entre Chamonix et Interlaken en Suisse',
        'description' => 'Organisez un trajet privé vers Interlaken pour prolonger votre séjour alpin en Suisse, avec un service de transport confortable au départ de Chamonix.',
        'link' => 'https://alpestransport.fr/service-touristique/',
        'link_label' => 'Voir le service touristique',
    ],
];
?>
<!doctype html>
<html lang="fr">
<head>
    <?php require __DIR__ . '/../partials/head.php'; ?>
</head>
<body class="page-destinations">
    <a class="skip-link" href="#main">Aller au contenu</a>
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main id="main">
        <section class="dest-hero" aria-labelledby="destinations-title">
            <div class="dest-hero-media" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-destination-vallee-chamonix.webp')) ?>" alt="" width="1448" height="1086" fetchpriority="high" decoding="async">
            </div>
            <div class="dest-hero-overlay" aria-hidden="true"></div>
            <div class="container dest-hero-content">
                <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span>DESTINATIONS</p>
                <h1 class="dest-hero-title" id="destinations-title">Destinations desservies <em>depuis Chamonix</em></h1>
                <p class="dest-hero-lead">Depuis Chamonix-Mont-Blanc, Alpes Transport vous accompagne vers les grandes destinations alpines, les aéroports et les villes incontournables de France, Suisse et Italie. Chaque trajet est organisé sur réservation, avec le confort d’un service de chauffeur privé.</p>
                <div class="hero-actions">
                    <a class="btn btn-gold" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">
                        Réserver un transfert
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                    <a class="btn btn-outline" href="#destinations-grid">
                        Explorer les destinations
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <section class="dest-intro" aria-labelledby="dest-intro-title">
            <div class="container dest-intro-inner">
                <div>
                    <span class="section-kicker">VOYAGER DEPUIS CHAMONIX</span>
                    <h2 id="dest-intro-title">Un chauffeur privé pour vos trajets <em>entre les Alpes et les grandes villes</em></h2>
                </div>
                <div class="dest-intro-copy">
                    <p>Que vous souhaitiez rejoindre un aéroport, un hôtel, une station voisine ou une ville emblématique, Alpes Transport organise vos déplacements au départ de Chamonix avec soin. Nos trajets s’adressent aux voyageurs en séjour, aux familles, aux groupes et aux clients professionnels qui recherchent un transport fiable et confortable.</p>
                    <p>Cette page présente une sélection de destinations fréquemment demandées. Pour un itinéraire spécifique, une prise en charge personnalisée ou un besoin particulier, notre équipe reste disponible pour vous accompagner.</p>
                </div>
            </div>
        </section>

        <section class="destinations-section" id="destinations-grid" aria-labelledby="destinations-grid-title">
            <div class="container">
                <div class="destinations-heading">
                    <div>
                        <span class="section-kicker">NOS DESTINATIONS</span>
                        <h2 id="destinations-grid-title">Des trajets privés vers les destinations <em>les plus demandées</em></h2>
                    </div>
                    <p>Découvrez les liaisons les plus demandées depuis Chamonix vers les aéroports, stations alpines et villes emblématiques des Alpes.</p>
                </div>

                <div class="destinations-grid">
                    <?php foreach ($destinations as $destination): ?>
                        <article class="destination-card">
                            <div class="destination-card-media">
                                <img src="<?= e(asset($destination['image'])) ?>" alt="<?= e($destination['alt']) ?>" width="1448" height="1086" loading="lazy" decoding="async">
                                <span class="destination-card-region"><?= e($destination['region']) ?></span>
                            </div>
                            <div class="destination-card-body">
                                <h3><?= e($destination['name']) ?></h3>
                                <p><?= e($destination['description']) ?></p>
                                <div class="destination-card-links">
                                    <a class="service-link" href="<?= e($destination['link']) ?>">
                                        <?= e($destination['link_label']) ?>
                                        <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                    </a>
                                    <?php if (!empty($destination['secondary_link'])): ?>
                                        <a class="destination-secondary-link" href="<?= e($destination['secondary_link']) ?>">
                                            <?= e($destination['secondary_label']) ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="dest-practical" aria-labelledby="dest-practical-title">
            <div class="container dest-practical-inner">
                <div class="dest-practical-copy">
                    <span class="section-kicker">INFORMATIONS PRATIQUES</span>
                    <h2 id="dest-practical-title">Préparer votre trajet <em>depuis Chamonix</em></h2>
                    <p>Chaque transfert est organisé sur réservation, en tenant compte de votre horaire, de votre adresse de prise en charge et du nombre de passagers. Pour les départs vers les aéroports ou les longues distances, nous vous recommandons de prévoir votre demande à l’avance afin d’organiser le trajet dans les meilleures conditions.</p>
                    <p>Alpes Transport dessert Chamonix-Mont-Blanc, la vallée, les stations alpines et les principales destinations transfrontalières en France, Suisse et Italie. Si votre destination ne figure pas dans cette sélection, notre équipe peut étudier votre demande.</p>
                </div>
                <div class="dest-practical-panel" aria-label="Conseils pour votre transfert">
                    <ul class="dest-practical-list">
                        <li>
                            <span class="dest-practical-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.6"/><path d="M12 7v5l3.5 2" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                            <div>
                                <h3>Réservation anticipée</h3>
                                <p>Précisez votre horaire, votre lieu de prise en charge et le nombre de passagers pour préparer le trajet.</p>
                            </div>
                        </li>
                        <li>
                            <span class="dest-practical-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M4 13l1.6-4.8A2 2 0 0 1 7.5 6.8h9a2 2 0 0 1 1.9 1.4L20 13v3H4v-3Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 13h.01M17 13h.01M6 16v2M18 16v2" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg></span>
                            <div>
                                <h3>Confort à bord</h3>
                                <p>Voyagez dans un véhicule adapté à vos bagages, à votre groupe et à votre itinéraire alpin.</p>
                            </div>
                        </li>
                        <li>
                            <span class="dest-practical-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z" fill="none" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="10" r="2.5" fill="none" stroke="currentColor" stroke-width="1.6"/></svg></span>
                            <div>
                                <h3>Destinations sur mesure</h3>
                                <p>Au-delà de cette sélection, nous pouvons organiser d’autres trajets depuis Chamonix sur demande.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="dest-links" aria-labelledby="dest-links-title">
            <div class="container">
                <span class="section-kicker">DÉCOUVRIR AUSSI</span>
                <h2 id="dest-links-title">Poursuivre votre recherche</h2>
                <div class="dest-links-grid">
                    <a class="dest-link-card" href="https://alpestransport.fr/transferts-aeroport/">
                        <span class="dest-link-label">Service</span>
                        <strong>Transferts aéroport</strong>
                        <span>Rejoignez les aéroports depuis Chamonix avec un service organisé sur réservation.</span>
                    </a>
                    <a class="dest-link-card" href="https://alpestransport.fr/chauffeur-prive-chamonix/">
                        <span class="dest-link-label">Service</span>
                        <strong>Chauffeur privé à Chamonix</strong>
                        <span>Un chauffeur dédié pour vos déplacements locaux et vos trajets sur mesure.</span>
                    </a>
                    <a class="dest-link-card" href="https://alpestransport.fr/service-touristique/">
                        <span class="dest-link-label">Service</span>
                        <strong>Service touristique</strong>
                        <span>Explorez les Alpes, les lacs et les villes voisines lors d’excursions privées.</span>
                    </a>
                    <a class="dest-link-card" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">
                        <span class="dest-link-label">Réservation</span>
                        <strong>Demander un trajet</strong>
                        <span>Réservez votre transfert ou contactez-nous pour un itinéraire personnalisé.</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="final-cta dest-final-cta" aria-labelledby="dest-final-cta-title">
            <div class="final-cta-overlay" aria-hidden="true"></div>
            <div class="container final-cta-inner">
                <span class="section-kicker">RÉSERVER VOTRE TRAJET</span>
                <h2 id="dest-final-cta-title">Besoin d’un transfert <em>depuis Chamonix ?</em></h2>
                <p>Qu’il s’agisse d’un transfert aéroport, d’une escapade alpine ou d’un trajet longue distance, Alpes Transport vous accompagne avec un service privé, confortable et organisé selon vos besoins.</p>
                <div class="final-cta-actions">
                    <a class="btn btn-gold" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">Réserver en ligne</a>
                    <a class="btn btn-outline-light" href="<?= e($config['phone_href']) ?>">Nous appeler</a>
                </div>
            </div>
        </section>
    </main>

    <?php require __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
