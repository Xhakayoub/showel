<?php
return array(
     'controllers' => array(
         'invokables' => array(
             'Showel\Controller\Showel' => 'Showel\Controller\ShowelController',
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'showel' => __DIR__ . '/../view',
         ),
     ),
 );