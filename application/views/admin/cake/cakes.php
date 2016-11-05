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
							
							Customize cakes
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Cakes  
						</li>
						
					</ul>
					<h3 class="page-title">
					Cakes  <small></small><a href="#addModal" style="float:right"  data-toggle="modal" data-original-title="Add New Cake" data-placement="top" class="btn green tooltips" style="float:right" >Add New Cake</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorapparel')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorapparel'); ?></div>
              <?php $this->session->unset_userdata('errorapparel');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successapparel')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successapparel'); ?>
                </div>
              <?php $this->session->unset_userdata('successapparel');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>Cakes
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
									 Cake ID
								</th>
								<th>
									 Cake Name
								</th>								
								<th>
									Cake Category Name
								</th>
								<th class="hidden-xs">
									 Price
								</th>								
                                
                                <th class="hidden-xs">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_apparels)){
							foreach($admin_apparels-> result_array()as $row){ ?>
							<tr>
                            	<td>
									 <?php echo $row['apparel_product_id'];?>
								</td>
								<td>
									 <?php echo $row['apparel_name'];?>
								</td>
								<td>
									 <?php echo $row['name'];?>
								</td>
								<td>
									LKR: <?php echo $row['price'];?>
								</td>
																
                                <td>
                                      <a href="#viewModal<?php echo $row['apparel_product_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
									 <a href="#editModal<?php echo $row['apparel_product_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
                                     
									 <a href="#delteModal<?php echo $row['apparel_product_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
										<i class="fa fa-times"></i></a>
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                    <!-- BEGIN MODAL-->
			
                    <?php if(count($admin_apparels)){
					foreach($admin_apparels-> result_array()as $row){ ?>
					<div id="viewModal<?php echo $row['apparel_product_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Cakes Details  ( Cake ID - <?php echo $row['apparel_product_id'];?> )</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal" >
                                        <div class="form-body">
                                            
                                          <div class="form-group">
                                                
                                                <div class="col-md-12">
                                                <table width="80%" border="0" align="center" style=" padding-bottom:50px">
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Cake Details </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td width="35%">Cake Name</td>
                                                    <td colspan="2">: <?php echo $row['apparel_name'];?></td>
                                                  </tr>                                                 
                                                  
                                                  <tr>
                                                    <td>Cake Category Name</td>
                                                    <td colspan="2">: <?php echo $row['name'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Price</td>
                                                    <td colspan="2">: LKR : <?php echo $row['price'];?></td>
                                                  </tr>                                                  
                                                   <tr>
                                                    <td width="30%" colspan="3"><h3>Apparel Images </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td valign="top">Images</td>
                                                    <td><img src="<?php echo base_url();?>assets/images/design/<?php echo $row['front_img'];?>" alt="<?php echo $row['apparel_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
                                                    <td><img src="<?php echo base_url();?>assets/images/design/<?php echo $row['back_img'];?>" alt="<?php echo $row['apparel_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
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
                             <?php if(count($admin_apparels)){
					foreach($admin_apparels-> result_array()as $row){ ?>
					<div id="editModal<?php echo $row['apparel_product_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Cake Details ( Cake ID - <?php echo $row['apparel_product_id'];?> )</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/appareledit/<?php echo $row['apparel_product_id'];?>" method="post" enctype="multipart/form-data"  onsubmit="return editapparel<?php echo $row['apparel_product_id'];?>()" >
                                        <div class="form-body">
                                           <div class="form-group">
                                                <label class="col-md-3 control-label">Cake Name</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Apparel Name" value="<?php echo $row['apparel_name'];?>" class="form-control" name="productname" id="apparelname<?php echo $row['apparel_product_id'];?>">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                         
                                            <label class="col-md-3 control-label">Cake Category</label>
                                            <div class="col-md-8">							        
                                                
                                                <select class="form-control" name="type" id="apptype<?php echo $row['apparel_product_id'];?>">
                                                    <?php if(count($admin_apparel_categories)){
                                                    foreach($admin_apparel_categories-> result_array()as $cate){ ?>
                                                     <option value="<?php echo $cate['apparel_category_id']; ?>" <?php if($cate['apparel_category_id']==$row['customize_apparel_category_id']) {echo 'selected'; }?>><?php echo $cate['name']; ?></option>
                                                    <?php }}?>
                                                  </select>
                                            </div>
                                           </div> 
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Price (LKR)</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Price" value="<?php echo $row['price'];?>" class="form-control" name="price" id="appprice<?php echo $row['apparel_product_id'];?>">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Images</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <img src="<?php echo base_url();?>assets/images/design/<?php echo $row['front_img'];?>" alt="<?php echo $row['apparel_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="aimg1" id="appaimg1<?php echo $row['apparel_product_id'];?>" style="margin-top:5px" onchange="return ValidateFileUpload1<?php echo $row['apparel_product_id'];?>()" ><br />
                                                     <img src="<?php echo base_url();?>assets/images/design/<?php echo $row['back_img'];?>" alt="<?php echo $row['apparel_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="aimg2" id="appaimg2<?php echo $row['apparel_product_id'];?>" style="margin-top:5px" onchange="return ValidateFileUpload2<?php echo $row['apparel_product_id'];?>()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning">
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in cake image.
                                            </div>
                                          
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                         <input type="hidden" value="<?php echo $row['apparel_product_id'];?>" name="productid" />
                                         <input type="hidden" value="<?php echo $row['front_img'];?>" name="image1" />
                                         <input type="hidden" value="<?php echo $row['back_img'];?>" name="image2" />
                                        <button class="btn yellow" type="submit" id="Edit">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                     <?php }}?>  
                     <!--end edit-->
                            
							 <?php if(count($admin_apparels)){
                            foreach($admin_apparels-> result_array()as $row){ ?>
                            <div id="delteModal<?php echo $row['apparel_product_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Confirm Delete</h4>
                                                </div>
                                                <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/appareldelete/<?php echo $row['apparel_product_id'];?>" method="post">
                                                    
                                                <div class="modal-body">
                                                    <p>
                                                         Do you want to delete "<span style="color:#06F"><?php echo $row['apparel_name'];?></span>" Cakes ? 
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                     <input type="hidden" value="<?php echo $row['apparel_name'];?>" name="product_name" />
                                                    
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
											<h4 class="modal-title">Add New Cake </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/appareladd" method="post" enctype="multipart/form-data"  onsubmit="return addapparel()">
                                        <div class="form-body">
                                           <div class="form-group">
                                                <label class="col-md-3 control-label">Cake Name</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Cake Name" value="" class="form-control" name="productname" id="apparelname">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                         
                                            <label class="col-md-3 control-label">Cake Category</label>
                                            <div class="col-md-8">							        
                                                
                                                <select class="form-control" name="type" id="apptype">
                                                    <?php if(count($admin_apparel_categories)){
                                                    foreach($admin_apparel_categories-> result_array()as $cate){ ?>
                                                     <option value="<?php echo $cate['apparel_category_id']; ?>" ><?php echo $cate['name']; ?></option>
                                                    <?php }}?>
                                                  </select>
                                            </div>
                                           </div> 
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Price (LKR)</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Price" value="" class="form-control" name="price" id="appprice">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Images</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                   <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="aimg1" id="appimg1" style="margin-top:5px" onchange="return ValidateFileUpload1()"><br />
                                                <span class='error'></span> </div>
                                                 <div class="has-error" >  
                                                   <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="aimg2" id="appimg2" style="margin-top:5px" onchange="return ValidateFileUpload2()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning">
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in Cakes image.
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
 <?php if(count($admin_apparels)){
 foreach($admin_apparels-> result_array()as $row){ ?>
<script>
	function editapparel<?php echo $row['apparel_product_id'];?>(){
		
	$('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
	if($(this).val() !== "")
		   
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
	
	var errormessage="";
	
    //name
	if($('#apparelname<?php echo $row['apparel_product_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#apparelname<?php echo $row['apparel_product_id'];?>'),'Apparel Name must be entered');
	errormessage += 1; 
	} 	else if(!$('#apparelname<?php echo $row['apparel_product_id'];?>').val().match(/^[a-zA-Z-& ]+$/)){
	error_display($('#apparelname<?php echo $row['apparel_product_id'];?>'), 'Apparel Name must be alphabet characters only');
	errormessage += 1;
	}

	//price	
	if($('#appprice<?php echo $row['apparel_product_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#appprice<?php echo $row['apparel_product_id'];?>'),'Price must be entered');
	errormessage += 1; 
	}else if(!$('#appprice<?php echo $row['apparel_product_id'];?>').val().match(/^[0-9]+$/)){
	error_display($('#appprice<?php echo $row['apparel_product_id'];?>'), ' Price must be numbers ');
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
    function ValidateFileUpload1<?php echo $row['apparel_product_id'];?>() {
		var fuData = document.getElementById('appaimg1<?php echo $row['apparel_product_id'];?>');
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
		alert("Apparel image only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Edit").disabled = true; 
		}
		}
    }
    </SCRIPT> 
	<SCRIPT type="text/javascript">
    function ValidateFileUpload2<?php echo $row['apparel_product_id'];?>() {
		var fuData = document.getElementById('appaimg2<?php echo $row['apparel_product_id'];?>');
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
		alert("Apparel image only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Edit").disabled = true; 
		}
		}
    }
    </SCRIPT>
 
<?php }}?> 
<!--END-->

	<SCRIPT type="text/javascript">
    function ValidateFileUpload1() {
		var fuData = document.getElementById('appimg1');
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
		alert("Product image only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Add").disabled = true; 
		}
		}
    }
    </SCRIPT> 
	<SCRIPT type="text/javascript">
    function ValidateFileUpload2() {
		var fuData = document.getElementById('appimg2');
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
		alert("Product image only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
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