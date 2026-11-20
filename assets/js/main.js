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
    let hoverPaused = false;
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
      if (interactionPaused || hoverPaused || reducedMotion.matches) return;
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

    hero.addEventListener('mouseenter', () => {
      hoverPaused = true;
      stopTimer();
    });
    hero.addEventListener('mouseleave', () => {
      hoverPaused = false;
      scheduleNext();
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
 * Quick booking: prepares a copyable trip summary and opens a prefilled email.
 * No booking API is assumed and no field value is transmitted automatically.
 */
(() => {
  'use strict';

  const form = document.querySelector('[data-quick-booking]');
  if (!form) return;

  const emailButton = form.querySelector('[data-qb-email]');
  const copyButton = form.querySelector('[data-qb-copy]');
  const summary = form.querySelector('[data-qb-summary]');
  const status = form.querySelector('[data-qb-status]');
  const whatsapp = form.querySelector('[data-qb-whatsapp]');
  const waBase = form.getAttribute('data-whatsapp-base') || '';
  const dateInput = form.querySelector('#qb-date');

  if (!emailButton || !summary) return;

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

  function prepareRecap(text) {
    summary.value = text;

    if (whatsapp && waBase) {
      whatsapp.href = waBase + '?text=' + encodeURIComponent(text);
    }
  }

  function sendRequest(event) {
    if (event && event.type === 'submit') event.preventDefault();

    if (typeof form.reportValidity === 'function' && !form.reportValidity()) {
      if (event) event.preventDefault();
      return false;
    }

    const text = buildSummary();
    prepareRecap(text);

    const emailBase = (emailButton.getAttribute('href') || '').split('?')[0];
    const subject = 'Demande de trajet — Alpes Transport';
    emailButton.href = emailBase + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(text);

    if (status) {
      status.textContent = 'Votre messagerie va s’ouvrir. Si elle ne s’ouvre pas, copiez le récapitulatif ci-dessous.';
    }
    return true;
  }

  emailButton.addEventListener('click', sendRequest);

  form.addEventListener('submit', (event) => {
    event.preventDefault();
    emailButton.click();
  });

  if (copyButton) {
    copyButton.addEventListener('click', async () => {
      if (!summary.value.trim()) {
        if (status) status.textContent = 'Cliquez d’abord sur « Envoyer ma demande » pour préparer le récapitulatif.';
        emailButton.focus();
        return;
      }

      try {
        if (!navigator.clipboard || !navigator.clipboard.writeText) {
          throw new Error('Clipboard API unavailable');
        }
        await navigator.clipboard.writeText(summary.value);
        if (status) status.textContent = 'Récapitulatif copié.';
      } catch (error) {
        summary.focus();
        summary.select();
        let copied = false;
        try {
          copied = document.execCommand('copy');
        } catch (fallbackError) {
          copied = false;
        }
        if (status) {
          status.textContent = copied
            ? 'Récapitulatif copié.'
            : 'Sélectionnez le texte pour le copier.';
        }
      }
    });
  }
})();
/* Location autocomplete is provided by location-providers.js and location-autocomplete.js. */
