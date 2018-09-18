<?php

namespace Mvc\Base;

use Mvc\Helper\Url;

class View {

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

        //@todo Refactor view helper
        $view = new Url();

        // Extract the parameters
        extract($params);

        // Get the file contents of the view file
        $body = file_get_contents('mvc/View/' . $filename, FILE_USE_INCLUDE_PATH);

        if (file_exists('mvc/View/template/' . $template)) {
            require 'mvc/View/template/' . $template;
        } else {
            echo $body;
        }
    }
}
