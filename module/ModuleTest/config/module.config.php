<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'router' => [
        'routes' => [
        	'melis-backoffice' => [
                'child_routes' => [
                    'application-ModuleTest' => [
                        'type'    => 'Literal',
                        'options' => [
                            'route'    => 'ModuleTest',
                            'defaults' => [
                                '__NAMESPACE__' => 'ModuleTest\Controller',
                            ],
                        ],
                        'may_terminate' => true,
                        'child_routes' => [
                            'default' => [
                                'type'    => 'Segment',
                                'options' => [
                                    'route'    => '/[:controller[/:action]]',
                                    'constraints' => [
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                    ],
                                    'defaults' => [
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
        	],
        ],
    ],
    'service_manager' => [

    ],
    'controller_plugins' => [
		'invokables' => [
			'ModuletestPlugintestPlugin' => \Moduletest\Controller\Plugin\ModuletestPlugintestPlugin::class,
		],
	],
	'controllers' => [
        'invokables' => [
            'ModuleTest\Controller\List' => \ModuleTest\Controller\ListController::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
        	'Moduletest/plugins/plugin-test' => __DIR__.'/../view/plugins/plugin-test.phtml',
			'Moduletest/plugins/plugin-plugin-test-tab-1-modal-form' => __DIR__.'/../view/plugins/plugin-plugin-test-tab-1-modal-form.phtml',
		],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];
