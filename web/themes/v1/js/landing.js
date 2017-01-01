"use strict";
jQuery(document).ready(function ($) {




// MailChimp OPTIN URL
    var mailchimpUrl = "http://facebook.us8.list-manage.com/subscribe/post-json?u=85f515a08b87483d03fee7755&id=dff5d2324f"; //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".  


    $(window).load(function () {
        $(".loaded").fadeOut();
        $(".preloader").delay(1000).fadeOut("slow");
    });
    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $( '.navbar-collapse' ).find( 'a[href*=#]:not([href=#])' ).on( 'click', function ( ) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - -30)
                }, 1000);
                if ($('.navbar-toggle').css('display') != 'none') {
                    $(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });



    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

    var wow = new WOW({
        mobile: false // trigger animations on mobile devices (default is true)
    });
    wow.init();

// magnificPopup

    $('.portfolio-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.video-link').magnificPopup({
        type: 'iframe'
    });



// slick slider active Home Page Tow
    $(".yam_mission_slide").slick({
        dots: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        prevArrow: "<i class='fa fa-angle-left nextprevleft'></i>",
        nextArrow: "<i class='fa fa-angle-right nextprevright'></i>",
        autoplay: true,
        autoplaySpeed: 2000
    });


    $(".main_yam_client_test_slide").slick({
        dots: false,
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<i class='fa fa-angle-left nextprevleft'></i>",
        nextArrow: "<i class='fa fa-angle-right nextprevright'></i>",
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


//    team slider home1 

    $(".main_team_slider").slick({
        dots: true,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        prevArrow: "<i class='fa fa-angle-left nextprevleft'></i>",
        nextArrow: "<i class='fa fa-angle-right nextprevright'></i>",
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


//    team slider home2

    $(".main_duration_slide").slick({
        dots: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<i class='fa fa-angle-left nextprevleft'></i>",
        nextArrow: "<i class='fa fa-angle-right nextprevright'></i>",
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });


// Carousel slider 

    $('.carousel').carousel({
        interval: 2000,
        beforeUpdate: true,
        autoplay: false
    });

//---------------------------------------------
// Counter 
//---------------------------------------------

    $('.statistic-counter').counterUp({
        delay: 10,
        time: 2000
    });

//---------------------------------------------
// Scroll Up 
//---------------------------------------------

    $( '.scrollup' ).on( 'click', function ( ) {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });







//Accordion 

    $(".details_features_accordion").collapse({
        accordion: true,
        open: function () {
            this.addClass("open");
            this.css({height: this.children().outerHeight()});
        },
        close: function () {
            this.css({height: "0px"});
            this.removeClass("open");
        }
    });


//FAQ Page 

    $("#faq_main_content").collapse({
        accordion: true,
        open: function () {
            this.addClass("open");
            this.css({height: this.children().outerHeight()});
        },
        close: function () {
            this.css({height: "0px"});
            this.removeClass("open");
        }
    });




//  Mixitup Portfolio

    $('#mixcontent').mixItUp({
        animation: {
            effects: 'fade translateX(50%)',
            reverseOut: true,
            duration: 1000
        },
        load: {
            filter: 'all'
        }
    });


//Team Skillbar active js

    jQuery('.teamskillbar').each(function () {
        jQuery(this).find('.teamskillbar-bar').animate({
            width: jQuery(this).attr('data-percent')
        }, 6000);
    });


    /* ------------------------------------------------
     ---  MAILCHIMP                 ------
     --------------------------------------------------- */

    $( '#mailchimp' ).ajaxChimp( {
        callback: mailchimpCallback,
        url: mailchimpUrl //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".  
    } );
    function mailchimpCallback( resp ) {
        var rm = "0 -";
        var msgs = resp.msg.replace( rm, '' );
        if ( resp.result === 'success' ) {
            $( '.subscription-success' ).html( '<h4><i class="fa fa-check success-msg"></i> ' + msgs + '</h4>' ).fadeIn( 1000 );
            $( '.subscription-error' ).fadeOut( 500 );
        } else if ( resp.result === 'error' ) {
            $( '.subscription-error' ).html( '<h4><i class="fa fa-times error-msg"></i> ' + msgs + '</h4>' ).fadeIn( 1000 );

        }
    }

    //End

});


// nav menu
$(document).on("scroll", function () {
    if ($(document).scrollTop() > 0) {
        $("nav").addClass("scroll_menu");
    } else {
        $("nav").removeClass("scroll_menu");
    }
});

//for Preloader

$(window).load(function () {
    $("#loading").fadeOut(500);
});