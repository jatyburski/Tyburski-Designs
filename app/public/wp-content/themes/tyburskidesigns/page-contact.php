<?php get_header(); ?>

    <section class="row no-gutters contact">

        <div class="col-12 d-flex flex-column justify-content-center text-center contact--content">
            <div class="contact--image">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>    
            <?php the_field('content'); ?>
        </div>

        <div class="contact--pattern">
            <?php pattern_rectangle(32, 32); ?>
        </div>

    </section>

<?php get_footer(); ?>