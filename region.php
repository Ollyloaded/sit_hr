<?php
if ($_POST['rgnId']===''){
    echo'Please enter your region id'. "<br>";
    return false;
}

if ($_POST['rgnName']===''){
  echo'Please enter your region Name'. "<br>";
  return false;
}

?>

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

  $sql = "INSERT INTO regions (id, name) VALUES ('$idValue', '$rgnNameValue')";
  
  $conn->exec($sql);
  echo "New record created successfully";
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

