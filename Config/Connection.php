<?php
namespace PHP_framework\Config;
use PHP_framework\Config\config;
class Connection
{
    
    public static function MysqlConnection()
    {
  
        $conn = mysqli_connect(config::$host,config::$user,config::$password,config::$dbname);
        if (!$conn) 
        {
           return "DATABASE NOT CONNECTED.";        
        }
        else
        {
            return $conn;
        }
    }

}
?>