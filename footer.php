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
	<div class="back-to-top">
		<a href="#" class="back-to-top">
			<i class="fa fa-arrow-up fa-3x" aria-hidden="true"></i>
			<span class="screen-reader-text">Back to Top</span>
		</a>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-lg-12 site-info text-center">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Anti-Flash-White' ) ); ?>"><?php printf( esc_html__( ' %s', 'Anti-Flash-White' ), 'WordPress' ); ?></a>
			<span class="sep"> theme </span>
			<?php printf( esc_html__( '%1$s by %2$s.', 'Anti-Flash-White' ), 'Anti-Flash-White', '<a href="http://cubepro.us" rel="designer">Lorin Hart</a>' ); ?>
		</div><!-- .site-info -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			&copy; <?php echo date("Y")." - ";bloginfo( 'name' );  ?>
		</div>
	</footer><!-- #colophon -->
	</div>

</div><!-- #page -->
<!-- Placed at the end of the document so the pages load faster -->
<?php wp_footer(); ?>
<!-- </div> --><!-- closing container -->
</body>
</html>
