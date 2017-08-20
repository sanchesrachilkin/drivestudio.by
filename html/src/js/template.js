(function($){
    $(document).on('ready',function() {
        slidersInit();
        parallax();
        maskedPhone();
    });



    var slidersInit = function() {
        $('.big_slider').slick({
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            adaptiveHeight: true,
            fade: true
        });
    };

    var parallax = function() {
        $('.application_form__bg').parallax({imageSrc: '../images/application_form_bg/bg.jpg'});
    };

    var maskedPhone = function() {
        $("#phone").mask("+375 (99) 999-99-99");
    };

})(jQuery);


