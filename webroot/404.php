<?php 
/**
 * This is a Elf pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Anax container.
$anax['title'] = "404";
$anax['header'] = "";
$anax['main'] = "This is a Elf 404. Document is not here.";
$anax['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
  
include(ELF_THEME_PATH);