<?php

return [
    'fields' => [
        'clientInfo' => [
            'type' => 'structure',
            'label' => 'Client Information',
            'columns' => [
                'key' => 'Key',
                'value' => 'Value'
            ],
            'fields' => [
                'key' => [
                    'type' => 'text',
                    'label' => 'Information Key',
                    'required' => true
                ],
                'value' => [
                    'type' => 'text',
                    'label' => 'Information Value',
                    'required' => true
                ],
                'description' => [
                    'type' => 'textarea',
                    'label' => 'Description',
                    'required' => false
                ],
                'active' => [
                    'type' => 'toggle',
                    'label' => 'Active',
                    'default' => true,
                    'text' => [
                        'Yes',
                        'No'
                    ]
                ]
            ]
        ],
        'title' => [
            'type' => 'text',
            'label' => 'Title',
            'help' => 'Enter a title for your client info page'
        ],
        'description' => [
            'type' => 'textarea',
            'label' => 'Description',
            'help' => 'Enter a description for your client info page'
        ]
    ]
];
