<?php
require_once 'Database.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User {
    private $db;
    
    public function __construct(){
       // $this->db = new Db();
        $this->db = Database::connect();
    }
    
    //create 
    public function create(){
        
    }
    
    //edit
    public function edit($id){
        
    }
    
    //delete
    public function delete($id){
        
    }
    
    //getuser
    public function getusers(){
     $data = [
         ['id'=>'01', 'name'=> 'jp', 'age'=> '30', 'gender'=> 'M', 'email'=>'fdfd@gmail.com'],
          ['id'=>'02', 'name'=> 'bani', 'age'=> '29', 'gender'=> 'F', 'email'=>'bani@gmail.com'],
          ['id'=>'03', 'name'=> 'vijay', 'age'=> '36', 'gender'=> 'M', 'email'=>'@gmail.com'],  
     ];
     
     return $data;
    }
    
    public function getfruits(){
        $types = [
        ['type'=>'apple'],
            ['type'=> 'orange']
        
        ];
    }
    
}
