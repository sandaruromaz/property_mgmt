
<style>
  .sorting_options{
    margin-top: 25px;
  }
  .count_tovar_items .cname{
    color: #000;
     font-size: 24px;
    line-height: 16px;
  }
  .sorting_options {
    border-bottom: 1px solid #66110c;
  }
  .shop_block{
    margin-top: 10px;
  }
</style>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name"> Customize Cake
</h2>  	
		
		<!-- BLOG BLOCK -->
		<section class="blog">
			

			
				  <!-- ROW -->
    <div class="row"> 
      
      <!-- SIDEBAR -->
      <div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50"> 
        
        <!-- CATEGORIES -->
						<div class="sidepanel widget_categories">
							<h3>Cake Catalog</h3>
							<ul>
							  <?php if($tcategories=='empty')
					echo " Sorry - No category found";
					else
					{
					foreach($tcategories as $acategories){?>
                <li><a href="<?php echo base_url();?>index.php/pages/design_category/<?php echo $acategories->apparel_category_id;?>/"><?php echo $acategories->name;?></a></li>
      
                <?php }} ?> 
							</ul>
						</div><!-- //CATEGORIES --> 
        
 
        
        
      </div>
      <!-- //SIDEBAR --> 
      
      <!-- SHOP PRODUCTS -->
      <div class="col-lg-9 col-sm-9 col-xs-12 padbot20"> 
       <?php   if($temp_apparel!='empty'){?> 
        <!-- SORTING TOVAR PANEL -->
        <div class="sorting_options "> 
          
          <!-- COUNT TOVAR ITEMS -->
          <span class="count_tovar_items">
            <span class="cname"><?php echo $type_name;?></span>
            <span><?php echo $product_count; ?> Items</span>
            </span>
          <!-- //COUNT TOVAR ITEMS --> 
          
          <!-- TOVAR FILTER -->
          <span class="product_sort" style="float: right;">
           
            VIEW
            <?php if(!isset($_SESSION['viewbyapparel'])){ $viewby=3;}else{$viewby=$_SESSION['viewbyapparel'];}?>
            <select class="basic view" onchange="window.location='<?php echo base_url(); ?>index.php/pages/apparelView/<?php echo $this->uri->segment(3); ?>/'+this.value">
             
              <option value="3" <?php if($viewby==3) echo 'selected="selected"';?>>3</option>
              <option value="9" <?php if($viewby==9) echo 'selected="selected"';?>>9</option>
              <option value="18" <?php if($viewby==18) echo 'selected="selected"';?>>18</option>
              <option value="1000" <?php if($viewby==1000) echo 'selected="selected"';?>>ALL</option>
            </select>
           
          </span>
          <!-- //TOVAR FILTER --> 
         
        </div>
        <!-- //SORTING TOVAR PANEL --> 
       <?php }?> 
         <!-- ROW -->
        <div class="row shop_block"> 
          
          <!-- TOVAR1 -->
          <?php 
						$i=1;
						if($temp_apparel!='empty')
						{
						foreach ($temp_apparel as $product)
						{
						
							?>
          <div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-12  ">
            <div class="tovar_item clearfix">
              <div class="tovar_img">
                <div class="tovar_img_wrapper"> 
                    <?php 
            $image_height = "200";
                  $image_width = "200";
            $product_image=$product->front_img;
                  $large_product_image =base_url().'assets/images/design/' . $product_image;
                  $thumb_product_image =base_url(). "assets/timthumb.php?src=" . $large_product_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
            ?>
                 <img class="img" src="<?php echo $thumb_product_image; ?>" alt="<?php echo $product->front_img; ?>" />
                 
              </div>
                <div class="tovar_item_btns">
                  <a class="open-project tovar_view" href="<?php echo base_url();?>index.php/customize/cake_design/<?php echo $product->customize_apparel_category_id;?>/<?php echo $product->apparel_product_id; ?>" >Start Designing</a>
                   </div>
              </div>
              <div class="tovar_description clearfix"> 
              <a class="tovar_title" href="<?php echo base_url();?>index.php/customize/cake_design/<?php echo $product->customize_apparel_category_id;?>/<?php echo $product->apparel_product_id; ?>" style="width: 100%;"><?php echo $product->apparel_name; ?></a> </div>
            </div>
          </div>
          <!-- //TOVAR1 -->
          <?php } } $i++;?>
        </div>
        <!-- //ROW -->
        
        <hr>
        <div class="clearfix">
          <?php   if($temp_apparel!='empty')
						{?>
          <!-- PAGINATION -->
          <div class="pagination clearfix"><?php echo $clinks; ?> </div>
          <!-- //PAGINATION -->
          <p>&nbsp;</p>
          
          <?php }else{
					echo "<p align='center'>There are no products matching the selection.<p><hr>";}
			?>
        </div>
        
       
        <!-- SHOP BANNER -->
        <div class="row top_sale_banners center">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner8.jpg" alt="" /></a></div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner7.jpg" alt="" /></a></div>
        </div>
        <!-- //SHOP BANNER --> 
      </div>
      <!-- //SHOP PRODUCTS --> 
    </div>
    <!-- //ROW --> 
</section>

</div>
</div>
</div>
</div>