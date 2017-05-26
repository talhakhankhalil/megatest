<?php 
session_start();
include "php/dbHandler.php";
$connection = new connection();
include "php/userController.php";

$user = new user();

 if (isset($_POST['login'])){
      $res = $user->verifyUser($_POST);
     if ($res){
          header('location:user-admin.php');
     }else{
         echo "not user";
     }
   
    
 }

?>
  <!doctype HTML>
   <html>
    <head>
    
    <title>Admin Login</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/admin_css.css"/>
        <script src="admin_javascript.js"></script>
    </head>
    <body>
        <div>
            <div class="login">
                
	<h1>LOGIN</h1>
                
    <form method="POST">
    	<input type="text" name="email" placeholder="Username" />
        <input type="password" name="password" placeholder="Password"/>
        <button type="submit" name="login" class="btn btn-primary btn-block btn-large">Log In.</button>
    </form>
</div>
        </div>
    </body>
</html>