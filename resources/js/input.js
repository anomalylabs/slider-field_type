$(document).ready(function () {

    $('input.slider').slider({
        formatter: function (value) {
            return 'Current value: ' + value;
        }
    });

    $('input.slider').on('slide', function (slide) {

        $(this).parent('div').find('.value').text(slide.value);
    });
});