<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;


return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],

            ],
            'trainingliste' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/training',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'trainingliste',
                    ],
                ],

            ],
            'training' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/training/:id',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'training',
                    ],
                ],

            ],
            'studentliste' => [
                'type' => Literal::class,
                'options' => [
                'route'    => '/student',
                'defaults' => [
                    'controller' => Controller\IndexController::class,
                'action'     => 'studentliste',
                 ],
            ],

            ] ,

            'student' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/student/:id',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'student',
                    ],
                ],

            ],


            'API' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => 'API[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class =>   Controller\Factory\IndexControllerFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

'view_helpers' =>[
    'factories'=>[ View\Helper\TrainingHelper::class =>InvokableFactory::class,
],
     'aliases' => [
    'TrainingHelper' =>View\Helper\TrainingHelper::class
        ]
    ],
    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity']
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ]
            ]
        ]
    ]
];