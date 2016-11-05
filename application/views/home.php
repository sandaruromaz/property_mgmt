

  <!--======= BANNER =========-->
  <div id="banner">
    <div class="flex-banner">
      <ul class="slides">
	  
	     <!--======= SLIDER =========-->
	  	<?php if (count($slider)){ 
            foreach ($slider-> result_array() as $row){
            ?>     
			<li> <img src="<?php echo base_url()?>assets/images/slider/<?php echo $row['main_img'];?>" alt="" >
		 <?php }} ?> 
        <!--======= END SLIDER =========-->  
           
        </li>
      </ul>
    </div>
  </div>


  <!--======= FIND PROPERTY =========-->
     <div class="finder">
      <div class="container">
        <h1>Welcome to JCK Constructions</h1>

        <!--======= FORM SECTION =========-->
        <div class="find-sec">
          <ul class="row">

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Square Feets</label>
               <input type="text" class="square" placeholder="" >
            </li>

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>No of floors</label>
              <select class="selectpicker">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </li>

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Walls</label>
              <select class="selectpicker">
                <option>Bric</option>
                <option>Block</option>

              </select>
            </li>

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Floor</label>
              <select class="selectpicker">
                <option>Tile</option>
                <option>Titanium</option>
                <option>Wooden</option>
              </select>
            </li>

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Roof</label>
              <select class="selectpicker">
                <option>Asbestos</option>
                <option>Tile</option>
              </select>
            </li>

            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Door/Windows</label>
              <select class="selectpicker">
                <option>Wooden</option>
                <option>Aluminium</option>

              </select>
            </li>

              <!--======= Pricing Range =========-->
            <li class="col-sm-3">
                  <button type="submit" class="btn bnrbtn">Request for a quote</button>
                
            </li>
                <!--======= BUTTON =========-->
                 <li class="col-sm-3">
                  <button type="submit" class="btn bnrbtn">Search for a property</button>
                
            </li>
          </ul>
        </div>
      </div>
    </div>
  
  <!--======= SERVICES =========-->
  <section class="services">
    <div class="container"> 
      
      <!--======= TITTLE =========-->
      <div class="tittle"> <img src="<?php echo base_url()?>assets/images/head-top.png" alt="">
        <h3>services we provide</h3>
        <p>This time there's no stopping us. Straightnin' the curves. Flatnin' the hills Someday the mountain might get ‘em but the law never will. The weather started getting rough - the tiny ship was tossed.</p>
      </div>
      <ul class="row">
        
        <!--======= SERVICE SECTION =========-->
        <li class="col-sm-3">
          <section> 
            <!--======= SERVICE IMG =========--> 
            <img class="img-responsive" src="<?php echo base_url()?>assets/images/service-img-1.jpg" alt="" >
            <div class="icon"> <img src="<?php echo base_url()?>assets/images/icon-services-1.png" alt=""> </div>
            
            <!--======= SERVICE HOVER =========-->
            <div class="ser-hover">
              <p>And when the odds are against him and their dangers work to do. You bet your life Speed Racer <a href="#." class="read-more">Read more <i class="fa fa-angle-double-right"></i></a> </p>
            </div>
            <a href="#." class="heading">Residential</a> </section>
        </li>
        
        <!--======= SERVICE SECTION =========-->
        <li class="col-sm-3">
          <section> 
            <!--======= SERVICE IMG =========--> 
            <img class="img-responsive" src="<?php echo base_url()?>assets/images/service-img-2.jpg" alt="" >
            <div class="icon"> <img src="<?php echo base_url()?>assets/images/icon-services-2.png" alt=""> </div>
            
            <!--======= SERVICE HOVER =========-->
            <div class="ser-hover">
              <p>And when the odds are against him and their dangers work to do. You bet your life Speed Racer <a href="#." class="read-more">Read more <i class="fa fa-angle-double-right"></i></a> </p>
            </div>
            <a href="#." class="heading">industrial</a> </section>
        </li>
        
        <!--======= SERVICE SECTION =========-->
        <li class="col-sm-3">
          <section> 
            <!--======= SERVICE IMG =========--> 
            <img class="img-responsive" src="<?php echo base_url()?>assets/images/service-img-3.jpg" alt="" >
            <div class="icon"> <img src="<?php echo base_url()?>assets/images/icon-services-3.png" alt=""> </div>
            
            <!--======= SERVICE HOVER =========-->
            <div class="ser-hover">
              <p>And when the odds are against him and their dangers work to do. You bet your life Speed Racer <a href="#." class="read-more">Read more <i class="fa fa-angle-double-right"></i></a> </p>
            </div>
            <a href="#." class="heading">Asset management</a> </section>
        </li>
        
        <!--======= SERVICE SECTION =========-->
        <li class="col-sm-3">
          <section> 
            <!--======= SERVICE IMG =========--> 
            <img class="img-responsive" src="<?php echo base_url()?>assets/images/service-img-4.jpg" alt="" >
            <div class="icon"> <img src="<?php echo base_url()?>assets/images/icon-services-4.png" alt=""> </div>
            
            <!--======= SERVICE HOVER =========-->
            <div class="ser-hover">
              <p>And when the odds are against him and their dangers work to do. You bet your life Speed Racer <a href="#." class="read-more">Read more <i class="fa fa-angle-double-right"></i></a> </p>
            </div>
            <a href="#." class="heading">financial support</a> </section>
        </li>
      </ul>
    </div>
  </section>
  
  <!--======= MOBILE APP =========-->
  <!--<section class="mobile-app">
    <div class="container">
      <div class="row">
        <div class="col-md-6"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/iphone.png" alt=""> </div>
        <div class="col-md-6">
          <h3>Search home everywhere you go</h3>
          <hr>
          <p>Flatnin' the hills Someday the mountain might get ‘em but the law never will. And when the odds are against him and their dangers work to do. You bet your life Speed Racer he will see it through.</p>
          <a href="#." class="btn">get the realtor app</a> </div>
      </div>
    </div>
  </section>-->
  
  <!--======= PROPERTY =========-->
  <section class="properties white-bg">
    <div class="container"> 
      
      <!--======= TITTLE =========-->
      <div class="tittle"> <img src="<?php echo base_url()?>assets/images/head-top.png" alt="">
        <h3>new properties list</h3>
        <p>This time there's no stopping us. Straightnin' the curves. Flatnin' the hills Someday the mountain might get ‘em but the law never will. The weather started getting rough - the tiny ship was tossed.</p>
      </div>
      
      <!--======= PROPERTIES ROW =========-->
      <ul class="row">
        
        <!--======= PROPERTY =========-->
        <li class="col-sm-4"> 
          <!--======= TAGS =========--> 
          <span class="tag font-montserrat rent">FOR RENT</span>
          <section> 
            <!--======= IMAGE =========-->
            <div class="img"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/img-1.jpg" alt="" > 
              <!--======= IMAGE HOVER =========-->
              
              <div class="over-proper"> <a href="#." class="btn font-montserrat">more details</a> </div>
            </div>
            <!--======= HOME INNER DETAILS =========-->
            <ul class="home-in">
              <li><span><i class="fa fa-home"></i> 20,000 Acres</span></li>
              <li><span><i class="fa fa-bed"></i> 3 Bedrooms</span></li>
              <li><span><i class="fa fa-tty"></i> 3 Bathrooms</span></li>
            </ul>
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." class="font-montserrat">sweet home for small family</a> <span class="locate"><i class="fa fa-map-marker"></i> Boston,USA</span>
              <p>Till the one day when the lady met this fellow and they knew it was much more than </p>
              <div class="share-p"> <span class="price font-montserrat">$ 256,596</span> <i class="fa fa-star-o"></i> <i class="fa fa-share-alt"></i> </div>
            </div>
          </section>
        </li>
        
        <!--======= PROPERTY =========-->
        <li class="col-sm-4"> 
          <!--======= TAGS =========--> 
          <span class="tag font-montserrat rent">FOR RENT</span>
          <section> 
            <!--======= IMAGE =========-->
            <div class="img"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/img-2.jpg" alt="" > 
              <!--======= IMAGE HOVER =========-->
              
              <div class="over-proper"> <a href="#." class="btn font-montserrat">more details</a> </div>
            </div>
            <!--======= HOME INNER DETAILS =========-->
            <ul class="home-in">
              <li><span><i class="fa fa-home"></i> 20,000 Acres</span></li>
              <li><span><i class="fa fa-bed"></i> 3 Bedrooms</span></li>
              <li><span><i class="fa fa-tty"></i> 3 Bathrooms</span></li>
            </ul>
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." class="font-montserrat">sweet home for small family</a> <span class="locate"><i class="fa fa-map-marker"></i> Boston,USA</span>
              <p>Till the one day when the lady met this fellow and they knew it was much more than </p>
              <div class="share-p"> <span class="price font-montserrat">$ 256,596</span> <i class="fa fa-star-o"></i> <i class="fa fa-share-alt"></i> </div>
            </div>
          </section>
        </li>
        
        <!--======= PROPERTY =========-->
        <li class="col-sm-4"> 
          <!--======= TAGS =========--> 
          <span class="tag font-montserrat sale">FOR SALE</span>
          <section> 
            <!--======= IMAGE =========-->
            <div class="img"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/img-3.jpg" alt="" > 
              <!--======= IMAGE HOVER =========-->
              
              <div class="over-proper"> <a href="#." class="btn font-montserrat">more details</a> </div>
            </div>
            <!--======= HOME INNER DETAILS =========-->
            <ul class="home-in">
              <li><span><i class="fa fa-home"></i> 20,000 Acres</span></li>
              <li><span><i class="fa fa-bed"></i> 3 Bedrooms</span></li>
              <li><span><i class="fa fa-tty"></i> 3 Bathrooms</span></li>
            </ul>
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." class="font-montserrat">sweet home for small family</a> <span class="locate"><i class="fa fa-map-marker"></i> Boston,USA</span>
              <p>Till the one day when the lady met this fellow and they knew it was much more than </p>
              <div class="share-p"> <span class="price font-montserrat">$ 256,596</span> <i class="fa fa-star-o"></i> <i class="fa fa-share-alt"></i> </div>
            </div>
          </section>
        </li>
        
        <!--======= PROPERTY =========-->
        <li class="col-sm-4"> 
          <!--======= TAGS =========--> 
          <span class="tag font-montserrat rent">FOR RENT</span>
          <section> 
            <!--======= IMAGE =========-->
            <div class="img"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/img-4.jpg" alt="" > 
              <!--======= IMAGE HOVER =========-->
              
              <div class="over-proper"> <a href="#." class="btn font-montserrat">more details</a> </div>
            </div>
            <!--======= HOME INNER DETAILS =========-->
            <ul class="home-in">
              <li><span><i class="fa fa-home"></i> 20,000 Acres</span></li>
              <li><span><i class="fa fa-bed"></i> 3 Bedrooms</span></li>
              <li><span><i class="fa fa-tty"></i> 3 Bathrooms</span></li>
            </ul>
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." class="font-montserrat">sweet home for small family</a> <span class="locate"><i class="fa fa-map-marker"></i> Boston,USA</span>
              <p>Till the one day when the lady met this fellow and they knew it was much more than </p>
              <div class="share-p"> <span class="price font-montserrat">$ 2,956,596</span> <i class="fa fa-star-o"></i> <i class="fa fa-share-alt"></i> </div>
            </div>
          </section>
        </li>
        
        <!--======= PROPERTY =========-->
        <li class="col-sm-4"> 
          <!--======= TAGS =========--> 
          <span class="tag font-montserrat sale">FOR SALE</span>
          <section> 
            <!--======= IMAGE =========-->
            <div class="img"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/img-5.jpg" alt="" > 
              <!--======= IMAGE HOVER =========-->
              
              <div class="over-proper"> <a href="#." class="btn font-montserrat">more details</a> </div>
            </div>
            <!--======= HOME INNER DETAILS =========-->
            <ul class="home-in">
              <li><span><i class="fa fa-home"></i> 20,000 Acres</span></li>
              <li><span><i class="fa fa-bed"></i> 3 Bedrooms</span></li>
              <li><span><i class="fa fa-tty"></i> 3 Bathrooms</span></li>
            </ul>
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." class="font-montserrat">sweet home for small family</a> <span class="locate"><i class="fa fa-map-marker"></i> Boston,USA</span>
              <p>Till the one day when the lady met this fellow and they knew it was much more than </p>
              <div class="share-p"> <span class="price font-montserrat">$ 256,596</span> <i class="fa fa-star-o"></i> <i class="fa fa-share-alt"></i> </div>
            </div>
          </section>
        </li>
        
        <!--======= PROPERTY =========-->
        <li class="col-sm-4"> 
          <!--======= TAGS =========--> 
          <span class="tag font-montserrat rent">FOR RENT</span>
          <section> 
            <!--======= IMAGE =========-->
            <div class="img"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/img-6.jpg" alt="" > 
              <!--======= IMAGE HOVER =========-->
              
              <div class="over-proper"> <a href="#." class="btn font-montserrat">more details</a> </div>
            </div>
            <!--======= HOME INNER DETAILS =========-->
            <ul class="home-in">
              <li><span><i class="fa fa-home"></i> 20,000 Acres</span></li>
              <li><span><i class="fa fa-bed"></i> 3 Bedrooms</span></li>
              <li><span><i class="fa fa-tty"></i> 3 Bathrooms</span></li>
            </ul>
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." class="font-montserrat">sweet home for small family</a> <span class="locate"><i class="fa fa-map-marker"></i> Boston,USA</span>
              <p>Till the one day when the lady met this fellow and they knew it was much more than </p>
              <div class="share-p"> <span class="price font-montserrat">$ 2,956,596</span> <i class="fa fa-star-o"></i> <i class="fa fa-share-alt"></i> </div>
            </div>
          </section>
        </li>
      </ul>
    </div>
  </section>
  
  <!--======= TEAM =========-->
  <section id="team" class="gray-bg">
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
  
  <!--======= TESTIMONILAS =========-->
 <!-- <section id="testimonials">
    <div class="container"> 
      
      <!--======= TITTLE =========-->
    <!--  <div class="tittle">
        <h3>some words from our customer</h3>
      </div>
      <div class="testi"> 
        
        <!--======= TESTIMONIALS SLIDERS CAROUSEL =========-->
    <!--    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="row">
            <div class="col-md-12"> <img src="<?php echo base_url()?>assets/images/comment-icon.png" alt="">
              <div class="carousel-inner" role="listbox"> 
                
                <!--======= SLIDER 1 =========-->
            <!--    <div class="item active">
                  <p>Can you tell me how to get how to get to Sesame Street. Believe it or not I'm walking on air. I never thought I could feel so free. The movie star the professor and Mary Ann here on Gilligans Isle. Just two good ol' boys</p>
                  <h5>mitchell warner</h5>
                  <span>Sydney, Australia</span> </div>
                
                <!--======= SLIDER 2 =========-->
       <!--         <div class="item">
                  <p>Can you tell me how to get how to get to Sesame Street. Believe it or not I'm walking on air. I never thought I could feel so free. The movie star the professor and Mary Ann here on Gilligans Isle. Just two good ol' boys</p>
                  <h5>JHON SMITH</h5>
                  <span>Sydney, Australia</span> </div>
                
                <!--======= SLIDER 3 =========-->
         <!--       <div class="item">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <h5>JHON SMITH</h5>
                  <span>Sydney, Australia</span> </div>
              </div>
            </div>
            
            <!--======= SLIDER AVATARS =========-->
     <!--       <div class="col-md-12">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> <img src="<?php echo base_url()?>assets/images/avatar-1.jpg" alt="" > </li>
                <li data-target="#carousel-example-generic" data-slide-to="1"> <img src="<?php echo base_url()?>assets/images/avatar-2.jpg" alt="" ></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"> <img src="<?php echo base_url()?>assets/images/avatar-3.jpg" alt="" ></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>