
<?php


//include_once('database.class.php');
require_once("database.class.php");

class User extends Database {


  


    public function login($username, $password){

        $db = new Database();

        try{

        $stm = $db->connect()->prepare("SELECT * FROM user WHERE 
        username = :username ");

        $stm->bindValue(':username', $username);
            

        $stm->execute();    

        $count = $stm->rowCount();
        $row = $stm->fetch(PDO::FETCH_ASSOC);

        if($count==1 && !empty($row)){

            if(password_verify($password, $row['password'])){

             session_start();

            $_SESSION['user_id'] = $row['id'];
            return true ;
            }
        }
        else {

            return false;
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    }



}