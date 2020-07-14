<?php $awards = get_field('awards'); ?>
<?php if ($awards) : ?>
    <section class="row no-gutters">

        <?php foreach ($awards as $award) : ?>
            <div class="offset-1 offset-md-2 offset-lg-3 offset-xl-4 col-10 col-md-8 col-lg-7 col-xl-5 about__awards">
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