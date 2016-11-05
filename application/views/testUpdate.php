<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" /> 
<style>
  .ui-datepicker-title{
    color: #000 !important;
  }
</style>


    <?php if($this -> session -> userdata('error')){ ?>   
                  <div class="alert alert-danger">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  <strong><?php echo $this -> session -> userdata('error'); ?></strong> 
                  </div>
                  <?php $this->session->unset_userdata('error');}?>
                  <!-- Error Message-->
                  <?php if($this -> session -> userdata('Success')){ ?>   
                  <div class="alert alert-success">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  <strong><?php echo $this -> session -> userdata('Success'); ?></strong>
                  </div>                               
                  <?php $this->session->unset_userdata('Success');}?>
                  </div> 
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
                                  <h3>update bar</h3>
                               
             
                                	<form action="<?php echo base_url();?>index.php/customer/test_update" method="POST" onsubmit="return logingvalidation()" class="login_form" id="login_form">
                                <div class="form-group">
                             <div class="has-error" >
                              <input type="text" name="test_name" class="form-control" placeholder="" id="test_name" />
            					<span class='error'></span>
                      
                  
        					  </div>
                            </div>
                              <div class="form-group">
                              <div class="has-error" >
                              <input type="text" class="form-control"  id="dox" name="dox" readonly="readonly" placeholder="Enter your date of birth "/>
                     <span class='error'></span>
        					  </div>
                              </div>


                              <div class="form-group">
                             <div class="has-error" >
                              <input type="text" name="test_number" class="form-control" placeholder="Enter your number" id="test_number" />
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
             <?}}?>



						<!--code-->
                    </div> 
                  </div>

            </div>
           </div>
           </div>
           <!--end main contet-->
			<script src="<?php echo base_url(); ?>assets/js/jquery.equalheights.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
        
			<script type="text/javascript">

			jQuery(document).ready(function(){
        
			jQuery('#equalheight .eq_height').equalHeights();  
			});    
	


 $( "#dox" ).datepicker({ 
  dateFormat: "yy-mm-dd",
  changeMonth: true,//this option for allowing user to select month
      changeYear: true, //this option for allowing user to select from year range
  maxDate: '-18Y',
  //maxDate: new Date() 
  });


    </script>