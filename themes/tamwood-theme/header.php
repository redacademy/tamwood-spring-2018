<?php
/**
 * The header for our theme.
 *
 * @package tamwood
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
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<div class="header-container desktop">
					<div class="desktop-logo-container">
						<a href="<?php echo home_url() ?>">
							<img class="desktop logo-desktop" src="<?php echo get_template_directory_uri() ?>/assets/logos/tamwood-logo.svg" alt="Tamwood logo full">
						</a>
					</div>
					<a class="desktop apply-now" href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>
					<img class="search-icon" src="<?php echo get_template_directory_uri() ?>/assets/icons/ic_search@3x.png" width="85" height="85" alt="Search icon">
				</div>
				<div class="header-container mobile">
					<button class="hamburger menu-toggle mobile" type="button"></button>
					<div class="mobile-logo-container">
						<a href="<?php echo home_url(); ?>">
							<img class="mobile logo-mobile" src="<?php echo get_template_directory_uri() ?>/assets/logos/LOGO@3x.png" width="55" height="55" alt="Tamwood logo">
						</a>
					</div>
					<img class="search-icon" src="<?php echo get_template_directory_uri() ?>/assets/icons/ic_search@3x.png" width="85" height="85" alt="Search icon">
				</div>
				<nav id="site-navigation-mobile" class="main-navigation main-navigation-mobile" role="navigation">
					<a class="mobile apply-now" href="<?php echo get_page_link( get_page_by_title( 'Application Form' )->ID );?>">Apply Now</a>	
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation for mobile-->
				<nav id="site-navigation-desktop" class="main-navigation main-navigation-desktop" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation for desktop-->
				<form role="search" method="get" class="search" action="<?php echo home_url( '/' ); ?>">
					<fieldset>
						<label>
							<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
						</label>
					</fieldset>
				</form>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
				<div class="overlay mobile"></div>
