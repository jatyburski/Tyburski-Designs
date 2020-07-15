<?php get_header(); ?>

    <?php $query = new WP_Query ( 'posts_per_page=-1&order=ASC&post_type=projects' ); ?>

    <?php if ( $query->have_posts() ) : ?>
        <section>
            <ul class="projects">

                <?php while ( $query->have_posts() ) : $query->the_post(); ?> 
                    <li class="h-100 projects__card">

                        <a href="<?php the_permalink(); ?>" class="d-block h-100 position-relative projects__tilt">
                            <figure class="d-block m-0 position-relative projects__img">
                                <?php the_post_thumbnail( 'full', [ 'class' => 'd-block m-0' ] ); ?>

                                <div class="position-absolute overflow-hidden projects__deco projects__deco--shine"></div>

                                <figcaption class="position-absolute">
                                    <?php the_title( '<h3>', '</h3>' ); ?>
                                </figcaption>
                                
                                <svg class="position-absolute overflow-hidden project__deco projects__deco--lines" viewBox="0 0 300 415">
                                    <path d="M20.5,20.5h260v375h-260V20.5z" />
                                </svg>
                            </figure>
                        </a>

                    </li>
                <?php endwhile; ?>
                
            </ul>
        </section>
    <?php wp_reset_query(); endif; ?>

<?php get_footer(); ?>