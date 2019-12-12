$(function () {
    $('.main-header__btn-menu').on('click', function (evt) {
        $(evt.currentTarget).toggleClass('main-header__btn-menu--close');
        $('.main-nav').toggleClass('main-nav--close');
        $('body').toggleClass('body__menu-open');
    })
});

$(function () {
    $(document).ready(function () {
        $('#main-slider').bxSlider({
            controls: false
        });

        $('#main-gallery').bxSlider({});

        if ($(window).width() <= 779) {
            $('#team-slider').bxSlider({});
        } else {
            /*$('#team-slider').bxSlider({
                minSlides: 1,
                maxSlides: 5,
                slideWidth: 270,
            });*/
        }

        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        $('.member__cert-link').on('click', function (evt) {
            evt.preventDefault();
            var gallery = $(this).siblings('.member__cert-gallery').find('a').simpleLightbox();
            gallery.open();
        });
    });
});