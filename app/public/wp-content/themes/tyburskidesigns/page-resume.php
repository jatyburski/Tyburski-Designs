<?php get_header(); ?>

    <section class="row no-gutters resume">
        <div class="offset-1 col-lg-6 resume__person">
            <h1 data-aos="fade-up"><?php bloginfo('name'); ?></h1>
            <p data-aos="fade-up" data-aos-delay="600"><strong><?php the_field('title'); ?></strong></p>
        </div>

        <aside class="offset-1 col-10 col-lg-3 resume__contact">
            <?php $contact = get_field('contact'); ?>
            <?php if ($contact) : ?>

                <ul class="m-0 p-0">
                    <li data-aos="fade-up" class="mb-0">
                        <span><i class="far fa-map-marker-alt"></i><?php echo $contact['location']; ?></span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="600">
                        <a class="d-inline-block position-relative btn m-0" href="tel:<?php echo preg_replace( '/[^0-9 ]/i', '', $contact['phone']); ?>">
                            <i class="far fa-phone"></i>
                            <?php echo $contact['phone']; ?>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="700">
                        <a class="d-inline-block position-relative btn m-0" href="mailto:<?php echo $contact['email']; ?>">
                            <i class="far fa-envelope-open-text"></i>
                            <?php echo $contact['email']; ?>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="800">
                        <?php 
                            $url = home_url();
                            $domain = parse_url($url, PHP_URL_HOST);
                        ?>
                        <a class="d-inline-block position-relative btn m-0" href="<?php echo home_url('/', 'https'); ?>">
                            <i class="far fa-link"></i><?php echo $domain; ?>
                        </a>
                    </li>
                </ul>

            <?php endif; ?>
        </aside>
    </section>

    <section class="row no-gutters resume">
        <div class="offset-1 col-10 col-lg-6 resume__exp">
            <?php $jobs = get_field('jobs'); ?>
            <?php if ($jobs) : ?>
                <?php foreach ($jobs as $job) : ?>

                    <div class="resume__exp__section">
                        <h2 data-aos="fade-up" data-aos-delay="600"><?php echo $job['company']; ?></h2>

                        <?php $positions = $job['position']; ?>
                        <?php if ($positions) : ?>

                            <ul class="m-0 p-0">
                                <?php foreach ($positions as $position) : ?>
                                    <li data-aos="fade-up" data-aos-delay="700" class="m-0">
                                        <p>
                                            <strong><?php echo $position['title']; ?></strong>
                                            <span><?php echo $position['duration']; ?></span>
                                            <span><?php echo $position['location']; ?></span>
                                        </p>
                                    </li>
                                <?php endforeach; ?>
                            </ul> 

                        <?php endif; ?>

                        <?php echo $job['description']; ?>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>

            <h2 data-aos="fade-in" class="resume__exp__title">Skills</h2>

            <?php $skills = get_field('skills'); ?>
            <?php if ($skills) : ?>
                <ul class="m-0 p-0 row no-gutters align-items-start justify-content-between">

                    <?php foreach ($skills as $skill) : ?>

                        <li class="col">
                            <h3 data-aos="fade-up"><?php echo $skill['category']; ?></h3>

                            <?php $details = $skill['details']; ?>
                            <?php if ($details) : ?>
                                <ul class="m-0 p-0">

                                    <?php foreach ($details as $detail) : ?>
                                        <li data-aos="fade-up" class="resume--spacer">
                                            <p><strong><?php echo $detail['proficiency']; ?></strong></p>

                                                <?php $artistries = $detail['artistry']; ?>
                                                <?php if ($artistries) : ?>
                                                    <p>
                                                    <?php foreach ($artistries as $artistry) : ?>
                                                        <span><?php echo $artistry['skill']; ?></span>
                                                    <?php endforeach; ?>
                                                    </p>
                                                <?php endif; ?>
                                            </p>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>
                            <?php endif; ?>

                        </li>
                    <?php endforeach; ?>

                </ul>
            <?php endif; ?>
        </div>
        
        <aside class="offset-1 col-10 col-lg-3 resume__side">
            <h2 data-aos="fade-in" data-aos-delay="900">Education</h2>

            <?php $education = get_field('education'); ?>
            <?php if ($education) : ?>
                <ul class="m-0 p-0">

                    <?php foreach ($education as $edu) : ?>
                        <li>
                            <h3 data-aos="fade-up" data-aos-delay="600"><?php echo $edu['institute']; ?></h3>
                            
                            <?php $courses = $edu['courses']; ?>
                            <?php if ($courses) : ?>
                                <ul class="m-0 p-0">
                                    <?php foreach ($courses as $course) : ?>
                                        <li data-aos="fade-up" data-aos-delay="700" class="m-0">
                                            <p><strong><?php echo $course['course']; ?></strong></p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <p data-aos="fade-up" data-aos-delay="700">
                                <time><?php echo $edu['year']; ?></time>
                                <span><?php echo $edu['major']; ?></span>
                            </p>
                        </li>
                    <?php endforeach; ?>

                </ul>
            <?php endif; ?>

            <h2 data-aos="fade-in">Recent Accolades</h2>

            <?php $accolades = get_field('accolades'); ?>
            <?php if ($accolades) : ?>
                <ul class="m-0 p-0">

                    <?php foreach ($accolades as $award) : ?>
                        <li>
                            <h3 data-aos="fade-up"><?php echo $award['institute']; ?></h3>
                            
                            <?php $acknowlegements = $award['awards']; ?>
                            <?php if ($acknowlegements) : ?>
                                <ul class="m-0 p-0">

                                    <?php foreach ($acknowlegements as $acknowlegement) : ?>
                                        <li>
                                            <p data-aos="fade-up"><strong><?php echo $acknowlegement['award']; ?></strong></p>
                                            <?php $details = $acknowlegement['details']; ?>

                                            <?php if ($details) : ?>
                                                <ul class="p-0">
                                                    <?php foreach ($details as $detail) : ?>
                                                        <li data-aos="fade-up" class="m-0">
                                                            <p>
                                                                <time><?php echo $detail['year']; ?></time>
                                                                <span><?php echo $detail['category']; ?></span>
                                                                <span><?php echo $detail['notes']; ?></span>
                                                            </p>
                                                        </li>
                                                    <?php endforeach; ?>

                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                    
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                    
                </ul>
            <?php endif; ?>

        </aside>
    </section>
    
    <?php 
        $arr = [
            'url' => get_field('resume', 'option'),
            'title' => 'Download Resume'
        ];
        set_query_var( 'button', $arr );
        layout_get_component('button-lg'); 
    ?>

<?php get_footer(); ?>