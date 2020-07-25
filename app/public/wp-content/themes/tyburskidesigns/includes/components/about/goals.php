<?php $id = get_query_var( 'id' ); ?>

<section id="<?php echo $id; ?>" class="row no-gutters">
    <div class="offset-1 offset-xl-2 col-10 col-xl-4 position-relative about__goals">
        <i class="far fa-guitar d-none d-md-block position-absolute" role="presentation"></i>

        <?php the_field( 'goals' ); ?>
    </div>

    <?php layout_get_component( 'testimonials', 'about' ); ?>
</section>

<?php 
    global $sections;
    $sections[] = $id;
?>