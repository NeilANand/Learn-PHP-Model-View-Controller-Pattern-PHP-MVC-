<?php
//Turn error reporting on
ini_set('display_errors', 1);
error_reporting(~0);

//dirname(__DIR__) gets parent directory of the file being called, due to the .htaccess rules /public/index.php will always be the file called so the directory /public is in (the root directory) will always be the value of dirname(__DIR__)
define("INC_ROOT", dirname(__DIR__));

//Composer autoloader which 'links' to all class files
require INC_ROOT . "/vendor/autoload.php";
