<?php if (!isset($_SESSION['user_id']) || $_SESSION['user_id']=='')
			{		 redirect('/pages/signin', 'location');	 		}
		?>	
 <style>
.cart_item .image{
	margin-top: 10px;
}
 	
 </style>       
        <!-- BREADCRUMBS -->
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name">Wishlist
</h2>		
			
		<!-- LOVE LIST BLOCK -->
		<section class="love_list_block">
				<!-- ROW -->
				<div class="row">
					 <!--Errors-->
		<div class="col-xs-12">			 
      <?php if($this -> session -> userdata('errorwishlist')){ ?>
      <div class="alert alert-danger">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <strong><?php echo $this -> session -> userdata('errorwishlist'); ?></strong> </div>
      <?php $this->session->unset_userdata('errorwishlist');}?>
      <!-- Error Message-->
      <?php if($this -> session -> userdata('Successwishlist')){ ?>
      <div class="alert alert-success">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <strong><?php echo $this -> session -> userdata('Successwishlist'); ?></strong> </div>
      <?php $this->session->unset_userdata('Successwishlist');}?>
      </div>
      <!--end Errors-->
					<!-- CART TABLE -->
					<?php if ($wishlistitems != "empty"){
					$col="12";
					}else{
					$col="12";
					}?>


					<div class="col-lg-<?php echo $col;?> col-md-<?php echo $col;?>  ">
                    <?php if ($wishlistitems != "empty"){?>
						<table  width="100%" border="0" class="table-condensed">
                          <thead style="background-color:#f5f5f5;">
                           <tr style=" padding:10px">
                              <th class="span2" style="font-size: 11px;line-height: 20px;padding: 4px 4px 4px 6px;text-transform: uppercase;"></th>
                              <th class="span3">ITEM</th>                             
                              <th class="span3">PRICE</th>
                              <th class="span1" style="float:right;font-size: 11px;line-height: 20px;padding: 4px 4px 4px 6px;text-transform: uppercase;">ACTION</th>
                            </tr>
                          </thead>
                          <tbody style="margin-top:10px">
                          <?php foreach ($wishlistitems as $row){?>
                          <?php 
	$image_height = "150";
	$image_width = "150";
	$product_image=$row->img1;
	$large_product_image =base_url().'assets/images/products/' . $product_image;
	$thumb_product_image =base_url(). "assets/timthumb.php?src=" . $large_product_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
	?>
                            <tr class="cart_item">
        <td class="image">
        	<a href="<?php echo base_url(); ?>index.php/shop/product_details/<?php  echo $row->product_id ;?>"><img src="<?php echo $thumb_product_image ?>"  width="100px"alt="<?php echo $row->product_name; ?>" /></a></td>
        <td class="product-name" valign="top">
        	<a title="<?php  echo $row->product_name; ?>" href="<?php echo base_url(); ?>index.php/shop/product_details/<?php  echo $row->product_id ;?>">
        		<?php  echo $row->product_name; ?></a> </td>
                              
        <td class="price" valign="top"><b>LKR: <?php  echo $row->price ;?></b></td>
        <td class="product-remove" valign="top" style=" text-align: right;"><a title="Add to cart" href="<?php echo base_url(); ?>index.php/shop/product_details/<?php  echo $row->product_id ;?>"><i class="glyphicon glyphicon-shopping-cart"></i></a> &nbsp;<a  href="<?php  echo base_url(); ?>/index.php/customer/wishListRemove/<?php  echo $row->product_id ;?>" title="Make as Trash"><i class="glyphicon glyphicon-trash"></i></a></td>
                            </tr>
                         
                            <?php }}else{
							   
							   echo'<h3 align="center">No items in your wishlist !</h3>';
							   } ?>
                           
                          </tbody>
                        </table>
						
					</div><!-- //CART TABLE -->
					
					
					<!-- SIDEBAR -->
		<!--			<div id="sidebar" class="col-lg-3 col-md-3 padbot50">
						
						<!-- CATEGORIES -->
			<!--			<div class="sidepanel widget_categories">
							<h3>NEW ITEMS</h3>
							<ul>
							  
							</ul>
						</div><!-- //CATEGORIES --> 
        <!--
        <div class="sidepanel widget_categories">
        <ul class="tovar_items_small clearfix">
        <?php if(count($newitems)){ 
		foreach ($newitems-> result_array() as $newitem){
		?>
				<li class="clearfix">
			<a href="<?php echo base_url();?>index.php/shop/products_details/<?php echo $newitem['product_type_id']; ?>/<?php echo $newitem['product_id']; ?>/<?php echo $newitem['product_name']; ?>"><img alt="<?php echo $newitem['product_name']; ?>" 
            src="<?php echo base_url();?>assets/images/products/<?php //echo $newitem['img1']; ?>" class="tovar_item_small_img"></a>
			<a class="tovar_item_small_title" href="<?php echo base_url();?>index.php/shop/products_details/<?php echo $newitem['product_type_id']; ?>/<?php echo $newitem['product_id']; ?>/<?php echo $newitem['product_name']; ?>"><?php echo $newitem['product_name']; ?></a>
			<span class="tovar_item_small_price">LKR: <?php echo $newitem['price']; ?></span>
							</li>
							
                            <?php }}?>
			</ul>
        </div>



					</div><!-- //SIDEBAR -->


				</div><!-- //ROW -->
		</section><!-- //LOVE LIST BLOCK -->


		</div>
</div>
</div>
</div>
</div>
</div>