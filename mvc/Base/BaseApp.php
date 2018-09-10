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

        if (empty($_GET['query_string'])) {
            if (empty($this->config['default_controller'])) {
                throw new \Exception('Default controller in application config file was not found.');
            }

            $controller = 'Mvc\Controller\\' . ucfirst($this->config['default_controller']);

            $this->controller = new $controller();

            if (empty($this->config['default_action'])) {
                throw new \Exception('Default action in application config file was not found.');
            }

            return $this->controller->{$this->config['default_action']}();
        }

        $qsParts = explode('/', $_GET['query_string']);

        $action = $this->config['default_action'];

        if (empty(end($qsParts))) {
            array_pop($qsParts);
        }

        $controller = 'Mvc\Controller\\' . ucfirst($qsParts[0]);
        $this->controller = new $controller();

        if (count($qsParts) > 1) {
            return $this->controller->{'action' . ucfirst($qsParts[1])}();
        } else {
            if (empty($this->config['default_action'])) {
                throw new \Exception('Default action in application config file was not found.');
            }

            return $this->controller->{$this->config['default_action']}();
        }
    }
}
