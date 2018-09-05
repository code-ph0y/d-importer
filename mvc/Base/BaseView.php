<?php

namespace Mvc\Base;

class BaseView {

    public function __construct() {

    }

    /**
     * Render the view file and pass it to the templates
     *
     * @param  string $view   The view files name
     * @param  array  $params Params to pass to view file
     * @return mixed
     */
    public function render($view, $params = array(), $template = 'default.html.php')
    {
        // Allow the view param to work with and with the .php
        $view = (strpos($view, '.php') !== false) ? $view : $view . '.php';

        // Get the file contents of the view file
        $body = file_get_contents('mvc/View/' . $view, FILE_USE_INCLUDE_PATH);

        if (file_exists('mvc/View/template/' . $template)) {
            require 'mvc/View/template/' . $template;
        } else {
            echo $body;
        }
    }
}
