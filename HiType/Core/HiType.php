<?php
namespace Core;

class HiType {

    public static $ClassMap = array();


    static public function run() {

        $logger = new \Core\Library\Logger();
        $logger->init();

        $route = new \Core\Library\Route();
        $controllerName = $route->controller;
        $action = $route->action;
        $controllerFile = APPLICATION . '/' . $controllerName . 'Controller.php';
        $controllerClass = '\Application\\' . $route->controller;
        if(is_file($controllerFile)) {
            include $controllerFile;
            $controller = new $controllerClass();
            $controller->$action();
        }

    }

    static public function load($class) {
        if(isset($ClassMap[$class])) {
            return true;
        }else {
            $class = str_replace('\\', '/', $class);
            $file = HITYPE . '/' . $class . '.php';
            if(is_file($file)) {
                require_once($file);
                self::$ClassMap[$class] = $class;
            }else {
                return false;
            }
        }
    }
}