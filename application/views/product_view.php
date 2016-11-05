 <div class="container"> 

<!--======= BANNER =========-->
  <div class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h1>property listing</h1>
        <ol class="breadcrumb">
          <li class="pull-left">property listing</li>
          <li><a href="#">Home</a></li>
          <li class="active">property listing</li>
        </ol>
      </div>
    </div>
  </div>
 
<!--======= PROPERTY =========-->
  <section class="properties white-bg">
    <div class="container"> 
      
      <!--======= TITTLE =========-->
      <div class="tittle"> <img src="images/head-top.png" alt="">
        <h3>new properties list</h3>
        <p>This time there's no stopping us. Straightnin' the curves. Flatnin' the hills Someday the mountain might get ‘em but the law never will. The weather started getting rough - the tiny ship was tossed.</p>
      </div>
 
       
         
       <!--======= PROPERTIES ROW =========-->
      <ul class="row">
         <?php
        if($product == 'empty'){
          echo "Sorry - No Found Caregory";
        }else{
          foreach($product as $products) {
            
                ?>
        <!--======= PROPERTY =========-->
        <li class="col-sm-4"> 
            
          <!--======= TAGS =========--> 
          <span class="tag font-montserrat rent">FOR RENT</span>
           

          <div><?php echo $products->product_name; ?></div>
          <section> 
            <!--======= IMAGE =========-->
            <div class="img"> <img class="img-responsive" src="<?php echo base_url();?>assets/images/products/<?php //echo $products->img1; ?>" alt="<?php //echo $products->img1; ?>" > 

              <!--======= IMAGE HOVER =========-->
              
              <div class="over-proper"> <a href="#." class="btn font-montserrat">more details</a> </div>
            </div>
            <!--======= HOME INNER DETAILS =========-->
            <ul class="home-in">
              <li><span><i class="fa fa-home"></i> </span></li>
              <li><span><i class="fa fa-bed"></i>description 3 Bedrooms</span></li>
              <li><span><i class="fa fa-tty"></i> 3 Bathrooms</span></li>
            </ul>
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." class="font-montserrat"><?php echo $products->product_name; ?></a> <span class="locate"><i class="fa fa-map-marker"></i> Boston,USA</span>
              <p><?php echo $products->description; ?></p>
              <div class="share-p"> <span class="price font-montserrat"><?php echo $products->price; ?></span> <i class="fa fa-star-o"></i> <i class="fa fa-share-alt"></i> </div>
            </div>
            
          </section>
        </li>
        <?php }}?>
      </ul>







        </div>
      </section>
    </div>