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
                    'application-TestAgainnn' => [
                        'type'    => 'Literal',
                        'options' => [
                            'route'    => 'TestAgainnn',
                            'defaults' => [
                                '__NAMESPACE__' => 'TestAgainnn\Controller',
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
        'aliases' => [
            // Service
            'TestAgainnnService' => \TestAgainnn\Service\TestAgainnnService::class,
            // Table
            'TestAgainnnTable' => \TestAgainnn\Model\Tables\TestAgainnnTable::class
        ]
    ],
    'controllers' => [
        'invokables' => [
            'TestAgainnn\Controller\List'         => \TestAgainnn\Controller\ListController::class,
            'TestAgainnn\Controller\Properties'   => \TestAgainnn\Controller\PropertiesController::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];
