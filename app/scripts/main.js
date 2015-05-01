$(document).ready(function() {
'use strict';


// Toggles background color on navbar when user scrolls
$(window).scroll(function() {
    var wScroll = $(this).scrollTop();

    // Determines if jumbotron is still visible. Both on mobile and larger devices
    if ((wScroll > 350 && window.innerWidth > 770) || (wScroll > 150 && window.innerWidth < 770)) {
        $('.navbar--main').addClass('scroll');
    } else {
        $('.navbar--main').removeClass('scroll');
    }
});

// Toggles active class on clicked links
$('.nav a').click(function() {
    $('.nav li').removeClass('active');
    $(this).parent().addClass('active');
});

$('.navbar--main .navbar-toggle').click(function(event) {
    $('.navbar--main').addClass('scroll');
});

// Social-icons landing effect
$('.social-icons a').each(function(i) {
    setTimeout(function(){
        $('.social-icons a').eq(i).addClass('show');
    }, 150 * (i + 1));
});

// Activates tooltip
$('[data-toggle="tooltip"]').tooltip();

// When user clicks on input label gets class active and moves
$('.contact input,textarea').focusin(function() {
   $(this).parent().find('label').addClass('active');
});

// Checks if input has value. if so it keep the class active. Else it removes it
$('.contact input,textarea').focusout(function() {

    var textVal = $(this).val();

    if (textVal === '') {
        $(this).parent().find('label').removeClass('active');
    }
});








});