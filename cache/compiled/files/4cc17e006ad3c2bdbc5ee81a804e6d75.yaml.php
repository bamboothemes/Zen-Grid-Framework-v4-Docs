<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://learn2/learn2.yaml',
    'modified' => 1439346822,
    'data' => [
        'enabled' => true,
        'top_level_version' => false,
        'home_url' => NULL,
        'github' => [
            'position' => 'top',
            'tree' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/blob/develop/',
            'commits' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/commits/develop/'
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user/themes/learn2'
                    ]
                ]
            ]
        ]
    ]
];
