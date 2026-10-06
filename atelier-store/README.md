# Atelier Store — WordPress theme pair

Two separate, installable WordPress themes with matching templates and storefront features:

- **Atelier Editorial** — warm paper, muted clay accents, and a light editorial palette.
- **Atelier Nocturne** — ink-dark surfaces, warm brass accents, and a distinctly dark presentation.

Each folder is a complete theme, not a child theme or screenshot prototype. Activate one theme at a time; their PHP functions and text domains are intentionally namespaced separately.

## Install

1. Copy or ZIP either `atelier-editorial` or `atelier-nocturne` as its own folder. In WordPress, upload it via **Appearance → Themes → Add New → Upload Theme**, or copy the folder to `wp-content/themes/`.
2. Activate the theme.
3. Set a static homepage under **Settings → Reading** if you want WordPress to use the included `front-page.php`.
4. Optionally create a page and select the **Atelier Shop** page template to show the sample collection as a standalone shop page when WooCommerce is not installed. Set that page as the WooCommerce shop page after activating WooCommerce.
5. Add a WordPress menu under **Appearance → Menus** and assign it to **Primary navigation**. Without a menu, the theme displays its accessible collection/story/journal links.
6. Add your site title, logo, featured images, and real WooCommerce products. The theme's example prices are illustrative only; sample cards are not purchasable products.

## WooCommerce and sample catalog

Both themes declare WooCommerce support and delegate shop archives and single-product views to WooCommerce's own templates. If WooCommerce is active, homepage/shop showcase sections display actual catalog products where available. If it is absent (or the catalog is empty), those sections gracefully fall back to four editorial sample cards; WordPress functions that depend on WooCommerce are guarded.

## Styling, Tailwind, and images

The two `assets/css/theme.css` files contain the responsive design system and color palettes; their corresponding `style.css` files contain required WordPress theme headers. Templates use Tailwind utility classes, and `functions.php` loads the official Tailwind Play CDN browser script with preflight disabled to preserve the themes' styling.

**CDN prototype note:** the Play CDN requires an internet connection and Tailwind documents it for development/prototyping, not production. For production, compile the utility classes used in the PHP templates with Tailwind CLI, save the generated CSS in each theme's `assets/css/`, and enqueue that local file instead of the CDN. No build dependencies are required for the included prototype. Product/hero photos are remote Unsplash image URLs, so they also require network access; replace them with licensed, optimized media in the Media Library or local assets for production.

Change colors, type stacks, spacing, and responsive breakpoints in `assets/css/theme.css`. Change the showcase copy/image IDs in `functions.php`, and edit the editorial sections in `front-page.php`. Translate user-facing strings with the provided `atelier-editorial` / `atelier-nocturne` text domains.

## Interactions and accessibility

The mobile navigation toggle updates `aria-expanded`, closes after navigation, supports Escape-to-close, and returns focus to the toggle. Both themes include a skip link, semantic landmarks, descriptive image alternatives, visible keyboard focus, reduced-motion handling, and responsive layouts.

## Checks

From this project directory:

```sh
# PHP lint (run each command if PHP is installed)
php -l atelier-editorial/functions.php
php -l atelier-editorial/front-page.php
php -l atelier-editorial/page-shop.php
php -l atelier-editorial/woocommerce.php
php -l atelier-nocturne/functions.php
php -l atelier-nocturne/front-page.php
php -l atelier-nocturne/page-shop.php
php -l atelier-nocturne/woocommerce.php

# JavaScript syntax
node --check atelier-editorial/assets/js/theme.js
node --check atelier-nocturne/assets/js/theme.js
```

The project was authored as standalone WordPress theme folders. A full visual/WooCommerce integration check requires a WordPress install, a browser, and (for the commerce paths) the WooCommerce plugin.
