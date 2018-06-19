<?php include("includes/header.php");?>
 
<?php 
 
if($session->is_signed_in()){ 
 
    redirect("index.php"); 
} 
 
 if(isset($_POST['submit'])) { 
  
     $username = ($_POST['username']);
     $password = ($_POST['password']); 
  
     $user_found = User ::verify_user($username, $password); 
  
     if ($user_found) { 
  
         $session->login($user_found); 
         redirect("index.php"); 
  
     } else { 
  
         $the_message = "You password/username is incorrect"; 
  
     } 
  
 } else { 
  
     $username = ""; 
     $password = ""; 
 } 


echo var_dump($username);
echo var_dump($password);
  
 ?> 











<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
          
         
<form id="login-id" action="" method="post"> 
 
         <div class="form-group"> 
             <label for="username">Username</label> 
             <input type="text" class="form-control" name="username" required accept="" value="<?php echo htmlentities($username);?>" > 
 
         </div> 
 
         <div class="form-group"> 
             <label for="password">Password</label> 
             <input type="password" class="form-control" name="password" required value="<?php echo ($password);?>"> 
 
         </div> 
 
 
         <div class="form-group"> 
             <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
 
         </div> 
 
 
     </form> 

          
          
          
          <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
