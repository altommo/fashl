# Fashl Website Elements Specification

A comprehensive breakdown of every UI/UX element on the Fashl site, with research-derived best practices, Tailwind-based implementation notes, and interaction guidelines. Provide this spec to your development team for pixel-perfect, accessible, and on-brand execution.

---

## 1. Global Layout & Utilities

### 1.1 Breakpoints & Container

* **Mobile-first breakpoints:**

  * `sm`: `640px`
  * `md`: `768px`
  * `lg`: `1024px`
  * `xl`: `1280px`
  * `2xl`: `1536px`
* **Container widths:** Use Tailwind `container` with `max-w-screen-sm`, `md`, `lg`, `xl`, `2xl` per Tailwind default.
* **Spacing scale:** 0, 1, 2, 4, 6, 8, 12, 16, 24, 32, 40, 48, 56, 64 (Tailwind `p-`, `m-`).
* **Typography scale:**

  * `text-xs` (0.75rem), `text-sm` (0.875rem), `text-base` (1rem), `text-lg` (1.125rem), `text-xl` (1.25rem), `text-2xl` (1.5rem), `text-3xl` (1.875rem), etc.

### 1.2 Color & Theming Utilities

* Utility classes for brand colors:

  * `bg-fashl-white`, `text-fashl-black`, `bg-fashl-sage`, `text-fashl-sage`
  * Define in `tailwind.config.js` under `theme.extend.colors`.
* Dark mode fallback: Not required initially but plan `dark:` variants for future.

---

## 2. Header & Navigation

### 2.1 Structure & Behavior

* **Position:** `fixed top-0 w-full z-50` on scroll.
* **Logo:** left-aligned, clickable, `max-h-10`.
* **Main nav:** centered or right-aligned links: Shop, About, Contact, Login, Cart icon.
* **Mobile menu:** Hamburger (`lg:hidden`), slide-down drawer using `transition-transform`.

### 2.2 Accessibility

* `aria-label` on nav landmarks; focus outlines visible; keyboard nav.
* Ensure `alt` on logo image.

### 2.3 Tailwind Example

```html
<header class="fixed top-0 w-full bg-white shadow p-4 flex items-center justify-between">
  <a href="/" class="flex items-center"><img src="/logo.svg" alt="Fashl" class="h-8"></a>
  <nav class="hidden lg:flex space-x-6">
    <a href="/shop" class="text-base font-medium hover:text-fashl-sage">Shop</a>
    <!-- more links -->
  </nav>
  <button class="lg:hidden p-2" aria-label="Open menu">…</button>
</header>
```

---

## 3. Footer

### 3.1 Sections

* **Column 1:** Shop (links to categories)
* **Column 2:** About (Our Story, Blog, Careers)
* **Column 3:** Support (Contact, FAQ, Returns)
* **Column 4:** Social & newsletter signup
* **Bottom bar:** Copyright, Terms, Privacy

### 3.2 Newsletter Form

* Single-line input + button inline: `flex space-x-2`
* Validation: HTML5 `required`, email type

---

## 4. Homepage Components

### 4.1 Hero Banner

* **Full-width** background image or video (vertical-first demo) + overlay text CTA.
* Text: `text-3xl lg:text-5xl font-bold`, CTA button `btn-primary`.
* Accessibility: ensure `contrast ratio ≥ 4.5:1`.

### 4.2 Featured Capsule Carousel

* **Horizontal scroll** `overflow-x-auto flex space-x-4`.
* Each slide: a Card component (see §5), linking to capsule landing page.
* Pagination dots or arrows via `@tailwindcss/forms` or custom.

### 4.3 UGC Gallery Preview

* Grid of 4 images (`grid grid-cols-2 md:grid-cols-4 gap-2`), clickable to full UGC page.

### 4.4 Newsletter & Living Report Teaser

* Two-column: left: signup form; right: embed iframe or link to “Living Report”.

---

## 5. Product Grid & Category Pages

### 5.1 Grid Layout

* `grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6`.
* Responsive images: `object-cover w-full h-64`.
* Lazy-load images via `loading="lazy"`.

### 5.2 Filters Sidebar (Desktop)

* `w-64 sticky top-24` on desktop, hidden on mobile.
* Checkboxes & sliders for price, size, color—styled with custom `form-checkbox`, `bg-fashl-sage`.

### 5.3 Mobile Filters

* Slide-in panel (`fixed inset-0 bg-white transform translate-x-full lg:hidden` toggled via JS).

---

## 6. Product Card Component

### 6.1 Structure

* Image container with hover swap to alternate image.
* Badge slot for “L-Limited” drop: `absolute top-2 left-2 bg-fashl-sage text-white px-2 py-1 text-xs uppercase rounded`.
* Title `<h3 class="mt-2 text-base font-semibold">`.
* Price `<p class="mt-1 text-sm text-gray-700">£XX</p>`.

### 6.2 Interactions

* Hover state: image scales `scale-105 transition-transform`.
* Focus outline for accessibility.

---

## 7. Product Detail Page

### 7.1 Gallery

* Main image + thumbnails row (`flex space-x-2`).
* Click thumbnail to update main image.
* Include vertical video embed below images.

### 7.2 Product Info Panel

* **Title & Price** at top.
* **Fit Notes** collapsible section: `summary`/`details` element styled.
* **Finish the Look**: small grid of two accessory items with `Add to Cart` buttons.
* **Size Selector**: custom radio buttons with sizing chart link.
* **Add to Cart** button: `btn-primary w-full mt-4`.

### 7.3 Stock & Pre-Order

* Show `In Stock—Ships in 2–3 days` in green or `Pre-Order—Ships in 10 days` in amber.

---

## 8. Cart & Checkout

### 8.1 Cart Page

* Table or flex list of items: image, title, size, qty selector, price, remove link.
* **Filter Checklist** modal trigger near “Proceed to Checkout” button.
* Loyalty summary: “You have X points—£Y discount available.”

### 8.2 Checkout Page

* Use WooCommerce/Shopify checkout fields: Billing, Shipping, Payment.
* Ensure mobile-friendly single-column form.

---

## 9. Account & Dashboard

* Login/Register page: two-column or tabbed interface.
* Account dashboard: Orders list, Addresses, Loyalty points, UGC submission form.

---

## 10. Living Report & Blog

### 10.1 Living Report Page

* Embed Google Data Studio or custom charts via `<iframe>`.
* Section for latest research summary (editable via WP editor).

### 10.2 Blog List & Post

* Classic list `grid grid-cols-1 md:grid-cols-2 gap-8`.
* Post template: feature image, content, related posts slider.

---

## 11. Pop-Ups & Modals

### 11.1 Filter Checklist Modal

* Trigger on add-to-cart: `x-data` (Alpine.js) or vanilla JS.
* Content: three checkboxes, CTA Continue.
* Overlay: `fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center`.

### 11.2 Pre-Order Notification

* Bar at top: `bg-yellow-100 text-yellow-800 p-2 text-center`.
* Dismissible with `js-dismiss`.

---

## 12. Accessibility & Performance

* Use `alt` on all images; semantic HTML5.
* Contrast ratios per WCAG 2.1 ≥ 4.5:1.
* Minify CSS/JS (`purge` unused Tailwind), lazy-load images.

---

**Next Steps for Dev:**

1. Scaffold theme with Tailwind & WordPress per spec.
2. Build and test each component isolated (Storybook recommended).
3. Integrate into WP templates, configure dynamic data via ACF or Gutenberg.
4. QA: cross-browser, responsive, accessibility audit.

*This spec will evolve—add examples, screenshots, and code snippets in your repo.*
