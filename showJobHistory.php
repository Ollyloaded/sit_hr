<html>
 <title>All Registered People</title>
 <head>
    <link rel="stylesheet" href="HRMS_CSS.css">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            background-color: #96D4D4;
            text-align: center;
        }
        h1{
            text-align: center;
        }
    </style>
 </head>


<body>
  <h1>Job History</h1>
     <table style="width:100%">
	        <thead>
			     <tr> 
				   
					 <th>Employee ID</th>
					 <th>Start Date</th>
					 <th>End Date</th>
                     <th>Job ID</th>
                     <th>Department ID</th>
		         </tr>
	        </thead>
			<?php
            $server = "localhost";
            $serverName = "root";
            $password = "";
            $dbName ="myDB";
            
            
            $conn = new mysqli($server, $serverName, $password, $dbName);
            
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
			// include 'dbconnection.php';
			$view_sql= mysqli_query($conn,"SELECT * FROM jobhistory");
			$array_of_datapoints = mysqli_fetch_all($view_sql, MYSQLI_ASSOC);
			
			?>
			<?php foreach($array_of_datapoints as $show):?>
			<tbody>
			     <tr> 
				    
					 <td><?php echo $show['EmployeeId'] ?></td>
					 <td><?php echo $show['startDate'] ?></td>
					 <td><?php echo $show['endDate'] ?></td>
					 <td><?php echo $show['jobId'] ?></td>
					 <td><?php echo $show['DepartmentId'] ?></td>

		         </tr>
			
			</tbody>
			<?php endforeach ; ?>
	 
	 </table>

  </body>
</html>