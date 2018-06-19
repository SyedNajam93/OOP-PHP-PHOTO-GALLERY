<?php include "includes/header.php";?>

<?php  if(!$session->is_signed_in()) {redirect("login.php");} ?>
   

 
   
   
   
   
   
   
   
    
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My UPLOADS</li>
      </ol>
  
<div class="col-md-6">
     <form action="upload.php" method="post" enctype="multipart/form-data">
     
<div class="form-group">
    <input type="text" name="title" class="form-control">
</div>
     
<div class="form-group">
    <input type="file" name="file_upload" class="form-control">

</div>
      
      <input type="submit" name="submit" class="form-control">
       
       <?php
$message = "";
if(isset($_POST['submit'])){

$photo = new Photo();
$photo->title = $_POST['title'];
$photo->set_file($_FILES['file_upload']);    
    
if($photo->save()){
    $message = "photo uoploaded successfully";
}  
    else {
    $message = join("<br>", $photo->errors);
    
}  
    
}
    
    
    
?>   
</form> 
</div>        

</div>              
</div>


     

     
           
   
      

<!-- /.container-fluid-->
<!-- /.content-wrapper-->

<?php include "includes/footer.php";?>
