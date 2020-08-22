// init base functions
$(window).on('load', function () {
    classOnBody($('main').attr('id'));
    scrollDirection();
    initGettersAndSetters();
    changeTouchClickText();
});
$(window).on('hashchange', function () {
    initGettersAndSetters();
});

// init AOS
if (is.not.ie()) {
    AOS.init();
} else {
    $('*').removeAttr("data-aos");
}

// splides
var splide__homePresentation = new Splide('.splide__homePresentation', {
    type  : 'fade',
    rewind: true,
    arrows: false,
    autoplay: true,
    pagination: false,
}).mount();
var splide__testimonials = new Splide('.splide__testimonials', {
    type  : 'loop',
    rewind: true,
    arrows: false,
    autoplay: true,
}).mount();

// nav
if ($('.l-nav').length) {
    // sub menus
    $('.l-nav__menu .c-toggleList__content > ul li a').on('click', function() {
        $(this).addClass('is-active');
    });
    // open menu
    $('.c-hamburguer').on('click', function() {
        $(this).toggleClass('is-active');
        $('.l-nav__contentHero').toggleClass('is-active');
    });
}