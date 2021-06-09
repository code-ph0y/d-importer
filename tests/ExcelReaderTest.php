<?php

use PHPUnit\Framework\TestCase;
use Mvc\Helper\ExcelReader;
use Mvc\Base\Config;

class ExcelReaderTest extends TestCase
{
    public function testDate()
    {
        $config      = new Config();
        $excelreader = new ExcelReader();

        $file_path = $config->get('upload_dir') . 'example.xls';

        $excelData = $excelreader->readToAssoc($file_path);

        $this->assertEquals('20/10/2018', $excelData[1][2]);
    }
}
