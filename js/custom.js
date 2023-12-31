jQuery(function ($) {
    $(document).ready(function () {
        $(".sticky").parent().addClass("sticky");
        $(".site-header").addClass("header-sticky");
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
        $(".owl-category").owlCarousel({
            loop: false,
            margin: 20,
            autoplay: false,
            autoplayTimeout: 3000,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    margin: 10,
                    items: 2,
                },
                600: {
                    items: 3,
                    margin: 10,
                },
                1000: {
                    items: 3,
                },
            },
        });
    });
});
