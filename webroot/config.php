<?php
/**
 * Config-file for Anax. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Anax paths.
 *
 */
define('ELF_INSTALL_PATH', __DIR__ . '/..');
define('ELF_THEME_PATH', ELF_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(ELF_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Anax variable.
 *
 */
$elf = array();
 
 
/**
 * Site wide settings.
 *
 */
$elf['lang']         = 'sv';
$elf['title_append'] = ' | Elf en webbtemplate';

/**
 * Theme related settings.
 *
 */
 
$elf['stylesheets'] = array('css/style.css','css/normalize.css','css/skeleton.css');
$elf['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$elf['modernizr'] = 'js/modernizr.js';
 
$elf['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
 //$anax['jquery'] = null; // To disable jQuery
$elf['javascript_include'] = array();
//$anax['javascript_include'] = array('js/main.js'); // To add extra javascript 

// Add js/main.js for inklusion
//$anax['javascript_include'][] = 'js/main.js';
//$anax['javascript_include'][] = 'js/other.js';

/**
 * Google analytics.
 *
 */
$elf['google_analytics'] = 'UA-22093351-1'; // Set to null to di	sable google analytics

$menu = array(
  'example'  => array('text'=>'Example',  'url'=>'index.php?example'),
);