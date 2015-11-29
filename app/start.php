<?php
//Turn error reporting on
ini_set('display_errors', 1);
error_reporting(~0);

//dirname(__DIR__) gets parent directory of the file being called, due to the .htaccess rules /public/index.php will always be the file called so the directory /public is in (the root directory) will always be the value of dirname(__DIR__)
define("INC_ROOT", dirname(__DIR__));

//This is the line shown in the example but as I'm running this in a vagrant box with a domain (project.dev) it won't work for me
//define("ASSET_ROOT", "http://" . $_SERVER["HTTP_HOST"] . str_replace($_SERVER["DOCUMENT_ROOT"], "", str_replace("\\", "/", INC_ROOT)) . "/public");

//This is my altered version of the commented out original code above, needed to do this as I'm hosting with a Vagrant box which causes the above not to work
define("ASSET_ROOT", "http://" . $_SERVER["HTTP_HOST"]);

//Composer autoloader which 'links' to all class files
require INC_ROOT . "/vendor/autoload.php";
