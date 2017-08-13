$(document).ready(function() {



    $('.big_slider').slick({
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 2000,
        adaptiveHeight: true
    });

    window.onload = function() {
        $('body').removeClass('load').addClass('loaded');
    };
});


