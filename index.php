<?php
require_once __DIR__ . '/lib/helpers.php';
require_once __DIR__ . '/lib/booking-security.php';
alpes_booking_session();
$config = site_config();
?>
<!doctype html>
<html lang="fr">
<head>
    <?php require __DIR__ . '/partials/head.php'; ?>
</head>
<body>
    <a class="skip-link" href="#main">Aller au contenu</a>

    <?php require __DIR__ . '/partials/header.php'; ?>

    <main id="main">
        <?php require __DIR__ . '/partials/hero.php'; ?>
        <?php require __DIR__ . '/partials/quick-booking.php'; ?>
        <?php require __DIR__ . '/partials/about.php'; ?>

        <section class="services-section" id="services" aria-labelledby="services-title">
            <div class="container">
                <div class="services-heading">
                    <div>
                        <span class="section-kicker">NOS SERVICES</span>
                        <h2 id="services-title">Des services de transport privé à Chamonix,<br><em>pensés pour vos déplacements dans les Alpes.</em></h2>
                    </div>
                    <p>Alpes Transport vous accompagne à Chamonix-Mont-Blanc pour vos transferts, vos trajets sur réservation et vos découvertes de la vallée, avec un service soigné et adapté à vos besoins.</p>
                </div>

                <div class="services-grid">
                    <article class="service-card">
                        <div class="service-card-image">
                            <img src="<?= e(asset('images/alpes-airport-transfer.webp')) ?>" alt="Véhicule avec chauffeur pour un transfert aéroport entre Chamonix et les aéroports des Alpes" width="1448" height="1086" loading="lazy" decoding="async">
                        </div>
                        <div class="service-card-content">
                            <span class="service-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" focusable="false"><path d="M17.8 19.2 16 11l3.5-3.5a2.12 2.12 0 0 0-3-3L13 8 4.8 6.2a.6.6 0 0 0-.6.9L8 12l-2.2 2.2-2.4-.4a.6.6 0 0 0-.6 1l3 3 3 3a.6.6 0 0 0 1-.6l-.4-2.4L12 16l4.9 3.8a.6.6 0 0 0 .9-.6Z"/></svg>
                            </span>
                            <h3>Transferts Aéroport</h3>
                            <p>Profitez d’un transfert privé entre Chamonix et les aéroports de la région, notamment Genève, Lyon, Chambéry, Milan ou Zurich, pour un trajet serein dès votre arrivée.</p>
                            <a href="<?= e($config['services'][0]['url']) ?>" class="service-link">En savoir plus <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        </div>
                    </article>

                    <article class="service-card">
                        <div class="service-card-image">
                            <img src="<?= e(asset('images/alpes-private-chauffeur.webp')) ?>" alt="Chauffeur privé au volant d’un véhicule de prestige pour des trajets à Chamonix" width="1448" height="1086" loading="lazy" decoding="async">
                        </div>
                        <div class="service-card-content">
                            <span class="service-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" focusable="false"><path d="M20 21a8 8 0 0 0-16 0"/><circle cx="12" cy="7" r="4"/><path d="M4 12h2m12 0h2"/></svg>
                            </span>
                            <h3>Chauffeur Privé</h3>
                            <p>Pour vos déplacements personnels ou professionnels à Chamonix et dans les Alpes, bénéficiez d’un service de chauffeur privé sur réservation, discret et confortable.</p>
                            <a href="<?= e($config['services'][1]['url']) ?>" class="service-link">En savoir plus <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        </div>
                    </article>

                    <article class="service-card">
                        <div class="service-card-image">
                            <img src="<?= e(asset('images/alpes-chamonix-alpine-tour.webp')) ?>" alt="Route de montagne dans les Alpes près de Chamonix pour un service touristique privé" width="1448" height="1086" loading="lazy" decoding="async">
                        </div>
                        <div class="service-card-content">
                            <span class="service-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" focusable="false"><path d="m8 3 4 8 5-5 3 15H4z"/><path d="M4 21h16"/></svg>
                            </span>
                            <h3>Service Touristique</h3>
                            <p>Explorez Chamonix-Mont-Blanc et les paysages alpins lors d’excursions privées, pour découvrir la région à votre rythme selon vos envies.</p>
                            <a href="<?= e($config['services'][3]['url']) ?>" class="service-link">En savoir plus <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        </div>
                    </article>

                    <article class="service-card">
                        <div class="service-card-image">
                            <img src="<?= e(asset('images/alpes-evenements-occasions-speciales.webp')) ?>" alt="Chauffeur privé accompagnant des invités lors d’un événement spécial à Chamonix" width="1672" height="941" loading="lazy" decoding="async">
                        </div>
                        <div class="service-card-content">
                            <span class="service-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" focusable="false"><path d="M8 2v4M16 2v4M3 10h18M5 4h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"/><path d="m9 16 2 2 4-4"/></svg>
                            </span>
                            <h3>Événements et Occasions Spéciales</h3>
                            <p>Organisez vos déplacements pour vos événements privés, conférences ou occasions spéciales avec un transport élégant et soigné pour vous et vos invités.</p>
                            <a href="<?= e($config['services'][2]['url']) ?>" class="service-link">En savoir plus <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        </div>
                    </article>

                    <article class="service-card">
                        <div class="service-card-image">
                            <img src="<?= e(asset('images/alpes-voyages-daffaires.webp')) ?>" alt="Véhicule premium pour un déplacement professionnel dans les Alpes" width="1672" height="941" loading="lazy" decoding="async">
                        </div>
                        <div class="service-card-content">
                            <span class="service-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" focusable="false"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                            </span>
                            <h3>Voyages d’Affaires</h3>
                            <p>Déplacez-vous avec sérénité pour vos rendez-vous, réunions ou transferts professionnels, entre hôtels, bureaux et aéroports dans les Alpes.</p>
                            <a href="<?= e($config['services'][4]['url']) ?>" class="service-link">En savoir plus <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        </div>
                    </article>

                    <article class="service-card">
                        <div class="service-card-image">
                            <img src="<?= e(asset('images/alpes-voyages-pour-mariages-et-evenements.webp')) ?>" alt="Voiture de transport élégant pour un mariage à Chamonix-Mont-Blanc" width="1448" height="1086" loading="lazy" decoding="async">
                        </div>
                        <div class="service-card-content">
                            <span class="service-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" focusable="false"><path d="M20.8 4.6a5 5 0 0 0-7.1 0L12 6.3l-1.7-1.7a5 5 0 0 0-7.1 7.1L12 20.4l8.8-8.7a5 5 0 0 0 0-7.1Z"/></svg>
                            </span>
                            <h3>Voyages pour Mariages et Événements</h3>
                            <p>Offrez à vos proches un transport élégant et ponctuel pour vos mariages et événements spéciaux, avec une attention particulière portée à votre confort.</p>
                            <a href="<?= e($config['services'][5]['url']) ?>" class="service-link">En savoir plus <span aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a>
                        </div>
                    </article>
                </div>

                <div class="services-bottom">
                    <span>Un trajet à organiser ?</span>
                    <a class="btn btn-gold" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">Réserver votre trajet <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </section>

        <section class="why-choose-section" id="pourquoi-nous" aria-labelledby="pourquoi-nous-title">
            <div class="container">
                <div class="why-choose-heading">
                    <div>
                        <span class="section-kicker">POURQUOI NOUS CHOISIR</span>
                        <h2 id="pourquoi-nous-title">Pourquoi choisir Alpes Transport à Chamonix&nbsp;?</h2>
                    </div>
                    <p>À Chamonix-Mont-Blanc, Alpes Transport organise vos déplacements privés sur réservation, avec une attention portée au confort de votre trajet et à vos besoins de voyage dans les Alpes.</p>
                </div>

                <div class="why-choose-grid">
                    <article class="why-card">
                        <span class="why-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false"><path d="M20 21a8 8 0 0 0-16 0"/><circle cx="12" cy="7" r="4"/></svg>
                        </span>
                        <h3>Transport privé sur réservation</h3>
                        <p>Profitez d’un service de transport privé à Chamonix-Mont-Blanc pour vos trajets personnels ou professionnels, organisé sur réservation selon votre programme.</p>
                    </article>

                    <article class="why-card">
                        <span class="why-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false"><path d="M17.8 19.2 16 11l3.5-3.5a2.12 2.12 0 0 0-3-3L13 8 4.8 6.2a.6.6 0 0 0-.6.9L8 12l-2.2 2.2-2.4-.4a.6.6 0 0 0-.6 1l3 3 3 3a.6.6 0 0 0 1-.6l-.4-2.4L12 16l4.9 3.8a.6.6 0 0 0 .9-.6Z"/></svg>
                        </span>
                        <h3>Transferts aéroport</h3>
                        <p>Depuis Chamonix, rejoignez les principaux aéroports de la région grâce à nos <a href="<?= e($config['services'][0]['url']) ?>">transferts aéroport</a> vers Genève, Lyon, Milan, Chambéry, Turin ou Zurich.</p>
                    </article>

                    <article class="why-card">
                        <span class="why-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false"><path d="m8 3 4 8 5-5 3 15H4z"/><path d="M4 21h16"/></svg>
                        </span>
                        <h3>Destinations alpines desservies</h3>
                        <p>Vos déplacements vous mènent à Chamonix, vers les stations de ski et d’autres destinations des Alpes, pour vos séjours, loisirs ou rendez-vous.</p>
                    </article>

                    <article class="why-card">
                        <span class="why-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="m9 15 2 2 4-4"/></svg>
                        </span>
                        <h3>Organisation adaptée à vos besoins</h3>
                        <p>Chaque trajet est préparé selon vos horaires, votre lieu de prise en charge et vos besoins, afin de voyager avec plus de sérénité.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="fleet-section" id="flotte" aria-labelledby="fleet-title">
            <div class="container">
                <div class="fleet-heading">
                    <div>
                        <span class="section-kicker">NOTRE FLOTTE</span>
                        <h2 id="fleet-title">Des véhicules adaptés à chacun de vos trajets</h2>
                    </div>
                    <p>Pour vos transferts, déplacements professionnels ou séjours dans les Alpes, Alpes Transport met à disposition des véhicules confortables, adaptés au nombre de passagers et à vos bagages.</p>
                </div>

                <div class="fleet-grid">
                    <article class="fleet-card">
                        <div class="fleet-card-media">
                            <img src="<?= e(asset('images/alpes-fleet-mercedes-s-class.png')) ?>" alt="Mercedes Classe S noire pour vos déplacements privés à Chamonix" width="1402" height="1122" loading="lazy" decoding="async">
                        </div>
                        <div class="fleet-card-body">
                            <h3>Mercedes Classe S</h3>
                            <p>Berline d’exception, la Mercedes Classe S offre un confort raffiné pour les clients VIP et les déplacements professionnels au départ de Chamonix.</p>
                            <ul class="fleet-specs" aria-label="Capacités Mercedes Classe S">
                                <li>
                                    <span class="fleet-spec-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="3"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a3 3 0 0 1 0 5.75"/></svg></span>
                                    <span class="fleet-spec-label">Passagers</span>
                                    <strong class="fleet-spec-value">3</strong>
                                </li>
                                <li>
                                    <span class="fleet-spec-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M3 12h18"/></svg></span>
                                    <span class="fleet-spec-label">Bagages</span>
                                    <strong class="fleet-spec-value">2</strong>
                                </li>
                            </ul>
                            <a class="btn btn-gold fleet-card-cta" href="#reservation">Demander un devis</a>
                        </div>
                    </article>

                    <article class="fleet-card">
                        <div class="fleet-card-media">
                            <img src="<?= e(asset('images/alpes-fleet-renault-trafic.png')) ?>" alt="Renault Trafic noir pour les transferts de groupe à Chamonix" width="1402" height="1122" loading="lazy" decoding="async">
                        </div>
                        <div class="fleet-card-body">
                            <h3>Renault Trafic Van</h3>
                            <p>Spacieux et pratique, le Renault Trafic Van convient aux transferts aéroport, aux voyages en groupe et aux déplacements avec bagages depuis Chamonix.</p>
                            <ul class="fleet-specs" aria-label="Capacités Renault Trafic Van">
                                <li>
                                    <span class="fleet-spec-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="3"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a3 3 0 0 1 0 5.75"/></svg></span>
                                    <span class="fleet-spec-label">Passagers</span>
                                    <strong class="fleet-spec-value">8</strong>
                                </li>
                                <li>
                                    <span class="fleet-spec-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M3 12h18"/></svg></span>
                                    <span class="fleet-spec-label">Bagages</span>
                                    <strong class="fleet-spec-value">8</strong>
                                </li>
                            </ul>
                            <a class="btn btn-gold fleet-card-cta" href="#reservation">Demander un devis</a>
                        </div>
                    </article>

                    <article class="fleet-card">
                        <div class="fleet-card-media">
                            <img src="<?= e(asset('images/alpes-fleet-mercedes-v-class.png')) ?>" alt="Mercedes Classe V noire pour les transferts privés dans les Alpes" width="1402" height="1122" loading="lazy" decoding="async">
                        </div>
                        <div class="fleet-card-body">
                            <h3>Mercedes Classe V</h3>
                            <p>Avec son espace généreux et son confort premium, la Mercedes Classe V est idéale pour les familles, les groupes et les séjours au ski dans les Alpes.</p>
                            <ul class="fleet-specs" aria-label="Capacités Mercedes Classe V">
                                <li>
                                    <span class="fleet-spec-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="3"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a3 3 0 0 1 0 5.75"/></svg></span>
                                    <span class="fleet-spec-label">Passagers</span>
                                    <strong class="fleet-spec-value">7</strong>
                                </li>
                                <li>
                                    <span class="fleet-spec-icon" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M3 12h18"/></svg></span>
                                    <span class="fleet-spec-label">Bagages</span>
                                    <strong class="fleet-spec-value">6</strong>
                                </li>
                            </ul>
                            <a class="btn btn-gold fleet-card-cta" href="#reservation">Demander un devis</a>
                        </div>
                    </article>
                </div>
                <p class="fleet-visual-note">Visuels illustratifs des modèles de véhicules.</p>
            </div>
        </section>

        <section class="reviews-section" id="avis-clients" aria-labelledby="reviews-title">
            <div class="container">
                <div class="reviews-heading">
                    <div>
                        <span class="section-kicker">AVIS CLIENTS</span>
                        <h2 id="reviews-title">La confiance de nos voyageurs</h2>
                    </div>
                    <p>Les retours de nos clients témoignent de l’attention portée à chaque trajet, de la ponctualité à l’accueil à bord, lors des déplacements au départ de Chamonix-Mont-Blanc.</p>
                </div>

                <div class="reviews-carousel" data-reviews-carousel aria-roledescription="carousel" aria-label="Avis clients Alpes Transport">
                    <div class="reviews-carousel-top">
                        <p class="reviews-source-note">
                            <span class="reviews-source-badge" aria-hidden="true">
                                <svg viewBox="0 0 24 24" focusable="false"><path d="M21.35 11.1H12v2.9h5.35c-.23 1.48-1.74 4.33-5.35 4.33-3.22 0-5.85-2.67-5.85-5.96S8.78 6.41 12 6.41c1.83 0 3.06.78 3.76 1.45l2.56-2.47C16.67 3.86 14.54 2.9 12 2.9 6.98 2.9 2.9 6.98 2.9 12s4.08 9.1 9.1 9.1c5.25 0 8.73-3.69 8.73-8.89 0-.6-.07-1.05-.15-1.5Z"/></svg>
                            </span>
                            Avis issus de Google, affichés sur le site d’Alpes Transport.
                        </p>
                        <div class="reviews-controls">
                            <button type="button" class="reviews-control reviews-autoplay" data-reviews-autoplay aria-pressed="true" aria-label="Mettre le carrousel en pause">
                                <svg class="reviews-icon-pause" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M7 5h3v14H7zm7 0h3v14h-3z"/></svg>
                                <svg class="reviews-icon-play" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M8 5l11 7-11 7z"/></svg>
                                <span class="reviews-control-text" data-reviews-autoplay-text>Pause</span>
                            </button>
                            <button type="button" class="reviews-control" data-reviews-prev aria-label="Avis précédent">
                                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M15 18l-6-6 6-6"/></svg>
                            </button>
                            <button type="button" class="reviews-control" data-reviews-next aria-label="Avis suivant">
                                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M9 18l6-6-6-6"/></svg>
                            </button>
                        </div>
                    </div>

                    <p class="sr-only" aria-live="polite" data-reviews-status></p>

                    <div class="reviews-viewport" data-reviews-viewport tabindex="0" role="region" aria-label="Carrousel des avis clients">
                        <div class="reviews-track" data-reviews-track>
                            <article class="review-card" aria-label="Avis de Philippe Ego">
                                <div class="review-card-top">
                                    <span class="review-google">
                                        <span class="sr-only">Avis Google</span>
                                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21.35 11.1H12v2.9h5.35c-.23 1.48-1.74 4.33-5.35 4.33-3.22 0-5.85-2.67-5.85-5.96S8.78 6.41 12 6.41c1.83 0 3.06.78 3.76 1.45l2.56-2.47C16.67 3.86 14.54 2.9 12 2.9 6.98 2.9 2.9 6.98 2.9 12s4.08 9.1 9.1 9.1c5.25 0 8.73-3.69 8.73-8.89 0-.6-.07-1.05-.15-1.5Z"/></svg>
                                    </span>
                                    <span class="review-quote" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></span>
                                </div>
                                <div class="review-stars" role="img" aria-label="Note : 5 sur 5">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg>
                                </div>
                                <blockquote class="review-text">
                                    <p>Groupe de 8 personnes, nous avons été pris en charge par Amal. Très professionnel et surtout ponctuel. Hyper souriant et agréable, il nous a conseillé quelques resto / bar sur Chamonix. Je recommande vivement</p>
                                </blockquote>
                                <footer class="review-footer">
                                    <span class="review-avatar" aria-hidden="true">PE</span>
                                    <span class="review-author">
                                        <span class="review-name">Philippe Ego</span>
                                        <span class="review-meta">Avis Google</span>
                                    </span>
                                </footer>
                            </article>

                            <article class="review-card" aria-label="Avis de Alexandre Baillieux">
                                <div class="review-card-top">
                                    <span class="review-google">
                                        <span class="sr-only">Avis Google</span>
                                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21.35 11.1H12v2.9h5.35c-.23 1.48-1.74 4.33-5.35 4.33-3.22 0-5.85-2.67-5.85-5.96S8.78 6.41 12 6.41c1.83 0 3.06.78 3.76 1.45l2.56-2.47C16.67 3.86 14.54 2.9 12 2.9 6.98 2.9 2.9 6.98 2.9 12s4.08 9.1 9.1 9.1c5.25 0 8.73-3.69 8.73-8.89 0-.6-.07-1.05-.15-1.5Z"/></svg>
                                    </span>
                                    <span class="review-quote" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></span>
                                </div>
                                <div class="review-stars" role="img" aria-label="Note : 5 sur 5">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg>
                                </div>
                                <blockquote class="review-text">
                                    <p>Parfait, 3 prises en charge par Amal, hyper sympa, toujours à l’heure je recommande ++</p>
                                </blockquote>
                                <footer class="review-footer">
                                    <span class="review-avatar" aria-hidden="true">AB</span>
                                    <span class="review-author">
                                        <span class="review-name">Alexandre Baillieux</span>
                                        <span class="review-meta">Avis Google</span>
                                    </span>
                                </footer>
                            </article>

                            <article class="review-card" aria-label="Avis de JM DECOUX">
                                <div class="review-card-top">
                                    <span class="review-google">
                                        <span class="sr-only">Avis Google</span>
                                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21.35 11.1H12v2.9h5.35c-.23 1.48-1.74 4.33-5.35 4.33-3.22 0-5.85-2.67-5.85-5.96S8.78 6.41 12 6.41c1.83 0 3.06.78 3.76 1.45l2.56-2.47C16.67 3.86 14.54 2.9 12 2.9 6.98 2.9 2.9 6.98 2.9 12s4.08 9.1 9.1 9.1c5.25 0 8.73-3.69 8.73-8.89 0-.6-.07-1.05-.15-1.5Z"/></svg>
                                    </span>
                                    <span class="review-quote" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></span>
                                </div>
                                <div class="review-stars" role="img" aria-label="Note : 5 sur 5">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg>
                                </div>
                                <blockquote class="review-text">
                                    <p>29 juin 2026 Transport les Houches - Annecy : excellent chauffeur, très sympathique, qui nous a fait passer un voyage très agréable. Merci !</p>
                                </blockquote>
                                <footer class="review-footer">
                                    <span class="review-avatar" aria-hidden="true">JD</span>
                                    <span class="review-author">
                                        <span class="review-name">JM DECOUX</span>
                                        <span class="review-meta">Avis Google</span>
                                    </span>
                                </footer>
                            </article>

                            <article class="review-card" aria-label="Avis de charlotte gruet">
                                <div class="review-card-top">
                                    <span class="review-google">
                                        <span class="sr-only">Avis Google</span>
                                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21.35 11.1H12v2.9h5.35c-.23 1.48-1.74 4.33-5.35 4.33-3.22 0-5.85-2.67-5.85-5.96S8.78 6.41 12 6.41c1.83 0 3.06.78 3.76 1.45l2.56-2.47C16.67 3.86 14.54 2.9 12 2.9 6.98 2.9 2.9 6.98 2.9 12s4.08 9.1 9.1 9.1c5.25 0 8.73-3.69 8.73-8.89 0-.6-.07-1.05-.15-1.5Z"/></svg>
                                    </span>
                                    <span class="review-quote" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></span>
                                </div>
                                <div class="review-stars" role="img" aria-label="Note : 5 sur 5">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg>
                                </div>
                                <blockquote class="review-text">
                                    <p>Mohammed est un chauffeur agréable le trajet est très confortable et rassurant. Aller les yeux fermés, le chauffeur lui les a biens ouvert 😁 très ponctuel !!! ravi davoir eu ce taxi</p>
                                </blockquote>
                                <footer class="review-footer">
                                    <span class="review-avatar" aria-hidden="true">CG</span>
                                    <span class="review-author">
                                        <span class="review-name">charlotte gruet</span>
                                        <span class="review-meta">Avis Google</span>
                                    </span>
                                </footer>
                            </article>

                            <article class="review-card" aria-label="Avis de Zara Revill">
                                <div class="review-card-top">
                                    <span class="review-google">
                                        <span class="sr-only">Avis Google</span>
                                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21.35 11.1H12v2.9h5.35c-.23 1.48-1.74 4.33-5.35 4.33-3.22 0-5.85-2.67-5.85-5.96S8.78 6.41 12 6.41c1.83 0 3.06.78 3.76 1.45l2.56-2.47C16.67 3.86 14.54 2.9 12 2.9 6.98 2.9 2.9 6.98 2.9 12s4.08 9.1 9.1 9.1c5.25 0 8.73-3.69 8.73-8.89 0-.6-.07-1.05-.15-1.5Z"/></svg>
                                    </span>
                                    <span class="review-quote" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></span>
                                </div>
                                <div class="review-stars" role="img" aria-label="Note : 5 sur 5">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg>
                                </div>
                                <blockquote class="review-text">
                                    <p>Our taxi driver was amazing, we were looking for a garage to fix our broken down campervan and unfortunately the first place couldn’t do it, so he took us to another garage nearby and luckily they could have a look. He really went out of his way to help us out, and was very polite and chatty (smooth drive too and was patient with our hassle haha!) Would definitely recommend using this taxi service!</p>
                                </blockquote>
                                <footer class="review-footer">
                                    <span class="review-avatar" aria-hidden="true">ZR</span>
                                    <span class="review-author">
                                        <span class="review-name">Zara Revill</span>
                                        <span class="review-meta">Avis Google</span>
                                    </span>
                                </footer>
                            </article>

                            <article class="review-card" aria-label="Avis de Julie Pomerleau">
                                <div class="review-card-top">
                                    <span class="review-google">
                                        <span class="sr-only">Avis Google</span>
                                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21.35 11.1H12v2.9h5.35c-.23 1.48-1.74 4.33-5.35 4.33-3.22 0-5.85-2.67-5.85-5.96S8.78 6.41 12 6.41c1.83 0 3.06.78 3.76 1.45l2.56-2.47C16.67 3.86 14.54 2.9 12 2.9 6.98 2.9 2.9 6.98 2.9 12s4.08 9.1 9.1 9.1c5.25 0 8.73-3.69 8.73-8.89 0-.6-.07-1.05-.15-1.5Z"/></svg>
                                    </span>
                                    <span class="review-quote" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></span>
                                </div>
                                <div class="review-stars" role="img" aria-label="Note : 5 sur 5">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.5l2.95 5.98 6.6.96-4.77 4.65 1.12 6.58L12 17.56l-5.9 3.11 1.12-6.58L2.45 9.44l6.6-.96L12 2.5z"/></svg>
                                </div>
                                <blockquote class="review-text">
                                    <p>Très sympathique et vraiment accommodant</p>
                                </blockquote>
                                <footer class="review-footer">
                                    <span class="review-avatar" aria-hidden="true">JP</span>
                                    <span class="review-author">
                                        <span class="review-name">Julie Pomerleau</span>
                                        <span class="review-meta">Avis Google</span>
                                    </span>
                                </footer>
                            </article>
                        </div>
                    </div>

                    <div class="reviews-pagination" data-reviews-pagination aria-label="Pagination des avis"></div>

                    <div class="reviews-footer">
                        <a class="btn btn-outline reviews-google-link" href="https://maps.app.goo.gl/anAp8irkqAi4voKp9" target="_blank" rel="noopener noreferrer">
                            Voir tous les avis Google
                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M7 17 17 7M9 7h8v8" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-section" id="faq" aria-labelledby="faq-title">
            <div class="container">
                <div class="faq-heading">
                    <div>
                        <span class="section-kicker">QUESTIONS FRÉQUENTES</span>
                        <h2 id="faq-title">Tout savoir avant votre départ</h2>
                    </div>
                    <p>Retrouvez ici les réponses essentielles pour organiser votre taxi à Chamonix, un transfert aéroport ou un trajet avec chauffeur privé dans les Alpes, en toute sérénité.</p>
                </div>

                <div class="faq-grid" data-faq-accordion>
                    <div class="faq-column">
                        <article class="faq-item is-open">
                            <h3 class="faq-question">
                                <button type="button" class="faq-toggle" id="faq-toggle-1" aria-expanded="true" aria-controls="faq-panel-1">
                                    <span class="faq-question-text">Comment réserver un taxi à Chamonix ?</span>
                                    <span class="faq-icon" aria-hidden="true"><svg class="faq-icon-plus" viewBox="0 0 24 24" focusable="false"><path d="M12 5v14M5 12h14"/></svg><svg class="faq-icon-minus" viewBox="0 0 24 24" focusable="false"><path d="M5 12h14"/></svg></span>
                                </button>
                            </h3>
                            <div class="faq-panel" id="faq-panel-1" role="region" aria-labelledby="faq-toggle-1">
                                <div class="faq-panel-inner">
                                    <p>Pour réserver un taxi à Chamonix, vous pouvez préparer votre demande depuis le formulaire de réservation de la page d’accueil, puis finaliser par téléphone, WhatsApp ou via la <a href="https://alpestransport.fr/reserver-en-ligne/">page de réservation en ligne</a>. Indiquez votre lieu de prise en charge, votre destination, la date, l’heure et le nombre de passagers afin que l’équipe Alpes Transport puisse organiser votre trajet.</p>
                                </div>
                            </div>
                        </article>

                        <article class="faq-item">
                            <h3 class="faq-question">
                                <button type="button" class="faq-toggle" id="faq-toggle-2" aria-expanded="false" aria-controls="faq-panel-2">
                                    <span class="faq-question-text">Quels aéroports desservez-vous ?</span>
                                    <span class="faq-icon" aria-hidden="true"><svg class="faq-icon-plus" viewBox="0 0 24 24" focusable="false"><path d="M12 5v14M5 12h14"/></svg><svg class="faq-icon-minus" viewBox="0 0 24 24" focusable="false"><path d="M5 12h14"/></svg></span>
                                </button>
                            </h3>
                            <div class="faq-panel" id="faq-panel-2" role="region" aria-labelledby="faq-toggle-2" hidden>
                                <div class="faq-panel-inner">
                                    <p>Alpes Transport propose des transferts aéroport à Chamonix vers les principaux aéroports de la région, notamment Genève, Lyon, Chambéry, Milan, Turin et Zurich. Pour choisir l’itinéraire adapté, consultez notre page <a href="https://alpestransport.fr/transferts-aeroport/">Transferts Aéroport</a>.</p>
                                </div>
                            </div>
                        </article>

                        <article class="faq-item">
                            <h3 class="faq-question">
                                <button type="button" class="faq-toggle" id="faq-toggle-3" aria-expanded="false" aria-controls="faq-panel-3">
                                    <span class="faq-question-text">Proposez-vous des transferts vers les stations de ski ?</span>
                                    <span class="faq-icon" aria-hidden="true"><svg class="faq-icon-plus" viewBox="0 0 24 24" focusable="false"><path d="M12 5v14M5 12h14"/></svg><svg class="faq-icon-minus" viewBox="0 0 24 24" focusable="false"><path d="M5 12h14"/></svg></span>
                                </button>
                            </h3>
                            <div class="faq-panel" id="faq-panel-3" role="region" aria-labelledby="faq-toggle-3" hidden>
                                <div class="faq-panel-inner">
                                    <p>Oui, Alpes Transport assure des transferts privés vers les stations de ski et destinations alpines depuis Chamonix-Mont-Blanc, selon votre itinéraire. Lors de votre demande, précisez votre destination, vos horaires et le nombre de passagers pour organiser un trajet confortable avec un <a href="https://alpestransport.fr/service-de-chauffeur-prive/">chauffeur privé à Chamonix</a>.</p>
                                </div>
                            </div>
                        </article>

                        <article class="faq-item">
                            <h3 class="faq-question">
                                <button type="button" class="faq-toggle" id="faq-toggle-4" aria-expanded="false" aria-controls="faq-panel-4">
                                    <span class="faq-question-text">Quels véhicules sont disponibles ?</span>
                                    <span class="faq-icon" aria-hidden="true"><svg class="faq-icon-plus" viewBox="0 0 24 24" focusable="false"><path d="M12 5v14M5 12h14"/></svg><svg class="faq-icon-minus" viewBox="0 0 24 24" focusable="false"><path d="M5 12h14"/></svg></span>
                                </button>
                            </h3>
                            <div class="faq-panel" id="faq-panel-4" role="region" aria-labelledby="faq-toggle-4" hidden>
                                <div class="faq-panel-inner">
                                    <p>La flotte présentée sur le site comprend la Mercedes Classe S (3 passagers, 2 bagages), le Renault Trafic Van (8 passagers, 8 bagages) et la Mercedes Classe V (7 passagers, 6 bagages). Le choix du véhicule dépend de votre nombre de passagers, de vos bagages et du type de trajet souhaité.</p>
                                </div>
                            </div>
                        </article>

                        <article class="faq-item">
                            <h3 class="faq-question">
                                <button type="button" class="faq-toggle" id="faq-toggle-5" aria-expanded="false" aria-controls="faq-panel-5">
                                    <span class="faq-question-text">Puis-je voyager avec mes bagages et mon matériel de ski ?</span>
                                    <span class="faq-icon" aria-hidden="true"><svg class="faq-icon-plus" viewBox="0 0 24 24" focusable="false"><path d="M12 5v14M5 12h14"/></svg><svg class="faq-icon-minus" viewBox="0 0 24 24" focusable="false"><path d="M5 12h14"/></svg></span>
                                </button>
                            </h3>
                            <div class="faq-panel" id="faq-panel-5" role="region" aria-labelledby="faq-toggle-5" hidden>
                                <div class="faq-panel-inner">
                                    <p>Oui, vous pouvez voyager avec vos bagages, et il est recommandé d’indiquer à l’avance la présence de matériel de ski ou d’équipements volumineux. Cela permet de prévoir le véhicule le plus adapté, comme le Renault Trafic Van ou la Mercedes Classe V, selon la capacité nécessaire.</p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="faq-column">
                        <article class="faq-item">
                            <h3 class="faq-question">
                                <button type="button" class="faq-toggle" id="faq-toggle-6" aria-expanded="false" aria-controls="faq-panel-6">
                                    <span class="faq-question-text">Proposez-vous des transferts vers la Suisse et l’Italie ?</span>
                                    <span class="faq-icon" aria-hidden="true"><svg class="faq-icon-plus" viewBox="0 0 24 24" focusable="false"><path d="M12 5v14M5 12h14"/></svg><svg class="faq-icon-minus" viewBox="0 0 24 24" focusable="false"><path d="M5 12h14"/></svg></span>
                                </button>
                            </h3>
                            <div class="faq-panel" id="faq-panel-6" role="region" aria-labelledby="faq-toggle-6" hidden>
                                <div class="faq-panel-inner">
                                    <p>Oui, Alpes Transport propose des trajets privés depuis Chamonix vers des destinations en Suisse et en Italie, notamment Genève, Zurich, Milan ou Turin. Vous pouvez consulter les <a href="https://alpestransport.fr/nos-services/">services de transport privé</a> pour identifier la prestation la plus adaptée à votre déplacement.</p>
                                </div>
                            </div>
                        </article>

                        <article class="faq-item">
                            <h3 class="faq-question">
                                <button type="button" class="faq-toggle" id="faq-toggle-7" aria-expanded="false" aria-controls="faq-panel-7">
                                    <span class="faq-question-text">Comment connaître le prix de mon trajet ?</span>
                                    <span class="faq-icon" aria-hidden="true"><svg class="faq-icon-plus" viewBox="0 0 24 24" focusable="false"><path d="M12 5v14M5 12h14"/></svg><svg class="faq-icon-minus" viewBox="0 0 24 24" focusable="false"><path d="M5 12h14"/></svg></span>
                                </button>
                            </h3>
                            <div class="faq-panel" id="faq-panel-7" role="region" aria-labelledby="faq-toggle-7" hidden>
                                <div class="faq-panel-inner">
                                    <p>Pour connaître le prix de votre trajet, le plus simple est de transmettre les détails de votre demande : lieu de départ, destination, date, heure, nombre de passagers et bagages. Vous pouvez faire une demande via la <a href="https://alpestransport.fr/reserver-en-ligne/">réservation en ligne</a>, par téléphone ou par WhatsApp pour recevoir une réponse adaptée à votre itinéraire.</p>
                                </div>
                            </div>
                        </article>

                        <article class="faq-item">
                            <h3 class="faq-question">
                                <button type="button" class="faq-toggle" id="faq-toggle-8" aria-expanded="false" aria-controls="faq-panel-8">
                                    <span class="faq-question-text">Puis-je réserver un chauffeur privé pour un déplacement professionnel ?</span>
                                    <span class="faq-icon" aria-hidden="true"><svg class="faq-icon-plus" viewBox="0 0 24 24" focusable="false"><path d="M12 5v14M5 12h14"/></svg><svg class="faq-icon-minus" viewBox="0 0 24 24" focusable="false"><path d="M5 12h14"/></svg></span>
                                </button>
                            </h3>
                            <div class="faq-panel" id="faq-panel-8" role="region" aria-labelledby="faq-toggle-8" hidden>
                                <div class="faq-panel-inner">
                                    <p>Oui, vous pouvez réserver un chauffeur privé à Chamonix pour un déplacement professionnel, un rendez-vous ou un transfert lié à votre activité. Alpes Transport propose un service discret et confortable, à organiser selon votre programme via la page <a href="https://alpestransport.fr/voyages-daffaires/">Voyages d’Affaires</a>.</p>
                                </div>
                            </div>
                        </article>

                        <article class="faq-item">
                            <h3 class="faq-question">
                                <button type="button" class="faq-toggle" id="faq-toggle-9" aria-expanded="false" aria-controls="faq-panel-9">
                                    <span class="faq-question-text">Proposez-vous des transferts pour les familles et les groupes ?</span>
                                    <span class="faq-icon" aria-hidden="true"><svg class="faq-icon-plus" viewBox="0 0 24 24" focusable="false"><path d="M12 5v14M5 12h14"/></svg><svg class="faq-icon-minus" viewBox="0 0 24 24" focusable="false"><path d="M5 12h14"/></svg></span>
                                </button>
                            </h3>
                            <div class="faq-panel" id="faq-panel-9" role="region" aria-labelledby="faq-toggle-9" hidden>
                                <div class="faq-panel-inner">
                                    <p>Oui, Alpes Transport propose des transferts adaptés aux familles et aux groupes, avec des véhicules comme la Mercedes Classe V (7 passagers, 6 bagages) ou le Renault Trafic Van (8 passagers, 8 bagages). Indiquez la composition de votre groupe et vos bagages pour préparer le <a href="https://alpestransport.fr/transferts-aeroport/">transfert aéroport</a> ou le trajet privé le plus adapté.</p>
                                </div>
                            </div>
                        </article>

                        <article class="faq-item">
                            <h3 class="faq-question">
                                <button type="button" class="faq-toggle" id="faq-toggle-10" aria-expanded="false" aria-controls="faq-panel-10">
                                    <span class="faq-question-text">Comment organiser un transfert depuis l'aéroport de Genève vers Chamonix ?</span>
                                    <span class="faq-icon" aria-hidden="true"><svg class="faq-icon-plus" viewBox="0 0 24 24" focusable="false"><path d="M12 5v14M5 12h14"/></svg><svg class="faq-icon-minus" viewBox="0 0 24 24" focusable="false"><path d="M5 12h14"/></svg></span>
                                </button>
                            </h3>
                            <div class="faq-panel" id="faq-panel-10" role="region" aria-labelledby="faq-toggle-10" hidden>
                                <div class="faq-panel-inner">
                                    <p>Pour organiser un transfert depuis l’aéroport de Genève vers Chamonix, communiquez votre horaire d’arrivée, le nombre de passagers, vos bagages et votre adresse à Chamonix. Vous pouvez préparer votre demande en ligne puis la finaliser avec l’équipe Alpes Transport, et consulter la page dédiée au <a href="https://alpestransport.fr/transfert-geneve-chamonix/">transfert Genève – Chamonix</a> pour plus d’informations.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="final-cta" id="contact-cta" aria-labelledby="final-cta-title">
            <div class="final-cta-bg" aria-hidden="true">
                <img src="<?= e(asset('images/alpes-final-cta-background.webp')) ?>" alt="" width="1920" height="1080" loading="lazy" decoding="async">
                <div class="final-cta-overlay"></div>
            </div>
            <div class="container final-cta-inner">
                <div class="final-cta-content">
                    <span class="section-kicker final-cta-kicker">VOYAGEZ AVEC ALPES TRANSPORT</span>
                    <h2 id="final-cta-title">Votre prochain voyage commence avec Alpes Transport</h2>
                    <p class="final-cta-text">Organisez votre transfert privé à Chamonix et dans les Alpes. Que vous voyagiez pour les vacances ou pour affaires, notre équipe vous accompagne dans l’organisation de votre prochain trajet.</p>
                    <div class="final-cta-actions">
                        <a class="btn btn-gold final-cta-btn" href="#reservation">
                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M8 2v3M16 2v3M3.5 9h17M5 5h14a1.5 1.5 0 0 1 1.5 1.5v13A1.5 1.5 0 0 1 19 21H5a1.5 1.5 0 0 1-1.5-1.5v-13A1.5 1.5 0 0 1 5 5Z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            Réserver votre trajet
                        </a>
                        <a class="btn final-cta-btn final-cta-btn-secondary" href="<?= e($config['contact_url']) ?>">
                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M4 6.5A1.5 1.5 0 0 1 5.5 5h13A1.5 1.5 0 0 1 20 6.5v11a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 4 17.5v-11Zm1.2.5 6.8 5.6L18.8 7" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            Nous contacter
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sr-only" id="apropos" aria-label="À propos — section en préparation"></section>
        <section class="sr-only" id="contact" aria-label="Contact — section en préparation"></section>
    </main>

    <?php require __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
