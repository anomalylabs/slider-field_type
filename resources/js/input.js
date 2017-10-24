$(document).on('ajaxComplete ready', function () {

    // Initialize sliders
    $('[data-provides="anomaly.field_type.slider"]:not([data-initialized])').each(function () {

        var $slider = $(this);

        $slider.attr('data-initialized', '');

        //$slider.addSliderSegments($slider.attr('max'));

        $slider.on('input', function () {
            $(this).prev('.value-label').find('.value').text(this.value);
        });
    });
});
