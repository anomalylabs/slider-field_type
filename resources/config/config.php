<?php

return [
    'min'  => [
        'type'   => 'anomaly.field_type.integer',
        'config' => [
            'min' => false
        ]
    ],
    'max'  => [
        'type'   => 'anomaly.field_type.integer',
        'config' => [
            'min' => false
        ]
    ],
    'step' => [
        'type'   => 'anomaly.field_type.integer',
        'config' => [
            'min' => 1
        ]
    ]
];
