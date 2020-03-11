<?php
namespace Todo;

use Laminas\Router\Http\Segment;
use Laminas\Router\Http\Literal;

// use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'todo' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/todo[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\TodoController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'fetchtodo' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/fetchtodo',
                    'defaults' => [
                        'controller' => Controller\TodoController::class,
                        'action'     => 'fetchtodo',
                    ],
                ],    
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'todo' => __DIR__ . '/../view',
        ],
    ],
];