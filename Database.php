<?php 
require_once 'config.php';

class Database {
    protected static $connection;
    private $config =  [
        'host' => 'localhost',
        'database' => 'basic_crud',
        'user' => 'root',
        'password' => '',
    ]; 
    
    public function __construct() {
        
    }
    
    public static function connect(){
        
        if(!isset(self::$connection)){
            $dns = "mysql:host=". $this->config['host'] .";dbname=".$this->config['database'];
            self::$connection = new PDO($dns, $this->config['user'], $this->config['password']);
        }else{
            return FALSE;
        }
        
        return self::$connection;
    }
}


