<?php




//include 'autoload.php';
require_once("models/database.class.php");

if($_POST['name']){

    $domain= $_POST['domain'] ;
    $name= $_POST['name'] ;
    $email= $_POST['email'];
    $phone= $_POST['phone'];
}



$db = new Database;

try{
$stm = $db->connect()->prepare("INSERT INTO client(name, email, domain, phone) 
VALUES(:name, :email, :domain, :phone)");



$stm->bindValue(':name', $name);
$stm->bindValue(':email', $email);
$stm->bindValue(':domain', $domain);
$stm->bindValue(':phone', $phone);

$stm->execute();    

}catch(PDOException $e){

    echo $e->getMessage();
}

$message = "Client name : ".$name ;


mail("info@cipherdigits.com", $domain, $message);
