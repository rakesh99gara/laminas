<?php
namespace Datastructures;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\DatastructuresController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'datastructures' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/datastructures[/:action]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ],
                    'defaults' => [
                        'controller' => Controller\DatastructuresController::class,
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