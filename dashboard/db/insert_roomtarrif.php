<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
//include_once("Crud.php");
include_once("Validation.php");
include_once("locations.php");
//$crud = new Crud();
$validation = new Validation();

if(isset($_POST['submit'])) {	
$ltype = $crud->escape_string($_POST['ltype']);
	$rtype = $crud->escape_string($_POST['rtype']);
	$rno = $crud->escape_string($_POST['rno']);
	$bno = $crud->escape_string($_POST['bno']);
	$user =$crud->escape_string($_POST['user']);
	$ac =$crud->escape_string($_POST['ac']);
	$oxigen =$crud->escape_string($_POST['oxigen']);
	$fbed =$crud->escape_string($_POST['fbed']);
	$bedcharge =$crud->escape_string($_POST['bedcharge']);
	$dmocharge =$crud->escape_string($_POST['dmocharge']);
	$nursecharge =$crud->escape_string($_POST['nursecharge']);
	$doctcharge =$crud->escape_string($_POST['doctcharge']);
		
	 if (empty($bno)) {
 $errorbno = "Please Enter Bed No";
       
    } else {

        $bno = $validation->test_input($bno);
    }
	
		
	// checking empty fields
	if($bno != '') {
		 $k="INSERT INTO room_tariff(LOCATION,ROOM_TYPE,ROOM_NO,NO_BEDS,AUTH_BY,AC,OXYGEN,FBED,ROOM_FEE,DMO_FEE,NURSE_FEE,DOCT_FEE,CURRENTDATE)VALUES('$ltype','$rtype','$rno','$bno','$user','$ac','$oxigen','$fbed','$bedcharge','$dmocharge','$nursecharge','$doctcharge',now())";
    	$result = $crud->execute($k);
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='roomtarriflist.php';";
			print "</script>";
		}
	}	
	
}
?>
</body>
</html>
