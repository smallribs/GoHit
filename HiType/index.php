<?php

define('HITYPE', str_replace('\\','/',realpath(dirname(__FILE__).'/')));
define('CORE', HITYPE . '/Core');
define('APPLICATION', HITYPE. '/Application');

define('SMARTY_DIR', HITYPE.'/Extension/Smarty/');
define('VIEW', HITYPE.'/View/');

define('DEBUG', true);

include "vendor/autoload.php";

if(DEBUG) {
    $whoops = new \Whoops\Run();
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}else {
    ini_set('display_error', 'Off');
}
require_once(CORE . '/Common/Function.php');
require_once(CORE . '/HiType.php');
spl_autoload_register('Core\HiType::load');
Core\HiType::run();