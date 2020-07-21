<div class="offset-1 offset-md-2 offset-xl-1 col-10 col-md-9 col-lg-8 col-xl-4 d-flex flex-column justify-content-center position-relative about__testimonials" id="carousel" data-ride="carousel">
        
    <h3>Clients Say...</h3>
    <ul class="m-0 p-0 position-relative">

        <?php $slides = get_field( 'testimonials' ); ?>

        <?php foreach ( $slides as $slide ) : ?>
            <li>
                <blockquote>
                    <?php echo $slide[ 'quote' ]; ?>

                    <cite class="d-block font-weight-bold">
                        <?php $cite = $slide[ 'cite' ]; ?>
                        <?php echo $cite[ 'name' ]; ?> 
                        <span class="d-block font-weight-normal"><?php echo $cite[ 'title' ]; ?></span>
                    </cite>
                </blockquote>
            </li>
        <?php endforeach; ?>

    </ul>

    <a class="about__testimonial-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="about__testimonial-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    <div class="position-absolute about__pattern about__pattern--bottom" role="presentation"></div>
</div>