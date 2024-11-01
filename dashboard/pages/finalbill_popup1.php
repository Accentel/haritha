

<?php
include("../db/connection.php");

$emp_id = $_REQUEST['emp_id'];


$query = mysqli_query($link,"select B.patientname,B.registerno, B.age, B.gender,B.address,B.doctorname,B.rel_type,
B.gaurdianname,B.phoneno,ADMIT_DATE from ip_pat_admit as A,patientregister as B WHERE
  A.PAT_REGNO=B.registerno and A.PAT_NO='$emp_id' ");
if($query){
	$row1 = mysqli_fetch_array($query);
	$patname = $row1['patientname'];
	$regno = $row1['registerno'];
	$age = $row1['age'];
	$gender = $row1['gender'];
	
	$admitdate = date('d-m-Y',strtotime($row1['ADMIT_DATE']));
	
	$addr1=$row1['address'];
	$doctorname=$row1['doctorname'];
	$rel_type=$row1['rel_type'];
	$gaurdianname=$row1['gaurdianname'];
	$phoneno=$row1['phoneno'];
  }
 $x="";
echo $data=":".$emp_id.":".$patname.":".$regno.":".$age.":".$gender.":".$addr1.":".$doctorname.":".$gaurdianname.":".$phoneno.":".$admitdate.":".$x;;
//echo $data=":".$admitdate;


//.$nursefee2."|".$icu."|";
//."|".$maintfree2."|".$nursefee2."|".$icu; 

$x="";

//echo $data=":".$admitdate.":".$x;
?>


						<!--	<h1 align="left">Pharmacy Charges</h1>
                                                   <table class="table">
												   <tr>
												   <th>Particular Name</th>
												   <th>QTY</th>
												   <th>Rate</th>
												   <th>Amount</th>
												   </tr>					  
												   <?php 
												   
												   $sa="select b.product_name,a.u_qty,a.u_rate,a.value,c.discount,c.total,a.disc,a.total,d.TYPE,a.gst,a.total as tt from phr_salent_dtl as a,
			  phr_purinv_dtl as b,phr_salent_mast as c,`phr_prddetails_mast` as d where a.inv_id=b.inv_id and a.lr_no=c.lr_no  and c.CUST_NAME='$emp_id' and b.inv_id=d.id";
			  $res1=mysqli_query($link,$sa);
			   $i=1;
			  while($row1 = mysqli_fetch_array($res1)){
												  
										 ?>
												   <tr>
												   <td><input type="text" name="desc[]"   id="description<?php echo $i; ?>" value="<?php echo $row1['product_name'];?>"/></td>
												   <td><input type="text" name="qty[]" id="qty<?php echo $i; ?>"  value="" onkeyup="val(this.value,<?php echo $row1['u_qty'] ?>,<?php echo $i ?>,<?php echo $row1['u_rate'] ?>,<?php echo $row1['value'];?>);" class='tet1'/></td>
												   <td><input type="text" name="rate[]" id="rate<?php echo $i; ?>" value=""  onkeyup="valk(this.value,<?php echo $row1['u_qty'] ?>,<?php echo $i ?>,<?php echo $row1['u_rate'] ?>,<?php echo $row1['value'];?>);" class='tet1'/></td>
												   <td><input type="text" name="amn[]" id="amn<?php echo $i; ?>"  value=""  class="txt3 tet6"/></td>
												      <input name="rows"  id="rows" type="hidden"  value="<?php echo $i ?>"/>
												   </tr>
												   <?php $i++;}?>
												   <input type="hidden"  id="m" name="m" value="<?php echo $i ?>"/>
												   <input name="hidden" type="hidden" id="htnDcode" />
                    <input type="hidden" id="htncount" name="htncount"  value="1"/>
                    <input type="hidden"  id="htncount" name="count" value="<?php echo $i ?>"/>
                    <input type="hidden"  id="htnt" name="str">
                    <input type="hidden"  id="m" name="m" value="<?php echo $i ?>"/>-->
												  
                                              