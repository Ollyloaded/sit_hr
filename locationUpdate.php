<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {

  $idValue = $_POST['locationId'];
  $sAddValue = $_POST['sAddress'];
  $cityValue = $_POST['city'];
  $conIdValue = $_POST['counrtyId'];



  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE locations SET street_address = '$sAddValue', city = '$cityValue', countries_id = '$conIdValue'  WHERE id = '$idValue'";


  $stmt = $conn->prepare($sql);

  $stmt->execute();

  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
