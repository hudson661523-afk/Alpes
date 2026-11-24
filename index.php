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
                            <img src="<?= e(asset('images/alpes-airport-transfer.png')) ?>" alt="Véhicule avec chauffeur pour un transfert aéroport entre Chamonix et les aéroports des Alpes" width="1448" height="1086" loading="lazy" decoding="async">
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
                            <img src="<?= e(asset('images/alpes-private-chauffeur.png')) ?>" alt="Chauffeur privé au volant d’un véhicule de prestige pour des trajets à Chamonix" width="1448" height="1086" loading="lazy" decoding="async">
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
                            <img src="<?= e(asset('images/alpes-chamonix-alpine-tour.png')) ?>" alt="Route de montagne dans les Alpes près de Chamonix pour un service touristique privé" width="1448" height="1086" loading="lazy" decoding="async">
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
                            <img src="<?= e(asset('images/alpes-fleet-mercedes-s-class.webp')) ?>" alt="Mercedes Classe S noire pour vos déplacements privés à Chamonix" width="1122" height="1402" loading="lazy" decoding="async">
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
                            <img src="<?= e(asset('images/alpes-fleet-renault-trafic.webp')) ?>" alt="Renault Trafic noir pour les transferts de groupe à Chamonix" width="1122" height="1402" loading="lazy" decoding="async">
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
                            <img src="<?= e(asset('images/alpes-fleet-mercedes-v-class.webp')) ?>" alt="Mercedes Classe V noire pour les transferts privés dans les Alpes" width="1122" height="1402" loading="lazy" decoding="async">
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

        <section class="intro" id="intro" aria-labelledby="intro-title">
            <div class="container intro-inner">
                <div>
                    <span class="section-kicker">L’ART DU DÉPLACEMENT</span>
                    <h2 id="intro-title">Votre voyage, <em>notre attention.</em></h2>
                </div>
                <p>Au pied du Mont-Blanc, Alpes Transport vous propose des solutions de transport privé pour vos trajets professionnels, vos vacances et vos déplacements dans les Alpes.</p>
            </div>
        </section>

        <section class="sr-only" id="apropos" aria-label="À propos — section en préparation"></section>
        <section class="sr-only" id="contact" aria-label="Contact — section en préparation"></section>
    </main>

    <?php require __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
