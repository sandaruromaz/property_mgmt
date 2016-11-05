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
							
							eCommerce 
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="<?php echo base_url(); ?>index.php/admin/products">							
							Products </a>
                            <i class="fa fa-angle-right"></i>
						</li>
                        <li>							
							New Product Add 
						</li>
						
					</ul>
					<h3 class="page-title">
					New Product Add <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorproductadd')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorproductadd'); ?></div>
              <?php $this->session->unset_userdata('errorproductadd');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successproductadd')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successproductadd'); ?>
                </div>
              <?php $this->session->unset_userdata('successproductadd');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 " style="margin-top:25px">
            
                            
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/productadd" method="post" enctype="multipart/form-data" onsubmit="return addproductvalidation()"  >
                                        <div class="form-body">
                                           <div class="form-group">
                                                <label class="col-md-3 control-label">Product Name<font class="required">* </font></label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Product Name" value="" class="form-control" name="productname" id="productname">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                         
                                            <label class="col-md-3 control-label">Product Category<font class="required">* </font></label>
                                            <div class="col-md-8">							        
                                                <div class="has-error" >
                                                <select class="form-control" name="type" id="type">
                                                <option value="">Select</option>
                                                    <?php if(count($admin_product_categories)){
                                                    foreach($admin_product_categories-> result_array()as $cate){ ?>
                                                     <option value="<?php echo $cate['product_type_id']; ?>"><?php echo $cate['type_name']; ?></option>
                                                    <?php }}?>
                                                  </select>
                                                  <span class='error'></span> </div>
                                            </div>
                                           </div> 
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Price (LKR)<font class="required">* </font></label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Price" value="" class="form-control" name="price" id="price">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Description<font class="required">* </font></label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <textarea placeholder="Description"  class="form-control" name="description" id="description"></textarea>
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Quantity<font class="required">* </font></label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="number" placeholder="Quantity" min="1" value="" class="form-control" name="quantity" id="quantity">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">No of Items<font class="required">* </font></label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="No of Items" min="1" value="" class="form-control" name="no_bits" id="no_bits">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Reorder Level<font class="required">* </font></label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="number" placeholder="Reorder Level" min="1" value="" class="form-control" name="re" id="re">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Images<font class="required">* </font></label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="file"   class="btn grey fileinput-button" name="pimg1" id="pimg1" style="margin-top:5px" onchange="return ValidateFileUpload1()"><br />
                                                 <span class='error'></span> </div> 
                                                 <div class="has-error" >  
                                                    <input type="file"   class="btn grey fileinput-button" name="pimg2" id="pimg2" style="margin-top:5px" onchange="return ValidateFileUpload2()"><br />
                                                  <span class='error'></span> </div>  
                                                  <div class="has-error" >  
                                                    <input type="file"   class="btn grey fileinput-button" name="pimg3" id="pimg3" style="margin-top:5px" onchange="return ValidateFileUpload3()"><br />
                                                  <span class='error'></span> </div>
                                                  <div class="has-error" >  
                                                    <input type="file"   class="btn grey fileinput-button" name="pimg4" id="pimg4" style="margin-top:5px" onchange="return ValidateFileUpload4()"><br />
                                                  <span class='error'></span> </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="alert alert-warning" style="width:80%; margin-left:110px">
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in Produc image.
                                            </div>
                                          </div>
                                          </div>
                                          <h3>&nbsp;</h3>
                                              <table width="80%" border="0" align="center">
                                              <tr>
                                              <td>
                                              <button class="btn yellow" type="submit"  style="float:right" id="Add">Save</button></td>
                                              </tr>
                                              </table>
                                          </div>
                                          </form>
                    <!-- END EXAMPLE TABLE PORTLET-->
					
                    
                    
					</div>
                  
				</div>
                
             </div>
                
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
    function ValidateFileUpload3() {
    var fuData = document.getElementById('pimg3');
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
    function ValidateFileUpload4() {
    var fuData = document.getElementById('pimg4');
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
           // initiate layout and plugins
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
           ComponentsDropdowns.init();
        });
		
		
		
//add drop down menu\
		$('#addnew').click(function(){ 
			
				$(".colorsize").append("<table width='80%' class='items' border='0' align='center'  style='padding: 10px 10px 10px;margin-left:130px'><tr><td width='165px' style='padding: 10px 10px 10px;'>Color</td><td width='165px' style='padding: 10px 10px 10px;'>Size</td><td width='70px' style='padding: 10px 10px 10px;'>Quantity</td><td width='70px' style='padding: 10px 10px 10px;'>Reorder Level</td><td width='71px'>&nbsp;</td></tr><tr><td style='padding: 10px 10px 10px;'><select class='form-control' name='color[]' id='colorname' required='required'><option value=''>Select</option><?php if(count($admin_color_categories)){foreach($admin_color_categories-> result_array()as $row){ ?><option value='<?php echo $row['color_id'];?>'><?php echo $row['color_name'];?></option><?php }}?></select></td><td style='padding: 10px 10px 10px;'><select class='form-control' name='size[]' id='sizername' ><option value=''>Select</option><?php if(count($admin_size_categories)){foreach($admin_size_categories-> result_array()as $size){ ?><option value='<?php echo $size['size_id']; ?>'><?php echo $size['type']; ?></option><?php }}?></select></td><td style='padding: 10px 10px 10px;'><input  type='number' min='1' placeholder='Qty' value='' class='form-control' name='qty[]' id='qty' maxlength='2' required='required'></td><td style='padding: 10px 10px 10px;'><input type='number' min='1' placeholder='R. Level' value='' class='form-control' name='relevel[]' id='relevel' maxlength='2' required='required'></td><td style='padding: 10px 10px 10px;' width='63px'>&nbsp;</td></tr></table>");
			
		  });		
		
		 $('#deletenew').click(function(){  
		 $(".items:last").remove();
		 });
</script> 