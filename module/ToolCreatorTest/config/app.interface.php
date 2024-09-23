<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'toolcreatortest' => [
            'conf' => [
                'id' => '',
                'name' => 'tr_toolcreatortest_tool_name',
                'rightsDisplay' => 'none',
            ],
            'ressources' => [
                'js' => [
                    '/ToolCreatorTest/js/tool.js'
                ],
                'css' => [],
                /**
                 * the "build" configuration compiles all assets into one file to make
                 * lesser requests
                 */
                'build' => [
                    // configuration to override "use_build_assets" configuration, if you want to use the normal assets for this module.
                    'disable_bundle' => true,
                    // lists of assets that will be loaded in the layout
                    'css' => [
                        '/ToolCreatorTest/build/css/bundle.css',
                    ],
                    'js' => [
                        '/ToolCreatorTest/build/js/bundle.js',
                    ]
                ]
            ],
            'datas' => [],
        ]
    ]
];