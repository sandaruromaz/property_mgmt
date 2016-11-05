		<!-- BREADCRUMBS -->
		<section class="breadcrumb parallax margbot30"></section>
		<!-- //BREADCRUMBS -->
		
		
		<!-- PAGE HEADER -->
		<section class="page_header"> 
		  
		  <!-- CONTAINER -->
		  <div class="container">
			<h6 class="pull-left">Home &gt; Shopping bag</h6>
			<div class="pull-right"> <a href="" >Back to shop<i class="fa fa-angle-right"></i></a> </div>
		  </div>
		  <!-- //CONTAINER --> 
		</section>
		<!-- //PAGE HEADER --> 
		
		
		<!-- SHOPPING BAG BLOCK -->
		<section class="shopping_bag_block">
			
			<!-- CONTAINER -->
			<div class="container">
			<h2 class=""><b>Shopping bag</h2>
				<!-- ROW -->
				<div class="row">
					
					<!-- CART TABLE -->
			
					
					
					<!-- SIDEBAR -->
					<div id="sidebar" class="col-lg-3 col-md-3 padbot50">
						
						<!-- BAG TOTALS -->
						<div class="sidepanel widget_bag_totals">
                      
                       <?php
							$grand_total = 0;
							
							if ($cart = $this->cart->contents()):
								foreach ($cart as $item):
									$grand_total = $grand_total + $item['subtotal'];
								endforeach;
							endif;
							?>
							<h3>BAG TOTALS</h3>
                            <form action="<?php echo base_url(); ?>index.php/checkout/save_order" method="post" name="billing">
							<table class="bag_total">
								
								<tr class="shipping clearfix">
									<th>SHIPPING</th>
									<td>Free</td>
								</tr>
								<tr class="total clearfix">
                                
									<th>Total</th>
									<td>LKR:<?php echo number_format($grand_total,2); ?> </td>
								</tr>
                                
							</table>
                             <?php if (count($user_data)){ 
		  foreach ($user_data-> result_array() as $row){
		  $profile = array('user' => $row);?>	  
		  
							 <input id="r" name="userpro"  type="hidden" value="<?php  echo $profile['user']['customer_id'] ;?> "><?php }}?>
							<input name="checkout" type="submit" value="checkout" />
                            </form>
                      
							<a class="btn inactive" href="javascript:void(0);" >Continue shopping</a>
						</div><!-- //REGISTRATION FORM -->
					</div><!-- //SIDEBAR -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //SHOPPING BAG BLOCK -->
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