<?php get_header(); ?>

    <?php $query = new WP_Query ('posts_per_page=-1&order=ASC&post_type=projects'); ?>

    <?php if ($query->have_posts()) : ?>
        <section>
            <ul class="projects">

                <?php while ($query->have_posts()) : $query->the_post(); ?> 
                    <li class="h-100 projects__card">
                        <?php layout_get_component('card'); ?>
                    </li>
                <?php endwhile; ?>
                
            </ul>
        </section>
    <?php endif; ?>

<?php get_footer(); ?>