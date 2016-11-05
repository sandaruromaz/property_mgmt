<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/DT_bootstrap.css"/>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
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
							User Profile 
						</li>
						
					</ul>
					<h3 class="page-title">
					User Profile   <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorrmy')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorrmy'); ?></div>
              <?php $this->session->unset_userdata('errorrmy');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successmy')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successmy'); ?>
                </div>
              <?php $this->session->unset_userdata('successmy');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>User Profile
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
							
                                        
                                  <div class="row">      
                                  <div class="row profile-account" style=" margin:10px">
									<div class="col-md-3">
                                    
										<ul class="ver-inline-menu tabbable margin-bottom-10">
											<li class="active">
												<a data-toggle="tab" href="#tab_1-1">
												<i class="fa fa-cog"></i> Account Information</a>
												<span class="after">
												</span>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_2-2">
                                                <i class="fa fa-user"></i> Personal Information </a>
												
											</li>
											<li>
												<a data-toggle="tab" href="#tab_3-3">
												<i class="fa fa-lock"></i> Change Password </a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_4-4">
												<i class="fa fa-eye"></i> Accessibility </a>
											</li>
										</ul>
                                       
									</div>
									<div class="col-md-9">
										<div class="tab-content">
                                        <?php if(count($admin_user)){
                                    foreach($admin_user-> result_array()as $row){ ?>
											<div id="tab_1-1" class="tab-pane active">
												<form role="form"  class="form-horizontal"  action="#">
                                                <div class="form-group">
                                                <label class="col-md-3 control-label">User ID </label>
                                                <div class="col-md-9">
                                                 <div class="has-error" style="margin:7px" >
                                                    <span style="margin-top:8px">
                                                         <?php echo $row['user_role_id'];?>
                                                    <span class='error'></span> </div>
                                                </div>
                                               </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label">User Role Name </label>
                                                <div class="col-md-9">
                                                 <div class="has-error" >
                                                    <span class="badge badge-primary badge-roundless" style="margin:8px">
                                                        <?php echo $row['user_role_name'];?></span>
                                                    <span class='error'></span> </div>
                                                </div>
                                               
                                               </div>
                                               <div class="form-group">
                                                <label class="col-md-3 control-label">Activation Status</label>
                                                <div class="col-md-9">
                                                 <div class="has-error" style="margin:7px"  >
                                                    <?php if ($row['status'] == "active"){?>
                                                    <span class="badge badge-info badge-roundless">
                                                    <?php } else{?> <span class="badge badge-default  badge-roundless"> <?php } ?>
                                                    <?php echo $row['status'];?></span>
                                                    <span class='error'></span> </div>
                                                </div>
                                                 <?php }}?> 
                                               </div>
													
												</form>
											</div>
                                            
                                            
                                              <?php if(count($admin_user)){
                                             foreach($admin_user-> result_array()as $row){ ?>
											<div id="tab_2-2" class="tab-pane">
												
												<form role="form" action="<?php echo base_url(); ?>index.php/admin/updateprofile" method="post" onsubmit="return edituserprofilevalidation()">
                                                <div class="form-group">
														<label class="control-label">Title<font class="required">* </font></label>
                                                        <div class="has-error" >
														<select id="ptitle" name="title" class="form-control">
                                                                 <?php $opt=array('Mr','Mrs','Miss'); ?>
                                                                  <option value="">Select </option>
                                                                  <?php foreach($opt as $val){?>
                                                                  <?php if ($row['title']==$val) {?>
                                                                  <option value="<?php echo $val; ?>" selected="selected"><?php echo $val; ?></option>
                                                                  <?php }else{?>
                                                                  <option value="<?php echo $val; ?>" ><?php echo $val; ?></option>
                                                                  <?php }}?>
                                                          </select>
                                                          <span class='error'  style=""></span> </div>
													</div>
													<div class="form-group">
														<label class="control-label">First Name<font class="required">* </font></label>
                                                        <div class="has-error" >
														<input type="text" placeholder="First Name"  value="<?php echo $row['fname'];?>" name="fname" id="pfname"class="form-control"/>
														<span class='error'  style=""></span> </div>
                                                    </div>
													<div class="form-group">
														<label class="control-label">Last Name<font class="required">* </font></label>
                                                        <div class="has-error" >
														<input type="text" placeholder="Last Name"  value="<?php echo $row['lname'];?>" name="lname" id="plname" class="form-control"/>
														<span class='error'  style=""></span> </div>
                                                    </div>
													<div class="form-group">
														<label class="control-label">Email<font class="required">* </font></label>
                                                        <div class="has-error" >
														<input type="text" placeholder="Email" value="<?php echo $row['email'];?>"  name="email" id="pemail" class="form-control"/>
														<span class='error'  style=""></span> </div>
                                                    </div>
													<div class="form-group">
														<label class="control-label">Address<font class="required">* </font></label>
                                                        <div class="has-error" >
														<input type="text" placeholder="Address" value="<?php echo $row['address'];?>" name="add" id="padd" class="form-control"/>
														<span class='error'  style=""></span> </div>
                                                    </div>
													<div class="form-group">
														<label class="control-label">Address 1</label>
														<input type="text" placeholder="Address 1" value="<?php echo $row['address1'];?>" name="add1" id="padd1" class="form-control"/>
													</div>													
													<div class="form-group">
														<label class="control-label">City<font class="required">* </font></label>
                                                        <div class="has-error" >
														<input type="text" placeholder="City"  value="<?php echo $row['city'];?>"  name="city"  id="pcity" class="form-control"/>
														<span class='error'  style=""></span> </div>
                                                    </div>
                                                    <div class="form-group">
														<label class="control-label">Contact No<font class="required">* </font></label>
                                                        <div class="has-error" >
														<input type="text" placeholder="Contact No" value="<?php echo $row['contact_no'];?>" name="contact" id="pcontact" class="form-control"/>
													<span class='error'  style=""></span> </div>
                                                    </div>
													<div class="margiv-top-10">
                                                    	<button class="btn grey" type="reset" name="btnFeed">RESET</button>
														<button class="btn green" type="submit" name="btnFeed">UPDATE</button>
													</div>
												</form>
											</div>
                                            <?php }}?>
											<div id="tab_3-3" class="tab-pane">
												<form action="<?php echo base_url(); ?>index.php/admin/changepassword" method="post" onsubmit="return changepassvalidation()">
													<div class="form-group">
														<label class="control-label">Current Password</label>
                                                        <div class="has-error" >
														<input type="password" class="form-control" placeholder="Current Password" name="cpass" id="ppass"/>
                                                        <span class='error'  style=""></span> </div>
													</div>
													<div class="form-group">
														<label class="control-label">New Password</label>
                                                        <div class="has-error" >
														<input type="password" class="form-control" placeholder="New Password" name="newpass" id="pnewpass" onPaste="return false" onCopy="return false"/>
													<span class='error'  style=""></span> </div>
                                                    </div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label>
                                                        <div class="has-error" >
														<input type="password" class="form-control"  placeholder="Re-type New Password" onPaste="return false" onCopy="return false" id="ucpass"/>
													<span class='error'  style=""></span> </div>
                                                    </div>
													<div class="margin-top-10">
														<button class="btn grey" type="reset" name="btnFeed">RESET</button>
														<button class="btn green" type="submit" name="btnFeed">UPDATE</button>
													</div>
												</form>
											</div>
											<div id="tab_4-4" class="tab-pane">
												<form action="#">
													<table class="table table-bordered table-striped">
                                                    <?php if(count($admin_usermenu)){
                                                    foreach($admin_usermenu-> result_array()as $row){ ?>
													<tr>
														<td>
															<i class="fa fa-angle-left"></i> <?php echo $row['user_menu_type_name'];?> page <i class="fa fa-angle-right"></i> 
														</td>
														
													</tr>
                                                    <?php }}?>
													
													</table>
													<!--end profile-settings-->
													
												</form>
											</div>
										</div>
									</div>
									<!--end col-md-9-->
								</div>
						
                                        
 								</div>
                            
					</div>
                    <!-- BEGIN MODAL-->
			
                   
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
  <script type="text/javascript">
     $(document).ready(function(){
    $("#from").datepicker({
		maxDate: 0 ,
        dateFormat: "yy-mm-dd",
		numberOfMonths: 2,
        onSelect: function(selected) {
          $("#to").datepicker("option","minDate", selected)
        }
    });
    $("#to").datepicker({ 
		maxDate: 0 ,
        dateFormat: "yy-mm-dd",
		numberOfMonths: 2,
        onSelect: function(selected) {
           $("#from").datepicker("option","maxDate", selected)
        }
    });  
});

  </script>

   <script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   TableAdvanced.init();
});
</script>