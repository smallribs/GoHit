<?php

namespace Core\Library;

class Config {

    static public $config = array();

    static public function get($name, $file) {
        if(isset(self::$config[$file])) {
            return self::$config[$file][$name];
        }else {
            $path = HITYPE . '/Config/' . $file .".php";
            if(is_file($path)) {
                $config = include $path;
                if(isset($config[$name])) {
                    self::$config = $config;
                    return $config[$name];
                }else {
                    throw new \Exception('没找到相关配置项' . $name);
                }
            }else {
                throw new \Exception('没找到相关配置文件' . $path);
            }
        }
    }
}