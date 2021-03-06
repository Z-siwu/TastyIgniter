<?php

return [
    'form' => [
        'fields' => [
            'settings[components]' => [
                'label' => 'lang:system::lang.themes.text_tab_components',
                'type' => 'components',
                'prompt' => 'lang:system::lang.themes.button_choose',
                'comment' => 'lang:system::lang.themes.help_components',
                'form' => [
                    'fields' => [
                        'alias' => [
                            'label' => 'lang:system::lang.themes.label_component_alias',
                            'type' => 'text',
                            'attributes' => [
                                'data-toggle' => 'disabled',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'tabs' => [
            'fields' => [
                'markup' => [
                    'tab' => 'lang:system::lang.themes.text_tab_markup',
                    'type' => 'codeeditor',
                    'mode' => 'application/x-httpd-php',
                ],
                'codeSection' => [
                    'tab' => 'lang:system::lang.themes.text_tab_php_section',
                    'type' => 'codeeditor',
                    'mode' => 'php',
                ],
                'settings[description]' => [
                    'tab' => 'lang:system::lang.themes.text_tab_meta',
                    'label' => 'lang:admin::lang.label_description',
                    'type' => 'textarea',
                ],
            ],
        ],
    ],
];