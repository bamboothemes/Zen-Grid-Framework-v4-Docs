<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'system/config/system.yaml',
    'modified' => 1439346820,
    'data' => [
        'absolute_urls' => false,
        'timezone' => '',
        'param_sep' => ':',
        'languages' => [
            'supported' => [
                
            ],
            'translations' => true,
            'translations_fallback' => true,
            'session_store_active' => false,
            'home_redirect' => [
                'include_lang' => true,
                'include_route' => false
            ]
        ],
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'antimatter',
            'order' => [
                'by' => 'default',
                'dir' => 'asc'
            ],
            'list' => [
                'count' => 20
            ],
            'dateformat' => [
                'short' => 'jS M Y',
                'long' => 'F jS \\a\\t g:ia'
            ],
            'publish_dates' => true,
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'events' => [
                'page' => true,
                'twig' => true
            ],
            'markdown' => [
                'extra' => false,
                'auto_line_breaks' => false,
                'auto_url_links' => false,
                'escape_markup' => false,
                'special_chars' => [
                    '>' => 'gt',
                    '<' => 'lt'
                ]
            ],
            'types' => [
                0 => 'txt',
                1 => 'xml',
                2 => 'html',
                3 => 'json',
                4 => 'rss',
                5 => 'atom'
            ],
            'expires' => 604800,
            'last_modified' => false,
            'etag' => false,
            'vary_accept_encoding' => false,
            'redirect_default_route' => false
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g',
            'lifetime' => 604800,
            'gzip' => false
        ],
        'twig' => [
            'cache' => true,
            'debug' => false,
            'auto_reload' => true,
            'autoescape' => false,
            'undefined_functions' => true,
            'undefined_filters' => true
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_minify_windows' => false,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true,
            'enable_asset_timestamp' => false,
            'collections' => [
                'jquery' => 'system://assets/jquery/jquery-2.1.4.min.js'
            ]
        ],
        'errors' => [
            'display' => true,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ],
        'images' => [
            'default_image_quality' => 85,
            'cache_all' => false,
            'debug' => false
        ],
        'media' => [
            'enable_media_timestamp' => false,
            'upload_limit' => 0,
            'unsupported_inline_types' => [
                
            ]
        ],
        'session' => [
            'enabled' => true,
            'timeout' => 1800,
            'name' => 'grav-site'
        ],
        'security' => [
            'default_hash' => '$2y$10$kwsyMVwM8/7j0K/6LHT.g.Fs49xOCTp2b8hh/S5.dPJuJcJB6T.UK'
        ]
    ]
];
