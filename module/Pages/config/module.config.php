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
                    'application-Pages' => [
                        'type'    => 'Literal',
                        'options' => [
                            'route'    => 'Pages',
                            'defaults' => [
                                '__NAMESPACE__' => 'Pages\Controller',
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
			'PagesPagesPlugin' => \Pages\Controller\Plugin\PagesPagesPlugin::class,
		],
	],
	'controllers' => [
        'invokables' => [
            'Pages\Controller\List' => \Pages\Controller\ListController::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
        	'Pages/plugins/pages' => __DIR__.'/../view/plugins/pages.phtml',
			'Pages/plugins/plugin-pages-tab-1-modal-form' => __DIR__.'/../view/plugins/plugin-pages-tab-1-modal-form.phtml',
		],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];
