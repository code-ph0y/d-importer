<?php

namespace Mvc\Base;

use \Mvc\Base\Config;
use \Mvc\Base\View;
use \Mvc\Helper\Input;
use \Mvc\Helper\Session;
use \Mvc\Helper\Url;
use \Mvc\Base\Model;

class Controller {

    protected $config  = null;
    protected $input   = null;
    protected $session = null;
    protected $view    = null;
    protected $model   = null;

    /**
     * Load base controller variables
     */
    public function __construct()
    {
        $this->config  = new Config();
        $this->session = new Session();

        $this->session->startSession();

        $this->input   = new Input();

        if ($this->session->has('redirectPost')) {
            $this->input->setPost(false, $this->session->get('redirectPost'));
            $this->session->unset('redirectPost');
        }

        $this->view  = new View();
        $this->model = new Model();
    }

    /**
     * Quick fuction to allow for $this->render
     *
     * @return string
     */
    public function render($view, $params = array(), $template = 'default.html.php') {
        // Get flash message
        $params['flashMsg'] = $this->session->get('flashMsg');

        return $this->view->render($view, $params, $template);
    }

    /**
     * @param $view
     * @param array $params
     * @param string $template
     * @return mixed
     */
    public function renderJson($view, $params = array(), $template = 'default.json.php') {
        // Get flash message
        $params['flashMsg'] = $this->session->get('flashMsg');

        return $this->view->render($view, $params, $template);
    }

    /**
     * Redirect to URL
     *
     * @todo Get Base URL, Concat the Base URL with Route (Controller, Action), Test Array and String
     *
     * @param  mixed   $url         Array or string
     * @param  mixed   $params      Params too be sent
     * @param  integer $statusCode
     */
    function redirect($url, $params = array(), $statusCode = 303)
    {
        $this->session->set('redirectPost', $params);

        if (is_array($url)) {
            $url = implode('/', $url);
        }

        $urlHelper = new Url();

        header('Location: ' . $urlHelper->baseUrl() . $url, true, $statusCode);
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
     * @param  string $message  Flash Messsage
     * @param  string $type     Type of Message
     * @return void
     */
    public function flashMsg($message, $type)
    {
        $this->session->set('flashMsg', array('message' => $message, 'type' => $type), 1);
    }
}
