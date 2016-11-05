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
							
							Messages
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Inbox ( <?php echo $feedcount; ?> )  
						</li>
						
					</ul>
					<h3 class="page-title">
					Inbox ( <?php echo $feedcount; ?> )  <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorfeed')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorfeed'); ?></div>
              <?php $this->session->unset_userdata('errorfeed');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successfeed')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successfeed'); ?>
                </div>
              <?php $this->session->unset_userdata('successfeed');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>All Feedbacks 
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
                                <th style="width:50%">
									Message
								</th>								
								
                                <th class="hidden-xs">
									 Email
								</th>
                               
                                <th class="hidden-xs">
									 Status
								</th>
                                
                                
                                <th class="hidden-xs" style="width:5%">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_feedbacks)){
							foreach($admin_feedbacks-> result_array()as $row){ ?>
							<tr>
                            	<td style="width:50%">
									 <strong style="color:#006"><?php echo $row['name'];?></strong><br />
                                     <span style="font-size:10px"><?php echo $row['date'];?> @ <?php echo $row['time'];?></span>
								</td>
                              
                                <td>
									 <?php echo $row['email'];?>
								</td>
                              
								<td>
									
                                     <?php if ($row['status'] == "read"){?>
                                    <span class="badge badge-info badge-roundless">
                                    <?php } else{?> <span class="badge badge-default  badge-roundless"> <?php } ?>
                                    <?php echo $row['status'];?></span>
								</td>
								
								
                                <td style="width:5%">
                                  <a href="<?php echo base_url(); ?>index.php/admin/feedback_details/<?php echo $row['feedback_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-envelope-o"></i></a>									                                     
								
								</td>
						      </tr>
                                <?php }}?>
							
							  </tbody>
						  </table>
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
   <script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   TableAdvanced.init();
});
</script>