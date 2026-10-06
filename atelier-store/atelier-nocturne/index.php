<?php
/**
 * Fallback template.
 *
 * @package Atelier_Nocturne
 */
get_header();
?>
<main id="main-content" class="content-page section-wrap">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'fallback-entry' ); ?>><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><?php the_excerpt(); ?></article>
		<?php endwhile; ?>
		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<header class="content-page__header"><p class="eyebrow"><?php esc_html_e( 'Atelier Nocturne', 'atelier-nocturne' ); ?></p><h1><?php esc_html_e( 'A thoughtful collection for everyday living.', 'atelier-nocturne' ); ?></h1></header>
		<?php atelier_nocturne_product_showcase( 4 ); ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
