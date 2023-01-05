<?php
if ($_POST['conId']===''){
    echo'Please enter your country id'. "<br>";
    return false;
}

if ($_POST['conName']===''){
  echo'Please enter your country Name'. "<br>";
  return false;
}

if ($_POST['regionId']===''){
  echo'Please enter your region id'. "<br>";
  return false;
}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {

  $idValue = $_POST['conId'];
  $conNameValue = $_POST['conName'];
  $regIdValue = $_POST['regionId'];



  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO countries (id, name, regions_id) VALUES ('$idValue', '$conNameValue', '$regIdValue')";
  
  $conn->exec($sql);
  echo "New record created successfully";
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

