<?php $id = get_query_var( 'id' ); ?>

<section class="row no-gutters position-relative about__content about__content--full">
    <i class="far fa-camera-retro position-absolute" data-aos="zoom-in" role="presentation"></i>

    <div class="offset-1 offset-xl-2 col-9 col-xl-8">
        <h2 data-aos="fade-up"><?php the_field( 'experience' ); ?></h2>
    </div>

    <div class="about__pattern" role="presentation"></div>
</section>

<section id="<?php echo $id; ?>" class="row no-gutters position-relative about__content">
    <i class="far fa-code d-none d-md-block position-absolute" data-aos="zoom-in" role="presentation"></i>

    <div class="col-xl-6 position-relative overflow-hidden about__image">
        <div data-aos="reveal-right" class="position-absolute about__image--reveal"></div>
        <?php 
            $about = get_field( 'about' );
            $image = $about['image'];
            echo wp_get_attachment_image( $image, 'full');
        ?>     
    </div>

    <div data-aos="fade-up" class="offset-1 col-10 col-lg-9 col-xl-4 d-flex flex-column align-items-start justify-content-center position-relative">
        <?php echo $about[ 'content' ]; ?>
        
        <?php $button_resume = $about['button']; ?>
        <a class="d-inline-block position-relative btn" href="<?php echo $button_resume[ 'url' ]; ?>">
            <?php echo $button_resume[ 'title' ]; ?>
        </a>
    </div>
</section>

<?php 
    global $sections;
    $sections[] = $id;
?>