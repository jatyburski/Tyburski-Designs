<?php get_header(); ?>

    <?php
        $query = new WP_Query ( 
            array (
                'order' => 'ASC',
                'posts_per_page' => -1,
                'post_type' => 'projects'
            ) 
        ); 
    ?>

    <?php if ($query->have_posts()) : ?>
        <section>
            <ul class="row m-0 align-items-end projects">
                <?php while ($query->have_posts() && $query->current_post) : $query->the_post(); ?> 
                    <li class="offset-4 col-lg-8">
                        <?php layout_get_component('project-cta'); ?>
                    </li>
                <?php endwhile; ?>

                <?php while ($query->have_posts() && $query->current_post < 3) : $query->the_post(); ?>
                    <li class="col-lg-4">
                        <?php layout_get_component('project-cta'); ?>
                    </li>
                <?php endwhile; ?>
                
                <?php while ($query->have_posts() && $query->current_post < 4) : $query->the_post(); ?> 
                    <li class="col-lg-8 mr-5">
                        <?php layout_get_component('project-cta'); ?>
                    </li>
                <?php endwhile; ?>

                <?php while ($query->have_posts() && $query->current_post < 8) : $query->the_post(); ?>
                    <li class="col-lg-4">
                        <?php layout_get_component('project-cta'); ?>
                    </li>
                <?php endwhile; ?>  
            </ul>
        </section>
    <?php endif; ?>

<?php get_footer(); ?>