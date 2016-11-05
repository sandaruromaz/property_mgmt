<!-- BREADCRUMBS -->

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name">Shopping bag
</h2>   
    
<!-- //PAGE HEADER --> 

<!-- SHOPPING BAG BLOCK -->
<section class="shopping_bag_block">

<!-- ROW -->
<div class="row">
<!--Errors-->
<?php if($this -> session -> userdata('errorcart')){ ?>
<div class="alert alert-danger">
  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
  <strong><?php echo $this -> session -> userdata('errorcart'); ?></strong> </div>
<?php $this->session->unset_userdata('errorcart');}?>
<!-- Error Message-->
<?php if($this -> session -> userdata('SuccessUpdateData')){ ?>
<div class="alert alert-success">
  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
  <strong><?php echo $this -> session -> userdata('SuccessUpdateData'); ?></strong> </div>
<?php $this->session->unset_userdata('SuccessUpdateData');}?>
<!--end Errors--> 

<!-- CART TABLE -->
<div class="col-lg-9 col-md-9 ">
<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
<?php if (!$this->cart->contents()){
			echo'<div class="sidepanel widget_bag_totals"><h3 style="padding:10px;" align="center">Your cart is empty!</h3></div>';
		}else{
		}?>
<?php if ($cart = $this->cart->contents()):?>
<table class="table table-bordered table-hover cart-table">
  <thead>
    <tr>
      <th class="product-thumbnail"></th>
      <th class="product-name">Item</th>
      <th class="product-price">Price</th>
      <th class="product-quantity">Quantity</th>
      <th class="product-subtotal">Amount</th>
      <th class="product-remove"></th>
    </tr>
  </thead>




  <form action="<?php echo base_url();?>index.php/shop/update_cart" method="post" id="myform" >
  
  <?php $grand_total = 0; $i = 1;
		
		foreach ($cart as $item):
			echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
			echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
			echo form_hidden('cart['. $item['id'] .'][name]', $item['name']);
			echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
			echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
		//	echo form_hidden('cart['. $item['id'] .'][color]', $item['color']);
		//	echo form_hidden('cart['. $item['id'] .'][size]', $item['size']);			
			//$getMaxQ = $this->ShoppingCart-> getMaxQ($item['id'],$item['size']);
			// echo form_hidden('cart['. $item['id'] .'][Maxqty]', $getMaxQ );

			 $getReorderlevel = $this->ShoppingCart-> Reorderlevel($item['id']);
			 echo form_hidden('cart['. $item['id'] .'][Relevel]', $getReorderlevel );	
		?>
  <?php 
  $image_height = "150";
  $image_width = "150";
  $product_image=$item['img'];
  $large_product_image =base_url().'assets/images/products/' . $product_image;
  $thumb_product_image =base_url(). "assets/timthumb.php?src=" . $large_product_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
  ?>
  <tbody>
     


    <tr class="cart_item">
    <td>
    <div class="product-thumbnail">
        <a href="<?php echo base_url(); ?>index.php/shop/products_details/<?php  echo  $item['name'] ;?>/<?php  echo  $item['id'] ;?>/<?php echo $item['name']; ?>" ><img src="<?php echo $thumb_product_image; ?>" width="100px" alt="<?php echo $item['name']; ?>" /></a>
        </div>
      </td>
<td class="product-name">
<a href="<?php echo base_url(); ?>index.php/shop/products_details/<?php  echo  $item['id'] ;?>/<?php echo $item['name']; ?>"><?php echo $item['name']; ?> </a>
        <ul class="variation">
          <?php foreach ($this->cart->product_options($item['rowid']) as $option_name => $option_value): ?>
          <?php if($option_value=='') {   }else{?>
          <li class="variation-Color"><?php echo $option_name;?>: <span><?php echo $option_value; ?></span></li>
          <?php } ?>
          <?php endforeach; ?>
         
       </ul></td>
      <td class="product-price">LKR:<?php echo number_format($item['price'],2); ?></td>
      <td class="product-quantity">
        <div class="has-error" >



          <?php echo form_input('cart['. $item['id'] .'][qty]', $item['qty'], 'class="basic" placeholder="QTY" id="qty"  maxlength="2"'); ?><p style="margin-top:-10px" ><span  class="error"><?php if(isset($error[$item['id']]) ) echo $error[$item['id']];?></span></div></p></td>
    


      <?php $grand_total = $grand_total + $item['subtotal']; ?>
      <td class="product-subtotal">LKR:<?php echo number_format($item['subtotal'],2) ?></td>
      <td class="product-remove"><a href="<?php echo base_url();?>index.php/shop/remove/<?php echo $item['rowid']; ?>" ><span>Delete</span> <i>X</i></a></td>
      <?php endforeach; ?>
    </tr>
  </tbody>
</table>



<table width="100%">
  
    <td width="80%"></td>
    <td width="10%"><input type="button" value="Clear Cart" onclick="clear_cart()" class="btn btn-warning" style="margin-right:5px">
    <td>
    <td width="10%"><input type="submit" value="Update Cart" class="btn btn-default">
    <td></form>
      <?php endif; ?>

</table>
</div>

<!-- //CART TABLE --> 

<!-- SIDEBAR -->
<div id="sidebar" class="col-lg-3 col-md-3 "> 
  
  <!-- BAG TOTALS -->
  <div class="sidepanel widget_bag_totals">
    <?php if ($cart = $this->cart->contents()):?>
    <h3>BAG TOTALS</h3>
    <table class="bag_total">
    <!--  <tr class="shipping clearfix">
        <th>SHIPPING</th>
        <td>Free</td>
      </tr>-->
      <tr class="total clearfix">
        <th>Total &nbsp;</th>
        <td> LKR:<?php echo number_format($grand_total,2); ?></td>
      </tr>
    </table>
    <a class="btn btn-success btn-cart"  style="display:block" href="<?php echo base_url();?>index.php/checkout/checkout_delivery_address" >Check out</a>
    <?php endif ?>
    <a class="btn btn-default checkbtn" href="<?php echo base_url(); ?>index.php/shop/products_catalog" >Continue shopping</a> </div>
 
  <!-- //REGISTRATION FORM --> 
</div>
<!-- //SIDEBAR -->
</div>
<!-- //ROW -->
</section>


    </div>
</div>
</div>
</div>
</div>
</div>
<!-- //SHOPPING BAG BLOCK --> 
<script>
function clear_cart() {
	var result = confirm('Are you sure want to clear all items?');
	
	if(result) {
		window.location = "<?php echo base_url(); ?>index.php/shop/remove/all";
	}else{
		return false; // cancel button
	}
}


</script> 