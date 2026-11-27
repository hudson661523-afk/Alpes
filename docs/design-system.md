# Alpes Transport — Design System

**Status:** Reference document for all future page development.  
**Scope:** Existing approved premium visual identity. This is a consistency guide, not a redesign.  
**Last updated:** 2026-11-27

## 1. Approved fonts (do not replace)

Defined in `assets/css/style.css` `:root` and loaded in `partials/head.php`.

| Token | Value | Use |
|---|---|---|
| `--font-serif` | `'Cormorant Garamond', Georgia, 'Times New Roman', serif` | H1/H2/H3, premium editorial headings, selected highlights |
| `--font-sans` | `'Manrope', Arial, Helvetica, sans-serif` | Body, UI, buttons, labels, navigation, form fields |

Google Fonts load: Cormorant Garamond 400/500/600 + italic 400/500; Manrope 400/500/600/700/800.

## 2. Approved color palette (reuse existing tokens)

| Token | Hex / value | Role |
|---|---|---|
| `--charcoal` | `#15191c` | Primary dark background / dark text on light |
| `--charcoal-soft` | `#1d2327` | Secondary dark surface |
| `--gold` | `#b99a64` | Primary gold accent, lines, icons, focus |
| `--gold-light` | `#d8c39a` | Gold on dark backgrounds, hover/emphasis |
| `--gold-deep` | `#806536` | Gold accent on light backgrounds / readable gold text |
| `--warm-white` | `#f7f5f0` | Primary warm off-white background / light text on dark |
| `--slate` | `#64717b` | Muted UI/text support |
| `--slate-text` | `#5c6871` | Secondary paragraph text on light backgrounds |
| `--white` | `#ffffff` | Pure white surface/text where already used |
| `--text` | `#2b3236` | Default body text on light backgrounds |

### Contrast rules
- **Never** use dark heading/body color on dark backgrounds/images.
- **Never** use white/light body text on white/light backgrounds.
- On dark sections, use `--warm-white`/white for headings, `rgba(247,245,240,.74-.92)` or equivalent for body copy, and ensure overlays provide sufficient contrast.
- On light sections, use `--charcoal` for headings and `--slate-text`/`--text` for body.
- Gold is an accent. Avoid gold for long paragraph text; use `--gold-light` on dark and `--gold-deep` on light for small accents/kickers/links.
- Target WCAG AA contrast for normal text where applicable.

## 3. Typography scale (responsive, no oversized headings)

Use existing approved families. Preserve premium serif headings and sans-serif body.

| Element | Desktop | Tablet | Mobile | Notes |
|---|---:|---:|---:|---|
| H1 hero | 48–60px typical; up to ~90px only for approved existing hero layouts | 42–56px | 34–42px | Use `clamp()` carefully; avoid forced awkward breaks |
| H2 section | 40–46px max for standard sections | 34–40px | 28–34px | Existing approved large sections may keep current clamps; do not inflate new pages |
| H3 | 22–28px | 20–24px | 20–24px | Card/feature headings |
| Body | 16–18px (or 15px where established) | 15–16px | 15–16px | Never excessively small |
| Small labels/eyebrows | 11–13px (existing kickers often 10–11px uppercase) | same | same | Uppercase, tracked, gold accent |

### Implementation guidance
- Prefer `clamp(min, vw, max)` with tested line lengths.
- Use `text-wrap: balance` where supported for headings.
- Keep `line-height` generous: headings ~1.08–1.2, body ~1.75–2.
- Do not introduce random new font families/weights outside the approved set.

## 4. Spacing and layout

| Token / pattern | Value | Use |
|---|---|---|
| `--container` | `1440px` | Main content max width |
| `--gutter` | `clamp(22px, 5vw, 72px)` | Horizontal container padding |
| Section padding | `clamp(72px, 8vw, 124/148px)` depending on section | Vertical rhythm; avoid excessive empty space |
| Heading to paragraph | 18–28px typical | Keep cohesive blocks |
| Grid gaps | 20–32px common; use existing section-appropriate gap | Consistent card spacing |
| Card padding | 24–32px typical | Match card type |

## 5. Buttons

Reuse existing `.btn` system where possible.

| Variant | Class | Visual |
|---|---|---|
| Primary | `.btn .btn-gold` | Gold bg, charcoal text, gold-light hover |
| Secondary (dark bg) | `.btn .btn-outline` | Transparent, light border/text, gold hover |
| Secondary/dark | `.btn .btn-dark` | Charcoal bg, white text |
| WhatsApp/contact special | `.btn-whatsapp` | Existing footer/contact styling |

### Button standards
- Min height: ~54px (existing `.btn`), CTA variants may be 52px where already scoped.
- Padding: `16px 24px` baseline.
- Font: Manrope, 11px, 800, letter-spacing `.12em`, uppercase.
- Radius: follow existing button style (base `.btn` is minimal/square; do not randomly round individual pages).
- Hover: subtle lift/colour shift, visible focus outline.
- Focus: `:focus-visible` with gold outline, sufficient offset.

## 6. Images and media

- Subtle border radius: **12–16px** for editorial/card images where rounded style is used. Existing homepage/service cards use 18px in some cases; do not churn approved pages.
- Always `object-fit: cover` for photographic fills; never stretch.
- Use consistent aspect ratios for matching card types (e.g. service/destination cards 16:10 or 4:3 as already defined).
- Hover zoom: image only, `transform: scale(1.04-1.05)`, transition ~450–700ms, `overflow:hidden` on media wrapper, no layout shift.
- Respect `prefers-reduced-motion: reduce`: disable transform/transition animations.
- Provide descriptive alt text; decorative backgrounds use empty alt and `aria-hidden` where appropriate.

## 7. Section heading pattern

Use one cohesive content block:
1. **Eyebrow/kicker** — small uppercase gold label (`.section-kicker` / page-scoped equivalent).
2. **Heading** — premium serif H2/H1 as appropriate, balanced width, no awkward split.
3. **Description** — readable sans-serif paragraph, aligned with heading block.

Avoid pushing heading far right while paragraph sits detached left unless an existing approved layout does it intentionally and remains balanced. For new/fixed layouts, prefer left-aligned cohesive intro or a deliberate balanced two-column grid with clear alignment.

## 8. Dark section text rules

- Heading: `--warm-white`/white, clearly visible.
- Body: light muted white (`rgba(247,245,240,.78-.92)`), never dark grey.
- Overlay/gradient behind text on images: strong enough for WCAG AA readability.
- Gold highlights: `--gold-light` on dark backgrounds.
- Buttons: maintain contrast; outline buttons need visible border.

## 9. Responsive standards

Test/check at: **320, 375, 390, 768, 1024, 1440**.
- No horizontal overflow.
- Touch targets >= 44px where practical.
- Buttons can go full-width on narrow mobile when appropriate.
- Cards stack cleanly; equal-height behavior only where stable.
- Do not claim visual QA passed from CSS-only inspection.

## 10. Page-scoped CSS rule

- New page styles must be scoped under a page class (`.page-*`) and component namespace (`.xxx-*`).
- Before editing shared selectors in `assets/css/style.css`, identify every affected page.
- Avoid `!important` except narrow, justified overrides; document why.
- Do not overwrite approved page-specific layouts.

## 11. Pre-change checklist

Before creating/modifying a page:
- Read `AGENTS.md` and this file.
- Confirm keyword/URL mapping in `docs/seo/keyword-url-mapping.md`.
- Reuse existing tokens/classes before adding new CSS.
- Verify no SEO/content/booking/schema/robots/header-footer regressions.
- Check responsive behavior and contrast.
