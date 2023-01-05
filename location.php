<?php
if ($_POST['locationId']===''){
    echo'Please enter your location id'. "<br>";
    return false;
}

if ($_POST['sAddress']===''){
  echo'Please enter your street address'. "<br>";
  return false;
}

if ($_POST['city']===''){
  echo'Please enter your city name'. "<br>";
  return false;
}

if ($_POST['counrtyId']===''){
  echo'Please enter your country id'. "<br>";
  return false;
}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {

  $idValue = $_POST['locationId'];
  $streetAdValue = $_POST['sAddress'];
  $cityNameValue = $_POST['city'];
  $conIdValue = $_POST['counrtyId'];



  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO locations (id, street_address, city, countries_id) VALUES ('$idValue', '$streetAdValue', '$cityNameValue', '$conIdValue')";
  
  $conn->exec($sql);
  echo "New record created successfully";
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

