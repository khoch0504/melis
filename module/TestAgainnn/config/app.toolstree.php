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
                                'testagainnn_conf' => [
                                    'conf' => [
                                        'id' => 'id_testagainnn_leftmenu',
                                        'melisKey' => 'testagainnn_leftmenu',
                                        'name' => 'tr_testagainnn_title',
                                        'icon' => 'fa fa-puzzle-piece',
                                    ],
                                    'interface' => [
                                        'testagainnn_tool' => [
                                            'conf' => [
                                                'id' => 'id_testagainnn_tool',
                                                'melisKey' => 'testagainnn_tool',
                                                'name' => 'tr_testagainnn_title',
                                                'icon' => 'fa fa-puzzle-piece',
                                            ],
                                            'forward' => [
                                                'module' => 'TestAgainnn',
                                                'controller' => 'List',
                                                'action' => 'render-tool',
                                                'jscallback' => '',
                                                'jsdatas' => []
                                            ],
                                            'interface' => [
                                                'testagainnn_header' => [
                                                    'conf' => [
                                                        'id' => 'id_testagainnn_header',
                                                        'melisKey' => 'testagainnn_header',
                                                        'name' => 'tr_testagainnn_header',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'TestAgainnn',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-header',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                ],
                                                'testagainnn_content' => [
                                                    'conf' => [
                                                        'id' => 'id_testagainnn_content',
                                                        'melisKey' => 'testagainnn_content',
                                                        'name' => 'tr_testagainnn_content',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'TestAgainnn',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-content',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                    'interface' => [
                                                        'testagainnn_modal' => [
                                                            'conf' => [
                                                                'id' => 'id_testagainnn_modal',
                                                                'melisKey' => 'testagainnn_modal',
                                                                'name' => 'tr_testagainnn_modal',
                                                            ],
                                                            'forward' => [
                                                                'module' => 'TestAgainnn',
                                                                'controller' => 'List',
                                                                'action' => 'render-modal-form',
                                                                'jscallback' => '',
                                                                'jsdatas' => []
                                                            ],
                                                            'interface' => [
                                                                'testagainnn_properties_form' => [
                                                                    'conf' => [
                                                                        'id' => 'id_testagainnn_properties_form',
                                                                        'melisKey' => 'testagainnn_properties_form',
                                                                        'name' => 'tr_testagainnn_properties',
                                                                        'icon' => 'cogwheel'
                                                                    ],
                                                                    'forward' => [
                                                                        'module' => 'TestAgainnn',
                                                                        'controller' => 'Properties',
                                                                        'action' => 'render-properties-form',
                                                                        'jscallback' => '',
                                                                        'jsdatas' => []
                                                                    ]
                                                                ],
#TCTOOLINTERFACE
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
        ]
    ]
];