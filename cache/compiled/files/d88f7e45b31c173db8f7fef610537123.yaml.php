<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'system/config/streams.yaml',
    'modified' => 1439346820,
    'data' => [
        'schemes' => [
            'asset' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'assets'
                ]
            ],
            'image' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'user://images',
                    1 => 'system://images'
                ]
            ],
            'page' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'user://pages'
                ]
            ],
            'account' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'user://accounts'
                ]
            ]
        ]
    ]
];
