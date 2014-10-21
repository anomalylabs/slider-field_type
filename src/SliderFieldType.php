<?php namespace Anomaly\Streams\Addon\FieldType\Slider;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

class SliderFieldType extends FieldTypeAddon
{
    protected $slug = 'slider';

    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'slider';
}
