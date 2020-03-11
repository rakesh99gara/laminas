<?php
namespace Deeplearning;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\DeeplearningController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'deeplearning' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/deeplearning[/:action]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ],
                    'defaults' => [
                        'controller' => Controller\DeeplearningController::class,
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