# Alpes Transport — Keyword-to-URL mapping

**Status:** Working SEO document, audited 2026-11-19.  
**Scope:** The 28 URLs in the live `page-sitemap.xml`. No page was rewritten or removed in this task.  
**Audit:** No previous keyword mapping or SEO guidance file existed in the repository. Live titles, meta descriptions, H1s and H2s were reviewed for all 28 page URLs; all returned HTTP 200.

## Data integrity

- No Keyword Planner, Semrush or Ahrefs export was supplied.
- Search volume, keyword difficulty, ranking position and trend values are **unverified**.
- Priority below reflects commercial relevance only and must be revisited with a verified France-targeted export.
- A Keyword Planner, Semrush or Ahrefs export is requested before final prioritization.
- Do not create a new URL for a keyword variation. Reverse route variants stay on the same page unless search evidence and user needs justify separation.

## Supplied keyword → canonical URL

| # | Supplied keyword (exact) | Canonical URL | Role | Note |
|---:|---|---|---|---|
| 1 | Taxi Chamonix | `/` | Primary | Homepage local hub. |
| 2 | service de taxi à Chamonix | `/nos-services/` | Primary | Service overview. |
| 3 | chauffeur privé à Chamonix | `/chauffeur-prive-chamonix/` | Primary | Local chauffeur page. |
| 4 | VTC à Chamonix | `/nos-services/` | Secondary | Supported by homepage as context, not a separate primary. |
| 5 | transfert aéroport Chamonix | `/transferts-aeroport/` | Primary | Airport transfer hub. |
| 6 | transfert privé Chamonix | `/transfert-aeroport-chamonix/` | Primary | Private-transfer/booking angle; keep distinct from the airport hub. |
| 7 | taxi local Chamonix | `/taxi-prive-chamonix/` | Secondary | Local taxi intent. |
| 8 | taxi privé Chamonix | `/taxi-prive-chamonix/` | Primary | Private taxi page. |
| 9 | transfert Genève Chamonix | `/transfert-geneve-chamonix/` | Primary | Geneva route page. |
| 10 | transfert Chamonix Genève | `/transfert-geneve-chamonix/` | Secondary | Reverse variant used naturally on the same page. |
| 11 | transfert aéroport Genève Chamonix | `/transfert-geneve-chamonix/` | Secondary | Airport qualifier on the Geneva route page. |
| 12 | transfert Chamonix aéroport Genève | `/transfert-geneve-chamonix/` | Secondary | Reverse airport variant on the same page. |
| 13 | chauffeur privé Genève Chamonix | `/chauffeur-prive-geneve-chamonix/` | Primary | Chauffeur-specific Geneva intent. |
| 14 | taxi Genève Chamonix | `/taxi-geneve-chamonix/` | Primary | Taxi-specific Geneva intent. |
| 15 | transfert Lyon Chamonix | `/transfert-lyon-chamonix/` | Primary | Lyon route page. |
| 16 | transfert Chamonix Lyon | `/transfert-lyon-chamonix/` | Secondary | Reverse variant used naturally on the same page. |
| 17 | transfert aéroport Lyon Chamonix | `/transfert-lyon-chamonix/` | Secondary | Airport qualifier on the Lyon route page. |
| 18 | transfert Chamonix aéroport Lyon | `/transfert-lyon-chamonix/` | Secondary | Reverse airport variant on the same page. |
| 19 | transfert Chambéry Chamonix | `/transfert-chambery-chamonix/` | Primary | Chambéry route page. |
| 20 | transfert Chamonix Chambéry | `/transfert-chambery-chamonix/` | Secondary | Reverse variant used naturally on the same page. |
| 21 | transfert Turin Chamonix | `/transfert-turin-chamonix/` | Primary | Turin route page. |
| 22 | transfert Chamonix Turin | `/transfert-turin-chamonix/` | Secondary | Reverse variant used naturally on the same page. |
| 23 | transfert Milan Chamonix | `/transfert-milan-chamonix/` | Primary | Milan route page. |
| 24 | transfert Chamonix Milan | `/transfert-milan-chamonix/` | Secondary | Reverse variant used naturally on the same page. |
| 25 | transfert Zurich Chamonix | `/transfert-zurich-chamonix/` | Primary | Zurich route page. |
| 26 | transfert Chamonix Zurich | `/transfert-zurich-chamonix/` | Secondary | Reverse variant used naturally on the same page. |
| 27 | chauffeur privé Chamonix | `/chauffeur-prive-chamonix/` | Duplicate | Supplied twice; consolidated with row 3. |

