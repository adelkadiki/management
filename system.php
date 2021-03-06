<?php

// $password = 'admin';
// $hash= password_hash($password, PASSWORD_DEFAULT);
// $res = password_verify('admin', $hash);
// echo $res;

session_start();


 ?>


 <html>
 
 <head>
 
<style>

form{

    margin-left: 40%;
    margin-top: 10%;
}

input{

    margin-bottom: 20px;
}

</style>

 </head>

 <body>
 <?php
 if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo '<span style"text-align=center;"=>$error</span>';
                    } ?>
 
 <form method="POST" action="authen.php">
 
      <input type="text" name="username" />  <br>
      <input type="password" name="password" />  

      <button type="submit" name="login">Login</button>
 
 </form>
 
 </body>
 
 
 </html>
<?php unset($_SESSION["error"]) ?>