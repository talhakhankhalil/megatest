<?php 
class connection{
    public function __construct(){
        global $pdo;
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=megatest','root','');
        }catch(PDOException $e){
            exit('Datebase Error');
        }
    }
}