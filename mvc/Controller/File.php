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

        $data->read($upload_dir . $filename);

        $outputArray = array();

        for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
        	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
                $outputArray[$i-1][$j-1] = (!empty($data->sheets[0]['cells'][$i][$j])) ? $data->sheets[0]['cells'][$i][$j] : '';
        	}
        }

        echo json_encode($outputArray);
        exit;
    }
}
