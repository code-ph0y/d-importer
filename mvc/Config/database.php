<?php

    $config['database_config_path'] = __DIR__ . '/../../data/database/default.php';

    if (file_exists($config['database_config_path'])) {
        require($config['database_config_path']);
    }
