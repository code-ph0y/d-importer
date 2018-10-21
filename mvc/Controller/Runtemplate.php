<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Input;

class Runtemplate extends BaseController
{
    public function actionIndex()
    {
        $template = $this->input->post('template');

        echo $template;
    }
}
