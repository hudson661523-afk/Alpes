(() => {
  'use strict';

  function initHeroSlider() {
    const hero = document.querySelector('[data-hero-slider]');
    if (!hero) return;

    const slides = Array.from(hero.querySelectorAll('[data-slide-content]'));
    const images = Array.from(hero.querySelectorAll('[data-slide-image]'));
    const indicators = Array.from(hero.querySelectorAll('[data-slide-target]'));
    const previous = hero.querySelector('.hero-arrow-prev');
    const next = hero.querySelector('.hero-arrow-next');
    const status = hero.querySelector('#hero-slide-status');
    if (slides.length < 2) return;

    const AUTOPLAY_MS = 6000;
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let current = 0;
    let timer = null;
    let interactionPaused = reducedMotion.matches;
    let changeToken = 0;

    function ensureImage(index) {
      const layer = images[index];
      const image = layer && layer.querySelector('img');
      if (!image) return Promise.resolve();

      if (!image.getAttribute('src') && image.dataset.src) {
        image.src = image.dataset.src;
      }
      if (image.complete && image.naturalWidth > 0) return Promise.resolve();
      if (typeof image.decode === 'function') return image.decode().catch(() => {});

      return new Promise((resolve) => {
        image.addEventListener('load', resolve, { once: true });
        image.addEventListener('error', resolve, { once: true });
      });
    }

    function stopTimer() {
      if (timer !== null) {
        window.clearTimeout(timer);
        timer = null;
      }
      hero.classList.add('is-paused');
    }

    function scheduleNext() {
      stopTimer();
      if (interactionPaused || reducedMotion.matches) return;
      hero.classList.remove('is-paused');
      timer = window.setTimeout(() => {
        goTo(current + 1, false);
      }, AUTOPLAY_MS);
    }

    function setActive(index) {
      slides.forEach((slide, i) => {
        const active = i === index;
        slide.classList.toggle('is-active', active);
        slide.setAttribute('aria-hidden', String(!active));
        if (active) slide.removeAttribute('inert');
        else slide.setAttribute('inert', '');
      });

      images.forEach((layer, i) => layer.classList.toggle('is-active', i === index));
      indicators.forEach((button, i) => {
        const active = i === index;
        button.classList.toggle('is-active', active);
        if (active) button.setAttribute('aria-current', 'true');
        else button.removeAttribute('aria-current');
      });

      current = index;
    }

    async function goTo(index, userInitiated = true) {
      const target = ((index % slides.length) + slides.length) % slides.length;
      if (userInitiated) interactionPaused = true;

      const token = ++changeToken;
      stopTimer();
      await ensureImage(target);
      if (token !== changeToken) return;

      setActive(target);

      if (userInitiated && status) {
        const heading = slides[target].querySelector('.hero-heading');
        const label = heading ? heading.textContent.replace(/\s+/g, ' ').trim() : '';
        status.textContent = `Diapositive ${target + 1} sur ${slides.length}${label ? ' : ' + label : ''}`;
      }

      ensureImage((target + 1) % slides.length);
      scheduleNext();
    }

    function pauseOnInteraction() {
      interactionPaused = true;
      stopTimer();
    }

    previous?.addEventListener('click', () => goTo(current - 1));
    next?.addEventListener('click', () => goTo(current + 1));
    indicators.forEach((button) => {
      button.addEventListener('click', () => goTo(Number(button.dataset.slideTarget)));
    });

    hero.addEventListener('focusin', (event) => {
      if (event.target.closest('.hero-controls')) pauseOnInteraction();
    });
    hero.addEventListener('keydown', (event) => {
      if (event.key !== 'ArrowLeft' && event.key !== 'ArrowRight') return;
      event.preventDefault();
      goTo(current + (event.key === 'ArrowRight' ? 1 : -1));
    });

    if (typeof reducedMotion.addEventListener === 'function') {
      reducedMotion.addEventListener('change', () => {
        if (reducedMotion.matches) stopTimer();
        else if (!interactionPaused) scheduleNext();
      });
    }

    slides.forEach((slide, i) => {
      slide.setAttribute('aria-hidden', String(i !== 0));
      if (i !== 0) slide.setAttribute('inert', '');
    });
    ensureImage(1);
    scheduleNext();
  }

  initHeroSlider();

  const header = document.getElementById('site-header');
  const toggle = document.querySelector('.nav-toggle');
  const nav = document.getElementById('primary-navigation');

  if (!header || !toggle || !nav) return;

  const dropdownToggles = Array.from(nav.querySelectorAll('.nav-dropdown-toggle'));
  const navItems = Array.from(nav.querySelectorAll('.nav-item'));
  const mobileQuery = window.matchMedia('(max-width: 1100px)');
  const desktopQuery = window.matchMedia('(min-width: 1101px)');
  const hoverOpened = new WeakSet();
  let lastFocusedBeforeMenu = null;

  const isMobile = () => mobileQuery.matches;
  const isDesktop = () => desktopQuery.matches;

  function updateHeader() {
    header.classList.toggle('is-scrolled', window.scrollY > 24);
  }

  function closeDropdown(button, restoreFocus = false) {
    if (!button) return;
    const item = button.closest('.nav-item');

    button.setAttribute('aria-expanded', 'false');
    hoverOpened.delete(button);
    if (item) item.classList.remove('is-open');
    if (restoreFocus) button.focus();
  }

  function closeAllDropdowns(except = null) {
    dropdownToggles.forEach((button) => {
      if (button !== except) closeDropdown(button);
    });
  }

  function openDropdown(button) {
    if (!button) return;
    closeAllDropdowns(button);
    button.setAttribute('aria-expanded', 'true');
    const item = button.closest('.nav-item');
    if (item) item.classList.add('is-open');
  }

  function setMenu(open, restoreFocus = false) {
    if (open) lastFocusedBeforeMenu = document.activeElement;

    nav.classList.toggle('is-open', open);
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');

    if (!open) {
      closeAllDropdowns();
      if (restoreFocus && lastFocusedBeforeMenu instanceof HTMLElement) {
        lastFocusedBeforeMenu.focus();
      }
    }
  }

  toggle.addEventListener('click', () => {
    const shouldOpen = toggle.getAttribute('aria-expanded') !== 'true';
    setMenu(shouldOpen);
  });

  dropdownToggles.forEach((button) => {
    button.addEventListener('click', (event) => {
      event.preventDefault();
      if (isDesktop() && hoverOpened.has(button)) {
        hoverOpened.delete(button);
        return;
      }
      const isOpen = button.getAttribute('aria-expanded') === 'true';
      if (isOpen) closeDropdown(button);
      else openDropdown(button);
    });
  });

  navItems.forEach((item) => {
    const button = item.querySelector('.nav-dropdown-toggle');
    if (!button) return;

    item.addEventListener('mouseenter', () => {
      if (isDesktop()) {
        openDropdown(button);
        hoverOpened.add(button);
      }
    });

    item.addEventListener('mouseleave', () => {
      hoverOpened.delete(button);
      if (isDesktop() && !item.contains(document.activeElement)) closeDropdown(button);
    });

    item.addEventListener('focusout', (event) => {
      if (!item.contains(event.relatedTarget)) closeDropdown(button);
    });
  });

  nav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      closeAllDropdowns();
      if (isMobile()) setMenu(false);
    });
  });

  nav.addEventListener('keydown', (event) => {
    if (event.key !== 'Tab' || !isMobile() || !nav.classList.contains('is-open')) return;

    const focusable = [toggle, ...nav.querySelectorAll('a, button:not([disabled])')]
      .filter((element) => element === toggle || element.offsetParent !== null);

    if (!focusable.length) return;
    const first = focusable[0];
    const last = focusable[focusable.length - 1];

    if (event.shiftKey && document.activeElement === first) {
      event.preventDefault();
      last.focus();
    } else if (!event.shiftKey && document.activeElement === last) {
      event.preventDefault();
      first.focus();
    }
  });

  document.addEventListener('click', (event) => {
    if (!header.contains(event.target)) {
      closeAllDropdowns();
      if (isMobile() && nav.classList.contains('is-open')) setMenu(false);
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key !== 'Escape') return;

    const openDropdown = dropdownToggles.find(
      (button) => button.getAttribute('aria-expanded') === 'true'
    );

    if (openDropdown) {
      closeDropdown(openDropdown, true);
      return;
    }

    if (toggle.getAttribute('aria-expanded') === 'true') {
      setMenu(false, true);
    }
  });

  const handleViewportChange = (event) => {
    if (!event.matches) setMenu(false);
    closeAllDropdowns();
  };

  if (typeof mobileQuery.addEventListener === 'function') {
    mobileQuery.addEventListener('change', handleViewportChange);
  } else if (typeof mobileQuery.addListener === 'function') {
    mobileQuery.addListener(handleViewportChange);
  }

  window.addEventListener('scroll', updateHeader, { passive: true });
  updateHeader();
})();

