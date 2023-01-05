<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $idValue = mysqli_real_escape_string($conn, $_POST['id']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM admin WHERE id = '$idValue'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['password'] == ($pass)){

         $_SESSION['admin_name'] = $row['id'];
         header('location: adminPage.php');
      }else{
      $error[] = 'incorrect password!';
     }
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>login form</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="id" required placeholder="enter your id">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="adminRegisterForm.php">register now</a></p>
   </form>

</div>

</body>
</html>