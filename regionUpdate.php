<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {

  $idValue = $_POST['rgnId'];
  $rgnNameValue = $_POST['rgnName'];

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE regions SET name='$rgnNameValue' WHERE id='$idValue'";


  $stmt = $conn->prepare($sql);

  $stmt->execute();

  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
