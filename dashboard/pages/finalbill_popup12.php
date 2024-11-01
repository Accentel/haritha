<?php
include("../db/connection.php");

$emp_id = $_REQUEST['emp_id'];


$query = mysqli_query($link,"select * from ip_pat_admit WHERE PAT_ID='$emp_id' ");
if($query){
	$row1 = mysqli_fetch_array($query);
	$regno = $row1['PAT_REGNO'];
	$adate = $row1['ADMIT_DATE'];
	
	$u=mysqli_query($link,"select * from patientregister where registerno='$regno'") or die(mysqli_error($link));
		$u1=mysqli_fetch_array($u);
		$patientname=$u1['patientname'];
  }
 
echo $data="|".$regno."|".$patientname."|".$adate;
//.$nursefee2."|".$icu."|";
//."|".$maintfree2."|".$nursefee2."|".$icu; 
?>