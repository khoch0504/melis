<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'moduletest' => [
            'tools' => [
                'moduletest_tools' => [
                    'conf' => [
                        'title' => 'tr_moduletest_templates',
                        'id' => 'id_moduletest_templates',
                    ],
                    'table' => [
                        // table ID
                        'target' => '#tableToolModuleTest',
                        'ajaxUrl' => '/melis/ModuleTest/List/getList',
                        'dataFunction' => '',
                        'ajaxCallback' => '',
                        'filters' => [
                            'left' => [
                                'moduletest-tbl-filter-limit' => [
                                    'module' => 'ModuleTest',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-limit',
                                ],
                            ],
                            'center' => [
                                'moduletest-tbl-filter-search' => [
                                    'module' => 'ModuleTest',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-search',
                                ],
                            ],
                            'right' => [
                                'moduletest-tbl-filter-refresh' => [
                                    'module' => 'ModuleTest',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-refresh',
                                ],
                            ],
                        ],
                        'columns' => [

                        ],
                        // define what columns can be used in searching
                        'searchables' => [

                        ],
                        'actionButtons' => [

                        ]
                    ],

                ]
            ]
        ]
    ]
];