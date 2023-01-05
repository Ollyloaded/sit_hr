<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {

  $idValue = $_POST['id'];
  $nameValue = $_POST['name'];
  $emailValue = $_POST['email'];
  $pNumValue = $_POST['phoneNumber'];
  $hDateValue = $_POST['hireDate'];
  $salaryalue = $_POST['salary'];
  $jobIddValue = $_POST['jobId'];
  $depIdValue = $_POST['departmentId'];
  $empPassValue = $_POST['empPass'];

 



  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE employees SET name = '$nameValue', email = '$emailValue', phone_number = '$pNumValue', hire_date = '$hDateValue', salary = '$salaryalue', jobs_id = '$jobIddValue', departments_id = '$depIdValue', password = '$empPassValue'  WHERE id = '$idValue'";


  $stmt = $conn->prepare($sql);

  $stmt->execute();

  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
