<?php
/**
 * Delegate shop and product views to WooCommerce's own templates.
 *
 * @package Atelier_Nocturne
 */
get_header();
if ( function_exists( 'wc_get_template' ) ) {
	wc_get_template( is_product() ? 'single-product.php' : 'archive-product.php' );
}
get_footer();
