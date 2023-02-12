/*-----------------------------------------------------------------------------------

    Theme Name: Archo
    Theme URI: http://
    Description: Architecture & Interior Design HTML Template
    Author: UI-ThemeZ
    Author URI: http://themeforest.net/user/UI-ThemeZ
    Version: 1.0

-----------------------------------------------------------------------------------*/


$(function () {

    "use strict";

    /* ===============================  Swiper slider  =============================== */


    var parallaxSlider;
    var parallaxSliderOptions = {
        speed: 1000,
        autoplay: true,
        parallax: true,
        loop: true,
        pagination: {
            el: '.slider .parallax-slider .swiper-pagination',
            clickable: true
        },
        on: {
            init: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    $(swiper.slides[i])
                        .find('.bg-img')
                        .attr({
                            'data-swiper-parallax': 0.75 * swiper.width
                        });
                }
            },
            resize: function () {
                this.update();
            }
        },

        pagination: {
            el: '.slider .parallax-slider .swiper-pagination',
            type: 'fraction',
        },

        navigation: {
            nextEl: '.slider .parallax-slider .next-ctrl',
            prevEl: '.slider .parallax-slider .prev-ctrl'
        }
    };
    parallaxSlider = new Swiper('.slider .parallax-slider', parallaxSliderOptions);

    var swiperWorkMetro = new Swiper('.metro .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 0,
        speed: 1000,
        loop: true,
        centeredSlides: true,

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 0
            }
        },

        pagination: {
            el: '.metro .swiper-pagination',
            type: 'progressbar',
        },

        navigation: {
            nextEl: '.metro .next-ctrl',
            prevEl: '.metro .prev-ctrl'
        },
    });

    var swiperWorkSlider = new Swiper('.slider-scroll .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 30,
        mousewheel: true,
        centeredSlides: true,
        speed: 1000,
        loop: true,

        breakpoints: {
            320: {
                slidesPerView: 1
            },
            480: {
                slidesPerView: 1
            },
            640: {
                slidesPerView: 2
            },
            991: {
                slidesPerView: 2
            }
        },

        navigation: {
            nextEl: '.slider-scroll .next-ctrl',
            prevEl: '.slider-scroll .prev-ctrl'
        }
    });


    const slider = document.getElementById("js-cta-slider");
    const sliderNext = document.getElementById("js-cta-slider-next");
    const sliderPrevious = document.getElementById("js-cta-slider-previous");

    const interleaveOffset = 0.75;

    const swiper = new Swiper(slider, {
    loop: true,
    direction: "vertical",
    speed: 800,
    grabCursor: true,
    watchSlidesProgress: true,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false
    },
    pagination: {
        el: '.slid-half .swiper-pagination',
        type: 'fraction',
    },
    navigation: {
    nextEl: sliderNext,
    prevEl: sliderPrevious
    },
    on: {
    progress: function() {
        let swiper = this;

        for (let i = 0; i < swiper.slides.length; i++) {
        let slideProgress = swiper.slides[i].progress;
        let innerOffset = swiper.height * interleaveOffset;
        let innerTranslate = slideProgress * innerOffset;

        TweenMax.set(swiper.slides[i].querySelector(".slide-inner"), {
            y: innerTranslate,
        });
        }
    },
    touchStart: function() {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = "";
        }
    },
    setTransition: function(speed) {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = speed + "ms";
        swiper.slides[i].querySelector(".slide-inner").style.transition =
            speed + "ms";
        }
    }
    }
    });

});



// === window When Loading === //

$(window).on("load", function () {


    /* ===============================  SPLITTING TEXT  =============================== */

    Splitting();


    /* ===============================  thumparallax  =============================== */

    var imageUp = document.getElementsByClassName('thumparallax');
    new simpleParallax(imageUp, {
        delay: 1,
        scale: 1.1
    });

    var imageDown = document.getElementsByClassName('thumparallax-down');
    new simpleParallax(imageDown, {
        orientation: 'down',
        delay: 1,
        scale: 1.1
    });


    /* ===============================  isotope Masonery  =============================== */

    $('.gallery').isotope({
        itemSelector: '.items',
      });

    var $gallery = $('.gallery').isotope();

    $('.filtering').on('click', 'span', function () {
        var filterValue = $(this).attr('data-filter');
        $gallery.isotope({ filter: filterValue });
    });

    $('.filtering').on('click', 'span', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });


    /* ===============================  contact validator  =============================== */

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data) {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    });

});