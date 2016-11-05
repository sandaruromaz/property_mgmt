<?php 

if (!isset($_SESSION['delivery']))
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
						<li class="done_step2">1. Delivery Address</li>
						<li class="done_step">2. Delivery</li>
						<li class="active_step">3. Payment</li>
						<li class="last">4. Confirm Orded</li>
					</ul>
					
					<div class="checkout_payment clearfix">
						<div class="payment_method padbot70">
							<p class="checkout_title">Payment Method</p>
							 <form  action="<?php echo base_url();?>index.php/checkout/savePayment" method="POST">
							
									<input id="ridio1" type="radio" name="payment"  value="Cash On Hand"  checked="checked" />
									<label for="ridio1">Cash On Hand<br></label>
								
								
								
								<!--<li>
									<input id="ridio3" type="radio" name="radio" hidden />
									<label for="ridio3">PayPal<br><img src="images/paypal.jpg" alt="" /></label>
								</li>-->
								
							
						</div>
						
						
						<div class="clear"></div>
                        <div class="checkout3btn"> 
                            <div><a class="btn btn-default " href="<?php echo base_url();?>index.php/checkout/checkout_delivery" class="btn inactive" style="float:left;margin-right:50px">BACK</a>
 							</div>                          
                            <input class="btn btn-default btn-cart" type="submit" value="Continue">
                        </div>
						</form>
					</div>
				</div><!-- //CHECKOUT BLOCK -->
		</section><!-- //CHECKOUT PAGE -->
			    </div>
</div>
</div>
</div>