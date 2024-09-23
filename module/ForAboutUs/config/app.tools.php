<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'foraboutus' => [
            'tools' => [
                'foraboutus_tools' => [
                    'conf' => [
                        'title' => 'tr_foraboutus_templates',
                        'id' => 'id_foraboutus_templates',
                    ],
                    'table' => [
                        // table ID
                        'target' => '#tableToolForAboutUs',
                        'ajaxUrl' => '/melis/ForAboutUs/List/getList',
                        'dataFunction' => '',
                        'ajaxCallback' => '',
                        'filters' => [
                            'left' => [
                                'foraboutus-tbl-filter-limit' => [
                                    'module' => 'ForAboutUs',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-limit',
                                ],
                            ],
                            'center' => [
                                'foraboutus-tbl-filter-search' => [
                                    'module' => 'ForAboutUs',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-search',
                                ],
                            ],
                            'right' => [
                                'foraboutus-tbl-filter-refresh' => [
                                    'module' => 'ForAboutUs',
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