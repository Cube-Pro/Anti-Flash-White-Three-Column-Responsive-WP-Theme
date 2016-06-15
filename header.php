<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anti-Flash-White
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<!-- Bootstrap core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="<?php bloginfo('template_directory');?>/inc/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="<?php bloginfo('template_directory');?>/theme.css" rel="stylesheet">
<!-- JS Social -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/inc/jssocials/jssocials.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/inc/jssocials/jssocials-theme-minima.css" />



</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'Anti-Flash-White' ); ?></a>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>

				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<div class="navbar-right">
					<?php wp_nav_menu( array( 
						'theme_location'  => 'primary',
					    // 'menu'            => ,
					    'container'       => 'ul',
					    // 'container_class' => 'menu-{menu slug}-container',
					    // 'container_id'    => ,
					    'menu_class'      => 'nav navbar-nav',
					    'menu_id'         => 'menu-id',
					    // 'echo'            => true,
					    // 'fallback_cb'     => 'wp_page_menu',
					    // 'before'          => ,
					    // 'after'           => ,
					    // 'link_before'     => ,
					    // 'link_after'      => ,
					    'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>'
					    // 'depth'           => 0,
					    // 'walker'          =>
					 	 ) ); 
					 ?>
				<!-- <div class="navbar-right"> -->
					<?php 
					  // get_search_form(); 

					?>
					<ul class="nav navbar-nav">
						<li style="margin: 1rem;">
							<form method="get" id="search_form" class="inline-form" role="search" action="<?php bloginfo('home'); ?>"/>
	       					<input type="text"  name="s" value="" >
	             			<button type="submit" class="btn btn-primary submit">Submit</button>
						    </form>
					    </li>
				    </ul>
				</div>


			</div><!-- /.navbar-collapse -->
		</div>
	</nav>


	<div id="content" class="site-content container">
