<!DOCTYPE html>

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <?php wp_head(); ?>
        <title><?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('name'); ?>, Web Designer in the Greater Baltimore, MD Area</title>
    </head>

    <body <?php body_class(); ?>>

        <div data-aos="fade-right" data-aos-delay="100" id="#nav-fullscreen" class="position-fixed nav-fullscreen--trigger js-nav-fullscreen--trigger">
            <span class="position-absolute nav-fullscreen--trigger__icon" aria-hidden="true"></span>
        </div>

        <div id="nav-fullscreen" class="position-fixed text-center text-xl-left nav-fullscreen">
            <div class="nav-fullscreen__content">
                <div class="container-fluid p-0 h-100 d-flex flex-column">

                    <section class="row no-gutters position-absolute navbar">
                        <nav class="col-xl-6 d-flex align-items-start">
                            <?php layout_get_component('logo'); ?>
                        </nav>
                    </section>

                    <section class="row no-gutters flex-grow-1 align-items-end">

                    <div class="order-xl-3 offset-1 offset-xl-0 col-10 h-lg-100">
                        <?php
                                wp_nav_menu([
                                    'menu'            => 'Projects',
                                    'theme_location'  => 'Projects',
                                    'container_class' => 'nav-fullscreen__projects',
                                    'menu_class'      => 'navbar-nav',
                                    'fallback_cb'     => 'bs4navwalker::fallback',
                                    'walker'          => new bs4navwalker()
                                ]);
                            ?>
                        </div>

                        <div class="order-xl-2 offset-1 offset-xl-0 col-10 col-xl-1">
                            <?php
                                wp_nav_menu([
                                    'menu'            => 'Primary',
                                    'theme_location'  => 'Primary',
                                    'container_class' => 'nav-fullscreen__nav',
                                    'menu_class'      => 'navbar-nav',
                                    'depth'           => 1,
                                    'fallback_cb'     => 'bs4navwalker::fallback',
                                    'walker'          => new bs4navwalker()
                                ]);
                            ?>
                        </div>

                        <div class="order-lg-1 offset-1 offset-xl-0 col-10 col-xl-1">
                            <?php if (have_rows('social_media', 'option')) : ?>
                                <ul class="text-center p-0 nav-fullscreen__social">

                                    <?php while (have_rows('social_media', 'option')) : the_row(); ?>
                                        <li>
                                            <a href="<?php the_sub_field('link'); ?>" rel="nofollow noopener" target="_blank">
                                                <i class="fab fa-<?php the_sub_field('platform'); ?>"></i>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                    
                                </ul>
                            <?php endif; ?>
                        </div>

                    </section>
                </div>
            </div>
        </div>

        <div class="position-relative overflow-hidden site-container">

        <header class="container-fluid navbar d-block">
            <section class="row no-gutters">

                <nav class="col-lg-9 d-flex align-items-start">
                    <?php layout_get_component('logo'); ?>

                    <nav class="d-flex align-items-start">
                        <?php breadcrumbs(); ?>
                    </nav>
                </nav>

                <?php if (is_page('contact') || is_page('resume')) : ?>
                    <div data-aos="fade-left" class="col-lg-3 d-flex justify-content-end">
                        <a class="btn__icon" href="<?php the_field('resume', 'option'); ?>" target="_blank"><i data-aos="fade-right" data-aos-delay="600" class="fal fa-long-arrow-right"></i>Download Résumé</a>
                    </div>
                <?php endif; ?>

            </section>
        </header>

        <main class="container-fluid p-0">