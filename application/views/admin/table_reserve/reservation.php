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
							
							Table Reservation
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							View Reserves  
						</li>
						<h3 class="page-title">
					</h3>
					</ul>
					<h3 class="page-title">
					View Reserves  <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errororder')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errororder'); ?></div>
              <?php $this->session->unset_userdata('errororder');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successorder')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successorder'); ?>
                </div>
              <?php $this->session->unset_userdata('successorder');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>All Reservations
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
									 Reservation No
								</th>
								<th>
									 Customer ID
								</th>								
								<th>
									 Date
								</th>
								<th class="hidden-xs">
									  Check In
								</th>
								
								<th class="hidden-xs">
									  Check Out 
								</th>
                                <th class="hidden-xs">
									 Chairs
								</th>
                                
                                <th class="hidden-xs">
									 Tables
								</th>
								<th class="hidden-xs">
									 Status
								</th>
								<th class="hidden-xs">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($reservation)){
							foreach($reservation-> result_array()as $row){ ?>
							<tr>
                            	<td>
									 <?php echo $row['table_reservation_id'];?>
								</td>
								<td>
									 <?php echo $row['customer_id'];?>
								</td>
								<td>
									 <?php echo $row['created_date'];?>
								</td>
								<td>
									<?php echo $row['start_time'];?>
								</td>
								<td>
									 <?php echo $row['end_time'];?>
                                </td>
                                <td>
									 <?php echo $row['chair_count'];?>
                                </td>
                                <td>
									 <?php echo $row['table_count'];?>
                                </td>
                                <td>
									 <?php if ($row['status'] == "pending"){?>
                                    <span class="badge badge-error badge-roundless">
                                    <?php } else if($row['status'] == "Confirmed"){?> <span class="badge badge-success badge-roundless"> <?php } else{?>
									<span class="badge badge-danger badge-roundless">	
								    <?php }?>
                                    <?php echo $row['status'];?></span>
                                </td>
								
                                <td>
                                      <a href="<?php echo base_url(); ?>index.php/admin/reserve_details/<?php echo $row['table_reservation_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
									 <a href="#editoModal<?php echo $row['table_reservation_id'];?>" data-toggle="modal" data-original-title="QUICK EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>                                     
									 <a href="#delteoModal<?php echo $row['table_reservation_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
									<i class="fa fa-times"></i></a>
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                     <?php if(count($reservation)){
					foreach($reservation-> result_array()as $row){ ?>
					<div id="editoModal<?php echo $row['table_reservation_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Reserve Status
                                            </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/reserveedit/<?php echo $row['table_reservation_id'];?>" method="post" onsubmit="return editcatevalidation()">
                                        <div class="form-body">
                                            
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                <strong style=" float:right">Reserved No</strong>
                                                </div>
                                                <div class="col-md-9">
                                                 <div class="has-error" >
                                                    <?php echo $row['table_reservation_id'];?>
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                            
                                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Status</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="status">
                                                      <?php $opt=array('Pending','Confirmed','Canceled'); ?>
        
														<?php foreach($opt as $val){?>
                                                        <?php if ($row['status']==$val) {?>
                                                        <option value="<?php echo $val; ?>" selected="selected"><?php echo $val; ?></option>
                                                        <?php }else{?>
                                                        <option value="<?php echo $val; ?>" ><?php echo $val; ?></option>
                                                        <?php }}?> </select>
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
                     <?php if(count($reservation)){
					foreach($reservation-> result_array()as $row){ ?>
					<div id="delteoModal<?php echo $row['table_reservation_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/reservedelete/<?php echo $row['table_reservation_id'];?>" method="post">
                                            
										<div class="modal-body">
											<p>
												 Do you want to delete "<span style="color:#06F"><?php echo $row['table_reservation_id'];?></span>" order? 
											</p>
										</div>
										<div class="modal-footer">
											<button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                            
                                             <input type="hidden" value="<?php echo $row['table_reservation_id'];?>" name="order_id" />
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