<?php

namespace Mvc\Base;

use \Mvc\Base\Config;
use \Mvc\Base\View;
use \Mvc\Helper\Input;
use \Mvc\Helper\Session;

class Controller {

    protected $config  = null;
    protected $input   = null;
    protected $session = null;
    protected $view    = null;

    /**
     * Load base controller variables
     */
    public function __construct()
    {
        $this->config  = new Config();
        $this->session = new Session();
        $this->input   = new Input();
        $this->view    = new View();
    }

    /**
     * Quick fuction to allow for $this->render
     *
     * @return string
     */
    public function render($view, $params = array(), $template = 'default.html.php') {
        return $this->view->render($view, $params, $template);
    }

    /**
     * Redirect to URL
     *
     * @todo Get Base URL, Concat the Base URL with Route (Controller, Action), Test Array and String
     *
     * @param  mixed   $url        Array or string
     * @param  integer $statusCode
     */
    function redirect($url, $statusCode = 303)
    {
        if (is_array($url)) {
            $url = implode('/', $url);
        }

        header('Location: ' . $url, true, $statusCode);
        die();
    }

    /**
     * Redirect to URL
     *
     * @param  mixed   $url          URL to redirect to
     * @param  integer $statusCode   Forces the HTTP response code to the specified value. Note that this parameter only has an effect if the header is not empty.
     */
    function redirectToUrl($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }

    /**
     * Create a flash message.
     *
     * @todo create one time session var for flash_msg,
     *
     * @param  string $msg  Flash Messsage
     * @param  string $type Type of Message
     * @return void
     */
    public function flashMsg($msg, $type) {
        //$this->session->set('flashMsg', array('msg' => $msg, 'type' => $type), 1);
    }
}
