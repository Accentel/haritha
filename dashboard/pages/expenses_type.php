<?php
session_start();
 $ses= $_SESSION['user'] ;
 if($_SESSION['user'])

{
	
 ?>
 
<?php include("header.php");
include("../db/connection.php");
$sq=mysqli_query($link,"select * from login where name1='$ses'");
	$r1=mysqli_fetch_array($sq);
	$pass=$r1['pass1'];
?>

<script src="jquery.min.js"></script>
  <script src="jquery.validate.min.js"></script>

 <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#register-form").validate({
    
        // Specify the validation rules
        rules: {
        
					pass:"required",
			cpass:{
					 required: true,
					  equalTo: "#pass"				
				  },
			
				 
				 
					new_pass:"required",
			new_pass1:{
					 required: true,
					  equalTo: "#new_pass"				
				  },  
		
            
        },
        
       
        messages: {
            
				   pass: "<strong style='color:#FF0000;font-size:14px;'>Please enter password</strong>",
			  cpass: "<strong style='color:#FF0000;font-size:14px;'>Please Enter Correct Old Password</strong>",
			   
			 new_pass: "<strong style='color:#FF0000;font-size:14px;'>Please enter new password</strong>",
			  new_pass1: "<strong style='color:#FF0000;font-size:14px;'>New Password and Confirm Password mismatch</strong>",
			   
			
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Expenses Type </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                              
                                </li>
                                <li class="active">Add Expenses Type<li>
                            </ol>
                        </div>
                    </div>
					
					
					
					
					
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Expenses Type</header>
                                    <button id = "panel-button3" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <!--<ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button3">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>-->
                                </div>
								<?php if(isset($_POST['sub'])){
								 $expenses=$_POST['expenses'];
							
								 $a="insert into expenses_type (name)values('$expenses')";
								$sq=mysqli_query($link,$a);
								if($sq){
									print "<script>";
	print "alert('Successfully Registered');";
	print "self.location='expses_type.php';";
	print "</script>";
								
								
								}
								}?>
							
								<form name="form" method="post" id="register-form1" action="expses_type.php">
                                <div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
											
										
	                                        <div class="form-group">
	                                            <label>Expenses Type</label>
												
                                                <input type="text" name="expenses" id="expenses" required="required" class="form-control" />
												</div>
												 
         </div>
		 
										
											
											
									
	                               
	                                    </div>
									
                                	</div>
									
									
                                </div>
								<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" class="btn btn-info" value="Submit" name="sub">
                                                    <button type="button" class="btn btn-default" onclick="javascript:location.href='dashboard.php'">
                                                    Cancel</button>
                                                </div>
                                            	</div>
                                        	</div>
                            </div>
                        </div>
                    </div>
					
					</form>
					
					
					
              
            <!-- end page content -->
            <!-- start chat sidebar -->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php //include("footer.php");?>
	    <?php 

}else

{

session_destroy();

session_unset();

header('Location:../../index.php');

}

?>