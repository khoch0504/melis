<?php

return [
    'plugins' => [
        'melisfront' => [
            'conf' => [
                // user rights exclusions
                'rightsDisplay' => 'none',
            ],
            'plugins' => [
                'ModuletestPlugintestPlugin' => [
                    'front' => [
                        'template_path' => ['Moduletest/plugins/plugin-test'],						'Name' => 'Test',
						'Gender' => 'Male',
						'Description' => '',

                        'id' => 'plugintest',                                                         
                        // List the files to be automatically included for the correct display of the plugin
                        // To overide a key, just add it again in your site module
                        // To delete an entry, use the keyword "disable" instead of the file path for the same key
                        'files' => [
                            'css' => [
                                '/Moduletest/plugins/css/plugin.Plugintest.css',
                            ],
                            'js' => [
                                '/Moduletest/plugins/js/plugin.Plugintest.init.js',
                            ],
                        ],                       
                    ],
                    'melis' => [
                        'subcategory' => [
                            'id' => 'BASICS',
                            'title' => 'tr_MelisFrontSubcategoryPageBasics_Title'
                        ],
                        'name' => 'tr_ModuletestPlugintestPlugin_Name',
                        'thumbnail' => '/Moduletest/plugins/images/ModuletestPlugintestPlugin_thumbnail.jpg',
                        'description' => 'tr_ModuletestPlugintestPlugin_Description',
                        'files' => [
                            'css' => [
                                '/Moduletest/plugins/css/plugin.Plugintest.css',
                            ],
                            'js' => [
                                '/Moduletest/plugins/js/plugin.Plugintest.init.js',
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
                            'plugin_plugintest_tab_1' => [
                                'tab_title' => 'tr_moduletest_plugintest_plugin_tab_properties',
                                'tab_icon'  => 'fa fa-cog',
                                'tab_form_layout' => 'Moduletest/plugins/plugin-plugin-test-tab-1-modal-form',
                                'attributes' => [
                                    'name' => 'plugin_plugintest_tab_1',
                                    'id' => 'plugin_plugintest_tab_1',
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
                                                'label' => 'tr_melis_moduletest_plugintest_template_path_label',
                                                'tooltip' => 'tr_melis_moduletest_plugintest_template_path tooltip',												'value_options' => [
													'Moduletest/plugins/plugin-test'=> 'tr_melis_moduletest_plugintest_template_path_Moduletestpluginsplugintest_label',
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
                                            'name' => 'Name',
                                            'type' => 'MelisText',
                                            'options' => [
                                                'label' => 'tr_melis_moduletest_plugintest_Name_label',
                                                'tooltip' => 'tr_melis_moduletest_plugintest_Name tooltip',
                                                                                               
                                            ],
                                            'attributes' => [
                                                'id' => 'Name',
                                                'class' => 'form-control',
                                                'required' => 'required',
                                            ],
                                        ],
                                    ],
									[
                                        'spec' => [
                                            'name' => 'Gender',
                                            'type' => 'Select',
                                            'options' => [
                                                'label' => 'tr_melis_moduletest_plugintest_Gender_label',
                                                'tooltip' => 'tr_melis_moduletest_plugintest_Gender tooltip',												'value_options' => [
													'Male'=> 'tr_melis_moduletest_plugintest_Gender_Male_label',
													'Female'=> 'tr_melis_moduletest_plugintest_Gender_Female_label',
												],
												'empty_option' => 'tr_meliscore_common_choose',
												'disable_inarray_validator' => true,
                                                                                               
                                            ],
                                            'attributes' => [
                                                'id' => 'Gender',
                                                'class' => 'form-control',
                                                'required' => '',
                                            ],
                                        ],
                                    ],
									[
                                        'spec' => [
                                            'name' => 'Description',
                                            'type' => 'MelisCoreTinyMCE',
                                            'options' => [
                                                'label' => 'tr_melis_moduletest_plugintest_Description_label',
                                                'tooltip' => 'tr_melis_moduletest_plugintest_Description tooltip',
                                                                                               
                                            ],
                                            'attributes' => [
                                                'id' => 'Description',
                                                'class' => 'form-control',
                                                'required' => '',
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

									'Name' => [
                                        'name'     => 'Name',
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

									'Gender' => [
                                        'name'     => 'Gender',
                                        'required' => false,    
                                        'validators' => [        
                                        ],
                                        'filters'  => [
                                        ],
                                    ],

									'Description' => [
                                        'name'     => 'Description',
                                        'required' => false,    
                                        'validators' => [        
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