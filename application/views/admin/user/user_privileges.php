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
							User Privileges 
						</li>
						
					</ul>
					<h3 class="page-title">
					User Privileges<small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('erroruserprivilege')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('erroruserprivilege'); ?></div>
              <?php $this->session->unset_userdata('erroruserprivilege');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successuserprivilege')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successuserprivilege'); ?>
                </div>
              <?php $this->session->unset_userdata('successuserprivilege');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			<div class="row">
				<div class="col-md-6">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								All Users With Privileges
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
							
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
								<tr>
									<th>
										 User Role Name
									</th>
									<th >
										User Menu Name
									</th>
									
									<th>
									      Action
									</th>
								</tr>
								</thead>
								<tbody>
                                <?php if(count($admin_userprivileges)){
								foreach($admin_userprivileges-> result_array()as $row){ ?>
								<tr>
									<td class="highlight">
									<?php echo $row['user_role_name'];?>
									</td>
									<td class="hidden-xs">
									<?php echo $row['user_menu_type_name'];?>
									</td>
									
									<td>
										
										<a href="#delteModal<?php echo $row['user_menu_type_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
										<i class="fa fa-times"></i></a>
									</td>
								</tr>
                                <?php }} ?>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
                     
                     
                     <?php if(count($admin_userprivileges)){
					foreach($admin_userprivileges-> result_array()as $row){ ?>
					<div id="delteModal<?php echo $row['user_menu_type_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/user_privilegesdelete" method="post">
                                            
										<div class="modal-body">
											<p>
												 Do you want to delete "<span style="color:#06F"><?php echo $row['user_menu_type_name'];?></span>" privilege of "<span style="color:#06F"><?php echo $row['user_role_name'];?></span>" user 
                                                 role? 
											</p>
										</div>
										<div class="modal-footer">
											<button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                             <input type="hidden" value="<?php echo $row['user_menu_type_id'];?>" name="usermenuid" />
                                             <input type="hidden" value="<?php echo $row['user_menu_type_name'];?>" name="usermenuname" />
                                             <input type="hidden" value="<?php echo $row['user_role_id'];?>" name="userroleid" />
                                             <input type="hidden" value="<?php echo $row['user_role_name'];?>" name="userrolename" />
											<button class="btn blue" type="submit">Confirm</button>
											</form>
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
								Add New User Privilege
							</div>
							<div class="tools">
								<a class="collapse" href="#">
								</a>
								
								
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" class="form-horizontal" action="<?php echo base_url(); ?>index.php/admin/user_privilegesadd" method="post" onsubmit="return addprivilegesvalidation()">
								<div class="form-body">
									
									<div class="form-group">
										<label class="col-md-4 control-label">User Role Name</label>
										<div class="col-md-8">
                                        <div class="has-error" >
											<select id="userrole" name="userrole" class="form-control" >
												     <option value="">Select</option>
                                            <?php if(count($admin_userrole)){
								            foreach($admin_userrole-> result_array()as $row){ ?>
												<option value="<?php echo $row['user_role_id'];?>"><?php echo $row['user_role_name'];?></option>
											<?php }}?>												
											</select>
                                            <span class='error'></span> </div>  
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">User Menu Name</label>
										<div class="col-md-8">
                                        <div class="has-error" >
											<select id="usermenu" name="usermenu" class="form-control">
                                                 <option value="" r>Select</option >
                                            <?php if(count($admin_usermenu)){
								            foreach($admin_usermenu-> result_array()as $row){ ?>
											<option value="<?php echo $row['user_menu_type_id'];?>"><?php echo $row['user_menu_type_name'];?></option>
											<?php }}?>												
											</select>
                                            <span class='error'></span> </div>  
										</div>
									</div>
								
									
								</div>
								<div class="form-actions right1">
									<button class="btn default" type="reset">Reset</button>
									<button class="btn green" type="submit">Add User Privilege</button>
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
   <script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   TableAdvanced.init();
});
</script>