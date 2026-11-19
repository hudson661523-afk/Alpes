<?php
/**
 * Shared site configuration.
 * Only verified contact details and existing website URLs are included here.
 */
return [
    'site_name'        => 'Alpes Transport',
    'page_title'       => 'Alpes Transport | Chauffeur privé à Chamonix',
    'page_description' => 'Alpes Transport vous accompagne à Chamonix pour vos transferts aéroport, déplacements privés et trajets dans les Alpes.',

    'phone'      => '+33 (0)6 73 54 98 05',
    'phone_href' => 'tel:+33673549805',
    'whatsapp'   => 'https://wa.me/+33673549805',
    'email'      => 'alpestransport@gmail.com',
    'email_href' => 'mailto:alpestransport@gmail.com',

    'booking_url' => 'https://alpestransport.fr/reserver-en-ligne/',
    'about_url'   => 'https://alpestransport.fr/a-propos-de-nous/',
    'contact_url' => 'https://alpestransport.fr/contacter-nous/',
    'itineraries_url' => 'https://alpestransport.fr/options-itineraires-turin-aoste-annecy-geneve/',

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
];
