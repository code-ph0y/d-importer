<?php

namespace Mvc\Base;

use Doctrine\DBAL\Configuration;

class Model
{
    protected $connection;

    //Constructor
    public function __construct()
    {
        $config = new Configuration();

        $connectionParams = array(
            'url' => $config['driver'] . '://' . $config['username'] . ':' . $config['password'] . '@' . $config['hostname'] . '/' . $config['db_name']
        );

        $this->connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
    }
}
