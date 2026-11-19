<?php
require_once __DIR__ . '/lib/helpers.php';
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

        <section class="intro" id="intro" aria-labelledby="intro-title">
            <div class="container intro-inner">
                <div>
                    <span class="section-kicker">L’ART DU DÉPLACEMENT</span>
                    <h2 id="intro-title">Votre voyage, <em>notre attention.</em></h2>
                </div>
                <p>Au pied du Mont-Blanc, Alpes Transport vous propose des solutions de transport privé pour vos trajets professionnels, vos vacances et vos déplacements dans les Alpes.</p>
            </div>
        </section>

        <section class="services-section" id="services" aria-labelledby="services-title">
            <div class="container">
                <div class="services-heading">
                    <div>
                        <span class="section-kicker">NOS PRESTATIONS</span>
                        <h2 id="services-title">Voyagez en toute liberté,<br><em>au rythme des Alpes.</em></h2>
                    </div>
                    <p>Que vous arriviez dans la région ou souhaitiez explorer les environs, profitez d’un transport privé pensé autour de votre confort et de votre tranquillité.</p>
                </div>

                <div class="services-grid">
                    <article class="service-card service-card-airport">
                        <div class="service-card-image" role="img" aria-label="Route alpine au cœur des montagnes"></div>
                        <div class="service-card-content">
                            <span class="service-number">01 / TRANSFERTS</span>
                            <h3>Transferts aéroport</h3>
                            <p>Rejoignez Chamonix et les destinations alpines depuis votre aéroport d’arrivée, avec un trajet organisé selon votre programme.</p>
                            <a href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer" class="service-link">Organiser mon transfert <span aria-hidden="true">↗</span></a>
                        </div>
                    </article>

                    <article class="service-card service-card-chauffeur">
                        <div class="service-card-image" role="img" aria-label="Paysage de montagne dans les Alpes"></div>
                        <div class="service-card-content">
                            <span class="service-number">02 / SUR MESURE</span>
                            <h3>Chauffeur privé</h3>
                            <p>Pour vos rendez-vous, vos sorties ou vos déplacements personnels, bénéficiez d’un service privé adapté à vos besoins.</p>
                            <a href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer" class="service-link">Réserver un chauffeur <span aria-hidden="true">↗</span></a>
                        </div>
                    </article>

                    <article class="service-card service-card-alps">
                        <div class="service-card-image" role="img" aria-label="Route panoramique dans les montagnes"></div>
                        <div class="service-card-content">
                            <span class="service-number">03 / DÉCOUVERTE</span>
                            <h3>Déplacements dans les Alpes</h3>
                            <p>Parcourez Chamonix et les environs en toute sérénité, que votre déplacement soit professionnel ou lié à vos vacances.</p>
                            <a href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer" class="service-link">Planifier mon trajet <span aria-hidden="true">↗</span></a>
                        </div>
                    </article>
                </div>

                <div class="services-bottom">
                    <span>Un trajet à organiser ?</span>
                    <a class="btn btn-dark" href="<?= e($config['booking_url']) ?>" target="_blank" rel="noopener noreferrer">Réserver votre trajet <span aria-hidden="true">↗</span></a>
                </div>
            </div>
        </section>

        <section class="sr-only" id="apropos" aria-label="À propos — section en préparation"></section>
        <section class="sr-only" id="flotte" aria-label="Flotte — section en préparation"></section>
        <section class="sr-only" id="contact" aria-label="Contact — section en préparation"></section>
    </main>

    <?php require __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
