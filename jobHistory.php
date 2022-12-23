<?php
 $server = "localhost";
 $serverName = "root";
 $password = "";
 $dbName ="myDB";

 $conn = new mysqli($server, $serverName, $password, $dbName);


 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$empId = $_POST['empId'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$jobId = $_POST['jobId'];
$depId = $_POST['depId'];

$sql = "insert into jobhistory (EmployeeId, startDate, endDate, jobId, DepartmentId) values('$empId', '$startDate', '$endDate', '$jobId', '$depId')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>




