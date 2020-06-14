<?php get_header(); ?>

<section class="row no-gutters front-page">

    <div class="col-lg-6 front-page--image">
        <?php the_post_thumbnail( 'full' ); ?>
    </div>

    <div class="col-lg-6 d-flex flex-column align-items-start justify-content-end front-page--content">
        <h1><?php the_field('title'); ?></h1>
        <?php the_field('content'); ?>
        <?php $button = get_field('button'); ?>
        <a class="btn" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
    </div>

    <div class="front-page--pattern">
        <?php pattern_rectangle(32, 32); ?>
    </div>

</section>

<?php get_footer(); ?>