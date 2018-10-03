<?php

    $config['database_config_path'] = BASE_DIR . '/data/database/default.php';

    if (file_exists($config['database_config_path'])) {
        require($config['database_config_path']);
    }
