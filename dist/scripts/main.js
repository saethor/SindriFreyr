"use strict";$(function(){$(".contact input,textarea").focusin(function(){$(this).parent().find("label").addClass("active")}),$(".contact input,textarea").focusout(function(){var t=$(this).val();""===t&&$(this).parent().find("label").removeClass("active")}),$(".nav a").click(function(){$(".nav li").removeClass("active"),$(this).parent().addClass("active")}),$(window).scroll(function(){var t=$(this).scrollTop();t>$(".featured-video").offset().top&&$(".social-icons a").each(function(t){setTimeout(function(){},300*(t+1))})})});