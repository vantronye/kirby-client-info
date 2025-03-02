<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('vantronye/kirby-client-info', [
    'options' => [
        'cache' => true
    ],
    'blueprints' => [
        'sections/client-info' => __DIR__ . '/blueprints/sections/client-info.php'
    ],
    'sections' => [
        'client-info' => require_once __DIR__ . '/src/sections/client-info.php'
    ],
    'api' => [
        'routes' => [
            [
                'pattern' => 'client-info/save',
                'action' => function () {
                    $site = site();
                    $clientInfo = get('clientInfo');
                    
                    if ($site->update(['clientInfo' => $clientInfo])) {
                        return [
                            'status' => 'success',
                            'message' => 'Client info saved successfully'
                        ];
                    }
                    
                    return [
                        'status' => 'error',
                        'message' => 'Failed to save client info'
                    ];
                }
            ]
        ]
    ],
    'areas' => [
        'client-info' => function () {
            return [
                'label' => 'Client Info',
                'icon' => 'info',
                'menu' => true,
                'link' => 'client-info',
                'views' => [
                    [
                        'pattern' => 'client-info',
                        'action' => function () {
                            return [
                                'component' => 'k-settings-view',
                                'title' => 'Client Information',
                                'props' => [
                                    'fields' => require __DIR__ . '/blueprints/sections/client-info.php',
                                    'content' => site()->content()->toArray(),
                                    'save' => [
                                        'query' => 'client-info/save'
                                    ]
                                ]
                            ];
                        }
                    ]
                ]
            ];
        }
    ],
    'hooks' => [
        'page.update:after' => function ($page) {
            // Example hook - you can add custom logic here
        }
    ]
]);