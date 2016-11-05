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
							
							UI Banners 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Main Slider
						</li>
						
					</ul>
					<h3 class="page-title">
					Main Slider <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorslider')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorslider'); ?></div>
              <?php $this->session->unset_userdata('errorslider');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successslider')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successslider'); ?>
                </div>
              <?php $this->session->unset_userdata('successslider');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								All Slider Details
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
										Main Text
									</th>
                                    <th >
										Sub Text
									</th>
                                    <th >
										Main Image
									</th>									
									<th>
									      Action
									</th>
								</tr>
								</thead>
								<tbody>
                                <?php if(count($admin_sliders)){
								foreach($admin_sliders-> result_array()as $row){ ?>
								<tr>
									<td class="highlight">
									<?php echo $row['slider_id'];?>
									</td>
									<td class="hidden-xs">
									<?php echo $row['main_text'];?>
									</td>
                                    <td class="hidden-xs">
									<?php echo $row['sub_text'];?>
									</td>
                                    <td class="hidden-xs">
									<img src="<?php echo base_url();?>assets/images/slider/<?php echo $row['main_img'];?>" alt="<?php echo $row['main_img'];?>" style=" width:200px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>						</td>									
									<td>
                                    	<a href="#viewModal<?php echo $row['slider_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
                                        
										<a href="#catModal<?php echo $row['slider_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
                                        <a href="#deleteModal<?php echo $row['slider_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
										<i class="fa fa-times"></i></a>
										
									</td>
								</tr>
                                <?php }} ?>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
                    <?php if(count($admin_sliders)){
					foreach($admin_sliders-> result_array()as $row){ ?>
					<div id="viewModal<?php echo $row['slider_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Slider Details  ( Slider ID - <?php echo $row['slider_id'];?> )</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal" >
                                        <div class="form-body">
                                            
                                          <div class="form-group">
                                                
                                                <div class="col-md-12">
                                                <table width="80%" border="0" align="center" style=" padding-bottom:50px">
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Slider Details </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td width="35%">Main Text</td>
                                                    <td colspan="2">: <?php echo $row['main_text'];?></td>
                                                  </tr> 
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td width="35%">Sub Text</td>
                                                    <td colspan="2">: <?php echo $row['sub_text'];?></td>
                                                  </tr> 
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                   <tr>
                                                    <td valign="top">Main Image</td>
                                                    <td colspan="2"><img src="<?php echo base_url();?>assets/images/slider/<?php echo $row['main_img'];?>" alt="<?php echo $row['main_img'];?>" style=" width:200px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                  <?php if ($row['img1']!=""){?>
                                                  <tr>
                                                    <td valign="top">Other Image 1</td>
                                                    <td colspan="2"><img src="<?php echo base_url();?>assets/images/slider/<?php echo $row['img1'];?>" alt="<?php echo $row['img1'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
                                                  </tr>
                                                  <?php }?>
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                  <?php if ($row['img2']!=""){?>
                                                  <tr>
                                                    <td valign="top">Other Image 2</td>
                                                    <td colspan="2" ><img src="<?php echo base_url();?>assets/images/slider/<?php echo $row['img2'];?>" alt="<?php echo $row['img2'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
                                                  </tr>
                                                  <?php }?>
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                  <?php if ($row['img3']!=""){?>
                                                  <tr>
                                                    <td valign="top">Other Image 3</td>
                                                    <td  colspan="2"><img src="<?php echo base_url();?>assets/images/slider/<?php echo $row['img3'];?>" alt="<?php echo $row['img3'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
                                                  </tr>
                                                  <?php }?>
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
                    <?php if(count($admin_sliders)){
					foreach($admin_sliders-> result_array()as $row){ ?>
					<div id="catModal<?php echo $row['slider_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Slider Details 
                                            </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/slideredit/<?php echo $row['slider_id'];?>" method="post" enctype="multipart/form-data" onsubmit="return editcatevalidation()">
                                        <div class="form-body">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Main Text</label>
                                                <div class="col-md-9">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Main Text" value="<?php echo $row['main_text'];?>" class="form-control" name="main" id="main">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Sub Text</label>
                                                <div class="col-md-9">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Sub Text" value="<?php echo $row['sub_text'];?>" class="form-control" name="sub" id="sub">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Main Image</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <img src="<?php echo base_url();?>assets/images/slider/<?php echo $row['main_img'];?>" alt="<?php echo $row['main_img'];?>" style=" width:200px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Name" class="btn grey fileinput-button" name="mainimg" id="mainimg<?php echo $row['slider_id'];?>" style="margin-top:5px" onchange="return ValidateFileUpload1<?php echo $row['slider_id'];?>()"><br />
                                                    
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
                                        <input type="hidden" value="<?php echo $row['main_img'];?>" name="mainimage" />
                                        <input type="hidden" value="<?php echo $row['img1'];?>" name="simage1" />
                                        <input type="hidden" value="<?php echo $row['img2'];?>" name="simage2" />
                                        <input type="hidden" value="<?php echo $row['img2'];?>" name="simage3" />
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn yellow" type="submit" id="Edit<?php echo $row['slider_id'];?>">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                     <?php }}?>  
                                      <?php if(count($admin_sliders)){
					foreach($admin_sliders-> result_array()as $row){ ?>
					<div id="deleteModal<?php echo $row['slider_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Delete slider  </h4>
										</div>
                     <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/sliderdelete" method="post">
                                        
              <div class="modal-body">
                      <p>
                         Do you want to delete "<span style="color:#06F"><?php echo $row['main_text'];?></span>" category? 
                      </p>
                    </div>
                                        <div class="modal-footer">
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                             <input type="hidden" value="<?php echo $row['slider_id'];?>" name="slider_id" />
                                             <input type="hidden" value="<?php echo $row['main_text'];?>" name="main_text" />
                      <button class="btn blue" type="submit">Confirm</button></form>
										</div>
									</div>
								</div>
							</div>
                           <?php }}?>
                                           
                                            
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
                            
						   
						            <?php if(count($admin_sliders)){
					foreach($admin_sliders-> result_array()as $row){ ?>
					<div id="delteModal<?php echo $row['slider_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Slider Details  </h4>
										</div>
                     <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/sliderdelete" method="post">
                                        
              <div class="modal-body">
                      <p>
                         Do you want to delete "<span style="color:#06F"><?php echo $row['main_text'];?></span>" slider? 
                      </p>
                    </div>
                                        <div class="modal-footer">
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                             <input type="hidden" value="<?php echo $row['slider_id'];?>" name="slider_id" />
                                             <input type="hidden" value="<?php echo $row['main_text'];?>" name="main_text" />
                      <button class="btn blue" type="submit">Confirm</button></form>
										</div>
									</div>
								</div>
							</div>
                           <?php }}?>
					<!-- END SAMPLE TABLE PORTLET-->
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

<?php if(count($admin_sliders)){
					foreach($admin_sliders-> result_array()as $row){ ?> 
	<SCRIPT type="text/javascript">
    function ValidateFileUpload1<?php echo $row['slider_id'];?>() {
		var fuData = document.getElementById('mainimg<?php echo $row['slider_id'];?>');
		var FileUploadPath = fuData.value;
    
		//To check if user upload any file
		if (FileUploadPath == '') {
		alert("Please upload an image");
    
		} else {
		var Extension = FileUploadPath.substring(
		FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
    
		//The file uploaded is an image
		
		if ( Extension == "gif" || Extension == "png" || Extension == "bmp"
		|| Extension == "jpeg" || Extension == "jpg") {
    	document.getElementById("Edit<?php echo $row['slider_id'];?>").disabled = false; 
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
		document.getElementById("Edit<?php echo $row['slider_id'];?>").disabled = true; 
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
