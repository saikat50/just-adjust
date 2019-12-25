<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yourresumestory.com
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Just Adjust</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/fonts/css/all.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/responsive.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/blog.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


        <header id="home">

            <!-- Start Navigation -->
            <nav class="navbar navbar-default navbar-sticky bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?php site_url(); ?>/home/">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/site/logo.png" class="logo" alt="Logo">
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                            <li>
                                <a href="<?php site_url(); ?>/home/'" class="active">Home</a>
                            </li>
                            <li><a href="<?php site_url(); ?>/about-us/">About</a></li>
                            <li><a href="<?php site_url(); ?>/services">Services</a></li>
                            <li><a href="<?php site_url(); ?>/resources">Resources</a></li>
                            <li>
                                <a href="<?php site_url(); ?>/contact-us/">contact</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

            </nav>
            <!-- End Navigation -->

        </header>
        <!-- End Header -->


