<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/anchors/blueprints.yaml',
    'modified' => 1439346820,
    'data' => [
        'name' => 'Anchors',
        'version' => '1.3.0',
        'description' => 'This plugin provides automatic header anchors via the [anchorjs](http://bryanbraun.github.io/anchorjs) jQuery plugin.',
        'icon' => 'anchor',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-anchors',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'anchor, header, plugin, code',
        'bugs' => 'https://github.com/getgrav/grav-plugin-anchors/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'active' => [
                    'type' => 'toggle',
                    'label' => 'Active',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Activate for all pages. If disabled then you must activate per-page'
                ],
                'selectors' => [
                    'type' => 'text',
                    'label' => 'Selectors',
                    'size' => 'large',
                    'default' => 'h1,h2,h3,h4',
                    'placeholder' => 'Anchor Selectors',
                    'help' => 'Comma separated list of header selectors to activate on'
                ],
                'placement' => [
                    'type' => 'select',
                    'label' => 'Placement',
                    'classes' => 'fancy',
                    'help' => 'Either `left` or `right`',
                    'default' => 'right',
                    'options' => [
                        'left' => 'left',
                        'right' => 'right'
                    ]
                ],
                'visible' => [
                    'type' => 'select',
                    'label' => 'Visible',
                    'classes' => 'fancy',
                    'help' => 'Hover activates on `hover` else will always display',
                    'default' => 'hover',
                    'options' => [
                        'hover' => 'hover',
                        'always' => 'always'
                    ]
                ],
                'icon' => [
                    'type' => 'text',
                    'label' => 'Icon',
                    'size' => 'medium',
                    'default' => '',
                    'help' => 'Replace the default link icon with the character(s) provided, e.g. #, ¶, ❡ or §'
                ],
                'class' => [
                    'type' => 'text',
                    'label' => 'Class',
                    'size' => 'medium',
                    'default' => '',
                    'help' => 'Adds the provided class to the anchor html'
                ]
            ]
        ]
    ]
];
