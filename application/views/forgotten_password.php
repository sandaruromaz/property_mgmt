

<!-- BREADCRUMBS -->
		<section class="breadcrumb parallax margbot30"></section>
		<!-- //BREADCRUMBS -->
		
		
		<!-- PAGE HEADER -->
		<section class="page_header">
			
			<!-- CONTAINER -->
			<div class="container">
				<h6 class="pull-left">Home &gt; Registration or Forgotten Your Password </h6>				
				
			</div><!-- //CONTAINER -->
		</section><!-- //PAGE HEADER -->
		
		
		<!-- ABOUT US INFO -->
		<section class="about_us_info">
			
			<!-- CONTAINER -->
			<div class="container">
            <h2 class=""><b>Registration or Forgotten Your Password</b></h2>
            <!-- Error Message-->		
								<?php if($this -> session -> userdata('errorforget')){ ?>		
                                <div class="alert alert-danger">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong><?php echo $this -> session -> userdata('errorforget'); ?></strong> 
                                </div>
                                <?php $this->session->unset_userdata('errorforget');}?>
                                <!-- Error Message-->
								<?php if($this -> session -> userdata('Successforget')){ ?>		
                                <div class="alert alert-success">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong><?php echo $this -> session -> userdata('Successforget'); ?></strong>
                                </div>                               
                                <?php $this->session->unset_userdata('Successforget');}?>
            
            <div class="my_account_block clearfix">
					

<div class="row" id="ac_first_tab">
              <div class="col-xs-12 col-sm-12 col-md-12 ac_small_account">
                <div class="row" id="ac_small_one">
                  <div class="col-xs-12 col-sm-12 col-md-12 ac_personal">
                    <div class="ac_myprof">
                      <div class="ac_profle">
                      <span class="glyphicon glyphicon-expand ac_toggle_up"></span>
                      <span style="display:none;" class="glyphicon glyphicon-collapse-down ac_toggle_up"></span>
                       <span class="ac_hdng"> Forgotten Your Password ?</span>
                    </div>
                      
                      <div class="ac_prof_details">

                    <div class="login">
						
                        <p>&nbsp;</p>
                        
                            <form action="<?php echo base_url();?>index.php/customer/reset_password" method="POST" onsubmit="return forgetvalidation()" class="login_form" id="login_form">
                              <div class="has-error" >
                              	<div class="col-sm-4">
                              <input type="text" name="forgetemail" placeholder="Enter your email" id="forgetemail" class="form-control"/><br/>
            					<span class='error'></span>

							<div class="center">
								<input type="submit" value="Reset Password" class="btn btn-default"  name="reset"></div>
						
        					  </div>
        					</div>
                         
						</form>
					</div>
				</div>

			</div></div></div></div></div></div></div>
				
				<!-- ROW -->
				
			</div><!-- //CONTAINER -->
		</section><!-- //ABOUT US INFO -->
