jQuery(function ($) {
    $(document).ready(function () {
        $(".header-carousel").owlCarousel({
            loop: false,
            margin: 11,
            autoplay: false,
            autoplayTimeout: 3000,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });
    });
});
