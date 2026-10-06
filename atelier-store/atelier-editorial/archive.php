<?php
/**
 * Archive template.
 *
 * @package Atelier_Editorial
 */
get_header();
?>
<main id="main-content" class="content-page section-wrap">
	<header class="content-page__header"><p class="eyebrow"><?php esc_html_e( 'From the journal', 'atelier-editorial' ); ?></p><h1><?php the_archive_title(); ?></h1></header>
	<?php if ( have_posts() ) : ?>
		<div class="post-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'post-card' ); ?>>
					<?php if ( has_post_thumbnail() ) : ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a><?php endif; ?>
					<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><div><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>
		</div>
		<?php the_posts_pagination(); ?>
	<?php else : ?><p><?php esc_html_e( 'Nothing here just yet. Please check back soon.', 'atelier-editorial' ); ?></p><?php endif; ?>
</main>
<?php get_footer(); ?>
