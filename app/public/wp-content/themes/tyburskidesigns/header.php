<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <?php wp_head(); ?>
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <script src="https://kit.fontawesome.com/ce83ebeb69.js" crossorigin="anonymous"></script>
    </head>

    <body <?php body_class(); ?>>

        <header class="header">
            <a class="header--logo" href="/"><?php echo get_bloginfo('name'); ?><span><?php echo get_bloginfo('description'); ?></span></a>
            <!-- <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu([
                        'menu'            => 'primary',
                        'theme_location'  => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'bs4navbar',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav',
                        'depth'           => 1,
                        'fallback_cb'     => 'bs4navwalker::fallback',
                        'walker'          => new bs4navwalker()
                    ]);
                ?>
            </nav> -->
        </header>

        <main class="container-fluid">