<?php get_header(); ?>

    <section class="row no-gutters position-relative about">
        <div class="col-xl-6 d-flex flex-column align-items-start justify-content-center text-nowrap about__hero">
            <h1 data-aos="fade-up">I am <span><?php bloginfo('name'); ?></span></h1>

            <?php $titles = get_field('titles'); ?>
            <?php if ($titles) : ?>
                <ul class="m-0 p-0 d-flex align-items-start">
                    <?php foreach ($titles as $title) : ?>
                        <li data-aos="fade-up"><?php echo $title['title']; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>

        <div class="col-xl-6 h-100 about__image">
            <?php the_post_thumbnail( 'full', array( 'data-aos' => 'zoom-out', 'data-aos-delay' => '800' ) ); ?>
        </div>

        <div class="position-absolute mouse">
            <div class="d-block mouse__scroll"></div>
        </div>
    </section>

    <section class="row no-gutters position-relative about__content about__content--full">
        <i class="far fa-scroll-old position-absolute"></i>

        <div class="offset-2 col-8">
            <h2 data-aos="fade-up"><?php the_field('experience'); ?></h2>
        </div>

        <div class="about__pattern">
            <?php pattern_rectangle(32, 32); ?>
        </div>
    </section>

    <?php $about = get_field('about'); ?>
    <?php if ($about) : ?>
        <section class="row no-gutters position-relative about__content">
            <i class="far fa-joystick position-absolute"></i>

            <div class="col-lg-6 position-relative overflow-hidden about__image">
                <?php $image = $about['image']; ?>
                <?php echo wp_get_attachment_image($image, 'full', '', array( 'data-aos' => 'zoom-out' ) ); ?>     
            </div>

            <div data-aos="fade-up" class="offset-1 col-lg-4 d-flex flex-column align-items-start justify-content-center">
                <?php echo $about['content']; ?>
                <?php $button_resume = $about['button']; ?>
                <a data-aos="fade-up" class="d-inline-block position-relative btn" href="<?php echo $button_resume['url']; ?>"><?php echo $button_resume['title']; ?></a>
            </div>
        </section>
    <?php endif; ?>

    <section class="row no-gutters">

        <div class="offset-2 col-lg-4 position-relative about__goals">
            <i class="far fa-guitar position-absolute"></i>
            <?php the_field('goals'); ?>
        </div>

        <div class="offset-1 col-lg-4 d-flex align-items-center position-relative about__testimonials">
            <?php $slides = get_field('testimonials'); ?>
            <?php if ($slides) : ?>
                <ul class="m-0 p-0 position-relative">
                    <?php foreach ($slides as $slide) : ?>
                        <li>
                            <blockquote>
                                <?php echo $slide['quote']; ?>
                                <?php $cite = $slide['cite']; ?>
                                <cite class="d-block font-weight-bold">
                                    <?php echo $cite['name']; ?> 
                                    <span class="d-block font-weight-normal"><?php echo $cite['title']; ?></span>
                                </cite>
                            </blockquote>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="position-absolute about__pattern about__pattern--bottom">
                <?php pattern_rectangle(32, 32); ?>
            </div>
        </div>
    </section>

    <section class="row no-gutters">
        <div class="offset-1 col-10 position-relative about__image about__image--full">
            <?php $full_image = get_field('full_image'); ?>
            <?php echo wp_get_attachment_image($full_image, 'full', '', array( 'data-aos' => 'zoom-out' ) ); ?>   
            <i class="far fa-heart position-absolute"></i> 
        </div>
    </section>

    <?php $awards = get_field('awards'); ?>
    <?php if ($awards) : ?>
        <section class="row no-gutters">
            <?php foreach ($awards as $award) : ?>

                <div class="offset-4 col-lg-5 about__awards">
                    <h3 data-aos="fade-in"><?php echo $award['institute']; ?></h3>

                    <?php $details = $award['details']; ?>
                    <?php if ($details) : ?>
                        <ul class="m-0 p-0">
                            <?php foreach ($details as $detail) : ?>
                                <li data-aos="fade-up">
                                    <time><?php echo $detail['year']; ?></time>
                                    <span><?php echo $detail['project']; ?></span>
                                    <span><?php echo $detail['category']; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>

            <?php endforeach; ?>
        </section>
    <?php endif; ?>

    <?php 
        $button_lg = get_field('connect');
        $button_arr = $button_lg['link'];
        $arr = [
            'kicker' => $button_lg['kicker'],
            'url' => $button_arr['url'],
            'title' => $button_arr['title']
        ];
        set_query_var( 'button', $arr );
        layout_get_component('button-large'); 
    ?>

<?php get_footer(); ?>