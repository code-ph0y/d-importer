<?php

namespace Mvc\Controller;

use Mvc\Base\BaseController;

class Upload extends BaseController
{

    public function actionIndex()
    {
        return $this->render('upload/index.html', array());
    }

    /**
     * Save a file upload to the data folder
     *
     * @todo Add base input and file function, get the file, save file to data folder, look into db solution
     */
    public function actionSave()
    {
        // stub for Upload actionSave
    }
}
