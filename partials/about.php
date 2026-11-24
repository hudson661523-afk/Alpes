<?php
$config = site_config();
$aboutImage = asset('images/alpes-about-chamonix.webp');
$aboutImageFile = __DIR__ . '/../assets/images/alpes-about-chamonix.webp';
$aboutImageSize = is_file($aboutImageFile) ? @getimagesize($aboutImageFile) : false;
?>
<section class="about-section" id="a-propos" aria-labelledby="about-title">
    <div class="container about-inner">
        <div class="about-visual">
            <div class="about-image-frame">
                <img src="<?= e($aboutImage) ?>"
                     alt="Alpes Transport, service de taxi et chauffeur privé à Chamonix-Mont-Blanc"
                     <?php if ($aboutImageSize): ?>width="<?= e((string) $aboutImageSize[0]) ?>" height="<?= e((string) $aboutImageSize[1]) ?>"<?php endif; ?>
                     loading="lazy"
                     decoding="async">
            </div>
            <p class="about-visual-note"><span aria-hidden="true"></span> Chamonix-Mont-Blanc · Alpes françaises</p>
        </div>

        <div class="about-content">
            <span class="section-kicker">À PROPOS D’ALPES TRANSPORT</span>
            <h2 id="about-title">Un chauffeur privé à Chamonix, <em>à la mesure de vos trajets.</em></h2>

            <p>À Chamonix-Mont-Blanc, Alpes Transport propose depuis 2011 un service de taxi et de chauffeur privé pour vos déplacements en France et vers les grandes destinations européennes. Notre flotte Mercedes accompagne particuliers, professionnels, groupes et personnes à mobilité réduite, avec des chauffeurs multilingues attentifs à chaque demande.</p>
            <p>Pour un taxi à Chamonix, un transfert aéroport ou un rendez-vous d’affaires, chaque trajet est organisé à partir de votre lieu de prise en charge, de l’heure souhaitée et du nombre de passagers. Nos chauffeurs desservent notamment Genève, Lyon, Zurich et Milan, avec la même exigence de confort et de discrétion. Pour préparer votre séjour, le <a href="https://www.chamonix.com/" target="_blank" rel="noopener noreferrer">site officiel de l’office de tourisme de la vallée</a> présente les villages, activités et itinéraires de Chamonix-Mont-Blanc.</p>

            <ul class="about-highlights" aria-label="Prestations Alpes Transport">
                <li class="about-highlight">
                    <span class="about-highlight-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false"><path d="M17.8 19.2 16 11l3.5-3.5a2.12 2.12 0 0 0-3-3L13 8 4.8 6.2a.6.6 0 0 0-.6.9L8 12l-2.2 2.2-2.4-.4a.6.6 0 0 0-.6 1l3 3 3 3a.6.6 0 0 0 1-.6l-.4-2.4L12 16l4.9 3.8a.6.6 0 0 0 .9-.6Z"/></svg>
                    </span>
                    <div>
                        <h3>Transferts aéroportuaires</h3>
                        <p>Genève, Lyon, Zurich et Milan selon votre itinéraire.</p>
                    </div>
                </li>
                <li class="about-highlight">
                    <span class="about-highlight-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 12h18"/></svg>
                    </span>
                    <div>
                        <h3>Déplacements d’affaires</h3>
                        <p>Des arrivées aux rendez-vous, un trajet organisé en amont.</p>
                    </div>
                </li>
                <li class="about-highlight">
                    <span class="about-highlight-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false"><path d="M4 13l1.6-4.8A2 2 0 0 1 7.5 6.8h9a2 2 0 0 1 1.9 1.4L20 13v3H4v-3Z"/><path d="M7 13h.01M17 13h.01M6 16v2M18 16v2"/></svg>
                    </span>
                    <div>
                        <h3>Trajets privés sur mesure</h3>
                        <p>Chamonix et les Alpes, à votre rythme.</p>
                    </div>
                </li>
            </ul>

            <a class="about-cta" href="<?= e($config['about_url']) ?>" target="_blank" rel="noopener noreferrer">
                En savoir plus sur Alpes Transport
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>
    </div>
</section>
