<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <?php wp_head(); ?>
        <title><?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('name'); ?>, Web Designer in the Greater Baltimore, MD Area</title>
        <script src="https://kit.fontawesome.com/ce83ebeb69.js" crossorigin="anonymous"></script>
    </head>

    <body <?php body_class(); ?>>

        <div data-aos="fade-right" data-aos-delay="100" id="#nav-fullscreen" class="nav-fullscreen--trigger js-nav-fullscreen--trigger">
            <span class="nav-fullscreen--trigger-icon" aria-hidden="true"></span>
        </div>

        <div id="nav-fullscreen" class="nav-fullscreen">
            <div class="nav-fullscreen--content">
                <div class="container-fluid p-0 h-100 d-flex flex-column">

                    <section class="row no-gutters navbar">
                        <nav class="col-lg-6 d-flex align-items-start">
                            <a class="navbar-brand p-0 m-0" href="/"><?php echo get_bloginfo('name'); ?><span><?php echo get_bloginfo('description'); ?></span></a>
                        </nav>
                    </section>

                    <section class="row no-gutters flex-grow-1 align-items-end">

                        <div class="col-lg-1">
                            <?php if (have_rows('social_media', 'option')) : ?>
                                <ul class="text-center p-0 nav-fullscreen--social">
                                    <?php while (have_rows('social_media', 'option')) : the_row(); ?>
                                        <li>
                                            <a href="<?php the_sub_field('link'); ?>" target="_blank">
                                                <i class="fab fa-<?php the_sub_field('platform'); ?>"></i>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-1">
                            <?php
                                wp_nav_menu([
                                    'menu'            => 'Primary',
                                    'theme_location'  => 'Primary',
                                    'container'       => 'div',
                                    'container_id'    => 'bs4navbar',
                                    'container_class' => 'nav-fullscreen--nav',
                                    'menu_id'         => false,
                                    'menu_class'      => 'navbar-nav',
                                    'depth'           => 1,
                                    'fallback_cb'     => 'bs4navwalker::fallback',
                                    'walker'          => new bs4navwalker()
                                ]);
                            ?>
                        </div>

                        <div class="col-lg-10 h-100">
                        <?php
                                wp_nav_menu([
                                    'menu'            => 'Projects',
                                    'theme_location'  => 'Projects',
                                    'container'       => 'div',
                                    'container_id'    => 'bs4navbar',
                                    'container_class' => 'nav-fullscreen--projects',
                                    'menu_id'         => false,
                                    'menu_class'      => 'navbar-nav',
                                    'fallback_cb'     => 'bs4navwalker::fallback',
                                    'walker'          => new bs4navwalker()
                                ]);
                            ?>
                        </div>

                    </section>
                </div>
            </div>
        </div>

        <div class="site-container">

        <header class="container-fluid navbar d-block">
            <section class="row no-gutters">

                <nav class="col-lg-6 d-flex align-items-start">
                    <a class="navbar-brand p-0 m-0" href="/"><?php echo get_bloginfo('name'); ?><span><?php echo get_bloginfo('description'); ?></span></a>
                    <nav class="d-flex align-items-start">
                        <?php breadcrumbs(); ?>
                    </nav>
                </nav>

                <?php if (is_page('contact') || is_page('resume')) : ?>
                    <div data-aos="fade-left" class="col-lg-6 d-flex justify-content-end">
                        <a class="btn--icon" href="<?php the_field('resume', 'option'); ?>" target="_blank"><i class="fal fa-long-arrow-right"></i>Download Résumé</a>
                    </div>
                <?php endif; ?>

            </section>
        </header>

        <main class="container-fluid p-0">