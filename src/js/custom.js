import $ from "jquery";

$(document).ready(function () {
    $('.scrollto').on('click', function () {

        let href = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(href).offset().top
        }, {
            duration: 570,   // по умолчанию «400»
            easing: "linear" // по умолчанию «swing»
        });

        return false;
    });

    $('.close-pannel').on('click', function () {

        require("jquery.cookie");

        $.cookie('close_pannel', true, { expires: 7, path: '/' });
        $(this).closest('.ribbon').hide();

    });

    $('.tariff__link').on('click', function () {
        console.log($('#modal-order-form .tariff-contactform-field'));
        $('#modal-order-form .tariff-contactform-field').val($(this).data('tariff'));
    });

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        //console.log(event.srcElement);
    }, false );
});