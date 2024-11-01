
<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user'];
include('../db/insert_procedure.php');
include("header.php");?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">View Upload Reports Details</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Ayurvedic</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">View Upload Reports Details</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header> View Upload Reports</header>
                                     <button id = "panel-button" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                       
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="#" id="form_sample_1" class="form-horizontal" method="post">
                                        <div class="form-body">
																			
                                        <div class="form-group row">
                                               
                                                <div class="col-md-12">
                                                    <table class="table">
													<tr>
													<th>S No</th>
													<th>Mr No</th>
													<th>Title</th>
													<th>View</th>
													</tr>
													<?php

													$id=$_GET['id'];
													$y="select a.mrno,b.title,b.image from preports1 a,preports b where a.id=b.mrno and a.id='$id'";
													$t=mysqli_query($link,$y) or die(mysqli_error($link));
													$i=1;
													while($t1=mysqli_fetch_array($t)){
													?>
													<tr>
													<th><?php echo $i; ?></th>
													<th><?php echo $t1['mrno']; ?></th>
													<th><?php echo $t1['title']; ?></th>
													<th><a href="../reports/<?php echo $t1['image']; ?>" target="_blank">View</a></th>
													</tr>
													
													<?php $i++; }?>
													</table>
                                            </div>
                                            </div>
                                           
											<div class="form-actions">
                                            <div class="row">
                                                
                                            	</div>
                                        	</div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
           
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php");?>
	   <?php 

}else
{
session_destroy();

session_unset();

header('Location:../../index.php?authentication failed');

}

?>