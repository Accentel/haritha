<?php
include_once("connection.php");

//$crud = new Crud();

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($link,"DELETE FROM expenses WHERE id='$id'") or die(mysqli_error($link));
//$result = $crud->delete($id, 'beds');
if($result){
	print "<script>";
			print "alert('Successfully Deleted ');";
			print "self.location='../pages/expences_list.php';";
			print "</script>";
}
?>