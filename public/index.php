<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('BASE_DIR', realpath(__DIR__ . '/../'));

// Get the autoloader class
require BASE_DIR . '/vendor/autoload.php';

// Create an Application
$app = new Mvc\Base\App();

// Run the Application
$app->run();
