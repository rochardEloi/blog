<?php
include $_SERVER['DOCUMENT_ROOT'].'/blog/config/dbconfig.php';
class Database{

    public static function DatabaseConnection()
    {
        $database_servername = SERVER;
        $database_username = USERNAME;
        $database_password = PASSWORD;
        $database_dbname= DBNAME;

        try {
            $conn = new PDO("mysql:host=$database_servername;dbname=$database_dbname", $database_username, $database_password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $conn;
    }

}

?>