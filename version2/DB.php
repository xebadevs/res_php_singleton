<?php

class DB {
    static $db;
    static $stmt;

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

    // Recibo la consulta sql por parámetro
    // Retorno $db (creado por el método getConnection()), que es un objeto
    // Como tal, empleo el método 'prepare' que prepara esa misma consulta recibida
    static function getStatement($sql){
        return self::getConnection()->prepare($sql);
    }
}