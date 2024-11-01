<?php
include_once("Crud.php");

$crud = new Crud();

//getting id of the data from url
//$id = $_GET['id'];
$id = $crud->my_simple_crypt($_GET['id'],'d');


//deleting the row from table
//$result = mysqli_query($link,"DELETE FROM expenses WHERE id='$id'") or die(mysqli_error($link));
$result = $crud->delete($id, 'hospital_tarrif');
if($result){
	print "<script>";
			print "alert('Successfully Deleted ');";
			print "self.location='../pages/hospitaltarriflist.php';";
			print "</script>";
}
?>