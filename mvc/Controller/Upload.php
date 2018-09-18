<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Url;

class Upload extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

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
        $link = new Url();

        $file = $this->input->file('file');

        $path = $this->config->get('upload_dir') . basename($file->getName());

        if ($file->move($path)) {
            $this->flashMsg('File upload success', 'success');
        } else{
            $this->flashMsg('There was an error uploading the file, please try again!', 'error');
        }

        $this->redirect($link->baseUrl());
    }
}
