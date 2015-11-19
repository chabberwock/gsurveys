<?php

/*
Plugin Name: Gsurveys
Plugin URI: 
Description: Simple Google surveys
Author: Alexandr Makarov
Version: 1.0
Author URI: 
*/
use chabberwock\gsurveys\Gsurveys;

if (!defined('WPINC')) {
    die;
}

require_once __DIR__ . '/gsurveys.php';
Gsurveys::getInstance();


