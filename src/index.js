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
        // e.preventDefault();
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
        arrows: true,
        dots: false,
        adaptiveHeight: true,
        prevArrow: '<div class="prev"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '<g clip-path="url(#clip0_1404_57519)">\n' +
            '<path d="M13.9998 6.00723H3.12977L6.75977 1.64723C7.10977 1.22723 7.05977 0.597232 6.62977 0.237232C6.19977 -0.122768 5.57977 -0.0627678 5.21977 0.367232L0.219766 6.36723C0.209766 6.39723 0.199766 6.42723 0.179766 6.46723C0.139766 6.52723 0.109766 6.57723 0.0797656 6.64723C0.0597656 6.69723 0.0397656 6.75723 0.0297656 6.81723C0.0197656 6.87723 0.00976562 6.94723 0.00976562 7.00723C0.00976562 7.06723 0.0197656 7.13723 0.0297656 7.19723C0.0397656 7.25723 0.0597656 7.31723 0.0797656 7.37723C0.109766 7.43723 0.139766 7.49723 0.179766 7.55723C0.199766 7.58723 0.209766 7.62723 0.229766 7.65723L5.22977 13.6572C5.42977 13.8872 5.70977 14.0072 5.99977 14.0072C6.22977 14.0072 6.44977 13.9272 6.63977 13.7772C7.05977 13.4272 7.11977 12.7972 6.76977 12.3672L3.12977 8.00723H13.9998C14.5498 8.00723 14.9998 7.55723 14.9998 7.00723C14.9998 6.45723 14.5498 6.00723 13.9998 6.00723Z" fill="#2F80ED"/>\n' +
            '</g>\n' +
            '<defs>\n' +
            '<clipPath id="clip0_1404_57519">\n' +
            '<rect width="15" height="15" fill="white"/>\n' +
            '</clipPath>\n' +
            '</defs>\n' +
            '</svg></div>',
        nextArrow: '<div class="next"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '<g clip-path="url(#clip0_1404_77489)">\n' +
            '<path d="M1.01 6.00003H11.88L8.25 1.64003C7.9 1.22003 7.95 0.59003 8.38 0.23003C8.81 -0.12997 9.43 -0.06997 9.79 0.36003L14.79 6.36003C14.8 6.39003 14.81 6.42003 14.83 6.46003C14.87 6.52003 14.9 6.57003 14.93 6.64003C14.95 6.69003 14.97 6.75003 14.98 6.81003C14.99 6.87003 15 6.94003 15 7.00003C15 7.06003 14.99 7.13003 14.98 7.19003C14.97 7.25003 14.95 7.31003 14.93 7.37003C14.9 7.43003 14.87 7.49003 14.83 7.55003C14.81 7.58003 14.8 7.62003 14.78 7.65003L9.78 13.65C9.58 13.88 9.3 14 9.01 14C8.78 14 8.56 13.92 8.37 13.77C7.95 13.42 7.89 12.79 8.24 12.36L11.88 8.00003H1.01C0.46 8.00003 0.0100002 7.55003 0.0100002 7.00003C0.0100002 6.45003 0.46 6.00003 1.01 6.00003Z" fill="#2F80ED"/>\n' +
            '</g>\n' +
            '<defs>\n' +
            '<clipPath id="clip0_1404_77489">\n' +
            '<rect width="15" height="15" fill="white"/>\n' +
            '</clipPath>\n' +
            '</defs>\n' +
            '</svg>\n</div>',
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 319,
                settings: {
                    arrows: false,
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 559,
                settings: {
                    arrows: false,
                    dots: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 899,
                settings: {
                    arrows: false,
                    dots: true,
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


