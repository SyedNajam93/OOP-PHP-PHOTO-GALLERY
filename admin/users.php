<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 

$users = User::find_all();


 ?>
   
   
   
   
   
    
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
          
          
        </li>
        <li class="breadcrumb-item active">MY USERS</li>
      </ol>
 
  <div class="row">
<div class="col-lg-12">
<h1 class="page-header">All USERS
    </h1>
<a href="add_user.php" class="btn btn-primary">Add User</a>

    <div class="col-md-12">
      
<table class="table table-hover">
          
<thead>
            <tr>
               
            <th>ID</th>   
            <th>Photo</th>   
            <th>username</th>   
            <th>First Name</th> 
            <th>Last Name</th>   
            </tr>  
</thead>

<tbody>
        <?php  foreach($users as $user) : ?>   
           
            <tr>
             
    
            <td><?php echo  $user->id; ?></td>
            <td><img class="user_image" src="<?php echo $user->picture_image; ?>" alt="" height="100px"></td>
            
            <td><?php echo $user->username;?>
            <div class="action_link">
            <a href="delete_user.php?id=<?php echo $user->id; ?>" class=" btn btn-primary">Delete</a>
            <a href="edit_user.php?id=<?php echo $user->id; ?>" class="btn btn-primary" >EDIT</a>
            <a href="#" class="btn btn-primary">VIEW</a>
                               
    
                
            </div>
            </td>
            
            <td><?php echo $user->first_name; ?></td> 
            <td><?php echo $user->last_name; ?></td>    
             
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
