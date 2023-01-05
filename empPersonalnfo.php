<?php
@include 'config.php';
session_start();

try {
    $pdo = new PDO( 'mysql:host=localhost;dbname=hrms_final', 'root', '');

     $idValue = $_SESSION['employee_name'];

     echo $idValue;

     $sql = " SELECT * FROM `employees` WHERE id = '$idValue' ";

    //$sql = "SELECT * FROM `employees`" ;

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>


<!DOCTYPE html>
<html>
    <head>
    <style>
         table, td, th {
            border: 1px solid black;
         }

         table {
            border-collapse: collapse;
            width: 100%;
         }


          th, td {
          text-align: center;
          padding: 8px;
         }

        tr:nth-child(even){background-color: #94a899}

        th {
            background-color: #04AA6D;
            color: black;
        }
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            font-family: 'Poppins', sans-serif;
        }
        #container{
            width: 80%;
            margin: 20vh auto 0 auto;
            padding: 20px;
            background-color: whitesmoke;
            border-radius: 4px;
            font-size: 12px;
        }
        #container h1{
            color: #0f2027;
            background-color: rgb(213, 218, 216);
            text-align: center;
            height: 50px;
        }
    </style>
    </head>

    <body>
        <!-- <form action="">
             <div class="select">
                <label for="id">Employee ID</label>
                <input id="id" name="id" type="text">
                <button type="submit">Enter</button>
             </div>
        </form> -->

        <div id="container">

            <h1>Employee Details</h1>
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Hire Date</th>
                        <th>Salary</th>
                        <th>Job ID</th>
                        <th>Department ID</th>
                        <th>Employee Password</th>



                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr> 	
                            <td><?php echo htmlspecialchars($row['id']) ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone_number']); ?></td>
                            <td><?php echo htmlspecialchars($row['hire_date']); ?></td>
                            <td><?php echo htmlspecialchars($row['salary']); ?></td>
                            <td><?php echo htmlspecialchars($row['jobs_id']); ?></td>
                            <td><?php echo htmlspecialchars($row['departments_id']); ?></td>
                            <td><?php echo htmlspecialchars($row['password']); ?></td>

                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>