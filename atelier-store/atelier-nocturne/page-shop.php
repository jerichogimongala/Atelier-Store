<?php
/**
 * Template Name: Atelier Shop
 * Description: Sample storefront before WooCommerce is installed.
 *
 * @package Atelier_Nocturne
 */
get_header();
?>
<main id="main-content" class="shop-page section-wrap">
	<header class="shop-page__heading"><p class="eyebrow"><?php esc_html_e( 'The considered edit', 'atelier-nocturne' ); ?></p><h1><?php esc_html_e( 'The collection.', 'atelier-nocturne' ); ?></h1><p><?php esc_html_e( 'A small gathering of useful, beautiful things from independent makers.', 'atelier-nocturne' ); ?></p></header>
	<?php atelier_nocturne_product_showcase( 12 ); ?>
</main>
<?php get_footer(); ?>
