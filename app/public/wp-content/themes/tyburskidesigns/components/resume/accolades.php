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
                                <p data-aos="fade-up">
                                    <strong><?php echo $acknowlegement['award']; ?></strong>
                                </p>
                                
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