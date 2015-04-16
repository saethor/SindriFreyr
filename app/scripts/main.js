'use strict';

$(function() {
    $('.contact input,textarea').focusin(function() {
       $(this).parent().find('label').addClass('active');
    });

    $('.contact input,textarea').focusout(function() {

        var textVal = $(this).val();

        if (textVal === "") {
            $(this).parent().find('label').removeClass('active');
        }
    });
});