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
							
							Reservation
							<i class="fa fa-angle-right"></i>
						</li>
                        <li>
							<a href="<?php echo base_url(); ?>index.php/admin/orders">
							View Reservations </a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Test View
						</li>
						
					</ul>
					<h3 class="page-title">
					Test View <small></small><a style="float:right" class="btn green tooltip-button" href="<?php echo base_url(); ?>index.php/admin/test">View All </a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errororderdetils')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errororderdetils'); ?></div>
              <?php $this->session->unset_userdata('errororderdetils');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successorderdetils')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successorderdetils'); ?>
                </div>
              <?php $this->session->unset_userdata('successorderdetils');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>Reserved Details 
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
                        <table width="20%" border="0">
                                 <tbody>
                           <?php if (count($testdetails)){		
		  			       foreach ($testdetails-> result_array() as $reserve){?>      
                          <tr>
                            <td><h3>Reserved No </h3></td>
                            <td><h3>: <?php echo $reserve['test_id']; ?></h3></td>
                          </tr>
                          <tr>
                            <td><h5>Reserved Date </h5></td>
                            <td><h5>: <?php echo $reserve['test_name']; ?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Reserved Time</h5></td>
                            <td><h5>: <?php //echo $reserve['']; ?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Status </h5></td>
                           
                          </tr>
                         
                           <tr>
                            <td><h5>Confirmed Date</h5></td>
                            <td><h5>: <?php echo $reserve['test_number']; ?></h5></td>
                          </tr>
                          <?php }}?>
                        </tbody>
                        </table>
         
                       
                                        
                                       
                                                </tr>
                                                                                                
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