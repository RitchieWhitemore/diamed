$(document).ready(function () {
    $('.main-header__btn-menu').on('click', function (evt) {
        $(evt.currentTarget).toggleClass('main-header__btn-menu--close');
        $('.main-nav').toggleClass('main-nav--close');
        $('body').toggleClass('body__menu-open');
    });

    $('#up').on('click', function (evt) {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    });

    $('#file-review').on('change', function (evt) {
        var target = evt.target;
        $('.form__file-input-wrapper .form__file-name').text(target.files[0].name);
    })


    $('#main-slider').bxSlider({
        mode: 'fade',
        controls: false,
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

    /*$('#license, #san').on({
        controls: false
    });*/

    $('#license a, #san a').on('click', function (evt) {
        evt.preventDefault();
        var gallery = $(this).parents('ul').find('a').simpleLightbox();
        gallery.open();
    });


    //modal

    $('#signup-form-modal').submit(function (e) {

        var $form = $(this);

        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
            success: function (data) {
                if (data.success == true) {
                    $('#signup-modal').modal('hide');
                    $('#success-modal').modal('show');
                }
            },
            error: function (data) {

            }
        });
        e.preventDefault();
    });

    // review form
    $('#review-form-modal').submit(function (e) {
        var $form = $(this);

        var $rating = $form.find('input[name="rating"]:checked');

        if ($rating.length === 0) {
            var $message = $('.form__rating-wrapper').siblings('.invalid-feedback');
            $message.text('Поставьте оценку!');
            $message.show();
            return false;
        }

        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
            success: function (data) {
                if (data.success == true) {
                    $('#reviewModal').modal('hide');
                    $('#success-modal').modal('show');
                    $('#review-form').trigger('reset');
                }
            },
            error: function (data) {

            }
        });

        e.preventDefault();
        return false;
    });

    $('#review-form input[name="rating"]').on('click', function () {
        $('.form__rating-wrapper').siblings('.invalid-feedback').hide();
    });

    //signup-form

    $('.signup__form').submit(function (e) {

        var $form = $(this);

        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
            success: function (data) {
                if (data.success == true) {
                    $('#signup-modal').modal('hide');
                    $('#success-modal').modal('show');
                }
            },
            error: function (data) {
                if (data.responseJSON.errors) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        //alert( key + ": " + value );
                    });
                }
            }
        });
        e.preventDefault();
    })
});
