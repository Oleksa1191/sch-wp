<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stonecanyon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!--<div id="mobile-header">
        <a id="responsive-menu-button" href="#sidr-main">Menu</a>
    </div>-->

    <!-- Header area start -->
    <header class="header-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="header-wrap-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="logo">
                                    <a href="<?php echo site_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-8">
                                <div class="main-menu">
                                    <!-- The WordPress Menu goes here -->
                                    <?php wp_nav_menu(
                                        array(
                                            'theme_location'  => 'menu-1',
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <!-- Header area start -->
    <div class="banner-wrap">
        <div class="banner-wrap-inner">

            <div id="homeslider" class="carousel fadeIn" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slider.jpg');">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-lg-7">
                                    <div class="hs-detail">
                                        <div class="hs-detail-inner">
                                            <h1>Luxury Tiny Home Builder</h1>
                                            <p class="mb-0">Designer Tiny Homes homes crafted to guarantee quality and comfort</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="banner-promo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="banner-promo-inner">
                            <div class="banner-promo-box">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <div class="banner-promo-header">
                                            <h2>Our Homes</h2>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-lg-8">
                                        <div class="banner-promo-detail">
                                            <p class="mb-0">We have incorporated comfort, efficiency and luxury into all of our home designs. Our tiny homes are hand-crafted to fit your needs and to ensure undeniable quality</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header area end -->

    <!-- The WordPress Menu goes here -->
    <?php/* wp_nav_menu(
    array(
        'theme_location'  => 'primary',
    )
); */?>
