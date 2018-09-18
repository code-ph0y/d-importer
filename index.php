<?php

// Set Base Directory
const BASE_DIR = __DIR__;

// Get the autoloader class
require __DIR__ . '/vendor/autoload.php';

// Create an Application
$app = new Mvc\Base\App();

// Run the Application
$app->run();
