<?php
namespace Machinelearning;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\MachinelearningController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'machinelearning' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/machinelearning[/:action]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ],
                    'defaults' => [
                        'controller' => Controller\MachinelearningController::class,
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