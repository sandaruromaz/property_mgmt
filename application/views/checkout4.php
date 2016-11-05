<?php 

if(!$this->cart->contents())
			{		 redirect('/shop/shopping_bag', 'location');	 		
			
			
			}
			
?>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name">Checkout
</h2>  
		
<!-- CHECKOUT PAGE -->
		<section class="checkout_page">
		

				<!-- CHECKOUT BLOCK -->
				<div class="checkout_block">
					<ul class="checkout_nav">
						<li class="done_step2">1. Shipping Address</li>
						<li class="done_step2">2. Delivery</li>
						<li class="done_step">3. Payment</li>
						<li class="active_step last">4. Confirm Orded</li>
					</ul>
				</div><!-- //CHECKOUT BLOCK -->
					
				<!-- ROW -->
				<div class="row">
					<div class="col-lg-9 col-md-9 padbot60">
						<div class="checkout_confirm_orded clearfix">
							<div class="checkout_confirm_orded_bordright clearfix">
								<div class="billing_information">
									<p class="checkout_title margbot10">Delivery Adress</p>
									 <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
			           /*check wether user log in or not*/?>
						<?php if (count($user_data)){ 
                          foreach ($user_data-> result_array() as $row){
                          $profile = array('user' => $row);	//we make new array so we can use it anyware	  
                          }
                        
                          }
                        }
                          ?> 
									<div class="billing_information_content margbot40">
										<span><?php  echo $profile['user']['title'];?>. <?php  echo $profile['user']['fname'];?> <?php  echo $profile['user']['lname'];?></span>
										<span><?php echo $_SESSION['billingaddress']['add'];?>,</span>
                                        <?php if ($_SESSION['billingaddress']['add1']!=""){ ?>
										<span><?php echo $_SESSION['billingaddress']['add1'];?>,</span>
                                        <?php }?>
										<span><?php echo $_SESSION['billingaddress']['city'];?>.</span>
										<span><?php echo $_SESSION['billingaddress']['postal'];?></span>
                                        <span><?php echo $_SESSION['billingaddress']['Mobile'];?></span>
									</div>
									
									</div>
								
								<div class="payment_delivery">
									<p class="checkout_title margbot10">Payment and delivery</p>
									<p><span>Payment:</span> <span class="paymentname"><?php echo $_SESSION['payment']['payment'];?></span></p>
									<p><span>Delivery:</span> <span class="paymentname"><?php echo $_SESSION['delivery']['delivery'];?></span></p>
									
								</div></span>
							</div>
							
							<div class="checkout_confirm_orded_products">
								<p class="checkout_title">Products</p>
                                <?php if ($cart = $this->cart->contents()):?>
								
								<ul class="cart-items">
                                <?php $grand_total = 0; $i = 1;		
								foreach ($cart as $item):
								$image=$item['img'];
							   $image_path=base_url().'assets/images/products/'.$image;
							     $image_height="200";
                                $image_width="200";
                               // $imagepath=base_url()."/assets/img/product/".$product->image;
                                $thumb_pimage1 = base_url()."/assets/timthumb.php?src=" . $image_path . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
                                
									
								?>
								  <?php 
  $image_height = "100";
  $image_width = "100";
  $product_image=$item['img'];
  $large_product_image =base_url().'assets/images/products/' . $product_image;
  $thumb_product_image =base_url(). "assets/timthumb.php?src=" . $large_product_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
  ?>
									<li class="clearfix">
										<img class="cart_item_product" src="<?php echo $thumb_product_image; ?>" alt="<?php echo $item['name']; ?>" />
										<a href="<?php echo base_url(); ?>index.php/shop/products_details/<?php  echo  $item['id'] ;?>/<?php echo $item['name']; ?>" class="cart_item_title"><?php echo $item['name']; ?></a>
                                        
										<span class="cart_item_price"><?php echo $item['qty']; ?> × LKR:<?php echo number_format($item['price'],2); ?></span>
										<?php foreach ($this->cart->product_options($item['rowid']) as $option_name => $option_value){ ?>
										<?php if($option_value=='') {   }else{?>			
										<span class=""><?php echo $option_name;?>: <span><?php echo $option_value; ?></span></span><br/>
										
										<?php }} ?>
                                    </li>
									<?php $grand_total = $grand_total + $item['subtotal']; ?>
                                 <?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-3 padbot60">
						
						<!-- BAG TOTALS -->
						<div class="sidepanel widget_bag_totals your_order_block">
							<h3>Your Order</h3>
                            <form action="<?php echo base_url(); ?>index.php/checkout/save_order" method="post" name="billing">
							<label>Total </label>
								LKR:<?php echo number_format($grand_total,2); ?> 
						
                            <input  type="hidden" value="<?php echo $grand_total; ?> "  name="grand_total"/>
							<input class="btn btn-default btn-cart" name="Place Order" type="submit" value="Place Order"  style="width:100%"/>
                            </form>
                            <?php endif ?>
                             &nbsp;
							<a class="btn btn-default btn-conti" href="<?php echo base_url();?>index.php/checkout/checkout_payment" >Go to previous step</a>
						</div><!-- //REGISTRATION FORM -->
					</div><!-- //SIDEBAR -->
				</div><!-- //ROW -->
		</section><!-- //CHECKOUT PAGE -->
 </div>
</div>
</div>
</div>