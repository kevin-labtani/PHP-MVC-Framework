<?php

    // Load config
    require_once 'config/config.php';

    // auto loader for Core Libraries
    spl_autoload_register(function ($className) {
        require_once "libraries/{$className}.php";
    });
