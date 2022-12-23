<?php
 $server = "localhost";
 $serverName = "root";
 $password = "";
 $dbName ="myDB";

 $conn = new mysqli($server, $serverName, $password, $dbName);


 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$depId = $_POST['depId'];
$depName = $_POST['depName'];
$managerId = $_POST['managerId'];
$locationId = $_POST['locationId'];


$sql = "insert into department_info(depId, depName, managerId, locationId) values('$depId', '$depName', '$managerId', '$locationId')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
$conn->close();


?>




