<?php
class db {
    static $dsn = 'mysql:host=db;dbname=cms_mvc_db;charset=utf8';
    static $user = 'root';
    static $pwd = 'example';
    static $db = 'cms_mvc_db';

    static function dbConnect() : PDO 
    {
        $pdo = new PDO(self::$dsn, self::$user, self::$pwd);
        return $pdo;
    } 
        
}