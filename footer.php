<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anti-Flash-White
 */

?>

	</div><!-- #content -->

	<div class="container">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info text-center">
			Proudly powered by
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Anti-Flash-White' ) ); ?>"><?php printf( esc_html__( ' %s', 'Anti-Flash-White' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( '%1$s by %2$s.', 'Anti-Flash-White' ), 'Anti-Flash-White', '<a href="http://cubepro.us" rel="designer">Lorin Hart</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div>

</div><!-- #page -->
<!-- Placed at the end of the document so the pages load faster -->
<?php wp_footer(); ?>
<!-- </div> --><!-- closing container -->
</body>
</html>
