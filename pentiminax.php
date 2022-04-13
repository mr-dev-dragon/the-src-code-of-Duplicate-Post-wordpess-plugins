<?php

/*
Plugin Name: ahmed Duplicate Post
Plugin URI: 
Description: Duplicate Post
Version: 0.2.0
Author: ahmed aoulad amar 
Author URI: https://github.com/Ahmed-Aoulad-Amar
*/

use Pentiminax\DuplicatePost\PentiminaxPlugin;

if ( ! defined( 'ABSPATH' ) )
	exit;

define('PENTIMINAX_PLUGIN_DIR', plugin_dir_path(__FILE__));

require PENTIMINAX_PLUGIN_DIR . 'vendor/autoload.php';

$plugin = new PentiminaxPlugin(__FILE__);