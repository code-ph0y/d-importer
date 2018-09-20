<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Input;

class Home extends BaseController
{
    public function actionIndex()
    {
        // Get files uploaded
        $data_files = scandir(BASE_DIR . '/data');

        // Unset unwanted
        unset($data_files[0], $data_files[1]);

        return $this->render('home/index.html', array('files' => $data_files));
    }
}
