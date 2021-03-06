<?php

// ====================================================================================================================
// Usuários
// ====================================================================================================================

return array(
    // ================================================================================================================
    // ACL
    // ================================================================================================================
    'acl' => array(
        'master, admin, super' => array(
            'geo.controller.geo',
        ),
    ),
    // ================================================================================================================
    // Controllers
    // ================================================================================================================
    'controllers' => array(
        'invokables' => array(
            'geo.controller.geo' => 'Geo\Controller\GeoController',
        ),
    ),
    // ================================================================================================================
    // Doctrine
    // ================================================================================================================
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Entity'),
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Geo\Entity' => __NAMESPACE__ . '_entities'
                ),
            ),
        ),
    ),
    // ================================================================================================================
    // Router
    // ================================================================================================================
    'router' => array(
        'routes' => array(
            /*
             * Estado
             */
            'estado' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/estado[/:id]',
                    'constraints' => array(
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'geo.controller.geo',
                        'action' => 'get-estado',
                    ),
                ),
            ),
        ),
    ),
    // ================================================================================================================
    // Service manager
    // ================================================================================================================
    'service_manager' => array(
        // ------------------------------------------------------------------------------------------------------------
        // invokables
        // ------------------------------------------------------------------------------------------------------------
        'invokables' => array(
            'geo.service.paises' => 'Geo\Service\PaisesService',
            'geo.service.estados' => 'Geo\Service\EstadosService',
            'geo.service.cidades' => 'Geo\Service\CidadesService',
            'geo.service.bairros' => 'Geo\Service\BairrosService',
        ),
    ),
);
