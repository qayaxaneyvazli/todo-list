<?php

// ay brat config icinde DB classin ne gezir? bunu kim tupurub bura asjfuhefuigw
class DB
{

    const servername = 'localhost';
    const dbname = 'todolist';
    const username = 'root';
    const password = '';

    public static function connect()
    {

        try {
            $dsn = "mysql:host=" . SELF::servername . ";dbname=" . SELF::dbname . "";
            $pdo = new PDO($dsn, SELF::username, SELF::password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            die("Failed to connect to DB: " . $e->getMessage());
        }
    }
}
