<?php include "includes/init.php";?>

<?php if(!$session->is_signed_in()) {redirect("login.php");}  ?>
    

<?php
// WE WILL BE CREATING THE CODE THAT WILL DETECT THE ID FROM THAT SPECIFIC user
// THIS PAGE IS THE DELETE_user.PHP


if(empty($_GET['id'])){
redirect('users.php');
}
//we are using static to get the
$user = User::find_by_id($_GET['id']);

if($user){
    
$user->delete();
redirect('users.php');
}



?>




     
           
   
      


