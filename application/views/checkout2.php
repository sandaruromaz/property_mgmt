<?php 

if (!isset($_SESSION['billingaddress']))
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
		

		<!-- //PAGE HEADER --> 
		
	<!-- CHECKOUT PAGE -->
		<section class="checkout_page">
			


				<!-- CHECKOUT BLOCK -->
				<div class="checkout_block">
					<ul class="checkout_nav">
						<li class="done_step">1. Delivery Address</li>
						<li class="active_step">2. Delivery</li>
						<li>3. Payment</li>
						<li class="last">4. Confirm Orded</li>
					</ul>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ss-12 padbot40 column_item">
                        <p>
   <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
			/*check wether user log in or not*/?>
						<?php if (count($user_data)){ 
                          foreach ($user_data-> result_array() as $row){
                          $profile = array('user' => $row);	//we make new array so we can use it anyware	  
                          }
                        
                          }
                        }
  ?>                     
  

   <p>Delivery Address</p>

<?php  echo $profile['user']['title'];?>. <?php  echo $profile['user']['fname'];?> <?php  echo $profile['user']['lname'];?>
</br>
<?php echo $_SESSION['billingaddress']['add'];?>,
<?php if ($_SESSION['billingaddress']['add1']!=""){ ?>
</br>               
<?php echo $_SESSION['billingaddress']['add1'];?>,
<?php }?>

<?php echo $_SESSION['billingaddress']['city'];?>.
</br>
<?php echo $_SESSION['billingaddress']['postal'];?>
</br>

<?php echo $_SESSION['billingaddress']['Mobile'];?>

</p>
                        </div>
					<div class="checkout_delivery clearfix">
                    <form  action="<?php echo base_url();?>index.php/checkout/saveDelivery" method="POST" >
						<p class="checkout_title">Delivery Method</p>
                        <div class="has-error" >
						<ul id="sex">                
							<li>
								<input id="ridio1" type="radio" name="delivery"  value="Free Delivery" checked="checked"  hidden />
								<label for="ridio1">Free Delivery <b>(1-3 week)</b></label>
							</li>
            	</ul>
            	
            </div>
                        
                   <div class="checkout2btn">      
                   <a class="btn btn-default " href="<?php echo base_url();?>index.php/checkout/checkout_delivery_address" class="btn inactive" style="float:left;margin-right:50px">BACK</a>
                           
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