(() => {
  'use strict';

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
