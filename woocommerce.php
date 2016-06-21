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
// include('left-sidebar.php');
?>
<!-- <div class="container"> -->
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<div id="primary" class="content-area">
			<main id="main" class="site-main woo-shop" role="main" >

				<?php woocommerce_content(); ?>

			</main><!-- #main -->
		</div><!-- #primary -->		
	</div>

<?php
get_sidebar();
// include('left-sidebar-small.php');
get_footer();
