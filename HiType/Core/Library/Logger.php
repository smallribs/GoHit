<?php
namespace Core\Library;

class Logger {

    static $class;

    public function init() {
        self::$class = new \Core\Library\Drive\Log\File();
    }

    static public function log($message, $file= '.log') {
        self::$class->log($message, $file);
    }
}