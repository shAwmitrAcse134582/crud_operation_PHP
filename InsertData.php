<?php
include "dbconnect.php";
$name=$_POST['f_name'];
$designation=$_POST['f_des'];
$phone=$_POST['f_phone'];
$dob=$_POST['f_dob'];

$sql="INSERT INTO  teacher(id,name,designation,phone,dob)
  values(NULL,'$name','$designation','$phone','$dob')";

  if($conn->query($sql)){
    header('Location:index.php');
    // echo "data inserted succesfully";
  }
  else{
     echo "inserted failed";
  }
  $conn->close();
?>