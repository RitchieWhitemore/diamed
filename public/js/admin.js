$(function () {
    console.log('dsf');
    var $button = $('.admin-delete-form button');

    $button.on('click', function (e) {
        if ($button.data('confirm')) {
            if (!confirm($button.data('confirm'))) {
                e.preventDefault();
            }
        }
    });

});