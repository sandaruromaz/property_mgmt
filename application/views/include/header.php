   <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
      /*check wether user log in or not*/?>
      <?php if (count($user_data)){ 
      foreach ($user_data-> result_array() as $row){
      $profile = array('user' => $row); //we make new array so we can use it anyware    
      }
    
      }
    }
      ?>
    
	  
	  <div id="wrap" class="home-1">
              <!--======= TOP BAR =========-->

		<div class="top-bar">
    <div class="container">
      <ul class="left-bar-side">
        <li>
          <p><i class="fa fa-phone"></i> Call Us Now : +94 38 225 58 89 </p>
          <span>|</span> </li>
        <li>
          <p><i class="fa fa-envelope-o"></i>info@jckconstruct.com</p>
          <span>|</span> </li>
        <li>
          <p><i class="fa fa-lock"></i> Login / Register </p>
          <span>|</span> </li>
      </ul>
      <ul class="right-bar-side social_icons">
        <li class="facebook"> <a href="www.facebook.com/JCKConstruct"><i class="fa fa-facebook"></i> </a></li>
        <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a></li>
        <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a></li>
        <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a></li>
      </ul>
    </div>
  </div>
  <!--end HEADER  -->
           
			
			
           <!--<div class="row">
		   
             <div class="searcharea">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {?>
                <div class="clientname">
                Hi, <?php  echo $profile['user']['title'].'. '.$profile['user']['fname'].' '. $profile['user']['lname']; ?>
                </div>
              <?php }?>
             


             
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              </div>
             </div>
           </div>-->

            
          
            
<!--======= HEADER =========-->


   <!--======= HEADER =========-->
  <header class="sticky">
    <div class="container">

      <!--======= LOGO =========-->
      <div class="logo"> <a href="#."><img class="logo-img" src="<?php echo base_url()?>assets/images/logo.png" alt="" ></a> </div>
      
      <!--======= NAV =========-->
      <nav>

        <!--======= MENU START =========-->
        <ul class="ownmenu">
          <li class="active"><a href="<?php echo base_url()?>index.php">Home</a></li>
          <li><a href="<?php echo base_url()?>index.php/pages/aboutus">About </a></li>
          <li><a href="<?php echo base_url()?>index.php/pages/services">Services</a>
                <ul class="dropdown">
                    <li><a href="<?php echo base_url()?>index.php/pages/services">Property brokering</a></li>
                    <li><a href="<?php echo base_url()?>index.php/">Project management</a></li>
                    <li><a href="<?php echo base_url()?>index.php/">Consultancy</a></li>
                    <li><a href="<?php echo base_url()?>index.php/">Interior designing</a></li>
                </ul>
          </li>
          <li><a href="<?php echo base_url()?>index.php/">Properties</a></li>
          <li><a href="<?php echo base_url()?>index.php/">Our Team</a></li>
          <li><a href="<?php echo base_url()?>index.php/pages/contact">Contact Us</li>
          <li><a href="<?php echo base_url()?>index.php/">Recent works</a>

            <!--======= MEGA MENU =========-->
            <div class="megamenu full-width">
              <h6>Recent Works</h6>
              <div class="row nav-post">
                <div class="col-sm-4 boder-da-r">
                  <ul>
                    <li><a href="http://www.gartonscape.com/">Garton's Cape Hotel</a></li>
                    <!-- <li><a href="02-Homepage-02.html">Home 2</a></li>
                    <li><a href="03-Homepage-03.html">Home 3</a></li> -->
                    <li><a href="#">Rajawasala Housing scheme</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul>
                  </ul>
                </div>
                <div class="col-sm-4"> <img class="absu" src="images/nav-image.png" alt="" > </div>
              </div>
            </div>
          </li>
        </ul>

        <!--======= SUBMIT COUPON =========-->
        <div class="sub-nav-co"> <a href="#."><i class="fa fa-search"></i></a> </div>
      </nav>
    </div>
  </header>
  
  
            
    
    
