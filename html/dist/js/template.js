(function($){
    $(document).on('ready',function() {
        slidersInit();
        parallax();
        maskedPhone();
        fancyBoxInit();
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
        $('.application_form__bg').parallax();
    };

    var maskedPhone = function() {
        $("#phone").mask("+375 (99) 999-99-99");
    };


    var fancyBoxInit = function() {
        $("[data-fancybox]").fancybox();
    }

})(jQuery);


