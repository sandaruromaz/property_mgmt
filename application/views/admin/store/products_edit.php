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
						<li><a href="<?php echo base_url(); ?>index.php/admin/products">							
							Products </a>
                            <i class="fa fa-angle-right"></i>
						</li>
                        <li>							
							Advanced Product Edit 
						</li>
						
					</ul>
					<h3 class="page-title">
					Advanced Product Edit<small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorproductedit')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorproductedit'); ?></div>
              <?php $this->session->unset_userdata('errorproductedit');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successproductedit')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successproductedit'); ?>
                </div>
              <?php $this->session->unset_userdata('successproductedit');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 " style="margin-top:25px">
            
                            <?php if(count($admin_one_products)){
							foreach($admin_one_products-> result_array()as $row){ ?>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/productedit/<?php echo $row['product_id'];?>" method="post" enctype="multipart/form-data" onsubmit="return editproductvalidation ()" >
                                        <div class="form-body">
                                           <div class="form-group">
                                                <label class="col-md-3 control-label">Product Name</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Product Name" value="<?php echo $row['product_name'];?>" class="form-control" name="productname" id="productname">
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
                                                    <input type="text" placeholder="Price" value="<?php echo $row['price'];?>" class="form-control" name="price" id="price">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Description</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <textarea placeholder="Description"  class="form-control" name="description" id="description"><?php echo $row['description'];?></textarea>
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Images</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <img src="<?php echo base_url();?>assets/images/products/<?php echo $row['img1'];?>" alt="<?php echo $row['product_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="pimg1" id="pimg1" style="margin-top:5px" onchange="return ValidateFileUpload1()"><br />
                                                     <img src="<?php echo base_url();?>assets/images/products/<?php echo $row['img2'];?>" alt="<?php echo $row['product_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="pimg2" id="pimg2" style="margin-top:5px" onchange="return ValidateFileUpload2()"><br />
                                                     
                                                     <img src="<?php echo base_url();?>assets/images/products/<?php echo $row['img3'];?>" alt="<?php echo $row['product_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="pimg3" id="pimg3" style="margin-top:5px" ><br />
                                                     
                                                     <img src="<?php echo base_url();?>assets/images/products/<?php echo $row['img4'];?>" alt="<?php echo $row['product_name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="pimg4" id="pimg4" style="margin-top:5px" ><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning" style="width:80%; margin-left:110px">
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in Produc image.
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Quantity<font class="required">* </font></label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="number" placeholder="Quantity" min="1" value="<?php echo $row['quantity']?>" class="form-control" name="quantity" id="quantity">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Reorder Level<font class="required">* </font></label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="number" placeholder="Reorder Level" min="1" value="<?php echo $row['reorder_level'] ?>" class="form-control" name="re" id="re">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>                                 
                                           
                                        </div>
                                        <h3>&nbsp;</h3>
                                        <table width="80%" border="0" align="center">
                                          <tr>
                                            <td><input type="hidden" value="<?php echo $row['product_id'];?>" name="productid" />
                                         <input type="hidden" value="<?php echo $row['img1'];?>" name="image1" />
                                         <input type="hidden" value="<?php echo $row['img2'];?>" name="image2" />
                                           <input type="hidden" value="<?php echo $row['img3'];?>" name="image3" />
                                         <input type="hidden" value="<?php echo $row['img4'];?>" name="image4" />
                                        <button class="btn yellow" type="submit"  style="float:right" id="Edit">Save</button></td>
                                          </tr>
                                        </table>
                                        </div>
                                        </form>
                                        <?php }}?>                                       
                    
					
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
<!--validate-->

	<SCRIPT type="text/javascript">
    function ValidateFileUpload1() {
		var fuData = document.getElementById('pimg1');
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
		alert("Product image only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Edit").disabled = true; 
		}
		}
    }
    </SCRIPT> 
	<SCRIPT type="text/javascript">
    function ValidateFileUpload2() {
		var fuData = document.getElementById('pimg2');
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
		alert("Product image only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Edit").disabled = true; 
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