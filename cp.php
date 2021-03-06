<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<style>
.table td, th {
   text-align: center;   
}



</style>

</head>

<body>
    
    <div class="container">

    <?php 

    echo $_SESSION['user_id'];

    include_once("models/database.class.php");

    $db = new Database();
    $stm= $db->connect()->prepare("SELECT domain, email, id FROM client"); 
             $stm->execute();   
    ?>
<a href="logout.php" > <button style="margin-top:2%;" class="btn btn-primary">Sign out</button> </a>
<div class="form-group" style="margin-top:2%; margin-bottom:4%;">
    <input placeholder="Search" class="form-control" id="search">
</div>
<table  class="table" id="res-table">

<thead class="thead-dark">
<tr>
<th>Domain</th>
<th>Email</th>
<th></th>
</tr>
</thead>
<?php while($row = $stm->fetch()){ ?>

<tbody>
<tr>


<td><?php echo $row['domain'] ;?></td>
<td> <?php echo $row['email'] ;  ?> </td>

<td>
<form action="details.php" method="post">
<input type="hidden" value="<?php echo $row['id'] ?> " name="id">
<button class="btn btn-success">Details</button>
</form>
</td>
</tr>
</tbody>
<?php }?>

</table>
    </div>

  <script>
$(function() {
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#res-table > tbody > tr").filter(function() {   
           $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 

</body>

</html>



 