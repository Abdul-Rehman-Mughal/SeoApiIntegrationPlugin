<?php

/**
 * Plugin Name: Code Crafter Plugin
 * Description: Manages Custom Post types, taxonomies, and wordpress related stuff.
 * Version: 1.0
 * Author: Abdul Rehman
 */

defined('ABSPATH') or die('I can see you');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

if (class_exists('Codecrafterplugin\\Inc\\Init')){
    
}
