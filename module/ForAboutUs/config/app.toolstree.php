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
                                'foraboutus_conf' => [
                                    'conf' => [
                                        'id' => 'id_foraboutus_leftmenu',
                                        'melisKey' => 'foraboutus_leftmenu',
                                        'name' => 'tr_foraboutus_title',
                                        'icon' => 'fa fa-puzzle-piece',
                                    ],
                                    'interface' => [
                                        'foraboutus_tool' => [
                                            'conf' => [
                                                'id' => 'id_foraboutus_tool',
                                                'melisKey' => 'foraboutus_tool',
                                                'name' => 'tr_foraboutus_title',
                                                'icon' => 'fa fa-puzzle-piece',
                                            ],
                                            'forward' => [
                                                'module' => 'ForAboutUs',
                                                'controller' => 'List',
                                                'action' => 'render-tool',
                                                'jscallback' => '',
                                                'jsdatas' => []
                                            ],
                                            'interface' => [
                                                'foraboutus_header' => [
                                                    'conf' => [
                                                        'id' => 'id_foraboutus_header',
                                                        'melisKey' => 'foraboutus_header',
                                                        'name' => 'tr_foraboutus_header',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'ForAboutUs',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-header',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                ],
                                                'foraboutus_content' => [
                                                    'conf' => [
                                                        'id' => 'id_foraboutus_content',
                                                        'melisKey' => 'foraboutus_content',
                                                        'name' => 'tr_foraboutus_content',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'ForAboutUs',
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