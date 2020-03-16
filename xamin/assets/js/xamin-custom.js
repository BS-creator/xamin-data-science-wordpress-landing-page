/*
Template: Xamin - Data science WordPress landing Page
Author: iqonicthemes.in
Version: 2.1
Design and Developed by: iqonicthemes.in
*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

1.Page Loader
2.Isotope
3.Masonry
4.Slick
5.Swiper
6.Progress Bar
7.Counter
8.Coming soon
6.Timer
7.Back To Top
8.Accordion
9.Magnific Popup
10.Owl Carousel
11.Wow Animation
12.Skrollr
13.Tab

------------------------------------------------
Index Of Script
----------------------------------------------*/
(function(jQuery) {

    "use strict";
    jQuery(document).ready(function() {

        jQuery(window).on('load', function(e) {

            jQuery('ul.page-numbers').addClass('justify-content-center');

            /*------------------------
            Page Loader
            --------------------------*/
            jQuery("#load").fadeOut();
            jQuery("#loading").delay(0).fadeOut("slow");


            /*------------------------
            Isotope
            --------------------------*/
            jQuery('.isotope').isotope({
                itemSelector: '.iq-grid-item',
            });

            /*------------------------------
            filter items on button click
            -------------------------------*/
            jQuery('.isotope-filters').on('click', 'button', function() {
                var filterValue = jQuery(this).attr('data-filter');
                jQuery('.isotope').isotope({
                    resizable: true,
                    filter: filterValue
                });
                jQuery('.isotope-filters button').removeClass('show active');
                jQuery(this).addClass('show active');
            });


            /*------------------------
            Masonry
            --------------------------*/
            var jQuerymsnry = jQuery('.iq-masonry-block .iq-masonry');
            if (jQuerymsnry) {
                var jQueryfilter = jQuery('.iq-masonry-block .isotope-filters');
                jQuerymsnry.isotope({
                    percentPosition: true,
                    resizable: true,
                    itemSelector: '.iq-masonry-block .iq-masonry-item',
                    masonry: {
                        gutterWidth: 0
                    }
                });
                // bind filter button click
                jQueryfilter.on('click', 'button', function() {
                    var filterValue = jQuery(this).attr('data-filter');
                    jQuerymsnry.isotope({
                        filter: filterValue
                    });
                });

                jQueryfilter.each(function(i, buttonGroup) {
                    var jQuerybuttonGroup = jQuery(buttonGroup);
                    jQuerybuttonGroup.on('click', 'button', function() {
                        jQuerybuttonGroup.find('.active').removeClass('active');
                        jQuery(this).addClass('active');
                    });
                });
            }

            /*------------------------
                Slick Testimonial
            --------------------------*/
            jQuery(".vertical-center").slick({
                dots: true,
                vertical: true,
                centerMode: true,
            });


            /*------------------------
                About-style
            --------------------------*/
            jQuery(".effect-box .effect-btn").click(function() {
                jQuery(this).parent().toggleClass("main");
            });
            /*------------------------
                Slick
            --------------------------*/

            jQuery('.center').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 1,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }]
            });
            /*------------------------
                    Swiper
             --------------------------*/
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 0,
                loopFillGroupWithBlank: true,
                scrollbar: {
                    el: '.swiper-scrollbar',
                    hide: true,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 0,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    }
                }
            });
            /*------------------------
            Progress Bar
            --------------------------*/
            jQuery('.iq-progress-bar > span').each(function() {
                var jQuerythis = jQuery(this);
                var width = jQuery(this).data('percent');
                jQuerythis.css({
                    'transition': 'width 2s'
                });
                setTimeout(function() {
                    jQuerythis.appear(function() {
                        jQuerythis.css('width', width + '%');
                    });
                }, 500);
            });


            /*----------------
            Counter
            ---------------------*/
            jQuery('.timer').countTo();


            /*----------------
            Coming soon
            ---------------------*/
            var $expire_dates = jQuery('.expire_date').attr('id');

            jQuery('.example').countdown({

                date: $expire_dates,
                offset: -8,
                date: '10/01/2019 23:59:59',
                day: 'Day',
                days: 'Days'
            }, function() {

            });

             /*----------------
            Timer
            ---------------------*/
            if ( jQuery( ".expire_date" ).length ) {
                var $l;
                var $i;
                var $j;
            $l = jQuery( ".expire_date").length;

            $i=1;
            jQuery('.expire_date').each(function(){
                jQuery(this).addClass('expire_date_'+$i);
                $i++;
            });

            $i=1;
            jQuery('.example').each(function(){
                jQuery(this).addClass('example_'+$i);
                $i++;
            });

                for($i=1; $i<=$l; $i++) {

                    var $expire_dates = jQuery('.expire_date_'+$i).attr('id');

                    jQuery('.example_'+$i).countdown({
                        date: $expire_dates,
                        offset: -8,
                        day: 'Day',
                        days: 'Days'
                    }, function () {

                    });
                }
            }




            /*------------------------
            Back To Top
            --------------------------*/
            jQuery('#back-to-top').fadeOut();
            jQuery(window).on("scroll", function() {
                if (jQuery(this).scrollTop() > 250) {
                    jQuery('#back-to-top').fadeIn(1400);
                } else {
                    jQuery('#back-to-top').fadeOut(400);
                }
            });

            // scroll body to 0px on click
            jQuery('#top').on('click', function() {
                jQuery('top').tooltip('hide');
                jQuery('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            /*------------------------
            Accordion
            --------------------------*/
            jQuery('.iq-accordion .iq-accordion-block .accordion-details').hide();
            jQuery('.iq-accordion .iq-accordion-block:first').addClass('accordion-active').children().slideDown('slow');
            jQuery('.iq-accordion .iq-accordion-block').on("click", function() {
                if (jQuery(this).children('div.accordion-details ').is(':hidden')) {
                    jQuery('.iq-accordion .iq-accordion-block').removeClass('accordion-active').children('div.accordion-details ').slideUp('slow');
                    jQuery(this).toggleClass('accordion-active').children('div.accordion-details ').slideDown('slow');
                }
            });

           /*------------------------
            Accordion
            --------------------------*/
            jQuery('.iq-faq .iq-block .iq-details').hide();
            jQuery('.iq-faq .iq-block:first').addClass('iq-active').children().slideDown('slow');
            jQuery('.iq-faq .iq-block').on("click", function() {
                if (jQuery(this).children('div').is(':hidden')) {
                    jQuery('.iq-faq .iq-block').removeClass('iq-active').children('div').slideUp('slow');
                    jQuery(this).toggleClass('iq-active').children('div').slideDown('slow');
                }
            });
            /*------------------------
            Magnific Popup
            --------------------------*/
            jQuery('.popup-gallery').magnificPopup({
                delegate: 'a.popup-img',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function(item) {
                        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                    }
                }
            });


            jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });

            /*------------------------
            Owl Carousel
            --------------------------*/
            jQuery('.owl-carousel').each(function() {
                var jQuerycarousel = jQuery(this);
                jQuerycarousel.owlCarousel({
                    items: jQuerycarousel.data("items"),
                    loop: jQuerycarousel.data("loop"),
                    margin: jQuerycarousel.data("margin"),
                    nav: jQuerycarousel.data("nav"),
                    dots: jQuerycarousel.data("dots"),
                    autoplay: jQuerycarousel.data("autoplay"),
                    autoplayTimeout: jQuerycarousel.data("autoplay-timeout"),
                    navText: ["<i class='fa fa-angle-left fa-2x'></i>", "<i class='fa fa-angle-right fa-2x'></i>"],
                    responsiveClass: true,
                    responsive: {
                        // breakpoint from 0 up
                        0: {
                            items: jQuerycarousel.data("items-mobile-sm"),
                            nav: false,
                            dots: true
                        },
                        // breakpoint from 480 up
                        480: {
                            items: jQuerycarousel.data("items-mobile"),
                            nav: false,
                            dots: true
                        },
                        // breakpoint from 786 up
                        768: {
                            items: jQuerycarousel.data("items-tab")
                        },
                        // breakpoint from 1023 up
                        1023: {
                            items: jQuerycarousel.data("items-laptop")
                        },
                        1199: {
                            items: jQuerycarousel.data("items")
                        }
                    }
                });
            });




            /*------------------------
            Wow Animation
            --------------------------*/
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: false,
                live: true
            });
            wow.init();


            /*------------------------
            scroller
            --------------------------*/
             if (jQuery(window).width() > 992) {
                skrollr.init({
                forceHeight: false
               });
            }


            jQuery('.sub-menu').css('display', 'none');
            jQuery('.sub-menu').prev().addClass('isubmenu');
            jQuery(".sub-menu").before('<i class="fa fa-angle-down toggledrop" aria-hidden="true"></i>');


            jQuery('.widget .fa.fa-angle-down, #main .fa.fa-angle-down').on('click', function() {
                jQuery(this).next('.children, .sub-menu').slideToggle();
            });

            jQuery("#top-menu .menu-item .toggledrop").off("click");
            if (jQuery(window).width() < 992) {
                jQuery('#top-menu .menu-item .toggledrop').on('click', function(e) {
                    e.preventDefault();
                    jQuery(this).next('.children, .sub-menu').slideToggle();
                });
            }
        });

        jQuery(window).on('resize', function() {
            "use strict";
            jQuery('.widget .fa.fa-angle-down, #main .fa.fa-angle-down').on('click', function() {
                jQuery(this).next('.children, .sub-menu').slideToggle();
            });

            jQuery("#top-menu .menu-item .toggledrop").off("click");
            if (jQuery(window).width() < 992) {
                jQuery('#top-menu .menu-item .toggledrop').on('click', function(e) {
                    e.preventDefault();
                    jQuery(this).next('.children, .sub-menu').slideToggle();
                });
            }
        });

        /*------------------------
        Tabs
        --------------------------*/
        jQuery(window).on('scroll', function(e) {
            var nav = jQuery('#pills-tab');
            if (nav.length) {
                var contentNav = nav.offset().top - window.outerHeight;
                if (jQuery(window).scrollTop() >= (contentNav)) {
                    e.preventDefault();
                    jQuery('#pills-tab li a').removeClass('active');
                    jQuery('#pills-tab li a[aria-selected=true]').addClass('active');
                }
            }
        });
        jQuery(window).on('scroll', function(e) {
            var nav = jQuery('#features');
            if (nav.length) {
                var contentNav = nav.offset().top - window.outerHeight;
                if (jQuery(window).scrollTop() >= (contentNav)) {
                    e.preventDefault();
                    jQuery('#features .row li a').removeClass('active');
                    jQuery('#features .row li a[aria-selected=true]').addClass('active');
                }
            }
        });

        /*---------------------------
        Tabs
        ---------------------------*/
        jQuery(document).ready(function(){
            var a=jQuery('.nav.nav-pills').each(function(){
                var b =jQuery(this).find('a.active').attr('href');
                activaTab(b);
            })
        });

        function activaTab(pill){
            jQuery(pill).addClass('active show');
        };

    });
})(jQuery);