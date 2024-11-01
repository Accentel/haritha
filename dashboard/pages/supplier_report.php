<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user'];

include("header.php");?>
<script type="text/javascript">
function reportxx()
{
//alert("hai");
if (document.myform.supname.value=="") {
        alert("Please Select Supplier Name.");
        document.supname.focus();
        return (false);
    }
    
    var s_date=document.myform.supname.value;
  
	
	window.open('sup_report.php?supname='+s_date,'Mywindow','width=1020,height=800,toolbar=no,menubar=no');
}
</script>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Supplier Report</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Reports</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Supplier Report</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Supplier Report</header>
                                     <button id = "panel-button" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="#" name="myform" id="form_sample_1" class="form-horizontal" >
                                        <div class="form-body">
																			
                                        <div class="form-group row">
                                                <label class="control-label col-md-2">Supplier Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    
		                                                <select  class="form-control " name="supname" id="supname">
		                                                    <option value="">Select Supplier Name</option>
		                                                    <?php 
		                                                    $k=mysqli_query($link,"select * from phr_supplier_mast");
		                                                    while($k1=mysqli_fetch_array($k)){
		                                                    ?>
		                                                    <option value="<?php echo $k1['SUPPL_CODE'] ?>"><?php echo $k1['SUPPL_NAME'] ?></option>
		                                                    <?php }?>
		                                              </select>      
		                                                
	                                            	
	                                            
	                                            </div>
                                            </div>
                                           
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="submit" class="btn btn-info" onclick="javascript:reportxx()">Submit</button>
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
	   <?php 

}else
{
session_destroy();

session_unset();

header('Location:../../index.php?authentication failed');

}

?>