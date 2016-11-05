
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
                                  <h3>view bar</h3>
                           
 <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
      /*check wether user log in or not*/?>

            <?php if (count($user_data)){ 
                          foreach ($user_data-> result_array() as $row){
                          $profile = array('user' => $row); //we make new array so we can use it anyware    
                          }
                        
                          }
                        }


?>


                        <h4>Name </h4>


</br>
<h4>name</h4>

<?php if (count($test)){ 
              foreach ($test-> result_array() as $row){
              ?>
<form action="<?php echo base_url();?>index.php/customer/test_update/<?php echo $row['test_id']; ?>" method="POST" onsubmit="return logingvalidation()" class="login_form" id="login_form">
                                <div class="form-group">
                             <div class="has-error" >
                              <input type="text" name="test_name" class="form-control" value="<?php echo $row['test_name']; ?>" placeholder="" id="test_name" />
                      <span class='error'></span>
                      
                  
                    </div>
                            </div>
                              <div class="form-group">
                              <div class="has-error" >
                           <!--    <input type="text" class="form-control"  id="dox" name="dox" value="<?php echo $row['test_address']; ?>" readonly="readonly" placeholder="Enter your date of birth "/>
                     <span class='error'></span>
                    </div> -->

                     <div class="has-error" >
                              <input type="text" class="form-control"  id="test_address" name="test_address" value="<?php echo $row['test_address']; ?>"  placeholder="Enter your date of birth "/>
                     <span class='error'></span>
                    </div>
                              </div>


                              <div class="form-group">
                             <div class="has-error" >
                              <input type="text" name="test_number" class="form-control" value="<?php echo $row['test_number']; ?>" placeholder="Enter your number" id="test_number" />
                      <span class='error'></span>
                    </div>
                            </div>

                 <div class="login_button sign">  
                          <button type="submit" class="btn btn-default login_btn">In</button>
                        </div>
                          </form>




<?php }}?>

</br>
                           

                       
                        </div>
                     
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