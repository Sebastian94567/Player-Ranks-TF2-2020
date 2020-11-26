<?php 
class Connection{	  
    public static function Connect() {        
        define('host', 'localhost');
        define('db_name', 'DB');
        define('user', 'USER');
        define('password', 'PASSWORD');					        
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $connection = new PDO("mysql:host=".host."; dbname=".db_name, user, password, $options);			
            return $connection;
        }catch (Exception $e){
            die("The Connection error is: ". $e->getMessage());
        }
    }
}
