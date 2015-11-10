$(function () {

    // Initialize sliders
    $('.slider').each(function () {

        var slider = $(this);

        var value = String(slider.data('value')).split(',');

        slider.slider({
            min: slider.data('min'),
            max: slider.data('max'),
            step: slider.data('step'),
            range: slider.data('range')
        });

        if (value.length > 1) {
            slider.slider('values', value);
        } else {
            slider.slider('value', value);
        }

        slider.addSliderSegments(slider.data('max'));

        slider.on('slide', function (event, ui) {
            
            var textValue = ui.value + ' ' + slider.data().unit; 

            if (ui.values == undefined) {
                slider.prev('label').find('.value').text(textValue);
                slider.find('input').val(ui.value);
            } else {
                slider.prev('label').find('.value').text(String(textValue).replace(',', ' - '));
                slider.find('input').val(ui.values);
            }
        });
    });
});
