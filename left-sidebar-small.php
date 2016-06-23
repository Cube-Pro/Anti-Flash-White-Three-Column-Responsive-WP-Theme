<?php if ( is_active_sidebar( 'sidebar_2' ) ) { ?>
	<div class="col-xs-12 col-sm-12 visible-xs visible-sm hidden-md hidden-lg">
		<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar_2' ); ?>
		</aside>	
	</div>		
<?php } ?>