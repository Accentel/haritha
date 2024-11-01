<?php
include_once("Crud.php");

$crud = new Crud();
$id=$crud->my_simple_crypt($_REQUEST['id'],'d');
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM delivery where id='$id'";
$result = $crud->getData($query);



if(isset($_POST['update'])){

$id=$crud->my_simple_crypt($_POST['id'],'d');
$mrno = $crud->escape_string($_POST['mrno']);
	$name = $crud->escape_string($_POST['name']);
	$age = $crud->escape_string($_POST['age']);
	$gender = $crud->escape_string($_POST['gender']);
	$ddate =$crud->escape_string($_POST['ddate']);
	$mobile = $crud->escape_string($_POST['mobile']);
	$user =$crud->escape_string($_POST['user']);


$sql="update delivery  set  mrno='$mrno',name='$name',age='$age',gender='$gender',ddate='$ddate',mobile='$mobile',user='$user' where id='$id'";
$result=$crud->execute($sql);
if($result){
	print "<script>";
			print "alert('Successfully Updated ');";
			print "self.location='deliverylist.php';";
			print "</script>";
}
}
?>