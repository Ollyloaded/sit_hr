<?php
if ($_POST['id']===''){
    echo'Please enter job id'. "<br>";
    return false;
}

if ($_POST['depId']===''){
  echo'Please enter department'. "<br>";
  return false;
}

if ($_POST['startDate']===''){
  echo'Please enter employee start date'. "<br>";
  return false;
}

if ($_POST['endDate']===''){
  echo'Please enter employee end date'. "<br>";
  return false;
}

if ($_POST['empId']===''){
  echo'Please enter employee id'. "<br>";
  return false;
}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {
  $jobId = $_POST['id'];
  $depIdValue = $_POST['depId'];
  $startDate = $_POST['startDate'];
  $endDate = $_POST['endDate'];
  $empId = $_POST['empId'];


  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $sql = "INSERT INTO jobs_histories (jobs_id, departments_id, start_date, end_date, employees_id	) VALUES('$jobId', '$depIdValue', '$startDate', '$endDate', '$empId')";

  $conn->exec($sql);

  echo "New record created successfully";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>




