<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<?php if (is_page('home') || is_page('about')){ ?>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div class="nav-container">
							<div class="nav-menu">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
												<i class="fa fa-search"></i>
								<?php 	get_search_form(); ?>
							</div>	
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="header-logo"><h1>Inhabitent</h1></a>
						</div>		
					<?php }else{ ?>
					
					<nav id="site-navigation" class="main-navigation-dark" role="navigation">	
						<div class="nav-container">		
							<div class="nav-menu">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu-dark' ) ); ?>
												<i id="fa" class="fa fa-search"></i>
								<?php 	get_search_form(); ?>
							</div>	
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="header-logo-tent"><h1>Inhabitent</h1></a>
						</div>	
					<?php } ?>
				</nav><!-- #site-navigation -->

				<!--code for seach goes here-->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
