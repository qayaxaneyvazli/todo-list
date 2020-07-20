<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class DB {

CONST servername='localhost';
CONST dbname='todolist';
CONST username='root';
CONST password='';

public static function connect(){

    try{
        $dsn= "mysql:host=" . SELF::servername. ";dbname=" . SELF::dbname ."";
        $pdo=new PDO($dsn, SELF::username, SELF::password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;

}
catch (PDOException $e)
    {
         die("Failed to connect to DB: ". $e->getMessage());
    }
}

}

?>
