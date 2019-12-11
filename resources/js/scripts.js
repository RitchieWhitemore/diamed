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
    });
});