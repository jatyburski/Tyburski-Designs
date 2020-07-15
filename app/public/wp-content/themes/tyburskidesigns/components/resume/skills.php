<h2 data-aos="fade-in" class="resume__exp__title">Skills</h2>

<?php $skills = get_field( 'skills' ); ?>
<?php if ( $skills ) : ?>
    <ul class="m-0 p-0 row no-gutters align-items-start justify-content-between flex-column flex-md-row">

        <?php foreach ( $skills as $skill ) : ?>

            <li class="col">
                <h3 data-aos="fade-up"><?php echo $skill[ 'category' ]; ?></h3>

                <?php $details = $skill[ 'details' ]; ?>
                <?php if ( $details ) : ?>
                    <ul class="m-0 p-0">

                        <?php foreach ( $details as $detail ) : ?>
                            <li data-aos="fade-up">
                                <p>
                                    <strong><?php echo $detail[ 'proficiency' ]; ?></strong>
                                </p>

                                    <?php $artistries = $detail['artistry']; ?>
                                    <?php if ( $artistries ) : ?>
                                        <p>

                                            <?php foreach ( $artistries as $artistry ) : ?>
                                                <span><?php echo $artistry[ 'skill' ]; ?></span>
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