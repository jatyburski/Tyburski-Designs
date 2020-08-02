<?php get_header(); ?>

    <article>
        <section class="row no-gutters">
            <div data-aos="fade-down" data-aos-delay="600" class="offset-lg-1 col-lg-10 position-relative text-center project__title">

                <?php $terms = get_the_category(); if ( $terms && ! is_wp_error( $terms ) ) : ?>
                    <ul class="p-0 position-relative project__categories">

                        <?php foreach ( $terms as $term ) : ?>
                            <li class="d-inline-block font-weight-bold">
                                <?php echo $term->name; ?>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                <?php endif;?>

                <?php the_title( '<h1>', '</h1>' ); ?>
            </div>

            <div data-aos="zoom-out" class="col-12 vh-100 project__hero" data-type="background" data-speed="10" style="background-image: url( <?php the_post_thumbnail_url(); ?> );"></div>
        </section>

        <?php 
            $id = 'overview'; 

            global $sections;
            $sections[] = $id;
        ?>

        <section id="<?php echo $id; ?>" class="row no-gutters project__content project__content--lg">
            <div data-aos="fade-up" class="offset-1 offset-lg-2 col-10 col-lg-8">
                <?php the_field( 'intro' ); ?>

                <ul class="mb-0 p-0 d-flex flex-column flex-md-row align-items-start project__appendix">

                    <?php $appendices = get_field( 'appendices' ); ?>
                    
                    <?php foreach ( $appendices as $appendix ) : ?>
                        <li class="d-inline-block">
                            <?php echo $appendix[ 'details' ]; ?>
                        </li>
                    <?php endforeach; ?>

                </ul>
                
            </div>
        </section>

        <section class="row no-gutters project__content project__content--tint">
            <?php if ( have_rows( 'section' ) ) {
                while ( have_rows( 'section' ) ) {
                    the_row();
                    layout_get_component( get_row_layout(), 'projects', 'section-' . get_row_index() );
                }
            } ?>  
        </section>

        <?php 
            $next_post = get_adjacent_post( false, '', false );
            
            if (empty( $next_post ) ) {

                $last_post = new WP_Query( 'posts_per_page=1&order=ASC&post_type=projects' );
                $last_post->the_post();
                $arr = [
                    'kicker' => 'Next project',
                    'url' => get_permalink(),
                    'title' => get_the_title()
                ];

                wp_reset_query();
                
            } else {

                $arr = [
                    'kicker' => 'Next project',
                    'url' => get_permalink( $next_post->ID ),
                    'title' => $next_post->post_title
                ];

            }

            set_query_var( 'button', $arr );
            layout_get_component( 'button-lg' ); 
        ?>
    </article>

<?php get_footer(); ?>