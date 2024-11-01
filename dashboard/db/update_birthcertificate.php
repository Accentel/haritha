<?php
include_once("connection.php");

//$crud = new Crud();
$id=$_GET['id'];
 $query = "SELECT * FROM `birth_certificate` where id='$id'";
$result1 = mysqli_query($link,$query) or die(mysqli_error($link));
$res=mysqli_fetch_array($result1);
$ipno=$res['ipno'];
$mrno=$res['mrno'];
$date=$res['date'];
$emc=$res['emcreport'];
$id1=$res['id'];
if(isset($_POST['Submit'])){

$id=$_POST['id1'];
$mrno = ($_POST['mrno']);
	$ipno = ($_POST['ipno']);
	$date = ($_POST['date']);
	$user =($_POST['user']);
	$report =($_POST['report']);


$sql="update `birth_certificate`  set  mrno='$mrno',ipno='$ipno',emcreport='$report',user='$user' where id='$id'";

$result=mysqli_query($link,$sql) or die(mysqli_error($link));
if($result){
	print "<script>";
			print "alert('Successfully Updated ');";
			print "self.location='birthcertificateslist.php';";
			print "</script>";
}
}
?>