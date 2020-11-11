<?php
/*
Plugin Name: Clément Décou CORE
Description: Logique métier pour le thème 2020
Author: Clément Décou
Version: 1.0
*/

require_once __DIR__ . '/vendor/autoload.php';

add_filter('simply_config_directories', function($arrayDirectories) {
    $arrayDirectories[] = __DIR__ . '/config';
    return $arrayDirectories;
});

// Init acf
if (is_admin()) {
    \ClementCore\Admin\Admin::init();
}


