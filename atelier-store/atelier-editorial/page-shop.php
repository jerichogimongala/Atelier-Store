<?php
/**
 * Template Name: Atelier Shop
 * Description: Sample storefront before WooCommerce is installed.
 *
 * @package Atelier_Editorial
 */
get_header();
?>
<main id="main-content" class="shop-page section-wrap">
	<header class="shop-page__heading"><p class="eyebrow"><?php esc_html_e( 'The considered edit', 'atelier-editorial' ); ?></p><h1><?php esc_html_e( 'The collection.', 'atelier-editorial' ); ?></h1><p><?php esc_html_e( 'A small gathering of useful, beautiful things from independent makers.', 'atelier-editorial' ); ?></p></header>
	<?php atelier_editorial_product_showcase( 12 ); ?>
</main>
<?php get_footer(); ?>
