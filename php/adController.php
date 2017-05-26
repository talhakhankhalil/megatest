<?php 

class adController {

    private $name, $description,$cat, $location, $phone_number, $status, $cats=[],$ads=[];
   
     public function sessionID($id){
     
         return $_SESSION['userid'];
    }

    
    public function getCats(){
        global $pdo;
        $q = $pdo->query("SELECT * from category");
        $res = $q->execute();
        $q->setFetchMode(PDO::FETCH_ASSOC);
      while($result = $q->fetch()){
            $cats[] = $result;
        }

         return $cats;
    }

    public function insertAd($postArray){
        $this->name = $postArray['name'];
        $this->description = $postArray['description'];
        $this->location = $postArray['location'];
        $this->phone_number = $postArray['phone_number'];
        $this->cat = $postArray['category'];
        $this->status = 0;

        global $pdo;
        $query = $pdo->prepare("INSERT INTO ads (name,description,location,phone_number,user_id,cat_id,status,created_at,updated_at) VALUES (?,?,?,?,?,?,?,?,?)");
        $question_fields = array($this->name,$this->description,$this->location,$this->phone_number,$_SESSION['userid'],$this->cat,$this->status,date("Y.m.d"),date("Y.m.d"));
        $res = $query->execute($question_fields);
        if($res) {
            return true;
        }else{
            return false;
        }

    }
    
    public function getAds(){
         global $pdo;
        $q = $pdo->query("SELECT * from ads");
        $res = $q->execute();
        $q->setFetchMode(PDO::FETCH_ASSOC);
      while($result = $q->fetch()){
            $ads[] = $result;
        }

         return $ads;
    }
}