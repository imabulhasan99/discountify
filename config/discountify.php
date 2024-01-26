<?php

return [
    'condition_namespace' => 'App\\Conditions',
    'condition_path' => app_path('Conditions'),
    'fields' => [
        'price' => 'price',
        'quantity' => 'quantity',
    ],
    'global_discount' => 0,
    'global_tax_rate' => 0,
    'fire_events' => env('DISCOUNTIFY_FIRE_EVENTS', true),
];
