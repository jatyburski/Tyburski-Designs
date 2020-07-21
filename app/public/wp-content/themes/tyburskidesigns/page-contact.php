<?php get_header(); ?>

    <section data-aos="fade-in" class="row no-gutters contact">

        <div class="col-12 d-flex flex-column justify-content-center text-center contact__content">
            <div class="position-absolute contact__image">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>    
            <?php the_field( 'content' ); ?>
        </div>

        <div class="contact__pattern" role="presentation"></div>

    </section>

<?php get_footer(); ?>