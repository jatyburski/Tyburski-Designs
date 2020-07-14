<?php get_header(); ?>

    <?php layout_get_component('masthead', 'resume'); ?>

    <section class="row no-gutters resume">
        <div class="offset-1 col-10 col-lg-6 resume__exp">
            <?php layout_get_component('jobs', 'resume'); ?>
            <?php layout_get_component('skills', 'resume'); ?>
        </div>

        <aside class="offset-1 col-10 col-lg-3 resume__side">
            <?php layout_get_component('education', 'resume'); ?>
            <?php layout_get_component('accolades', 'resume'); ?>
        </aside>
    </section>

<?php
    $arr = [
        'url' => get_field('resume', 'option'),
        'title' => 'Download Resume'
    ];

    set_query_var( 'button', $arr );
    layout_get_component('button-lg' , ''); 

    get_footer(); 
?>