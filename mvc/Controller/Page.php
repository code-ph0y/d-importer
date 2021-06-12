<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Input;

class Page extends BaseController
{
    public function actionDatasources()
    {
        return $this->renderJson('page/datasource.html');
    }

    public function actionActions()
    {
        return $this->renderJson('page/actions.html');
    }


    public function actionOutput()
    {
        return $this->renderJson('page/output.html');
    }
}
