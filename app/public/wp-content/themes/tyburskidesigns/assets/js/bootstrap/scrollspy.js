$ = jQuery.noConflict();

$(function(){

    $('body').scrollspy({ target: '#scrollspy' })
    $('a[href*="#"]')

    .not('[href="#"]')
    .not('[href="#0"]')
    
    .on('click', function(event) {   

        if (this.hash !== "") {

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top - 70
            }, 800, function() {

                if (history.pushState) {
                    history.pushState(null, null, hash); 
                } else {
                    window.location.hash = hash;
                } 

            });

            return false; 

        }

    });

});

$(document).scroll(function () {

    var fold = $(this).scrollTop();

    if (fold > window.innerHeight) {
        $('.scrollspy').fadeIn();
    } 
    else {
        $('.scrollspy').fadeOut();
    }

});