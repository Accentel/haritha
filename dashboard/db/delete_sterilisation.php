<?php
include_once("connection.php");


//getting id of the data from url
$id = ($_GET['id']);

//deleting the row from table
$result = mysqli_query($link,"DELETE FROM sterilation_certificate WHERE id=$id");
//$result = $crud->delete($id, 'locations');
if($result){
	print "<script>";
			print "alert('Successfully Deleted ');";
			print "self.location='../pages/sterilisationcertificateslist.php';";
			print "</script>";
}
?>