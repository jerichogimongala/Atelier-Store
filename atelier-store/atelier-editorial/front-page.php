<?php
/**
 * Home storefront.
 *
 * @package Atelier_Editorial
 */
get_header();
?>
<main id="main-content">
	<section class="hero-section">
		<div class="hero-copy">
			<p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'A considered collection · No. 01', 'atelier-editorial' ); ?></p>
			<h1><?php esc_html_e( 'Make room for', 'atelier-editorial' ); ?><br><em><?php esc_html_e( 'the meaningful.', 'atelier-editorial' ); ?></em></h1>
			<p class="hero-intro"><?php esc_html_e( 'Objects with a point of view, made with care and chosen to become part of your everyday.', 'atelier-editorial' ); ?></p>
			<a class="text-link" href="#collection"><?php esc_html_e( 'Discover the collection', 'atelier-editorial' ); ?><span aria-hidden="true"> ↓</span></a>
			<div class="hero-note"><span class="hero-note__number">01</span><span><?php esc_html_e( 'Made slowly. Loved longer.', 'atelier-editorial' ); ?></span></div>
		</div>
		<div class="hero-art">
			<img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1610701596007-11502861dcfa?auto=format&fit=crop&w=1500&q=90" alt="<?php esc_attr_e( 'Sunlit handmade ceramics arranged in an artist studio', 'atelier-editorial' ); ?>" fetchpriority="high">
			<div class="hero-caption"><span><?php esc_html_e( 'Form follows feeling', 'atelier-editorial' ); ?></span><span>01 — 04</span></div>
			<div class="hero-stamp" aria-hidden="true"><span><?php esc_html_e( 'OBJECTS', 'atelier-editorial' ); ?></span><b>✳</b><span><?php esc_html_e( 'WITH INTENTION', 'atelier-editorial' ); ?></span></div>
		</div>
	</section>

	<section class="collection-section section-wrap" id="collection">
		<div class="section-heading">
			<div><p class="eyebrow"><?php esc_html_e( 'The considered edit', 'atelier-editorial' ); ?></p><h2><?php esc_html_e( 'Everyday, elevated.', 'atelier-editorial' ); ?></h2></div>
			<a class="text-link" href="<?php echo esc_url( atelier_editorial_shop_url() ); ?>"><?php esc_html_e( 'View all pieces', 'atelier-editorial' ); ?><span aria-hidden="true"> ↗</span></a>
		</div>
		<?php atelier_editorial_product_showcase( 4 ); ?>
	</section>

	<section class="story-section" id="story">
		<div class="story-image"><img src="https://images.unsplash.com/photo-1490312278390-ab64016e0aa9?auto=format&fit=crop&w=1200&q=85" alt="<?php esc_attr_e( 'A quiet, tactile interior filled with crafted objects', 'atelier-editorial' ); ?>" loading="lazy"></div>
		<div class="story-copy"><p class="eyebrow"><?php esc_html_e( 'Less, but more considered', 'atelier-editorial' ); ?></p><h2><?php esc_html_e( 'Good things take the time they take.', 'atelier-editorial' ); ?></h2><p><?php esc_html_e( 'We work with independent makers who believe the best objects are the ones that feel right in your hands, find their place in your home, and stay there for years.', 'atelier-editorial' ); ?></p><a class="text-link" href="#journal"><?php esc_html_e( 'The way we see it', 'atelier-editorial' ); ?><span aria-hidden="true"> ↗</span></a></div>
	</section>

	<section class="journal-section section-wrap" id="journal">
		<div class="journal-note"><span class="journal-mark" aria-hidden="true">✳</span><p class="eyebrow"><?php esc_html_e( 'A note from the studio', 'atelier-editorial' ); ?></p><h2><?php esc_html_e( 'The beauty of a slower morning.', 'atelier-editorial' ); ?></h2><p><?php esc_html_e( 'A favorite cup. A patch of light. A little more room to notice.', 'atelier-editorial' ); ?></p><a class="text-link" href="<?php echo esc_url( atelier_editorial_shop_url() ); ?>"><?php esc_html_e( 'Find your everyday favorite', 'atelier-editorial' ); ?><span aria-hidden="true"> ↗</span></a></div>
		<div class="journal-image"><img src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?auto=format&fit=crop&w=1100&q=85" alt="<?php esc_attr_e( 'Morning coffee and soft light on a cafe table', 'atelier-editorial' ); ?>" loading="lazy"><span><?php esc_html_e( 'A moment, made yours.', 'atelier-editorial' ); ?></span></div>
	</section>
</main>
<?php get_footer(); ?>
