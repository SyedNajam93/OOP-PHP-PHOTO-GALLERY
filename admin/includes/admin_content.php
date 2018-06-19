
 <?php include "init.php";?>
 <?php include_once("user.php");?>

<?php
//in order for us to use the function from user.php which is find all users we need to intaite the class

$user = new User();

$result_set = $user->find_all_users(); //using this method from class 
//we will saving this result in a variable
//now we just have to loop through it and bring back the values like an array so we call get the valies out
while($row = mysqli_fetch_array($result_set)){
echo $row['last_name'];      
   
}


?>  