## Page → intent and keyword assignment

Derived keywords are marked `(derived, unverified)`. They describe the existing page topic but are not from the supplied list and have no volume data.

| # | Preserved URL | Primary intent | Main keyword | Secondary keywords | Cannibalization guard |
|---:|---|---|---|---|---|
| 1 | `/` | Local commercial hub | Taxi Chamonix | service de taxi à Chamonix; VTC à Chamonix; chauffeur privé à Chamonix; transfert privé Chamonix; transfert aéroport Chamonix | Do not target route-specific keywords as primary; link to route and service pages. |
| 2 | `/options-itineraires-turin-aoste-annecy-geneve/` | Itinerary inspiration | options itinéraires Alpes (derived, unverified) | itinéraire Turin Aoste Annecy Genève; transfert Turin Chamonix; transfert Genève Chamonix | No new page for each itinerary variant. |
| 3 | `/turin-aoste-italie/` | Destination information | Turin Aoste Italie (derived, unverified) | Vallée d’Aoste; transfert Turin Chamonix; Turin Chamonix | Destination guide, not a duplicate route-booking page. |
| 4 | `/nos-services/` | Service overview | service de taxi à Chamonix | VTC à Chamonix; chauffeur privé à Chamonix; transfert aéroport Chamonix; service touristique; voyages d’affaires | Broad overview only; do not compete with the local chauffeur page. |
| 5 | `/reserver-en-ligne/` | Transactional booking | réserver taxi Chamonix en ligne (derived, unverified) | réservation VTC Chamonix; transfert privé Chamonix | Preserve the verified booking flow. |
| 6 | `/transferts-aeroport/` | Airport transfer hub | transfert aéroport Chamonix | transfert aéroport Genève Chamonix; transfert aéroport Lyon Chamonix; chauffeur privé à Chamonix | Hub page; route details stay on their own URLs. |
| 7 | `/chauffeur-prive-chamonix/` | Local chauffeur service | chauffeur privé à Chamonix | VTC à Chamonix; chauffeur privé Chamonix; taxi privé Chamonix; transfert privé Chamonix | Keep distinct from the broader service-description page below. |
| 8 | `/transfert-turin-chamonix/` | Route booking | transfert Turin Chamonix | transfert Chamonix Turin; chauffeur privé Turin Chamonix (derived, unverified) | Use reverse variant naturally; no separate reverse URL. |
| 9 | `/transfert-milan-chamonix/` | Route booking | transfert Milan Chamonix | transfert Chamonix Milan; transfert aéroport Milan Chamonix (derived, unverified) | Use reverse variant naturally; no separate reverse URL. |
| 10 | `/transfert-zurich-chamonix/` | Route booking | transfert Zurich Chamonix | transfert Chamonix Zurich; chauffeur privé Zurich Chamonix (derived, unverified) | Use reverse variant naturally; no separate reverse URL. |
| 11 | `/transfert-chambery-chamonix/` | Route booking | transfert Chambéry Chamonix | transfert Chamonix Chambéry; chauffeur privé Chambéry Chamonix (derived, unverified) | Use reverse variant naturally; no separate reverse URL. |
| 12 | `/transfert-lyon-chamonix/` | Route booking | transfert Lyon Chamonix | transfert Chamonix Lyon; transfert aéroport Lyon Chamonix; transfert Chamonix aéroport Lyon | Airport and reverse variants stay on this URL. |
| 13 | `/taxi-geneve-chamonix/` | Taxi-specific route | taxi Genève Chamonix | transfert Genève Chamonix; taxi aéroport Genève Chamonix (derived, unverified) | Do not duplicate the transfer or chauffeur page's primary. |
| 14 | `/chauffeur-prive-geneve-chamonix/` | Chauffeur-specific route | chauffeur privé Genève Chamonix | transfert Genève Chamonix; VTC Genève Chamonix (derived, unverified) | Do not duplicate the taxi or transfer page's primary. |
| 15 | `/transfert-geneve-chamonix/` | Transfer-specific route | transfert Genève Chamonix | transfert Chamonix Genève; transfert aéroport Genève Chamonix; transfert Chamonix aéroport Genève | Airport and reverse variants stay on this URL. |
| 16 | `/taxi-prive-chamonix/` | Private taxi service | taxi privé Chamonix | taxi local Chamonix; taxi Chamonix; transfert privé Chamonix | Do not duplicate the local chauffeur page's primary. |
| 17 | `/transfert-aeroport-chamonix/` | Private transfer booking | transfert privé Chamonix | transfert aéroport Chamonix; taxi privé Chamonix; chauffeur privé à Chamonix | Differentiate title/H1 from the airport hub; do not merge without approval. |
| 18 | `/cookie-policy-eu/` | Legal / cookies | cookie policy (derived, unverified) | politique cookies (derived, unverified) | No commercial keyword targeting; preserve. |
| 19 | `/reservez-maintenant/` | Transactional CTA | réservation taxi Chamonix (derived, unverified) | réserver maintenant (derived, unverified) | Near-duplicate booking intent with `/reserver-en-ligne/`; do not merge or redirect without approval. |
| 20 | `/contacter-nous/` | Contact / navigational | contact Alpes Transport (derived, unverified) | contacter chauffeur Chamonix (derived, unverified) | Keep as contact route, not a commercial service page. |
| 21 | `/voyages-pour-mariages-et-evenements/` | Wedding/event service | transport mariage Chamonix (derived, unverified) | voyages pour mariages et événements; transport événementiel Chamonix (derived, unverified) | Keep wedding-specific; general events use the separate page. |
| 22 | `/geneve-suisse/` | Destination information | Genève Suisse (derived, unverified) | transfert Genève Chamonix; excursion Genève (derived, unverified) | Destination guide, not the Geneva route booking page. |
| 23 | `/a-propos-de-nous/` | Brand information | à propos Alpes Transport (derived, unverified) | entreprise transport Chamonix (derived, unverified) | No unsupported dates, fleet or review claims. |
| 24 | `/voyages-daffaires/` | Business travel service | voyages d’affaires Chamonix (derived, unverified) | transfert professionnel Chamonix (derived, unverified); chauffeur privé à Chamonix | Business use case, not the general chauffeur page. |
| 25 | `/service-touristique/` | Tourism service | service touristique Chamonix (derived, unverified) | transport touristique Alpes (derived, unverified); excursions Chamonix (derived, unverified) | No invented itineraries or guarantees. |
| 26 | `/gallery/` | Media / brand | galerie Alpes Transport (derived, unverified) | photos chauffeur privé Chamonix (derived, unverified) | Supporting page only. |
| 27 | `/evenements-occasions-speciales/` | General event service | transport événements Chamonix (derived, unverified) | occasions spéciales Chamonix (derived, unverified); voyages pour mariages et événements | Keep distinct from the wedding-specific page. |
| 28 | `/service-de-chauffeur-prive/` | Service explanation | service de chauffeur privé (derived, unverified) | chauffeur privé à Chamonix; VTC à Chamonix | Do not use the exact local primary of `/chauffeur-prive-chamonix/` as this page's main keyword. |

