  <style>
  .ui-datepicker-title{
    color: #000 !important;
  }
</style>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" /> 
 <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
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
							test
						</h2>
						             <!-- Error Message-->		
								
					   </div> 

					   <!--code-->	
                      <div itemprop="articleBody" class="login_page" >
							<div class="row">
                            	
                                <div class="col-xs-12 col-sm-12 col-md-6 login_area eq_height">
                                  <h3>reg bar</h3>
                                	<form action="<?php echo base_url();?>index.php/customer/test_add" method="POST" onsubmit="return testvalidation()" class="login_form" id="login_form">
                                <div class="form-group">
                             <div class="has-error" >
                              <input type="text" name="test_name" class="form-control" placeholder="Enter your name" id="test_name" />
            					<span class='error'></span>
        					  </div>
                            </div>
                              <div class="form-group">
                              <div class="has-error" >
                              <input  type="text" class="form-control"  id="test_address" name="test_address" placeholder="Enter your add"  />
                              <span class='error'></span>
        					  </div>
                              </div>


                              <div class="form-group">
                             <div class="has-error" >
                              <input type="text" name="test_number" class="form-control" placeholder="Enter your number" id="test_number" />
                      <span class='error'></span>
                    </div>
                            </div>


                             <div class="form-group">
                             <div class="has-error" >
           <input type="text" class="form-control"  id="dot" name="dot" readonly="readonly" placeholder="Enter your date  "/>
                    
                      <span class='error'></span>
                    </div>
                            </div>

                           

                            
                            <div class="login_button sign">  
                          <button type="submit" class="btn btn-default login_btn">In</button>
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
      <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
    <script src=" <?php echo base_url(); ?>assets/js/validation/testval.js" type="text/javascript"></script>
			

      <script type="text/javascript">

			jQuery(document).ready(function(){

			jQuery('#equalheight .eq_height').equalHeights();  


      $( "#dot" ).datepicker({ 
        dateFormat: "yy-mm-dd",
        changeMonth: true,//this option for allowing user to select month
        changeYear: true, //this option for allowing user to select from year range
        maxDate: '-18Y',
        //maxDate: new Date() 
        });
			});    

			</script>






    