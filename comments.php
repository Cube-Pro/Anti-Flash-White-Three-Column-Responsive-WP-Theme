<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anti-Flash-White
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<h3 id="comment-section" class="comments-title">
	<span class="fa fa-comments-o"></span>
	<?php
		printf( // WPCS: XSS OK.
			esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'Anti-Flash-White' ) ),
			number_format_i18n( get_comments_number() ),
			'<span>' . get_the_title() . '</span>'
		);
	?>
</h3>
<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'Anti-Flash-White' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous">
					<?php previous_comments_link( esc_html__( 'Older Comments', 'Anti-Flash-White' ) ); ?>
				</div>
				<div class="nav-next">
					<?php next_comments_link( esc_html__( 'Newer Comments', 'Anti-Flash-White' ) ); ?>
				</div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="comment-list">
			<?php
				// wp_list_comments( array(
				// 	'style'      => 'ol',
				// 	'short_ping' => true,
				// ) );

				wp_list_comments( 'type=comment&callback=mytheme_comment' ); 

			?>
		</ul><!-- .comment-list -->
		<hr/>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'Anti-Flash-White' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous">
					<?php previous_comments_link( esc_html__( 'Older Comments', 'Anti-Flash-White' ) ); ?>
				</div>
				<div class="nav-next">
					<?php next_comments_link( esc_html__( 'Newer Comments', 'Anti-Flash-White' ) ); ?>
				</div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'Anti-Flash-White' ); ?></p>
	<?php
	endif;

	comment_form();
	// comment_form( array(
	// 		'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
	// 		'title_reply_after'  => '</h2>',
	// 		'class_submit' => 'btn btn-success'
	// 	) );
	?>


</div><!-- #comments -->
