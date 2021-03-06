<?php 


$pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache'); 
if($pageRefreshed == 1){
  header("Location:index.html");
}

if( $_GET['domain']){

  $domain = $_GET['domain'];

} else {

  header("Location: search.php");
 }

 include("templates/header.php");

//include 'autoload.php'; ?>

<div class="container" >



<h5 id="client-domain" style="margin-top:7%">Domain :<?php echo $domain; ?></h5>  

<h5 id="client-name" class="client-warn"></h5>
<h5 id="client-email" class="client-warn"></h5>
<h5 id="valid-email" class="client-warn"></h5>

<h5 id="submit-line"></h5>

<form id="client-form">

  <input type="hidden" value="<?php echo $domain; ?>" name="domain"  />

  <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" name="name"  id="clientname">
    
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control"  name="email" id="clientemail">
  </div>
  
  <div class="form-group">
    <label for="email">Phone Number (Optional)</label>
    <input type="text" class="form-control"  name="phone" id="clientphone">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>




<?php include("templates/footer.php");?>
