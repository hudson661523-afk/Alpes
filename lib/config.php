<?php
/**
 * Shared site configuration.
 * Only verified contact details and existing website URLs are included here.
 */
return [
    'site_name'        => 'Alpes Transport',
    'page_title'       => 'Taxi Chamonix | Chauffeur privé & transfert aéroport – Alpes Transport',
    'page_description' => 'Taxi à Chamonix-Mont-Blanc : Alpes Transport organise vos transferts aéroport, trajets avec chauffeur privé et déplacements sur réservation dans les Alpes, en France, Suisse et Italie.',

    'phone'      => '+33 (0)6 73 54 98 05',
    'phone_href' => 'tel:+33673549805',
    'whatsapp'   => 'https://wa.me/+33673549805',
    'email'      => 'alpestransport@gmail.com',
    'email_href' => 'mailto:alpestransport@gmail.com',
    'address'    => '15 Route des Combes, 74400 Chamonix-Mont-Blanc, France',
    'maps_url'   => 'https://maps.app.goo.gl/anAp8irkqAi4voKp9',
    'siret'      => '538 714 072 00021',
    'licences'   => [
        'Licence voyageurs 2022/84/0000371',
        'Licence VTC EVTC074220050',
        'Licence Taxi n° 9 Chamonix-Mont-Blanc',
    ],

    'home_url'    => '/',
    'booking_url' => 'https://alpestransport.fr/reserver-en-ligne/',
    'about_url'   => 'https://alpestransport.fr/a-propos-de-nous/',
    'contact_url' => 'https://alpestransport.fr/contacter-nous/',
    'itineraries_url' => 'https://alpestransport.fr/options-itineraires-turin-aoste-annecy-geneve/',
    'cookie_policy_url' => 'https://alpestransport.fr/cookie-policy-eu/',

    'services' => [
        ['label' => 'Transferts Aéroport', 'url' => 'https://alpestransport.fr/transferts-aeroport/'],
        ['label' => 'Service de Chauffeur Privé', 'url' => 'https://alpestransport.fr/service-de-chauffeur-prive/'],
        ['label' => 'Événements & Occasions Spéciales', 'url' => 'https://alpestransport.fr/evenements-occasions-speciales/'],
        ['label' => 'Service Touristique', 'url' => 'https://alpestransport.fr/service-touristique/'],
        ['label' => 'Voyages d’Affaires', 'url' => 'https://alpestransport.fr/voyages-daffaires/'],
        ['label' => 'Voyages pour Mariages et Événements', 'url' => 'https://alpestransport.fr/voyages-pour-mariages-et-evenements/'],
    ],

    'destinations' => [
        ['label' => 'Genève & Aéroport GVA', 'url' => 'https://alpestransport.fr/transfert-geneve-chamonix/'],
        ['label' => 'Lyon', 'url' => 'https://alpestransport.fr/transfert-lyon-chamonix/'],
        ['label' => 'Milan', 'url' => 'https://alpestransport.fr/transfert-milan-chamonix/'],
        ['label' => 'Zurich', 'url' => 'https://alpestransport.fr/transfert-zurich-chamonix/'],
        ['label' => 'Turin & Aoste', 'url' => 'https://alpestransport.fr/turin-aoste-italie/'],
        ['label' => 'Tous les itinéraires', 'url' => 'https://alpestransport.fr/options-itineraires-turin-aoste-annecy-geneve/'],
    ],

    'footer_destinations' => [
        ['label' => 'Transfert Genève – Chamonix', 'url' => 'https://alpestransport.fr/transfert-geneve-chamonix/'],
        ['label' => 'Taxi Genève – Chamonix', 'url' => 'https://alpestransport.fr/taxi-geneve-chamonix/'],
        ['label' => 'Transfert Lyon – Chamonix', 'url' => 'https://alpestransport.fr/transfert-lyon-chamonix/'],
        ['label' => 'Transfert Chambéry – Chamonix', 'url' => 'https://alpestransport.fr/transfert-chambery-chamonix/'],
        ['label' => 'Transfert Zurich – Chamonix', 'url' => 'https://alpestransport.fr/transfert-zurich-chamonix/'],
        ['label' => 'Transfert Milan – Chamonix', 'url' => 'https://alpestransport.fr/transfert-milan-chamonix/'],
    ],

    'socials' => [
        ['label' => 'X', 'url' => 'https://x.com/AlpesTransport'],
        ['label' => 'Facebook', 'url' => 'https://www.facebook.com/profile.php?id=61591380857146'],
        ['label' => 'YouTube', 'url' => 'https://www.youtube.com/channel/UCJnDBS0c4UpfiN3H60zS6fg'],
        ['label' => 'Instagram', 'url' => 'https://www.instagram.com/alpestransportlimo/'],
    ],

    // All profiles are published on the verified original website and are used only in structured data.
    'schema_socials' => [
        'https://x.com/AlpesTransport',
        'https://www.facebook.com/profile.php?id=61591380857146',
        'https://www.youtube.com/channel/UCJnDBS0c4UpfiN3H60zS6fg',
        'https://www.pinterest.com/alpestransportlimo/_pins/',
        'https://www.instagram.com/alpestransportlimo/',
        'https://www.dailymotion.com/user/alpestransport',
        'https://www.tiktok.com/@alpestransport',
    ],
];
