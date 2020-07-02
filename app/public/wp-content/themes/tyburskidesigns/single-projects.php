<?php get_header(); ?>

    <article>
        <section class="row no-gutters">
            <div class="offset-1 col-10 position-relative text-center project__title">
                <?php 
                    $terms = get_the_category();
                    if ($terms && !is_wp_error($terms)) :
                ?>
                    <ul class="p-0 position-relative project__categories">
                        <?php foreach ($terms as $term) : ?>
                            <li class="d-inline-block font-weight-bold"><?php echo $term->name; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif;?>

                <?php the_title('<h1>', '</h1>'); ?>
            </div>

            <div class="col-12 vh-100 project__hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
        </section>

        <section class="row no-gutters project__content project__content--lg">
            <div class="offset-lg-2 col-lg-8">
                <?php the_field('intro'); ?>

                <?php 
                    $appendices = get_field('appendices');
                    if ($appendices) : 
                ?>
                    <ul class="mb-0 p-0 d-flex align-items-start project__appendix">
                        <?php foreach ($appendices as $appendix) : ?>
                            <li class="d-inline-block">
                                <?php echo $appendix['details']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>

        <section class="row no-gutters project__content project__content--tint">
            <?php if (have_rows('section')) {
                while (have_rows('section')) {
                    the_row();
                    layout_get_component(get_row_layout());
                }
            } ?>  
        </section>
    </article>

<?php get_footer(); ?>