<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="<?php echo base_url(); ?>index.php/admin">
			<img src="<?php echo base_url(); ?>assets/images/<?php echo $logo; ?>" alt="NMB" class="logo-default" width="70px"/>
			</a>
			
		</div>
		  <?php if (isset($_SESSION['admin_id']) ) {
			/*check wether user log in or not*/?>
		  <?php if (count($user_data)){ 
              foreach ($user_data-> result_array() as $row){
              $profile = array('user' => $row);	//we make new array so we can use it anyware	  
              } }
            }
            ?>
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				
				<!-- BEGIN INBOX DROPDOWN -->
				<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-envelope"></i>
					<span class="badge badge-default">
					<?php echo $feedcount; ?> </span>
					</a>
                    <?php if($feedcount!="0") {?>
					<ul class="dropdown-menu">
						<li>
							<p>
								 You have <?php echo $feedcount; ?> new messages
							</p>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;">
                            <?php if(count($feedhead)){
						    foreach($feedhead-> result_array()as $row){ ?>
								<li>
									<a href="<?php echo base_url(); ?>index.php/admin/feedback_details/<?php echo $row['feedback_id'];?>">									
									<span class="subject">
									<span class="from">
									<?php echo $row['name'];?> </span>
									<span class="time">
									<?php echo $row['date'];?> @ <?php echo $row['time'];?></span>
									</span>
									<span class="message">
									<?php echo $row['message'];?></span>
									</a>
								</li>
                              <?php }}?>  
								
							
							</ul>
                           
						</li>
						<li class="external">
							<a href="<?php echo base_url(); ?>index.php/admin/feedback">
							See all messages <i class="m-icon-swapright"></i>
							</a>
						</li>
					</ul>
                     <?php }?>
				</li>
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
					<a href="<?php echo base_url(); ?>index.php/admin/products_reviews" class="dropdown-toggle" data-close-others="true"  title="New Product Reviews" >
					<i class="fa fa-tasks" style="margin-right:10px"></i>
					<span class="badge badge-default">
					<?php echo $reviewscount; ?></span>
					</a>
					
				</li>
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<span>Welcome, </span>
					<span class="username">
					<?php  echo $profile['user']['title']?>. <?php  echo $profile['user']['fname']?> <?php  echo $profile['user']['lname']?></span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo base_url(); ?>index.php/admin/my_profile">
							<i class="fa fa-user"></i> My Profile </a>
						</li>
						
						<li class="divider">
						</li>
						
						<li>
							<a href="<?php echo base_url(); ?>index.php/AdminControl/adminlogout">
							<i class="fa fa-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->