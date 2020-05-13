<?php
namespace lib;
require_once "connect.php";
class Connector{
    private static $conn;

    public static function Connector(){
        if(is_null(self::$conn)){
            self::$conn = connect();
        }
        return self::$conn;
    }
}