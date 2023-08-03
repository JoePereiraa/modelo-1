
//*HOME
//Banner
$('.banner-slider').owlCarousel({
    mouseDrag: true,
    items: 1,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 10000,
    nav: true,
    navText: [
        "<img src=\"default/image/icons/ico_arrow-left.png\">",
        "<img src=\"default/image/icons/ico_arrow-right.png\">"
    ],
    dots: true,
    loop: false
});
//Category
$('.category-slider').owlCarousel({
    mouseDrag: false,
    autoplay: false,
    autoplayTimeout: 7000,
    nav: true,
    navText: [
        "<img src=\"default/image/icons/ico_arrow-left.png\">",
        "<img src=\"default/image/icons/ico_arrow-right.png\">"
    ],
    dots: true,
    loop: true,
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 3,
            margin: 32
        }
    }
});
//Products
$('.products-slider').owlCarousel({
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout: 8000,
    nav: true,
    navText: [
        "<img src=\"default/image/icons/ico_arrow-left.png\">",
        "<img src=\"default/image/icons/ico_arrow-right.png\">"
    ],
    dots: true,
    loop: true,
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 4,
            margin: 18
        }
    }
});
//Depositions
$('.clients-slider').owlCarousel({
    mouseDrag: false,
    autoplay: false,
    autoplayTimeout: 7000,
    nav: true,
    navText: [
        "<img src=\"default/image/icons/ico_arrow-left.png\">",
        "<img src=\"default/image/icons/ico_arrow-right.png\">"
    ],
    dots: true,
    loop: true,
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 3,
            margin: 50
        }
    }
});
//Courses
$('.compr-slider').owlCarousel({
    mouseDrag: false,
    autoplay: false,
    autoplayTimeout: 7000,
    nav: true,
    navText: [
        "<img src=\"default/image/icons/ico_arrow-left.png\">",
        "<img src=\"default/image/icons/ico_arrow-right.png\">"
    ],
    dots: true,
    loop: true,
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 3,
            margin: 40
        }
    }
});
//Blog
$('.blog-slider').owlCarousel({
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,v: true,
    navText: [
        "<img src=\"default/image/several/arrow-left.png\">",
        "<img src=\"default/image/several/arrow-right.png\">"
    ],
    dots: false,
    loop: true,
    slideBy: 1,
    dots: true,
    responsive: {
        0: {
            items: 1,
        },

        992: {
            items: 3,
            margin: 23,
        }
    }
});

//*Product
$('.product-inner-slider').owlCarousel({
    mouseDrag: true,
    autoplay: false,
    nav: false,
    dots: false,
    loop: false,
    items: 1
});
//*Curses
$('.benefits-slider').owlCarousel({
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout: 7000,
    nav: false,
    dots: true,
    loop: true,
    responsive: {
        0: {
            items: 1,
        },
        992: {
            items: 3,
            margin: 30
        }
    }
});

//*BlOG
$('.relations-slider').owlCarousel({
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout: 7000,
    nav: false,
    dots: true,
    loop: true,
    responsive: {
        0: {
            items: 1,
        },
        992: {
            items: 3,
            margin: 36
        }
    }
});

//*ABOUT
$('.ours-slider').owlCarousel({
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout: 7000,
    nav: true,
    navText: [
        "<img src=\"default/image/icons/ico_arrow-left.png\">",
        "<img src=\"default/image/icons/ico_arrow-right.png\">"
    ],
    dots: false,
    loop: true,
    items: 1,
    margin: 20
});
$('.space-slider').owlCarousel({
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout: 7000,
    nav: false,
    dots: true,
    loop: true,
    responsive: {
        0: {
            items: 1,
        },
        992: {
            items: 4,
            margin: 10
        }
    }
});
$('.know-slider').owlCarousel({
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout: 7000,
    nav: true,
    navText: [
        "<img src=\"default/image/icons/ico_arrow-left.png\">",
        "<img src=\"default/image/icons/ico_arrow-right.png\">"
    ],
    dots: false,
    loop: true,
    responsive: {
        0: {
            items: 1,
        },
        992: {
            items: 2,
            margin: 32
        }
    }
});

//*WORK
$('.areas-slider').owlCarousel({
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout: 8000,
    nav: false,
    dots: true,
    loop: true,
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 3,
            margin: 20,
            stagePadding: 265
        }
    }
});
