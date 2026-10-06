<?php
/**
 * Home storefront.
 *
 * @package Atelier_Nocturne
 */
get_header();
?>
<main id="main-content">
	<section class="hero-section">
		<div class="hero-copy">
			<p class="eyebrow"><span class="eyebrow__line"></span><?php esc_html_e( 'A considered collection · No. 01', 'atelier-nocturne' ); ?></p>
			<h1><?php esc_html_e( 'Find beauty', 'atelier-nocturne' ); ?><br><em><?php esc_html_e( 'in the stillness.', 'atelier-nocturne' ); ?></em></h1>
			<p class="hero-intro"><?php esc_html_e( 'Objects with a point of view, made with care and chosen to become part of your everyday.', 'atelier-nocturne' ); ?></p>
			<a class="text-link" href="#collection"><?php esc_html_e( 'Discover the collection', 'atelier-nocturne' ); ?><span aria-hidden="true"> ↓</span></a>
			<div class="hero-note"><span class="hero-note__number">01</span><span><?php esc_html_e( 'Made slowly. Loved longer.', 'atelier-nocturne' ); ?></span></div>
		</div>
		<div class="hero-art">
			<img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1610701596007-11502861dcfa?auto=format&fit=crop&w=1500&q=90" alt="<?php esc_attr_e( 'Sunlit handmade ceramics arranged in an artist studio', 'atelier-nocturne' ); ?>" fetchpriority="high">
			<div class="hero-caption"><span><?php esc_html_e( 'Form follows feeling', 'atelier-nocturne' ); ?></span><span>01 — 04</span></div>
			<div class="hero-stamp" aria-hidden="true"><span><?php esc_html_e( 'OBJECTS', 'atelier-nocturne' ); ?></span><b>✳</b><span><?php esc_html_e( 'AFTER HOURS', 'atelier-nocturne' ); ?></span></div>
		</div>
	</section>

	<section class="collection-section section-wrap" id="collection">
		<div class="section-heading">
			<div><p class="eyebrow"><?php esc_html_e( 'The considered edit', 'atelier-nocturne' ); ?></p><h2><?php esc_html_e( 'Quietly extraordinary.', 'atelier-nocturne' ); ?></h2></div>
			<a class="text-link" href="<?php echo esc_url( atelier_nocturne_shop_url() ); ?>"><?php esc_html_e( 'View all pieces', 'atelier-nocturne' ); ?><span aria-hidden="true"> ↗</span></a>
		</div>
		<?php atelier_nocturne_product_showcase( 4 ); ?>
	</section>

	<section class="story-section" id="story">
		<div class="story-image"><img src="https://images.unsplash.com/photo-1490312278390-ab64016e0aa9?auto=format&fit=crop&w=1200&q=85" alt="<?php esc_attr_e( 'A quiet, tactile interior filled with crafted objects', 'atelier-nocturne' ); ?>" loading="lazy"></div>
		<div class="story-copy"><p class="eyebrow"><?php esc_html_e( 'Less, but more considered', 'atelier-nocturne' ); ?></p><h2><?php esc_html_e( 'Good things take the time they take.', 'atelier-nocturne' ); ?></h2><p><?php esc_html_e( 'We work with independent makers who believe the best objects are the ones that feel right in your hands, find their place in your home, and stay there for years.', 'atelier-nocturne' ); ?></p><a class="text-link" href="#journal"><?php esc_html_e( 'The way we see it', 'atelier-nocturne' ); ?><span aria-hidden="true"> ↗</span></a></div>
	</section>

	<section class="journal-section section-wrap" id="journal">
		<div class="journal-note"><span class="journal-mark" aria-hidden="true">✳</span><p class="eyebrow"><?php esc_html_e( 'A note from the studio', 'atelier-nocturne' ); ?></p><h2><?php esc_html_e( 'The ritual of a slower evening.', 'atelier-nocturne' ); ?></h2><p><?php esc_html_e( 'A favorite cup. The last light. A little more room to notice.', 'atelier-nocturne' ); ?></p><a class="text-link" href="<?php echo esc_url( atelier_nocturne_shop_url() ); ?>"><?php esc_html_e( 'Find your everyday favorite', 'atelier-nocturne' ); ?><span aria-hidden="true"> ↗</span></a></div>
		<div class="journal-image"><img src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?auto=format&fit=crop&w=1100&q=85" alt="<?php esc_attr_e( 'Coffee and soft evening light on a cafe table', 'atelier-nocturne' ); ?>" loading="lazy"><span><?php esc_html_e( 'A moment, made yours.', 'atelier-nocturne' ); ?></span></div>
	</section>
</main>
<?php get_footer(); ?>
