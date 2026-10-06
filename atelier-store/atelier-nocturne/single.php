<?php
/**
 * Single post template.
 *
 * @package Atelier_Nocturne
 */
get_header();
?>
<main id="main-content" class="content-page section-wrap">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class( 'single-article' ); ?>>
			<header class="content-page__header"><p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p><h1><?php the_title(); ?></h1></header>
			<?php if ( has_post_thumbnail() ) : ?><div class="single-article__image"><?php the_post_thumbnail( 'large' ); ?></div><?php endif; ?>
			<div class="entry-content"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
