$(function () {

    // Add segments to a slider.
    $.fn.addSliderSegments = function () {
        return this.each(function () {
            var $this = $(this),
                amount = ($this.attr('max') - $this.attr('min')) / $this.attr('step');

            var segmentGap = 100 / (amount) + '%';

            var segment = '<div class="tick|" style="margin-left: ' + segmentGap + ';"></div>';

            $this.after(segment.repeat(amount - 1));
        });
    };
});
