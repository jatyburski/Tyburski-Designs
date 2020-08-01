<div class="row no-gutters">
    <div class="offset-xl-1 col-xl-10 position-relative about__image about__image--full">
        <div data-aos="reveal-right" class="position-absolute about__image--reveal"></div>

        <?php $full_image = get_field( 'full_image' ); ?>
        <?php echo wp_get_attachment_image( $full_image, 'full', '', array( 'class' => 'w-100' ) ); ?>  

        <i class="far fa-joystick d-none d-lg-block position-absolute"></i> 
    </div>
</div>