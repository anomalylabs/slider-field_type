$(function () {

    // Initialize sliders
    $('.slider').each(function () {

        var slider = $(this);

        slider.slider({
            min: slider.data('min'),
            max: slider.data('max'),
            step: slider.data('step'),
            value: slider.data('value'),
            range: slider.data('range')
        }).addSliderSegments(slider.data('max'));

        slider.on('slide', function (event, ui) {

            if (ui.values == undefined) {
                slider.prev('label').find('.value').text(ui.value);
                slider.find('input').val(ui.value);
            } else {
                slider.prev('label').find('.value').text(String(ui.values).replace(',', ' - '));
                slider.find('input').val(ui.values);
            }
        });
    });
});
