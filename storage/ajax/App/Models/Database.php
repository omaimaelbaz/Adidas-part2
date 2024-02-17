<?php
namespace App\Models;
class Database
{
    public static $servername = "localhost";
    public static $username = "root";
    public static $password = "";
    public static $dbname = "wiki";

    public static function connect()
    {
        try {
            $conn = new \PDO("mysql:host=" . self::$servername . ";dbname=" . self::$dbname, self::$username, self::$password);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $conn; 
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;  
        }
    }

   
}

