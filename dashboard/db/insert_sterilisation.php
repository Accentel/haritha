<html>
<body>
<?php
//including the database connection file
include_once("connection.php");
$query = "SELECT * FROM `sterilation_format` where id='1'";
$result1 = mysqli_query($link,$query) or die(mysqli_error($link));
$res=mysqli_fetch_array($result1);
$emc=$res['emc'];
if(isset($_POST['Submit'])) {	
	$mrno = ($_POST['mrno']);
	$ipno = ($_POST['ipno']);
	$date = ($_POST['date']);
	$user =($_POST['user']);
	$report =($_POST['report']);
	
	
	

    	$result = mysqli_query($link,"INSERT INTO sterilation_certificate(mrno,ipno,date,emcreport,user)VALUES('$mrno','$ipno','$date','$report','$user')");
		
		//display success message
		if($result){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='sterilisationcertificateslist.php';";
			print "</script>";
		}
		
	
}

?>
</body>
</html>
