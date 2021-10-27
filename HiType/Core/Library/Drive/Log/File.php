<?php

namespace Core\Library\Drive\Log;

use Core\HiType;

class File {
    public $path;
    public function __construct() {
        $this->path = HITYPE . '/Log/';
    }

    public function log($message) {
        if(!is_dir($this->path)) {
            mkdir($this->path, '0777', true);
        }

        $content = date('Y-m-d H:i:s') . ": " . $message;
        $filename = date('YmdH');
        return file_put_contents($this->path. $filename.'.log', json_encode($content).PHP_EOL, FILE_APPEND);
    }
}
