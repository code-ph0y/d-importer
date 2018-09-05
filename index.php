<?php
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);

    require_once 'mvc/config/directories.php';
    require_once 'mvc/base/Psr4AutoloaderClass.php';

    // Get the autoloader class
    $autoloader = new Mvc\Base\Psr4AutoloaderClass();

    $autoloader->register();

    // Add our namespace and the folder it maps to
    $autoloader->addNamespace('Mvc\Base', 'mvc/base');
    $autoloader->addNamespace('Mvc\Controller', 'mvc/controller');

    // Create an Application
    $app = new Mvc\Base\BaseApp();

    // Run the Application
    $app->run();
