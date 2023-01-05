<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {

  $idValue = $_POST['id'];
  $titleValue = $_POST['title'];
  $minValue = $_POST['minSalary'];
  $maxValue = $_POST['maxSalary'];



  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE jobs SET title = '$titleValue', min_salary = '$minValue', max_salary = '$maxValue'  WHERE id = '$idValue'";


  $stmt = $conn->prepare($sql);

  $stmt->execute();

  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
