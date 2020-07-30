<h2 data-aos="fade-in" class="resume__exp__title">Skills</h2>

<ul class="m-0 p-0 row no-gutters align-items-start justify-content-between flex-column flex-md-row">

    <?php $skills = get_field( 'skills' ); ?>
    <?php foreach ( $skills as $skill ) : ?>

        <li class="col">
            <h3 data-aos="fade-up"><?php echo $skill[ 'category' ]; ?></h3>

            <ul class="m-0 p-0">

                <?php $details = $skill[ 'details' ]; ?>
                <?php foreach ( $details as $detail ) : ?>
                    <li data-aos="fade-up" class="pr-5">
                        <p>
                            <strong>
                                <?php echo $detail[ 'proficiency' ]; ?>
                            </strong>
                        </p>

                        <p>
                            <?php $artistries = $detail['artistry']; ?>
                            <?php foreach ( $artistries as $artistry ) : ?>
                                <span>
                                    <?php echo $artistry[ 'skill' ]; ?>
                                </span>
                            <?php endforeach; ?>
                        </p>
                    </li>
                <?php endforeach; ?>

            </ul>
        </li>

    <?php endforeach; ?>

</ul>