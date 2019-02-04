<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>
        <title>WP Hierarchy</title>
    </head>

    <body <?php body_class(); ?>>

        <div id="page">
            <a href="#content" class="skip-link screen-reader-text">
                <?php esc_html_e('skip to content', 'wpheirarchy'); ?>
            </a>

            <header id="masthead" class="site-header" role="banner">
                <div class="site-branding">
                    <p class="site-title">
                        <a href="<?php echo esc_url( home_url('/')); ?>" rel="home"> hello <?php bloginfo('name'); ?>
                        </a>
                    </p>
                    <p class="site-description">
                        <?php bloginfo('description'); ?>
                    </p>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu( [
                    'theme_location' => 'main-menu'
                ]); ?>
            </nav>
        </header>

        <div id="content" class="site-content">

