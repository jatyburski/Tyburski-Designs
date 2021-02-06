$ = jQuery.noConflict();

$(document).ready(function(){
    $(window).scroll(function(){
        $(".mouse").css("opacity", 1 - $(window).scrollTop() / $('.mouse').height());
    });
});