<?php
return array(
    'router' => array(
        'routes' => array(
            'login' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/login',
                    'defaults' => array(
                        'controller' => 'Security\Controller\Login',
                        'action' => 'login',
                    ),
                ),
            ),
            'logout' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/logout',
                    'defaults' => array(
                        'controller' => 'Security\Controller\Login',
                        'action' => 'logout',
                    ),
                ),
            ),
            'user-list' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/users',
                    'defaults' => array(
                        'controller' => 'Security\Controller\User',
                        'action' => 'list',
                    ),
                ),
            ),
            'user-create' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/users/create',
                    'defaults' => array(
                        'controller' => 'Security\Controller\User',
                        'action' => 'create',
                    ),
                ),
            ),
            'user-edit' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/users/edit/:id',
                    'defaults' => array(
                        'controller' => 'Security\Controller\User',
                        'action' => 'edit',
                        'id' => '[0-9]+',
                    ),
                ),
            ),
            'user-delete' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/users/delete/:id',
                    'defaults' => array(
                        'controller' => 'Security\Controller\User',
                        'action' => 'delete',
                        'id' => '[0-9]+',
                    ),
                ),
            ),
        ),
    ),
);