
<?php

if(isset($_POST['submit'])){

$file = $_FILES['file'];

$fileName = $_FILES['file']['name'];
$fileTmp = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
$directory = 'uploads/'. $fileName;

if(move_uploaded_file($fileTmp, $directory)){
echo $the_message = "FILES ARE NOW BEING UPLOADED BITCHES ";

}
}
else{
/*

$the_error = $_FILES['file_upload']['error'];
$the_message = $upload_errors[$the_error];
*/
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    <form action="upload.php" enctype="multipart/form-data"  method="post">
    <input type="file" name="file"><br>
    <input type="submit" name="submit">       
        
    </form>   

   
    
</body>
</html>