/*
 * Quick booking: prepares a copyable trip summary on the visitor's device.
 * Only the Book Online button submits a booking request to the secure endpoint.
 */
(() => {
  'use strict';

  const form = document.querySelector('[data-quick-booking]');
  if (!form) return;

  const prepareButton = form.querySelector('[data-qb-prepare]');
  const emailButton = form.querySelector('[data-qb-email]');
  const copyButton = form.querySelector('[data-qb-copy]');
  const summary = form.querySelector('[data-qb-summary]');
  const status = form.querySelector('[data-qb-status]');
  const whatsapp = form.querySelector('[data-qb-whatsapp]');
  const csrfInput = form.querySelector('[data-qb-csrf]');
  const honeypot = form.querySelector('[data-qb-honeypot]');
  const waBase = form.getAttribute('data-whatsapp-base') || '';
  const endpoint = form.getAttribute('data-booking-endpoint') || '/api/booking-request.php';
  const dateInput = form.querySelector('#qb-date');
  const sendingMessage = 'Envoi de votre demande...';
  const successMessage = 'Votre demande a été envoyée. Notre équipe vous contactera pour confirmer la disponibilité.';
  const failureMessage = "Votre demande n'a pas pu être envoyée. Veuillez réessayer.";
  let submitting = false;

  if (!prepareButton || !summary) return;

  if (dateInput && !dateInput.min) {
    const now = new Date();
    dateInput.min = new Date(now.getTime() - now.getTimezoneOffset() * 60000)
      .toISOString()
      .slice(0, 10);
  }

  function fieldValue(id) {
    const field = form.querySelector('#' + id);
    return field ? field.value.trim() : '';
  }

  function setStatus(message) {
    if (status) status.textContent = message;
  }

  function buildSummary() {
    const rawDate = fieldValue('qb-date');
    const date = /^\d{4}-\d{2}-\d{2}$/.test(rawDate)
      ? rawDate.split('-').reverse().join('/')
      : rawDate;

    return [
      'Bonjour Alpes Transport,',
      '',
      'Je souhaite organiser un trajet avec les détails suivants :',
      'Départ : ' + fieldValue('qb-pickup'),
      'Destination : ' + fieldValue('qb-destination'),
      'Date : ' + date,
      'Heure : ' + fieldValue('qb-time'),
      'Passagers : ' + fieldValue('qb-passengers'),
      '',
      'Merci de me confirmer les modalités de ce trajet.'
    ].join('\n');
  }

  function prepare() {
    if (typeof form.reportValidity === 'function' && !form.reportValidity()) return;

    const text = buildSummary();
    summary.value = text;

    if (whatsapp && waBase) {
      whatsapp.href = waBase + '?text=' + encodeURIComponent(text);
    }
    setStatus('Récapitulatif prêt à copier ou à envoyer.');
    summary.focus({ preventScroll: true });
  }

  async function submitBooking(event) {
    event.preventDefault();
    if (submitting) return;
    if (typeof form.reportValidity === 'function' && !form.reportValidity()) return;

    submitting = true;
    emailButton.disabled = true;
    emailButton.setAttribute('aria-busy', 'true');
    setStatus(sendingMessage);

    const payload = {
      csrf_token: csrfInput ? csrfInput.value : '',
      pickup: fieldValue('qb-pickup'),
      destination: fieldValue('qb-destination'),
      date: fieldValue('qb-date'),
      time: fieldValue('qb-time'),
      passengers: fieldValue('qb-passengers'),
      website: honeypot ? honeypot.value : ''
    };

    try {
      const response = await fetch(endpoint, {
        method: 'POST',
        credentials: 'same-origin',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
          'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify(payload)
      });

      let result = null;
      try {
        result = await response.json();
      } catch (parseError) {
        result = null;
      }

      if (!response.ok || !result || result.ok !== true) {
        throw new Error('Booking request rejected.');
      }
      setStatus(successMessage);
    } catch (error) {
      setStatus(failureMessage);
    } finally {
      submitting = false;
      emailButton.disabled = false;
      emailButton.removeAttribute('aria-busy');
    }
  }

  prepareButton.addEventListener('click', prepare);

  if (emailButton) {
    emailButton.addEventListener('click', submitBooking);
  }

  form.addEventListener('submit', (event) => {
    event.preventDefault();
    prepare();
  });

  if (copyButton) {
    copyButton.addEventListener('click', async () => {
      if (!summary.value.trim()) {
        setStatus('Préparez d’abord votre récapitulatif.');
        prepareButton.focus();
        return;
      }

      try {
        if (!navigator.clipboard || !navigator.clipboard.writeText) {
          throw new Error('Clipboard API unavailable');
        }
        await navigator.clipboard.writeText(summary.value);
        setStatus('Récapitulatif copié.');
      } catch (error) {
        summary.focus();
        summary.select();
        let copied = false;
        try {
          copied = document.execCommand('copy');
        } catch (fallbackError) {
          copied = false;
        }
        setStatus(copied ? 'Récapitulatif copié.' : 'Sélectionnez le texte pour le copier.');
      }
    });
  }
})();
/* Location autocomplete is provided by location-providers.js and location-autocomplete.js. */

