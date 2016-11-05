<!-- BREADCRUMBS -->

<section class="breadcrumb men parallax margbot30" style="background-color:#F00"> 
  
  <!-- CONTAINER -->
  <div class="container">
    <h2>Men</h2>
  </div>
  <!-- //CONTAINER --> 
</section>
<!-- //BREADCRUMBS --> 

<!-- SHOP BLOCK -->
<section class="shop"> 
  
  <!-- CONTAINER -->
  <div class="container"> 
    
    <!-- ROW -->
    <div class="row"> 
      
      <!-- SIDEBAR -->
      <div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50"> 
        
        <!-- CATEGORIES -->
						<div class="sidepanel widget_categories">
							<h3>MEN</h3>
							<ul>
							  <?php if($categories=='empty')
					echo " Sorry - No category found";
					else
					{
					foreach($categories as $category){?>
                <li><a href="<?php echo base_url();?>index.php/shop/men/<?php echo $category->product_type_id;?>/<?php //echo url_title(strtolower($category->type_name));?>"><?php echo $category->type_name;?></a></li>
      
                <?php }} ?> 
							</ul>
						</div><!-- //CATEGORIES --> 
        
 
        
        <!-- SHOP BY SIZE -->
						<div class="sidepanel widget_sized">
							<h3>SHOP BY SIZE</h3>
							<input type="checkbox" id="XS" name="price" value=""/>
                              <label for="XS" class="">XS<span></span></label>
                              <input type="checkbox" id="S" name="price" value=""/>
                              <label for="S" class="" >S<span></span></label>
                    			<input type="checkbox" id="M" name="price" value=""/>
                              <label for="M" class="" >M<span></span></label>
                              <input name="price" type="hidden" id="" value="" />
                              <input type="checkbox" id="L" name="price" value=""/>
                              <label for="L" class="" >L<span></span></label>
						</div><!-- //SHOP BY SIZE --> 
        
        <form action="" id="sidepanel"><!-- SHOP BY COLOR -->
        <div class="sidepanel widget_color">
          <h3>SHOP BY COLOR</h3>
          <ul id="color">
            <li><a class="color1"  href="javascript:void(0);" onclick="setColorCode('#00ffff')"></a></li>
            <li ><a class="color2" href="javascript:void(0);" onclick="setColorCode('#ff00ff')"></a></li>
            <li><a class="color3" href="javascript:void(0);" onclick="setColorCode('#ffff00')"></a></li>
            <li><a class="color4" href="javascript:void(0);" onclick="setColorCode('#000')"></a></li>
            <li><a class="color5" href="javascript:void(0);" onclick="setColorCode('#000')"></a></li>
            <li><a class="color6" href="javascript:void(0);" onclick="setColorCode('#000')"></a></li>
            <li><a class="color7" href="javascript:void(0);" onclick="setColorCode('#000')"></a></li>
            <li><a class="color8" href="javascript:void(0);" onclick="setColorCode('')"></a></li>
          </ul>
        </div>
        <input name="colorcode" id="colorcode" type="hidden" value="" />
        <!-- //SHOP BY COLOR --> 
        
        <!-- SHOP BY BRANDS -->
        <div class="sidepanel widget_brands">
          <h3>SHOP BY BRANDS</h3>
          <input type="checkbox" id="categorymanufacturer1" name="brands[]" value="reborn"/>
          <label for="categorymanufacturer1" class="brands">REBORN<span>(24)</span></label>
          <input type="checkbox" id="categorymanufacturer2" name="brands[]" value="nolimit"/>
          <label for="categorymanufacturer2" class="brands" >Nolimit <span>(35)</span></label>
          <input type="checkbox" id="categorymanufacturer3" name=""/>
          <label for="categorymanufacturer3" class="brands">Calvin KlEin <span>(48)</span></label>
          <input type="checkbox" id="categorymanufacturer4" name=""/>
          <label for="categorymanufacturer4" class="brands">Tommy hilfiger <span>(129)</span></label>
          <input type="checkbox" id="categorymanufacturer5" name=""/>
          <label for="categorymanufacturer5" class="brands">Ralph Lauren <span>(69)</span></label>
          <input name="brand" type="hidden" id="brand" value="" />
        
        </div>
        <!-- //SHOP BY BRANDS --> </form>
                <!-- PRICE RANGE -->
        <div class="sidepanel widget_pricefilter">
          <h3>Filter by price</h3>
          <input type="checkbox" id="ch" name="price" value=""/>
          <label for="ch" class="">LKR100 - LKR500<span></span></label>
          <input type="checkbox" id="che" name="price" value=""/>
          <label for="che" class="" >LKR500 - LKR1000<span></span></label>

          <input name="price" type="hidden" id="" value="" />
        </div>
        <!-- //PRICE RANGE -->
        <!-- BANNERS WIDGET -->
        <div class="widget_banners"> <a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner10.jpg" alt="" /></a> <a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner9.jpg" alt="" /></a> <a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner8.jpg" alt="" /></a> </div>
        <!-- //BANNERS WIDGET --> 
        
        <!-- NEWSLETTER FORM WIDGET -->
        <div class="sidepanel widget_newsletter">
          <div class="newsletter_wrapper">
            <h3>NEWSLETTER</h3>
            <form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
              <input type="text" name="newsletter" value="Enter E-mail & Get 10% off" onFocus="if (this.value == 'Enter E-mail & Get 10% off') this.value = '';" onBlur="if (this.value == '') this.value = 'Enter E-mail & Get 10% off';" />
              <input class="btn newsletter_btn" type="submit" value="Sign up & get 10% off">
            </form>
          </div>
        </div>
        <!-- //NEWSLETTER FORM WIDGET --> 
      </div>
      <!-- //SIDEBAR --> 
      
      <!-- SHOP PRODUCTS -->
      <div class="col-lg-9 col-sm-9 padbot20"> 
        
        <!-- SORTING TOVAR PANEL -->
        <div class="sorting_options clearfix"> 
          
          <!-- COUNT TOVAR ITEMS -->
          <div class="count_tovar_items">
            <p> </p>
            <span><?php echo $product_count; ?>  <?php 
						?>Items</span> </div>
          <!-- //COUNT TOVAR ITEMS --> 
          
          <!-- TOVAR FILTER -->
          <div class="product_sort">
            <p>SORT BY</p>
            <?php if(!isset($_SESSION['orderby'])){ $select='product_name';}else{$select=$_SESSION['orderby'];}?>
            <select class="basic sort_by" onchange="window.location='<?php echo base_url(); ?>index.php/shop/productSort/<?php echo $this->uri->segment(3); ?>/'+this.value">
              <option value="product_name" <?php if($select=='product_name') echo 'selected="selected"';?>>Name</option>
              <option value="price" <?php if($select=='price') echo 'selected="selected"';?>>Price</option>
              <option value="last_updated_date" <?php if($select=='last_updated_date') echo 'selected="selected"';?>>Date</option>
            </select>
            <p>&nbsp;</p>
            <p>VIEW</p>
            <?php if(!isset($_SESSION['viewby'])){ $viewby=3;}else{$viewby=$_SESSION['viewby'];}?>
            <select class="basic view" onchange="window.location='<?php echo base_url(); ?>index.php/shop/productView/<?php echo $this->uri->segment(3); ?>/'+this.value">
              <option value="2" <?php if($viewby==2) echo 'selected="selected"';?>>2</option>
              <option value="3" <?php if($viewby==3) echo 'selected="selected"';?>>3</option>
              <option value="9" <?php if($viewby==9) echo 'selected="selected"';?>>9</option>
              <option value="18" <?php if($viewby==18) echo 'selected="selected"';?>>18</option>
              <option value="1000" <?php if($viewby==1000) echo 'selected="selected"';?>>ALL</option>
            </select>
          </div>
          <!-- //TOVAR FILTER --> 
          
          <!-- PRODUC SIZE -->
          <div id="toggle-sizes"> <a class="view_box active" href="javascript:void(0);"><i class="fa fa-th-large"></i></a> <a class="view_full" href="javascript:void(0);"><i class="fa fa-th-list"></i></a> </div>
          <!-- //PRODUC SIZE --> 
        </div>
        <!-- //SORTING TOVAR PANEL --> 
        
        <!-- ROW -->
        <div class="row shop_block"> 
          
          <!-- TOVAR1 -->
          <?php 
						$i=1;
						if($cresults!='empty')
						{
						foreach ($cresults as $product)
						{
						
							?>
          <div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40 ">
            <div class="tovar_item clearfix">
              <div class="tovar_img">
                <div class="tovar_img_wrapper"> <img class="img" src="<?php echo base_url();?>assets/images/tovar/men/<?php echo $product->img1; ?>" alt="<?php echo $product->img1; ?>" /> <img class="img_h" src="<?php echo base_url();?>assets/images/tovar/men/1_2.jpg" alt="" /> </div>
                <div class="tovar_item_btns">
                  <div class="open-project-link"><a class="open-project tovar_view" href="<?php echo base_url();?>index.php/shop/product_details/" ><span>quick</span> view</a></div>
                  <a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i></a> <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a> </div>
              </div>
              <div class="tovar_description clearfix"> 
              <a class="tovar_title" href="<?php echo base_url();?>index.php/shop/product_details/<?php echo $product->people_cat_id;?>/<?php echo $product->product_type_id;?>/<?php echo $product->product_id; ?>/<?php echo str_replace('-',' ',ucwords($this->uri->segment(2))); ?>/<?php echo strtolower(url_title($product->type_name)); ?>/<?php echo url_title(strtolower($product->product_name)); ?>" ><?php echo $product->product_name; ?> <?php echo $product->brand_name; ?></a> <span class="tovar_price">LKR: <?php echo $product->price; ?></span> </div>
              <div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
            </div>
          </div>
          <!-- //TOVAR1 -->
          <?php } } $i++;?>
        </div>
        <!-- //ROW -->
        
        <hr>
        <div class="clearfix">
          <?php   if($cresults!='empty')
						{?>
          <!-- PAGINATION -->
          <div class="pagination clearfix"><?php echo $clinks; ?> </div>
          <!-- //PAGINATION -->
          <p>&nbsp;</p>
          
          <?php }else{
					echo "There are no products matching the selection.";}
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
  </div>
  <!-- //CONTAINER --> 
</section>
<!-- //SHOP --> 
<script>		   

		function setColorCode(color){
			$('#colorcode').val(color);
			}    
        $('#color a').click(function(event) {
                $('#sidepanel').trigger('submit');
				
        });
		/*$('.brands').click(function(event) {
			var v=$(this).attr('for');
			var v2=$('input#'+v).attr('value');
            $('div.padbot40').hide();    
			$('div.'+v2).show();
        });*/
		
		
		$(".brands").click(function (event){
			// create 2 product list make 1 hidden
			var v=$(this).attr('for');
			var v2=$('input#'+v).attr('value');
               $('div.padbot40').hide();// hide original one
			$('div.'+v2).toggle(); //show/hide fake one
			});
		/**/

		$('#sidepanel').submit(function(event) {
			
                event.preventDefault();
                $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url(); ?>index.php/shop/categoryFilter/<?php echo $this->uri->segment(3); ?>/',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
								
                                $('.shop_block').html(data.msg);
                        }
                });
        });
</script> 
