<?php namespace Anomaly\SliderFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class SliderFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\FieldType\Slider
 */
class SliderFieldType extends FieldType
{

    /**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'anomaly.field_type.slider::input';

    /**
     * Get view data for the input.
     *
     * @return array
     */
    public function getInputData()
    {
        $data = parent::getInputData();

        $data['min']  = $this->pullConfig('min', 0);
        $data['max']  = $this->pullConfig('max', 10);
        $data['step'] = $this->pullConfig('step', 1);

        $data['minLabel'] = trans($this->pullConfig('min_label', 'misc.min'));
        $data['maxLabel'] = trans($this->pullConfig('max_label', 'misc.max'));

        $data['sliderValue'] = str_contains($data['value'], ',') ? "[{$data['value']}]" : $data['value'];

        return $data;
    }
}
