'use strict';

$(document).ready(function() {



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
        console.log(wScroll);

        if (wScroll > 350) {
            $('.navbar--main').addClass('scroll');
        } else {
            $('.navbar--main').removeClass('scroll');

        }
    });

});

    $('.social-icons a').each(function(i) {
        setTimeout(function(){
            $('.social-icons a').eq(i).addClass('show');
        }, 150 * (i + 1));
    });

    $('#affix').affix({
      offset: {
        top: 100,
        bottom: function () {
          return (this.bottom = $('.footer').outerHeight(true));
        }
      }
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});



});