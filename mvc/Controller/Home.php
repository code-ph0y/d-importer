<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Input;

class Home extends BaseController
{
    public function actionIndex()
    {
        // Get files uploaded
        $dataFiles = scandir(BASE_DIR . '/data/files/');

        // Unset unwanted
        unset($dataFiles[0], $dataFiles[1]);

        return $this->render('home/index.html', array('files' => $dataFiles));
    }
}
