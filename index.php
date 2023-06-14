<?php
include 'dbconnect.php';

$s="select * FROM teacher";
$result=$conn->query($s);



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>

<body>
   <center>
       <h1>Our Honorable Teacher List</h1>

       <table>
           <tr>
           
			        <th>ID</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Update</th>
                    <th>DELETE</th>
 <?php 
 while($r=$result->fetch_assoc()){
    $idd=$r['id'];
    $nam=$r['name'];
    $des=$r['designation'];
    $phn=$r['phone'];
    $dobb=$r['dob'];

    echo "<tr>";
    echo "<td>". $idd . "</td>";
    echo "<td>". $nam . "</td>";
    echo "<td>". $des . "</td>";
    echo "<td>". $phn . "</td>";
    echo "<td>". $dobb. "</td>";
    echo "<td> <a href='UpdateForm.php?edit_id=$idd'>Update</a></td>";
    echo "<td> <a href='Delete.php?del_id=$idd'>Delete</a></td>";
     echo "</tr>";

 }            

 ?>   
  <tr>
	<td colspan="5"><a href="InsertForm.php">Insert Record</a></td>
  </tr>
             
          </tr>
       <table>

   <center>

</body>
</html>