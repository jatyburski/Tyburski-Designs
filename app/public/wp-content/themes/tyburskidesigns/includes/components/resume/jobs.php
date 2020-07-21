<?php $jobs = get_field( 'jobs' ); ?>

<?php foreach ( $jobs as $job ) : ?>
    <div class="resume__exp__section">
        <h2 data-aos="fade-up" data-aos-delay="600"><?php echo $job[ 'company' ]; ?></h2>

        <ul class="m-0 p-0 resume__exp__section-positions">

            <?php $positions = $job[ 'position' ]; ?>
            <?php foreach ( $positions as $position ) : ?>
                <li class="mb-0" data-aos="fade-up" data-aos-delay="700">
                    <p>
                        <strong><?php echo $position[ 'title' ]; ?></strong>
                        <span><?php echo $position[ 'duration' ]; ?></span>
                        <span><?php echo $position[ 'location' ]; ?></span>
                    </p>
                </li>
            <?php endforeach; ?>

        </ul> 

        <?php echo $job[ 'description' ]; ?>
    </div>
<?php endforeach; ?>