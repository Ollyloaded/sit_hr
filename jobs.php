<?php
if ($_POST['id']===''){
    echo'Please enter your job id'. "<br>";
    return false;
}

if ($_POST['title']===''){
  echo'Please enter your Job title'. "<br>";
  return false;
}

if ($_POST['minSalary']===''){
  echo'Please enter your minimum salary'. "<br>";
  return false;
}

if ($_POST['maxSalary']===''){
  echo'Please enter your maximum salay'. "<br>";
  return false;
}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {
  $idValue = $_POST['id'];
  $titleValue = $_POST['title'];
  $minSalaryValue = $_POST['minSalary'];
  $maxSalaryValue = $_POST['maxSalary'];




  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $sql = "INSERT INTO jobs (	id, title, min_salary, max_salary) VALUES('$idValue', '$titleValue', '$minSalaryValue', '$maxSalaryValue')";

  $conn->exec($sql);

  echo "New record created successfully";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>