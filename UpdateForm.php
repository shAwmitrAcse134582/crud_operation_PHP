<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM teacher where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$designation=$arr['designation'];
	$phone=$arr['phone'];
	$date=$arr['dob'];
?>


<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="Update.php?d_id=<?php echo $id?>">
			<label>Name</label>
			<input type="text" value= " <?php echo $nam ?> " name="f_name"> <br> <br>
			<label>Designation</label>
			<input type="text" placeholder="Designation" value= " <?php echo $designation ?> " name="f_designation"> <br> <br>
			<label>Phone</label>
			<input type="text"  placeholder="Enter phone no. " value= " <?php echo $phone ?> " name="f_phone" > <br> <br>
			<label>Date of Birth</label>
			<input type="date"  placeholder="Enter date of birth " value= " <?php echo $date ?> " name="f_date" > <br> <br>
			<input type="submit" value="update">
		</form>
	</center>	
	
</body>
