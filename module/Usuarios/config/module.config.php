<?php

declare(strict_types=1);

use Laminas\Router\Http\Literal;
use Laminas\ServiceManager\Factory\InvokableFactory;
use Usuarios\Controller\UsuarioController;

return [
    'router' => [
        'routes' => [
            'usuarios' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/usuarios',
                    'defaults' => [
                        'controller' => UsuarioController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'factories' => [
            UsuarioController::class => InvokableFactory::class,
        ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',

        'template_map' => [
            'usuarios/usuario/index' => __DIR__ . '/../view/usuarios/usuario/index.phtml',
        ],

        'template_path_stack' => [
           'usuarios' => __DIR__ . '/../view',
        ],
    ],
];
