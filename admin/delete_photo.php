<?php include "includes/init.php";?>

<?php if(!$session->is_signed_in()) {redirect("login.php");}  ?>
    

<?php
// WE WILL BE CREATING THE CODE THAT WILL DETECT THE ID FROM THAT SPECIFIC PHOTO
// THIS PAGE IS THE DELETE_PHOTO.PHP


if(empty($_GET['id'])){
redirect('photos.php');
}
//we are using static to get the
$photo = Photo::find_by_id($_GET['id']);

if($photo){
    
$photo->delete_photo();
redirect('photos.php');
}



?>




     
           
   
      


