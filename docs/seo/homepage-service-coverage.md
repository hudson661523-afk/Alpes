# Homepage service coverage — prepared, pending images

Status: content and layout prepared only. The homepage still renders the three
services that already have approved WebP images. The three additional cards
must not be added until the website owner supplies the images listed below.

Source checked: `https://alpestransport.fr/nos-services/` (read-only, 2026-11-24).
Exact service labels and descriptions are preserved from that page. Slugs are
preserved from `docs/seo/keyword-url-mapping.md` and `lib/config.php`.

## Six confirmed core services

| # | Exact label | Verified URL | Source description | Homepage image |
|---:|---|---|---|---|
| 1 | Transferts Aéroport | `https://alpestransport.fr/transferts-aeroport/` | Transferts fiables, confortables et ponctuels vers et depuis les principaux aéroports en France, en Suisse et en Italie, notamment Genève, Lyon, Milan et plus encore. | `assets/images/alpes-airport-transfer.webp` (supplied) |
| 2 | Service de Chauffeur Privé | `https://alpestransport.fr/service-de-chauffeur-prive/` | Un chauffeur dédié à votre disposition pour quelques heures, une journée ou plusieurs jours, idéal pour les visites, le shopping ou les rendez-vous professionnels. | `assets/images/alpes-private-chauffeur.webp` (supplied) |
| 3 | Événements & Occasions Spéciales | `https://alpestransport.fr/evenements-occasions-speciales/` | Transport premium pour mariages, conférences, événements privés et invités VIP, avec des véhicules élégants et un service haut de gamme. | `assets/images/alpes-evenements-occasions-speciales.webp` (**required from owner**) |
| 4 | Service Touristique | `https://alpestransport.fr/service-touristique/` | Découvrez les plus beaux sites et attractions avec un chauffeur professionnel, parfait pour les excursions, les visites culturelles ou les découvertes locales en toute tranquillité. | `assets/images/alpes-chamonix-alpine-tour.webp` (supplied) |
| 5 | Voyages d'Affaires | `https://alpestransport.fr/voyages-daffaires/` | Un transport fiable et confortable pour vos déplacements professionnels, idéal pour les réunions, les conférences ou les transferts entre hôtels, bureaux et aéroports. | `assets/images/alpes-voyages-daffaires.webp` (**required from owner**) |
| 6 | Voyages pour Mariages et Événements | `https://alpestransport.fr/voyages-pour-mariages-et-evenements/` | Un service de transport élégant et ponctuel pour vos mariages et événements spéciaux, idéal pour assurer le confort des mariés et de leurs invités. | `assets/images/alpes-voyages-pour-mariages-et-evenements.webp` (**required from owner**) |

## Layout readiness

The existing `.services-grid` is a three-column grid on desktop. Adding the
three remaining `<article class="service-card">` items will automatically
produce three columns by two rows. At 900 px it becomes two columns; at 700 px
and below it becomes a single column. No image generation or download was
performed in this task.

## Excluded from homepage

Regulated or unconfirmed services (local taxi, VSL/medical transport, school
transport, PMR-adapted transport) remain in the migration inventory only. They
must not be added to the homepage without written client confirmation of
authorisation, insurance and approved wording.

The complete destination directory stays on the separately planned Destinations
page and is not restored to the homepage.
