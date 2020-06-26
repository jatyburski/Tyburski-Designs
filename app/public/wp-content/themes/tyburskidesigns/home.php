<?php get_header(); ?>

    <?php
        $loop = new WP_Query(
            array(
                'post_type' => 'projects',
                'posts_per_page' => -1,
                'post_status' => 'publish'
            )
        );
    ?>

    <section class="row no-gutters">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
            <div class="col-sm-4">
                <?php the_title('<h2>', '</h2>'); ?>
            </div>
            
        <?php endwhile; wp_reset_postdata(); ?>
    </section>

<?php get_footer(); ?>