<?php
include_once("connection.php");

//$crud = new Crud();

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
//$result = $crud->delete($id, 'beds');
$id=$_GET['id'];
$y="select a.mrno,b.title,b.image from preports1 a,preports b where a.id=b.mrno and a.id='$id'";
$t=mysqli_query($link,$y) or die(mysqli_error($link));
while($t1=mysqli_fetch_array($t)){
	
	unlink("../reports/". $t1['image']);
	
}
$y="DELETE preports1, preports
FROM preports1
INNER JOIN preports ON preports1.id = preports.mrno
WHERE preports1.id='$id'";
//$y="delete  from preports1 a,preports b where a.id=b.mrno and a.id='$id'";
$result=mysqli_query($link,$y) or die(mysqli_error($link));


if($result){
	print "<script>";
			print "alert('Successfully Deleted ');";
			print "self.location='../pages/uploadreportslist.php';";
			print "</script>";
}
?>