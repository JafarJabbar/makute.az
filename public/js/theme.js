;(function($) {
    "use strict";

	var nav_offset_top = $('header').height();
    /*-------------------------------------------------------------------------------
	  Navbar
	-------------------------------------------------------------------------------*/

	//* Navbar Fixed
    function navbarFixed(){
        if ( $('.main_header_area').length ){
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top ) {
                    $(".main_header_area").addClass("navbar_fixed");
                } else {
                    $(".main_header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();

    $(".carousel").swipe({

        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

            if (direction == 'left') $(this).carousel('next');
            if (direction == 'right') $(this).carousel('prev');

        },
        allowPageScroll:"vertical"

    });

    $(document).ready(function() {
        // Test for placeholder support
        $.support.placeholder = (function(){
            var i = document.createElement('input');
            return 'placeholder' in i;
        })();

        // Hide labels by default if placeholders are supported
        if($.support.placeholder) {
            $('.form-label').each(function(){
                $(this).addClass('js-hide-label');
            });

            // Code for adding/removing classes here
            $('.form-group').find('input, textarea').on('keyup blur focus', function(e){

                // Cache our selectors
                var $this = $(this),
                    $label = $this.parent().find("label");

                switch(e.type) {
                    case 'keyup': {
                        $label.toggleClass('js-hide-label', $this.val() == '');
                    } break;
                    case 'blur': {
                        if( $this.val() == '' ) {
                            $label.addClass('js-hide-label');
                        } else {
                            $label.removeClass('js-hide-label').addClass('js-unhighlight-label');
                        }
                    } break;
                    case 'focus': {
                        if( $this.val() !== '' ) {
                            $label.removeClass('js-unhighlight-label');
                        }
                    } break;
                    default: break;
                }
                // previous implementation with ifs
                /*if (e.type == 'keyup') {
                    if( $this.val() == '' ) {
                        $parent.addClass('js-hide-label');
                    } else {
                        $parent.removeClass('js-hide-label');
                    }
                }
                else if (e.type == 'blur') {
                    if( $this.val() == '' ) {
                        $parent.addClass('js-hide-label');
                    }
                    else {
                        $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
                    }
                }
                else if (e.type == 'focus') {
                    if( $this.val() !== '' ) {
                        $parent.removeClass('js-unhighlight-label');
                    }
                }*/
            });
        }
    });




    /*----------------------------------------------------*/
    /*  Clients Slider2
    /*----------------------------------------------------*/
    function other_slider(){
        if ( $('.other_service_slider').length ){
            $('.other_service_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 3,
                nav:true,
                autoplay: false,
                smartSpeed: 1500,
                dots: false,
                navContainer: ".other_service_slider",
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    767: {
                        items: 2,
                    },
                    1050: {
                        items: 3,
                    }
                }
            })
        }
    }
    other_slider();


    /*----------------------------------------------------*/
    /*  Clients Slider2
    /*----------------------------------------------------*/
    function client_slider(){
        if ( $('.clients_slider').length ){
            $('.clients_slider').owlCarousel({
                loop:true,
                margin: 25,
                items: 6,
                nav:false,
                autoplay: false,
                smartSpeed: 1500,
                dots: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                    },
                    500: {
                        items: 4,
                    },
                    768: {
                        items: 6,
                    }
                }
            })
        }
    }
    client_slider();


    /*----------------------------------------------------*/
    /*  Main Slider
    /*----------------------------------------------------*/
    $('.main-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })




    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });


    $(window).load(function() {
        // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 177,
            itemMargin: 28,
            asNavFor: '#slider',
            controlsContainer: $("#carousel"),
            customDirectionNav: $(".custom-navigation a")
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel",
            directionNav: false,
        });
    });


    $(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });

    $(".our_skill_inner").each(function() {
        $(this).waypoint(function() {
            var progressBar = $(".progress-bar");
            progressBar.each(function(indx){
                $(this).css("width", $(this).attr("aria-valuenow") + "%")
            })
        }, {
            triggerOnce: true,
            offset: 'bottom-in-view'

        });
    });

    /*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/
    if ( $('#mapBox').length ){
        var $lat = $('#mapBox').data('lat');
        var $lon = $('#mapBox').data('lon');
        var $zoom = $('#mapBox').data('zoom');
        var $marker = $('#mapBox').data('marker');
        var $info = $('#mapBox').data('info');
        var $markerLat = $('#mapBox').data('mlat');
        var $markerLon = $('#mapBox').data('mlon');
        var map = new GMaps({
            el: '#mapBox',
            lat: $lat,
            lng: $lon,
            scrollwheel: false,
            scaleControl: true,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            zoom: $zoom,
                styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#fdea06"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ]
            });

            map.addMarker({
                lat: $markerLat,
                lng: $markerLon,
                icon: $marker,
                infoWindow: {
                  content: $info
                }
            })
        }



})(jQuery)

(function ($) {
    "use strict";





    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
            hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }


})(jQuery);
