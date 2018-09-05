<?php

    require_once 'mvc/Config/application.php';
    require_once 'mvc/Config/route.php';

    require_once 'mvc/Base/Psr4AutoloaderClass.php';

    if ($config["environment"] == 'dev') {
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
    }

    // Get the autoloader class
    $autoloader = new Mvc\Base\Psr4AutoloaderClass();

    $autoloader->register();

    // Add our namespace and the folder it maps to
    $autoloader->addNamespace('Mvc\Base', 'mvc/Base');
    $autoloader->addNamespace('Mvc\Controller', 'mvc/Controller');

    // Create an Application
    $app = new Mvc\Base\BaseApp();

    // Run the Application
    $app->run($config);
