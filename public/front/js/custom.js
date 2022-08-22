/*global $, jQuery*/
$(document).ready(function () {

    'use strict';

    $(".nav-search").on('click', function () {
        $(".header-search").slideToggle("slow");
    });

    /*-------------------------------------
    Navbar Toggle for Mobile
    -------------------------------------*/
    function navbarCollapse() {
        if ($(window).width() < 992) {
            $(document).on('click', function (event) {
                var clickover = $(event.target);
                var _opened = $("#navbar-collapse").hasClass("in");
                if (_opened === true && !(clickover.is('.dropdown'))) {
                    $("button.navbar-toggle").trigger('click');
                }
            });

            $('.dropdown').unbind('click');
            $('.dropdown').on('click', function () {
                $(this).children('.dropdown-menu').slideToggle();
            });

            $('.dropdown *').on('click', function (e) {
                e.stopPropagation();
            });
        }
    }
    navbarCollapse();

    /*-------------------------------------
      progressBar  
      -------------------------------------*/
    function animateProgressBar(pb) {
        if ($.fn.visible && $(pb).visible() && !$(pb).hasClass('animated')) {
            $(pb).css('width', $(pb).attr('aria-valuenow') + '%');
            $(pb).addClass('animated');
        }
    }

    function initProgressBar() {
        var progressBar = $('.progress-bar');
        progressBar.each(function () {
            animateProgressBar(this);
        });
    }

    initProgressBar();


    /*-------------------------------------
      Rounded Progressbar
      -------------------------------------*/
    function animateRoundedProgress(rpb) {
        if ($.fn.visible && $(rpb).visible() && !$(rpb).hasClass('animated') && $(rpb).hasClass('circle-sm')) {
            $(rpb).css('stroke-dashoffset', 314.159265 - (314.159265 / 100) * $(rpb).attr('aria-valuenow'));
        } else if ($.fn.visible && $(rpb).visible() && !$(rpb).hasClass('animated') && $(rpb).hasClass('progress-chart')) {
            $(rpb).css('stroke-dashoffset', 471.2389 - (471.2389 / 100) * $(rpb).attr('aria-valuenow'));
        } else if ($.fn.visible && $(rpb).visible() && !$(rpb).hasClass('animated')) {
            $(rpb).css('stroke-dashoffset', 521.504380 - (521.504380 / 100) * $(rpb).attr('aria-valuenow'));
        }
    }

    function initRoundedProgress() {
        var roundedProgress = $('.progress-circle');
        roundedProgress.each(function () {
            animateRoundedProgress(this);
        });
    }

    initRoundedProgress();

    /*-------------------------------------
      Isotope
      -------------------------------------*/
    // init Isotope
    var $grid = $('.grid').isotope({
        // options...
        itemSelector: '.grid-item',
        masonry: {
            columnWidth: 0
        }
    });
    // layout Isotope after each image loads
    $grid.imagesLoaded().progress(function () {
        $grid.isotope('layout');
    });

    $('#iso-nav .btn').on('click', function () {
        $('#iso-nav .btn-filter').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.grid.filter-grid').isotope({
            filter: selector
        });
        return false;
    });

    $('#iso-nav-right .btn').on('click', function () {
        $('#iso-nav-right .btn-filter').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.grid.filter-grid').isotope({
            filter: selector
        });
        return false;
    });

    $('#iso-nav2 .btn').on('click', function () {
        $('#iso-nav2 .btn-filter').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.grid.filter-grid2').isotope({
            filter: selector
        });
        return false;
    });

    /*-------------------------------------
      CounterUp
      -------------------------------------*/
    function animateNumberProgress(npv) {
        if ($.fn.visible && $(npv).visible() && !$(npv).hasClass('animated')) {
            $(npv).countTo({
                time: 2000
            });
            $(npv).addClass('animated');
            console.log("animated");
        } 
    }

    function initNumberProgress() {
        var numberProgress = $('.counter');
        numberProgress.each(function () {
            animateNumberProgress(this);
        });
    }

    initNumberProgress();
    


    /*-------------------------------------
      Product View Control
      -------------------------------------*/
    $(".cpf-display-style-controller span").on('click', function () {
        $("span").removeClass("active");
        $(this).addClass("active");
    });

    $(".cpf-display-style-controller #grid-view-selector").on('click', function () {
        $(".collum").removeClass("collum-none");
    });

    $(".cpf-display-style-controller #list-view-selector").on('click', function () {
        $(".collum").addClass("collum-none");
    });

    /*-------------------------------------------
      Magnific PopUp
      -------------------------------------------*/
    $('.flexo-gallery').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });

    /*-------------------------------------------
      CountDown
      -------------------------------------------*/
    $('.countdown-time').each(function () {
        var endTime = $(this).data('time');
        $(this).countdown(endTime, function (tm) {
            $(this).html(tm.strftime('<span class="section_count"><span class="tcount days">%D </span><span class="text">Days</span></span><span class="section_count"><span class="tcount hours">%H</span><span class="text">Hours</span></span><span class="section_count"><span class="tcount minutes">%M</span><span class="text">Minutes</span></span><span class="section_count"><span class="tcount seconds">%S</span><span class="text">Seconds</span></span>'));
        });
    });

    //Countdown style 3
    $('.countdown-3').each(function () {
        var endTime = $(this).data('time');
        $(this).countdown(endTime, function (tm) {
            var countTxt = '';
            var countDay = 521.504380 - (521.504380 / 365) * (tm.strftime('%D'));
            var countHour = 521.504380 - (521.504380 / 24) * (tm.strftime('%H'));
            var countMin = 521.504380 - (521.504380 / 60) * (tm.strftime('%M'));
            var countSec = 521.504380 - (521.504380 / 60) * (tm.strftime('%S'));
            countTxt += '<div class="col-md-3 col-sm-6"><span class="section_count"><span class="section_count_data"><span class="count-data"><span class="tcount days">%D </span><span class="text">Days</span></span><svg height="170" width="170"><circle cx="85" cy="85" r="83" stroke-width="4" fill="none" style="stroke-dashoffset:' + countDay + '"/></svg></span></span></div>';
            countTxt += '<div class="col-md-3 col-sm-6"><span class="section_count"><span class="section_count_data"><span class="count-data"><span class="tcount hours">%H</span><span class="text">Hours</span></span><svg height="170" width="170"><circle cx="85" cy="85" r="83" stroke-width="4" fill="none" style="stroke-dashoffset:' + countHour + '"/></svg></span></span></div>';
            countTxt += '<div class="col-md-3 col-sm-6"><span class="section_count"><span class="section_count_data"><span class="count-data"><span class="tcount minutes">%M</span><span class="text">Minutes</span></span><svg height="170" width="170"><circle cx="85" cy="85" r="83" stroke-width="4" fill="none" style="stroke-dashoffset:' + countMin + '"/></svg></span></span></div>';
            countTxt += '<div class="col-md-3 col-sm-6"><span class="section_count"><span class="section_count_data"><span class="count-data"><span class="tcount seconds">%S</span><span class="text">Seconds</span></span><svg height="170" width="170"><circle cx="85" cy="85" r="83" stroke-width="4" fill="none" style="stroke-dashoffset:' + countSec + '"/></svg></span></span></div>';

            $(this).html(tm.strftime(countTxt));
        });
    });

    /*-------------------------------------
      Owl Carousel
      -------------------------------------*/
    if ($("#owl-full-grid").length > 0) {
        $("#owl-full-grid").owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    }

    if ($("#testimonial-italic").length > 0) {
        $("#testimonial-italic").owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: false,
            pagination: false
        });
    }

    if ($("#testimonial-classic").length > 0) {
        $("#testimonial-classic").owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    }

    if ($("#testimonial-standard").length > 0) {
        $("#testimonial-standard").owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    }

    if ($("#owl-full-width").length > 0) {
        $("#owl-full-width").owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    }

    if ($("#owl-half-grid").length > 0) {
        $("#owl-half-grid").owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    }

    if ($("#owl-half-classic").length > 0) {
        $("#owl-half-classic").owlCarousel({
            singleItem: true,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: false,
            pagination: true,
            paginationNumbers: false
        });
    }

    if ($("#owl-client").length > 0) {
        $("#owl-client").owlCarousel({
            singleItem: false,
            items: 6,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    }

    if ($("#product-calousel").length > 0) {
        $("#product-calousel").owlCarousel({
            singleItem: false,
            items: 4,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    }

    if ($("#single-product-carousel").length > 0) {
        $("#single-product-carousel").owlCarousel({
            singleItem: true,
            items: 1,
            slideSpeed: 200,
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            pagination: false
        });
    }
    
    /*-----------------------------------
    Contact Form
    -----------------------------------*/
    // Function for email address validation
    function isValidEmail(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

        return pattern.test(emailAddress);

    }
    $("#contactForm").on('submit', function (e) {
        e.preventDefault();
        var data = {
            name: $("#name").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
            message: $("#message").val()
        };

        if (isValidEmail(data['email']) && (data['message'].length > 1) && (data['name'].length > 1) && (data['phone'].length > 1)) {
            $.ajax({
                type: "POST",
                url: "sendmail.php",
                data: data,
                success: function () {
                    $('#contactForm .input-success').delay(500).fadeIn(1000);
                    $('#contactForm .input-error').fadeOut(500);
                }
            });
        } else {
            $('#contactForm .input-error').delay(500).fadeIn(1000);
            $('#contactForm .input-success').fadeOut(500);
        }

        return false;
    });


    /*-----------------------------------
    Subscription
    -----------------------------------*/
    $(".flexo-subscription").ajaxChimp({
        callback: mailchimpResponse,
        url: "http://codepassenger.us10.list-manage.com/subscribe/post?u=6b2e008d85f125cf2eb2b40e9&id=6083876991" // Replace your mailchimp post url inside double quote "".  
    });

    function mailchimpResponse(resp) {
        if (resp.result === 'success') {

            $('.newsletter-success').html(resp.msg).fadeIn().delay(3000).fadeOut();

        } else if (resp.result === 'error') {
            $('.newsletter-error').html(resp.msg).fadeIn().delay(3000).fadeOut();
        }
    }

    $(window).on('scroll', function () {
        initProgressBar();
        initRoundedProgress();
        initNumberProgress();
    });

    $(window).on('resize orientationchange', function () {
        navbarCollapse();
    });

});