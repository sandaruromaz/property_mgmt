<?php if (isset($_SESSION['user_id']))
			{		 redirect('/', 'location');	 		}
		?>

            <!--main contet-->
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="content">

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="body-content">

                    <!-- Breadcrumbs  -->
                    <div class="ft-breadcrumbs">
                        
                    </div>
                    
                    
                      <div class="page-header">
						<h2 itemprop="name">
							Sign In or Registration
						</h2>
						             <!-- Error Message-->		
								<?php if($this -> session -> userdata('errorlogin')){ ?>		
                                <div class="alert alert-danger">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong><?php echo $this -> session -> userdata('errorlogin'); ?></strong> 
                                </div>
                                <?php $this->session->unset_userdata('errorlogin');}?>
                                <!-- Error Message-->
								<?php if($this -> session -> userdata('Successlogin')){ ?>		
                                <div class="alert alert-success">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong><?php echo $this -> session -> userdata('Successlogin'); ?></strong>
                                </div>                               
                                <?php $this->session->unset_userdata('Successlogin');}?>
					   </div> 

					   <!--code-->	
                      <div itemprop="articleBody" class="login_page" >
							<div class="row">
                            	<div class="col-xs-12 col-sm-12 col-md-6 login_details eq_height">
                                	<h3>New Customer</h3>
                                    <p>Register with <span class="login_titl">New Monis Bakery</span> to enjoy personalized services, including:</p>
                                    <ul>
                                    	<li>- Online Order Status</li>
                                    	<li>- Love List</li>
                                        <li>- Sign up to receive exclusive news</li>
                                        <li>- Special Discount</li>
                                        <li>- Quick and easy checkout</li>
                                    </ul>
                                    <div class="col-xs-12 col-sm-12 col-md-12 login_button">
                                    <a href="<?php echo base_url(); ?>index.php/pages/register"  class="btn btn-default login_btn" >Create New Account</a>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 login_area eq_height">
                                  <h3>I'm Already Registered</h3>
                                	<form action="<?php echo base_url();?>index.php/customer/signin" method="POST" onsubmit="return logingvalidation()" class="login_form" id="login_form">
                                <div class="form-group">
                             <div class="has-error" >
                              <input type="text" name="email2" class="form-control" placeholder="Enter your email" id="emaillogin" />
            					<span class='error'></span>
        					  </div>
                            </div>
                              <div class="form-group">
                              <div class="has-error" >
                              <input  type="password" class="form-control"  id="passlogin" name="pass2" placeholder="Enter your Password"  />
                              <span class='error'></span>
        					  </div>
                              </div>
                               <div class="form-group forgot_pass">
                              <a  href="<?php echo base_url(); ?>index.php/pages/forgotten_password" class="forgot_pass">Forgot Password?</a>
                              </div>
                            <div class="login_button sign">  
                          <button type="submit" class="btn btn-default login_btn">Sign In</button>
                        </div>
                          </form>
                                </div>
                            </div>
					   </div>

						<!--code-->
                    </div> 
                  </div>

            </div>
           </div>
           </div>
           <!--end main contet-->
			<script src="<?php echo base_url(); ?>assets/js/jquery.equalheights.js"></script>
			<script type="text/javascript">
			jQuery(document).ready(function(){
			jQuery('#equalheight .eq_height').equalHeights();  
			});    
			</script>