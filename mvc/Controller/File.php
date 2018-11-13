<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\ExcelReader;

class File extends BaseController
{
    /**
     * Load am excel file into json format
     *
     * @return string json
     */
    public function actionLoad()
    {
        $filename = $this->input->post('filename');

        $data = new ExcelReader();

        $data->setOutputEncoding('CP1251');

        $upload_dir = $this->config->get('upload_dir');

        echo json_encode($data->readToAssoc($upload_dir . $filename));
        exit;
    }
}
