<?php
ob_start();

require_once 'dashboard/db/connection.php';

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=addslashes($_POST['uname']);
$mypassword=addslashes($_POST['pwd']);
$password = md5($mypassword);
$date=date('Y-m-d');
//$date="2019-05-23";
  $sql = "SELECT name1,passowrd FROM login WHERE name1='$myusername'  and passowrd='$password'  ";
$result=mysqli_query($link,$sql) or die(mysqli_error($link));
$row=mysqli_fetch_array($result);
//$active=$row['active'];
 $count=mysqli_num_rows($result);
 $user=$row['name1'];
//exit;
if($count==1)
{

$_SESSION['user']=$user;
//$_SESSION['ename1']=$empname;
header("location:dashboard/pages/dashboard.php");
 //echo '<script type="text/javascript">
      //     window.location = "dashboard.php"
   //   </script>';
}
else
{
print "<script>";
	print "alert('Your Trail Version Expired');";
	print "self.location='index.php';";
	print "</script>";

}
}
?>