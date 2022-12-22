<?php
session_start();

// define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname(__DIR__).DS);
define("APP",ROOT_PATH.'APP'.DS);
define("CORE",APP.'Core'.DS);
define("CONFIG",APP.'Config'.DS);
define("CONTROLLERS",APP.'Controllers'.DS);
define("MODELS",APP.'Models'.DS);
define("VIEWS",APP.'Views'.DS);
define("LIBS",APP.'Libs'.DS);
define("PUBLIC",ROOT_PATH.'public'.DS);
define("UPLOADS",ROOT_PATH.'public'.DS.'uploads'.DS);

// // configuration files
require_once(CONFIG.'config.php');
require_once(CONFIG.'healpers.php');
// require_once(CONFIG.'helpers.php


// autoload all classes 
$modules = [ROOT_PATH,APP,CORE,VIEWS,CONTROLLERS,MODELS,CONFIG,LIBS];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');

new app();