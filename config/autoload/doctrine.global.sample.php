<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
					'host' => '127.0.0.1',
					'port' => '3306',
					'dbname' => 'SysStack_t_01',
					'user' => 'devuser',
					'password' => 'password',
                ),
            ),
        ),
    ),
);
?>