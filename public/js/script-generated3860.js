

const pdfLinks = document.querySelectorAll('a[href*="ContentDocumentHandler\\.ashx"]');

for (let i = 0, n = pdfLinks.length; i < n; i++) {
    pdfLinks[i].setAttribute("target", "_blank");
}

jQuery(document).ready(function () {
    let touchStartPos;
    let touchStartTime;
    let touchTarget;
    const slider = document.querySelector('[class*="Table-Slider"]');
        document.addEventListener('touchstart', function (e) {
            touchStartPos = e.touches[0].screenX;
            touchStartTime = e.timeStamp;
            touchTarget = e.target === slider ? jQuery(e.target) : jQuery(e.target).closest('[class*="Table-Slider"]');
        }, { passive: false });
        document.addEventListener('touchend', function (e) {
            const finishPos = touchStartPos - e.changedTouches[0].screenX;
            const finishTime = e.timeStamp - touchStartTime;
            if (finishTime > 300) {
                if (finishPos > 0) {
                    const button = touchTarget.find('.slider-next');
                    button.trigger("mousedown");
                    button.trigger("mouseup");
                } else {
                    const button = touchTarget.find('.slider-previous');
                    button.trigger("mousedown");
                    button.trigger("mouseup");
                }
            }
        }, { passive: false });
    //const defSlider = document.querySelector('[class*="Table-Slider"]');
    //const slider = defSlider === e.target ? jQuery(e.target) : jQuery(e.target).closest('[class*="Table-Slider"]');
    //console.log(slider);
    //jQuery('.slider-next').trigger("mousedown");
    //jQuery('.slider-next').trigger("mouseup");
    jQuery('main, #primary ul li div').textReplace({
        removableElements: ["H1", "H2", "H3", "H4", "H5", "H6", "P"],
    });

    // Slideshow 2.11.0 by Jesse Fowler, Copyright 2015 Fiserv. All rights reserved.
    jQuery('#hero-main').slideShow({
        randomSelect: false
    });

    // Slider 2.1.0 by Jesse Fowler, Copyright 2019 Fiserv. All rights reserved.
    jQuery('.Table-Slider-1-Item').slider({
        amountOfVisibleSlides: 1
    });
    jQuery('.Table-Slider-2-Item').slider({
        amountOfVisibleSlides: 2
    });
    jQuery('.Table-Slider-3-Item').slider();
    jQuery('.Table-Slider-4-Item').slider({
        amountOfVisibleSlides: 4
    });


    // Fiserv CSS 1.0.2 by Paul Richards, Copyright 2018 Fiserv. All rights reserved.
    // Detect TD has Content
    jQuery("[class*=subsection] .inner-content > table:not('[class*=Table]') > * > tr > td, .Subsection-Table > tbody > tr > td:first-of-type > table:not('[class*=Table]') > * > tr > td").each(function () {
        var $this = jQuery(this);

        if (($this.html().length > 25) || ($this.find('h1,h2,h3,h4,h5').length)) {
            $this.addClass("show");
        }
    });

    // Add overlay (fade) based on content location
    // Detect TD has Content required
    jQuery(".subsection[style*='url'] .inner-content > table:not('[class*=Table]') > tbody > tr, .Subsection-Table[style*='url'] > tbody > tr > td:first-of-type > table:not('[class*=Table]') > tbody > tr").each(function () {
        var $this = jQuery(this);

        if (jQuery(this).find("td:first-child").hasClass("show") && jQuery(this).find("td:last-child").hasClass("show")) {
        } else if (jQuery(this).find("td:first-child").hasClass("show")) {
            $this.parents(".subsection, .Subsection-Table").addClass("fade-left");
        } else if (jQuery(this).find("td:last-child").hasClass("show")) {
            $this.parents(".subsection, .Subsection-Table").addClass("fade-right");
        }
    });

    // Remove unwanted spaces
    //jQuery('p').each(function () {
    //    var $this = jQuery(this);
    //    if ($this.html().replace(/\s|&nbsp;/g, '').length == 0)
    //        $this.remove();
    //});

    // CMS Include 2.0.0 by JP Larson, Copyright 2017 Fiserv. All rights reserved.
    jQuery('a.Include').cmsInclude();

    // CMS Include 2.0.0 by JP Larson, Copyright 2017 Fiserv. All rights reserved.
    jQuery('a.Include-Mortgage-Appraisal-Form').cmsInclude({
        url: "inc_mortgage-payment-form.aspx"
    });

    // Page Class 2.0.0 by JP Larson, Copyright 2018 Fiserv. All rights reserved.
    jQuery('body').pageClass();

    // Ajax Post 2.0.0 by JP Larson, Copyright 2018 Fiserv. All rights reserved.
    jQuery('#Form1').ajaxPost({
        url: "sendmail52.aspx", //Replace with the form handler page.
        postContainer: jQuery('#contact'), //Replace with the container in which the response is displayed
    });

    // Ajax Form 3.0.0 by JP Larson, Copyright 2018 Fiserv. All rights reserved.
    jQuery('a.Include-Form').cmsInclude({
        //The URL would normally need the "ajax-form/" directory removed when implemented on a site.  It is needed here due to the way the Code Library is set up.
	    url: "inc_contact-form.aspx",
	    async: true,
	    success: function () {
            jQuery('#the-form').ajaxPost({
                url: "sendmail52.aspx",
                postContainer: jQuery('#contact'),
            });
            initCaptcha();
            setInterval(function () {
                if (jQuery('#captchaAnswer').get(0).pattern !== jQuery('[name=captcha2]').val()) {
                    jQuery('#captchaAnswer').get(0).pattern = jQuery('[name=captcha2]').val();
                }
            }, 1000);
            jQuery('#the-form').validateForm();
	    }
    });

    // Replace With Checkmarks 1.1.0 by Jesse Fowler, Copyright 2017 Fiserv. All rights reserved.
    jQuery('[class*=Table-] > * > tr > *').add('[class*=Table-] > * > tr > * > p').replaceWithCheckmarks({
        findThis: 'X'
    });

    // Text Resizer 4.1.0 by Jesse Fowler, Copyright 2018 Fiserv. All rights reserved.
    jQuery('html').textResizer();

    // Online Banking 1.5.2 by JP Larson, Copyright 2019 Fiserv. All rights reserved.
    jQuery('#login').onlineBanking({
        defaultAccountType: "personal",
        retail: {
            version: "custom",
            custom: function () {
                const login = document.querySelector("#login");
                const form = login.querySelector("form.personal");
                form.addEventListener('submit', function () {
                    this.action = "https://consumer.prosperity.bank/login.aspx";
                });
                window.addEventListener('focus', function (e) {
                    form.reset();
                    login.classList.remove('loading');
                });
                return false;
            },
            active: true
        }
    });

    // Validate Form 1.2.1 by JP Larson, Copyright 2018 Fiserv. All rights reserved.
    //jQuery('form').validateForm();

    // Field History 2.0.1 by JP Larson, Copyright 2018 Fiserv. All rights reserved.
    //if (typeof jQuery.fn.onlineBanking === "function") {
    //    jQuery('[name=loginTo]').fieldHistory({
    //        form: jQuery('#login').find('form')
    //    });
    //}
    //jQuery('input, select, textarea').fieldHistory();

    // Panel Navigation 3.2.0 by Paul Richards, Copyright 2016 Fiserv. All rights reserved.
    // Shared Variable
    var menu = jQuery(".menuopen");

    // Show/Hide Navigation
    function activateNav() {
        if (jQuery("body").hasClass("opennav")) {
            jQuery("body").removeClass("opennav");
        } else {
            jQuery("body").addClass("opennav");
        }
        jQuery("body").removeClass("openob"); //Hide login
    }

    // Show/Hide Login
    function activateLogin() {
        if (jQuery("body").hasClass("openob")) {
            jQuery("body").removeClass("openob");
        } else {
            jQuery("body").addClass("openob");
        }
        jQuery("body").removeClass("opennav"); //Hide Responsive Nav   
    }

    jQuery(".menuopen").click(function () {
        activateNav();
    });

    jQuery(".loginopen").click(function () {
        activateLogin();
    });

    // Toggle Category 
    jQuery("nav ul li").click(function () {
        jQuery(this).toggleClass("active");
        //jQuery(this).siblings().removeClass("active"); //closes other tabs
    });

    jQuery('nav#primary').accessibilityTabExpand();

    // Smooth Scroll 2.2.0 by JP Larson, Copyright 2018 Fiserv. All rights reserved.
    var scroll1 = jQuery('a[href*=#]:not([href=#]):not(.exclude-smoothScroll)').smoothScroll();

    // Product Selector 3.0.0 by JP Larson, Copyright 2018 Fiserv. All rights reserved.
    jQuery('a.Include-Product-Selector').cmsInclude({
        url: "inc_Product-Selector.aspx",
        success: function () {
            var productSelector = jQuery('#Product-Selector a[href*=#]:not([href=#])').smoothScroll({
                animation: {
                    obj: jQuery('#Product-Selector #scroller'),
                    duration: 0,
                    delay: 500
                },
                initialHash: "#Product-Selector-Start"
            });
        }
    });

    // Site Notice 4.1.0 by Jesse Fowler, Copyright 2018 Fiserv. All rights reserved.
    jQuery(".notice").responsiveSiteNotice({
        styleType: "top-banner"
    });

    // Captcha 3.0.0 by Jesse Fowler, Copyright 2015 Fiserv. All rights reserved.
    initCaptcha();

    // Expander 4.0.0 by Jesse Fowler & Kristen Rogers, Copyright 2015 Fiserv. All rights reserved.
    jQuery('.Table-Expandable').fiservExpandablesInit();

    // Speedbump 1.1.0 by Jesse Fowler, Copyright 2018 Fiserv. All rights reserved.
    var links = document.querySelectorAll('a[href*="speedbump"]');
    for (var i = 0; i < links.length; i++) {
        links[i].target = '_blank';
    }

    // Mailbump
    var links = document.querySelectorAll('a[href*="mailto:"]:not(#link)');
    for (var i = 0; i < links.length; i++) {
        links[i].href = "email.aspx?link=" + links[i].href;
    }

    // Scroll Trigger 2.2.0 by Jesse Fowler & Kristen Rogers, Copyright 2016 Fiserv. All rights reserved.
    var initscrolltrigger = function () {
        jQuery('body').scrollTrigger({
            triggerClass: "showtop",
            scrollMin: 350
        });
        jQuery('body').scrollTrigger({
            triggerClass: "scroll",
            scrollMin: 1
        });
        jQuery('[class*="Subsection-"]').scrollTrigger({
            elementOffset: 0.8,
            resetOnScrollUp: false
        });
        jQuery('[class*="Table-Slider-"]').scrollTrigger({
            elementOffset: 0.8,
            resetOnScrollUp: false
        });
        jQuery('[class*="Table-Grid-"]').scrollTrigger({
            elementOffset: 0.8,
            resetOnScrollUp: false
        });
        jQuery('.List-Column').scrollTrigger({
            elementOffset: 0.8,
            resetOnScrollUp: false
        });
    }
    initscrolltrigger();

    jQuery(window).scroll(function () {
        initscrolltrigger();
    });

    // Get Queries 2.1.0 by JP Larson, Copyright 2018 Fiserv. All rights reserved.
    jQuery(window.location).getQueries();

    // Responsive Zoom 3.0.0 by Jesse Fowler, Copyright 2015 Fiserv. All rights reserved.
    function onWinResize() {
        var windowSize = jQuery(window).width();
        
        // Set page width maximums and minimums
        pageWidth = parseFloat(windowSize);
        if (pageWidth < 990) {
            try {
                jQuery("body").addClass("mobile");
                jQuery("body").removeClass("desktop");
            } catch (err) { }
        } else {
            try {
                jQuery("body").removeClass("mobile");
                jQuery("body").addClass("desktop");
            } catch (err) { }
        }

        jQuery(".responsivezoom").responsiveZoom();
        jQuery(".Table-Style").responsiveZoom();
        jQuery(".Table-Product").responsiveZoom();
        jQuery(".Table-Comparison").responsiveZoom();
        jQuery(".calculators fieldset").responsiveZoom();

        onWinResizeInitalized = true;
    }

    // Initializer - Calls Responsive Zoom
    onWinResize();
    var windowWidth = jQuery(window).width();
    var onWinResizer = debounce(function () {
        if (jQuery(window).width() != windowWidth) {
            onWinResize();
            windowWidth = jQuery(window).width();
        }
    }, 500);

    jQuery(window).on('resize', onWinResizer);

    // Lightcase 3.0.0 by @cornelboppart, GPL license
    $('a[rel^=lightcase]').lightcase({
        attr: 'rel'
    });

    //Video helper scripts
    //Adds class Automatically to embedded videos
    jQuery('a[href*="embed"]').each(function () {
        jQuery(this).addClass('media');
    });

    //Adds Lightbox Manual
    jQuery('.media').lightcase();
    jQuery('[href*=speedbump]').lightcase();
    jQuery('[href*="email.aspx"]').lightcase();
    // Text Color Based On Background Color 1.0.0 by Jesse Fowler, Copyright 2019 Fiserv. All rights reserved.
    jQuery('.text-color-based-on-background-color').textColorBasedOnBackgroundColor();

    // Resize Class 1.0.1 by JP Larson, Copyright 2019 Fiserv. All rights reserved.
    jQuery('html').resizeClass();
    const moreButton = function (anchored) {
        let debounce;
        let hideDebounce;
        let prevPosition = window.pageYOffset;
        let more = jQuery('#more');
        let end = false;
        var index = 0;
        const setNext = function () {
            const scrollPos = window.pageYOffset + (window.innerHeight / 3);

            for (let i = 0, n = anchored.length; i < n; i++) {
                const thisAnchor = anchored.eq(i);
                if (thisAnchor.offset().top > scrollPos) {
                    more.attr('href', "#" + thisAnchor.attr('id'));
                    index = i;
                    //if (i == n - 1) {
                    //    end = true;
                    //} else {
                    //    end = false;
                    //}
                    break;
                }
            }
            if (index == anchored.length - 1 && scrollPos >= anchored.eq(index).offset().top) {
                end = true;
            } else {
                end = false;
            }
        }
        
        for (let i = 0, n = anchored.length; i < n; i++) {
            if (!anchored.eq(i).attr('id')){
                anchored.eq(i).attr('id', 'anchor-' + i);
            }
        }
        setNext();
        jQuery(window).on('scroll', function () {
            setNext();

            if (window.pageYOffset > prevPosition && end == false) {
                more.addClass('show');
                clearTimeout(hideDebounce);
                hideDebounce = setTimeout(function () {
                    more.removeClass('show');
                }, 2000);
            } else {
                more.removeClass('show');
            }
            prevPosition = window.pageYOffset;

        });
    }
    moreButton(jQuery('main table:not(.Table-Slide) h2, a:not([href]):not([class])'));

    const navHeader = function (links) {
        const locationRegex = /\/([^\/\.]+$)/i;
        if (locationRegex.test(location.pathname)) {
            const pageName = location.pathname.match(locationRegex)[1];
            const currentPageLink = jQuery('main a[href=' + pageName + ']');
            if (currentPageLink.length) {
                currentPageLink.addClass('current');
            }
        }
    }
    navHeader();

    jQuery('#search span.fa-search').on('click', function () {
        jQuery('#searchBox').focus();
    });

    jQuery('#text-resizer .reset').on('click', function () {
        const classes = [
            'font-size-smallest',
            'font-size-small',
            'font-size-normal',
            'font-size-large',
            'font-size-largest'
        ]
        const theRoot = jQuery('html');
        for (let i = 0, n = classes.length; i < n; i++) {
            theRoot.removeClass(classes[i]);
        }
        localStorage.removeItem('fiserv-font-size-name');
        localStorage.setItem('fiserv-font-size-name', classes[2]);
    });

    const setHomeCookie = function () {
        const dirRegex = /\/prosperitybankusa\/|\//g;
        const page = location.pathname.replace(dirRegex, "");
        const cleanPage = page.replace(/\.[\w]{2,4}/g, "");
        const nav = document.querySelector('nav#primary');
        if (nav && cleanPage) {
            const pageLink = nav.querySelector('[href=' + cleanPage + ']');
            const findParents = function (obj) {
                let parents = [];
                if (obj && obj.parentElement) {
                    const parent = obj.parentElement;
                    parents.push(parent);
                    if (findParents(parent).length > 0) {
                        parents = parents.concat(findParents(parent));
                    }
                }
                return parents;
            }
            if (pageLink) {
                const pageParents = findParents(pageLink).reverse();
                if (pageParents) {
                    const parentPageLink = pageParents[6].querySelector('h2 > a');
                    const parentPage = parentPageLink.pathname.replace(dirRegex, "");
                    const setCookie = function (cname, cvalue, exdays) {
                        var d = new Date();
                        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                        var expires = "expires=" + d.toUTCString();
                        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                    }
                    setCookie("page", "page=" + parentPage, 365);
                }
            }
        }
    }
    setHomeCookie();
});