<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/DT_bootstrap.css"/>
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
							
							Customize Cake
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Art Works  
						</li>
						
					</ul>
					<h3 class="page-title">
					Art Works   <small></small><a href="#addModal" style="float:right"  data-toggle="modal" data-original-title="Add New Art Work" data-placement="top" class="btn green tooltips" style="float:right" >Add New Art Work</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorartwork')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorartwork'); ?></div>
              <?php $this->session->unset_userdata('errorartwork');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successartwork')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successartwork'); ?>
                </div>
              <?php $this->session->unset_userdata('successartwork');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>Art Works 
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
                                <th>
									 Art Work  ID
								</th>
								<th>
									 Art Work  Name
								</th>								
								<th>
									Art Work Category Name
								</th>
								<th class="hidden-xs">
									 Price
								</th>
                                <th class="hidden-xs">
									 Image
								</th>								
                                
                                <th class="hidden-xs">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_artworks)){
							foreach($admin_artworks-> result_array()as $row){ ?>
							<tr>
                            	<td>
									 <?php echo $row['artwork_id'];?>
								</td>
								<td>
									 <?php echo $row['art_name'];?>
								</td>
								<td>
									 <?php echo $row['art_cat_name'];?>
								</td>
								<td>
									LKR: <?php echo $row['unit_price'];?>
								</td>
                                <td>
									<img src="<?php echo base_url();?>assets/images/design/artworks/<?php echo $row['img'];?>" alt="<?php echo $row['art_name'];?>" style=" width:50px;border: 1px solid #e9e9e9;padding: 5px 5px 5px;"/>
								</td>
																
                                <td>
                                      
									 <a href="#editModal<?php echo $row['artwork_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
                                     
									 <a href="#delteModal<?php echo $row['artwork_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
										<i class="fa fa-times"></i></a>
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                    <!-- BEGIN MODAL--
			
                    <?php if(count($admin_artworks)){
					foreach($admin_artworks-> result_array()as $row){ ?>
					<div id="viewModal<?php echo $row['artwork_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Art Work Details  ( Art Work ID - <?php echo $row['artwork_id'];?> )</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal" >
                                        <div class="form-body">
                                            
                                          <div class="form-group">
                                                
                                                <div class="col-md-12">
                                                <table width="80%" border="0" align="center" style=" padding-bottom:50px">
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Art Work Details </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td width="35%">Art Work Name</td>
                                                    <td colspan="2">: <?php echo $row['art_name'];?></td>
                                                  </tr>                                                 
                                                  
                                                  <tr>
                                                    <td>Art Work Category Name</td>
                                                    <td colspan="2">: <?php echo $row['art_cat_name'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Price</td>
                                                    <td colspan="2">: LKR : <?php echo $row['unit_price'];?></td>
                                                  </tr>                                                  
                                                   <tr>
                                                    <td width="30%" colspan="3"><h3>Art Work Image </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td valign="top">Images</td>
                                                    <td><img src="<?php echo base_url();?>assets/images/design/<?php echo $row['img'];?>" alt="<?php echo $row['art_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
                                                    <td>&nbsp;</td>
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
                           <?php }}?> <!--end view-->
                            <!--edit-->
                     <?php if(count($admin_artworks)){
					foreach($admin_artworks-> result_array()as $row){ ?>
					<div id="editModal<?php echo $row['artwork_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Art Work Details ( Art Work ID - <?php echo $row['artwork_id'];?> )</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/artworkedit/<?php echo $row['artwork_id'];?>" method="post" enctype="multipart/form-data" onsubmit="return editartwork<?php echo $row['artwork_id'];?>()" >
                                        <div class="form-body">
                                           <div class="form-group">
                                                <label class="col-md-3 control-label">Art Work Name</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Art Work Name" value="<?php echo $row['art_name'];?>" class="form-control" name="artworkname" id="artworkimgname<?php echo $row['artwork_id'];?>">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                         
                                            <label class="col-md-3 control-label">Art Work Category</label>
                                            <div class="col-md-8">							        
                                                
                                                <select class="form-control" name="type">
                                                    <?php if(count($admin_artwork_categories)){
                                                    foreach($admin_artwork_categories-> result_array()as $cate){ ?>
                                                     <option value="<?php echo $cate['artwork_category_id']; ?>" <?php if($cate['artwork_category_id']==$row['artwork_category_id']) {echo 'selected'; }?>><?php echo $cate['art_cat_name']; ?></option>
                                                    <?php }}?>
                                                  </select>
                                            </div>
                                           </div> 
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Price (LKR)</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Price" value="<?php echo $row['unit_price'];?>" class="form-control" name="price" id="artworkprice<?php echo $row['artwork_id'];?>">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Image</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <img src="<?php echo base_url();?>assets/images/design/artworks/<?php echo $row['img'];?>" alt="<?php echo $row['art_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="aimg1" id="artimg1<?php echo $row['artwork_id'];?>" style="margin-top:5px" onchange="return ValidateFileUpload1<?php echo $row['artwork_id'];?>()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning">
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in Art Work image.
                                            </div>
                                          
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                         <input type="hidden" value="<?php echo $row['artwork_id'];?>" name="productid" />
                                         <input type="hidden" value="<?php echo $row['img'];?>" name="image1" />
                                         
                                        <button class="btn yellow" type="submit" id="Edit">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                     <?php }}?>  
                     <!--end edit-->
                            
							 <?php if(count($admin_artworks)){
                            foreach($admin_artworks-> result_array()as $row){ ?>
                            <div id="delteModal<?php echo $row['artwork_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Confirm Delete</h4>
                                                </div>
                                                <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/artworkdelete/<?php echo $row['artwork_id'];?>" method="post">
                                                    
                                                <div class="modal-body">
                                                    <p>
                                                         Do you want to delete "<span style="color:#06F"><?php echo $row['art_name'];?></span>" art work ? 
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                     <input type="hidden" value="<?php echo $row['art_name'];?>" name="artworkname" />
                                                    
                                                    <button class="btn blue" type="submit">Confirm</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }}?>
                                    
                                    <div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Add New Art Work </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/artworkadd" method="post" enctype="multipart/form-data" onsubmit="return addartworkvalidation()" >
                                        <div class="form-body">
                                           <div class="form-group">
                                                <label class="col-md-3 control-label">Art Work Name</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Artwork Name" value="" class="form-control" name="artworkname" id="artworkimgname">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                         
                                            <label class="col-md-3 control-label">Art Work Category</label>
                                            <div class="col-md-8">							        
                                                
                                                <select class="form-control" name="type">
                                                    <?php if(count($admin_artwork_categories)){
                                                    foreach($admin_artwork_categories-> result_array()as $cate){ ?>
                                                     <option value="<?php echo $cate['artwork_category_id']; ?>" ><?php echo $cate['art_cat_name']; ?></option>
                                                    <?php }}?>
                                                  </select>
                                            </div>
                                           </div> 
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Price (LKR)</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Price" value="" class="form-control" name="price" id="priceart">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Image</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                   <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="aimg1" id="artimg1" style="margin-top:5px" onchange="return ValidateFileUpload1()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning">
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in Art Work image.
                                            </div>
                                          
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                       
                                        <button class="btn yellow" type="submit" id="Add">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
                    
                    
					</div>
                  
				</div>
                
                </div>
                
			<!-- END PAGE CONTENT-->
		</div>
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/tabletools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/table-advanced.js"></script> 
 
 <!--EDIT GENDER VALIDATION -->
 <?php if(count($admin_artworks)){
 foreach($admin_artworks-> result_array()as $row){ ?>
<script>
	function editartwork<?php echo $row['artwork_id'];?>(){
		
	$('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
	if($(this).val() !== "")
		   
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
	
	var errormessage="";
	
	
   //validate brand
    if($('#artworkimgname<?php echo $row['artwork_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#artworkimgname<?php echo $row['artwork_id'];?>'),'Art Work Name name must be entered');
       errormessage += 1; 
    } 	else if(!$('#artworkimgname<?php echo $row['artwork_id'];?>').val().match(/^[a-zA-Z]+$/)){
	 error_display($('#artworkimgname<?php echo $row['artwork_id'];?>'), 'Art Work Name name must be alphabet characters only');
    errormessage += 1;
	}
	//price	
	if($('#artworkprice<?php echo $row['artwork_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#artworkprice<?php echo $row['artwork_id'];?>'),'Price must be entered');
	errormessage += 1; 
	}else if(!$('#artworkprice<?php echo $row['artwork_id'];?>').val().match(/^[0-9]+$/)){
	error_display($('#artworkprice<?php echo $row['artwork_id'];?>'), ' Price must be numbers ');
	errormessage += 1;
	}
	
		
			
	if(errormessage != ''){
		return false;
	}

}
  
    
	// error
	function error_display(field,msg){
       field.css({  'border-color' :'#f00','background-image':'url(http://localhost/mtc/assets/js/images/invalid.png)','background-repeat': 'no-repeat','background-position': 'right center','margin-bottom':'2px'}).parent('div.has-error').children('span.error').html(msg);	
}
	
</script>
	<SCRIPT type="text/javascript">
    function ValidateFileUpload1<?php echo $row['artwork_id'];?>() {
		var fuData = document.getElementById('artimg1<?php echo $row['artwork_id'];?>');
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
    	document.getElementById("Edit").disabled = false; 
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
		alert("Art Work only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Edit").disabled = true; 
		}
		}
    }
    </SCRIPT> 

<?php }}?>  
 	<SCRIPT type="text/javascript">
    function ValidateFileUpload1() {
		var fuData = document.getElementById('artimg1');
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
		alert("Art work image only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Add").disabled = true; 
		}
		}
    }
    </SCRIPT>  
  
   <script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   TableAdvanced.init();
});
</script>