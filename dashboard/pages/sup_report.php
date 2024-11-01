<?php
//include_once('../db/Crud.php');
include_once('../db/connection.php');
//$crud = new Crud();
$supname=$_GET['supname'];
?>
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
<div><img src="../img/raajtop.png" style="width:100%; height:120px;"/>  </div>
<h1 align="center">Suppler  Amount Report</h1>
<table width="100%" cellpadding="0" cellspacing="0"> 
    <tr height="20px"></tr>        
    <tr>
        <td>      
        <table cellpadding="0" cellspacing="0" width="100%" border="0">
            <tr>
                <td class="header"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="4" cellspacing="0" width="100%" border="1">
                        <tr>
                            <td align="right"><b>Supplier Name: </b></td>
                            <td align="left" colspan="6"><?php echo $supname?> </td>
                           
                        </tr>
                        <tr>
							<td align="center"><b>S.No.</b></td>
                             <td align="center"><b>Sup Code.</b></td>
                            <td align="center"><b>Bill No.</b></td>
							<td align="center"><b>Bill Date</b></td>
                            <td align="center"><b>Total</b></td>
                             <td align="center"><b>Paid</b></td>
							  <td align="center"><b>Balance</b></td>
							 
							
						</tr>
                        <?php
						
						//$qry1="select distinct BillNO,BillDate,PatientName,NetAmount,PaidAmount,BalanceAmount from bill1  where  BillDate between '$sdate1' and '$edate1'";
                    // $pp="select distinct BillNO,BillDate,PatientName,NetAmount,PaidAmount,BalanceAmount from bill where BillDate between '$sdate1' and '$edate1'";
						// $qry1="select distinct a.mrno, a.BillNO,a.BillDate,a.PatientName,a.NetAmount,a.PaidAmount,a.BalanceAmount,a.ptype,b.conce_type from bill1 a,bill b  where  a.BillNO=b.BillNO and a.BillDate between '$sdate1' and '$edate1' order by a.mrno asc";
						//$qry1="select a.mrno, a.BillNO,a.BillDate,a.PatientName,a.ptype,a.Amount,a.TestName,b.ltype from bill a,testdetails b where a.TestName=b.TestName and a.BillDate between '$fdate1' and '$tdate1'";
						$qry1="select a.INV_DATE,a.SUPPL_INV_NO,a.SUPPL_CODE,a.TOTAL,a.paid,a.bal,b.SUPPL_NAME from phr_purinv_mast a,phr_supplier_mast b where a.SUPPL_CODE=b.SUPPL_CODE And  a.SUPPL_CODE='$supname'";
						$result = mysqli_query($link,$qry1);
						$i=1;
						$namt=0;
						$pamt=0;
						$bamt=0;
							foreach($result as $key=>$res){
								
							 $bdate = date('d-m-Y',strtotime($res['INV_DATE']));
							 
							 $bno = $res['SUPPL_INV_NO'];
							
							 $SUPPL_CODE = $res['SUPPL_NAME'];
							  //$TestName = $res['TestName'];
							 $namount = $res['TOTAL'];
							 $pamount = $res['paid'];
							 $bamount = $res['bal'];
							 
							  $namt=$namt+$namount;
							   $pamt=$pamt+$pamount;
							   $bamt=$bamt+$bamount;
							
							 //$bal1 = ($bal1+$bal);
							
						 ?>
                        <tr>
                            <td align="center"><?php echo $i ?></td>
                             <td align="center"><?php echo $SUPPL_CODE ?></td>
                            <td align="center"><?php echo $bno ?></td>
                            <td align="center"><?php echo $bdate ?></td>
                          
                            <td align="center"><?php echo $namount ?></td>
							<td align="center"><?php echo $pamount ?></td>
							<td align="center"><?php echo $bamount ?></td>
							                        
						</tr>
                       <?php  $i++; } ?>
					  
							<tr>
			<td colspan="4" align="right"><b>Total Amount</b></td>
			<th ><?php echo $namt; ?></th>
			<th ><?php echo $pamt; ?></th>
			<th ><?php echo $bamt; ?></th>
			
			</tr>	
						
                    </table>
                </td>
            </tr>
			
        </table>
        </td>
    </tr> 

<tr><td>&nbsp;</td></tr>
<tr>
    <td align="center"><input type="button" value="Print" id="prt" class="butbg" onclick="printt()"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Close" id="cls" class="butbg" onClick="window.close();"/></td>
</tr>
        </table>
