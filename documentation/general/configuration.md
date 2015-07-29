# Configuration

**Example Definition:**

```
protected $fields = [
    'example' => [
        'type'   => 'anomaly.field_type.slider',
        'config' => [
            'range' => 'max',
            'min' => 1,
            'max' => 10,
            'step' => 2,
            'default_value' => 5
        ]
    ]
];
```

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

### `default_value`

The default value of the slider.
