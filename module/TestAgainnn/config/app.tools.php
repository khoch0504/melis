<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'testagainnn' => [
            'tools' => [
                'testagainnn_tools' => [
                    'conf' => [
                        'title' => 'tr_testagainnn_templates',
                        'id' => 'id_testagainnn_templates',
                    ],
                    'table' => [
                        // table ID
                        'target' => '#tableToolTestAgainnn',
                        'ajaxUrl' => '/melis/TestAgainnn/List/getList',
                        'dataFunction' => '',
                        'ajaxCallback' => '',
                        'filters' => [
                            'left' => [
                                'testagainnn-tbl-filter-limit' => [
                                    'module' => 'TestAgainnn',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-limit',
                                ],
                            ],
                            'center' => [
                                'testagainnn-tbl-filter-search' => [
                                    'module' => 'TestAgainnn',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-search',
                                ],
                            ],
                            'right' => [
                                'testagainnn-tbl-filter-refresh' => [
                                    'module' => 'TestAgainnn',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-refresh',
                                ],
                            ],
                        ],
                        'columns' => [
                            'DT_RowId' => [
								'text' => 'tr_testagainnn_input_cal_id',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'cal_event_title' => [
								'text' => 'tr_testagainnn_input_cal_event_title',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'cal_date_start' => [
								'text' => 'tr_testagainnn_input_cal_date_start',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'cal_date_end' => [
								'text' => 'tr_testagainnn_input_cal_date_end',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'cal_created_by' => [
								'text' => 'tr_testagainnn_input_cal_created_by',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'cal_last_update_by' => [
								'text' => 'tr_testagainnn_input_cal_last_update_by',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'cal_date_last_update' => [
								'text' => 'tr_testagainnn_input_cal_date_last_update',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'cal_date_added' => [
								'text' => 'tr_testagainnn_input_cal_date_added',
								'css' => ['width' => '13%'],
								'sortable' => true
							]
                        ],
                        // define what columns can be used in searching
                        'searchables' => [
							'cal_id',
							'cal_event_title',
							'cal_date_start',
							'cal_date_end',
							'cal_created_by',
							'cal_last_update_by',
							'cal_date_last_update',
							'cal_date_added'
                        ],
                        'actionButtons' => [
                            'edit' => [
                                  'module' => 'TestAgainnn',
                                  'controller' => 'List',
                                  'action' => 'render-table-action-edit',
                            ],
                            'delete' => [
                                'module' => 'TestAgainnn',
                                'controller' => 'List',
                                'action' => 'render-table-action-delete',
                            ],
                        ]
                    ],
                    'forms' => [
                        'testagainnn_property_form' => [
                            'attributes' => [
                                'name' => 'testAgainnnForm',
                                'id' => 'testAgainnnForm',
                                'method' => 'POST',
                                'action' => '',
                            ],
                            'hydrator'  => 'Laminas\Hydrator\ArraySerializableHydrator',
                            'elements' => [
                                [
                                    'spec' => [
                                        'name' => 'cal_id',
                                        'type' => 'MelisText',
                                        'options' => [
                                            'label' => 'tr_testagainnn_input_cal_id',
                                            'tooltip' => 'tr_testagainnn_input_cal_id_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'cal_id',
                                            'class' => 'form-control',
                                            'required' => false,
                                            'disabled' => 'disabled'
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'cal_event_title',
                                        'type' => 'MelisCoreTinyMCE',
                                        'options' => [
                                            'label' => 'tr_testagainnn_input_cal_event_title',
                                            'tooltip' => 'tr_testagainnn_input_cal_event_title_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'cal_event_title',
                                            'class' => 'form-control',
                                            'required' => true,
                                            
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'cal_date_start',
                                        'type' => 'DatePicker',
                                        'options' => [
                                            'label' => 'tr_testagainnn_input_cal_date_start',
                                            'tooltip' => 'tr_testagainnn_input_cal_date_start_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'cal_date_start',
                                            'class' => 'form-control',
                                            'required' => true,
                                            
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'cal_date_end',
                                        'type' => 'DatePicker',
                                        'options' => [
                                            'label' => 'tr_testagainnn_input_cal_date_end',
                                            'tooltip' => 'tr_testagainnn_input_cal_date_end_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'cal_date_end',
                                            'class' => 'form-control',
                                            'required' => true,
                                            
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'cal_date_added',
                                        'type' => 'DateTimePicker',
                                        'options' => [
                                            'label' => 'tr_testagainnn_input_cal_date_added',
                                            'tooltip' => 'tr_testagainnn_input_cal_date_added_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'cal_date_added',
                                            'class' => 'form-control',
                                            'required' => true,
                                            
                                        ],
                                    ],
                                ]
                            ],
                            'input_filter' => [
                                'cal_event_title' => [
                                    'name'     => 'cal_event_title',
                                    'required' => true,
                                    'validators' => [
                                        [
                                            'name' => 'NotEmpty',
                                            'options' => [
                                                'messages' => [
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_testagainnn_value_must_not_is_empty',
                                                ],
                                            ],
                                        ]
                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ],
                                'cal_date_start' => [
                                    'name'     => 'cal_date_start',
                                    'required' => true,
                                    'validators' => [
                                        [
                                            'name' => 'NotEmpty',
                                            'options' => [
                                                'messages' => [
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_testagainnn_value_must_not_is_empty',
                                                ],
                                            ],
                                        ]
                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ],
                                'cal_date_end' => [
                                    'name'     => 'cal_date_end',
                                    'required' => true,
                                    'validators' => [
                                        [
                                            'name' => 'NotEmpty',
                                            'options' => [
                                                'messages' => [
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_testagainnn_value_must_not_is_empty',
                                                ],
                                            ],
                                        ]
                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ],
                                'cal_date_added' => [
                                    'name'     => 'cal_date_added',
                                    'required' => true,
                                    'validators' => [
                                        [
                                            'name' => 'NotEmpty',
                                            'options' => [
                                                'messages' => [
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_testagainnn_value_must_not_is_empty',
                                                ],
                                            ],
                                        ]
                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ]
                            ]
                        ],

                    ]
                ]
            ]
        ]
    ]
];