<?php 

include_once("models/database.class.php");

session_start();

if(isset($_POST['id'])){

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$domain = $_POST['domain'];
$phone = $_POST['phone'];
$hostcomp = $_POST['hostcomp'];
$domaincomp = $_POST['domaincomp']; 
$hostexpdate = $_POST['hostexpdate'];
$domexpdate = $_POST['domexpdate'];
$cpusername = $_POST['cpusername'];
$cppassword = $_POST['cppassword'];

// echo $id.'<br>';
// echo $name.'<br>';
// echo $domain.'<br>';
// echo $hostexpdate.'<br>';
// echo $domexpdate.'<br>';

$db = new Database();

$stm= $db->connect()->prepare("UPDATE client SET name='$name', email='$email', domain='$domain', phone='$phone',
hostcomp='$hostcomp', domaincomp='$domaincomp', hostexpdate='$hostexpdate', domexpdate='$domexpdate',
cpusername='$cpusername', cppassword='$cppassword' WHERE id='$id'");

$stm->execute();


}

$_SESSION['id'] = $id;
header("Location: details.php");

?>