(() => {
  'use strict';

  const carousel = document.querySelector('[data-reviews-carousel]');
  if (!carousel) return;

  const viewport = carousel.querySelector('[data-reviews-viewport]');
  const track = carousel.querySelector('[data-reviews-track]');
  const prev = carousel.querySelector('[data-reviews-prev]');
  const next = carousel.querySelector('[data-reviews-next]');
  const pagination = carousel.querySelector('[data-reviews-pagination]');
  const status = carousel.querySelector('[data-reviews-status]');
  const autoplayBtn = carousel.querySelector('[data-reviews-autoplay]');
  const autoplayText = carousel.querySelector('[data-reviews-autoplay-text]');
  const cards = Array.from(carousel.querySelectorAll('.review-card'));
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

  if (!viewport || !track || !prev || !next || !pagination || cards.length === 0) return;

  let index = 0;
  let perView = 3;
  let pageCount = 1;
  let timer = null;
  let userPaused = false;
  let hoverPaused = false;
  let focusPaused = false;

  function getPerView() {
    if (window.matchMedia('(max-width: 700px)').matches) return 1;
    if (window.matchMedia('(max-width: 900px)').matches) return 2;
    return 3;
  }

  function maxIndex() {
    return Math.max(0, cards.length - perView);
  }

  function updatePagination() {
    pagination.innerHTML = '';
    pageCount = maxIndex() + 1;
    for (let i = 0; i < pageCount; i += 1) {
      const dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'reviews-dot' + (i === index ? ' is-active' : '');
      dot.setAttribute('aria-label', 'Afficher le groupe d’avis ' + (i + 1));
      dot.setAttribute('aria-current', i === index ? 'true' : 'false');
      dot.addEventListener('click', () => {
        userPaused = true;
        syncAutoplay();
        goTo(i, true);
      });
      pagination.appendChild(dot);
    }
  }

  function updateStatus(announce) {
    const from = index + 1;
    const to = Math.min(cards.length, index + perView);
    const msg = 'Avis ' + from + ' à ' + to + ' sur ' + cards.length;
    if (announce && status) status.textContent = msg;
    prev.disabled = index === 0;
    next.disabled = index >= maxIndex();
    pagination.querySelectorAll('.reviews-dot').forEach((dot, i) => {
      const active = i === index;
      dot.classList.toggle('is-active', active);
      dot.setAttribute('aria-current', active ? 'true' : 'false');
    });
  }

  function cardWidth() {
    const first = cards[0];
    const second = cards[1];
    if (!first) return 0;
    const width = first.getBoundingClientRect().width;
    if (!second) return width;
    const gap = Math.max(0, second.getBoundingClientRect().left - first.getBoundingClientRect().right);
    return width + gap;
  }

  function goTo(nextIndex, announce) {
    index = Math.max(0, Math.min(maxIndex(), nextIndex));
    const offset = -(index * cardWidth());
    track.style.transform = 'translate3d(' + offset + 'px,0,0)';
    updateStatus(!!announce);
  }

  function stopTimer() {
    if (timer) {
      window.clearInterval(timer);
      timer = null;
    }
  }

  function canAutoplay() {
    return !userPaused && !hoverPaused && !focusPaused && !reducedMotion.matches && maxIndex() > 0;
  }

  function syncAutoplay() {
    const playing = canAutoplay();
    if (autoplayBtn) {
      autoplayBtn.setAttribute('aria-pressed', playing ? 'true' : 'false');
      autoplayBtn.setAttribute('aria-label', playing ? 'Mettre le carrousel en pause' : 'Lancer le carrousel');
    }
    if (autoplayText) autoplayText.textContent = playing ? 'Pause' : 'Lecture';
    stopTimer();
    if (playing) {
      timer = window.setInterval(() => {
        const nextIndex = index >= maxIndex() ? 0 : index + 1;
        goTo(nextIndex, false);
      }, 6500);
    }
  }

  function refresh() {
    const nextPerView = getPerView();
    if (nextPerView !== perView) {
      perView = nextPerView;
      index = Math.min(index, maxIndex());
      updatePagination();
    }
    goTo(index, false);
    syncAutoplay();
  }

  prev.addEventListener('click', () => { userPaused = true; syncAutoplay(); goTo(index - 1, true); });
  next.addEventListener('click', () => { userPaused = true; syncAutoplay(); goTo(index + 1, true); });

  if (autoplayBtn) {
    autoplayBtn.addEventListener('click', () => {
      userPaused = !userPaused;
      syncAutoplay();
      updateStatus(true);
    });
  }

  carousel.addEventListener('mouseenter', () => { hoverPaused = true; syncAutoplay(); });
  carousel.addEventListener('mouseleave', () => { hoverPaused = false; syncAutoplay(); });
  carousel.addEventListener('focusin', () => { focusPaused = true; syncAutoplay(); });
  carousel.addEventListener('focusout', (e) => {
    if (!carousel.contains(e.relatedTarget)) { focusPaused = false; syncAutoplay(); }
  });

  viewport.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') { e.preventDefault(); userPaused = true; syncAutoplay(); goTo(index - 1, true); }
    if (e.key === 'ArrowRight') { e.preventDefault(); userPaused = true; syncAutoplay(); goTo(index + 1, true); }
  });

  let touchStartX = 0;
  let touchStartY = 0;
  let touchDeltaX = 0;
  let touching = false;
  viewport.addEventListener('touchstart', (e) => {
    if (!e.touches || !e.touches[0]) return;
    touching = true;
    touchStartX = e.touches[0].clientX;
    touchStartY = e.touches[0].clientY;
    touchDeltaX = 0;
  }, { passive: true });
  viewport.addEventListener('touchmove', (e) => {
    if (!touching || !e.touches || !e.touches[0]) return;
    const dx = e.touches[0].clientX - touchStartX;
    const dy = e.touches[0].clientY - touchStartY;
    if (Math.abs(dx) > Math.abs(dy)) touchDeltaX = dx;
  }, { passive: true });
  viewport.addEventListener('touchend', () => {
    if (!touching) return;
    touching = false;
    if (Math.abs(touchDeltaX) > 45) {
      userPaused = true;
      syncAutoplay();
      goTo(index + (touchDeltaX < 0 ? 1 : -1), true);
    }
  });

  const onMotionChange = () => syncAutoplay();
  if (typeof reducedMotion.addEventListener === 'function') reducedMotion.addEventListener('change', onMotionChange);
  else if (typeof reducedMotion.addListener === 'function') reducedMotion.addListener(onMotionChange);

  window.addEventListener('resize', refresh);
  perView = getPerView();
  updatePagination();
  refresh();
})();
