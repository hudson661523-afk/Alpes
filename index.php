<?php
/** Alpes Transport — custom PHP landing page (staging preview) */
$siteName = 'Alpes Transport';
$pageTitle = 'Alpes Transport | Chauffeur privé à Chamonix';
$pageDescription = 'Alpes Transport vous accompagne à Chamonix pour vos transferts aéroport, déplacements privés et trajets dans les Alpes.';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="robots" content="noindex, nofollow">
  <meta name="theme-color" content="#11191d">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/main.js" defer></script>
</head>
<body>
  <a class="skip-link" href="#main">Aller au contenu</a>
  <header class="site-header" id="site-header">
    <div class="header-inner container">
      <a class="brand" href="/" aria-label="Alpes Transport, accueil">
        <span class="brand-mark" aria-hidden="true">
          <svg viewBox="0 0 70 50" fill="none"><path d="M4 43 24 14l11 15L46 5l20 38" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="m18 22 6-8 5 7M40 18l6-13 7 14" stroke="currentColor" stroke-width="2"/></svg>
        </span>
        <span class="brand-text"><strong>ALPES TRANSPORT</strong><small>CHAMONIX · MONT-BLANC</small></span>
      </a>
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="Ouvrir le menu">
        <span></span><span></span><span></span>
      </button>
      <nav class="primary-nav" id="primary-navigation" aria-label="Navigation principale">
        <a href="#accueil" class="is-active">Accueil</a>
        <a href="#apropos">À propos</a>
        <a href="#services">Nos services</a>
        <a href="#flotte">Notre flotte</a>
        <a href="#contact">Contact</a>
        <a class="nav-cta" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">Réserver <span aria-hidden="true">↗</span></a>
      </nav>
    </div>
  </header>

  <main id="main">
    <section class="hero" id="accueil" aria-labelledby="hero-title">
      <div class="hero-image" aria-hidden="true"></div>
      <div class="hero-shade" aria-hidden="true"></div>
      <div class="hero-content container">
        <div class="hero-copy">
          <span class="eyebrow"><span class="eyebrow-line"></span> CHAUFFEUR PRIVÉ · CHAMONIX MONT-BLANC</span>
          <h1 id="hero-title">L’excellence du voyage <em>au cœur des Alpes.</em></h1>
          <p>Transferts aéroport, chauffeur privé et déplacements sur mesure au départ de Chamonix. Voyagez avec sérénité et élégance.</p>
          <div class="hero-actions">
            <a class="btn btn-gold" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">Réserver votre trajet <span aria-hidden="true">↗</span></a>
            <a class="text-link" href="#services">Découvrir nos services <span aria-hidden="true">→</span></a>
          </div>
        </div>
        <div class="hero-side-label" aria-hidden="true">CHAMONIX · FRANCE <span>—</span> 45°55′ N</div>
        <div class="hero-bottom">
          <span>01 <span class="hero-bottom-rule"></span> 03</span>
          <a href="#intro" aria-label="Faire défiler vers la section suivante">DÉCOUVRIR <span aria-hidden="true">↓</span></a>
        </div>
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
              <a href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer" class="service-link">Organiser mon transfert <span aria-hidden="true">↗</span></a>
            </div>
          </article>

          <article class="service-card service-card-chauffeur">
            <div class="service-card-image" role="img" aria-label="Paysage de montagne dans les Alpes"></div>
            <div class="service-card-content">
              <span class="service-number">02 / SUR MESURE</span>
              <h3>Chauffeur privé</h3>
              <p>Pour vos rendez-vous, vos sorties ou vos déplacements personnels, bénéficiez d’un service privé adapté à vos besoins.</p>
              <a href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer" class="service-link">Réserver un chauffeur <span aria-hidden="true">↗</span></a>
            </div>
          </article>

          <article class="service-card service-card-alps">
            <div class="service-card-image" role="img" aria-label="Route panoramique dans les montagnes"></div>
            <div class="service-card-content">
              <span class="service-number">03 / DÉCOUVERTE</span>
              <h3>Déplacements dans les Alpes</h3>
              <p>Parcourez Chamonix et les environs en toute sérénité, que votre déplacement soit professionnel ou lié à vos vacances.</p>
              <a href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer" class="service-link">Planifier mon trajet <span aria-hidden="true">↗</span></a>
            </div>
          </article>
        </div>

        <div class="services-bottom">
          <span>Un trajet à organiser ?</span>
          <a class="btn btn-dark" href="https://alpestransport.fr/reserver-en-ligne/" target="_blank" rel="noopener noreferrer">Réserver votre trajet <span aria-hidden="true">↗</span></a>
        </div>
      </div>
    </section>
    <section class="sr-only" id="apropos" aria-label="À propos — section en préparation"></section>
    <section class="sr-only" id="flotte" aria-label="Flotte — section en préparation"></section>
    <section class="sr-only" id="contact" aria-label="Contact — section en préparation"></section>
  </main>
  <footer class="site-footer"><div class="container"><span>© <?= date('Y') ?> Alpes Transport</span><span>Site de démonstration — en développement</span></div></footer>
</body>
</html>
