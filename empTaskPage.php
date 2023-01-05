<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['employee_name'])){
   header('location:adminloginForm.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>user page</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['employee_name'] ?></span></h1>
      <p>this is an Employee page</p>
      <a href="empPersonalnfo.php" class="btn">See Details</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>