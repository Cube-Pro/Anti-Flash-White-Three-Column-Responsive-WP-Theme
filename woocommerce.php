<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anti-Flash-White
 */

get_header(); 
// get_template_part('left-sidebar');
// get_template_part('boot-size');
?>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">
	<div id="primary" class="content-area">
			<main id="main" class="site-main woo-shop" role="main">

				<?php woocommerce_content(); ?>

			</main><!-- #main -->
		</div><!-- #primary -->		
	</div>

<?php
// get_sidebar();
get_template_part('woo-sidebar');
get_footer();



