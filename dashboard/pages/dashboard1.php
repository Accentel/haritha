<?php
session_start();
 $ses= $_SESSION['user'] ;
 if($_SESSION['user'])

{
 ?><?php
include("../db/connection.php");
 ?>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/light/dashboard3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Jul 2018 11:04:33 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title> Hospital | Managment System</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="../../assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
    <link href="../../assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
	<link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../../assets/material/material.min.css">
	<link rel="stylesheet" href="../css/material_style.css">
	<!-- Theme Styles -->
    <link href="../css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="../css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" /> 
 </head>
 <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="dashboard1.php">
                    <!--<span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>-->
                    
                    <img src="../img/raj logo.png" width="100%" height="100%">
                    <!--<span class="logo-default" >Hospital</span>--> </a>
                </div>
                <!-- logo end -->
				
                 
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                    	<!-- start language menu -->
                        
                        <!-- end language menu -->
                        <!-- start notification dropdown -->
                        
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 						
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						
                        <!-- end manage user dropdown -->
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start color quick setting -->
        
		<!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->

			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            
                        </div>
                    </div>
					
					<?php
					
						$q="select ename from login where name1='$ses' ";
					$y=mysqli_query($link,$q) or die(mysqli_error($link));
						$y1=mysqli_fetch_array($y);
					$ename=$y1['ename'];
					
					$q1="select a.deptname from employee c,empdept a  where c.department=a.id  and c.empcode='$ename' ";
					$y2=mysqli_query($link,$q1) or die(mysqli_error($link));
					$y11=mysqli_fetch_array($y2);
					$dpt=$y11['deptname'];
					
					
					?>
					
					
					      
<?php
$d=date('Y-m-d');					
 $a="SELECT sum(total) as amnt FROM `patientregister` where date='$d' and pat_type='OP'";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					//$cnt=mysqli_num_rows($sq);
					$amnt=$r['amnt'];
					
					 $a="SELECT * FROM `patientregister` where date='$d' and pat_type='OP'";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$cnt=mysqli_num_rows($sq);
					
					
					 $a="SELECT * FROM `patientregister` where date='$d' and pat_type='OP' and pat_type1='Existing'";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$renual=mysqli_num_rows($sq);
					
					
					 $a="SELECT * FROM `ip_pat_admit` where admit_date='$d' and DIS_STATUS='ADMITTED' ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$ip=mysqli_num_rows($sq);
					
					 $a="SELECT * FROM `ip_pat_admit`  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$ip1=mysqli_num_rows($sq);
					
					
					 $a="SELECT sum(ADV_AMT) as amt FROM `adv_collection` where ADV_DATE='$d'  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$adv=$r['amt'];	
$a="SELECT sum(ADV_AMT) as amt FROM `adv_collection`  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$adva=$r['amt'];

					 $a="SELECT sum(adv_amnt) as amt FROM `ip_pat_admit`   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$ip_amt1=$r['amt'];	
					$ipamt=$adva+$ip_amt1;
					
					
					 $a="SELECT sum(adv_amnt) as amt FROM `ip_pat_admit` where ADMIT_DATE='$d'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$ip_amt2=$r['amt'];	
					
					 $a="SELECT * FROM `ip_pat_admit` where DIS_STATUS!='ADMITTED' and Discharge_date='$d'  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$dis=mysqli_num_rows($sq);
					
				
			 $a="SELECT sum(total) as amt FROM `phr_purinv_mast` where INV_DATE='$d'  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$pur=$r['amt'];	
					
					 $a="SELECT sum(total) as amt FROM `phr_salent_mast` where SAL_DATE='$d'  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$sale=$r['amt'];	
					
					 $a="SELECT sum(total) as amt FROM `phr_salent_mast`   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$sale1=$r['amt'];	
					
					
					
					 $a="SELECT sum(pamount) as amt FROM `bill`   ";
					$sq=mysqli_query($link,$a);
					
					$r=mysqli_fetch_array($sq);
					$tlab=$r['amt'];	
					
					$a="SELECT count(id) as lab_cnt FROM `bill1`   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$lab_cnt=$r['lab_cnt'];	
					
						$a="SELECT count(id) as direct FROM `bill` where ptype='OP'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$op=$r['direct'];	
					
					$a="SELECT count(id) as direct FROM `bill` where ptype='IP'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$ip=$r['direct'];
					
					$a="SELECT count(id) as direct FROM `bill` where ptype='General'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$gen=$r['direct'];
					
					
					$a="SELECT sum(pamount) as lab FROM `bill` where bdate='$d'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$today_lab_amt=$r['lab'];
					
						$a="SELECT count(id) as lab_cnt FROM `bill` where bdate='$d'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$today_lab_cnt=$r['lab_cnt'];
					
					
					$a1="SELECT sum(amount) as amt FROM `expenses` where date='$d'   ";
					$sq=mysqli_query($link,$a1);
					$r=mysqli_fetch_array($sq);
					$texp=$r['amt'];
					
					
					$a21="SELECT sum(namount) as amt FROM `daycarebill` where bdate='$d'   ";
					$sq2=mysqli_query($link,$a21);
					$r2=mysqli_fetch_array($sq2);
					$dcareamt=$r2['amt'];
					
					
					$a22="SELECT sum(namount) as amt FROM `daycarebill`    ";
					$sq22=mysqli_query($link,$a22);
					$r22=mysqli_fetch_array($sq22);
					$tdcareamt=$r22['amt'];
					
					
					
					
					?>
						<?php
					
						$q="select ename from login where name1='$ses' ";
					$y=mysqli_query($link,$q) or die(mysqli_error($link));
						$y1=mysqli_fetch_array($y);
					$ename=$y1['ename'];
					
					$q1="select a.deptname from employee c,empdept a  where c.department=a.id  and c.empcode='$ename' ";
					$y2=mysqli_query($link,$q1) or die(mysqli_error($link));
					$y11=mysqli_fetch_array($y2);
					$dpt=$y11['deptname'];
					
					
					?>
					
					
					      
<?php
$d=date('Y-m-d');					
 $a="SELECT sum(total) as amnt FROM `patientregister` where date='$d' and pat_type='OP'";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					//$cnt=mysqli_num_rows($sq);
					$amnt=$r['amnt'];
					
					 $a="SELECT * FROM `patientregister` where date='$d' and pat_type='OP'";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$cnt=mysqli_num_rows($sq);
					
					
					 $a="SELECT * FROM `patientregister` where date='$d' and pat_type='OP' and pat_type1='Existing'";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$renual=mysqli_num_rows($sq);
					
					
					 $a="SELECT * FROM `ip_pat_admit` where admit_date='$d' and DIS_STATUS='ADMITTED' ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					 $ipv=mysqli_num_rows($sq);
					
					 $a="SELECT * FROM `ip_pat_admit`  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$ipv1=mysqli_num_rows($sq);
					
					
					 $a="SELECT sum(ADV_AMT) as amt FROM `adv_collection` where ADV_DATE='$d'  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$adv=$r['amt'];	
$a="SELECT sum(ADV_AMT) as amt FROM `adv_collection`  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$adva=$r['amt'];

					 $a="SELECT sum(adv_amnt) as amt FROM `ip_pat_admit`   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$ip_amt1=$r['amt'];	
					$ipamt=$adva+$ip_amt1;
					
					
					 $a="SELECT sum(adv_amnt) as amt FROM `ip_pat_admit` where ADMIT_DATE='$d'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$ip_amt2=$r['amt'];	
					
					 $a="SELECT * FROM `ip_pat_admit` where DIS_STATUS!='ADMITTED' and Discharge_date='$d'  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$dis=mysqli_num_rows($sq);
					
				
			 $a="SELECT sum(total) as amt FROM `phr_purinv_mast` where INV_DATE='$d'  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$pur=$r['amt'];	
					
					 $a="SELECT sum(total) as amt FROM `phr_salent_mast` where SAL_DATE='$d'  ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$sale=$r['amt'];	
					
					 $a="SELECT sum(total) as amt FROM `phr_salent_mast`   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$sale1=$r['amt'];	
					
					
					
					 $a="SELECT sum(pamount) as amt FROM `bill`   ";
					$sq=mysqli_query($link,$a);
					
					$r=mysqli_fetch_array($sq);
					$tlab=$r['amt'];	
					
					$a="SELECT count(id) as lab_cnt FROM `bill1`   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$lab_cnt=$r['lab_cnt'];	
					
						$a="SELECT count(id) as direct FROM `bill` where ptype='OP'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$op=$r['direct'];	
					
					$a="SELECT count(id) as direct FROM `bill` where ptype='IP'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$ip=$r['direct'];
					
					$a="SELECT count(id) as direct FROM `bill` where ptype='General'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$gen=$r['direct'];
					
					
					$a="SELECT sum(pamount) as lab FROM `bill` where bdate='$d'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$today_lab_amt=$r['lab'];
					
						$a="SELECT count(id) as lab_cnt FROM `bill` where bdate='$d'   ";
					$sq=mysqli_query($link,$a);
					$r=mysqli_fetch_array($sq);
					$today_lab_cnt=$r['lab_cnt'];
					
					
					$a1="SELECT sum(amount) as amt FROM `expenses` where date='$d'   ";
					$sq=mysqli_query($link,$a1);
					$r=mysqli_fetch_array($sq);
					$texp=$r['amt'];
					
					
					$a21="SELECT sum(namount) as amt FROM `daycarebill` where bdate='$d'   ";
					$sq2=mysqli_query($link,$a21);
					$r2=mysqli_fetch_array($sq2);
					$dcareamt=$r2['amt'];
					
					
					$a22="SELECT sum(namount) as amt FROM `daycarebill`    ";
					$sq22=mysqli_query($link,$a22);
					$r22=mysqli_fetch_array($sq22);
					$tdcareamt=$r22['amt'];
					
					
					
					
					?>
					
                    <!-- start widget -->
				<div class="row">
	                 <div class="col-md-3 col-xs-12 col-sm-6">
	                        
	                         <table class="table table-bordered" style="width:100%; ">
                           <tr>
                            <td  style="height: 350px;"> <div class='card shadow-sm w-100 h-100' >
					<div class='card-header bg-info text-white'><h5>OP Summary <?php  if($dpt>=1) { echo $dpt; } else { echo  "0"; } ?></h5>
					</div><ul class='list-group list-group-flush'>
					
					
					
					
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Total Amount</div>
					<div class='col-5 text-right'><?php if($amt>=1){ echo $amnt; } else { echo  "0"; }?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Today OP</div>
					<div class='col-5 text-right'><?php if($cnt>=1) { echo $cnt; } else { echo  "0"; }?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Fresh OP</div>
					<div class='col-5 text-right'><?php  $ttc=$cnt-$renual; if($ttc>=1){ echo $ttc; } else { echo  "0"; } ?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Review OP</div>
					<div class='col-5 text-right'><?php if($renual>=1){ echo $renual; } else { echo  "0"; }?></div></div></li>
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>					
					Procedures</div>
					<div class='col-5 text-right'>0</div></div></li>
					
					
					
					
					</ul></div>
					</td>
				
				
					</td></tr>
					</table>
						
<!--
<table class="table table-bordered" style="width:100%; ">
                           <tr>
                            <td  style="height: 150px;"> <div class='card shadow-sm w-100 h-100' >
					<div class='card-header bg-info text-white'><h5>Expenses Summary </h5>
					</div><ul class='list-group list-group-flush'>
					
					
					
					
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Today Total Expenses</div>
					<div class='col-3 text-right'><?php echo $texp;?></div>
					
					</div></li>
					
										
					</ul></div>
					</td>
				
				
					</td></tr>
					</table>	-->					
						<!-- Today Total Summary -->		
							
								
	                        
	                    </div>   
						
						
						
						 <div class="col-md-3 col-xs-12 col-sm-6">
						
						
						<table class="table table-bordered" >
                           <tr>
                                <td > <div class='card shadow-sm w-100 h-100' style="margin-top: -05px;">
					<div class='card-header bg-info text-white'><h5>IP Summary</h5>
					</div><ul class='list-group list-group-flush'>
					
					
					
					
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Total Amount</div>
					<div class='col-5 text-right'><?php if($ipamt>=1){ echo $ipamt; } else { echo  "0"; }?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Today Advances</div>
					<div class='col-5 text-right'><?php if($adv>=1) { echo $adv; } else { echo  "0"; }?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					IP Occupancy Ratio</div>
					<div class='col-5 text-right'></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Total IP</div>
					<div class='col-5 text-right'><?php if($ipv1>=1){ echo $ipv1; } else { echo  "0"; }?></div></div></li>
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>					
					Today IP</div>
					<div class='col-5 text-right'><?php if($ipv >=1) { echo $ipv; } else { echo  "0"; }?></div></div></li>
					
					
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>					
					Settlemnents Cnt</div>
					<div class='col-5 text-right'></div></div></li>
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>					
					Discharges</div>
					<div class='col-5 text-right'><?php if($dis>=1) { echo $dis; } else { echo  "0"; }?></div></div></li>
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>					
					Oparations</div>
					<div class='col-5 text-right'>0<?php //echo $amnt;?></div></div></li>
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>					
					 IP Services</div>
					<div class='col-5 text-right'>0<?php //echo $amnt;?></div></div></li>
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>					
					Doctor Visits</div>
					<div class='col-5 text-right'>0<?php //echo $amnt;?></div></div></li>
					
					</ul></div>
					</td></tr>
				
                          
                       
                     
                         

                        </table>
						
						
						
						
						
						
						
						
						
						</div>
						
						
						
						
						
						
						 <div class="col-md-3 col-xs-12 col-sm-6">
						 
						 <table class="table table-bordered" style="width:100%; ">
			
			                       
                     <tr>
                                <td > <div class='card shadow-sm w-100 h-100'>
					<div class='card-header bg-info text-white'><h5>LAB Summary</h5>
					</div><ul class='list-group list-group-flush'>
					<li class='list-group-item'>
					<div class='row'><div class='col-6'>
					
					Total Amount</div>
					<div class='col-6 text-right'><?php if($tlab>=1) { echo $tlab; } else { echo  "0"; }?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Total Test Count</div>
					<div class='col-5 text-right'><?php if($lab_cnt>=1){ echo $lab_cnt; } else { echo  "0"; }?></div></div></li>
					
										<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Direct Patient Count</div>
					<div class='col-5 text-right'><?php if($gen>=1){ echo $gen; } else { echo  "0"; }?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					 OP Patient Count</div>
					<div class='col-5 text-right'><?php if($op>=1){ echo $op; } else { echo  "0"; }?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Ip Patient Count</div>
					<div class='col-5 text-right'><?php if($ip>=1){ echo $ip; } else { echo  "0"; }?></div></div></li>
				
					</ul></div>
					</td>
				
		
			<!-- op summary end -->
			<!-- ip summary start -->
			
			<!-- ip summary end -->
			</tr>
			</table>
			
			<!--<table class="table table-bordered" style="width:100%; ">
			
			                       
                     <tr>
                                <td > <div class='card shadow-sm w-100 h-100'>
					<div class='card-header bg-info text-white'><h5>Daycare Summary</h5>
					</div><ul class='list-group list-group-flush'>
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Today Amount</div>
					<div class='col-3 text-right'><?php echo $dcareamt;?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-8'>
					
					Total Amount</div>
					<div class='col-4 text-right'><?php echo $tdcareamt;?></div></div></li>
										
				
					</ul></div>
					</td>
				
		
			
			</tr>
			</table>-->
            </div>	
			     
<div class="col-md-3 col-xs-12 col-sm-6">

<table class="table table-bordered" style="width:100%; ">
			
			                       
                     <tr>
                                <td > <div class='card shadow-sm w-100 h-100'>
					<div class='card-header bg-info text-white'><h5>Pharmacy Summary</h5>
					</div><ul class='list-group list-group-flush'>
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					Today Amount</div>
					<div class='col-5 text-right'><?php if($sale>=1) { echo $sale;  } else { echo  "0"; }?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-8'>
					
					Total Amount</div>
					<div class='col-4 text-right'><?php if($sale1>=1) { echo $sale1; } else { echo  "0"; }?></div></div></li>
										
				
					</ul></div>
					</td>
				
		
			
			</tr>
			</table>

<table class="table table-bordered" style="width:100%; ">
                           <tr>
                            <td  style="height: 350px;"> <div class='card shadow-sm w-100 h-100' >
					<div class='card-header bg-info text-white'><h5>Today Total Summary <?php  echo $dpt ?></h5>
					</div><ul class='list-group list-group-flush'>
					
					
					
					
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					From Patient Registration Amount</div>
					<div class='col-5 text-right'><?php if($tpramount>=1) { echo $tpramount; } else { echo  "0"; }?></div></div></li>
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					From Advance Amount</div>
					<div class='col-5 text-right'><?php if($adv>=1) { echo $adv; } else { echo  "0"; }?></div></div></li>
					
					
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					From Lab Amount</div>
					<div class='col-5 text-right'><?php if($today_lab_amt>=1){  echo $today_lab_amt; } else { echo  "0"; }?></div></div></li>
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>
					
					From Pharmacy Amount</div>
					<div class='col-5 text-right'><?php if($sale>=1) { echo $sale; } else { echo  "0"; }?></div></div></li>
					
				
					<li class='list-group-item'>
					<div class='row'><div class='col-7'>					
					Total Amount</div>
					<div class='col-5 text-right'><?php $tam= $tpramount+$adv+$today_lab_amt+$sale-$texp;
					if($tam>=1) { echo $tam;} else { echo  "0"; }

					?></div></div></li>
					
					
					
					
					</ul></div>
					</td>
				
				
					</td></tr>
					</table>	
</div>
				 
                	</div>
					
					
					
					
                     <!-- start new patient list -->
					 
					 		
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Beds Status <i class="material-icons" style="color:green;width:32px;height:32px;">hotel</i>Available Beds &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="material-icons" style="color:red;width:32px;height:32px;">hotel</i>Reserved Beds</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body" id="bar-parent">
												
								<div class="row">
                                  <?php
								$result=mysqli_query($link,"select * from beds");

								  foreach($result as $key=>$p){ 
									
									
									 if($p['status']=='open'){ ?>
										 
										 
										<div class="col-lg-2"> 
										 
									<?php	 echo $p['bedno']; ?>
									 
									   &nbsp;&nbsp;&nbsp;<a href="#" title="<?php echo $p['bedno']; ?>"><i class="material-icons" style="color:green;width:32px;height:32px;">hotel</i></a>&nbsp;&nbsp;&nbsp;
									   </div>
									   <?php }else{ ?>
										<div class="col-lg-2">    
										<?php   echo $p['bedno'];?>
									  &nbsp;&nbsp;&nbsp;<a href="#" title="<?php echo $p['bedno']; ?>"><i class="material-icons" style="color:red;">hotel</i> </a>&nbsp;&nbsp;&nbsp;
									  </div>
									  <?php }?>
									  
									<?php }?>
									
									
									</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- end new patient list -->
                     <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>ToDay Booking List</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
									
                                       
	

									   <ul class="to-do-list ui-sortable" id="sortable-todo">
									   <marquee  behavior="scroll" direction="down" scrolldelay="150">  <?php
					
 $a="SELECT * FROM `patientregister` where date='$d' ";
//$a="SELECT * FROM `patientregister` order by reg_id desc limit 0,10 ";
					$sq=mysqli_query($link,$a);
					$i=1;
					while($r=mysqli_fetch_array($sq)){
						
					?>
									  
                                            <li class="clearfix">
                                                <div class="todo-check pull-left">
                                                    <input type="checkbox" value="None" id="todo-check1">
                                                    <label for="todo-check1"></label>
                                                </div>
                                               <a href='patientregister1.php?reg=<?php echo $r['reg_id'];?>'> <p class="todo-title"><?php echo $r['registerno'];?> - <?php echo $r['patientname'];?></a>
                                                </p></a>
                                                <div class="todo-actionlist pull-right clearfix">
                                                    <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                                </div>
                                            </li>
					<?php }?></marquee>
                                        </ul>
                                    </div>
                                   <!-- <div class="box-footer">
					                <form action="#" method="post">
					                  <div class="input-group">
					                    <input type="text" name="message" placeholder="Enter your ToDo List" class="form-control">
					                    <span class="input-group-btn">
					                    <button type="submit" class="btn btn-warning btn-flat">Add</button>
					                    </span> </div>
					                </form>
					               </div>-->
                                </div>
                            </div>
                        </div>
						<div class="col-md-6 col-sm-12">
                             <div class="card card-box">
                                 <div class="card-head">
                                     <header>Doctors List</header>
                                 </div>
                                 <div class="card-body ">
                                 <div class="row">
								   <ul class="docListWindow">
								 <?php $sqq=mysqli_query($link,"select * from doct_infor order by id desc limit 0,8");
								 while($r1=mysqli_fetch_array($sqq)){
									 $gender=$r1['gender'];
									 ?>
								 
                                      
                                            <li>
                                                <div class="prog-avatar">
												<?php if($gender=='Female'){?>
                                                    <img src="../img/doc/doc1.jpg" alt="" width="40" height="40">
												<?php } else {?>
												     <img src="../img/doc/doc2.jpg" alt="" width="40" height="40">
												
												<?php }?>
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.<?php echo $r1['dname1'];?></a> -(<?php echo $r1['desc1'];?>)
                                                    </div>
                                                        <div>
                                                           
                                                        </div>
                                                </div>
								 </li>
                                            <?php }?>
                                        </ul>
                                        <div class="text-center full-width">
                                            <a href="doctor.php">View all</a>
                                        </div>
                                    </div>
                                 </div>
                             </div>
						</div>
					</div>
					
					
					
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php");?>
        <!--<script src="http://radixtouch.in/templates/admin/redstar/source/assets/assets/jquery.min.js" ></script>
    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/popper/popper.js" ></script>
    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/jquery.blockui.min.js" ></script>
    
  
	<script src="http://radixtouch.in/templates/admin/redstar/source/assets/jquery.slimscroll.js"></script>

    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/bootstrap/js/bootstrap.min.js" ></script>
    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/bootstrap-switch/js/bootstrap-switch.min.js" ></script>

    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/counterup/jquery.waypoints.min.js" ></script>
    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/counterup/jquery.counterup.min.js" ></script>

	<script src="http://radixtouch.in/templates/admin/redstar/source/assets/app.js" ></script>
    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/layout.js" ></script>
    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/theme-color.js" ></script>

    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/material/material.min.js"></script>

    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/chart-js/Chart.bundle.js" ></script>
    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/chart-js/utils.js" ></script>
    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/chart-js/home-data.js" ></script>
    
    <script src="http://radixtouch.in/templates/admin/redstar/source/assets/chart-js/home-data3.js" ></script>
     <script src="http://radixtouch.in/templates/admin/redstar/source/assets/sparkline/jquery.sparkline.js" ></script>
      <script src="http://radixtouch.in/templates/admin/redstar/source/assets/sparkline/sparkline-data.js" ></script>-->
    
	   	   <?php 

}else

{

session_destroy();

session_unset();

header('Location:../../index.php');

}

?>