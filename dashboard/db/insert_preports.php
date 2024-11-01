<?php
//including the database connection file
include_once("connection.php");
//include_once("Validation.php");

//$crud = new Crud();
//$validation = new Validation();

if(isset($_POST['submit'])) {	
	$pname = $_POST['pname'];
	$user =$_POST['user'];
	
	$r=mysqli_query($link,"insert into preports1(mrno,user)values('$pname','$user')") or die(mysqli_error($link));
	$id=mysqli_insert_id($link);
	
	 for($i=0; $i<count($_POST['ksr']); $i++) {
			$title=$_POST['title'][$i];
	    $tmp = $_FILES['image']['tmp_name'][$i];
	if (is_uploaded_file($tmp)) {
        $iname = date('d-m-Y-H-i-s').$_FILES['image']['name'][$i];
        $dir = "../reports";
        $destination = $dir . '/' . $iname;
		$path_parts = pathinfo($iname);
		 $fileExtension = $path_parts['extension'];
        move_uploaded_file($tmp, $destination);
        $data1 = "insert into preports(image,mrno,user,title) values('$iname','$id','$user','$title')";
        $res = mysqli_query($link,$data1) or die(mysqli_error($link));
    }
	
		
	}
		
	
		
    	
		//display success message
		if($res){
			print "<script>";
			print "alert('Record Inserted Successfully ');";
			print "self.location='uploadreportslist.php';";
			print "</script>";
		}
	
	
}
?>

