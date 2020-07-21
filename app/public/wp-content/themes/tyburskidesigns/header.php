<!DOCTYPE html>

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
        <link href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css" rel="stylesheet">
        <?php wp_head(); ?>
        <title></title>
    </head>

    <body <?php body_class(); ?>>
 
        <?php layout_get_component( 'nav-main' , 'header' ); ?>

        <?php layout_get_component( 'nav-mobile' , 'header' ); ?>

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