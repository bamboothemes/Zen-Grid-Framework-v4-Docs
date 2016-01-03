<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://blankly/blankly.yaml',
    'modified' => 1451547527,
    'data' => [
        'content' => [
            'date' => true,
            'author' => true,
            'tags' => true,
            'image_position' => 'below'
        ],
        'dropdown' => [
            'enabled' => true,
            'effect' => 'zoom',
            'align' => 'left'
        ],
        'layout' => [
            'midcol' => 12,
            'sidebar' => 0,
            'menu' => 12,
            'footer' => 8,
            'copyright' => 4
        ],
        'offcanvas' => [
            'text' => '<span class=\'zg-icon zg-icon-bars\'></span> Menu',
            'min_width' => 'navcollapse  position: left'
        ],
        'totop' => [
            'enable' => true,
            'text' => '<span class=\'zg-icon zg-icon-arrow-up\'></span>',
            'minwidth' => 'desktop'
        ],
        'logo' => [
            'align' => 'center'
        ],
        'accordion' => [
            'open_first' => false,
            'openicon' => 'angle-up',
            'closeicon' => 'angle-down'
        ],
        'lazyload' => [
            'enable' => true,
            'selector' => 'img',
            'notselector' => '.nolazy'
        ],
        'stickynav' => [
            'enable' => true
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user/themes/Blankly'
                    ]
                ]
            ]
        ]
    ]
];
