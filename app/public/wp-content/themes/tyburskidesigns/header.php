<!DOCTYPE html>

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
        <link href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css" rel="stylesheet">
        <?php wp_head(); ?>
        <title></title>
    </head>

    <body <?php body_class(); ?>>

        <!-- DESKTOP & TABLET NAV -->    
        <button data-aos="fade-right" data-aos-delay="100" id="#nav-fullscreen" class="border-0 position-fixed nav-fullscreen--trigger js-nav-fullscreen--trigger">
            <span class="position-absolute nav-fullscreen--trigger__icon" aria-hidden="true"></span>
            <span class="sr-only">Menu</span>
        </button>
        
        <?php 
            // $request = wp_remote_get( get_permalink() );

            // $dom = new DOMDocument;
            // @$dom->loadHTML($request);

            // $sections = $dom->getElementsByTagName( 'section' );
            // $extracted_links = array();
        ?>


        <ul class="position-fixed scrollspy">

            <?php foreach ( $sections as $section ) : ?>

                <?php $link = $section->getAttribute('id'); ?>

                <li>
                    <a class="d-block text-center tabs__nav-items" href="<?php echo $link; ?>">
                        <?php echo $link; ?>
                    </a>
                </li>
                
            <?php endforeach; ?>

        </ul>


        <div id="nav-fullscreen" class="position-fixed text-center text-xl-left nav-fullscreen">
            <div class="nav-fullscreen__content">
                <div class="container-fluid p-0 h-100 d-flex flex-column">

                    <div class="row no-gutters position-absolute navbar">
                        <nav class="col-xl-6 d-flex align-items-start">
                            <?php layout_get_component( 'logo' , 'nav' ); ?>
                        </nav>
                    </div>

                    <div class="row no-gutters flex-grow-1 align-items-end">

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
                                    'menu_class'      => 'navbar-nav d-flex align-items-center align-items-xl-start',
                                    'depth'           => 1,
                                    'fallback_cb'     => 'bs4navwalker::fallback',
                                    'walker'          => new bs4navwalker()
                                ]);
                            ?>
                        </div>

                        <div class="order-lg-1 offset-1 offset-xl-0 col-10 col-xl-1">
                            <?php if ( have_rows( 'social_media', 'option' ) ) : ?>
                                <ul class="text-center p-0 nav-fullscreen__social">
                                    
                                    <?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
                                        <li>
                                            <a href="<?php the_sub_field( 'link' ); ?>" aria-label="<?php the_sub_field( 'platform' ); ?>" rel="nofollow noopener" target="_blank">
                                                <i class="fab fa-<?php the_sub_field( 'platform' ); ?>"></i>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>

                                </ul>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end DESKTOP & TABLET NAV -->

        <!-- MOBILE NAV -->
        <nav class="d-sm-none tabs__container">
            
            <ul class="d-flex align-items-center justify-content-between m-0 w-100 tabs__nav">
                <?php 
                    $nav = wp_get_nav_menu_items( 'Mobile' );
                    $nav_items = array_slice( $nav, 0, 2 );

                    $arr = [
                        'menu-items'    => $nav_items
                    ];

                    set_query_var( 'tab', $arr );
                    layout_get_component( 'tab-menu' , 'nav' );
                ?>
            
                <li class="tabs__circle">

                    <div class="tabs__circle--gooey">
                        <input type="checkbox" class="tabs__circle--open" name="tabs__circle--open" id="tabs__circle--open"/>
                        <label class="m-0 tabs__circle--inner" for="tabs__circle--open">
                            <span class="tabs__circle__hamburger"></span>
                        </label>
                        
                        <?php if ( have_rows( 'social_media', 'option' ) ) : ?>

                            <?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
                                <a class="tabs__circle__item" href="<?php the_sub_field( 'link' ); ?>" aria-label="<?php the_sub_field( 'platform' ); ?>" rel="nofollow noopener" target="_blank">
                                    <i class="fab fa-<?php the_sub_field( 'platform' ); ?>"></i>
                                </a>
                            <?php endwhile; ?>

                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                <filter id="shadowed-goo">
                                    <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                                    <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                                    <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
                                    <feColorMatrix in="shadow" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
                                    <feOffset in="shadow" dx="1" dy="1" result="shadow" />
                                    <feComposite in2="shadow" in="goo" result="goo" />
                                    <feComposite in2="goo" in="SourceGraphic" result="mix" />
                                </filter>
                                <filter id="goo">
                                    <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                                    <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                                    <feComposite in2="goo" in="SourceGraphic" result="mix" />
                                </filter>
                                </defs>
                            </svg>

                        <?php endif; ?>
                    </div>

                </li>

                <?php 
                    $nav_items = array_slice($nav, -2);

                    $arr = [
                        'menu-items'    => $nav_items
                    ];
                    
                    set_query_var('tab', $arr);
                    layout_get_component('tab-menu' , 'nav');
                ?>

            </ul>

        </nav>
        <!-- end MOBILE NAV -->

        <!-- SITE CONTAINER -->
        <div class="position-relative overflow-hidden site-container">

            <header class="container-fluid navbar d-block">
                <div class="row no-gutters">

                    <nav class="col-lg-9 d-flex align-items-start">
                        <?php layout_get_component('logo', 'nav'); ?>

                        <nav class="d-flex align-items-start">
                            <?php breadcrumbs(); ?>
                        </nav>
                    </nav>

                    <?php if (is_page( 'contact' ) || is_page( 'resume' )) : ?>

                        <div data-aos="fade-left" class="col-lg-3 d-flex justify-content-end">
                            <a class="btn__icon" href="<?php the_field( 'resume', 'option' ); ?>" target="_blank">
                                <i data-aos="fade-right" data-aos-delay="600" class="fal fa-long-arrow-right"></i>Download Résumé
                            </a>
                        </div>

                    <?php endif; ?>

                    </div>
            </header>

            <main class="container-fluid p-0">