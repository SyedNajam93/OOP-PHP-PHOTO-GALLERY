<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 

$photos = Photo::find_all();


 ?>
   
   
   
   
   
    
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
          
          
        </li>
        <li class="breadcrumb-item active">MY PHOTOS</li>
      </ol>
 
  <div class="row">
<div class="col-lg-12">
<h1 class="page-header">PHOTOS
    </h1>

    <div class="col-md-12">
      
<table class="table table-hover">
          
<thead>
            <tr>
            <th>PHOTO IMAGE</th>   
            <th>ID</th>   
            <th>FILENAME</th>   
            <th>TITLE</th>   
            <th>Desscription</th> 
            <th>SIZE</th>   
            </tr>  
</thead>

<tbody>
        <?php  foreach($photos as $photo) : ?>   
           
            <tr>
            <td><img src="<?php echo $photo->picture_path(); ?>" alt="" width="250px">
            <div class="pictures_link">
            <a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a>
            <a href="edit_photo.php?id=<?php echo $photo->id; ?>">EDIT</a>
            <a href="#">VIEW</a>
                
            </div>
            </td>
            
            
            <td><?php echo  $photo->id; ?></td> 
            <td><?php echo $photo->filename; ?></td>    
            <td><?php echo $photo->title; ?></td> 
               <td><?php echo $photo->description;?></td>
            <td><?php echo $photo->size; ?></td>    
             
           </tr>    
           
    <?php endforeach; ?>
</tbody>
         
</table>  <!--TABLE ENDS HERE-->
        
        
</div>
</div>
</div>

     
   
    
     
       
</div>              
</div>


           
   
      

<!-- /.container-fluid-->
<!-- /.content-wrapper-->

<?php include "includes/footer.php";?>
