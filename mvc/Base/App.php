<?php

namespace Mvc\Base;

use \Mvc\Base\Config;
use \Mvc\Helper\Input;

use \stdClass;

class App
{
    /**
     * Run the Application
     *
     * @return mixed
     */
    public function run()
    {
        // Create new input helper to get query_string
        $input = new Input();

        // Load the config files
        $config = new Config();

        if ($config->get('environment') == 'dev') {
            error_reporting(E_ALL);
            ini_set('display_errors', TRUE);
            ini_set('display_startup_errors', TRUE);
        }

        // Check mandatory parameters are set
        if (!$config->has('default_controller') || !$config->has('default_action')) {
            throw new \Exception('Default controller or default action not found');
        }

        // Get the default controller and action
        $controller = $config->get('default_controller');
        $action     = $config->get('default_action');

        // Check the correct controller and action is going to load based on the URI
        if ($input->has('query_string')) {

            $uri = explode('/', $input->get('query_string'));

            if (count($uri) < 2) {
                $uri[] = $action;
            }

            list($controller, $action) = $uri;
        }

        $format = 'Mvc\Controller\%s';
        $controller = sprintf($format, ucfirst($controller));

        $this->controller = new $controller();

        // run the controller action
        return $this->controller->{'action' . ucfirst($action)}();
    }
}
