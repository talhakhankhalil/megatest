<?php 
class connection{
    public function __construct(){
        global $pdo;
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=irfan','root','');
            $pdo->setAttribute(PDO::ATTR_ERMODE, PDO::ERMODE_EXCEPTION);
        }catch(PDOException $e){
            echo $e-getMessage();
        }
    }
}
?>