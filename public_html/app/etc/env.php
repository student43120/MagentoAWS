<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'vHhod6QpMiXiPjhhyHV8DuUXv2oVPslN'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'e6f_'
            ],
            'page_cache' => [
                'id_prefix' => 'e6f_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'ndgzomr79pskpma3ey4ztjtcgnjnh1ud'
    ],
    'db' => [
        'table_prefix' => 'mgmx_',
        'connection' => [
            'default' => [
                'host' => '127.0.0.1',
                'dbname' => 'magentot_mage738',
                'username' => 'magentot_mage738',
                'password' => '(x731.GSps',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'db'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'magentoturkus.s1.zetohosting.pl'
    ],
    'install' => [
        'date' => 'Mon, 29 May 2023 19:10:30 +0200'
    ]
];
