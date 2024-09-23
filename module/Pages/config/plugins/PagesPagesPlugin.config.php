<?php

return [
    'plugins' => [
        'melisfront' => [
            'conf' => [
                // user rights exclusions
                'rightsDisplay' => 'none',
            ],
            'plugins' => [
                'PagesPagesPlugin' => [
                    'front' => [
                        'template_path' => ['Pages/plugins/pages'],						
                        'id' => 'pages',                                                         
                        // List the files to be automatically included for the correct display of the plugin
                        // To overide a key, just add it again in your site module
                        // To delete an entry, use the keyword "disable" instead of the file path for the same key
                        'files' => [
                            'css' => [
                                '/Pages/plugins/css/plugin.Pages.css',
                            ],
                            'js' => [
                                '/Pages/plugins/js/plugin.Pages.init.js',
                            ],
                        ],                       
                    ],
                    'melis' => [
                        'subcategory' => [
                            'id' => 'BASICS',
                            'title' => 'tr_MelisFrontSubcategoryPageBasics_Title'
                        ],
                        'name' => 'tr_PagesPagesPlugin_Name',
                        'thumbnail' => '/Pages/plugins/images/PagesPagesPlugin_thumbnail.jpg',
                        'description' => 'tr_PagesPagesPlugin_Description',
                        'files' => [
                            'css' => [
                                '/Pages/plugins/css/plugin.Pages.css',
                            ],
                            'js' => [
                                '/Pages/plugins/js/plugin.Pages.init.js',
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
                            'plugin_pages_tab_1' => [
                                'tab_title' => 'tr_pages_pages_plugin_tab_properties',
                                'tab_icon'  => 'fa fa-cog',
                                'tab_form_layout' => 'Pages/plugins/plugin-pages-tab-1-modal-form',
                                'attributes' => [
                                    'name' => 'plugin_pages_tab_1',
                                    'id' => 'plugin_pages_tab_1',
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
                                                'label' => 'tr_melis_pages_pages_template_path_label',
                                                'tooltip' => 'tr_melis_pages_pages_template_path tooltip',												'value_options' => [
													'Pages/plugins/pages'=> 'tr_melis_pages_pages_template_path_Pagespluginspages_label',
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


                                ],
                            ],
                                                  
                        ]
                    ],
                ],
            ],
        ],
    ],
];