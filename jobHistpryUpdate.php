<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {

  $idValue = $_POST['id'];
  $depIdValue = $_POST['depId'];
  $sDateValue = $_POST['startDate'];
  $eDateValue = $_POST['endDate'];
  $empIdValue = $_POST['empId'];


  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE jobs_histories SET departments_id = '$depIdValue', start_date = '$sDateValue', end_date = '$eDateValue', employees_id = '$empIdValue' WHERE jobs_id = '$idValue'";


  $stmt = $conn->prepare($sql);

  $stmt->execute();

  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
