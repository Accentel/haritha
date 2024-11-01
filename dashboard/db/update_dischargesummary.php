<?php
//including the database connection file
include_once("Crud.php");
include_once("Validation.php");
$crud = new Crud();
$validation = new Validation();
 $id=$crud->my_simple_crypt($_GET['id'],'d');
  $query = "SELECT * FROM adddischarge where id='$id'";
$result = $crud->getData($query);

	
	

//}

if(isset($_POST['Submit'])) {	
 $id=$crud->my_simple_crypt($_POST['id2'],'d');
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
	$sq="update adddischarge set mrno='$umrno',pname='$patname',doa='$doa',ioa='$ioa',mprocedure='$modeofprodedure',indication='$indication',dod='$dod',dnote='$deliverynote',dtime='$time',bweight='$weight',advise='$dischargeadvise',review='$review',user='$user' where id='$id'";
    	$result = $crud->execute($sq);
	}
	
		//display success message
		if($result){
			print "<script>";
			print "alert('Successfully Registred ');";
			print "self.location='dischargesummarylist.php';";
			print "</script>";
		}
		
	
	
}
?>
</body>
</html>
