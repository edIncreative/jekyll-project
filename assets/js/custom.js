jQuery.noConflict()(function($) {
    "use strict";
    $(window).load(function() {
        $('.oi_first_portfolio_content').css('height', $('.oi_first_portfolio_attach').outerHeight());
        $('.oi_first_portfolio_content_holder').css('margin-top', (($('.oi_first_portfolio_content').height() - $('.oi_first_portfolio_content_holder').height()) / 2));
    });

    if ($("div").is("#cbox")) {
        $('#cbox').jflickrfeed({
            limit: 10,
            qstrings: {
                id: "52617155@N08"
            },
            itemTemplate: '<div class="oi_flickr_item">' +
                '<a rel="prettyPhoto[flickr]" href="{{image_b}}" title="{{title}}">' +
                '<img src="{{image_s}}"/>' +
                '</a>' +
                '</div>'
        }, function(data) {
            $('#cbox a').prettyPhoto({
                opacity: 0.80,
                default_width: 200,
                default_height: 344,
                hideflash: false,
                modal: false,
                social_tools: false
            });
        });
    }

    if ($("div").is("#map")) {
        $("#map").gmap3({

            marker: {
                address: "93 Worth St, New York, NY",
                options: {
                    icon: "assets/css/img/marker.png"
                }
            },
            map: {
                options: {
                    styles: [{
                        stylers: [{
                            "saturation": -100
                        }, {
                            "lightness": 0
                        }, {
                            "gamma": 0.5
                        }]
                    } ],
                    zoom: 13,
                    scrollwheel: false,
                    draggable: true
                }
            }
        });
    }



    // PORTFOLIO FILTERING - ISOTOPE
    //**********************************
    var $container = $('.portfolio_container');

    if ($container.length) {
        $container.waitForImages(function() {

            // initialize isotope
            $container.isotope({
                itemSelector: '.oi_strange_portfolio_item',
                layoutMode: 'masonry'
            });

            $('#filters a:first-child').addClass('filter_current');
            // filter items when filter link is clicked
            $('#filters a').click(function() {
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector
                });
                $(this).removeClass('filter_button').addClass('filter_button filter_current').siblings().removeClass('filter_button filter_current').addClass('filter_button');

                return false;
            });

        }, null, true);
    };

    $('#port_slider').flexslider({
        prevText: "", //String: Set the text for the "previous" directionNav item
        nextText: "",
        animation: "fade",
        useCSS: false,
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        slideshowSpeed: 3000,
        pauseOnHover: true,
        start: function(slider) {
            slider.removeClass('oi_flex_loading');
        }
    });

    // Back to Top
    $("#back-top").hide();

    if ($(window).width() > 991) {
        $('body').append('<div id="back-top"><a href="#top"><i class="fa fa-chevron-up"></i></a></div>')
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#back-top a').click(function(e) {
            e.preventDefault();
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    };

    if (($("body").height() - $(window).height()) > 300) {
		var stickyNavTopp = 0;
        var stickyNavTop = $('.oi_header_holder').offset().top;
        stickyNavTopp = stickyNavTop + $('.oi_header_holder').outerHeight();
        $(window).scroll(function() {
            if ($(this).scrollTop() > stickyNavTopp) {
                $('.oi_header_holder').addClass('oi_sticky').fadeIn();
                $('body').addClass('oi_sticky_body');
                $('.oi_sticky_body .wide_cont').css('padding-top', $('.oi_header_holder').outerHeight());

            } else {
                $('.oi_header_holder').removeClass('oi_sticky').removeAttr('style');
                $('body').removeClass('oi_sticky_body')
                $('.wide_cont').removeAttr('style');
            }
        });
    };



    if ($("body").hasClass("home")) {
        $('.wide_cont').css('visibility', 'hiden');
        // makes sure the whole site is loaded
        jQuery("#status").css('display', 'block');
        jQuery("#preloader").css('display', 'block');
        $('.wide_cont').css('visibility', 'visible');
        // will first fade out the loading animation
        jQuery("#status").delay(1100).fadeOut("slow");
        // will fade out the whole DIV that covers the website.
        jQuery("#preloader").delay(1100).fadeOut("slow");

    } else {
        jQuery("#status").css('display', 'none');
        jQuery("#preloader").css('display', 'none');
    };
    $('.img-circle').addClass('img-responsive');



    $('.oi_xs_menu').click(function() {
        $('.header_menu').toggle();
    });

    $('.oi_blog_item_main_content a').addClass('colored');
    $('.alignnone img').addClass('img-responsive');
    $(document).ready(function() { // after loading the DOM
        $("#ajax-contact-form").submit(function() {
            // this points to our form
            var str = $(this).serialize(); // Serialize the data for the POST-request
            var result = '';
            $.ajax({

                type: "POST",
                url: 'contact.php',
                data: str,
                success: function(msg) {
                    if (msg == 'OK') {
                        result = '<div class="alert alert-info">Message was sent to website administrator, thank you!</div>';
                        $("#fields").hide();
                    } else {
                        result = msg;
                    }
                    $("#note").html(result);

                }
            });
            return false;
        });
    });
});