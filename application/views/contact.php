  <style>
  .company_mail a{
    font-size: 11px;
    color:#a94442;
  }  
  .company_mail a{
    font-size: 11px;
  }      
  </style>    
   <!--  <script src="<?php echo base_url(); ?>assets/js/jquery.equalheights.js"></script> -->
      <!--main contet-->
            <!-- <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="content">

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="body-content">

                    <!-- Breadcrumbs  -->
                   <!--  <div class="ft-breadcrumbs">
                        
                    </div>
                    
                    
                      <div class="page-header">
						<h2 itemprop="name">
							Contact Us
						</h2>
					   </div> 
 <?php if (count($main_details)){ 
            foreach ($main_details-> result_array() as $row){
          ?>
               --> 
					   <!--code-->	
                      <!-- <div itemprop="articleBody" class="contact_page" id="">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact_map eq_height" id="googleMap">
                            <iframe src="<?php echo $row['map']; ?>" width="100%" height="322" frameborder="0" style="border:0"></iframe>
                            </div>
                          </div>
                     <div class="col-xs-12 col-sm-12 col-md-3  ">
                            <div class="contact_details eq_height">
                            <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4> Main Branch</h4>
                                <span class="company_name"><?php echo $row['name']; ?></span>
                                <span class="comapny_address"><?php echo $row['address']; ?></span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4> Phones</h4>
                                <p><span class="company_phone_one"><?php echo $row['contact1']; ?></span></p>
                                <p><span class="company_phone"><?php echo $row['contact2']; ?></span></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4> Email</h4>
                                <span class="company_mail"><a href="mailto:<?php echo $row['email']; ?>"><i class="fa fa-envelope"></i> <?php echo $row['email']; ?></a></span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4> Social Networks </h4>
                <div class="social-icon">               
            <a href="https://www.facebook.com/newmonisbakery" target="blank">
            <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/fb-icon.png" alt="Facebook"/>
            </a>
            
            <a href="https://plus.google.com/100267388996025386627/posts" target="blank">
            <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/g+.png" alt="Facebook"/>
            </a>

            <a href="http://www.tripadvisor.com/Restaurant_Review-g304136-d6754006-Reviews-New_Monis_Bakery_Restaurant-Kalutara_Western_Province.html" target="blank">
            <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/tripadvisor.png" alt="Facebook"/>
            </a>

                              </div>  

                                </div>
                            </div>

                            </div>
                          </div>
                        <?php } } ?>
                          <div class="col-xs-12 col-sm-12 col-md-3  ">
                            <div class="contact_part_three eq_height">
                            <h4>Contacts Form</h4>
                            <p>Sign in to save and share your Love List.</p> -->
                                                        	<!-- Error Message-->		
								<!-- <?php if($this -> session -> userdata('error')){ ?>		
                                <div class="alert alert-danger">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong><?php echo $this -> session -> userdata('error'); ?> </strong>
                                </div>
                                <?php $this->session->unset_userdata('error');}?> -->
                                <!-- Error Message-->
								<!-- <?php if($this -> session -> userdata('Success')){ ?>		
                                <div class="alert alert-success"> 
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong> <?php echo $this -> session -> userdata('Success'); ?></strong>
                                </div>                               
                                <?php $this->session->unset_userdata('Success');}?> -->
                                 <!--End Error Message-->

<!--  <form name"feedbackform" class="contact-form" action="<?php echo base_url();?>index.php/customer/sendFeedback" method="POST" onsubmit="return feedbackvalidation()"> -->
	<!--<label>Name</label> --> 
    
	<!-- <div class="form-group">
	<div class="has-error" >						               
   <input type="text" class="form-control" id="conname" name="name" placeholder="Name" >
  <span class='error'></span> 
	</div>
  </div> -->
  <!--<label>Email</label> --> 
    
  	<!-- <div class="form-group">
  	<div class="has-error" >
    <input type="text" class="form-control" id="conemail" name="femail" placeholder="Email" >
    <span class='error'></span> 
  	</div>
  	
	</div>
 -->

<!--<label>Phone</label> --> 
    
  <!-- <div class="form-group">
  	<div class="has-error" >
    <input type="text" class="form-control" id="conphone" name="phone" placeholder="Phone">
    <span class='error'></span> 
  </div>

	</div>
   -->

  <!--<label>Message</label> --> 
   
