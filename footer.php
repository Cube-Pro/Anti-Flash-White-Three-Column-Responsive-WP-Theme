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
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Anti-Flash-White' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'Anti-Flash-White' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'Anti-Flash-White' ), 'Anti-Flash-White', '<a href="http://cubepro.us" rel="designer">Lorin Hart</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>
<!-- </div> --><!-- closing container -->
</body>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- JS Socials -->
<script src="<?php bloginfo('template_directory');?>/inc/jssocials/jssocials.min.js"></script>
<script>
    $("#shareIcons").jsSocials({
    	shareIn: "popup",
	    showLabel: false,
	    showCount: false,
	    shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
	});

	$("#share").jsSocials({
	    shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
	});
</script>
</html>
