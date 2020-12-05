<?php
/*
Plugin Name: Clément Décou CORE
Description: Logique métier pour le thème 2020
Author: Clément Décou
Version: 1.0
*/

use ClementCore\Model\Project;
use ClementCore\Model\ProjectTag;

require_once __DIR__ . '/vendor/autoload.php';

add_filter('simply_config_directories', function($arrayDirectories) {
    $arrayDirectories[] = __DIR__ . '/config';
    return $arrayDirectories;
});

// Add model for project tag
add_filter('simply_model_term_mapping', function(array $mapping) {
    $mapping['project_tag'] = ProjectTag::class;
    return $mapping;
});

add_filter('simply_model_post_type_mapping', function(array $mapping) {
    $mapping['project'] = Project::class;
    return $mapping;
});
