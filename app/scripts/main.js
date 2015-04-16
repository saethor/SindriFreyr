'use strict';

$(function() {
    $('.contact input,textarea').focusin(function() {
       $(this).parent().find('label').addClass('active');
    });

    $('.contact input,textarea').focusout(function() {

        var textVal = $(this).val();

        if (textVal === '') {
            $(this).parent().find('label').removeClass('active');
        }
    });


    $('.nav a').click(function() {
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');

    });

    $(window).scroll(function() {
        var wScroll = $(this).scrollTop();

        if (wScroll > $('.featured-video').offset().top)
        {
            $('.social-icons a').each(function(i) {

                setTimeout(function() {
                    
                }, 300 * (i + 1));

            });
        }


    });
});