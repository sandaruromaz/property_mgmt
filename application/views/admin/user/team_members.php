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
							
							User Management 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Team Members
						</li>
						
					</ul>
					<h3 class="page-title">
					Team Members<small></small> <a href="#addnewModal" data-toggle="modal" class="btn green" style="float:right" >Add New System User </a>
					<div id="addnewModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title"><b>Add Team Member</b> </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/addTeamMember" method="post" onsubmit="return addnewuservalidation()">
                                        <div class="form-body">
										<div class="form-group">
										<label class="col-md-4 control-label">Title<font class="required">* </font></label>
										<div class="col-md-6">
                                        <div class="has-error" >
											<select class="form-control" name="title"  id="title" >
                                                <option value="" selected="selected"> Select </option>                                                
                                                <option value="Mr"> Mr</option>
                                                <option value="Mrs"> Mrs </option>
                                                <option value="Miss"> Miss </option>
                                              </select>
                                              <span class='error' style=" font-size:14px"></span> </div>
										</div>
										</div>
										
										<div class="form-group">
                                                <label class="col-md-4 control-label">Employee ID<font class="required">* </font></label>
                                                <div class="col-md-6">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Employee ID" value="" class="form-control" name="emp_id" id="emp_id">
                                                <span class='error' style=" font-size:14px"></span> </div>
                                                </div>
                                         </div>
    
                                          
                                       <div class="form-group">
                                                <label class="col-md-4 control-label">First Name<font class="required">* </font></label>
                                                <div class="col-md-6">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Enter first name" value="" class="form-control" name="fname" id="fname">
                                                <span class='error' style=" font-size:14px"></span> </div>
                                                </div>
                                         </div>
                                         <div class="form-group">
                                                <label class="col-md-4 control-label">Last Name<font class="required">* </font></label>
                                                <div class="col-md-6">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Enter last name" value="" class="form-control" name="lname" id="lname">
                                                <span class='error' style=" font-size:14px"></span> </div>
                                                </div>
                                         </div> 
										 
										 
										                               
                                       <div class="form-group">
                                                <label class="col-md-4 control-label">Designation<font class="required">* </font></label>
                                                <div class="col-md-6">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Designation" value="" class="form-control" name="designation" id="designation">
                                                <span class='error' style=" font-size:14px"></span> </div>
                                                </div>
                                         </div> 
										 
										 
                                         <div class="form-group">
                                                <label class="col-md-4 control-label">FB link<font class="required">* </font></label>
                                                <div class="col-md-6">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Enter address line 1" value="" class="form-control" name="fb_link" id="fb_link">
                                                <span class='error' style=" font-size:14px"></span> </div>
                                                </div>
                                         </div>
                                         <div class="form-group">
                                                <label class="col-md-4 control-label">Description</label>
                                                <div class="col-md-6">
                                                 <div class="has-error" >
                                                    <textarea placeholder="Enter address line 2" value="" class="form-control" name="description" id="description"> </textarea>
                                                <span class='error' style=" font-size:14px"></span> </div>
                                                </div>
                                         </div> 
										 
										<div class="form-group">
                                                <label class="col-md-3 control-label">Profile Image</label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    
                                                     <input type="file"  placeholder=" Name" class="btn green fileinput-button" name="pro_image" id="pro_image" style="margin-top:5px" onchange="return ValidateFileUpload()">
                                                    <span class='error'></span> </div>
                                                </div>
                                        </div>
									                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn blue" type="submit">Add Team Member</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                    </h3>
                     
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('erroruserdetails')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('erroruserdetails'); ?></div>
              <?php $this->session->unset_userdata('erroruserdetails');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successuserdetails')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successuserdetails'); ?>
                </div>
              <?php $this->session->unset_userdata('successuserdetails');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								All Details of Team Members
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover dataTable" id="sample_1">
								<thead>
								<tr>
									<th>
										Employee ID
									</th>
									<th >
										Name
									</th>
									<th >
										Designation
									</th>
                                    <th >
										Profile Picture
									</th>
                                    <th>
									      Action
									</th>
								</tr>
								</thead>
								<tbody>
                                <?php if(count($team_members)){
								foreach($team_members-> result_array()as $row){ ?>
								<tr>
									<td class="highlight">
									<?php echo $row['emp_id'];?>
									</td>
									<td class="hidden-xs">
									<?php echo $row['title'];?>. <?php echo $row['first_name'];?>  <?php echo $row['last_name'];?> 
									</td>
									<td class="hidden-xs">
									<?php echo $row['designation'];?>
									</td>
                                    <td class="hidden-xs"> 
									<img src="<?php echo base_url();?>assets/images/team_members/<?php echo $row['profile_image'];?>" alt="<?php echo $row['profile_image'];?>" style=" width:75px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>						
									</td>	 
                                     
									<td>
                                        <a href="#viewModal<?php echo $row['id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
										<a href="#catModal<?php echo $row['id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
										<a href="#delteModal<?php echo $row['id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
										<i class="fa fa-times"></i></a>
									</td>
								</tr>
                                <?php }} ?>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
                   
                    
                     <?php if(count($admin_users)){
					foreach($admin_users-> result_array()as $row){ ?>
					<div id="viewModal<?php echo $row['user_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">System User Information</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal" >
                                        <div class="form-body">
                                            
                                            <div class="form-group">
                                                
                                                <div class="col-md-12">
                                                <table width="60%" border="0" align="center" style=" padding-bottom:50px">
                                                  <tr>
                                                    <td width="30%">&nbsp;</td>
                                                    <td width="50%">&nbsp;</td>
                                                  </tr>
                                                  <tr>
                                                  <tr>
                                                    <td width="30%" colspan="2"><h3>User Role Information </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td>User Role Name</td>
                                                    <td><span class="badge badge-primary badge-roundless">
                                                    <?php echo $row['user_role_name'];?></span></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%" colspan="2"><hr /><h3>User Activation </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td>Status</td>
                                                    <td> <?php if ($row['status'] == "active"){?>
                                                    <span class="badge badge-info badge-roundless">
                                                    <?php } else{?> <span class="badge badge-default  badge-roundless"> <?php } ?>
                                                    <?php echo $row['status'];?></span></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%" colspan="2"><hr /><h3>User Information </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td>User ID</td>
                                                    <td><?php echo $row['user_id'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Name</td>
                                                    <td><?php echo $row['title'];?>.  <?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Email</td>
                                                    <td><?php echo $row['email'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Address</td>
                                                    <td><?php echo $row['address'];?>,  <?php echo $row['address1'];?>, <?php echo $row['city'];?>.</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Contact No</td>
                                                    <td><?php echo $row['contact_no'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>User Added Date</td>
                                                    <td><?php echo $row['add_date'];?></td>
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
                      <?php if(count($admin_users)){
					foreach($admin_users-> result_array()as $row){ ?>
					<div id="catModal<?php echo $row['user_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit User Activation
</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/userstatusedit/<?php echo $row['user_id'];?>" method="post" >
                                        <div class="form-body">
                                            <div class="form-group">
                                         
										<label class="col-md-4 control-label">User Role Name</label>
										<div class="col-md-6">
								        
                                            
                                            <select class="form-control" name="userrole">
                      	<?php if(count($admin_userrole)){
						foreach($admin_userrole-> result_array()as $role){ ?>
                         <option value="<?php echo $role['user_role_id']; ?>" <?php if($role['user_role_id']==$row['user_role_id']) {echo 'selected'; }?>><?php echo $role['user_role_name']; ?></option>
                    <?php }}?>
                                              </select>
										</div>
									   </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Status</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" name="status">
                                                      <?php $opt=array('active','inactive'); ?>
        
														<?php foreach($opt as $val){?>
                                                        <?php if ($row['status']==$val) {?>
                                                        <option value="<?php echo $val; ?>" selected="selected"><?php echo $val; ?></option>
                                                        <?php }else{?>
                                                        <option value="<?php echo $val; ?>" ><?php echo $val; ?></option>
                                                        <?php }}?>  
                                                     </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                         <input type="hidden" value="<?php echo $row['email'];?>" name="email" />
                                        <button class="btn yellow" type="submit">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                     <?php }}?>  
                   <?php if(count($admin_users)){
					foreach($admin_users-> result_array()as $row){ ?>
					<div id="delteModal<?php echo $row['user_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/userdelete/<?php echo $row['user_id'];?>" method="post">
                                            
										<div class="modal-body">
											<p>
												 Do you want to delete "<span style="color:#06F"><?php echo $row['email'];?></span>" user of  user ? 
											</p>
										</div>
										<div class="modal-footer">
											<button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                             <input type="hidden" value="<?php echo $row['email'];?>" name="usermenuid" />
                                             
											<button class="btn blue" type="submit">Confirm</button>
											</form>
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

<?php if(count($team_members)){
					foreach($team_members-> result_array()as $row){ ?> 
	<SCRIPT type="text/javascript">
    function ValidateFileUpload1<?php echo $row['id'];?>() {
		var fuData = document.getElementById('pro_image<?php echo $row['id'];?>');
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
    	document.getElementById("Edit<?php echo $row['id'];?>").disabled = false; 
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
		document.getElementById("Edit<?php echo $row['id'];?>").disabled = true; 
		}
		}
    }
    </SCRIPT> 
 <?php }}?>      
<script>

   <script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   TableAdvanced.init();
});
</script>