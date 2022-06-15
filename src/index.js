import * as slick from 'slick-carousel';
import '@fancyapps/fancybox/dist/jquery.fancybox.min.css'
import './styles/main.scss';

// const initDefaultModule = module => module.default.init();
const routes = {
    singlePage: () => {
        //import("./styles/update.scss");
    },
    article: () => {
        import("./styles/article_page.sass");
    },
};

const rootDomElementSelector = "body";
const PAGE_CLASS_PREFIX = "page--";

document.addEventListener("DOMContentLoaded", () => {
    const pageIndicator = document
        .querySelector(rootDomElementSelector)
        .className
        .split(" ")
        .find(cssClass => cssClass.startsWith(PAGE_CLASS_PREFIX));

    const pageName = pageIndicator && pageIndicator.slice(PAGE_CLASS_PREFIX.length);

    pageName && routes[pageName]();
});



import $ from 'jquery';
window.jQuery = $;
require("@fancyapps/fancybox");
require('./js/custom.js');

const searchBtn = document.querySelector('#search-btn');
const searchForm = document.querySelector('#search-form');
searchBtn.addEventListener('click', () => {
    searchForm.classList.add('show');
})

$(document).ready(function() {

	const header = document.querySelector("header");
    const page = document.querySelector('.page');
    const sticky = header.offsetTop;
    function handleStickyHeader() {
        if (window.scrollY > sticky) {
            page.classList.add("sticky");
        } else {
            page.classList.remove("sticky");
        }
    }

    window.onscroll = function () {
        handleStickyHeader();
    }

    // todo: forms handler
    $('form.feedback').on('submit', function (e) {

        e.preventDefault();

        const successBlock = $(this).find('.form__success');
        $(successBlock).css('display', 'flex');

        //return false;
    })

    $('.seo__list ul li').on('click', function (e) {
        e.preventDefault();
        const subItems = $(this).find('ul');
        if (subItems.length > 0) {
            $('.seo__list ul li.active').each( (i, item) => {
                $(item).removeClass('active');
            })
            $(this).addClass('active')
        }
    })

    $('.collapsed li').on('click', function (e) {
        e.preventDefault()
        const subItem = $(this).find('div');
        if (subItem.length > 0) {
            $('.collapsed li.active').each( (i, item) => {
                $(item).removeClass('active');
            })
            $(this).addClass('active');
        }
    })

    $('.reviews__slider').slick({
        arrows: false,
        dots: true,
        mobileFirst: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    appendDots: $('.reviews__dots')
                }
            }
        ]
    });

    $('.actions__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: 'unslick'
            }
        ]
    });

    $('.employees__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 899,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    appendDots: $('.employees__dots')
                }
            }
        ]
    });

    $('.advantages__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 899,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    appendDots: $('.advantages__dots')
                }
            }
        ]
    });

    $('.certificates__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 899,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    appendDots: $('.certificates__dots')
                }
            }
        ]
    });

    /*
    $('.tariffs__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 899,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 1199,
                settings: 'unslick'
            }
        ]
    });
    */

    $('.cases__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                },

            },
            {
                breakpoint: 899,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                },

            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    appendDots: $('.cases__dots')
                },

            }
        ]
    });

    $('.who-did-kf__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 899,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    appendDots: $('.who-did-kf__dots')
                }
            }
        ]
    });

    $('.articles__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 899,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    appendDots: $('.articles__dots')
                }
            }
        ]
    });

    $('.conferences__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 899,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 1199,
                settings: 'unslick'
            }
        ]
    });

    $('.what-check__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: 'unslick'
            }
        ]
    });

    $('.why__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 899,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    appendDots: $('.why__dots')
                }
            }
        ]
    });

    $('.results__slider').slick({
        arrows: false,
        dots: false,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
        ],
    });

    $('.results__slider').on('swipe', function(event, slick, direction){
        $('.results__nav li').removeClass('active');
        $('.results__nav li').eq(slick.currentSlide).addClass('active');
    });

    $(document).on('click', '.results__nav li', function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('.results__slider').slick('slickGoTo', $(this).index());
    });

    $('.confs__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 899,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    appendDots: $('.confs__dots')
                }
            }
        ]
    });

    $('.photos__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    appendDots: $('.photos__dots')
                }
            }
        ]
    });

    $('.videos__slider').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    appendDots: $('.videos__dots')
                }
            }
        ]
    });

    $('.achievments__content').slick({
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 559,
                settings: 'unslick'
            }
        ]
    })

    $('ul.sub-menu__list').each(function (index, item) {
        $(item).filter(function(){
            return this.childElementCount > 5
        }).addClass('twoColumns');
    })

    $('.sub-menu__close').on('click', function() {
        $(this).parent('.sub-menu').hide();
    })

    $('#mobile-menu').on('click', function (e) {
        e.preventDefault();
        $('.mobile-menu').show();
        $('html').addClass('scroll-lock');
        return false;
    });
    $('.mobile-menu__close').on('click', function () {
        $('.mobile-menu').hide();
        $('html').removeClass('scroll-lock');
    });

    $(document).on('click', '.results__more', function () {
        $(this).prev('ul').addClass('-toogled');
        $(this).remove();
        $('.results__slider').slick('unslick');
        $('.results__slider').slick({
            arrows: false,
            dots: false,
            adaptiveHeight: true,
            mobileFirst: true,
            responsive: [
            ],
        });
        return false;
    });

})


