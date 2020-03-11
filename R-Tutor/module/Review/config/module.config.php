<?php
namespace Review;

use Laminas\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'review' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/review[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\ReviewController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'album' => __DIR__ . '/../view',
        ],
    ],
];
?>