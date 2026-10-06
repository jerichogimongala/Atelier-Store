<?php
/**
 * Atelier Editorial theme functions.
 *
 * @package Atelier_Editorial
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function atelier_editorial_setup() {
	load_theme_textdomain( 'atelier-editorial', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 90, 'width' => 260, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'woocommerce' );
	register_nav_menus( array( 'primary' => __( 'Primary navigation', 'atelier-editorial' ) ) );
}
add_action( 'after_setup_theme', 'atelier_editorial_setup' );

function atelier_editorial_assets() {
	wp_enqueue_style( 'atelier-editorial-style', get_stylesheet_uri(), array(), '1.0.0' );
	wp_enqueue_style( 'atelier-editorial-design', get_theme_file_uri( '/assets/css/theme.css' ), array( 'atelier-editorial-style' ), '1.0.0' );
	wp_enqueue_script( 'atelier-editorial-tailwind', 'https://cdn.tailwindcss.com', array(), null, true );
	wp_add_inline_script( 'atelier-editorial-tailwind', 'window.tailwind = window.tailwind || {}; window.tailwind.config = { corePlugins: { preflight: false } };', 'before' );
	wp_enqueue_script( 'atelier-editorial-interactions', get_theme_file_uri( '/assets/js/theme.js' ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'atelier_editorial_assets' );

function atelier_editorial_shop_url() {
	if ( class_exists( 'WooCommerce' ) ) {
		$shop_id = wc_get_page_id( 'shop' );
		$shop_url = $shop_id > 0 ? get_permalink( $shop_id ) : false;
		if ( $shop_url ) {
			return $shop_url;
		}
	}
	$shop_pages = get_posts(
		array(
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'posts_per_page' => 1,
			'meta_key'       => '_wp_page_template',
			'meta_value'     => 'page-shop.php',
		)
	);
	if ( ! empty( $shop_pages ) ) {
		return get_permalink( $shop_pages[0] );
	}
	return home_url( '/#collection' );
}

/**
 * Output real WooCommerce products when possible, or an attractive sample range.
 *
 * @param int $limit Number of cards to request.
 */
function atelier_editorial_product_showcase( $limit = 4 ) {
	if ( class_exists( 'WooCommerce' ) ) {
		$products = do_shortcode( '[products limit="' . absint( $limit ) . '" columns="4" orderby="date"]' );
		if ( trim( $products ) ) {
			echo $products; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			return;
		}
	}

	$pieces = array(
		array( 'name' => __( 'Sculpted ceramic vase', 'atelier-editorial' ), 'category' => __( 'Hand-thrown stoneware', 'atelier-editorial' ), 'price' => '$68', 'image' => 'photo-1578500494198-246f612d3b3d', 'alt' => __( 'Sculptural handmade ceramic vase', 'atelier-editorial' ) ),
		array( 'name' => __( 'Quiet morning mug', 'atelier-editorial' ), 'category' => __( 'Glazed porcelain', 'atelier-editorial' ), 'price' => '$34', 'image' => 'photo-1514228742587-6b1558fcca3d', 'alt' => __( 'Minimal ceramic mug on a warm tabletop', 'atelier-editorial' ) ),
		array( 'name' => __( 'Linen table study', 'atelier-editorial' ), 'category' => __( 'Washed European linen', 'atelier-editorial' ), 'price' => '$92', 'image' => 'photo-1600210492486-724fe5c67fb0', 'alt' => __( 'Calm, sunlit interior with natural linen textures', 'atelier-editorial' ) ),
		array( 'name' => __( 'Object No. 04', 'atelier-editorial' ), 'category' => __( 'Small-batch decor', 'atelier-editorial' ), 'price' => '$54', 'image' => 'photo-1490312278390-ab64016e0aa9', 'alt' => __( 'Artful handmade interior object', 'atelier-editorial' ) ),
	);
	$pieces = array_slice( $pieces, 0, max( 1, absint( $limit ) ) );
	?>
	<div class="sample-products">
		<?php foreach ( $pieces as $piece ) : ?>
			<article class="sample-product">
				<a class="sample-product__image-link" href="<?php echo esc_url( atelier_editorial_shop_url() ); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Explore %s', 'atelier-editorial' ), $piece['name'] ) ); ?>">
					<img class="w-full object-cover" src="<?php echo esc_url( 'https://images.unsplash.com/' . $piece['image'] . '?auto=format&fit=crop&w=900&q=85' ); ?>" alt="<?php echo esc_attr( $piece['alt'] ); ?>" loading="lazy">
					<span class="product-tag"><?php esc_html_e( 'Small batch', 'atelier-editorial' ); ?></span>
				</a>
				<div class="sample-product__details">
					<div><p class="product-category"><?php echo esc_html( $piece['category'] ); ?></p><h3><a href="<?php echo esc_url( atelier_editorial_shop_url() ); ?>"><?php echo esc_html( $piece['name'] ); ?></a></h3></div>
					<span class="product-price"><?php echo esc_html( $piece['price'] ); ?></span>
				</div>
			</article>
		<?php endforeach; ?>
	</div>
	<?php
}
