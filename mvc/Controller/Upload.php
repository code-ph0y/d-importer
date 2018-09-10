<?php

namespace Mvc\Controller;

use Mvc\Base\BaseController;

class Upload extends BaseController
{
    public function actionIndex()
    {
        return $this->render('upload/index.html', array());
    }
}
