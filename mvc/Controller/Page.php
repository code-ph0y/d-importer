<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Input;

class Page extends BaseController
{
    public function actionDatasources()
    {
        return $this->renderJson([
            'html' => '<h1>Datasources</h1>'
        ]);
    }

    public function actionActions()
    {
        return $this->renderJson([
            'html' => '<h1>Actions</h1>'
        ]);
    }


    public function actionRun()
    {
        return $this->renderJson([
            'html' => '<h1>Run</h1>'
        ]);
    }
}
