<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {

  $idValue = $_POST['conId'];
//   $rgnNameValue = $_POST['rgnName'];

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
  $sql = "DELETE FROM countries WHERE id = '$idValue'";

  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>