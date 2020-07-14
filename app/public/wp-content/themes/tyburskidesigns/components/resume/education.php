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