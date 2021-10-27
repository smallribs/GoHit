<?php
namespace Core\Library;

class Model {

    public static $connect;

    public function __construct() {
        $database = \Core\Library\Config::get('database', 'Database');
        $host = $database['host'];
        $username = $database['username'];
        $password = $database['password'];
        $dbname = $database['dbname'];
        $port = $database['port'];

        $connect = mysqli_connect($host, $username, $password, $dbname);
        if(mysqli_connect_errno($connect)) {
            throw new \Exception("MySQL连接失败: " . mysqli_connect_error());
        }

        self::$connect = $connect;
    }

    public function query($sql, $error = false) {
        $result = mysqli_query(self::$connect, $sql);
        \Core\Library\Logger::log("SQL:" . $sql);
        if($error) {
            if(!$result) {
                echo("Mysql 错误: " . mysqli_error(self::$connect));
            }
        }
        if($result) {
            $data = mysqli_fetch_array(mysqli_query(self::$connect, $sql), MYSQLI_NUM);
        }else {
            $data = NULL;
        }

        return $data;
    }
}