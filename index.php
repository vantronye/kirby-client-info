<?php

Kirby::plugin('vantronye/client-info', [
    'areas' => [
        'client-info' => [
            'label' => 'Client Information',
            'icon' => 'info',
            'menu' => true,
            'link' => 'client-info',
            'views' => [
                [
                    'pattern' => 'client-info',
                    'action' => function () {
                        return [
                            'component' => 'k-client-info-view',
                            'props' => [
                                'title' => 'Client Information',
                                'fields' => kirby()->site()->blueprint()->tabs()['client-information']['fields'] ?? [],
                                'content' => kirby()->site()->content()->toArray(),
                            ]
                        ];
                    }
                ]
            ]
        ]
    ],
    'components' => [
        'k-client-info-view' => require __DIR__ . '/src/components/ClientInfoView.vue.php'
    ]
]);
