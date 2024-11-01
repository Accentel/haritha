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

			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Expenses</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                              
                                </li>
                                <li class="active">Add Expenses</li>
                            </ol>
                        </div>
                    </div>
					
					
					
					
					
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Expenses</header>
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
								
								<?php if(isset($_POST['add_cust'])){
$date=$_POST['date'];
$expen_name=$_POST['expen_name'];
$purpose=$_POST['purpose'];
$amount=$_POST['amount'];
$id=$_POST['id'];
$sq=mysqli_query($link,"update expenses set type='$expen_name',purpose='$purpose',amount='$amount',date='$date',user='$ses' where id='$id' ");
 
						if($sq){
									print "<script>";
	print "alert('Successfully Updated');";
	print "self.location='expences_list.php';";
	print "</script>";
								
								
								}
								}
								
							$id=$_GET['id'];
$sq=mysqli_query($link,"select * from expenses where id='$id'");
$r=mysqli_fetch_array($sq);							
								
								?>							
								
								<form name="form" method="post" id="register-form1" action="">
                                <div class="card-body " id="bar-parent2">
                                	<div class="row">
	                                    <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
											<input type="hidden" value="<?php echo $id?>" name="id">
										<div class="form-group">
	                                            <label>Date</label>
	                                            <input type="date" class="form-control" value="<?php echo $r['date'];?>" required name="date" id="date" >
	                                        </div>
	                                        <div class="form-group">
	                                            <label>Expenses Type</label>
												<select name="expen_name" required class="form-control">
												<option value="<?php echo $r['type'];?>"><?php echo $r['type'];?></option>
												<?php $sq=mysqli_query($link,"select * from expenses_type order by id desc");
												while($r1=mysqli_fetch_array($sq)){?>
												<option value="<?php echo $r1['name'];?>"><?php echo $r1['name'];?></option>
												<?php }?>
												</select>
                                              </div>
												
         </div>
		 
										
											
											
									
	                               <div class="col-md-6 col-sm-6">
	                                        <!-- text input -->
											
											 
											 <div class="form-group">
	                                            <label>Purpose</label>
	                                            <textarea name="purpose" class="form-control"><?php echo $r['purpose'];?></textarea></div>
											 <div class="form-group">
	                                            <label>Amount</label>
	                                            <input type="number" required class="form-control" name="amount" value="<?php echo $r['amount'];?>" id="amount" >
	                                        </div>
										
											
											
												
	                                    </div>	
	                                    </div>
									
                                	</div>
									
									
                                </div>
								<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" class="btn btn-info" value="Submit" name="add_cust">
                                                    <button type="button" class="btn btn-default" onclick="javascript:location.href='expences_list.php'">
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