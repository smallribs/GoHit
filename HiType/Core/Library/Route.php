<?php
namespace Core\Library;

class Route {
    public $controller;
    public $action;

    public function __construct() {
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            $path = $_SERVER['REQUEST_URI'];
            $paths = explode('/', trim($path));

            if(isset($paths[2])) {
                $this->controller = $paths[2];
            }else {
                $this->controller = "Home";
            }

            if(isset($paths[3])) {
                $this->action = $paths[3];
            }else {
                $this->action = "Index";
            }

        }

        $message = "Request:" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        \Core\Library\Logger::log($message);
    }
}