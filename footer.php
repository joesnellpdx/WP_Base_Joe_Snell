<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WP_Base_Theme
 * @since WP_Base_Theme 1.0
 */
?>

	</div><!-- #main .site-main -->
	<div class="footer-container">

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<?php do_action( 'wp_base_theme_credits' ); ?>
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wp_base_theme' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wp_base_theme' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'wp_base_theme' ), 'wp_base_theme', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->
	</div>
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>