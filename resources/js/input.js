$(function () {

    // Initialize sliders
    $('.slider').each(function () {

        var slider = $(this);

        slider.slider({
            min: slider.data('min'),
            max: slider.data('max'),
            step: slider.data('step'),
            value: slider.data('value')
        });

        slider.on('slide', function (event, ui) {
            slider.next('label').find('.value').text(ui.value);
            slider.find('input').val(ui.value);
        });
    });
});