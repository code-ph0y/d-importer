<?php

namespace Mvc\Controller;

use Mvc\Base\Controller as BaseController;
use Mvc\Helper\Input;

use Mvc\Helper\File;

class Installer extends BaseController
{
    public function actionIndex()
    {
        $post = $this->input->post();

        return $this->render('installer/index.html', compact('post'), 'installer.html.php');
    }

    public function actionSave()
    {
        // Get post variables
        $postVars = $this->input->post();

        // Required Fields
        $requiredFields = array(
            'driver',
            'host',
            'user',
            'password',
            'dbname'
        );

        $errors = array();

        // Check and validate required fields
        foreach ($requiredFields as $field) {
            if (!isset($postVars[$field])) {
                $errors[] = ucfirst($field) . ' field is missing.';
            }
        }

        if (!empty($errors)) {
            // Set flash message
            $this->flashMsg($errors, 'error');

            // Redirect to installer
            return $this->redirect('installer/index', $postVars);

        } else {
            // Create database files contents
            $databaseContent  = "<?php \n\n";
            $databaseContent .= '$config["database"] = array(' . "\n"   ;
            $databaseContent .= "'driver'   => '" . $postVars['driver'] . "',\n";
            $databaseContent .= "'host'     => '" . $postVars['host'] . "',\n";
            $databaseContent .= "'dbname'   => '" . $postVars['dbname'] . "',\n";
            $databaseContent .= "'user'     => '" . $postVars['user'] . "',\n";
            $databaseContent .= "'password' => '" . $postVars['password'] . "',\n";
            $databaseContent .= ");\n";

            $file = BASE_DIR . '/data/database.php';

            // Output file to data folder
            file_put_contents($file, $databaseContent);

            // Redirect to data-importer
            return $this->redirect('/');
        }
    }
}
