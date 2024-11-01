<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user'];
include('../db/update_sterilisation.php');
include("header.php");?>
<script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Sterilisation Certificate Format  </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Sterilisation Certificate Format</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Sterilisation Certificate Format </header>
                                     
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="#" id="form_sample_1" class="form-horizontal" method="post">
                                        <div class="form-body">
										
																				   
										   <div class="form-group row">
                                                <label class="control-label col-md-3">Sterilisation Certificate Format 
                                                    <span class="required"> * </span>
													<input type="hidden" name="user" value="<?php echo $ses; ?>"/>
													<input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                                </label>
                                                
                                            </div>
											<?php ?>
										   <div class="form-group row">
                                                
                                                <div class="col-md-12">
                                                    <textarea name="report" class="form-control" id="report"><?php echo $emc; ?></textarea>
                                            </div>
                                            </div>
											
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="submit" class="btn btn-info">Update</button>
                                                    <a href="dashboard.php"><button type="button" class="btn btn-default">Cancel</button></a>
                                                </div>
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
            <!-- start chat sidebar -->
            
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php");?>
	   <script>
                CKEDITOR.replace( 'report', {
                height: 160
                } );
            </script>
	   <?php 

}else
{
session_destroy();

session_unset();

header('Location:../../index.php?authentication failed');

}

?>