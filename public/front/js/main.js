/*
===========================================================================
 EXCLUSIVE ON themeforest.net
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 Template Name   : Velocity - Responsive Personal Portfolio Template
 Author          : bootWeb
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 Copyright (c) 2017 - bootWeb - https://themeforest.net/user/bootweb
===========================================================================
*/

/*================================================
            Table of contents  
==================================================
 
1. Scroll NavBar
2. Dynamic Colors
3. Background-image flickering solution for mobile
4. Parallax
5. Type js
6. Wow js
7. Active Scroll
8. Smooth scroll
9. Progress Bar
10. Magnific Popup
11. Mixitup
12. Hoverdir
13. Counter
14. OWL Carousel
15. Contact form
16. Google Map
17. Scroll to top
18. Preloader

====================================================
            End table content 
===================================================*/

$(function () {
    "use strict";

    var $window = $(window),
    $body = $('body');

    jQuery(document).ready(function($){

//Scroll NavBar
$window.on("scroll", function () {
    if ($window.scrollTop() > 160) {
        $('.navbar').addClass("scroll");
		$('.navbar').addClass("navbar-fixed-top");
		$('.control-side').removeClass("hidden")
    } else {
            //remove the background property
			$('.control-side').addClass("hidden")
            $('.navbar').removeClass("scroll");
			$('.navbar').removeClass("navbar-fixed-top");
		$
        }
    });



}(jQuery));
});