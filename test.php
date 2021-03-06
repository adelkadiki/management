<?php 

 $host = "localhost";
    $username = "cipherdi_adel";
    $password = "Engineer2021";
     $db = "cipherdi_digits";
     $port = '3306';

     try{

        $dbc = 'mysql:host='.$host.';port='.$port.';dbname='.$db;
        $pdo = new PDO($dbc, $username, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch(PDOException $e){
          echo $e->getMessage();
        }


        $stm = $pdo->prepare("SELECT * FROM client");
        $stm->execute();

        $res = $stm->fetchAll();

        foreach($res as $row){

            echo $row['name'].'<br>';
        }


?>