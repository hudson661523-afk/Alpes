/*
 * Quick booking: OpenStreetMap-based location autocomplete.
 *
 * Uses the provider adapters in location-providers.js. No map library, no
 * Google dependency and no automatic booking action. Free text is never
 * treated as a verified location: hidden coordinates are populated only after
 * a real suggestion is selected.
 */
(() => {
  'use strict';

  const form = document.querySelector('[data-quick-booking]');
  if (!form) return;

  const wrappers = Array.from(form.querySelectorAll('[data-qb-place-field]'));
  if (!wrappers.length) return;

  const providerRegistry = window.AlpesLocationProviders;
  const config = {
    provider: form.getAttribute('data-location-provider') || 'photon',
    endpoint: form.getAttribute('data-location-endpoint') || '',
    key: form.getAttribute('data-location-key') || '',
    language: form.getAttribute('data-location-language') || 'fr',
    biasLat: form.getAttribute('data-location-bias-lat') || '',
    biasLon: form.getAttribute('data-location-bias-lon') || ''
  };

  const MIN_CHARS = 3;
  const DEBOUNCE_MS = 500;
  const TIMEOUT_MS = 6500;
  const CACHE_TTL_MS = 5 * 60 * 1000;
  const EMPTY_CACHE_TTL_MS = 60 * 1000;
  const MAX_CACHE_ENTRIES = 80;
  const RATE_LIMIT_COOLDOWN_MS = 20000;
  const SERVER_ERROR_COOLDOWN_MS = 5000;

  const adapter = providerRegistry ? providerRegistry.get(config.provider) : null;
  const providerLabel = form.querySelector('[data-qb-provider-label]');
  const providerLink = form.querySelector('[data-qb-provider-link]');

  function clean(value) {
    return providerRegistry
      ? providerRegistry.cleanText(value)
      : String(value === undefined || value === null ? '' : value).replace(/\s+/g, ' ').trim();
  }

  function setUnavailable(message) {
    wrappers.forEach((wrapper) => {
      const status = wrapper.querySelector('[data-qb-place-status]');
      if (!status) return;
      status.textContent = message;
      status.className = 'qb-place-status is-error';
    });
  }

  function providerHomepage() {
    if (adapter && adapter.attributionUrl) return adapter.attributionUrl;
    if (config.endpoint) {
      try {
        return new URL(config.endpoint).origin;
      } catch (error) {
        return '';
      }
    }
    return '';
  }

  if (!adapter || !providerRegistry) {
    setUnavailable('Autocomplétion indisponible : saisie manuelle possible.');
    return;
  }
  if (adapter.requiresKey && !clean(config.key)) {
    setUnavailable('Autocomplétion non configurée : saisie manuelle possible.');
    return;
  }
  if (adapter.name === 'self-hosted' && !clean(config.endpoint)) {
    setUnavailable('Géocoder autohébergé non configuré : saisie manuelle possible.');
    return;
  }

  if (providerLabel) providerLabel.textContent = adapter.label;
  if (providerLink) {
    const homepage = providerHomepage();
    if (homepage) providerLink.href = homepage;
  }

  const queryCache = new Map();
  let cooldownUntil = 0;

  function cacheKey(query) {
    return [
      adapter.name,
      config.endpoint,
      config.language,
      clean(query).toLocaleLowerCase('fr')
    ].join('|');
  }

  function getCached(key) {
    const entry = queryCache.get(key);
    if (!entry) return null;
    if (entry.expires <= Date.now()) {
      queryCache.delete(key);
      return null;
    }
    return entry.value;
  }

  function setCached(key, value) {
    const ttl = value.length ? CACHE_TTL_MS : EMPTY_CACHE_TTL_MS;
    queryCache.set(key, { value: value, expires: Date.now() + ttl });
    while (queryCache.size > MAX_CACHE_ENTRIES) {
      const oldest = queryCache.keys().next().value;
      if (oldest === undefined) break;
      queryCache.delete(oldest);
    }
  }

  function makeError(kind, message, retryAfter) {
    const error = new Error(message);
    error.kind = kind;
    if (retryAfter) error.retryAfter = retryAfter;
    return error;
  }

  function applyCooldown(error) {
    if (!error || error.kind === 'abort') return;
    if (error.kind === 'rate-limit') {
      const seconds = Number(error.retryAfter);
      const wait = Number.isFinite(seconds) && seconds > 0
        ? Math.min(seconds * 1000, 60000)
        : RATE_LIMIT_COOLDOWN_MS;
      cooldownUntil = Math.max(cooldownUntil, Date.now() + wait);
    } else if (error.kind === 'server') {
      cooldownUntil = Math.max(cooldownUntil, Date.now() + SERVER_ERROR_COOLDOWN_MS);
    }
  }

  function cancelRequest(state) {
    state.staleAbort = true;
    if (state.controller) {
      state.controller.abort();
      state.controller = null;
    }
    state.pending.clear();
  }

  async function requestSuggestions(state, query, force) {
    const text = clean(query);
    if (text.length < MIN_CHARS) return [];
    const key = cacheKey(text);

    if (!force && Date.now() < cooldownUntil) {
      throw makeError('rate-limit', 'Trop de recherches récentes. Patientez quelques instants ou réessayez.');
    }
    if (!force) {
      const cached = getCached(key);
      if (cached) return cached;
    }
    if (state.pending.has(key)) return state.pending.get(key);

    const url = adapter.buildUrl(text, config);
    if (!url) {
      throw makeError('config', 'La recherche de lieux est momentanément indisponible. La saisie manuelle reste possible.');
    }

    const controller = typeof AbortController === 'function' ? new AbortController() : null;
    const timeoutId = controller
      ? window.setTimeout(() => {
          state.staleAbort = false;
          controller.abort();
        }, TIMEOUT_MS)
      : null;

    state.staleAbort = false;
    state.controller = controller;

    const task = (async () => {
      try {
        const response = await fetch(url, {
          method: 'GET',
          headers: { Accept: 'application/json' },
          signal: controller ? controller.signal : undefined,
          cache: 'no-store'
        });

        let payload = null;
        try {
          payload = await response.json();
        } catch (error) {
          payload = null;
        }

        if (!response.ok) throw providerRegistry.classifyError(response, payload);
        if (!payload || typeof payload !== 'object') {
          throw makeError('server', 'Réponse de recherche inattendue. Vous pouvez saisir le lieu manuellement.');
        }

        const results = adapter.parse(payload).slice(0, 5);
        setCached(key, results);
        return results;
      } catch (error) {
        if (error && error.kind) throw error;
        if (error && error.name === 'AbortError') {
          if (state.staleAbort) {
            const cancelled = makeError('abort', '');
            cancelled.isAbort = true;
            throw cancelled;
          }
          throw makeError('timeout', 'La recherche a pris trop de temps. Réessayez ou saisissez le lieu manuellement.');
        }
        throw makeError('network', 'Suggestions indisponibles pour le moment. Vous pouvez saisir le lieu manuellement.');
      } finally {
        if (timeoutId) window.clearTimeout(timeoutId);
        if (state.controller === controller) state.controller = null;
        state.pending.delete(key);
      }
    })();

    state.pending.set(key, task);
    return task;
  }

  function createField(wrapper) {
    const input = wrapper.querySelector('input[type="text"]');
    const list = wrapper.querySelector('[data-qb-suggestions]');
    const clearButton = wrapper.querySelector('[data-qb-place-clear]');
    const status = wrapper.querySelector('[data-qb-place-status]');
    const hidden = {
      name: wrapper.querySelector('[data-qb-location-name]'),
      description: wrapper.querySelector('[data-qb-location-description]'),
      lat: wrapper.querySelector('[data-qb-lat]'),
      lon: wrapper.querySelector('[data-qb-lon]'),
      osmId: wrapper.querySelector('[data-qb-osm-id]')
    };
    if (!input || !list) return;

    const fieldName = wrapper.getAttribute('data-qb-place-field') || 'lieu';
    const state = {
      input: input,
      list: list,
      results: [],
      lastQuery: '',
      activeIndex: -1,
      requestId: 0,
      debounceTimer: null,
      controller: null,
      pending: new Map(),
      staleAbort: false
    };

    function setStatus(message, kind) {
      if (!status) return;
      status.textContent = message || '';
      status.className = 'qb-place-status' + (kind ? ' is-' + kind : '');
    }

    function clearVerified() {
      Object.keys(hidden).forEach((name) => {
        if (hidden[name]) hidden[name].value = '';
      });
      if (clearButton) clearButton.hidden = true;
      wrapper.classList.remove('has-verified-location');
    }

    function openList() {
      list.hidden = false;
      input.setAttribute('aria-expanded', 'true');
      list.setAttribute('aria-busy', 'false');
    }

    function closeList() {
      list.hidden = true;
      list.replaceChildren();
      list.removeAttribute('aria-busy');
      state.results = [];
      state.activeIndex = -1;
      input.setAttribute('aria-expanded', 'false');
      input.removeAttribute('aria-activedescendant');
    }

    function appendAttribution() {
      const note = document.createElement('div');
      note.className = 'qb-suggestions-attribution';
      note.textContent = 'Données © contributeurs OpenStreetMap · ODbL';
      list.appendChild(note);
    }

    function showState(kind, message, retry) {
      list.replaceChildren();
      const row = document.createElement('div');
      row.className = 'qb-suggestions-state is-' + kind;

      if (kind === 'loading') {
        const spinner = document.createElement('span');
        spinner.className = 'qb-suggestions-spinner';
        spinner.setAttribute('aria-hidden', 'true');
        row.appendChild(spinner);
        list.setAttribute('aria-busy', 'true');
      }

      const text = document.createElement('span');
      text.textContent = message;
      row.appendChild(text);

      if (retry) {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'qb-suggestions-retry';
        button.textContent = 'Réessayer';
        button.addEventListener('click', () => {
          cooldownUntil = 0;
          void fetchSuggestions(clean(input.value), true);
        });
        row.appendChild(button);
      }

      list.appendChild(row);
      appendAttribution();
      openList();
      if (kind !== 'loading') list.setAttribute('aria-busy', 'false');
    }

    function setActive(index) {
      if (!state.results.length) return;
      const options = Array.from(list.querySelectorAll('[data-qb-option]'));
      if (state.activeIndex >= 0 && options[state.activeIndex]) {
        options[state.activeIndex].classList.remove('is-active');
        options[state.activeIndex].setAttribute('aria-selected', 'false');
      }
      state.activeIndex = (index + state.results.length) % state.results.length;
      const option = options[state.activeIndex];
      if (!option) return;
      option.classList.add('is-active');
      option.setAttribute('aria-selected', 'true');
      input.setAttribute('aria-activedescendant', option.id);
      if (typeof option.scrollIntoView === 'function') {
        option.scrollIntoView({ block: 'nearest' });
      }
    }

    function render(results) {
      list.replaceChildren();
      results.forEach((result, index) => {
        const option = document.createElement('button');
        option.type = 'button';
        option.className = 'qb-suggestion';
        option.id = fieldName + '-osm-option-' + index;
        option.setAttribute('role', 'option');
        option.setAttribute('aria-selected', 'false');
        option.setAttribute('data-qb-option', String(index));

        const icon = document.createElement('span');
        icon.className = 'qb-suggestion-icon';
        icon.setAttribute('aria-hidden', 'true');
        const iconSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        iconSvg.setAttribute('viewBox', '0 0 24 24');
        iconSvg.setAttribute('aria-hidden', 'true');
        iconSvg.setAttribute('focusable', 'false');
        const iconPath = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        iconPath.setAttribute('d', 'M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z');
        iconPath.setAttribute('fill', 'currentColor');
        iconSvg.appendChild(iconPath);
        icon.appendChild(iconSvg);
        option.appendChild(icon);

        const main = document.createElement('span');
        main.className = 'qb-suggestion-main';
        main.textContent = result.name || result.description || 'Lieu';
        option.appendChild(main);

        if (result.description && result.description !== result.name) {
          const secondary = document.createElement('span');
          secondary.className = 'qb-suggestion-secondary';
          secondary.textContent = result.description;
          option.appendChild(secondary);
        }

        option.addEventListener('click', () => select(result));
        list.appendChild(option);
      });

      state.activeIndex = -1;
      input.removeAttribute('aria-activedescendant');
      appendAttribution();
      openList();
    }

    async function fetchSuggestions(query, force) {
      const text = clean(query);
      if (text.length < MIN_CHARS) {
        state.requestId += 1;
        cancelRequest(state);
        closeList();
        return;
      }
      if (!force && text === state.lastQuery && state.results.length && !list.hidden) return;

      const token = ++state.requestId;
      cancelRequest(state);
      showState('loading', 'Recherche des lieux…');

      try {
        const results = await requestSuggestions(state, text, force);
        if (token !== state.requestId) return;
        state.results = results;
        state.lastQuery = text;
        if (!results.length) {
          showState('empty', 'Aucun lieu trouvé. Essayez un autre nom ou une adresse plus précise.');
          return;
        }
        render(results);
      } catch (error) {
        if (token !== state.requestId) return;
        if (error && error.isAbort) return;
        applyCooldown(error);
        state.results = [];
        showState(
          'error',
          error && error.message ? error.message : 'Suggestions indisponibles pour le moment. Vous pouvez saisir le lieu manuellement.',
          true
        );
      }
    }

    function scheduleFetch() {
      const text = clean(input.value);
      window.clearTimeout(state.debounceTimer);
      state.requestId += 1;
      cancelRequest(state);

      if (text.length < MIN_CHARS) {
        closeList();
        return;
      }
      state.debounceTimer = window.setTimeout(() => {
        void fetchSuggestions(text, false);
      }, DEBOUNCE_MS);
    }

    function select(result) {
      if (!result) return;

      state.requestId += 1;
      window.clearTimeout(state.debounceTimer);
      cancelRequest(state);
      closeList();

      const lat = Number(result.latitude);
      const lon = Number(result.longitude);
      if (!Number.isFinite(lat) || !Number.isFinite(lon)) {
        clearVerified();
        setStatus('Impossible d’utiliser ce lieu : coordonnées indisponibles.', 'error');
        return;
      }

      const name = clean(result.name);
      const description = clean(result.description) || name;
      const osmId = clean(result.osmId);

      input.value = description;
      if (hidden.name) hidden.name.value = name;
      if (hidden.description) hidden.description.value = description;
      if (hidden.lat) hidden.lat.value = String(lat);
      if (hidden.lon) hidden.lon.value = String(lon);
      if (hidden.osmId) hidden.osmId.value = osmId;
      if (clearButton) clearButton.hidden = false;
      wrapper.classList.add('has-verified-location');
      setStatus('Lieu sélectionné via OpenStreetMap. Aucune réservation effectuée.', 'verified');
      state.lastQuery = '';
    }

    input.addEventListener('input', () => {
      clearVerified();
      setStatus('');
      scheduleFetch();
    });

    input.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        event.preventDefault();
        state.requestId += 1;
        window.clearTimeout(state.debounceTimer);
        cancelRequest(state);
        closeList();
        return;
      }

      if (event.key === 'ArrowDown' || event.key === 'ArrowUp') {
        event.preventDefault();
        if (list.hidden || !state.results.length) {
          void fetchSuggestions(clean(input.value), true);
          return;
        }
        setActive(state.activeIndex + (event.key === 'ArrowDown' ? 1 : -1));
        return;
      }

      if (event.key === 'Enter') {
        if (!list.hidden && state.activeIndex >= 0 && state.results[state.activeIndex]) {
          event.preventDefault();
          select(state.results[state.activeIndex]);
        }
        return;
      }

      if (event.key === 'Tab') {
        state.requestId += 1;
        window.clearTimeout(state.debounceTimer);
        cancelRequest(state);
        closeList();
      }
    });

    input.addEventListener('focus', () => {
      if (!list.hidden && state.results.length) openList();
    });

    input.addEventListener('blur', () => {
      window.setTimeout(() => {
        if (!list.contains(document.activeElement)) closeList();
      }, 160);
    });

    // Keep focus in the text field when a mouse user clicks a suggestion.
    list.addEventListener('mousedown', (event) => { event.preventDefault(); });

    if (clearButton) {
      clearButton.addEventListener('click', () => {
        state.requestId += 1;
        window.clearTimeout(state.debounceTimer);
        cancelRequest(state);
        input.value = '';
        clearVerified();
        setStatus('');
        closeList();
        state.lastQuery = '';
        input.focus();
      });
    }
  }

  wrappers.forEach(createField);
})();
