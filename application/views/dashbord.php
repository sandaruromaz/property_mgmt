

<!-- BREADCRUMBS -->
		<section class="breadcrumb parallax margbot30"></section>
		<!-- //BREADCRUMBS -->
		
		
		<!-- PAGE HEADER -->
		<section class="page_header">
			
			<!-- CONTAINER -->
			<div class="container">
				<h6 class="pull-left">Home &gt; Sign In or Registration</h6>				
				<div class="pull-right">
					<a href="women.html" >Back to shop<i class="fa fa-angle-right"></i></a>
				</div>
			</div><!-- //CONTAINER -->
		</section><!-- //PAGE HEADER -->
		
		
		<!-- ABOUT US INFO -->
		<section class="about_us_info">
			
			<!-- CONTAINER -->
			<div class="container">
            <h2 class=""><b>Sign In or Registration</b></h2>
            
            <div class="my_account_block clearfix">
					
					<div class="new_customers">
						<h2>NEW CUSTOMER</h2>
						<p>Register with MAYURA TradeCentre to enjoy personalized services, including:</p>
						<ul>
							<li>—  Online Order Status</a></li>
							<li>—  Love List</a></li>
							<li>—  Sign up to receive exclusive news</a></li>
                            <li>—  Special Discount</a></li>
							<li>—  Quick and easy checkout</a></li>
                            													
						</ul>
                        <div class="center"><a class="btn active" href="<?php echo base_url(); ?>index.php/pages/register" >create new account</a></div>
					</div>
                    <div class="login">
						<h2>I'M ALREADY REGISTERED</h2>
                        <?php /* $attributes = array('class' => 'login_form','id' => 'login_form');
							echo form_open('Customer/signin', $attributes); */?>
                            <form action="<?php echo base_url();?>index.php/customer/signin" method="POST" onsubmit="return logvalidatio()" class="login_form" id="login_form">
                              <input type="text" name="email2" placeholder="Enter your email" id="email2" />
                              <input class="last" type="password" id="pass2" name="pass2" placeholder="Enter your Password"  />
						  <div class="clearfix">
						    <div class="pull-left"><input type="checkbox" id="categorymanufacturer1" /><label for="categorymanufacturer1">Keep me signed</label></div>
								<div class="pull-right"><a class="forgot_pass" href="javascript:void(0);" >Forgot password?</a></div>
							</div>
							<div class="center"><input type="submit" value="Sign in"></div>
						</form>
					</div>
				</div>
				
				<!-- ROW -->
				
			</div><!-- //CONTAINER -->
		</section><!-- //ABOUT US INFO -->
