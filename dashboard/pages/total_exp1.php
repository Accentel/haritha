<?php
include("../db/connection.php");

 $sdate=$_GET['sdate'];
 $edate=$_GET['edate'];
 $sdate1=date('Y-m-d',strtotime($sdate));
 $edate1=date('Y-m-d',strtotime($edate));
 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Expences Report</title>
        <script type="text/javascript">
            function printt()
            {
                document.getElementById("prt").style.display="none";
                document.getElementById("cls").style.display="none";
             window.print();
            }
            function closs()
            {
                window.close();
            }
        </script>
        <style type="text/css">
            .header{
                font-family: monospace,sans-serif,arial;
                font-size: 20px;
                font-weight: bold;
                text-align: center;
                text-decoration: underline;
            }
            .heading1 {	
                    font-size:24px;
                    text-align:center;
                    font-weight: bold; 
            }
            .heading2 {	
                font-size:16px;
                text-align:center;
            }
            body {
	background: #FFFFFF;
}
        </style>
    </head>
    <body>

<table >
<tr><td ><img src="../img/raajtop.png" style="width:100%; height:120px;"/></td></tr>


</table>
<table width="100%" cellpadding="0" cellspacing="0"> 
    <tr height="20px"></tr>        
    <tr>
        <td>      
        <table cellpadding="0" cellspacing="0" width="100%" border="0">
            <tr>
                <td class="header">Expences List</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="4" cellspacing="0" width="100%" border="1">
                        <tr>
                            <td align="right"><b>From: </b></td>
                            <td align="left"><?php echo $sdate?> </td>
                            <td align="right" colspan="1" style="text-align:center"></td>
                            <td align="right"><b>To: </b></td>
                            <td align="left"><?php echo $edate?></td>
                        </tr>
                        <tr>
							<td align="center"><b>S.No.</b></td>
                            <td align="center"><b>Date.</b></td>
                             <td align="center"><b>Expences Type</b></td>
                             <td align="center"><b>Amount.</b></td>
							<td align="center"><b>Purpose</b></td>
                           
							
                           
                            
							
                            
							
						</tr>
                        <?php
						
                       $a="select * from expenses where date between '$sdate1' and '$edate1' order by id desc";
						$qry=mysqli_query($link,$a);
					
						$i=0;
					 	 while($res=mysqli_fetch_array($qry)){
								
							 
							 
							 $type = $res['type'];
							 $purpose = $res['purpose'];
							  $amount=$res['amount'];
							
							$date1 = $res['date'];
							$date=date('d-m-Y',strtotime($date1));
							 $i++;
						 ?>
                        <tr>
                            <td align="center"><?php echo $i ?></td>
                             <td align="center"><?php echo $date; ?></td>
                              <td align="center"><?php echo $type; ?></td>
                            <td align="center"><?php echo $amt=$amount; ?></td>
                            <td align="center"><?php echo $purpose; ?></td>
                            
                            
                           
                          
                           
                        
						</tr>
                       <?php 
$amt1=$amt+$amt1;
					   }?>
					   <tr><td colspan="3" align="center"><b>Total Amount</b></td><td align="center"><b><?php echo $amt1;?></b></td><td></td></tr>
                    </table>
                </td>
            </tr>
        </table>
        </td>
    </tr> 
	<!--<tr>
	<td align="right"><img src="images/images.png"/></td>
	</tr>
-->
<tr><td>&nbsp;</td></tr>
<tr>
    <td align="center"><input type="button" value="Print" id="prt" class="butbg" onclick="printt()"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Close" id="cls" class="butbg" onclick="closs()"/></td>
</tr>
        </table>
    </body>
</html>
