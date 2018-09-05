<?php

namespace Mvc\Base;

class BaseApp
{
    protected $controller = 'Home';
    protected $action     = 'indexAction';
    protected $params     = array();

    public function __construct()
    {

    }

    /**
     * Run the Application
     *
     * @return void
     */
    public function run()
    {
        echo 'Application Run';
    }
}
