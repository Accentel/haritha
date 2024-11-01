<?php include('../db/connection.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Header & Footer test</title>
<script language="JavaScript" type="text/javascript">


function prnt(){
	
document.getElementById("prnt").style.display="none";
document.getElementById("cls").style.display="none";
window.print();
window.close();
}
function closew(){
window.close();
}

function abc(){
	
//document.getElementById('tr1').style.display='none';
window.print();
window.close();
//document.getElementById('tr1').style.display='';
}
</script>
<style>
body {
    margin: 0;
    padding: 0;
    background-color: #FAFAFA;
    font: 12pt "Tahoma";
}
.styled-button-2 {
	 background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.page {
    width: 21cm;
    min-height: 28.7cm;
    padding-left: 1.9cm;
	padding-right: 1.9cm;
	padding-bottom: 1.9cm;
	padding-top: 1.1cm;
    margin: 1cm auto;
    border: 1px #D3D3D3 solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 0.25cm;
    border: 0px red solid;
    height: 245mm;
	padding-top:320px;
	font:"Times New Roman", Times, serif;
	font-size:14px;
  
}

@page {
    size: A4;
    margin: 0;
}
@media print {
    .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
	
}
.text-line {
        background-color: transparent;
        color: #000;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid red 1px;
        padding: 3px 10px;
		width:80px;
    }
	input[type="checkbox"]{
  width: 15px; /*Desired width*/
  height: 15px;; /*Desired height*/
  border-color:2px solid red;
  

}
</style>
</head>

<body>
<div align="center" style="border:#CC6666">
								
          <input type="button" value="Print" id="prnt" class="styled-button-2" onclick="prnt();"/> <a href="prescriptionlist.php"><input type="button" value="Close" id="cls" class="styled-button-2" onclick="closew();"/></a>
								</div>
<div class="book">
    <div class="page">
        <div class="subpage">
        <?php 
//include("config.php");
$id=$_GET['id'];

$sql=mysqli_query($link,"select * from `prescription` where id='$id'");
$r=mysqli_fetch_array($sql);


//$doct=$r['registerno'];
$mrno=$r['mrno'];
//$doct2=$r['tknum'];
$clinicalhistory=$r['clinicalhistory'];
$investigations=$r['investigations'];
$supports=$r['supports'];
$review=$r['review'];


?>
      <div>
	 <?php echo $clinicalhistory; ?>
     </div>
	 <br/>
     <div><b>Investigaions:</b><br/>
	 <?php echo $investigations; ?>
     </div>
Rx.
<table border="1" width="100%" cellpadding="0" cellspacing="0">
<tr>
<th style="width:10px;">SNO</th>
<th style="width:220px;">DRUG NAME</th>
<th style="width:30px;">QTY</th>
<th style="width:180px;">FREQUENCY</th>

<th style="width:230px;">TIME</th>
<th style="width:50px;">DURATION</th>


</tr>
<?php
 $y="select * from prescription1 where id1='$id'";
$t=mysqli_query($link,$y) or die(mysqli_error($link));
$i=1;
while($t1=mysqli_fetch_array($t)){
	$time=explode(",",$t1['time']);
?>
<tr >
<td style="height:20px;"><?php echo $i; ?></td>
<td><?php echo $t1['drugname']; ?></td>
<td><?php echo $t1['qty']; ?></td>
<td><?php echo $t1['freequency']; ?></td>

<td><?php foreach($time as $out) {
      echo $out."<br/>";
   } ?></td>
<td><?php echo $t1['duration']; ?></td>


</tr>
<?php $i++; } ?>


</table>
<div style="height:50px;"></div>
<table >
<tr>
<th><b>Supports :</b></th>
<td><?php echo $supports; ?></td>
</tr>
<tr>
<th><b>Review On :</b></th>
<td><?php echo $review; ?></td>
</tr>
</table>
<div style="height:50px;"></div>
<div style="text-align:right;" >
<b>Signature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br/>
</div>
     </div> 
        </div>    
    </div>
    
</div>

</body>
</html>