<!DOCTYPE html>

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preload" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css"></noscript>
        <?php wp_head(); ?>
        <title></title>
        <link href="https://use.typekit.net/kfv6civ.css" rel="stylesheet">
    </head>

    <body <?php body_class(); ?> data-spy="scroll" data-target="#scrollspy" data-offset="100">
 
        <?php layout_get_component( 'nav-main' , 'header' ); ?>
        <?php layout_get_component( 'nav-mobile' , 'header' ); ?>

        <?php if ( is_singular( 'projects' ) ) : ?>
            <div class="position-fixed progress__container">
                <div class="progress__bar" id="indicator"></div>
            </div> 
        <?php endif; ?>

        <div class="position-relative overflow-hidden site-container">

            <header class="container-fluid navbar d-block">
                <div class="row no-gutters">

                    <nav class="col-lg-9 d-flex align-items-start">
                        <?php layout_get_component( 'logo', 'nav' ); ?>

                        <div class="d-flex align-items-start">
                            <?php breadcrumbs(); ?>
                        </div>
                    </nav>

                    <?php if ( is_page( 'contact' ) || is_page( 'resume' ) ) : ?>

                        <div data-aos="fade-left" class="col-lg-3 d-flex justify-content-end">
                            <a class="btn__icon" href="<?php the_field( 'resume', 'option' ); ?>" target="_blank">
                                <i data-aos="fade-right" data-aos-delay="600" class="fal fa-long-arrow-right"></i>
                                Download Résumé
                            </a>
                        </div>

                    <?php endif; ?>

                </div>
            </header>

            <main class="container-fluid p-0">