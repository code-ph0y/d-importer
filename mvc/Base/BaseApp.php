<?php

namespace Mvc\Base;

class BaseApp
{
    protected $config     = null;

    protected $controller = null;

    protected $params     = array();

    public function __construct() {

    }

    /**
     * Run the Application
     *
     * @return void
     */
    public function run($config)
    {
        $this->config = $config;

        if (empty($_GET)) {
            if (empty($this->config['default_controller']) || empty($this->config['default_action'])) {
                throw new \Exception('Default Controller or Action not found');
            }

            $controller = 'Mvc\Controller\\' . $this->config['default_controller'];

            $this->controller = new $controller();

            $this->controller->{$this->config['default_action']}();

        }
    }
}
