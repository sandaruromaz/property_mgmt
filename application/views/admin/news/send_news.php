<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-summernote/summernote.css">

<!-- END PAGE LEVEL STYLES -->

<div class="page-content-wrapper">
		<div class="page-content">						
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url(); ?>index.php/admin">
							Home </a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							
							News Management 
							<i class="fa fa-angle-right"></i>
						</li>
						
                        <li>							
							News Subcribers 
						</li>
						
					</ul>
					<h3 class="page-title">
					News Subcribers<small></small><a class="btn green tooltips" data-placement="top" data-original-title="SEND NEWS" data-toggle="modal" style="float:right" href="#replyModal">SEND NEWS</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorsub')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorsub'); ?></div>
              <?php $this->session->unset_userdata('errorsub');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successsub')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successsub'); ?>
                </div>
              <?php $this->session->unset_userdata('successsub');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>News Subcriber Activation Details 
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
						 
                         <table class="table table-striped table-bordered table-hover dataTable" id="sample_1">
								<thead>
								<tr>
									<th>
										 Subcriber ID
									</th>
									
									<th >
										Email
									</th>
                                    <th >
										status
									</th>
								</tr>
								</thead>
								<tbody>
                                <?php if(count($admin_newssubcriber_details)){
								foreach($admin_newssubcriber_details-> result_array()as $row){ ?>
								<tr>
									<td class="highlight">
									<?php echo $row['subcriber_id'];?>
									</td>
									
									<td class="hidden-xs">
									<?php echo $row['email'];?>
									</td>
                                    <td class="hidden-xs">
									 <?php if ($row['status'] == "active"){?>
                                    <span class="badge badge-info badge-roundless">
                                    <?php } else{?> <span class="badge badge-default  badge-roundless"> <?php } ?>
                                    <?php echo $row['status'];?></span>
									</td>
                                    
									
								</tr>
                                <?php }} ?>
								
								</tbody>
								</table>				
						</div>
					</div>
                    
                    
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                   
					 <div id="replyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Send News</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/AdminControl/sendmail" method="post" enctype="multipart/form-data" onsubmit="return sendnewsvalidation()" >
                                        <div class="form-body">                                           
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Message</label>
                                                <div class="col-md-9">
                                                <div class="has-error" >
                                                <textarea class="wysihtml5 form-control" id="newsmessage" name="message" rows="10"></textarea>
                                                 <span class='error'></span> </div>   
                                                    </div>
                                                </div>
                                            
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Attach File</label>
                                                <div class="col-md-9">
                                                 <div class="has-error" >
                                                   <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="attach" id="attach" style="margin-top:5px" onchange="return ValidateFileUpload1()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                       
                                        <button class="btn green" type="submit" name="btnnews"  id="Add">SEND</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                            
                            <!---->			
                    
                    
				</div>
                  
				</div>
                
                </div>
                
			<!-- END PAGE CONTENT-->
		</div>
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/components-editors.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
	<SCRIPT type="text/javascript">
    function ValidateFileUpload1() {
		var fuData = document.getElementById('attach');
		var FileUploadPath = fuData.value;
    
		//To check if user upload any file
		if (FileUploadPath == '') {
		alert("Please upload an image");
    
		} else {
		var Extension = FileUploadPath.substring(
		FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
    
		//The file uploaded is an image
		
		if (Extension == "pdf" || Extension == "gif" || Extension == "png" || Extension == "bmp"
		|| Extension == "jpeg" || Extension == "jpg") {
    	document.getElementById("Add").disabled = false; 
		// To Display
		if (fuData.files && fuData.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function(e) {
		$('#blah').attr('src', e.target.result);
		}
		
		reader.readAsDataURL(fuData.files[0]);
		}
		
		} 
		
		//The file upload is NOT an image
		else {
		alert("Only allows file types of PDF, GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Add").disabled = true; 
		}
		}
    }
    </SCRIPT> 
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   ComponentsEditors.init();
});   
</script>