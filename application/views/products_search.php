<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name"> Search results
</h2>  
    
<!-- SHOP BLOCK -->
<section class="shop"> 

   
    <!-- ROW -->
    <div class="row"> 
      
     
      <!-- SHOP PRODUCTS -->
      <div class="col-lg-9 col-sm-9 padbot20"> 
        <h5 class=""><b>Search results for "<?php if (isset($_REQUEST['search'])){echo $_REQUEST['search'];} ?>"</b></h5> 
        
        
        <!-- SORTING TOVAR PANEL -->
        <?php if(count($search_data)!=""){?>
        <div class="sorting_options clearfix"> 
         
          
          
          <!-- PRODUC SIZE -->
          <div id="toggle-sizes"> <a class="view_box active" href="javascript:void(0);"><i class="fa fa-th-large"></i></a> <a class="view_full" href="javascript:void(0);"><i class="fa fa-th-list"></i></a> </div>
          <!-- //PRODUC SIZE --> 
        </div>
        <!-- //SORTING TOVAR PANEL --> 
        <?php }else{}?>
        <!-- ROW -->
        <div class="row shop_block"> 
          
          <!-- TOVAR1 -->
         <?php $i=1;
		 if (count($search_data)){ 
	     foreach ($search_data as $product){?>
          <div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-12  padbot40 ">
            <div class="tovar_item clearfix">
              <div class="tovar_img">
                    <?php 
            $image_height = "200";
                  $image_width = "200";
            $product_image=$product['img1'];
                  $large_product_image =base_url().'assets/images/products/' . $product_image;
                  $thumb_product_image =base_url(). "assets/timthumb.php?src=" . $large_product_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
            ?>
                 <img class="img" src="<?php echo $thumb_product_image; ?>" alt="<?php echo $product['img1']; ?>" />

                <div class="tovar_item_btns">

                  <a class="add_bag" href="<?php echo base_url();?>index.php/shop/product_details/<?php echo $product['product_id']; ?>" ><i class="fa fa-shopping-cart"></i></a>
              </div>
              </div>
              <div class="tovar_description clearfix"> 
              <a class="tovar_title" href="<?php echo base_url();?>index.php/shop/product_details/<?php echo $product['product_id']; ?>" ><?php echo $product['product_name']; ?> </a> <br><span class="tovar_price">LKR: <?php echo $product['price']; ?></span> </div>
              
            </div>
          </div>

          <!-- //TOVAR1 -->
          <?php } } $i++;?>
        </div>
        <!-- //ROW -->
		<?php if(count($search_data)!=""){?>
        <hr>
        <?php }?>
        <div class="clearfix">
          <?php if(count($search_data)!=""){?>
          <!-- PAGINATION -->
          <div class="pagination clearfix"><?php ?> </div>
          <!-- //PAGINATION -->
          <p>&nbsp;</p>
          
          <?php }else{
					echo '<p> Sorry, no records were found to match your search term. </p><hr>';}?>
        </div>
        
        <!-- SHOP BANNER --
        <div class="row top_sale_banners center">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner8.jpg" alt="" /></a></div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner7.jpg" alt="" /></a></div>
        </div>
        <!-- //SHOP BANNER --> 
      </div>

      <!-- //SHOP PRODUCTS --> 
       <!-- SIDEBAR -->
      <div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12"> 
        
        <!-- CATEGORIES -->
						<div class="sidepanel widget_categories">
							<h3>NEW ITEMS</h3>
							<ul>
							  
							</ul>
						</div><!-- //CATEGORIES --> 
        
        <div class="sidepanel widget_categories">
        <ul class="tovar_items_small clearfix">
      
        <?php if(count($newitems)){ 
		foreach ($newitems-> result_array() as $newitem){
		?>
							<li class="clearfix">
								<a href="<?php echo base_url();?>index.php/shop/product_details/<?php echo $newitem['product_id']; ?>" style="float:left; margin-right:10px;margin-bottom:10px">
                    <?php 
            $image_height = "70";
                  $image_width = "70";
            $product_images=$newitem['img1'];
                  $large_product_images =base_url().'assets/images/products/' . $product_images;
                  $thumb_product_images =base_url(). "assets/timthumb.php?src=" . $large_product_images . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
            ?>
                 <img class="img" src="<?php echo $thumb_product_images; ?>" alt="<?php echo $newitem['img1']; ?>" />
</a>
								<a class="tovar_item_small_title" href="<?php echo base_url();?>index.php/shop/product_details/<?php echo $newitem['product_id']; ?>"><?php echo $newitem['product_name']; ?></a><br/>
								<span class="tovar_item_small_price">LKR: <?php echo $newitem['price']; ?></span>
							</li>
							
                            <?php }}?>
			</ul>
        </div>
      </div>
      <!-- //SIDEBAR --> 
      
    </div>
    <!-- //ROW --> 
</section>
<!-- //SHOP --> 

</div>
</div>
</div>
</div>

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
		
		/*Added by dilshan*/
		$(".brands").on("click", function() {
			
			if($(this).attr('checked', true)){
				var v2=$(this).attr('value');
				if(v2 != "all"){
					$('div.padbot40').hide();    
					$('div.'+v2).show();
				}else{
					$('div.padbot40').show();
				}
			}
		
		});
		

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
