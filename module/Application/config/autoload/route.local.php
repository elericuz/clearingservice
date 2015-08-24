<?php
return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'dashboard' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/dashboard',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'dashboard',
                    ),
                ),
            ),
            'create-service' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/servicio/crear',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'create',
                    )
                )
            ),
            'delete-service' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/servicio/borrar[/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'delete',
                        'id' => '[0-9]+',
                    )
                )
            ),
            'edit-service' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/servicio/editar[/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'edit',
                        'id' => '[0-9]+',
                    )
                )
            ),
            'view-service' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/servicio/ver[/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'view',
                        'id' => '[0-9]+',
                    )
                )
            ),
            'add-area-service' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/servicio/area/add/:id',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'addArea',
                        'id' => '[0-9]+',
                    )
                )
            ),
            'edit-area-service' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/servicio/area/edit/:id',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'editArea',
                        'id' => '[0-9]+',
                    )
                )
            ),
            'delete-area-service' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/servicio/area/delete/:id',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'deleteArea',
                        'id' => '[0-9]+',
                    )
                )
            )
        ),
    ),
);