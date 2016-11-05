<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
<!-- BEGIN THEME STYLES -->

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
							
							Gallery 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Gallery Category
						</li>
						
					</ul>
					<h3 class="page-title">
					Gallery Category  <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorgallerycategory')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorgallerycategory'); ?></div>
              <?php $this->session->unset_userdata('errorgallerycategory');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successgallerycategory')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successgallerycategory'); ?>
                </div>
              <?php $this->session->unset_userdata('successgallerycategory');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			<div class="row">
				<div class="col-md-6">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								All Gallery Category Details
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-advance table-hover">
								<thead>
								<tr>
									<th>
										 #
									</th>
									<th >
										Category Name
									</th>           <th >
										Category Image
									</th>									
									<th>
									      Action
									</th>
								</tr>
								</thead>
								<tbody>
                                <?php if(count($admin_gallery)){
								foreach($admin_gallery-> result_array()as $row){ ?>
								<tr>
									<td class="highlight">
									<?php echo $row['gallery_category_id'];?>
									</td>
                  <td class="hidden-xs">
									<?php echo $row['name'];?>
									</td>
                   <td class="hidden-xs">
									<img src="<?php echo base_url();?>assets/images/gallerycategory/<?php echo $row['catergory_image'];?>" alt="<?php echo $row['catergory_image'];?>" style=" width:200px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>						</td>									
									<td>
                                    	<a href="#viewModal<?php echo $row['gallery_category_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
                                        
										<a href="#catModal<?php echo $row['gallery_category_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
										<a href="#delteModal<?php echo $row['gallery_category_id'];?>" data-toggle="modal" data-original-title="REMOVE OTHER IMAGES" data-placement="top" class="btn default btn-xs red tooltips" >
										<i class="fa fa-times"></i></a>
										
									</td>
								</tr>
                                <?php }} ?>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
                    <?php if(count($admin_gallery)){
					foreach($admin_gallery-> result_array()as $row){ ?>
					<div id="viewModal<?php echo $row['gallery_category_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Gallery Category Details </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal" >
                                        <div class="form-body">
                                            
                                          <div class="form-group">
                                                
                                                <div class="col-md-12">
                                                <table width="80%" border="0" align="center" style=" padding-bottom:50px">
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Gallery Category Details </h3><hr /></td>                                                    
                                                  </tr>
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td width="35%">Category Name</td>
                                                    <td colspan="2">: <?php echo $row['name'];?></td>
                                                  </tr> 
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                   <tr>
                                                    <td valign="top">Main Image</td>
                                                    <td colspan="2"><img src="<?php echo base_url();?>assets/images/gallerycategory/<?php echo $row['catergory_image'];?>" alt="<?php echo $row['catergory_image'];?>" style=" width:200px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                           
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>                                                  
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                </table>
                                                
                                                </div>
                                            </div>
                                           
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        
                                        </form>
										</div>
									</div>
								</div>
							</div>
                           <?php }}?>
                    <?php if(count($admin_gallery)){
					foreach($admin_gallery-> result_array()as $row){ ?>
					<div id="catModal<?php echo $row['gallery_category_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Category Details 
                                            </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/gallerycatedit/<?php echo $row['gallery_category_id'];?>" method="post" enctype="multipart/form-data" onsubmit="return editcatevalidation()">
                                        <div class="form-body">
                                            
                                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Name</label>
                                                <div class="col-md-9">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Sub Text" value="<?php echo $row['name'];?>" class="form-control" name="sub" id="sub">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Main Image</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <img src="<?php echo base_url();?>assets/images/gallerycategory/<?php echo $row['catergory_image'];?>" alt="<?php echo $row['catergory_image'];?>" style=" width:200px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Name" class="btn grey fileinput-button" name="mainimg" id="mainimg<?php echo $row['gallery_category_id'];?>" style="margin-top:5px" onchange="return ValidateFileUpload1<?php echo $row['gallery_category_id'];?>()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                       <!--   <div class="form-group">
                                                <label class="col-md-3 control-label">Other Images</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <img src="<?php echo base_url();?>assets/images/slider/<?php echo $row['img1'];?>" alt="NO IMAGE" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Name" class="btn grey fileinput-button" name="simg1" id="simg1" style="margin-top:5px"><br />
                                                     <img src="<?php echo base_url();?>assets/images/slider/<?php echo $row['img2'];?>" alt="NO IMAGE"  style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Name" class="btn grey fileinput-button" name="simg2" id="simg2" style="margin-top:5px"><br />
                                                     <img src="<?php echo base_url();?>assets/images/slider/<?php echo $row['img3'];?>" alt="NO IMAGE"  style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Name" class="btn grey fileinput-button" name="simg3" id="simg3" style="margin-top:5px"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>-->
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        <input type="hidden" value="<?php echo $row['catergory_image'];?>" name="mainimage" />
                                      
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn yellow" type="submit" id="Edit<?php echo $row['gallery_category_id'];?>">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                     <?php }}?>  
          <?php if(count($admin_gallery)){
					foreach($admin_gallery-> result_array()as $row){ ?>
					<div id="delteModal<?php echo $row['gallery_category_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Gallery Category Details  </h4>
										</div>
                     <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/gallerycatdelete" method="post">
                                        
              <div class="modal-body">
                      <p>
                         Do you want to delete "<span style="color:#06F"><?php echo $row['name'];?></span>" category? 
                      </p>
                    </div>
                                        <div class="modal-footer">
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                             <input type="hidden" value="<?php echo $row['gallery_category_id'];?>" name="gallery_category_id" />
                                             <input type="hidden" value="<?php echo $row['name'];?>" name="name" />
                      <button class="btn blue" type="submit">Confirm</button></form>
										</div>
									</div>
								</div>
							</div>
                           <?php }}?>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
              <div class="col-md-6 ">
          
          <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet box blue ">
            <div class="portlet-title">
              <div class="caption">
                Add Gallery Category 
              </div>
              <div class="tools">
                <a class="collapse" href="#">
                </a>
                
              </div>
            </div>
            <div class="portlet-body form">
              <form role="form" class="form-horizontal" action="<?php echo base_url(); ?>index.php/admin/gallerycatadd" method="post" enctype="multipart/form-data" onsubmit="return addbrandvalidation()" >
                <div class="form-body">
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Category Name</label>
                    <div class="col-md-8">
                                        <div class="has-error" >
                      <input type="text" placeholder="Category Name" class="form-control" name="catename" id="brandcatename">
                                         
                              <span class='error'></span> </div>   
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Category Image</label>
                    <div class="col-md-9">
                                        <div class="has-error" >
                                  
                      <input type="file"  placeholder=" Name" class="btn green fileinput-button" name="categoryimg" id="categoryimg" style="margin-top:5px" onchange="return ValidateFileUpload()">
                                         
                              <span class='error'></span> </div>   
                    </div>
                  </div>
                 <div class="alert alert-warning" >
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in  image.
                                  </div>
                  
                </div>
                <div class="form-actions right1">
                  <button class="btn default" type="reset">Reset</button>
                  <button class="btn green" type="submit" id="Add">Add </button>
                </div>
              </form>
            </div>
          </div>
          <!-- END SAMPLE FORM PORTLET-->
          </div>
			
				</div></div>
			<!-- END PAGE CONTENT-->
		</div>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/components-dropdowns.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<?php if(count($admin_gallery)){
					foreach($admin_gallery-> result_array()as $row){ ?> 
	<SCRIPT type="text/javascript">
    function ValidateFileUpload1<?php echo $row['gallery_category_id'];?>() {
		var fuData = document.getElementById('mainimg<?php echo $row['gallery_category_id'];?>');
		var FileUploadPath = fuData.value;
        alert(FileUploadPath);
		//To check if user upload any file
		if (FileUploadPath == '') {
		alert("Please upload an image");
    
		} else {
		var Extension = FileUploadPath.substring(
		FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
    
		//The file uploaded is an image
		
		if ( Extension == "gif" || Extension == "png" || Extension == "bmp"
		|| Extension == "jpeg" || Extension == "jpg") {
    	document.getElementById("Edit<?php echo $row['gallery_category_id'];?>").disabled = false; 
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
		alert("Only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Edit<?php echo $row['gallery_category_id'];?>").disabled = true; 
		}
		}
    }
    </SCRIPT> 
 <?php }}?>      
<script>
        jQuery(document).ready(function() {       
           // initiate layout and plugins
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
           ComponentsDropdowns.init();
        });   
</script>        
