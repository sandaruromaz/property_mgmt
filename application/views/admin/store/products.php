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
							
							eCommerce 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Products 
						</li>
						
					</ul>
					<h3 class="page-title">
					Products <small></small><a href="<?php echo base_url(); ?>index.php/admin/products_add" class="btn green tooltip-button" style="float:right" >Add New Product</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorproduct')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorproduct'); ?></div>
              <?php $this->session->unset_userdata('errorproduct');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successproduct')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successproduct'); ?>
                </div>
              <?php $this->session->unset_userdata('successproduct');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>Products 
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
									 Product ID
								</th>
								<th>
									 Product Name
								</th>								
								<th>
									 Category Name
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
                            <?php if(count($admin_products)){
							foreach($admin_products-> result_array()as $row){ ?>
							<tr>
                            	<td>
									 <?php echo $row['product_id'];?>
								</td>
								<td>
									 <?php echo $row['product_name'];?>
								</td>
								<td>
									 <?php echo $row['type_name'];?>
								</td>
								<td>
									LKR: <?php echo $row['price'];?>
								</td>
								
                                <td>
                                      <a href="#viewModal<?php echo $row['product_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
									 <!--<a href="#editModal<?php echo $row['product_id'];?>" data-toggle="modal" data-original-title="QUICK EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>-->
                                     <a href="<?php echo base_url(); ?>index.php/admin/products_advance_edit/<?php echo $row['product_id'];?>" data-toggle="modal" data-original-title="ADVANCE EDIT" data-placement="top" class="btn default btn-xs purple tooltips" >
										<i class="fa fa-edit"></i></a>
									 <a href="#delteModal<?php echo $row['product_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
										<i class="fa fa-times"></i></a>
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="row">
            
			<div class="col-md-12">
            <h3 class="page-title">
					Products Quantity & Reorder Level <small></small>
			</h3>	
                    <div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Products Quantity & Reorder Level
							</div>
							<div class="tools">
								
                                <a href="javascript:;" class="collapse">
								</a>
								
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_4">
							<thead>
							<tr>
                                 <th>
									 Product ID
								</th>
                                <th>
									 Product Name
								</th>							
								<th>
									 Quantity
								</th>
								<th>
									 Reorder Level
								</th>
                                <th>
									 Availabilty
								</th>
                                
								
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_products)){
							foreach($admin_products-> result_array()as $row){ ?>
							<tr>
								<td>
									 <?php echo $row['product_id'];?>
								</td>
                                <td>
									 <?php echo $row['product_name'];?>
								</td>
							
								<td>
									 <?php echo $row['quantity'];?>
								</td>
								<td>
									 <?php echo $row['reorder_level'];?>
								</td>
                                <td>
									 <?php if($row['quantity'] > $row['reorder_level']){echo'<span class="label label-primary">
									Available </span>'; }else{echo'<span class="label label-danger">
									Out Of stock</span>';}?>
								</td>
                                
							</tr>
							<?php }}?>
                            
							
							</tbody>
							</table>
						</div>
					</div>
             </div>
             </div>
					<!-- END EXAMPLE TABLE PORTLET-->
                    <?php if(count($admin_products)){
					foreach($admin_products-> result_array()as $row){ ?>
					<div id="viewModal<?php echo $row['product_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Product Details ( Product ID - <?php echo $row['product_id'];?> )</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal" >
                                        <div class="form-body">
                                            
                                          <div class="form-group">
                                                
                                                <div class="col-md-12">
                                              
                                                <table width="80%" border="0" align="center" style=" padding-bottom:50px">
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Product Details </h3><hr /></td>                                                    
                                                  </tr>
                                                   <tr>
                                                    <td>Availability</td>
                                                    <td colspan="2">: 
                                                    <?php if($row['quantity'] > $row['reorder_level']){echo'<span class="label label-primary">
													Available </span>'; }else{echo'<span class="label label-danger">
													Out Of stock</span>';}?>
													</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Product Name</td>
                                                    <td colspan="2">: <?php echo $row['product_name'];?></td>
                                                  </tr>                                                 
                                                  
                                                  <tr>
                                                    <td>Category Name</td>
                                                    <td colspan="2">: <?php echo $row['type_name'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Price</td>
                                                    <td colspan="2">: LKR : <?php echo $row['price'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td valign="top">Description</td>
                                                    <td colspan="2">: <?php echo $row['description'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td valign="top">No of Products</td>
                                                    <td colspan="2">: <?php echo $row['no_bits'];?></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                    <td>Last Updated Date</td>
                                                    <td colspan="2">: <?php echo $row['last_updated_date'];?></td>
                                                  </tr>
                                                   <tr>
                                                    <td width="30%" colspan="3"><h3>Product Images </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td valign="top">Images</td>
                                                    <td><img src="<?php echo base_url();?>assets/images/products/<?php echo $row['img1'];?>" alt="<?php echo $row['product_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
                                                    <td><img src="<?php echo base_url();?>assets/images/products/<?php echo $row['img2'];?>" alt="<?php echo $row['product_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Other Information </h3><hr /></td>                                                    
                                                  </tr>
                                                </table>

                                                <table width="80%" border="0" align="center" style=" padding-bottom:50px">
                                                 
                                                   <tr>
                                                    <td width="30%">Quantity</td>
                                                    <td>: <?php echo $row['quantity'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%">Reorder Level</td>
                                                    <td>: <?php echo $row['reorder_level'];?></td>
                                                  </tr>
                                                 </table>
                                                <h3>&nbsp;</h3>
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
                            <!--end view-->
                            <!--edit-->
                             <?php if(count($admin_products)){
					foreach($admin_products-> result_array()as $row){ ?>
					<div id="editModal<?php echo $row['product_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Product Details ( Product ID - <?php echo $row['product_id'];?> )</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/productedit/<?php echo $row['product_id'];?>" method="post" enctype="multipart/form-data"  onsubmit="return editproductvalidation<?php echo $row['product_id'];?> ()" >
                                        <div class="form-body">
                                           <div class="form-group">
                                                <label class="col-md-3 control-label">Product Name</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Product Name" value="<?php echo $row['product_name'];?>" class="form-control" name="productname" id="productname<?php echo $row['product_id'];?>">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                         
                                            <label class="col-md-3 control-label">Product Category</label>
                                            <div class="col-md-8">							        
                                                
                                                <select class="form-control" name="type">
                                                    <?php if(count($admin_product_categories)){
                                                    foreach($admin_product_categories-> result_array()as $cate){ ?>
                                                     <option value="<?php echo $cate['product_type_id']; ?>" <?php if($cate['product_type_id']==$row['product_type_id']) {echo 'selected'; }?>><?php echo $cate['type_name']; ?></option>
                                                    <?php }}?>
                                                  </select>
                                            </div>
                                           </div> 
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Price (LKR)</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Price" value="<?php echo $row['price'];?>" class="form-control" name="price" id="price<?php echo $row['product_id'];?>">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Description</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <textarea placeholder="Description"  class="form-control" name="description" id="description<?php echo $row['product_id'];?>"><?php echo $row['description'];?></textarea>
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>       
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Images</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <img src="<?php echo base_url();?>assets/images/products/<?php echo $row['img1'];?>" alt="<?php echo $row['product_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="pimg1" id="pimg1<?php echo $row['product_id'];?>" style="margin-top:5px" onchange="return ValidateFileUpload<?php echo $row['product_id'];?>()"><br />
                                                     <img src="<?php echo base_url();?>assets/images/products/<?php echo $row['img2'];?>" alt="<?php echo $row['product_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="pimg2" id="pimg2<?php echo $row['product_id'];?>" style="margin-top:5px" onchange="return ValidateFileUpload2<?php echo $row['product_id'];?>()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning">
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in Produc image.
                                            </div>
                                          
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                         <input type="hidden" value="<?php echo $row['product_id'];?>" name="productid" />
                                         <input type="hidden" value="<?php echo $row['img1'];?>" name="image1" />
                                         <input type="hidden" value="<?php echo $row['img2'];?>" name="image2" />
                                        <button class="btn yellow" type="submit" id="Edit<?php echo $row['product_id'];?>">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                     <?php }}?>  
                     <!--end edit-->
                            <?php }}?>
							 <?php if(count($admin_products)){
                            foreach($admin_products-> result_array()as $row){ ?>
                            <div id="delteModal<?php echo $row['product_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Confirm Delete</h4>
                                                </div>
                                                <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/productdelete/<?php echo $row['product_id'];?>" method="post">
                                                    
                                                <div class="modal-body">
                                                    <p>
                                                         Do you want to delete "<span style="color:#06F"><?php echo $row['product_name'];?></span>" product ? 
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                     <input type="hidden" value="<?php echo $row['product_name'];?>" name="product_name" />
                                                    
                                                    <button class="btn blue" type="submit">Confirm</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }}?>
					<!-- END EXAMPLE TABLE PORTLET-->
					
                    
                    
					</div>
                  
				</div>
                
                </div>
                
			<!-- END PAGE CONTENT-->
		</div>
 <!-- BEGIN PAGE LEVEL PLUGINS -->
  <?php if(count($admin_products)){
 foreach($admin_products-> result_array()as $row){ ?>
<script>
	function editproductvalidation<?php echo $row['product_id'];?>(){
		
	$('input[type=text],input[type=number], input[type=file], select,textarea').each(function() {
	if($(this).val() !== "")
		   
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
	
	var errormessage="";
	 //validate brand name
    //name
	if($('#productname<?php echo $row['product_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#productname<?php echo $row['product_id'];?>'),'Product Name must be entered');
	errormessage += 1; 
	} 	else if(!$('#productname<?php echo $row['product_id'];?>').val().match(/^[a-zA-Z-& ]+$/)){
	error_display($('#productname<?php echo $row['product_id'];?>'), 'Product Name must be alphabet characters only');
	errormessage += 1;
	}
	//price	
	if($('#price<?php echo $row['product_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#price<?php echo $row['product_id'];?>'),'Price must be entered');
	errormessage += 1; 
	}else if(!$('#price<?php echo $row['product_id'];?>').val().match(/^[0-9]+$/)){
	error_display($('#price<?php echo $row['product_id'];?>'), ' Price must be numbers ');
	errormessage += 1;
	}	
	
	//description
	if($('#description<?php echo $row['product_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#description<?php echo $row['product_id'];?>'),'Description must be entered');
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
    function ValidateFileUpload<?php echo $row['product_id'];?>() {
		var fuData = document.getElementById('pimg1<?php echo $row['product_id'];?>');
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
    	document.getElementById("Edit<?php echo $row['product_id'];?>").disabled = false; 
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
		document.getElementById("Edit<?php echo $row['product_id'];?>").disabled = true; 
		}
		}
    }
    </SCRIPT> 
    	<SCRIPT type="text/javascript">
    function ValidateFileUpload2<?php echo $row['product_id'];?>() {
		var fuData = document.getElementById('pimg2<?php echo $row['product_id'];?>');
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
    	document.getElementById("Edit<?php echo $row['product_id'];?>").disabled = false; 
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
		document.getElementById("Edit<?php echo $row['product_id'];?>").disabled = true; 
		}
		}
    }
    </SCRIPT>  
<?php }}?> 
 
 
 
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/tabletools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/table-advanced.js"></script> 
   <script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   TableAdvanced.init();
});
</script>