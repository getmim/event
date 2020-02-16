<?php

return [
    '__name' => 'event',
    '__version' => '0.2.0',
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
                    'type' => 'std-cover'
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
            ],
            'content-pricing' => [
                'object' => [
                    'cases' => [
                        'event' => [
                            'model' => [
                                'name' => 'Event\\Model\\Event',
                                'field' => 'id'
                            ],
                            'format' => 'event'
                        ]
                    ]
                ]
            ]
        ]
    ],
    'libEnum' => [
        'enums' => [
            'content-pricing.type' => [
                'event' => 'Event'
            ]
        ]
    ],
    'contentPricing' => [
        'active' => [
            'event' => true
        ],
        'objects' => [
            'event' => [
                'model' => 'Event\\Model\\Event',
                'format' => 'event',
                'fields' => [
                    'id'        => 'id',
                    'user'      => 'user',
                    'title'     => 'title',
                    'created'   => 'created',
                    'published' => 'created',
                    'status'    => '$Published'
                ]
            ]
        ]
    ]
];
