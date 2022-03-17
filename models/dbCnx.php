<?php

class dbCnx{
    /* Database connection start */
    public static $dbhost = "localhost";
    public static $username = "root";
    public static $password = "";
    public static $dbname = "db_abdo";
    public static $conn;

   /* public static function getConnstring(){
        try{
        $h = self::$dbhost;
        $db = self::$dbname;
        
        $conn = new PDO("mysql:host=$h;dbname=$db", self::$username, self::$password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        
    }
    return self::$conn; 
}*/
    
    static  function getConnstring() {
        $con = mysqli_connect(self::$dbhost, self::$username, self::$password, self::$dbname) or die("Connection failed: " . mysqli_connect_error());
 
        // check connection 
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        } 
        else {
            self::$conn = $con;
        }
        return self::$conn;
    }
    
    
}
    //$cnn = dbCnx::getConnstring();
?> 