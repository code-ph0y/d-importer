<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Input;

class Home extends BaseController
{
    public function actionIndex()
    {
        return $this->render('home/index.html', array());
    }
}
