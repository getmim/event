<?php

return [
    '__name' => 'event',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/event.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/event' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-media' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-user' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Event\\Model' => [
                'type' => 'file',
                'base' => 'modules/event/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'event' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'title' => [
                    'type' => 'text'
                ],
                'slug' => [
                    'type' => 'text'
                ],
                'cover' => [
                    'type' => 'json',
                    'format' => 'venue-cover'
                ],
                'embed' => [
                    'type' => 'embed'
                ],
                'attendees' => [
                    'type' => 'json'
                ],
                'time_start' => [
                    'type' => 'date'
                ],
                'time_end' => [
                    'type' => 'date'
                ],
                'ages' => [
                    'type' => 'text'
                ],
                'price' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'address' => [
                    'type' => 'text'
                ],
                'socials' => [
                    'type' => 'json'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];