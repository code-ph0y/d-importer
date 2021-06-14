<?php

namespace Mvc\Base;

class Config
{
    protected $params = null;

    /**
     * Load the configuration files
     *
     * @return void
     */
    public function __construct()
    {
        require 'mvc/Config/database.php';
        require 'mvc/Config/application.php';
        require 'mvc/Config/route.php';
        require 'mvc/Config/assets.php';
        require 'mvc/Config/fields/datasources/fields.php';
        require 'mvc/Config/fields/datasources/types/spreadsheet.php';
        require 'mvc/Config/fields/datasources/types/mysql.php';

        $this->params = $config;
    }

    public function getAll()
    {
        return $this->params;
    }

    /**
     * Get configuration parameters
     *
     * @param  string $key
     * @return
     */
    public function get($key)
    {
        return $this->params[$key];
    }

    /**
     * Set configuration parameters
     *
     * @param string $key   Name of parameter to set
     * @param mixed  $value Value to set
     */
    public function set($key, $value)
    {
        $this->params[$key] = $value;
    }

    /**
     * Find out if parameter exists
     *
     * @param  string  $key  Name to find out
     * @param  string  $type Type of parameter get, post or file
     * @return boolean
     */
    public function has($key)
    {
        return (isset($this->params[$key])) ? true : false;
    }
}
