<?php

namespace Mvc\Base;

use Doctrine\DBAL\Configuration;
use \Doctrine\DBAL\DriverManager;

class Model
{
    protected $conn;

    //Constructor
    public function __construct()
    {
        $dbalConfig = new Configuration();

        $connectionParams = array(
            'dbname'   => $config['db_name'],
            'user'     => $config['username'],
            'password' => $config['password'],
            'host'     => $config['hostname'],
            'driver'   => $config['driver']
        );

        $this->conn = DriverManager::getConnection($connectionParams, $dbalConfig);
    }
}
