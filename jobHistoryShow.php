<?php

try {
    $pdo = new PDO( 'mysql:host=localhost;dbname=hrms_final', 'root', '');

    $sql = "SELECT * FROM `jobs_histories`";

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
        <div id="container">
            <h1>Jobs History Information</h1>
            <table>
                <thead>
                    <tr>
                        <th>Job ID</th>
                        <th>Department ID</th>
                        <th>Strat Date</th>
                        <th>End Date</th>
                        <th>Employee ID</th>



                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr> 	
                            <td><?php echo htmlspecialchars($row['jobs_id']) ?></td>
                            <td><?php echo htmlspecialchars($row['departments_id']); ?></td>
                            <td><?php echo htmlspecialchars($row['start_date']); ?></td>
                            <td><?php echo htmlspecialchars($row['end_date']); ?></td>
                            <td><?php echo htmlspecialchars($row['employees_id']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>