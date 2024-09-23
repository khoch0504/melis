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
            'tools' => [
                'toolcreatortest_tools' => [
                    'conf' => [
                        'title' => 'tr_toolcreatortest_templates',
                        'id' => 'id_toolcreatortest_templates',
                    ],
                    'table' => [
                        // table ID
                        'target' => '#tableToolToolCreatorTest',
                        'ajaxUrl' => '/melis/ToolCreatorTest/List/getList',
                        'dataFunction' => '',
                        'ajaxCallback' => '',
                        'filters' => [
                            'left' => [
                                'toolcreatortest-tbl-filter-limit' => [
                                    'module' => 'ToolCreatorTest',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-limit',
                                ],
                            ],
                            'center' => [
                                'toolcreatortest-tbl-filter-search' => [
                                    'module' => 'ToolCreatorTest',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-search',
                                ],
                            ],
                            'right' => [
                                'toolcreatortest-tbl-filter-refresh' => [
                                    'module' => 'ToolCreatorTest',
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