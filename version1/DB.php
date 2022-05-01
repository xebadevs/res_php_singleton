<?php

class DB {
    static $db;

    static function getConnection(){
        // si no está creado mi objeto PDO
        if(!isset(self::$db)){
            self::$db = new PDO(
                'mysql:host=127.0.0.1;dbname=comercioit',
                'root',
                ''
            );
        }
        return self::$db;
    }
}