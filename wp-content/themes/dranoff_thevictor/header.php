<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
            <div class="site-header-inner col-xs-6 col-sm-2">
				<div class="site-branding">
                    <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/thevictor-logo.jpg"></a></div>
				</div>
			</div>
            <div class="top-right col-sm-10 hidden-xs">
                <ul class="fixed-secondary-menu">
                    <li><?php echo do_shortcode('[prisna-google-website-translator]'); ?></li>
                    <a href="https://thevictorloftsresidents.buildinglink.com/V2/Global/Login/Login.aspx?SSLFrom=http://www.thevictorloftsresidents.com&SSLReturnUrl=&ts=635991108304603647" target="_blank"><li class="active-state">Residents</li></a>
                    <a href="https://www.on-site.com/apply/property/176750" target="_blank"><li class="active-state">Apply Now</li></a>
                    <li class="ribbon"><img src="<?php echo get_template_directory_uri(); ?>/images/Dranoff-Ribbon-with-text.png" alt="Rated #1 Management Company In Philly By VeryApt.com"></li>
                </ul><!-- .fixed-secondary-menu -->
            </div>
            <nav class="site-navigation col-sm-12 col-md-12 col-lg-10 hidden-xs">
                <?php // substitute the class "container-fluid" below if you want a wider content area ?>
                            <div class="site-navigation-inner">
                                <div class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <!-- The WordPress Menu goes here -->
                                        <?php wp_nav_menu(
                                            array(
                                                'theme_location' 	=> 'primary',
                                                'menu_class' 		=> 'nav navbar-nav',
                                                'menu_id'			=> 'main-menu'
                                            )
                                        ); ?>
                                    </div>
                                </div><!-- .navbar -->
                            </div>             
            </nav><!-- .site-navigation -->
            
            <div id="toggle-bar" class=" col-xs-5 col-xs-offset-1 hidden-lg hidden-md hidden-sm">
                <a class="navicon mtoggle" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon.svg"></a>
            </div>
            <nav id="mobile" class=" col-xs-12 hidden-lg hidden-md hidden-sm">         
                <ul id="mmenu">
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/floorplans">Floorplans</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/gallery">Gallery</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/neighborhood">Neighborhood</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/amenities">Amenities</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/retail">Retail</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/dranoff-distinction">Dranoff Distinction</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/press-awards">Press & Awards</a></li>
                    <li><a href="https://thevictorloftsresidents.buildinglink.com/V2/Global/Login/Login.aspx?SSLFrom=http://www.thevictorloftsresidents.com&SSLReturnUrl=&ts=635991108304603647" target="_blank">Residents</a></li>
                    <li><a href="https://www.on-site.com/apply/property/176750">Apply Now</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/contact-us/">Contact Us</a></li>
                    <!-- <li><a href="#" target="_blank">Apply Now</a></li> -->
                </ul>
            </nav>
           
            <script type="text/javascript">
            jQuery(document).ready(function($) {
                $("#mmenu").hide();
                $(".mtoggle").click(function() {
                    $("#mmenu").slideToggle(400);
                });
            });
                
            </script>
            
		</div><!-- .row -->
	</div><!-- .container -->
    
    
    <div class="container-fluid">
		<div class="row blue-strip">
            <div class="col-md-12 hidden-xs">
            <div class="address-info">
                <div class="address-item">One Market Street, Camden, NJ 08102</div>
                <a href="tel:+18564711109"><div class="phone"><img class="icon-phone" height="15" width="28" src="<?php echo get_template_directory_uri(); ?>/images/cellphone-icon.svg">856-471-1109</div></a>
                        
                <div class="share"><a href="https://twitter.com/TheVictorLofts" target="_blank"><img class="twitter-icon" height="36" width="42" src="<?php echo get_template_directory_uri(); ?>/images/social-icon-menu-twitter.svg"></a><a href="https://www.facebook.com/Victorlofts" target="_blank"><img height="36" width="30" src="<?php echo get_template_directory_uri(); ?>/images/social-icon-menu-facebook.svg"></a></div>
            </div>
            </div>
        </div><!-- .row -->
	</div><!-- .container -->

</header><!-- #masthead -->



<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
			<div id="content" class="main-content-inner">

