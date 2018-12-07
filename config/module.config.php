<?php
 return array(
    'controllers' => array(
        'invokables' => array(
            'Showel\Controller\Showel' => 'Showel\Controller\ShowelController',
        ),
    ),

   
    'router' => array(
        'routes' => array(
            'showel' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/showel[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Showel\Controller\Showel',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'showel' => __DIR__ . '/../view',
        ),
    ),
);