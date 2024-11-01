<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user'];
include('../db/insert_preports.php');
include("header.php");?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Upload Reports</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                          
                                </li>
                                <li class="active">Add Upload Reports</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Upload Reports</header>
                                     <button id = "panel-button" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="#" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
																			
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">MR No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                     <select name="pname"  id="pname"  class="form-control mrno"  onChange="showHint5(this.value)" required>
													<option value="">Select MR NO</option>
													<?php 
													
													$q="select distinct registerno,patientname  FROM   patientregister  order by reg_id  desc";
													$rt=mysqli_query($link,$q) or die(mysqli_error($link));
													while($r1=mysqli_fetch_array($rt)){
														?>
													<option value="<?php echo $r1['registerno']; ?>"><?php echo $r1['registerno']."(".$r1['patientname'].")"; ?></option>		<?php
													}
													?>
													
													</select>	
													<input name="user" id="user" type="hidden"  class="form-control input-height" value="<?php echo $ses; ?>" /> 
													<span class="required"><?php if(isset($errorpname)){echo $errorpname;} ?></span>
                                            </div>
                                            </div>
											
											<div class="form-group row">
                                        <label class="control-label col-md-3">  </label>
										<div  class="col-sm-6" style="text-align:right;">
	
											<button type="button" class='btn btn-success addmore'>+</button>
											<button type="button" class='btn btn-danger delete'>-</button>
										</div>
                                          
                                    </div>
									
									
									<div class="form-group row">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Upload </label>

                                        <div class="col-sm-3">
                                           <input type="file" name="image[]" id="image" class="form-control" />
										   <input type="hidden" name="ksr[]" value="1"/>
										   
                                        </div>
										<div  class=" col-sm-3">
	
											<input type="text" class="form-control" placeholder="Enter Report Name" id="title" name="title[]" required   /> 
										</div>
                                            
                                    </div>
                                    
                                      <div class="osu"></div>
									
                                           
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                                    <a href="uploadreportslist.php"><button type="button" class="btn btn-default">Cancel</button></a>
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
           
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php");?>
	   <script>
/*$(".delete").on('click', function() {
	$('.case:checkbox:checked').parents("tr").remove();
calculateTableSum(currentTable);
});*/

$(".delete").on('click', function() {
	$('.case:checkbox:checked').parents(".form-group").remove();
	$('#check_all').prop("checked", false); 
	calculateTotal();
});





var i=2;
$(".addmore").on('click',function(){
      if(i>4){
alert('you are upload 4 Documents only');
}else{
	var data ="<div class='form-group row'>";
    data +="<label class='control-label col-sm-3' for='fname'><input type='checkbox' class='case'/>Upload:</label>";
    data +="<div class='col-sm-3'>";          
    data +="<input type='file' class='form-control' id='image' name='image[]' >";
   data +="<input type='hidden' name='ksr[]' value='1'/>";
    data +="</div>";
	data +="<div  class='col-sm-3'>";
	data +="<input type='text' class='form-control' placeholder='Enter Report Name' id='title' name='title[]' required /></div></div>";
}	
	
	
	
	$('.osu').append(data);
	i++;
});
function select_all() {
	$('input[class=case]:checkbox').each(function(){ 
		if($('input[class=check_all]:checkbox:checked').length == 0){ 
			$(this).prop("checked", false); 
		} else {
			$(this).prop("checked", true); 
		} 
	});
}
</script>
	   <?php 

}else
{
session_destroy();

session_unset();

header('Location:../../index.php?authentication failed');

}

?>