<!--     <div class="form-group">
    	 <div class="has-error" >
  <textarea class="form-control" rows="3" name="message" id="conmessage" placeholder="Message"></textarea>
  <span class='error'></span>
  </div>
 
	</div>
  

  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6">
  <button type="submit" class="btn btn-default">Reset</button>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6">
  <button type="submit" class="btn btn-default contact_send">Send</button>
  </div>
	</div>
		</form>
	
		</div>
                          </div>
                        </div>
      <div class="row location_info">
      <?php if (count($branch_details)){ 
       foreach ($branch_details-> result_array() as $row){
        ?>
        <div class="col-xs-12 col-sm-6 col-md-6 location_wrap">
          <div class="location_icon ">
            <span class="glyphicon glyphicon-map-marker location_map"></span>
          </div>
          <p><span class="location_name"><?php echo $row['location'];?> </span></p>
          <p><span class="location_no"><?php echo $row['address'];?></span></p>
          <p><span class="location_no"><?php echo $row['contact1'];?></span></p>
        </div>
        <?php } } ?>

      </div>

							
					   </div> -->

						<!--code-->
                    <!-- </div> 
                  </div> -->


            <!-- </div>
 
           </div>
           </div> -->
           <!--end main contet-->
    <!-- jQuery (JavaScript plugins) -->
   
<!--     <script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(6.502071, 79.979886),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
    <script type="text/javascript">
            jQuery(document).ready(function(){
               jQuery('#equalheight .eq_height').equalHeights();  
            });    
    </script> -->

<!--======= BANNER =========-->
  <div class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h1>CONTACT US</h1>
        <ol class="breadcrumb">
          <li class="pull-left">CONTACT US</li>
          <li><a href="#">Home</a></li>
          <li class="active">CONTACT US</li>
        </ol>
      </div>
    </div>
  </div>

  <!--======= MAP =========-->
  <div id="map"></div>
  <!--======= CONTACT =========-->
  <section class="contact">

    <!--======= CONTACT INFORMATION =========-->
    <div class="contact-info">
      <div class="container">
        <!--======= CONTACT =========-->
        <ul class="row con-det">

          <!--======= ADDRESS =========-->
          <li class="col-md-4"> <i class="fa fa-map-marker"></i>
            <p>No 154, Horana Road, Weedagama, Bandaragama</p>
            <a href="#." class="font-montserrat">Show map </a> </li>

          <!--======= EMAIL =========-->
          <li class="col-md-4"> <i class="fa fa-phone"></i>
            <p>Tel  :  +01 123 456 78</p>
            <p>Mobile  :  +94 773 485048</p>
          </li>

          <!--======= ADDRESS =========-->
          <li class="col-md-4"> <i class="fa fa-clock-o"></i>
            <p>Week days  :     9:00 Am to 5:00 PM</p>
            <p>Saturday   :     9:00 Am to 12:00 PM</p>
            <p>Sunday     :     Holiday</p>
          </li>
        </ul>

        <!--======= CONTACT FORM =========-->

      </div>
    </div>
    <div class="contact-form">
      <div class="container">

        <!--======= TITTLE =========-->
        <div class="tittle"> <img src="images/head-top.png" alt="">
          <h3>feel free to communicate with us</h3>
          <!--<p>This time there's no stopping us. Straightnin' the curves. Flatnin' the hills Someday the mountain might get ‘em but the law never will. The weather started getting rough - the tiny ship was tossed.</p>-->
        </div>
        <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
        <form role="form" id="contact_form" method="post" onSubmit="return false">
          <ul class="row">
            <li class="col-sm-6">
              <label class="font-montserrat">your name *
                <input type="text" class="form-control" name="name" id="name" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">your e-mail *
                <input type="text" class="form-control" name="email" id="email" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Phone *
                <input type="text" class="form-control" name="company" id="company" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Subject
                <input type="text" class="form-control" name="website" id="website" placeholder="">
              </label>
            </li>
            <li class="col-sm-12">
              <label class="font-montserrat">message
                <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
              </label>
            </li>
            <li class="col-sm-12">
              <button type="submit" value="submit" class="btn font-montserrat" id="btn_submit" onClick="proceed();">Send message</button>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </section>

    
