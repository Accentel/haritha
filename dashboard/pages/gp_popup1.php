<?php
include("../db/connection.php");

$emp_id = $_REQUEST['emp_id'];


$query = mysqli_query($link,"select * from patientregister WHERE reg_id='$emp_id' ");
if($query){
	$row1 = mysqli_fetch_array($query);
	$pname = $row1['patientname'];
	$phoneno = $row1['phoneno'];
	$age = $row1['age'];
	$gender = $row1['gender'];
	$doctorname=$row1['doctorname'];
	$pat_type=$row1['pat_type'];
	$registerno=$row1['registerno'];
	
	
  }
 
echo $data="|".$registerno."|".$pname."|".$age."|".$gender."|".$doctorname."|".$phoneno;
//.$nursefee2."|".$icu."|";
//."|".$maintfree2."|".$nursefee2."|".$icu; 
?>