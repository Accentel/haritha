<?php 
include('../db/Crud.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<?php
		//include("header.php");
	?>
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
    font: 14pt "Tahoma";
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
    padding-top:0px;
	padding-bottom: 1.5cm;
	padding-left: 1.5cm;
	padding-right: 1.5cm;
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
	padding-top:42px;
	font:"Times New Roman", Times, serif;
	font-size:15px;
  
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

</style>
</head>

<body>
<div align="center" style="border:#CC6666">
								
          <input type="button" value="Print" id="prnt" class="styled-button-2" onclick="prnt();"/> <a href="dischargesummarylist.php"><input type="button" value="Close" id="cls" class="styled-button-2" onclick="closew();"/></a>
								</div>
<div class="book">
    <div class="page">
        <div class="subpage">
        <?php 
$crud = new Crud();
$bno = $crud->my_simple_crypt($_REQUEST['id'],'d');
$k="select * from  adddischarge where  id='$bno'";
$t = $crud->getData($k);
foreach($t as $key=>$row){
$id1=$row['id'];
$mrno=$row['mrno'];
										$pname=$row['pname'];
										$doa=date('d-m-Y',strtotime($row['doa']));
										$ioa=date('d-m-Y',strtotime($row['ioa']));
										$mprocedure=$row['mprocedure'];
										$indication=$row['indication'];
										$dod=date('d-m-Y',strtotime($row['dod']));
										$dnote=$row['dnote'];
										$dtime=$row['dtime'];
										$bweight=$row['bweight'];
										$advise=$row['advise'];
										$review=$row['review'];
			}?>
<div><img src="../img/raajto.png" style="width:100%; height:120px;"/>  </div>
<hr/>
        <table    border="0"  cellspacing="10">
        <tr>
<td><strong>Name of the Patient</strong> : <?php echo $pname;  ?> </td>
</tr>

<tr>
<td><strong>Date of Admission</strong> : <?php echo $doa;  ?> </td>
</tr>
<tr>
<td><strong>Indication of Admission</strong> : <?php echo $ioa;  ?> </td>
</tr>
<tr>
<td><strong>Mode of Procedure</strong> : <?php echo $mprocedure;  ?> </td>
</tr>
<tr>
<td><strong>Indication</strong> : <?php echo $indication;  ?> </td>
</tr>
<tr>
<td><strong>Date of Discharge</strong> : <?php echo $dod;  ?> </td>
</tr>
<tr>
<td><strong>Delivery Notes</strong> : <?php echo $dnote;  ?> </td>
</tr>
<tr>
<td><strong>Delivery Time</strong> : <?php echo $dtime;  ?> </td>
</tr>
<tr>
<td><strong>Baby Weight at the time of Delivery</strong> : <?php echo $bweight;  ?> </td>
</tr>
<tr>
<td><strong>Rx Advice at Discharge</strong> : <?php echo $advise;  ?> </td>
</tr>
<tr>
<td><strong>Review</strong> : <?php echo $review;  ?> </td>
</tr>
<tr>

</tr>
</table>


 
   
        
		
		
           
        
        
              
        
        
        </div> 
        </div>   
       
    </div>
    
</div>
</body>
</html>
<?php 

}else
{
session_destroy();
session_unset();
header('Location:index.php');
}
?>