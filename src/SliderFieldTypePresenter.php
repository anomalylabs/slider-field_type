<?php namespace Anomaly\SliderFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class SliderFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SliderFieldType
 */
class SliderFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The decorated object.
     * This is for IDE hinting.
     *
     * @var SliderFieldType
     */
    protected $object;

    /**
     * Return the top value.
     *
     * @return null|integer|float
     */
    public function top()
    {
        $values = $this->values();

        return array_pop($values);
    }

    /**
     * Return the bottom value.
     *
     * @return null|integer|float
     */
    public function bottom()
    {
        $values = $this->values();

        return array_shift($values);
    }

    /**
     * Return the values.
     *
     * @return array
     */
    public function values()
    {
        return explode(',', $this->object->getValue());
    }
}
