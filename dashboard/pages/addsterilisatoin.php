<?php //include('config.php');
session_start();
if($_SESSION['user'])
{
$ses=$_SESSION['user']; 
include('../db/insert_sterilisation.php');
include("header.php");?>
<script>
function showHint5(str)
{
//var str=document.getElementById('mrno').value;
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var show=xmlhttp.responseText;
	var strar=show.split(":");
	
	document.getElementById("ipno").value=strar[1];
	
    }
  }
  str = encodeURIComponent(str);
xmlhttp.open("GET","search4166.php?q="+str,true);
xmlhttp.send();
}



</script>

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
		<script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
		<!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Sterilisation Certificate</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Certificates</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Sterilisation Certificate</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Sterilisation Certificate</header>
                                     
				                        
                                </div>
								
                                <div class="card-body" id="bar-parent">
								
                                    <form action="#" id="form_sample_1" class="form-horizontal" method="post">
                                        <div class="form-body">
										
                                        <div class="form-group row">
                                                <label class="control-label col-md-2">MR No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="mrno"  value="" id="mrno" placeholder="Enter MRNO" class="form-control mrno" required onChange="showHint5(this.value)"/> 
													<input type="hidden" name="user"  value="<?php echo $ses; ?>" id="user"  class="form-control" required /> 
													 </div>
                                             <label class="control-label col-md-2">IP No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="ipno"  value="" id="ipno" placeholder="Enter IP NO" class="form-control mrno" required /> 
													
													 </div>
											</div>
											 <div class="form-group row">
												<label class="control-label col-md-2">Date 
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
												 <input type="date" name="date"   id="date" class="form-control" value="<?php echo date('Y-m-d'); ?>"/>
												 </div>
												 </div>
											
											 <div class="form-group row">
                                                
                                                <div class="col-md-12">
                                                    <textarea name="report" class="form-control" id="report"><?php echo $emc; ?></textarea>
                                            </div>
                                            </div>
											
									         
                                           <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="Submit" class="btn btn-info">Submit</button>
                                                    <a href="sterilisationcertificateslist.php"><button type="button" class="btn btn-default">Cancel</button></a>
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
<script type="text/javascript">
$(function() {
    
    //autocomplete
    $(".mrno").autocomplete({
        source: "set109.php",
        minLength: 1
    });    


;})



 </script>
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