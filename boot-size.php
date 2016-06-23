<?php
if (is_active_sidebar('sidebar_2') && is_active_sidebar('sidebar-1') ){
	// both sidebars active
	//  col-lg-6	
	echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">';
}elseif ( ! is_active_sidebar('sidebar_2') && is_active_sidebar('sidebar-1') ) {
	// right sidebar is active left is inactive
	// col-lg-8 col-lg-offset-1
	echo '<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">';
}elseif ( is_active_sidebar('sidebar_2') && ! is_active_sidebar('sidebar-1') ) {
	//left sidebar is active and right sidebar is inactive
	// col-lg-8 
	echo '<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8>';
}elseif ( ! is_active_sidebar('sidebar_2') && ! is_active_sidebar('sidebar-1') ) {
	// neither sidebar is active center up the content
	// col-lg-8 col-lg-offset-3
	echo '<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">';
}
?>