## Supported destination terms

Use these as context only where the service is actually offered and verified:

- Chamonix-Mont-Blanc
- Geneva Airport
- Lyon Airport
- Chambéry
- Turin
- Milan
- Zurich
- Megève
- Annecy
- Courmayeur
- Argentière
- Les Houches

Do not create a standalone page for a destination term without search evidence and a genuinely distinct service offer.

## Unverified expansion candidates

These are candidate phrases to use naturally if relevant; they are **not** assigned new URLs and have no verified volume or difficulty data.

- French: `transfert privé aéroport Chamonix`, `VTC Chamonix Mont-Blanc`, `chauffeur privé haut de gamme Chamonix`, `taxi Chamonix gare`, `navette privée Chamonix`, `transport privé Megève Chamonix`, `chauffeur Annecy Chamonix`.
- English: `Chamonix airport transfer`, `private transfer Geneva to Chamonix`, `Chamonix private chauffeur`, `luxury taxi Chamonix`, `Chamonix to Geneva transfer`.

## Internal linking guidance

- Homepage → `/transferts-aeroport/`, `/nos-services/`, `/chauffeur-prive-chamonix/`, `/taxi-prive-chamonix/`.
- `/nos-services/` → relevant service pages and route hubs.
- `/transferts-aeroport/` → `/transfert-geneve-chamonix/`, `/transfert-lyon-chamonix/`, `/transfert-milan-chamonix/` for airport context where useful.
- Geneva route hub → `/taxi-geneve-chamonix/` and `/chauffeur-prive-geneve-chamonix/` only when the intent genuinely differs.
- `/chauffeur-prive-chamonix/` → `/voyages-daffaires/` for business travel.
- Keep links natural, limited and useful; avoid duplicate sitewide keyword-rich links.

## Change control

- This document records decisions; it does not authorize URL changes.
- Any removal, merge, redirect or new landing page requires explicit approval after crawl and Search Console review.
