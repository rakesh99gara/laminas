<?php
namespace Python;

// use Laminas\Router\Http\Literal;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\PythonController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'python' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/python[/:action]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ],
                    'defaults' => [
                        'controller' => Controller\PythonController::class,
                        'action'     => 'index',
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