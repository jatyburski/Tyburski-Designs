<?php get_header(); ?>

    <section class="row no-gutters hire-me">

        <div class="col-12 d-flex flex-column justify-content-center text-center hire-me--content">
            <div class="hire-me--image">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>    
            <?php the_field('content'); ?>
        </div>

        <div class="hire-me--pattern">
            <?php pattern_rectangle(32, 32); ?>
        </div>

    </section>

<?php get_footer(); ?>