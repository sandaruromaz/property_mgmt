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
							
							eOrders
							<i class="fa fa-angle-right"></i>
						</li>
                        <li>
							<a href="<?php echo base_url(); ?>index.php/admin/orders">
							View Orders </a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Order Details
						</li>
						
					</ul>
					<h3 class="page-title">
					Order Details <small></small><a style="float:right" class="btn green tooltip-button" href="<?php echo base_url(); ?>index.php/admin/orders">View All Orders</a>
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
								<i class="fa fa-square"></i>Order Details 
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
                        <table width="20%" border="0">
                                 <tbody>
                           <?php if (count($admin_orderdetails)){		
		  			       foreach ($admin_orderdetails-> result_array() as $order){?>      
                          <tr>
                            <td><h3>Order No </h3></td>
                            <td><h3>: <?php echo $order['order_id']; ?></h3></td>
                          </tr>
                          <tr>
                            <td><h5>Order Date </h5></td>
                            <td><h5>: <?php echo $order['order_date']; ?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Order Time</h5></td>
                            <td><h5>: <?php echo $order['time']; ?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Status </h5></td>
                            <td><h5>: <?php if ($order['status'] == "Pending"){?>
                                    <span class="badge badge-error badge-roundless">
                                    <?php } else if($order['status'] == "Delivered"){?> <span class="badge badge-success badge-roundless"> <?php } else{?>
									<span class="badge badge-danger badge-roundless">	
								    <?php }?>
                                    <?php echo $order['status'];?></span>
                            
                               </h5>
                            </td>
                          </tr>
                          <?php if($order['status']=="Delivered"){?>
                           <tr>
                            <td><h5>Delivered Date</h5></td>
                            <td><h5>: <?php echo $order['delivery_date']; ?></h5></td>
                          </tr>
                          <?php }?>
                        </tbody>
                        </table>
                        <h3>Customer Information</h3>
                                            <table width="100%">
                        
            <!--Customer Information-->
                        <tbody style="background-color:#f5f5f5;">
                                <tr>
                                    <td style="float:left; padding:10px 10px 10px 10px" width="15%">
                                    Customer ID                                                                           
                                    </td>
                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                    : <?php echo $order['customer_id'];?></td>										
                                </tr>
                                 <tr>
                                    <td style="float:left; padding:10px 10px 10px 10px" width="15%">
                                    Customer Name                                                                           
                                    </td>
                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                    : <?php echo $order['title'];?>. <?php echo $order['fname'];?> <?php echo $order['lname'];?></td>										
                                </tr>
                                <tr>
                                    <td style="float:left; padding:10px 10px 10px 10px" width="15%">
                                    Contact No 1                                                                           
                                    </td>
                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                    : <?php echo $order['telephone'];?></td>										
                                </tr>
                                                                
                            </tbody>
                        </table>
                                        
                                        <h3>Order Items</h3>
                        <table align="center" style="width:100%" class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Quantity 
                                                    </th>
                                                    <th>
                                                        Products
                                                    </th>
                                                    <th>
                                                        Amount
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                               <?php if (count($admin_order_productdetails)){
                                               foreach ($admin_order_productdetails-> result_array() as $row){
                                                ?>
                                                 <tr>
                                                   <td>                                                                                                                                                                                                                                                                                               
                                                    <?php echo $row['quantity']; ?>
                                                    </td>
                                                    <td class="hidden-xs">
                                                    <?php echo $row['product_name']; ?><br/>
													                          </td>
                                                    <td class="hidden-xs">
                                                    LKR: <?php echo $row['price']; ?>
                                                    </td>
                                                </tr>
                                                <?php }}?>
                                                                                                                                                <tr>
                                                    <td class="highlight" colspan="3">
                                                    <strong>Total : LKR: <?php echo $order['amount']; ?></strong>
                                                    </td>
                                                   
                                                    
                                                </tr>
                                                                                                
                                                </tbody>
                                                </table>
                                                <?php }}?>
                                              <h3>Delivery Method &amp; Payment Method</h3>
                                            <table width="100%">
                        
            <!--Delivery Method &amp; Payment Method-->
                                                   <?php if (count($admin_order_billingdetails)){		
													foreach ($admin_order_billingdetails-> result_array() as $row){											
													?>
				                        <tbody style="background-color:#f5f5f5;">
                                                <tr>
                                                    <td style="float:left; padding:10px 10px 10px 10px" width="15%">
                                                    Delivery Method                                                                           
                                                    </td>
                                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                                    : <?php echo $row['delivery_method']; ?></td>										
                                                </tr>
                                                 <tr>
                                                    <td style="float:left; padding:10px 10px 10px 10px" width="15%">
                                                    Payment Method                                                                           
                                                    </td>
                                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                                    : <?php echo $row['payment_method']; ?></td>										
                                                </tr>
                                                                                
                                            </tbody>
                                        </table>
                                            <h3>Delivery Address</h3>
                                            <table width="100%">
                        
            <!--Delivery Address-->
				                        <tbody style="background-color:#f5f5f5;">
                                                <tr>
                                                    <td style="float:left; padding:10px 10px 10px 10px">
                                                    
                                                     
																<?php echo $row['add']; ?>,<br/>
																<?php if($row['add1']!="")  { echo $row['add1'];?>, <br/> <?php } ?>
																<?php echo $row['city']; ?>.<br/>
																<?php echo $row['postal']; ?>.<br/>
																<?php echo $row['mobile']; ?><br/>
																
													   
                                                    
                                                    </td>									
                                                </tr>
                                                                                
                                            </tbody>
                                        </table>
                                        <?php }}?> 
                                        <!--    <div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="portlet grey-cascade box">
													<div class="portlet-title">
														<div class="caption">
														Delivery Method &amp; Payment Method
														</div>
														
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-12 name">
																 Order #:
															</div>
                                                            <div class="col-md-12 name">
																 Order #:
															</div>
                                                            <div class="col-md-12 name">
																 Order #:
															</div>
                                                            <div class="col-md-12 name">
																 Order #:
															</div>
                                                            <div class="col-md-12 name">
																 Order #:
															</div>
                                                         </div>
													</div>
												</div>
											</div>
										
										
											<div class="col-md-12 col-sm-12">
												<div class="portlet grey-cascade box">
													<div class="portlet-title">
														<div class="caption">
														Delivery Address
														</div>
														
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-12 name">
																 Order #:
															</div>
                                                            <div class="col-md-12 name">
																 Order #:
															</div>
                                                            <div class="col-md-12 name">
																 Order #:
															</div>
                                                            <div class="col-md-12 name">
																 Order #:
															</div>
                                                            <div class="col-md-12 name">
																 Order #:
															</div>
                                                         </div>
													</div>
												</div>
											</div>
										
										</div>-->

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