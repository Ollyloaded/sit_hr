<?php
if ($_POST['id']===''){
    echo'Please enter employee id'. "<br>";
    return false;
}

if ($_POST['name']===''){
  echo'Please enter employee name'. "<br>";
  return false;
}

if ($_POST['email']===''){
  echo'Please enter employee email'. "<br>";
  return false;
}

if ($_POST['phoneNumber']===''){
  echo'Please enter employee phone number'. "<br>";
  return false;
}

if ($_POST['hireDate']===''){
  echo'Please enter employee hire date'. "<br>";
  return false;
}

if ($_POST['salary']===''){
  echo'Please enter employee salary'. "<br>";
  return false;
}

if ($_POST['jobId']===''){
  echo'Please enter employee job id'. "<br>";
  return false;
}


if ($_POST['departmentId']===''){
  echo'Please enter employee department id'. "<br>";
  return false;
}

if ($_POST['empPass']===''){
  echo'Please enter employee password'. "<br>";
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
  $nameValue = $_POST['name'];
  $emailValue = $_POST['email'];
  $phoneNumbervalue = $_POST['phoneNumber'];
  $hireDateValue = $_POST['hireDate'];
  $salaryValue = $_POST['salary'];
  $jobIdValue = $_POST['jobId'];
  $depIdValue = $_POST['departmentId'];
  $empPass = md5($_POST['empPass']);




  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $sql = "INSERT INTO employees (id, name, email, phone_number, hire_date, salary, jobs_id, departments_id, password) VALUES('$idValue', '$nameValue', '$emailValue', '$phoneNumbervalue', '$hireDateValue', '$salaryValue', '$jobIdValue', '$depIdValue', '$empPass')";

  $conn->exec($sql);

  echo "New record created successfully";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>