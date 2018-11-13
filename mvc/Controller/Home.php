<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Input;

class Home extends BaseController
{
    public function actionIndex()
    {
        $dataFiles = array();

        // Get the files in the upload_dir directory
        foreach(new \DirectoryIterator($this->config->get('upload_dir')) as $item) {
           if (!$item->isDot() && $item->isFile()) {
               $dataFiles[] = $item->getFilename();
           }
        }

        return $this->render('home/index.html', array('files' => $dataFiles));
    }
}
