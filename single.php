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
get_template_part('boot-size');
?>
	<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				
				if (has_post_thumbnail()) 
				{ ?>
					<div class="image-bg text-center">
				<?php 
					the_post_thumbnail();
					?>
					</div>
					<?php
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
get_template_part('left-sidebar-small');
get_footer();
