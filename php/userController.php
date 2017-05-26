<?php 

class user{

    private $name, $email, $password;

    public function user_register($postArray){
        $this->name = $postArray['name'];
        $this->email = $postArray['email'];
        $this->password = $postArray['password'];
        $hash_password = md5($this->password);
        global $pdo;
        $query = $pdo->prepare("INSERT INTO user (name,email,password) VALUES (?,?,?)");
        $user_array = array($this->name,$this->email,$hash_password);
        if($query->execute($user_array)) {
            return true;
        }else{
            return false;
        }

    }
    public function verifyUser($postarray){
        global $pdo;
        $this->email = $postarray['email'];
        $this->password = md5($postarray['password']);
        $q = $pdo->prepare("SELECT * from user where email=? and password=?");
        $logindetails = array($this->email,$this->password);
        $q->execute($logindetails);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $result= $q->fetch();
        if($result){
            $_SESSION['username']=$result['name'];
            $_SESSION['loggedin']=true;
            $_SESSION['userid']=$result['id'];   
            return true;
        }
        else{
            return false;
        }
    }
}