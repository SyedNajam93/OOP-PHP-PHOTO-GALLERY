<?php include "includes/header.php";?>


<?php  if(!$session->is_signed_in()) {redirect("login.php");} ?>



<?php 



$user = new User();

if(isset($_POST['create'])) {


if($user) {


$user->username = $_POST['username'];
$user->first_name =$_POST['first_name'];
$user->last_name =$_POST['last_name'];
$user->password =$_POST['password'];


$user->set_file($_FILES['user_image']);
$user->upload_photo();
$session->message("The user {$user->username} has been added");
$user->save();
redirect("users.php");


}


// if($user) {

// $user->title = $_POST['title'];
// $user->caption = $_POST['caption'];
// $user->alternate_text = $_POST['alternate_text'];
// $user->description = $_POST['description'];

// $user->save();

// }



}

// $users = user::find_all();

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
<h1 class="page-header">ADD USER PAGE
</h1>


 <form action="" method="post" enctype="multipart/form-data">

                        <div class="col-md-6 col-md-offset-3">

                           <div class="form-group">
                           
                            <input type="file" name="user_image">
                               
                           </div>


                           <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" >
                               
                           </div>


                            <div class="form-group">
                                <label for="first name">First Name</label>
                            <input type="text" name="first_name" class="form-control" >
                               
                           </div>

                            <div class="form-group">
                                <label for="last name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" >
                               
                           </div>


                            <div class="form-group">
                                <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" >
                               
                           </div>

                            <div class="form-group">
                                
                            <input type="submit" name="create" class="btn btn-primary pull-right" >
                               
                           </div>


                            

                        </div>



                      

            </form>































<!-- /.container-fluid-->
<!-- /.content-wrapper-->


