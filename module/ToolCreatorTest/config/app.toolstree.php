<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'meliscore' => [
            'interface' => [
                'meliscore_leftmenu' => [
                    'interface' => [
                        'meliscustom_toolstree_section' => [
                            'interface' => [
                                'toolcreatortest_conf' => [
                                    'conf' => [
                                        'id' => 'id_toolcreatortest_leftmenu',
                                        'melisKey' => 'toolcreatortest_leftmenu',
                                        'name' => 'tr_toolcreatortest_title',
                                        'icon' => 'fa fa-puzzle-piece',
                                    ],
                                    'interface' => [
                                        'toolcreatortest_tool' => [
                                            'conf' => [
                                                'id' => 'id_toolcreatortest_tool',
                                                'melisKey' => 'toolcreatortest_tool',
                                                'name' => 'tr_toolcreatortest_title',
                                                'icon' => 'fa fa-puzzle-piece',
                                            ],
                                            'forward' => [
                                                'module' => 'ToolCreatorTest',
                                                'controller' => 'List',
                                                'action' => 'render-tool',
                                                'jscallback' => '',
                                                'jsdatas' => []
                                            ],
                                            'interface' => [
                                                'toolcreatortest_header' => [
                                                    'conf' => [
                                                        'id' => 'id_toolcreatortest_header',
                                                        'melisKey' => 'toolcreatortest_header',
                                                        'name' => 'tr_toolcreatortest_header',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'ToolCreatorTest',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-header',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                ],
                                                'toolcreatortest_content' => [
                                                    'conf' => [
                                                        'id' => 'id_toolcreatortest_content',
                                                        'melisKey' => 'toolcreatortest_content',
                                                        'name' => 'tr_toolcreatortest_content',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'ToolCreatorTest',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-content',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                    'interface' => [

                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];