<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user']; 
include('../db/insert_dischargesummary.php');

include("header.php");?>
<script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>

			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Discharge Summary Details</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Billing</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Discharge Summary Details</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Discharge Summary</header>
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
								
                                    <form action="#" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
										
                                        	<div class="form-group row">
											<label class="control-label col-md-2"> MR NO:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="regno" data-required="1" onclick="window.open('wrno1.php','mywindow','width=700,height=500,toolbar=no,menubar=no,scrollbars=yes')" readonly id="regno" placeholder="Enter MRNO " class="form-control " required/>
													<input type="hidden" name="user" value="<?php echo $ses; ?>" id="user" placeholder="Enter MRNO " class="form-control " />
													
												</div>
                                                <label class="control-label col-md-2"> NAME:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="patname" data-required="1" value="" readonly id="patname" placeholder="Enter Patient Name" class="form-control " required/>
													
												</div>
												
											</div>
                                                
											
											<div class="form-group row">
                                                <label class="control-label col-md-2">Date of Admission:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input class="form-control"  readonly placeholder="Date of Admission" type="text" value="" name="doa" id="doa">											
											    </div>
												 <label class="control-label col-md-2">Indication of Admission:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input class="form-control " size="16"  type="date" value="<?php echo date('Y-m-d'); ?>" name="ioa" id="ioa">										
											    </div>
	                                        </div>
											
											
											
											<div class="form-group row">
											<label class="control-label col-md-2">Mode of Prodedure:
                                                    <span class="required"> * </span>
                                                </label>
                                                 <div class="col-md-4">
                                                    <textarea class="form-control " size="16" placeholder="Mode of Prodedure" value=" " name="modeofprodedure" id="modeofprodedure"></textarea>
		                                                
	                                            	                                       
	                                            </div>
                                                <label class="control-label col-md-2">Indication:   
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
												 <textarea class="form-control " size="16" placeholder="Indication" value=" " name="indication" id="indication"></textarea>
												 </div>
											</div>
										
                                            
                                            
											
											
                                         <div class="form-group row">
                                                                                                                    
                                                <label class="control-label col-md-2">Date of Discharge :
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                     <input class="form-control"  placeholder="Date of Discharge" type="date" value="<?php echo date('Y-m-d'); ?>" name="dod" id="dod">											
											    </div>
										       
										</div>											
                                         	
											<div class="form-group row">
                                                <label class="control-label col-md-2"> Delivery Note:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea name="deliverynote" id="deliverynote" placeholder="Enter Course In The Hospital " class="form-control-textarea" rows="5" ></textarea>
                                                </div>
											</div>
											<div class="form-group row">
                                                                                                                    
                                                <label class="control-label col-md-2">Delivery Time:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
												<input class="form-control "  placeholder="Date of Surgery" type="time" value="" name="time" id="time">
                                                    										
											    </div>
											     <label class="control-label col-md-2">Baby weight :
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
												<input class="form-control "  placeholder="Baby Weight at the time of Delivery" type="text" value="" name="weight" id="weight">
                                                    										
											    </div>                       
                                                
										</div>	
											<div class="form-group row">
                                                <label class="control-label col-md-2">Rx Advice at Discharge:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea name="dischargeadvise" id="dischargeadvise" placeholder="Enter Discharge Advise " class="form-control-textarea" rows="5" ></textarea>
                                                </div>
											</div>
																
											        <div class="form-group row">
                                                <label class="control-label col-md-2"> Review:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="review" data-required="1" value="" id="review" placeholder="Enter Review" class="form-control " required/>
													
												</div>
												
											</div>
											
                                           <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="Submit" class="btn btn-info">Submit</button>
                                                    <a href="dischargesummarylist.php"><button type="button" class="btn btn-default">Cancel</button></a>
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
	   <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>     
		  <script>
                CKEDITOR.replace( 'deliverynote', {
                height: 160
                } );
            </script>
			 <script>
                CKEDITOR.replace( 'dischargeadvise', {
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