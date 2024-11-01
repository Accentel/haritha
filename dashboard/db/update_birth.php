<?php
include_once("connection.php");

//$crud = new Crud();
 $query = "SELECT * FROM `birh_format` where id='1'";
$result1 = mysqli_query($link,$query) or die(mysqli_error($link));
$res=mysqli_fetch_array($result1);
$emc=$res['emc'];
$id=$res['id'];
if(isset($_POST['submit'])){

$id=$_POST['id'];
$report=($_POST['report']);
$user=($_POST['user']);


$sql="update `birh_format`  set  emc='$report',user='$user' where id='$id'";

$result=mysqli_query($link,$sql) or die(mysqli_error($link));
if($result){
	print "<script>";
			print "alert('Successfully Updated ');";
			print "self.location='birth_format.php';";
			print "</script>";
}
}
?>