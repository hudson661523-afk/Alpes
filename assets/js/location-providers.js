/*
 * Location provider adapters for the quick-booking autocomplete.
 *
 * No third-party libraries and no Google/Geoapify dependencies. Each adapter
 * exposes the same contract: buildUrl(), parse() and attribution information.
 * The UI layer in location-autocomplete.js never speaks to a provider directly.
 */
(() => {
  'use strict';

  const DEFAULT_LIMIT = 5;

  function cleanText(value) {
    return String(value === undefined || value === null ? '' : value)
      .replace(/\s+/g, ' ')
      .trim();
  }

  function firstValue(values) {
    for (let i = 0; i < values.length; i += 1) {
      const value = cleanText(values[i]);
      if (value) return value;
    }
    return '';
  }

  function uniqueParts(parts) {
    const seen = new Set();
    const result = [];
    parts.forEach((part) => {
      const value = cleanText(part);
      if (!value) return;
      const key = value.toLocaleLowerCase('fr');
      if (!seen.has(key)) {
        seen.add(key);
        result.push(value);
      }
    });
    return result;
  }

  function finiteNumber(value) {
    if (value === '' || value === null || value === undefined) return null;
    const number = Number(value);
    return Number.isFinite(number) ? number : null;
  }

  function makeError(kind, message, retryAfter) {
    const error = new Error(message);
    error.kind = kind;
    if (retryAfter) error.retryAfter = retryAfter;
    return error;
  }

  function classifyError(response, payload) {
    const status = response && response.status ? response.status : 0;
    const retryAfterHeader = response && response.headers && typeof response.headers.get === 'function'
      ? cleanText(response.headers.get('Retry-After'))
      : '';
    const retryAfter = finiteNumber(retryAfterHeader);

    if (status === 429) {
      return makeError(
        'rate-limit',
        'Trop de recherches ont été effectuées. Veuillez patienter avant de réessayer.',
        retryAfter && retryAfter > 0 ? retryAfter : 0
      );
    }
    if (status === 401 || status === 403) {
      return makeError('config', 'La recherche de lieux est momentanément mal configurée. La saisie manuelle reste possible.');
    }
    if (status === 503) {
      return makeError('server', 'Le service de recherche est momentanément indisponible. Vous pouvez saisir le lieu manuellement.');
    }
    if (status >= 500) {
      return makeError('server', 'Le service de recherche est momentanément indisponible. Vous pouvez saisir le lieu manuellement.');
    }

    const providerMessage = payload && typeof payload === 'object'
      ? firstValue([payload.error_description, payload.message, payload.error])
      : '';

    return makeError(
      'network',
      providerMessage
        ? 'Recherche impossible pour le moment (' + providerMessage + '). La saisie manuelle reste possible.'
        : 'Suggestions indisponibles pour le moment. Vous pouvez saisir le lieu manuellement.'
    );
  }

  function urlFrom(endpoint) {
    try {
      return new URL(endpoint);
    } catch (error) {
      return null;
    }
  }

  function photonUrl(query, config, fallbackEndpoint) {
    const url = urlFrom(config.endpoint || fallbackEndpoint);
    if (!url) return null;

    url.searchParams.set('q', query);
    url.searchParams.set('lang', cleanText(config.language) || 'fr');
    url.searchParams.set('limit', String(DEFAULT_LIMIT));
    url.searchParams.set('zoom', '9');
    url.searchParams.set('location_bias_scale', '0.25');

    const lat = finiteNumber(config.biasLat);
    const lon = finiteNumber(config.biasLon);
    if (lat !== null && lon !== null) {
      url.searchParams.set('lat', String(lat));
      url.searchParams.set('lon', String(lon));
    }
    return url.toString();
  }

  function normalizePhotonFeature(feature) {
    if (!feature || typeof feature !== 'object') return null;

    const coordinates = feature.geometry && Array.isArray(feature.geometry.coordinates)
      ? feature.geometry.coordinates
      : [];
    const longitude = finiteNumber(coordinates[0]);
    const latitude = finiteNumber(coordinates[1]);
    if (latitude === null || longitude === null) return null;

    const properties = feature.properties && typeof feature.properties === 'object'
      ? feature.properties
      : {};

    const street = firstValue([
      cleanText(properties.housenumber) && cleanText(properties.street)
        ? cleanText(properties.housenumber) + ' ' + cleanText(properties.street)
        : '',
      cleanText(properties.street)
    ]);
    const locality = firstValue([
      properties.city,
      properties.town,
      properties.village,
      properties.county,
      properties.state_district
    ]);
    const name = firstValue([properties.name, street, locality]);
    const description = uniqueParts([
      name,
      street,
      properties.postcode,
      locality,
      properties.state,
      properties.country
    ]).join(', ');

    const osmType = firstValue([properties.osm_type]);
    const rawOsmId = firstValue([properties.osm_id]);
    const osmId = osmType && rawOsmId ? osmType + rawOsmId : rawOsmId;

    return {
      providerId: osmId,
      osmId: osmId,
      name: name || description,
      description: description || name,
      latitude: latitude,
      longitude: longitude,
      type: firstValue([properties.osm_value, properties.osm_key])
    };
  }

  function parsePhotonPayload(payload) {
    if (!payload || !Array.isArray(payload.features)) return [];
    return payload.features.map(normalizePhotonFeature).filter(Boolean);
  }

  const adapters = {
    photon: {
      name: 'photon',
      label: 'Photon',
      attributionUrl: 'https://photon.komoot.io/',
      requiresKey: false,
      buildUrl: (query, config) => photonUrl(query, config, 'https://photon.komoot.io/api/'),
      parse: parsePhotonPayload
    },
    'self-hosted': {
      name: 'self-hosted',
      label: 'Géocoder OSM autohébergé',
      attributionUrl: '',
      requiresKey: false,
      buildUrl: (query, config) => (config.endpoint ? photonUrl(query, config, '') : null),
      parse: parsePhotonPayload
    }
  };

  function get(name) {
    const adapter = adapters[String(name || '').toLowerCase()];
    return adapter || adapters.photon;
  }

  window.AlpesLocationProviders = {
    get: get,
    classifyError: classifyError,
    cleanText: cleanText
  };
})();
