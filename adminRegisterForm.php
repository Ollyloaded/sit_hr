<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $idValue = mysqli_real_escape_string($conn, $_POST['id']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM admin WHERE password = '$idValue' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{
         $insert = "INSERT INTO admin(id, password) VALUES('$idValue','$pass')";
         mysqli_query($conn, $insert);
         header('location:adminloginForm.php');
      }
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>register form</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="id" required placeholder="enter your id">
      <input type="password" name="password" required placeholder="enter your password">

      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="adminloginForm.php">login now</a></p>
   </form>

</div>

</body>
</html>