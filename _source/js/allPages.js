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

// splides / swipers
if ($('.splide__homePresentation').length) {
    var splide__homePresentation = new Splide('.splide__homePresentation', {
        type  : 'fade',
        rewind: true,
        arrows: true,
        autoplay: true,
        pagination: false,
    }).mount();
}
if ($('.splide__testimonials').length) {
    var splide__testimonials = new Splide('.splide__testimonials', {
        type  : 'loop',
        rewind: true,
        arrows: false,
        autoplay: true,
    }).mount();
}
if ($('.splide__insuranceQuote').length) {
    var splide__insuranceQuote = new Splide('.splide__insuranceQuote', {
        arrows: false,
        autoplay: false,
        pagination: false,
        autoHeight: false,
    } ).mount();
}

// modal
if ($('.l-modal').length) {
    $('.js-openModal').on('click', function(e) {
        e.preventDefault();
        var modalDestiny = $(this).attr('href');
        console.log(modalDestiny);
        $(modalDestiny).addClass('is-active');
        $('.l-modal__mask').addClass('is-active');
        $('body').css('overflow', 'hidden');
    });
    function closeModal() {
        $('body').css('overflow', 'auto');
        $('.l-modal__mask').removeClass('is-active');
        $('.l-modal').removeClass('is-active');
    }
    $('.l-modal__mask').on('click', function() {closeModal()});
    $('.l-modal__close').on('click', function() {closeModal()});
}


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