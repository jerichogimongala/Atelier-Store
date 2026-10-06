<?php
/**
 * The header.
 *
 * @package Atelier_Editorial
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'atelier-editorial' ); ?></a>
<div class="announcement-bar"><?php esc_html_e( 'Thoughtful things, made to be kept. Complimentary shipping over $120.', 'atelier-editorial' ); ?></div>
<header class="site-header">
	<div class="site-header__inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php if ( has_custom_logo() ) : ?>
				<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array( 'class' => 'custom-logo' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			<?php else : ?>
				<span class="brand__name"><?php bloginfo( 'name' ); ?></span>
				<span class="brand__descriptor"><?php esc_html_e( 'Objects for considered living', 'atelier-editorial' ); ?></span>
			<?php endif; ?>
		</a>
		<button class="menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false">
			<span class="menu-toggle__label"><?php esc_html_e( 'Menu', 'atelier-editorial' ); ?></span>
			<span class="menu-toggle__icon" aria-hidden="true"><i></i><i></i></span>
		</button>
		<nav class="primary-navigation" id="primary-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'atelier-editorial' ); ?>">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'menu-list', 'fallback_cb' => false ) ); ?>
			<?php else : ?>
				<ul class="menu-list">
					<li><a href="<?php echo esc_url( home_url( '/#collection' ) ); ?>"><?php esc_html_e( 'Collection', 'atelier-editorial' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/#story' ) ); ?>"><?php esc_html_e( 'Our story', 'atelier-editorial' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/#journal' ) ); ?>"><?php esc_html_e( 'Journal', 'atelier-editorial' ); ?></a></li>
				</ul>
			<?php endif; ?>
		</nav>
		<a class="header-shop-link" href="<?php echo esc_url( atelier_editorial_shop_url() ); ?>"><?php esc_html_e( 'Shop', 'atelier-editorial' ); ?><span aria-hidden="true"> ↗</span></a>
	</div>
</header>
