<div class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h1>ABOUT US</h1>
        <ol class="breadcrumb">
          <li class="pull-left">ABOUT us</li>
          <li><a href="#">Home</a></li>
          <li class="active">ABOUT Us</li>
        </ol>
      </div>
    </div>
  </div>
  <!--======= WHAT WE DO =========-->
  <section class="what-we-do">
    <div class="container"> 
    
      <!--======= TITTLE =========-->
      <div class="tittle"> <img src="<?php echo base_url()?>assets/images/head-top.png" alt="">
        <h3>who we are</h3>
        <p>J.C.K. Construction began as a general works contractor in 1999. Over the years, the Company has undertaken many challenging projects and accumulated skills, know how and experiences in design and build solutions, project management services, building trades and related engineering works..</p>
      </div>
      <div role="tabpanel"> 
              <?php if (count($about)){ 
              foreach ($about-> result_array() as $row){
              ?>



<?php echo $row['vision']; ?>
<?php //echo $row['mission']; ?>
<?php// echo $row['name']; ?>
<?php// echo $row['position']; ?>
<?php// echo $row['about']; ?>
<?php //echo $row['history']; ?>
                                            

        
        <!--======= NAV TABS =========-->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#what-we" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-bullhorn"></i> <span class="font-montserrat">what we do</span></a></li>
          <li role="presentation"><a href="#mission" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-rocket"></i><span class="font-montserrat">our mission</span></a></li>
          <li role="presentation"><a href="#vision" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-lightbulb-o"></i><span class="font-montserrat">our vision</span></a></li>
        </ul>
        
       <!--======= TAB CONTENT =========-->
        <div class="tab-content">

        <!--======= WHAT WE DO =========-->
          <div role="tabpanel" class="tab-pane animated-6s flipInX active" id="what-we">
            <h4>we make your your dream come true</h4>
            <p>To procure projects at competitive pricing, provide safe working conditions and Deliver quality PRODUCT within reasonable time frame</p>
          </div>

          <!--======= OUR MISSION =========-->
          <div role="tabpanel" class="tab-pane animated-6s flipInX" id="mission">
            <h4>we make your your dream come true</h4>
            <p>To procure projects at competitive pricing, provide safe working conditions and
Deliver quality PRODUCT within reasonable time frame.
 </p>
          </div>

          <!--======= OUR VISION =========-->
          <div role="tabpanel" class="tab-pane animated-6s flipInX" id="vision">
            <h4>we make your your dream come true</h4>
            <p>To be a respectable Developer delivering beyond expectation </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--======= TEAM =========-->
  <section id="team">
    <div class="container"> 
      
      <!--======= TITTLE =========-->
      <div class="tittle"> <img src="<?php echo base_url()?>assets/images/head-top.png" alt="">
        <h3>our great agents</h3>
        <p>This time there's no stopping us. Straightnin' the curves. Flatnin' the hills Someday the mountain might get ‘em but the law never will. The weather started getting rough - the tiny ship was tossed.</p>
      </div>
      <div class="row">
        <div class="col-md-6"> 
          
          <!--======= TEAM ROW =========-->
          <ul class="row">
            
            <!--======= TEAM =========-->
            <li class="col-sm-6">
              <div class="team"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/agent-1.jpg" alt="">
                <div class="team-over"> 
                  <!--======= SOCIAL ICON =========-->
                  <ul class="social_icons animated-6s fadeInUp">
                    <li class="facebook"><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
                
                <!--======= TEAM DETAILS =========-->
                <div class="team-detail">
                  <h6>David Martin</h6>
                  <p>Founder</p>
                </div>
              </div>
            </li>
            
            <!--======= TEAM =========-->
            <li class="col-sm-6">
              <div class="team"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/agent-2.jpg" alt="">
                <div class="team-over"> 
                  <!--======= SOCIAL ICON =========-->
                  <ul class="social_icons animated-6s fadeInUp">
                    <li class="facebook"><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
                
                <!--======= TEAM DETAILS =========-->
                <div class="team-detail">
                  <h6>Hendrick jack </h6>
                  <p>co-Founder</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6"> 
          
          <!--======= TEAM ROW =========-->
          <ul class="row">
            
            <!--======= TEAM =========-->
            <li class="col-sm-6">
              <div class="team"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/agent-3.jpg" alt="">
                <div class="team-over"> 
                  <!--======= SOCIAL ICON =========-->
                  <ul class="social_icons animated-6s fadeInUp">
                    <li class="facebook"><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
                
                <!--======= TEAM DETAILS =========-->
                <div class="team-detail">
                  <h6>charles edward </h6>
                  <p>team leader </p>
                </div>
              </div>
            </li>
            
            <!--======= TEAM =========-->
            <li class="col-sm-6">
              <div class="team"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/agent-4.jpg" alt="">
                <div class="team-over"> 
                  <!--======= SOCIAL ICON =========-->
                  <ul class="social_icons animated-6s fadeInUp">
                    <li class="facebook"><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
                
                <!--======= TEAM =========-->
 <!--  <section id="team">
    <div class="container"> -->
      <!--======= TITTLE =========-->
   <!--    <div class="tittle"> <img src="images/head-top.png" alt="">
        <h3>OUR TEAM</h3>
        <!--<p>This time there's no stopping us. Straightnin' the curves. Flatnin' the hills Someday the mountain might get ‘em but the law never will. The weather started getting rough - the tiny ship was tossed.</p>-->
    <!--   </div>
      <div class="row">
        <div class="col-md-6"> -->

          <!--======= TEAM ROW =========-->
          <!-- <ul class="row">

            <!--======= TEAM =========-->
            <!-- <li class="col-sm-6">
              <div class="team"> <img class="img-responsive" src="images/prf1.jpg" alt="">
                <div class="team-over">
                  <!--======= SOCIAL ICON =========-->
                  <!-- <ul class="social_icons animated-6s fadeInUp">
                    <li class="facebook"><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div> -->

                 <!-- <!--======= TEAM DETAILS =========-->
              <!--   <div class="team-detail">
                  <h6>Janaka Kularatne</h6>
                  <p>Propertior</p>
                </div>
              </div>
            </li> --> 

            <!--======= TEAM =========-->
          <!--   <li class="col-sm-6">
              <div class="team"> <img class="img-responsive" src="images/prf2.jpg" alt="">
                <div class="team-over"> -->
                  <!--======= SOCIAL ICON =========-->
                 <!--  <ul class="social_icons animated-6s fadeInUp">
                    <li class="facebook"><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div> -->

                <!--======= TEAM DETAILS =========-->
     <!--            <div class="team-detail">
                  <h6>Indika Wijesena</h6>
                  <p>Project Engineer</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6"> -->

          <!--======= TEAM ROW =========-->
          <!-- <ul class="row"> -->

            <!--======= TEAM =========-->
            <!-- <li class="col-sm-6">
              <div class="team"> <img class="img-responsive" src="images/prf3.jpg" alt="">
                <div class="team-over"> -->
                  <!--======= SOCIAL ICON =========-->
                  <!-- <ul class="social_icons animated-6s fadeInUp">
                    <li class="facebook"><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div> -->

                <!--======= TEAM DETAILS =========-->
             <!--    <div class="team-detail">
                  <h6>Nuwan Premarathne</h6>
                  <p>Architect</p>
                </div>
              </div>
            </li>
 -->
            <!--======= TEAM =========-->
            <!-- <li class="col-sm-6">
              <div class="team"> <img class="img-responsive" src="images/prf4.jpg" alt="">
                <div class="team-over"> -->
                  <!--======= SOCIAL ICON =========-->
                  <!-- <ul class="social_icons animated-6s fadeInUp">
                    <li class="facebook"><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div> -->

                <!--======= TEAM DETAILS =========-->
           <!--      <div class="team-detail">
                  <h6>_</h6>
                  <p>_</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>  -->







                <!--======= TEAM DETAILS =========-->
                <div class="team-detail">
                  <h6>jessica wevins </h6>
                  <p>team leader</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <!--======= CALL US =========-->
 <?php }}?> 
  <section class="call-us">
    <div class="overlay">
      <div class="container">
        <ul class="row">
          <li class="col-sm-6">
            <h4>Do you want to sell your property ?</h4>
            <h6>Call us and list your property here</h6>
          </li>
          <li class="col-sm-4">
            <h1>+01 123 456 78</h1>
          </li>
          <li class="col-sm-2 no-padding"> <a href="#." class="btn">just contact us</a> </li>
        </ul>
      </div>
    </div>
  </section>
  
          
  <!--======= PARTHNER =========-->
  <!-- <section class="parthner">
    <div class="container"> --> 
      <!--======= TITTLE =========-->
     <!--  <div class="tittle"> <img src="<?php echo base_url()?>assets/images/head-top.png" alt="">
        <h3>our trusted partners</h3>
        <p>This time there's no stopping us. Straightnin' the curves. Flatnin' the hills Someday the mountain might get ‘em but the law never will. The weather started getting rough - the tiny ship was tossed.</p>
      </div> -->
      
      <!--======= PARTHNERS =========-->
      <!-- <div class="parthner-slide">
        <div class="part"> <a href="#."> <img src="<?php echo base_url()?>assets/images/parthner-img-1.png" alt="" > </a> </div> -->
        
        <!--======= PARTHNERS =========-->
        <!-- <div class="part"> <a href="#."> <img src="<?php echo base_url()?>assets/images/parthner-img-2.png" alt="" > </a> </div> -->
        
        <!--======= PARTHNERS =========-->
        <!-- <div class="part"> <a href="#."> <img src="<?php echo base_url()?>assets/images/parthner-img-3.png" alt="" > </a> </div> -->
        
        <!--======= PARTHNERS =========-->
       <!--  <div class="part"> <a href="#."> <img src="<?php echo base_url()?>assets/images/parthner-img-4.png" alt="" > </a> </div> -->
        
        <!--======= PARTHNERS =========-->
        <!-- <div class="part"> <a href="#."> <img src="<?php echo base_url()?>assets/images/parthner-img-5.png" alt="" > </a> </div> -->
        
        <!--======= PARTHNERS =========-->
       
      </div>
    </div>
  </section>
  
