<h2 data-aos="fade-in">Recent Accolades</h2>

<ul class="m-0 p-0">

    <?php $accolades = get_field( 'accolades' ); ?>
    <?php foreach ( $accolades as $award ) : ?>
        <li>
            <h3 data-aos="fade-up"><?php echo $award[ 'institute' ]; ?></h3>
            
            <ul class="m-0 p-0">

                <?php $acknowlegements = $award[ 'awards' ]; ?>
                <?php foreach ( $acknowlegements as $acknowlegement ) : ?>
                    <li>
                        <p data-aos="fade-up">
                            <strong><?php echo $acknowlegement[ 'award' ]; ?></strong>
                        </p>

                        <ul class="p-0">

                            <?php $details = $acknowlegement[ 'details' ]; ?>
                            <?php foreach ( $details as $detail ) : ?>
                                <li data-aos="fade-up" class="m-0">
                                    <p>
                                        <time><?php echo $detail[ 'year' ]; ?></time>
                                        <span><?php echo $detail[ 'category' ]; ?></span>
                                        <span><?php echo $detail[ 'notes' ]; ?></span>
                                    </p>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </li>
                <?php endforeach; ?>
                
            </ul>
        </li>
    <?php endforeach; ?>

</ul>