<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Input;

class Page extends BaseController
{
    public function actionDatasources()
    {
        $datasources = [
            [
                'id' => '05b9c8a048cc5ddcbf1dd48719c9aa9f',
                'name' => 'My Database',
                'type' => 'Database (MySQL)'
            ],
            [
                'id' => '7906e714d2403d3334b5fb0c4f91508e',
                'name' => 'My Spreadsheet',
                'type' => 'Spreadsheet'
            ]
        ];

        return $this->renderJson('page/datasource.html', compact('datasources'));
    }

    public function actionDatasourcesEdit()
    {
        // Stub for edit
    }

    public function actionDatasourcesRemove()
    {
        // Stub for remove
    }

    public function actionActions()
    {
        return $this->renderJson('page/actions.html');
    }

    public function actionOutput()
    {
        return $this->renderJson('page/output.html');
    }
}
