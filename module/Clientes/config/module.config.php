<?php

declare(strict_types=1);

use Clientes\Controller\ClienteController;
use Laminas\Router\Http\Literal;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'clientes' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/clientes',
                    'defaults' => [
                        'controller' => ClienteController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            ClienteController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'template_map' => [
            'clientes/cliente/index' => __DIR__ . '/../view/clientes/cliente/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
