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

Specified the slider type:  
- `false`: Not a range but a slider  
- `true`: Can select the minimum and maximum of the range  
- `min`: Can select a range with the maximum anchored and the minimum adjustable  
- `max`: Can select a range with the minimum anchored and the maximum adjustable  

### `min`

Lowest allowed value of the slider. The default value is `1`.

### `max`

Highest allowed value of the slider. The default value is `10`.

### `step`

Step of the slider. The default value is `1`.

### `default_value`

The default value of the slider
