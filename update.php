<?php 

include_once("models/database.class.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <title>Update</title>

    <style>

#updateForm {
    margin-left: 17%;
    margin-top: 7%;
    margin-bottom: 10%;
}

form{
  margin-top:3%;
}

input::-webkit-calendar-picker-indicator{
    display: none;
}

.ui-datepicker-header{
  background :blue;
}

.ui-datepicker {
  width: 280px;
}

.ui-datepicker tbody tr:last-child{
  background-color: white;
}

    </style>

</head>
<body>
    
<?php 

if(!isset($_POST['id'])){

    
    header("Locatoin: system.html");


}else {

$id = $_POST['id'];

$db = new Database();
$stm= $db->connect()->prepare("SELECT * FROM client WHERE id='$id'"); 
         $stm->execute();
         while($row= $stm->fetch()){ 

?>

<div class="container">



<form action="details.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
<button class="btn btn-primary">Details</button>
</form>


<form action="subupdate.php" method="post" id="updateForm">

<input type="hidden" value="<?php echo $row['id'] ?>" name="id">

<div class="form-group row">
<div class="col-md-4">
    <label for="ex3">Name</label>
    <input class="form-control" name="name" type="text" value="<?php echo $row['name'] ?>" >
  </div>

  <div class="col-md-4">
    <label for="ex3">Domain</label>
    <input class="form-control" name="domain" type="text" value="<?php echo $row['domain'] ?>">
  </div>
</div>

<div class="form-group row">
<div class="col-md-4">
    <label for="ex3">Email</label>
    <input class="form-control" name="email" type="text" value="<?php echo $row['email'] ?>" >
  </div>

  <div class="col-md-4">
    <label for="ex3">Phone</label>
    <input class="form-control" name="phone" type="text" value="<?php echo $row['phone'] ?>">
  </div>
</div>

<div class="form-group row">
<div class="col-md-4">
    <label for="ex3">Hosting Company</label>
    <input class="form-control" name="hostcomp" type="text" value="<?php echo $row['hostcomp'] ?>" >
  </div>

  <div class="col-md-4">
    <label for="ex3">Domain Company</label>
    <input class="form-control" name="domaincomp" type="text" value="<?php echo $row['domaincomp'] ?>">
  </div>
</div>

<div class="form-group row">
<div class="col-md-4">
    <label for="ex3">Hosting Expiration</label>
    <input class="form-control" name="hostexpdate" class="datePicker" id="hdatep" type="text"   value="<?php echo $row['hostexpdate'] ?>" >
  </div>

  <div class="col-md-4">
    <label for="ex3">Domain Expiratoin </label>
    <input class="form-control" name="domexpdate" type="text"   class="datePicker" id="ddatep" value="<?php echo $row['domexpdate'] ?>">
  </div>
</div>

<div class="form-group row">
<div class="col-md-4">
    <label for="ex3">CP Username</label>
    <input class="form-control" name="cpusername" type="text" value="<?php echo $row['cpusername'] ?>" >
  </div>

  <div class="col-md-4">
    <label for="ex3">CP Password</label>
    <input class="form-control" name="cppassword" type="text" value="<?php echo $row['cppassword'] ?>">
  </div>
</div>


  <?php }
  } ?>


<button class="btn btn-success">Submit</button>
</form>

</div>

<script> 
    
          
            $( "#hdatep" ).datepicker({ dateFormat: 'yy-mm-dd' });
            $( "#ddatep" ).datepicker({ dateFormat: 'yy-mm-dd' });
           
         
  


         
    </script> 
</body>
</html>