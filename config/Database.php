<?php
// Bambam, please keep this simple for now ok!
// creating a database class for database connection
// fields: host, user, password, database_name
// methods: static connect()
// this is actually a static class no instance need to be created
class Database{
    private static $host  = 'localhost';
    private static $user = "root";
    private static $password = "";
    private static $db_name = "Library_schema";
    private static $dsn = "mysql:host=" .self::$host.";dbname=". self::$db_name .";port:3306";
    static function connect(){
        try{
            $pdo = new PDO(self::$dsn, self::$user, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch (PDOException $e){
            echo json_encode([
                "error" =>  $e->getMessage()
            ]);
        }
    }
}