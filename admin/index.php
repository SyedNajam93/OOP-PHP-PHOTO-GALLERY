<?php include "includes/header.php";?>


    
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
            
<?php
       
/*$user = new User();        
        
$user->username = "syed123456789";
$user->password = "123456465";
$user->first_name = "syedHNAJAM";
$user->last_name = "naqviZAIN";
        
   
$user->create();   */
        
 
 
/*$photo = new Photo();
$photo->title = "Just runnig some test ";
$photo->size = 20;
$photo->create();*/
       
        
    echo INCLUDES_PATH;
        
        
        
//UPDATING USER OVER HERE        
        
/* $user = User::find_user_by_id(6);
$user->username = "wwe";
    $user->last_name = "DAVE";
$user->password = "123456";
$user->first_name = "BATISTA";     

$user->update(); 
        */
   
//creating delete code        


$user = User::find_by_id(109);
echo $user->username;



        
/*$user = new User();
        v
$user->username = "JOHN bati";
$user->save();  */     
        
        
/*$photos = Photo::find_all();
        
foreach ($photos as $photo){
    
    echo $photo->title;
    echo $photo->size ;
    */





        
        
        
?>              
</div>              
</div>


     
           
   
      

<!-- /.container-fluid-->
<!-- /.content-wrapper-->

<?php include "includes/footer.php";?>
