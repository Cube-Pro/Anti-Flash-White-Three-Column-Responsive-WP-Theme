<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Anti-Flash-White
 */

get_header();
// get_template_part('left-sidebar');
get_template_part('left-sidebar');
?>
<!-- <div class="container"> -->
	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				
				if (has_post_thumbnail()) 
				{
					the_post_thumbnail();
				}

				get_template_part( 'template-parts/content', get_post_format() );

				custom_post_navigation();

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
get_template_part('left-sidebar');
get_footer();
