<?php
/**
 * The sidebar containing the woo-sidebar widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anti-Flash-White
 */

if ( ! is_active_sidebar( 'woo-sidebar' ) ) {
	return;
}
?>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'woo-sidebar' ); ?>
</aside><!-- #secondary -->
</div>