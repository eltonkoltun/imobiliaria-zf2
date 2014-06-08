<?php

// ====================================================================================================================
// É inserido apenas em ambiente de produção.
// ====================================================================================================================

return array (
    // ================================================================================================================
    // PHP
    // ================================================================================================================
    'phpSettings' => array(
        'display_startup_errors' => false,
        'display_errors' => false,
        'max_execution_time' => 60,
    ),
    // ================================================================================================================
    // Cache dos arquivos de configuração e do mapeamento de classes.
    // ================================================================================================================
//    'module_listener_options' => array(
//        'config_cache_enabled' => true,
//        'module_map_cache_enabled' => true,
//    ),
    // ================================================================================================================
    // Cache do doctrine.
    // ================================================================================================================
//    'doctrine' => array(
//        'cache' => array(
//            'class' => 'Doctrine\Common\Cache\ApcCache'
//        ),
//        'configuration' => array(
//            'orm_default' => array(
//                'metadata_cache' => 'apc',
//                'query_cache'    => 'apc',
//                'result_cache'   => 'apc',
//                'generate_proxies' => true,
//            ),
//        ),
//    ),
);
