<?php
//including the database connection file
include_once("Crud.php");
include_once("Validation.php");



$crud = new Crud();
$validation = new Validation();
$query = "SELECT * FROM empdept";
$result = $crud->getData($query);

if(isset($_POST['Submit'])) {	
	$umrno = ($_POST['regno']);
	$patname = ($_POST['patname']);
	$doa= ($_POST['doa']);
	$ioa= ($_POST['ioa']);
	$modeofprodedure= ($_POST['modeofprodedure']);
	$indication= ($_POST['indication']);
    $dod= ($_POST['dod']);
	$deliverynote= ($_POST['deliverynote']);
	$time= ($_POST['time']);
	$weight= ($_POST['weight']);
	$dischargeadvise= ($_POST['dischargeadvise']);
	$review= ($_POST['review']);
	$user=$_POST['user'];
	

	
	// checking empty fields
		if($umrno != '' ) {
		$sq="INSERT INTO adddischarge(mrno,pname,doa,ioa,mprocedure,indication,dod,dnote,dtime,bweight,advise,review,user)VALUES
		('$umrno','$patname','$doa','$ioa','$modeofprodedure','$indication','$dod','$deliverynote','$time','$weight','$dischargeadvise','$review','$user')";
    	$result = $crud->execute($sq);
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Successfully Registred ');";
			print "self.location='dischargesummarylist.php';";
			print "</script>";
		}
	}	
	
	
}
?>
