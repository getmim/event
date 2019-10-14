<?php

return [
    'Event\\Model\\Event' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'title' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 3000
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => FALSE,
                    'unique' => TRUE
                ],
                'index' => 4000
            ],
            'cover' => [
                'comment' => 'ex: {"url":"","label":""}',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 5000
            ],
            'embed' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 6000
            ],
            'attendees' => [
                'comment' => 'ex: [{"name":"","profile":""},...]',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 7000
            ],
            'time_start' => [
                'type' => 'DATETIME',
                'attrs' => [],
                'index' => 8000
            ],
            'time_end' => [
                'type' => 'DATETIME',
                'attrs' => [],
                'index' => 9000
            ],
            'ages' => [
                'type' => 'VARCHAR',
                'length' => 7,
                'attrs' => [],
                'index' => 10000
            ],
            'price' => [
                'type' => 'DOUBLE',
                'length' => '10,2',
                'attrs' => [
                    'default' => '0.00'
                ],
                'index' => 11000
            ],
            'address' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 12000
            ],
            'socials' => [
                'comment' => 'ex: {"facebook":"","twitter":"","website":""}',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 13000
            ],
            'content' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 14000
            ],
            'meta' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 15000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 16000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 17000
            ]
        ]
    ]
];