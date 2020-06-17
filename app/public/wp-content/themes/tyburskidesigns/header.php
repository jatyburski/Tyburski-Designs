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

        <div class="site-container">

        <header class="container-fluid navbar d-block">
            <section class="row no-gutters">

                <nav class="col-lg-6 d-flex align-items-start">
                    <a class="navbar-brand p-0 m-0" href="/"><?php echo get_bloginfo('name'); ?><span><?php echo get_bloginfo('description'); ?></span></a>
                    <nav class="d-flex align-items-start">
                        <?php breadcrumbs(); ?>
                    </nav>
                </nav>

                <?php if (is_page('contact') || is_page('about')) : ?>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <a class="btn--icon" href="<?php the_field('resume', 'option'); ?>" target="_blank"><i class="fal fa-long-arrow-right"></i>Download Résumé</a>
                    </div>
                <?php endif; ?>

            </section>
        </header>

        <main class="container-fluid p-0">