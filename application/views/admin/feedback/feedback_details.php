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
							
							Messages
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="<?php echo base_url(); ?>index.php/admin/feedback">							
							Inbox ( <?php echo $feedcount; ?> )</a>
                            <i class="fa fa-angle-right"></i>  
						</li>
                        <li>							
							Message Details  
						</li>
						
					</ul>
					<h3 class="page-title">
					Message Details <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorfeedd')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorfeedd'); ?></div>
              <?php $this->session->unset_userdata('errorfeedd');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successfeedd')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successfeedd'); ?>
                </div>
              <?php $this->session->unset_userdata('successfeedd');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>Message Details 
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
						  <?php if(count($admin_feedback_details)){
                            foreach($admin_feedback_details-> result_array()as $row){ ?>                                               
                        <table width="100%" border="0">
                          <tr>
                            <td><strong style="color:#006; font-size:14px"><?php echo $row['name'];?></strong></td>
                            <td><span style="font-size:10px; float:right"><?php echo $row['date'];?> @ <?php echo $row['time'];?></span></td>
                          </tr>
                          <tr>
                            <td colspan="2"> <i class="fa fa-angle-left"></i> <?php echo $row['email'];?> <i class="fa fa-angle-right"></i></td>
                            </tr>
                            <?php if($row['phone']!=""){?> 
                            <tr>
                            <td colspan="2"> <i class="fa fa-angle-left"></i> <?php echo $row['phone'];?> <i class="fa fa-angle-right"></i></td>
                            </tr>
                            <?php }?>
                          <tr>
                            <td colspan="2">&nbsp;</td>
                            </tr>
                          <tr>
                            <td colspan="2" style="border: 1px solid #e9e9e9;padding: 10px 10px 10px; width:100%"><?php echo $row['message'];?></td>
                            </tr>
                          <tr>
                            <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                            <td colspan="2"><a class="btn green tooltips" data-placement="top" data-original-title="REPLY" data-toggle="modal" style="float:right" href="#replyModal<?php echo $row['feedback_id'];?>">REPLY</a></td>
                            </tr>
                        </table>
                        <?php }}?>				
						</div>
					</div>
                    
                    
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <?php if(count($admin_feedback_details)){
                            foreach($admin_feedback_details-> result_array()as $row){ ?>  
					 <div id="replyModal<?php echo $row['feedback_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Reply</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/AdminControl/replyFeedback/<?php echo $row['feedback_id'];?>" method="post" 
                                        enctype="multipart/form-data" onsubmit="return sendmailvalidation()">
                                        <div class="form-body">
                                           <div class="form-group">
                                                <label class="col-md-2 control-label">To</label>
                                                <div class="col-md-10">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="To" value="<?php echo $row['email'];?>" class="form-control" name="to" id="to"  readonly="readonly">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-2">Message</label>
                                                <div class="col-md-10">
                                                <div class="has-error" >
                                                <textarea class="wysihtml5 form-control" name="message" rows="10" id="sendmessage"></textarea>
                                                <span class='error'></span> </div>    
                                                    </div>
                                                </div>
                                            
                                             <div class="form-group">
                                                <label class="col-md-2 control-label">Attach File</label>
                                                <div class="col-md-10">
                                                 <div class="has-error" >
                                                   <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="attach" style="margin-top:5px" id="fileChooser2" onchange="return ValidateFileUpload2()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                        <input type="hidden" value="<?php echo $row['name'];?>" name="name" />
                                        <button class="btn green" type="submit" name="btnFeed" id="Send">SEND</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                            <?php }}?>
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
    function ValidateFileUpload2() {
        var fuData = document.getElementById('fileChooser2');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload coorect file");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

	if (Extension == "pdf" || Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {
	document.getElementById("Send").disabled = false; 
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
		document.getElementById("Send").disabled = true; 
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