<?php
namespace Course;

use Laminas\Router\Http\Literal;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\CourseController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'course' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/course',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'index',
                    ],
                ],     
            ],
            'fetchdata' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/fetchdata',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'fetchdata',
                    ],
                ],    
            ],
            'algorithms' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/algorithms',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'algorithms',
                    ],
                ],    
            ],
            'c' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/c',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'c',
                    ],
                ],    
            ],
            'java' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/java',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'java',
                    ],
                ],    
            ],
            'html' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/html',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'html',
                    ],
                ],    
            ],
            'cascade' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/cascade',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'cascade',
                    ],
                ],    
            ],
            'javascript' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/javascript',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'javascript',
                    ],
                ],    
            ],
            'android' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/android',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'android',
                    ],
                ],    
            ],
            'reactnative' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/reactnative',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'reactnative',
                    ],
                ],    
            ],
            'english' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/english',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'english',
                    ],
                ],    
            ],
            'networking' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/networking',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'networking',
                    ],
                ],    
            ],
            'cloud' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/cloud',
                    'defaults' => [
                        'controller' => Controller\CourseController::class,
                        'action'     => 'cloud',
                    ],
                ],    
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];