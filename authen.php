<?php

//  include_once("models/database.class.php");
//   include_once('models/user.class.php');

  require_once("models/database.class.php");
  require_once("models/user.class.php");

 $user = new User();

 $db = new Database();

    $error = "Unvalid username or password";

     if( $_SERVER['REQUEST_METHOD'] == 'POST'){
         
      session_start();

        $username = $_POST['username'];
        $password = $_POST['password'];

      
        $res = $user->login($username, $password);
       

        if($res){
        
        
        // echo "<script>location='cp.php'</script>";
          header("location: cp.php");

        }else{
        
         
            $_SESSION['error'] = $error;
            header("Location: system.php");
            
        
         }
    }else {

      
      header("Location: system.php");

    }

?>

