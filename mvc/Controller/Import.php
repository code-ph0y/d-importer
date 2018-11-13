<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Input;

use Mvc\Helper\TemplateRunner;

class Import extends BaseController
{
    public function actionIndex()
    {
        $tr = new TemplateRunner();

        var_dump($this->input->post());

        $template = $this->input->post('template');

        //$tr->matchParams($template)

        echo $template;
    }
}
