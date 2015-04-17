'use strict';

console.log($(window).height() > 800);

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

        $('.jumbotron').css({
            'transform': 'translate(0px, -'+ wScroll /10 + '%)'
        });

        if ($(window).height() > 800 || wScroll > ($('.featured-video').offset().top - 200))
        {
            $('.social-icons a').each(function(i) {
                setTimeout(function(){
                    $('.social-icons a').eq(i).addClass('show');

                }, 150 * (i + 1));

            });
        }


    });
});