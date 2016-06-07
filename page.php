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

get_header(); ?>
<!-- <div class="container"> -->
	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
				
	</div>
	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->		
	</div>

<?php
get_sidebar();
get_footer();
