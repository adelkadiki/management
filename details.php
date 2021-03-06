<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Details</title>
    <style>
        .table tr {
            text-align: center;
        }

        .table {
            margin-top: 4%;
        }

    </style>
</head>
<body>

<?php 

session_start();

if(isset($_POST['id'])){

    $id = $_POST['id'];
}else if(isset($_SESSION['id'])) {

    $id=$_SESSION['id'];
    
}else {
    header("Location: system.php");
}




include_once("models/database.class.php");

    $db = new Database();
    $stm= $db->connect()->prepare("SELECT * FROM client WHERE id='$id'"); 
             $stm->execute();
             
             while($row= $stm->fetch()){
               
             

?>

<div class="container">

<a href="cp.php">Control Panel</a>


<table class="table">

<thead class="thead-dark">
            <tr>
            <th>Name</th>
            <th>Email</th>
             </tr>
</thead>
<tbody>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
</tbody>

<thead class="thead-dark">
            <tr>
            <th>Domain</th>
            <th>Phone</th>
             </tr>
</thead>
<tbody>
                <tr>
                    <td><?php echo $row['domain']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                </tr>
</tbody>

<thead class="thead-dark">
            <tr>
            <th>Hosting Company</th>
            <th>Domain Name Company</th>
             </tr>
</thead>
<tbody>
                <tr>
                    <td><?php echo $row['hostcomp']; ?></td>
                    <td><?php echo $row['domaincomp']; ?></td>
                </tr>
</tbody>

<thead class="thead-dark">
            <tr>
            <th>Hosting Expiratoin Date</th>
            <th>Domain Expiratoin Date</th>
             </tr>
</thead>
<tbody>
                <tr>
                    <td><?php echo $row['hostexpdate']; ?></td>
                    <td><?php echo $row['domexpdate']; ?></td>
                </tr>
</tbody>

<thead class="thead-dark">
            <tr>
            <th>CP username</th>
            <th>CP password</th>
             </tr>
</thead>
<tbody>
                <tr>
                    <td><?php echo $row['cpusername']; ?></td>
                    <td><?php echo $row['cppassword']; ?></td>
                </tr>
</tbody>



</table>



<form action="update.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<button class="btn btn-success" >Update</button>
</form>

    <?php }?>
</div>
</body>
</html>