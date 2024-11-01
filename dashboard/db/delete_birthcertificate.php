<?php
include_once("connection.php");


//getting id of the data from url
$id = ($_GET['id']);

//deleting the row from table
$result = mysqli_query($link,"DELETE FROM birth_certificate WHERE id=$id");
//$result = $crud->delete($id, 'locations');
if($result){
	print "<script>";
			print "alert('Successfully Deleted ');";
			print "self.location='../pages/birthcertificateslist.php';";
			print "</script>";
}
?>