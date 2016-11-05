<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Dashboard <small>statistics and more</small>
					</h3>
					
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
            <!--Errors-->
			  <?php if($this -> session -> userdata('erroruseraccess')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('erroruseraccess'); ?></div>
              <?php $this->session->unset_userdata('erroruseraccess');}?>
              <!-- Error Message-->
             
              <!--end Errors-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $orderscount; ?>
							</div>
							<div class="desc">
                            <?php if($orderscount!="0"){?>
								 New Orders
                            <?php }else{?>
                                 No New Orders
                            <?php }?>
							</div>
						</div>
						<a class="more" href="<?php echo base_url(); ?>index.php/admin/orders">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-puzzle-piece"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php// echo $designordercount; ?>
							</div>
							<div class="desc">
                            	<?php// if($designordercount!="0"){?>
								 New Customize Cake Orders  
                            <?php// }else{?>
                                 No Customize Cake Orders  
                            <?php// }?>
								 
							</div>
						</div>
						<a class="more" href="<?php echo base_url(); ?>index.php/admin/design_orders">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-envelope-o"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $feedcount; ?>
							</div>
							<div class="desc">
                            	<?php if($feedcount!="0"){?>
								 New Messages
                            <?php }else{?>
                                 No New Messages
                            <?php }?>
								 
							</div>
						</div>
						<a class="more" href="<?php echo base_url(); ?>index.php/admin/feedback">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-list-ul"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $reviewscount; ?>
							</div>
							<div class="desc">
                            <?php if($reviewscount!="0"){?>
								 New Product Reviews
                            <?php }else{?>
                                 No New Product Reviews 
                             <?php }?>
								 
							</div>
						</div>
						<a class="more" href="<?php echo base_url(); ?>index.php/admin/products_reviews">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
<!-- 				<div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $orderscount; ?>
							</div>
							<div class="desc">
                            <?php if($orderscount!="0"){?>
								 New Orders
                            <?php }else{?>
                                 No New Orders
                            <?php }?>
							</div>
						</div>
						<a class="more" href="<?php echo base_url(); ?>index.php/admin/orders">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-puzzle-piece"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $designordercount; ?>
							</div>
							<div class="desc">
                            	<?php if($designordercount!="0"){?>
								 New Customize Cake Orders  
                            <?php }else{?>
                                 No Customize Cake Orders  
                            <?php }?>
								 
							</div>
						</div>
						<a class="more" href="<?php echo base_url(); ?>index.php/admin/design_orders">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div> -->
			</div>
			<!-- END DASHBOARD STATS -->

	</div>
	<!-- END CONTENT -->
   <script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initIntro();
   Tasks.initDashboardWidget();
});
function randValue() {
                return (Math.floor(Math.random() * (1 + 50 - 20))) + 10;
            }

            var visitors = [
			<?php if(count($income)){
			foreach($income-> result_array()as $row){ ?>			
			['<?php echo $row['DATE'];?>', <?php echo $row['Income'];?>],
            <?php }}?>
            ];
			 var data1 = [
			 <?php if(count($income)){
			foreach($income-> result_array()as $row){ ?>
                    ['<?php echo $row['DATE'];?>', <?php echo $row['Income'];?>],
            <?php }}?>
                ];
</script>