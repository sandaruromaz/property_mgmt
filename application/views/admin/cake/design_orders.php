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
							Customize Cake Orders 
						</li>
						<li>							
							Date 
						</li>
						
					</ul>
					<h3 class="page-title">
					Customize Cake Orders <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errordesignorder')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errordesignorder'); ?></div>
              <?php $this->session->unset_userdata('errordesignorder');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successdesignorder')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successdesignorder'); ?>
                </div>
              <?php $this->session->unset_userdata('successdesignorder');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>All Orders
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
									 Design Order No
								</th>
								<th>
									 Customer ID
								</th>								
								
								<th class="hidden-xs">
									 Order Date
								</th>
								<th class="hidden-xs">
									 Dilivery Date
								</th>

								
                                <th class="hidden-xs">
									 Confirmation
								</th>
                                
                                <th class="hidden-xs">
									 Action
								</th>

							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_designorders)){
							foreach($admin_designorders-> result_array()as $row){ ?>
							<tr>
                            	<td>
									 <?php echo $row['design_order_id'];?>
								</td>
								<td>
									 <?php echo $row['customer_id'];?>
								</td>
								
								<td>
									<?php echo $row['order_date'];?>
								</td>
								<td>
									<?php echo $row['dilivery_date'];?>
								</td>
								
								
                                <td>
									 <?php if ($row['status'] == "Pending"){?>
                                    <span class="badge badge-error badge-roundless">
                                    <?php } else if($row['status'] == "Confirmed"){?> <span class="badge badge-success badge-roundless"> <?php } else{?>
									<span class="badge badge-danger badge-roundless">	
								    <?php }?>
                                    <?php echo $row['status'];?></span>
                                </td>
								
                                <td>
                                      <a href="<?php echo base_url(); ?>index.php/admin/designorder_details/<?php echo $row['design_order_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
									 <a href="#editoModal<?php echo $row['design_order_id'];?>" data-toggle="modal" data-original-title="QUICK EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>                                     
									 <a href="#delteoModal<?php echo $row['design_order_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
									<i class="fa fa-times"></i></a>
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                     <?php if(count($admin_designorders)){
					foreach($admin_designorders-> result_array()as $row){ ?>
					<div id="editoModal<?php echo $row['design_order_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Order Status
                                            </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/designorderedit/<?php echo $row['design_order_id'];?>" method="post" onsubmit="return editcatevalidation()">
                                        <div class="form-body">
                                            
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                <strong style=" float:right">Order No</strong>
                                                </div>
                                                <div class="col-md-9">
                                                 <div class="has-error" >
                                                    <?php echo $row['design_order_id'];?>
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            
                                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Status</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="status">
                                                      <?php $opt=array('Pending','Canceled','Confirmed'); ?>
        
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
                                        <button class="btn yellow" type="submit">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                     <?php }}?> 
                     <?php if(count($admin_designorders)){
					foreach($admin_designorders-> result_array()as $row){ ?>
					<div id="delteoModal<?php echo $row['design_order_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/designorderdelete/<?php echo $row['design_order_id'];?>" method="post">
                                            
										<div class="modal-body">
											<p>
												 Do you want to delete "<span style="color:#06F"><?php echo $row['design_order_id'];?></span>" order? 
											</p>
										</div>
										<div class="modal-footer">
											<button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                            
                                             <input type="hidden" value="<?php echo $row['design_order_id'];?>" name="order_id" />
											<button class="btn blue" type="submit">Confirm</button>
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