<?php
/**
 * The footer.
 *
 * @package Atelier_Nocturne
 */
?>
<footer class="site-footer">
	<div class="site-footer__main">
		<div class="footer-brand"><a class="brand__name" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a><p><?php esc_html_e( 'A slower kind of shopping. Considered objects, chosen to live with you.', 'atelier-nocturne' ); ?></p></div>
		<div><p class="footer-heading"><?php esc_html_e( 'Explore', 'atelier-nocturne' ); ?></p><a href="<?php echo esc_url( atelier_nocturne_shop_url() ); ?>"><?php esc_html_e( 'The collection', 'atelier-nocturne' ); ?></a><a href="<?php echo esc_url( home_url( '/#story' ) ); ?>"><?php esc_html_e( 'Our approach', 'atelier-nocturne' ); ?></a></div>
		<div><p class="footer-heading"><?php esc_html_e( 'A little note from us', 'atelier-nocturne' ); ?></p><p><?php esc_html_e( 'New makers, considered materials, and everyday inspiration—sent occasionally.', 'atelier-nocturne' ); ?></p><a class="footer-cta" href="mailto:hello@example.com"><?php esc_html_e( 'Say hello', 'atelier-nocturne' ); ?> <span aria-hidden="true">↗</span></a></div>
	</div>
	<div class="site-footer__bottom"><span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span><span><?php esc_html_e( 'Made for the everyday, and everything in between.', 'atelier-nocturne' ); ?></span></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
