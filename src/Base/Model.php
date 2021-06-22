<?php

namespace Mvc\Base;

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Configuration;
use Doctrine\Common\EventManager;

use Mvc\Base\Config;

class Model
{
    protected $conn = null;

    public function __construct()
    {
        $config       = new Config();
        $dbalConfig   = new Configuration();
        $eventManager = new EventManager();

        if ($config->has('database')) {
            $connectionParams = $config->get('database');
            $this->conn = DriverManager::getConnection($connectionParams, $dbalConfig, $eventManager);
        }
    }
}
