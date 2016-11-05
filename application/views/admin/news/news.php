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
							
							News Management
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							News Details
						</li>
						
					</ul>
					<h3 class="page-title">
					News Details <small></small><a href="#addModal" style="float:right"  data-toggle="modal" data-original-title="Add New News" data-placement="top" class="btn green tooltips" style="float:right" >Add New News</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errornews')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errornews'); ?></div>
              <?php $this->session->unset_userdata('errornews');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successnews')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successnews'); ?>
                </div>
              <?php $this->session->unset_userdata('successnews');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>News Details 
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
									 News ID
								</th>								
								
								<th class="hidden-xs">
									 News Topic
								</th>
                                <th class="hidden-xs">
									 Published Date
								</th>
                                
                                <th class="hidden-xs">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_news)){
							foreach($admin_news-> result_array()as $row){ ?>
							<tr>
                            	<td>
									 <?php echo $row['latest_news_id'];?>
								</td>
								<td>
									 <?php echo $row['news_topic'];?>
								</td>
								<td>
									<?php echo $row['publish_date'];?>
								</td>
								
                                <td>
                                      <a href="#viewModal<?php echo $row['latest_news_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
									 <a href="#editoModal<?php echo $row['latest_news_id'];?>" data-toggle="modal" data-original-title="QUICK EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>                                     
									 <a href="#delteoModal<?php echo $row['latest_news_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
									<i class="fa fa-times"></i></a>
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                     <?php if(count($admin_news)){
					foreach($admin_news-> result_array()as $row){ ?>
					<div id="viewModal<?php echo $row['latest_news_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">News Details  ( News ID - <?php echo $row['latest_news_id'];?> )</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal" >
                                        <div class="form-body">
                                            
                                          <div class="form-group">
                                                
                                                <div class="col-md-12">
                                                <table width="80%" border="0" align="center" style=" padding-bottom:50px">
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>News Details </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td width="30%"  >Published Date</td>
                                                    <td colspan="2" width="50%" >: <?php echo $row['publish_date'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="35%">News Topic</td>
                                                    <td colspan="2">: <?php echo $row['news_topic'];?></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                    <td>News Content</td>
                                                    <td colspan="2" align="justify">: <?php echo $row['news_body'];?></td>
                                                  </tr>                                                  
                                                   <tr>
                                                    <td width="30%" colspan="3"><h3>News Image</h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td valign="top">Image</td>
                                                    <td><img src="<?php echo base_url();?>assets/images/news/<?php echo $row['image'];?>" alt="<?php echo $row['news_topic'];?>" style=" width:150px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
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
                     <?php if(count($admin_news)){
					foreach($admin_news-> result_array()as $row){ ?>
					<div id="editoModal<?php echo $row['latest_news_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit News Details
                                            </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/newsEdit/<?php echo $row['latest_news_id'];?>" method="post" enctype="multipart/form-data" onsubmit="return editnewsvalidation<?php echo $row['latest_news_id'];?>()">
                                        <div class="form-body">
                                            
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                <strong style=" float:right">News ID</strong>
                                                </div>
                                                <div class="col-md-9">
                                                 <div class="has-error" >
                                                    <?php echo $row['latest_news_id'];?>
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">News Topic</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="News Topic" value="<?php echo $row['news_topic'];?>" class="form-control" name="news_topic" id="ntopic<?php echo $row['latest_news_id'];?>">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">News Content</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                  <textarea id="ncontent<?php echo $row['latest_news_id'];?>" name="content" class="form-control" placeholder="News Content"><?php echo $row['news_body'];?></textarea>  
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Image</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <img src="<?php echo base_url();?>assets/images/news/<?php echo $row['image'];?>" alt="<?php echo $row['news_topic'];?>" style=" width:150px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="" class="btn grey fileinput-button" name="nimg1" id="newsimg1<?php echo $row['latest_news_id'];?>" style="margin-top:5px" onchange="return ValidateFileUpload1<?php echo $row['latest_news_id'];?>()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning">
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in News image.
                                            </div>
                                        
                                            
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        <input type="hidden" value="<?php echo $row['image'];?>" name="image1" />
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn yellow" type="submit" id="Edit<?php echo $row['latest_news_id'];?>">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                     <?php }}?> 
                     <?php if(count($admin_news)){
					foreach($admin_news-> result_array()as $row){ ?>
					<div id="delteoModal<?php echo $row['latest_news_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/newsdelete/<?php echo $row['latest_news_id'];?>" method="post">
                                            
										<div class="modal-body">
											<p>
												 Do you want to delete "<span style="color:#06F"><?php echo $row['news_topic'];?></span>" news? 
											</p>
										</div>
										<div class="modal-footer">
											<button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                            <input type="hidden" value="<?php echo $row['news_topic'];?>" name="topic" />
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
											<h4 class="modal-title">Add New News </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/newsadd" method="post" enctype="multipart/form-data" onsubmit="return addnewsvalidation()" >
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">News Topic</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="News Topic" value="" class="form-control" name="news_topic" id="ntopic">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">News Content</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                  <textarea id="ncontent" name="content" class="form-control" placeholder="News Content"></textarea>  
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Image</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <input type="file"  placeholder="" class="btn grey fileinput-button" name="nimg1" id="newsimg1" style="margin-top:5px" onchange="return ValidateFileUpload1()" ><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning">
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in News image.
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
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
								
                    
                    
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
 <?php if(count($admin_news)){
 foreach($admin_news-> result_array()as $row){ ?>
<script>
	function editnewsvalidation<?php echo $row['latest_news_id'];?>(){
		
	$('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
	if($(this).val() !== "")
		   
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
	
	var errormessage="";
	
	
   //validate brand
    if($('#ntopic<?php echo $row['latest_news_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#ntopic<?php echo $row['latest_news_id'];?>'),'Topic must be entered');
       errormessage += 1; 
    } 	else if(!$('#ntopic<?php echo $row['latest_news_id'];?>').val().match(/^[a-zA-Z ]+$/)){
	 error_display($('#topic<?php echo $row['latest_news_id'];?>'), 'Topic must be alphabet characters only');
    errormessage += 1;
	}
	//content
	if($('#ncontent<?php echo $row['latest_news_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#ncontent<?php echo $row['latest_news_id'];?>'),'Content must be entered');
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
    function ValidateFileUpload1<?php echo $row['latest_news_id'];?>() {
		var fuData = document.getElementById('newsimg1<?php echo $row['latest_news_id'];?>');
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
    	document.getElementById("Edit<?php echo $row['latest_news_id'];?>").disabled = false; 
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
		alert("News image only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Edit<?php echo $row['latest_news_id'];?>").disabled = true; 
		}
		}
    }
    </SCRIPT> 

<?php }}?>   
 
 	<SCRIPT type="text/javascript">
    function ValidateFileUpload1() {
		var fuData = document.getElementById('newsimg1');
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
		alert("News image only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
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