<?php

    // Load config
    require_once 'config/config.php';

    // Automatic Library Loader 
    spl_autoload_register(function($classname){
        require_once 'libraries/' . $classname . '.php';
    });

?>
