(function($){
    $(document).on('ready',function() {
        slidersInit();
        parallax();
        maskedPhone();
        fancyBoxInit();
        burgerMenu();
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
        $("#phone").mask("+375(99)999-99-99");
    };


    var fancyBoxInit = function() {
        $("[data-fancybox]").fancybox();
    };

    var burgerMenu = function() {
        $('.burger_button').on('click', function() {
            $(this).toggleClass('open');
            $('body').toggleClass('burger_open');
        });

        function addButtonMenu() {
            if ($(window).width() <= 1199) {
                $('.main_menu > li').each(function() {
                    if ($(this).children('ul').length != 0 && $(this).children('i.fa').length == 0){
                        $(this).addClass('has_submenu').append('<i class="fa fa-plus-square-o"></i>');
                    }
                });
            }
        }
        addButtonMenu();
        $(window).resize(addButtonMenu);

        $('.has_submenu i').on('click', function() {
            $(this).parent().toggleClass('open');
            if($(this).is('.fa-plus-square-o')) {
                $(this).removeClass('fa-plus-square-o').addClass('fa-minus-square-o');
            }
            else {
                $(this).removeClass('fa-minus-plus-o').addClass('fa-plus-square-o');
            }
        });

        $('.main_menu__container nav').on('click', function() {
            if($('body').hasClass('burger_open')) {
                $('body').removeClass('burger_open');
                $('.burger_button').removeClass('open');
            }
        });

        $('.main_menu').on('click', function() {
            event.stopPropagation();
        });

    }

})(jQuery);


