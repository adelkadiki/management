<?php 


class Database {

    private $host = "localhost";
    private $username = "britishg_adel";
    private $password = "Engineer2021";
    private $db = "britishg_digits";
    private $port = '3306';

      public function connect(){

        try{

        $dbc = 'mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->db;
        $pdo = new PDO($dbc, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch(PDOException $e){
          echo $e->getMessage();
        }
         

        return $pdo;
        
    }



}

// $pdo = new PDO("mysql:host=localhost;port=3306;dbname=digits","root","");

// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>