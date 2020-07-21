<h2 data-aos="fade-in" data-aos-delay="900">Education</h2>

<ul class="m-0 p-0">

    <?php $education = get_field( 'education' ); ?>     
    <?php foreach ( $education as $edu ) : ?>
        <li>
            <h3 data-aos="fade-up" data-aos-delay="600"><?php echo $edu[ 'institute' ]; ?></h3>
            
            <ul class="m-0 p-0">

                <?php $courses = $edu[ 'courses' ]; ?>
                <?php foreach ( $courses as $course ) : ?>
                    <li data-aos="fade-up" data-aos-delay="700" class="m-0">
                        <p><strong><?php echo $course[ 'course' ]; ?></strong></p>
                    </li>
                <?php endforeach; ?>

            </ul>

            <p data-aos="fade-up" data-aos-delay="700">
                <span><?php echo $edu[ 'year' ]; ?></span>
                <span><?php echo $edu[ 'major'] ; ?></span>
            </p>
        </li>
    <?php endforeach; ?>

</ul>