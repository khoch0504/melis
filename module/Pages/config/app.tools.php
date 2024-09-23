<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'pages' => [
            'tools' => [
                'pages_tools' => [
                    'conf' => [
                        'title' => 'tr_pages_templates',
                        'id' => 'id_pages_templates',
                    ],
                    'table' => [
                        // table ID
                        'target' => '#tableToolPages',
                        'ajaxUrl' => '/melis/Pages/List/getList',
                        'dataFunction' => '',
                        'ajaxCallback' => '',
                        'filters' => [
                            'left' => [
                                'pages-tbl-filter-limit' => [
                                    'module' => 'Pages',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-limit',
                                ],
                            ],
                            'center' => [
                                'pages-tbl-filter-search' => [
                                    'module' => 'Pages',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-search',
                                ],
                            ],
                            'right' => [
                                'pages-tbl-filter-refresh' => [
                                    'module' => 'Pages',
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