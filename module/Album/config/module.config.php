<?php

namespace Album;

use Zend\Router\Http\Segment;

return [
    
    // routes
    'router' => [
        'routes' => [
            // This route name
            'album' => [
                // Segment Type route: The segment route allows us to specify placeholders in the URL pattern (route) that will be mapped to named parameters in the matched route
                'type' => Segment::class,
                'options' => [
                    // Matched any url which will start with /album
                    // [] means optional parapeter
                    'route' => '/album[/:action[/:id]]',
                    // action and id paremeter have following pattern
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\AlbumController::class,
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