<?php
/**
 * Standard page.
 *
 * @package Atelier_Nocturne
 */
get_header();
?>
<main id="main-content" class="content-page section-wrap">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<header class="content-page__header"><p class="eyebrow"><?php bloginfo( 'name' ); ?></p><h1><?php the_title(); ?></h1></header>
			<div class="entry-content"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
