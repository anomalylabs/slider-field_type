# Slider Field Type

*anomaly.field_type.slider*

#### A range slider field type.

The slider field type provides a range slider input that allows users to select a value between a range of values.

## Configuration

- `min` - any integer
- `min_label` - any string or translatable string
- `max` - any integer
- `max_label` - any string or translatable string
- `step` - any integer

The step determines the value of each "step" in the value range. 

#### Example

	config => [
		'min' => 0,
        'min_label' => 'Min',
        'max' => 10,
        'max_label' => 'Max',
        'step' => 2
	]
