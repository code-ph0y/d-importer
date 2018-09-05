<?php

namespace Mvc\Base;

class BaseController {
    protected $view = null;

    public function __construct()
    {
        $this->view = new \Mvc\Base\BaseView();
    }

    /**
     * Quick fuction to allow for $this->render
     *
     * @return [type] [description]
     */
    public function render($view, $params = array(), $template = 'default.html.php') {
        return $this->view->render($view, $params, $template);
    }

}
