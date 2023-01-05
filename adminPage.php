<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:adminloginForm.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>admin page</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="adminMainPage.html" class="btn">Maintain Employee</a>
      <!-- <a href="adminloginForm.php" class="btn">login</a>
      <a href="adminRegisterForm.php" class="btn">register</a> -->
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>