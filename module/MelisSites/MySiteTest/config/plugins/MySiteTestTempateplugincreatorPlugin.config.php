<?php

return [
    'plugins' => [
        'melisfront' => [
            'conf' => [
                // user rights exclusions
                'rightsDisplay' => 'none',
            ],
            'plugins' => [
                'MySiteTestTempateplugincreatorPlugin' => [
                    'front' => [
                        'template_path' => ['MySiteTest/plugins/tempate-plugin-creator'],						'template_name' => 'Name',
						'template_phone' => '',

                        'id' => 'tempateplugincreator',                                                         
                        // List the files to be automatically included for the correct display of the plugin
                        // To overide a key, just add it again in your site module
                        // To delete an entry, use the keyword "disable" instead of the file path for the same key
                        'files' => [
                            'css' => [
                                '/MySiteTest/plugins/css/plugin.Tempateplugincreator.css',
                            ],
                            'js' => [
                                '/MySiteTest/plugins/js/plugin.Tempateplugincreator.init.js',
                            ],
                        ],                       
                    ],
                    'melis' => [
                        'subcategory' => [
                            'id' => 'BASICS',
                            'title' => 'tr_MelisFrontSubcategoryPageBasics_Title'
                        ],
                        'name' => 'tr_MySiteTestTempateplugincreatorPlugin_Name',
                        'thumbnail' => '/MySiteTest/plugins/images/MySiteTestTempateplugincreatorPlugin_thumbnail.jpg',
                        'description' => 'tr_MySiteTestTempateplugincreatorPlugin_Description',
                        'files' => [
                            'css' => [
                                '/MySiteTest/plugins/css/plugin.Tempateplugincreator.css',
                            ],
                            'js' => [
                                '/MySiteTest/plugins/js/plugin.Tempateplugincreator.init.js',
                            ],
                        ],
                        'js_initialization' => [],
                        /*
                        * if set to empty, plugin menu will be shown under 'Others' section                       
                        *  - available section for templating plugins as of 2019-05-16
                        *    - MelisCms
                        *    - MelisMarketing
                        *    - MelisSite
                        *    - Others
                        *    - CustomProjects
                        */
                        'section' => '',
                        'modal_form' => [
                            'plugin_tempateplugincreator_tab_1' => [
                                'tab_title' => 'tr_mysitetest_tempateplugincreator_plugin_tab_properties',
                                'tab_icon'  => 'fa fa-cog',
                                'tab_form_layout' => 'MySiteTest/plugins/plugin-tempate-plugin-creator-tab-1-modal-form',
                                'attributes' => [
                                    'name' => 'plugin_tempateplugincreator_tab_1',
                                    'id' => 'plugin_tempateplugincreator_tab_1',
                                    'method' => '',
                                    'action' => '',
                                ],
                                'hydrator'  => 'Laminas\Hydrator\ArraySerializableHydrator',
                                'elements' => [
                                    [
                                        'spec' => [
                                            'name' => 'template_path',
                                            'type' => 'Select',
                                            'options' => [
                                                'label' => 'tr_melis_mysitetest_tempateplugincreator_template_path_label',
                                                'tooltip' => 'tr_melis_mysitetest_tempateplugincreator_template_path tooltip',												'value_options' => [
													'MySiteTest/plugins/tempate-plugin-creator'=> 'tr_melis_mysitetest_tempateplugincreator_template_path_MySiteTestpluginstempateplugincreator_label',
												],
												'empty_option' => 'tr_meliscore_common_choose',
												'disable_inarray_validator' => true,
                                                                                               
                                            ],
                                            'attributes' => [
                                                'id' => 'template_path',
                                                'class' => 'form-control',
                                                'required' => 'required',
                                            ],
                                        ],
                                    ],
									[
                                        'spec' => [
                                            'name' => 'template_name',
                                            'type' => 'MelisText',
                                            'options' => [
                                                'label' => 'tr_melis_mysitetest_tempateplugincreator_template_name_label',
                                                'tooltip' => 'tr_melis_mysitetest_tempateplugincreator_template_name tooltip',
                                                                                               
                                            ],
                                            'attributes' => [
                                                'id' => 'template_name',
                                                'class' => 'form-control',
                                                'required' => 'required',
                                            ],
                                        ],
                                    ],
									[
                                        'spec' => [
                                            'name' => 'template_phone',
                                            'type' => 'MelisText',
                                            'options' => [
                                                'label' => 'tr_melis_mysitetest_tempateplugincreator_template_phone_label',
                                                'tooltip' => 'tr_melis_mysitetest_tempateplugincreator_template_phone tooltip',
                                                                                               
                                            ],
                                            'attributes' => [
                                                'id' => 'template_phone',
                                                'class' => 'melis-input-group-button',
                                                'required' => '',												'data-button-icon' => 'fa fa-sitemap',
												'data-button-id' => 'meliscms-site-selector'
												,
                                            ],
                                        ],
                                    ],

                                ],
                                'input_filter' => [
                                    'template_path' => [
                                        'name'     => 'template_path',
                                        'required' => true,    
                                        'validators' => [
                                            [
                                                'name' => 'NotEmpty',
                                                'options' => [
                                                    'messages' => [
                                                        \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_front_common_input_empty',
                                                    ],
                                                ],
                                            ],
    
        
                                        ],
                                        'filters'  => [
                                        ],
                                    ],

									'template_name' => [
                                        'name'     => 'template_name',
                                        'required' => true,    
                                        'validators' => [
                                            [
                                                'name' => 'NotEmpty',
                                                'options' => [
                                                    'messages' => [
                                                        \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_front_common_input_empty',
                                                    ],
                                                ],
                                            ],
    
        
                                        ],
                                        'filters'  => [
                                        ],
                                    ],

									'template_phone' => [
                                        'name'     => 'template_phone',
                                        'required' => false,    
                                        'validators' => [
                                             [
                                                'name' => 'Digits',
                                                'options' => [
                                                    'messages' => [
                                                        \Laminas\Validator\Digits::NOT_DIGITS => 'tr_front_common_input_not_digit',
                                                    ],
                                                ],
                                            ],
    
        
                                        ],
                                        'filters'  => [
                                        ],
                                    ],


                                ],
                            ],
                                                  
                        ]
                    ],
                ],
            ],
        ],
    ],
];