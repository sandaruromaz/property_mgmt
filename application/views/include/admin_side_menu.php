<!--BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="false" data-auto-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper" style="margin-bottom:10px">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				
				<li <?php if ($this->uri->segment(2)==""){ echo'class=" start active "';}?> >
					<a href="<?php echo base_url(); ?>index.php/admin">
					<i class="fa fa-home"></i>
					<span class="title">
					Dashboard </span>
					<span class="selected">
					</span>
					</a>
				</li>
				<li <?php if ($this->uri->segment(2)=="product_category" ||  $this->uri->segment(2)=="products_reviews"  || $this->uri->segment(2)=="products"  || $this->uri->segment(2)== "products_advance_edit"|| $this->uri->segment(2)==  "products_add"){ echo'class="active "';}?>>
					<a href="javascript:;">
					<i class="fa fa-shopping-cart"></i>
					<span class="title">
					eCommerce </span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						

                        <li <?php if ($this->uri->segment(2)=="product_category"){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/product_category">
							<i class="fa fa-bullhorn"></i>
							Product Category</a>
						</li>
						<li <?php if ($this->uri->segment(2)=="products" || $this->uri->segment(2)== "products_advance_edit" || $this->uri->segment(2)==  "products_add"){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/products">
							<i class="fa fa-bullhorn"></i>
							Products </a>
						</li >
						<li <?php if ($this->uri->segment(2)=="products_reviews"){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/products_reviews">
							<i class="fa fa-bullhorn"></i>
                            <span class="badge badge-roundless badge-danger">
							<?php echo $reviewscount; ?> </span>
							Products Reviews</a>
						</li>

					</ul>
				</li>
				<li <?php if ($this->uri->segment(2)=="orders" ||  $this->uri->segment(2)==  "order_details"){ echo'class="start active "';}?>>
					<a href="javascript:;">
					<i class="fa fa-shopping-cart"></i>
					<span class="title">
					eOrders  </span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($this->uri->segment(2)=="orders" ||  $this->uri->segment(2)==  "order_details"){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/orders">
							<i class="fa fa-bullhorn"></i>
							<span class="badge badge-roundless badge-danger">
							<?php echo $orderscount; ?> </span>
							View Orders</a>
						</li>
					</ul>
				</li>				
				<li  <?php if ($this->uri->segment(2)=="news" || $this->uri->segment(2)=="send_news" ){ echo'class="start active "';}?>>
					<a href="javascript:;">
						<i class="fa fa-tasks"></i>
						<span class="title">
							News Management
						</span>
						<span class="arrow">
						</span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($this->uri->segment(2)=="news" ){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/news">
							News Details</a>
						</li>
                        <li <?php if ($this->uri->segment(2)=="send_news" ){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/send_news">
							News Subcribers</a>
						</li>
					</ul>
				</li>
				<li <?php if ($this->uri->segment(2)=="slider" ){ echo'class="start active "';}?>>
					<a href="javascript:;">
					<i class="fa fa-puzzle-piece"></i>
					<span class="title">
					UI Banners </span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($this->uri->segment(2)=="slider" ){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/slider">
							Main Slider </a>
						</li>
						
					</ul>
				</li>
								<li <?php if ($this->uri->segment(2)=="gallery_images" || $this->uri->segment(2)=="gallery_category"){ echo'class="start active "';}?>>
					<a href="javascript:;">
					<i class="fa fa-puzzle-piece"></i>
					<span class="title">
					Gallery </span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($this->uri->segment(2)=="gallery_category"){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/gallery_category">
							Gallery Category </a>
						</li>
						<li <?php if ($this->uri->segment(2)=="gallery_images" ){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/gallery_images">
							Gallery Images </a>
						</li>
						
					</ul>
				</li>
				<li <?php if ($this->uri->segment(2)=="feedback" || $this->uri->segment(2)=="feedback_details" || $this->uri->segment(2)=="outbox"  ){ echo'class="start active "';}?>>
					<a href="javascript:;">
					<i class="fa fa-envelope-o"></i>
					<span class="title">
					Messages </span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($this->uri->segment(2)=="feedback" || $this->uri->segment(2)=="feedback_details" ){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/feedback">
							<span class="badge badge-roundless badge-danger">
							<?php echo $feedcount; ?> </span>
							Inbox</a>
						</li>
                        <li <?php if ($this->uri->segment(2)=="outbox"  ){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/outbox">
							
							Outbox</a>
						</li>
					</ul>
				</li>
				<li <?php if ($this->uri->segment(2)=="about_us" || $this->uri->segment(2)=="branch_information" ){ echo'class="start active "';}?> >
					<a href="javascript:;">
					<i class="fa fa-sitemap"></i>
					<span class="title">
					Company Information </span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($this->uri->segment(2)=="about_us" ){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/about_us">
							
							About Us</a>
						</li>
						<li <?php if ($this->uri->segment(2)=="branch_information" ){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/branch_information">
							
							Branches Information</a>
						</li>
						<li <?php if ($this->uri->segment(2)=="service_information" ){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/service_information">
							
							Services</a>
						</li>
					</ul>
				</li>		 

                <li <?php if ($this->uri->segment(2)=="customers" ){ echo'class="start active "';}?>>
					<a href="javascript:;">
						<i class="fa fa-users"></i>
						<span class="title">
							Customer Management
						</span>
						<span class="arrow">
						</span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($this->uri->segment(2)=="customers" ){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/customers">
							Customer Information</a>
						</li>
					</ul>
				</li>
				
				<li <?php if ($this->uri->segment(2)=="user_role" || $this->uri->segment(2)=="user_menu" || $this->uri->segment(2)=="user_privileges" ||$this->uri->segment(2)=="system_users"){ echo'class="active "';}?>>
					<a href="javascript:;">
					<i class="fa fa-user"></i>
					<span class="title">
					User Management </span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($this->uri->segment(2)=="user_role"){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/user_role">
							User Roles</a>
						</li>
						<li <?php if ($this->uri->segment(2)=="user_menu"){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/user_menu">
							User Menu </a>
						</li>
						<li <?php if ($this->uri->segment(2)=="user_privileges"){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/user_privileges">
							User Privileges</a>
						</li>
						<li <?php if ($this->uri->segment(2)=="system_users"){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/system_users">
							System Users </a>
						</li>
						<li <?php if ($this->uri->segment(2)=="team_members"){ echo'class="start active "';}?>>
							<a href="<?php echo base_url(); ?>index.php/admin/team_members">
							Team Members </a>
						</li>
					</ul>
				</li>
				<li  <?php if ($this->uri->segment(2)=="reports"){ echo'class="start active "';}else {echo'class="last"';}?> >
					<a href="<?php echo base_url(); ?>index.php/admin/reports">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">
					Reports </span>
					</a>
				</li>

				<!-- <li  <?php if ($this->uri->segment(2)=="test"){ echo'class="start active "';}else {echo'class="last"';}?> >
					<a href="<?php echo base_url(); ?>index.php/admin/test">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">
					Test </span>
					</a>
				</li> -->
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR