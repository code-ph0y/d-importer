<?php

define('BASE_DIR', __DIR__);

// Get the autoloader class
require BASE_DIR . '/vendor/autoload.php';

// Create an Application
$app = new Mvc\Base\App();

// Run the Application
$app->run();
