<?php get_header(); ?>

    <?php $query = new WP_Query ( 'posts_per_page=-1&order=ASC&post_type=projects' ); ?>

    <?php if ( $query->have_posts() ) : ?>

        <section>
            <ul class="projects">

                <?php while ( $query->have_posts() ) : $query->the_post(); ?> 
                    <?php $counter +=1; ?>
                    <?php if ($counter == 1) : ?>

                        <li class="d-block projects__card">

                            <a href="<?php the_permalink(); ?>" class="d-block projects__tilt">

                                <figure class="d-flex m-0 position-relative projects__img">
                                    <?php the_post_thumbnail( 'full', [ 'class' => 'm-0' ] ); ?>
                            
                                    <figcaption class="align-items-end d-flex flex-column h-100 position-absolute">
                                        <h2 class="text-right"><?php echo wordwrap(get_the_title(), strlen(get_the_title()) / 1.5, '<br />'); ?></h2>

                                        <i class="fal fa-long-arrow-right"></i>

                                        <p class="position-absolute"><?php echo get_the_excerpt(); ?></p>
                                    </figcaption>                              
                                </figure>

                            </a>

                        </li>

                    <?php elseif ($counter == 2) : ?>
                        
                        <li class="d-block projects__card">

                            <a href="<?php the_permalink(); ?>" class="d-block projects__tilt">

                                <figure class="d-flex m-0 position-relative projects__img">
                                    <?php the_post_thumbnail( 'full', [ 'class' => 'm-0' ] ); ?>
                            
                                    <figcaption class="align-items-start d-flex flex-column h-100 position-absolute">
                                        <h2><?php echo wordwrap(get_the_title(), strlen(get_the_title()) / 1.5, '<br />'); ?></h2>

                                        <i class="fal fa-long-arrow-right"></i>

                                        <p class="position-absolute"><?php echo get_the_excerpt(); ?></p>
                                    </figcaption>
                                </figure>

                            </a>

                        </li>

                    <?php $counter = 0; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
                
            </ul>
        </section>
        
    <?php wp_reset_query(); endif; ?>

<?php get_footer(); ?>