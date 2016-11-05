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
							Reports 
						</li>
						
					</ul>
					<h3 class="page-title">
					Reports  <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorreport')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorreport'); ?></div>
              <?php $this->session->unset_userdata('errorreport');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successreport')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successreport'); ?>
                </div>
              <?php $this->session->unset_userdata('successreport');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>Reports
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
							<form role="form" class="horizontal-form"   action="<?php echo base_url(); ?>index.php/admin/getreport" method="post"
                             target="_blank" onsubmit="return reportgeneratevalidation()" >
                                        
                                  <div class="row">      
                                        
                                        <div class="col-md-3">
														<div class="form-group">
															<label class="control-label">Report Type:<font class="required">* </font> </label>
                                                            <div class="has-error" >
															<select class="form-control" name="reporttype" id="reporttype">
                                                            	<option value="">Select</option>
																<option value="order">All order</option>
                                                              	<option value="design order growth">Cake Customization Growth</option>
                                                                <option value="cusdetails">Active Customer Details</option>
                                                                <option value="sysuser">System User Details</option>
                                                                <option value="cusgrowth">Customer Growth</option> 
                                                                <option value="pendingorder">Pending order</option> 
                                                                <option value="deliveredorder">Delivered order</option>
                                                                <option value="canceledorder">Canceled order</option> 
                                    							<option value="income">Income</option>
																<option value="productreport">Product Detail</option>
																<option value="test">TEST_design_cus</option>

															</select>
															<span class='error'></span> </div>
														</div>
										</div>
                                         <div class="col-md-3">
														<div class="form-group">
															<label class="control-label">From:<font class="required">* </font> </label>
                                                             <div class="has-error" >
															<input type="text"  value="" class="form-control" name="from" id="from" readonly="readonly">
															<span class='error'></span> </div>
														</div>
										</div>
                                        <div class="col-md-3">
														<div class="form-group">
															<label class="control-label">To:<font class="required">* </font></label>
                                                             <div class="has-error" >
															<input type="text"  value="" class="form-control" name="to" id="to" readonly="readonly">
															<span class='error'></span> </div>
														</div>
										</div>
                                         <div class="col-md-3">
														<div class="form-group">
															<label class="control-label">&nbsp;</label>
															<button class="btn green" type="submit" style="margin-top:26px">GET REPORT</button>
															
														</div>
										</div>
                                        
 								</div>
                              </form>
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