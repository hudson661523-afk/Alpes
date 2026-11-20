<?php
$config = site_config();
$today = date('Y-m-d');
$waBase = $config['whatsapp'];
$waDefault = $waBase . '?text=' . rawurlencode('Bonjour Alpes Transport, je souhaite organiser un trajet.');
$airportsUrl = $config['services'][0]['url'];
$location = require __DIR__ . '/../lib/location-config.php';
?>
<section class="quick-booking" id="reservation" aria-labelledby="quick-booking-title">
    <div class="container quick-booking-inner">
        <div class="quick-booking-copy">
            <span class="section-kicker">RÉSERVATION PRIVÉE · CHAMONIX-MONT-BLANC</span>
            <h2 id="quick-booking-title">Votre trajet, <em>préparé avec soin.</em></h2>
            <p>Indiquez votre lieu de prise en charge, votre destination et l’heure souhaitée. Que vous réserviez un taxi à Chamonix pour un déplacement local ou un transfert aéroport Chamonix, chaque trajet est organisé selon votre programme.</p>
            <p>Notre service de chauffeur privé accompagne également vos rendez-vous professionnels et vos trajets dans les Alpes.</p>

            <a class="footer-text-link" href="<?= e($airportsUrl) ?>" target="_blank" rel="noopener noreferrer">
                Découvrir nos transferts aéroport
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
            </a>

            <div class="quick-booking-contact">
                <h3 class="quick-booking-contact-title">Une question avant de réserver ?</h3>
                <div class="quick-booking-contact-links">
                    <a class="quick-booking-contact-link" href="<?= e($config['phone_href']) ?>">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M6.6 2.8 9 7.1 7.4 9c1 2 2.6 3.6 4.6 4.6l1.9-1.6 4.3 2.4-.4 3.1c-.2 1.1-1.1 1.9-2.2 1.9C8.2 19.4 4.6 15.8 4 7.5c0-1.1.8-2 1.8-2.2l.8-.5Z"/></svg>
                        <span><small>Appeler</small><strong><?= e($config['phone']) ?></strong></span>
                    </a>
                    <a class="quick-booking-contact-link" href="<?= e($waDefault) ?>" target="_blank" rel="noopener noreferrer">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M20 11.7c0 4.3-3.5 7.8-7.8 7.8-1.3 0-2.6-.3-3.7-.9L3 20l1.5-4.4A7.7 7.7 0 0 1 3.3 11C3.3 6.7 6.8 3.2 11 3.2S20 6.7 20 11Zm-5.5 3.1c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1-.2-.1-1-.4-2-1.2-.7-.6-1.2-1.4-1.3-1.6-.1-.2 0-.3.1-.4l.4-.5c.1-.1.1-.3.2-.4 0-.1 0-.3 0-.4l-.8-1.8c-.2-.4-.4-.4-.5-.4h-.5c-.2 0-.4.1-.6.3-.2.2-.7.7-.7 1.7s.7 2 .8 2.1c.1.2 1.4 2.1 3.4 2.9 1.2.5 1.6.6 2.2.5.3 0 1-.1 1.6-.6.5-.4.8-1 .9-1.1.1-.2.1-.3 0-.4Z"/></svg>
                        <span><small>Écrire</small><strong>WhatsApp</strong></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="quick-booking-card">
            <form class="quick-booking-form"
                  data-quick-booking
                  data-whatsapp-base="<?= e($waBase) ?>"
                  data-location-provider="<?= e($location['provider']) ?>"
                  data-location-endpoint="<?= e($location['endpoint']) ?>"
                  data-location-key="<?= e($location['key']) ?>"
                  data-location-language="<?= e($location['language']) ?>"
                  data-location-bias-lat="<?= e($location['bias_lat']) ?>"
                  data-location-bias-lon="<?= e($location['bias_lon']) ?>">
                <div class="quick-booking-card-head">
                    <span class="quick-booking-step">01 · VOTRE TRAJET</span>
                    <h3>Préparez votre déplacement</h3>
                </div>

                <div class="quick-booking-grid">
                    <div class="quick-booking-field qb-place-field" data-qb-place-field="pickup">
                        <label for="qb-pickup">Lieu de prise en charge</label>
                        <div class="qb-place-input-wrap">
                            <svg class="qb-place-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z" fill="currentColor"/></svg>
                            <input id="qb-pickup" name="pickup" type="text" required autocomplete="off" placeholder="Ex. Aéroport de Genève, Chamonix centre…" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-controls="qb-pickup-suggestions" aria-haspopup="listbox">
                            <button class="qb-place-clear" type="button" data-qb-place-clear aria-label="Effacer le lieu de prise en charge" hidden><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M6 6l12 12M18 6 6 18" fill="none" stroke="currentColor" stroke-width="2"/></svg></button>
                            <div class="qb-suggestions" id="qb-pickup-suggestions" data-qb-suggestions role="listbox" aria-label="Suggestions de lieux de prise en charge" hidden></div>
                        </div>
                        <input type="hidden" name="pickup_location_name" data-qb-location-name>
                        <input type="hidden" name="pickup_location_description" data-qb-location-description>
                        <input type="hidden" name="pickup_lat" data-qb-lat>
                        <input type="hidden" name="pickup_lon" data-qb-lon>
                        <input type="hidden" name="pickup_osm_id" data-qb-osm-id>
                        <span class="qb-place-status" data-qb-place-status role="status" aria-live="polite"></span>
                    </div>

                    <div class="quick-booking-field qb-place-field" data-qb-place-field="destination">
                        <label for="qb-destination">Destination</label>
                        <div class="qb-place-input-wrap">
                            <svg class="qb-place-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z" fill="currentColor"/></svg>
                            <input id="qb-destination" name="destination" type="text" required autocomplete="off" placeholder="Ex. Chamonix-Mont-Blanc, Megève…" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-controls="qb-destination-suggestions" aria-haspopup="listbox">
                            <button class="qb-place-clear" type="button" data-qb-place-clear aria-label="Effacer la destination" hidden><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M6 6l12 12M18 6 6 18" fill="none" stroke="currentColor" stroke-width="2"/></svg></button>
                            <div class="qb-suggestions" id="qb-destination-suggestions" data-qb-suggestions role="listbox" aria-label="Suggestions de destinations" hidden></div>
                        </div>
                        <input type="hidden" name="destination_location_name" data-qb-location-name>
                        <input type="hidden" name="destination_location_description" data-qb-location-description>
                        <input type="hidden" name="destination_lat" data-qb-lat>
                        <input type="hidden" name="destination_lon" data-qb-lon>
                        <input type="hidden" name="destination_osm_id" data-qb-osm-id>
                        <span class="qb-place-status" data-qb-place-status role="status" aria-live="polite"></span>
                    </div>

                    <div class="quick-booking-field">
                        <label for="qb-date">Date de prise en charge</label>
                        <input id="qb-date" name="date" type="date" required min="<?= e($today) ?>">
                    </div>

                    <div class="quick-booking-field">
                        <label for="qb-time">Heure de prise en charge</label>
                        <input id="qb-time" name="time" type="time" required>
                    </div>

                    <div class="quick-booking-field quick-booking-field--wide">
                        <label for="qb-passengers">Nombre de passagers</label>
                        <input id="qb-passengers" name="passengers" type="number" min="1" step="1" value="1" required inputmode="numeric">
                    </div>
                </div>

                <p class="qb-geocoder-attribution">
                    Recherche de lieux : <span data-qb-provider-label>Photon</span> · Données ©
                    <a href="https://www.openstreetmap.org/copyright" target="_blank" rel="noopener noreferrer">contributeurs OpenStreetMap</a>
                    — <a href="https://opendatacommons.org/licenses/odbl/" target="_blank" rel="noopener noreferrer">ODbL</a>.
                    <a href="https://photon.komoot.io/" target="_blank" rel="noopener noreferrer" data-qb-provider-link>En savoir plus</a>.
                </p>

                <div class="quick-booking-actions">
                    <a class="btn btn-gold" href="<?= e($config['email_href']) ?>" data-qb-email>
                        Réserver en ligne
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </a>
                    <button class="btn quick-booking-prepare" type="button" data-qb-prepare>
                        Préparer mon récapitulatif
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M5 12h13m-5-5 5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
                    </button>
                </div>

                <div class="quick-booking-recap">
                    <div class="quick-booking-recap-head">
                        <span class="quick-booking-step">02 · VOTRE RÉCAPITULATIF</span>
                        <span class="quick-booking-status" data-qb-status role="status" aria-live="polite"></span>
                    </div>
                    <label class="sr-only" for="qb-summary">Récapitulatif de votre trajet, à copier ou à envoyer</label>
                    <textarea id="qb-summary" data-qb-summary readonly rows="6" placeholder="Votre récapitulatif s’affichera ici une fois les champs renseignés."></textarea>
                    <div class="quick-booking-recap-actions">
                        <button class="quick-booking-copy-btn" type="button" data-qb-copy>Copier le texte</button>
                        <a class="quick-booking-whatsapp" data-qb-whatsapp href="<?= e($waDefault) ?>" target="_blank" rel="noopener noreferrer">Envoyer sur WhatsApp <span aria-hidden="true">↗</span></a>
                    </div>
                </div>

                <p class="quick-booking-disclaimer">Les informations saisies restent sur votre appareil : aucun envoi, calcul de prix ou accusé de réception n’est effectué automatiquement. Sélectionner une suggestion enregistre ses données OpenStreetMap localement ; la saisie libre reste possible. Finalisez votre demande sur le site de réservation, par téléphone ou sur WhatsApp.</p>
            </form>
        </div>
    </div>
</section>
