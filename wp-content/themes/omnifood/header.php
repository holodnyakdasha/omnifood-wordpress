<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Omni food</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>
<header>
            <nav>
            <div class="row">
            <div>
                    <a href="<?php bloginfo('url')?>">
                    <img src="wp-content/themes/omnifood/assets/css/img/logo-white.png" alt="Omni food logo" class="logo">
                    <img src="wp-content/themes/omnifood/assets/css/img/logo.png" alt="Omni food logo" class="logo-black">
                    </a>
                </div>
                <nav id="nav-wrap">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'top',
                        'menu'            => '', 
                        'container'       => null, 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => 'main-nav js--main-nav', 
                        'menu_id'         => 'nav',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ] ); ?>
                </nav>
                <a class="mobile-nav-icon">
                    <i class="fa fa-align-justify js--nav-icon"></i>
                </a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>Goodbye junk food.<br> Hello super healthy meals.</h1>
            <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a>
            <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
        </div>
    </header>
