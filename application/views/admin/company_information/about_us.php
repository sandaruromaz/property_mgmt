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
							
							Company Information 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							About Us 
						</li>
						
					</ul>
					<h3 class="page-title">
					About Us <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorabout')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorabout'); ?></div>
              <?php $this->session->unset_userdata('errorabout');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successabout')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successabout'); ?>
                </div>
              <?php $this->session->unset_userdata('successabout');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-sitemap"></i>About Us
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-advance table-hover" >
							<thead>
							<tr>
                                <th style="width:20%">
									Vision
								</th>
								<th style="width:20%">
									 Mission
								</th>
								<th style="width:20%">
									 About us
								</th >
                                <th style="width:30%">
									 History
								</th >
								
                                <th class="hidden-xs" style="width:10%">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_about)){
							foreach($admin_about-> result_array()as $row){ ?>
							<tr>
                            	<td style="width:20%">
									 <?php echo $row['vision'];?>
								</td>
								<td style="width:20%">
									 <?php echo $row['mission'];?>
								</td>
								<td style="width:20%">
									 <?php echo $row['about'];?>
								</td>
                                <td style="width:30%">
									 <?php echo $row['history'];?>
								</td>
                                <td style="width:10%">
									 <a href="#catModal<?php echo $row['about_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
								
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                    <?php if(count($admin_about)){
					foreach($admin_about-> result_array()as $row){ ?>
                    <div id="catModal<?php echo $row['about_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit About Us
</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/aboutusedit/<?php echo $row['about_id'];?>" method="post" onsubmit="return editaboutusvalidation()">
                                        <div class="form-body">
                                                <div class="form-group">
                                                	<label class="control-label col-md-3">Vision</label>
                                                <div class="col-md-9"> 
                                                <div class="has-error" >                                                   
                                                        <textarea class="wysihtml5 form-control" name="vision" id="vision" rows="10"><?php echo $row['vision'];?></textarea>
                                                        <span class='error'></span> </div>
                                                  </div>
                                                </div> 
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Mission</label>
                                                    <div class="col-md-9">
                                                    <div class="has-error" >
                                                        <textarea class="wysihtml5 form-control" name="mission" id="mission" rows="10"><?php echo $row['mission'];?></textarea>
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">About Us</label>
                                                    <div class="col-md-9">
                                                    <div class="has-error" >
                                                        <textarea class="wysihtml5 form-control" name="about" id="about" rows="10"><?php echo $row['about'];?></textarea>
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div> 
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">History</label>
                                                    <div class="col-md-9">
                                                    <div class="has-error" >
                                                        <textarea class="wysihtml5 form-control" name="history" id="history" rows="10"><?php echo $row['history'];?></textarea>
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div> 
                                            
                                           
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        <input type="hidden" value="<?php echo $row['about_id'];?>" name="reviewid" />
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn yellow" type="submit">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                            <?php }}?>
							
					<!-- END EXAMPLE TABLE PORTLET-->
					
					</div>
                    <div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-user"></i>Director Details
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-advance table-hover" >
							<thead>
							<tr>
                                <th style="width:30%">
									Position 
								</th>
								<th style="width:30%">
									 Name
								</th>
								<th style="width:30%">
									 Image
								</th >
								
                                <th class="hidden-xs" style="width:10%">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_about)){
							foreach($admin_about-> result_array()as $row){ ?>
							<tr>
                            	<td style="width:30%">
									 <?php echo $row['position'];?>
								</td>
								<td style="width:30%">
									 <?php echo $row['name'];?>
								</td>
								<td style="width:30%">
                                <img src="<?php echo base_url();?>assets/images/team/<?php echo $row['img'];?>" alt="<?php echo $row['img'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
								
								
                                <td style="width:10%">
									 <a href="#dirModal<?php echo $row['about_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
								
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                    <?php if(count($admin_about)){
					foreach($admin_about-> result_array()as $row){ ?>
                    <div id="dirModal<?php echo $row['about_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Director Details</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/directoredit/<?php echo $row['about_id'];?>" method="post" enctype="multipart/form-data" onsubmit="return editdirectorvalidation()">
                                        <div class="form-body">
                                                <div class="form-group">
                                                	<label class="control-label col-md-3">Position</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Position" value="<?php echo $row['position'];?>" class="form-control" name="position" id="position">
                                                <span class='error'></span> </div>
                                                </div>
                                                </div> 
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Name</label>
                                                    <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Name" value="<?php echo $row['name'];?>" class="form-control" name="name" id="named">
                                                <span class='error'></span> </div>
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Image</label>
                                                    <div class="col-md-9">
                                                        <img src="<?php echo base_url();?>assets/images/team/<?php echo $row['img'];?>" alt="<?php echo $row['name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                       <input type="file"  placeholder="Name" class="btn grey fileinput-button" name="dimg" id="dimg" style="margin-top:5px" onchange="return ValidateFileUpload1()"><br />
                                                    
                                                    </div>
                                                </div>  
                                            
                                           
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        <input type="hidden" value="<?php echo $row['img'];?>" name="pic" />
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn yellow" type="submit" id="Add">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                            <?php }}?>
							
					<!-- END EXAMPLE TABLE PORTLET-->
					
					</div>
                    </div>
				</div></div>
			<!-- END PAGE CONTENT-->
		</div>
 <!-- BEGIN PAGE LEVEL PLUGINS -->
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
		var fuData = document.getElementById('dimg');
		var FileUploadPath = fuData.value;
    
		//To check if user upload any file
		if (FileUploadPath == '') {
		alert("Please upload an image");
    
		} else {
		var Extension = FileUploadPath.substring(
		FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
    
		//The file uploaded is an image
		
		if (Extension == "gif" || Extension == "png" || Extension == "bmp"
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
		alert(" only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
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