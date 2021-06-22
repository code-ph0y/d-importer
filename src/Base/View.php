<?php

namespace Mvc\Base;

use Mvc\Base\Helper;
use Mvc\Base\Config;

class View {

    /**
     * @var ViewHelper|null
     */
    public $helper = null;

    /**
     * @var Config|null
     */
    public $config = null;

    public function __construct(Config $config, ViewHelper $helper)
    {
        $this->config = $config;
        $this->helper = $helper;
    }

    /**
     * Render the view file and pass it to the templates
     *
     * @param  string $filename   The view files name
     * @param  array  $params     Params to pass to view file
     * @return mixed
     */
    public function render($filename, $params = array(), $template = 'default.html.php')
    {
        // Allow the view param to work with and with the .php
        $filename = (strpos($filename, '.php') !== false) ? $filename : $filename . '.php';

        $view = $this->helper;
        $config = $this->config;

        // Extract the parameters
        extract($params);

        // Get the file contents of the view file
        ob_start();
        include BASE_DIR . '/src/View/' . $filename;
        $body = ob_get_clean();

        if (file_exists(BASE_DIR . '/src/View/template/' . $template)) {
            require BASE_DIR . '/src/View/template/' . $template;
        } else {
            echo $body;
        }
    }
}
