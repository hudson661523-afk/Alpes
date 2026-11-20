# Location autocomplete — OpenStreetMap/Photon

Internal development document. `/docs/` is denied by `.htaccess`; do not publish it.

## Status

The Google Places preparation was removed from the working tree. No Google key
was ever committed, and no Google Maps scripts or dependencies remain. Geoapify
is not used and no third-party mapping account, key or billing is required.

The booking form uses a small provider-adapter layer:

- `photon` — active public demo provider for limited development and staging testing.
- `self-hosted` — optional private Photon-compatible OSM geocoder endpoint.

Configuration lives in `lib/location-config.php`. A git-ignored
`lib/location-key.local.php` may override `provider`, `endpoint` and `key` for
local work; it is denied by `.htaccess`. Environment variables are preferred on
Hostinger:

- `QB_LOCATION_PROVIDER` — `photon` or `self-hosted`.
- `QB_LOCATION_ENDPOINT` — endpoint for a private geocoder.
- `QB_LOCATION_API_KEY` — optional private-instance key.

The default bias is Chamonix-Mont-Blanc (`45.9237, 6.8694`) with
`zoom=9` and `location_bias_scale=0.25`. This prioritises the Alps without a
bounding box or country filter, so France, Switzerland, Italy and the rest of
Europe remain searchable.

## Provider policy and production suitability

Photon's own published terms state:

- the public API may be used for a project as long as request volume stays
  within reasonable limits;
- extensive usage may be throttled or completely banned;
- availability is not guaranteed;
- the service and its API may change without notice.

Source: `https://photon.komoot.io/` and
`https://github.com/komoot/photon#demo-server`.

The project owner has authorised limited development and staging testing only.
The request controls below keep staging volume low. Public Photon is **not** a
guaranteed commercial production provider and must not be deployed to
`alpestransport.fr` traffic. Production needs a self-hosted/private OSM
geocoder or another explicitly approved arrangement.

### OpenStreetMap attribution

OpenStreetMap data is available under the ODbL and must be credited. The form
therefore displays a persistent attribution line naming OpenStreetMap
contributors, ODbL and the active provider. The suggestion dropdown repeats the
short attribution.

Sources: `https://www.openstreetmap.org/copyright` and
`https://osmfoundation.org/wiki/Licence/Attribution_Guidelines`.

## Request behaviour

- Minimum 3 characters.
- 500 ms debounce.
- Maximum 5 suggestions.
- One active request per field; stale requests are aborted with `AbortController`.
- 6.5 second timeout.
- In-memory successful-query cache for 5 minutes (1 minute for empty results),
  capped at 80 entries. No localStorage or persistent copying of OSM data.
- Identical in-flight queries are deduplicated per field.
- HTTP 429 starts a 20 second cooldown, or honours `Retry-After` up to 60 seconds.
- HTTP 503 and other 5xx responses start a 5 second cooldown.
- 401/403 configuration failures do not trigger a cooldown.
- Loading, empty, error, rate-limit and timeout states are rendered in the dropdown.
- No automatic first-result selection. Arrow keys move an explicit active option.
- Mouse, touch (via click) and keyboard selection are supported.
- Editing or clearing the visible input immediately clears all hidden location data.

## Stored data

When a suggestion is selected, the form stores:

- display name — `*_location_name`;
- formatted location description — `*_location_description`;
- latitude — `*_lat`;
- longitude — `*_lon`;
- OSM identifier, where available — `*_osm_id`.

Free text is never given coordinates. The production WordPress booking form at
`https://alpestransport.fr/reserver-en-ligne/` has no verified public API for
place IDs or coordinates, so only the formatted description is used in the
local recap and WhatsApp message. Hidden values remain local metadata.

## Deployment and verification

Limited staging use is authorised. Before this change was committed, the
following passed:

- `node --check` for all JavaScript files.
- `php -l` for every PHP file.
- A provider-adapter contract test for Photon and self-hosted URLs, parsing,
  bias parameters and error classification.
- A limited real-query test for Chamonix, Geneva Airport, Lyon Airport, Megève
  and Courmayeur.
- Keyboard, clear/edit, recap, WhatsApp and mobile layout checks.

After push, verify on staging:

- staging returns `200` and still serves `noindex, nofollow`;
- both Pickup and Destination load the adapter scripts and return suggestions;
- hero, summary, WhatsApp and protected-path `403` responses still work;
- production WordPress remains untouched.
