<?php get_header(); ?>

    <section data-aos="fade-in" class="row no-gutters position-relative front-page">

        <div class="col-xl-6 d-flex flex-column align-items-start justify-content-center justify-content-xl-end order-xl-2 front-page__content">
            <h1 data-aos="fade-up"><?php the_field('title'); ?></h1>
            <?php the_field('content'); ?>

            <?php $button = get_field('button'); ?>
            <a data-aos="fade-up" data-aos-delay="500" class="d-inline-block position-relative btn" href="<?php echo $button['url']; ?>">
                <?php echo $button['title']; ?>
            </a>
        </div>

        <div class="col-xl-6 h-100 position-relative order-xl-1 overflow-hidden front-page__image">
            <?php the_post_thumbnail( 'full', array( 'data-aos' => 'zoom-out', 'data-aos-delay' => '800' ) ); ?>
        </div>

        <div class="front-page__pattern">
            <?php pattern_rectangle(32, 32); ?>
        </div>

    </section>

<?php get_footer(); ?>