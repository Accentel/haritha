<html>
<head>

</head>

<body>
<?php
//including the database connection file
include_once("Crud.php");
include_once("Validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['submit'])) {	
	$pname = $crud->escape_string($_POST['pname']);
	$user =$crud->escape_string($_POST['user']);
	$amnt =$crud->escape_string($_POST['amnt']);
	if (empty($pname)) {
 $errorpname = "Please Enter Procedure Name";
       
    } else {

        $pname = $validation->test_input($pname);
    }
	
		if (empty($amnt)) {
 $erroramnt = "Please Enter Procedure Amount";
       
    } else {

        $amnt = $validation->test_input($amnt);
    }
	// checking empty fields
	if($pname != '') {
		
    	$result = $crud->execute("INSERT INTO procedures(pname,user,amnt)VALUES('$pname','$user','$amnt')");
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='procedurelist.php';";
			print "</script>";
		}
	}	
	
}
?>
</body>
</html>
