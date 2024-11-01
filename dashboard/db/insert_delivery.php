<?php
//including the database connection file
include_once("Crud.php");
include_once("Validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['submit'])) {	
	$mrno = $crud->escape_string($_POST['mrno']);
	$name = $crud->escape_string($_POST['name']);
	$age = $crud->escape_string($_POST['age']);
	$gender = $crud->escape_string($_POST['gender']);
	$ddate =$crud->escape_string($_POST['ddate']);
	$mobile = $crud->escape_string($_POST['mobile']);
	$user =$crud->escape_string($_POST['user']);
	
	
	 if (empty($mrno)) {
 $errormrno = "Please Enter MR No";
       
    } else {

        $mrno = $validation->test_input($mrno);
    }
	
		
	// checking empty fields
	if($mrno != '' ) {
		
    	$result = $crud->execute("INSERT INTO delivery(mrno,name,age,gender,ddate,mobile,user)VALUES('$mrno','$name','$age','$gender','$ddate','$mobile','$user')");
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='deliverylist.php';";
			print "</script>";
		}
	}	
	
}
?>
