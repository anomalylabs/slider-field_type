# Slider Field Type

- [Introduction](#introduction)
- [Configuration](#configuration)
- [Output](#output)


<a name="introduction"></a>
## Introduction

`anomaly.field_type.slider`

The slider field type provides a range slider input that allows users to select a value between a range of values.


<a name="configuration"></a>
## Configuration

**Example Definition:**

    protected $fields = [
        'example' => [
            'type'   => 'anomaly.field_type.slider',
            'config' => [
                'range' => 'max',
                'min' => 1,
                'max' => 10,
                'step' => 2,
                'unit' => 'ms',
                'default_value' => 5
            ]
        ]
    ];

### `range`

The range selection mode:
  
`false`: Single value only - no range selection.

`true`: Range value only - select bottom and top value.

`'min'`: Range range value only - select top value from minimum value only.

`'max'`: Range range value only - select bottom value from maximum value only.  

### `min`

Minimum allowed value of the slider. The default value is `0`.

### `max`

Maximum allowed value of the slider. The default value is `10`.

### `step`

The value of each notch of the slider. The default value is `1`.

### `unit`

A suffex after the displayed value that represent the unit being changed, for example, milliseconds (ms).The default value is empty ``.

### `default_value`

The default value of the slider.


<a name="output"></a>
## Output

This field type returns the value as stored in the database by default.

For non range this will be a single value. For range sliders the values are separated with a comma.

### `top()`

Returns the top value if a range was selected.

    // Twig usage
    {{ entry.example.top }}
    
    // API usage
    $entry->example->top();

### `bottom()`

Returns the bottom value if a range was selected.

    // Twig usage
    {{ entry.example.bottom }}
    
    // API usage
    $entry->example->bottom();

### `values()`

Returns the values as an array if a range was selected.

    // Twig usage
    {{ entry.example.values }}
    
    // API usage
    $entry->example->values();
