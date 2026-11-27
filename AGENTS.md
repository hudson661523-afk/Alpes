# AGENTS.md — Alpes Transport

## Scope and safety
- Custom PHP, HTML5, CSS3 and vanilla JavaScript site. No WordPress, Elementor or slider libraries in this codebase.
- Development: `C:\Users\Tech Soft System\Downloads\Alpes-GitHub`.
- Staging: `https://equal-indigo-jay-25.hostingersite.com/`. Keep staging `noindex, nofollow` and disallowed in `robots.txt`.
- Production: `https://alpestransport.fr/`. Read it for research only; never modify the live WordPress site.
- Do not change DNS, domains, hosting configuration, databases, email settings or the verified booking URL `https://alpestransport.fr/reserver-en-ligne/`.
- Preserve all 28 existing sitemap URLs. Do not remove, merge or redirect a URL without explicit approval.
- Never invent prices, fixed journey times, reviews, fleet specifications, licences, certifications or unsupported service guarantees.

## SEO and content are part of development
For every page or section request:
1. Review the existing live counterpart and current URL.
2. Identify the search intent and the assigned keyword from `docs/seo/keyword-url-mapping.md`.
3. Prepare original, fluent, people-first French content.
4. Build it in the approved luxury design without changing unrelated sections.
5. Add SEO elements and natural internal links.
6. Test functionality, responsive layout, accessibility and SEO.
7. Commit and push safe changes to `origin/main`.
8. Wait for Hostinger deployment; verify the live staging page before reporting done.
9. Report SEO changes, files changed, tests, commit and deployment status.

## Keyword strategy
- Maintain the keyword-to-URL mapping before writing copy.
- One primary search intent and one main keyword per page; closely related secondary keywords only where they fit.
- Preserve existing URLs and valuable live content.
- Use reverse route variations naturally on the same page; separate pages only when user needs and search evidence justify it.
- Do not create a new landing page merely because a keyword variation exists.
- Avoid cannibalization between homepage, service overview, local chauffeur, taxi and route pages.
- Volume, difficulty, ranking position and trend data are unverified unless supplied by Keyword Planner, Semrush or Ahrefs. Request an export before final prioritization. Never invent those values.

## Content rules
- All core content must be natural, fluent French.
- Follow current Google Search Central guidance: original, useful, accurate content written for people.
- Use the primary keyword naturally in the title, H1, introduction and relevant body copy when appropriate.
- No keyword stuffing, repetitive headings, duplicate paragraphs, filler, artificial word counts or mass-produced doorway pages.
- Verify business facts before publishing. Use only supported destinations and services.

## Local SEO
- Relevant places: Chamonix-Mont-Blanc, Geneva Airport, Lyon Airport, Chambéry, Turin, Milan, Zurich, Megève, Annecy, Courmayeur, Argentière and Les Houches.
- Discuss only destinations and services actually supported.
- Add reliable practical details such as pickup procedures, terminals, luggage handling and reservation steps only when verified.
- Do not invent fixed travel times, prices or operating guarantees.

## On-page checklist
- Unique SEO title and unique meta description.
- One meaningful H1 and logical H2/H3 structure.
- Useful introductory copy and contextual primary/secondary keywords.
- Descriptive image alt text.
- Clean URL, appropriate canonical URL and Open Graph metadata.
- Internal links to genuinely relevant existing pages.
- Selective external links to verified authoritative sources: airports, official tourism sites and transport authorities. Use Wikipedia only for useful geographical context where relevant.
- Suitable factual structured data where supported.

## Internal and external linking
- Link naturally between related services and destinations, for example homepage → airport transfers / chauffeur privé, airport transfers → Genève–Chamonix and Lyon–Chamonix, private chauffeur → business travel.
- No excessive sitewide keyword-rich links or duplicate links added only for SEO.
- Verify every external URL before publishing. Do not add irrelevant links.

## Technical SEO
- Preserve the 28-URL inventory pending crawl and Search Console verification.
- Keep staging hidden from indexers. Generate the final XML sitemap and correct robots.txt for production launch.
- Maintain canonical and redirect plans; make no redirect changes without approval.
- Apply LocalBusiness, Service, WebPage, BreadcrumbList and Article structured data only where factual and supported.
- Never publish fabricated review or rating structured data and never promise FAQ rich results for this commercial site.
- Optimize Core Web Vitals, mobile usability, image loading and accessibility.

## AI search / AEO / GEO
- Answer genuine customer questions clearly and usefully.
- Prefer accurate service explanations and original information over special AI-ranking tricks.
- Do not create unnecessary AI-only content or artificial optimization files.

## Reference
- Keyword and URL decisions: `docs/seo/keyword-url-mapping.md`.

## Global Visual Design Standards

Read `docs/design-system.md` before creating or modifying any page. The goal is consistency, not redesign.

1. **Approved font families**: keep `--font-serif: 'Cormorant Garamond', Georgia, 'Times New Roman', serif` for premium headings and `--font-sans: 'Manrope', Arial, Helvetica, sans-serif` for body/UI. Do not introduce random new families.
2. **Approved color palette**: reuse existing CSS tokens in `assets/css/style.css` (`--charcoal`, `--charcoal-soft`, `--gold`, `--gold-light`, `--gold-deep`, `--warm-white`, `--slate`, `--slate-text`, `--white`, `--text`). Do not invent off-brand colors.
3. **Responsive heading sizes**: H1 hero 48–60px desktop typical (34–42px mobile, up to ~90px only for approved existing heroes); H2 40–46px desktop / 34–40px tablet / 28–34px mobile; H3 22–28px desktop / 20–24px mobile. Never use oversized headings.
4. **Section spacing**: use consistent container/gutter/section rhythm (`--container: 1440px`, `--gutter: clamp(22px,5vw,72px)`, section padding typically `clamp(72px,8vw,124/148px)`). Avoid excessive empty space and inconsistent margins.
5. **Container widths**: keep content within `var(--container)` with `var(--gutter)` padding; do not create full-width text blocks without design intent.
6. **Button styling**: reuse `.btn`, `.btn-gold`, `.btn-outline`, `.btn-dark` patterns. Keep consistent height/padding/font/letter-spacing/hover/focus. Do not redesign buttons per page.
7. **Image border radius and hover behavior**: use subtle 12–16px radius where rounded editorial/card media is used; preserve existing approved 18px cases unless intentionally harmonized with full audit. Use `object-fit: cover`, image-only hover zoom (`scale(1.04-1.05)`, ~450–700ms), `overflow:hidden`, no layout shift; respect `prefers-reduced-motion`.
8. **Text contrast requirements**: never place dark text on dark backgrounds or light text on light backgrounds. Dark sections need clear heading/body contrast and sufficient overlay. Target WCAG AA where applicable. Gold is an accent, not long-paragraph text.
9. **Heading/paragraph alignment rules**: eyebrow, heading and description should form one cohesive block. Avoid detached right-aligned headings with floating left paragraphs unless intentionally balanced and approved.
10. **Mobile responsiveness**: test 320/375/390/768/1024/1440. No horizontal overflow; readable text; proper stacking; full-width buttons where appropriate.
11. **Page-scoped CSS requirements**: scope new page CSS under `.page-*` and component namespace; before changing shared CSS, identify every affected page. Avoid `!important` and fragile overrides.
12. **Rules against visual inconsistencies**: do not randomly change fonts, colors, button styles, radii, spacing, or heading scales on individual pages. Reuse tokens/classes; document any risky global change before applying.
