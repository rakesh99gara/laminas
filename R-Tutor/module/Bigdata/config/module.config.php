<?php
namespace Bigdata;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\BigdataController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'bigdata' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/bigdata[/:action]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ],
                    'defaults' => [
                        'controller' => Controller\BigdataController::class,
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