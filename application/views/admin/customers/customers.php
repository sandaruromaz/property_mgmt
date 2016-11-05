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
							
							Customer Management
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Customer Information
						</li>
						
					</ul>
					<h3 class="page-title">
					Customer Information  <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorcustomer')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorcustomer'); ?></div>
              <?php $this->session->unset_userdata('errorcustomer');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successcustomer')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successcustomer'); ?>
                </div>
              <?php $this->session->unset_userdata('successcustomer');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>Customer Details 
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
                                <th style="width:15%">
									Customer ID
								</th>								
								
								<th class="hidden-xs" style="width:30%">
									 Name
								</th>
                                <th class="hidden-xs">
									 Email
								</th>
                                <th class="hidden-xs">
									 Registered Date
								</th>
                                <th class="hidden-xs">
									 Activation Status
								</th>
                                <th class="hidden-xs">
									 Account Accessibility
								</th>
                                
                                <th class="hidden-xs" style="width:10%">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_customers)){
							foreach($admin_customers-> result_array()as $row){ ?>
							<tr>
                            	<td style="width:15%">
									 <?php echo $row['customer_id'];?>
								</td>
                                <td style="width:30%">
									 <?php echo $row['title'];?>. <?php echo $row['fname'];?> <?php echo $row['lname'];?>
								</td>
                                <td>
									 <?php echo $row['email'];?>
								</td>
                                <td>
									 <?php echo $row['registered_date'];?>
								</td>
								<td>
									
                                     <?php if ($row['account'] == "active"){?>
                                    <span class="badge badge-info badge-roundless">
                                    <?php } else{?> <span class="badge badge-default  badge-roundless"> <?php } ?>
                                    <?php echo $row['account'];?></span>
								</td>
								<td >
									
                                     <?php if ($row['access'] == "Yes"){?>
                                    <span class="badge badge-primary badge-roundless">
                                    <?php } else{?> <span class="badge badge-danger  badge-roundless"> <?php } ?>
                                    <?php echo $row['access'];?></span>
                                    
								</td>
								
                                <td style="width:10%">
                                      <a href="#viewModal<?php echo $row['customer_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
									 <a href="#editoModal<?php echo $row['customer_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>                                     
								
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                     <?php if(count($admin_customers)){
					foreach($admin_customers-> result_array()as $row){ ?>
					<div id="viewModal<?php echo $row['customer_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Customer Details  ( Customer ID - <?php echo $row['customer_id'];?> )</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal" >
                                        <div class="form-body">
                                            
                                          <div class="form-group">
                                                
                                                <div class="col-md-12">
                                                <table width="80%" border="0" align="center" style=" padding-bottom:50px">
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Account Information </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td width="30%"  >Registered Date</td>
                                                    <td colspan="2" width="50%" >: <?php echo $row['registered_date'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="35%">Activation Status</td>
                                                    <td colspan="2">: <?php if ($row['account'] == "active"){?>
                                                    <span class="badge badge-info badge-roundless">
                                                    <?php } else{?> <span class="badge badge-default  badge-roundless"> <?php } ?>
                                                    <?php echo $row['account'];?></span></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="35%">Account Accessibility</td>
                                                    <td colspan="2">: <?php if ($row['access'] == "Yes"){?>
                                                    <span class="badge badge-primary badge-roundless">
                                                    <?php } else{?> <span class="badge badge-danger  badge-roundless"> <?php } ?>
                                                    <?php echo $row['access'];?></span></td>
                                                  </tr>
                                                  
                                                                                                   
                                                   <tr>
                                                    <td width="30%" colspan="3"><h3>Personal Information</h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td width="30%"  >Name</td>
                                                    <td colspan="2" width="50%" >: <?php echo $row['title'];?>. <?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%"  >Email</td>
                                                    <td colspan="2" width="50%" >: <?php echo $row['email'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%"  valign="top" >Address</td>
                                                    <td colspan="2" width="50%" >: <?php echo $row['address']; ?>,<br/> &nbsp;
																<?php if($row['address1']!="")  { echo $row['address1'];?>, <br/>&nbsp; <?php } ?>
																<?php echo $row['city']; ?>.<br/>
																
																</td>
                                                  </tr>
                                                   <tr>
                                                    <td width="30%"  >Postal Code</td>
                                                    <td colspan="2" width="50%" >: <?php echo $row['postal_code'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%"  >Contact No 1</td>
                                                    <td colspan="2" width="50%" >: <?php echo $row['telephone'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%"  >Contact No 2</td>
                                                    <td colspan="2" width="50%" >: <?php echo $row['mobile'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%"  >Date of Birth</td>
                                                    <td colspan="2" width="50%" >: <?php echo $row['date_of_birth'];?></td>
                                                  </tr>
                                                   <tr>
                                                    <td width="30%" colspan="3"><h3>News Alert Activation</h3><hr /></td>                                                    
                                                  </tr>
                                                   <tr>
                                                    <td width="30%"  >Status</td>
                                                    <td colspan="2" width="50%" >: <?php if ($row['news_alert'] == "active"){?>
                                                    <span class="badge badge-info badge-roundless">
                                                    <?php } else{?> <span class="badge badge-default  badge-roundless"> <?php } ?>
                                                    <?php echo $row['news_alert'];?></span></td>
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
                     <?php if(count($admin_customers)){
					foreach($admin_customers-> result_array()as $row){ ?>
					<div id="editoModal<?php echo $row['customer_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Account Accessibility
                                            </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/customeredit/<?php echo $row['customer_id'];?>" method="post" enctype="multipart/form-data" onsubmit="return editcatevalidation()">
                                        <div class="form-body">
                                            
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                <strong style=" float:right">Customer ID</strong>
                                                </div>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                   <strong> <?php echo $row['customer_id'];?></strong>
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Account Accessibility</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="access">
                                                      <?php $opt=array('Yes','No'); ?>
        
														<?php foreach($opt as $val){?>
                                                        <?php if ($row['access']==$val) {?>
                                                        <option value="<?php echo $val; ?>" selected="selected"><?php echo $val; ?></option>
                                                        <?php }else{?>
                                                        <option value="<?php echo $val; ?>" ><?php echo $val; ?></option>
                                                        <?php }}?>   												                                                    </select>
                                                </div>
                                            </div>   
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn yellow" type="submit">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                     <?php }}?> 
                    
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
   <script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   TableAdvanced.init();
});
</script>