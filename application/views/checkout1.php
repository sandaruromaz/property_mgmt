

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name">Checkout
</h2>   
    
		  <!-- //CONTAINER --> 

		<!-- //PAGE HEADER --> 
		
	<!-- CHECKOUT PAGE -->
		<section class="checkout_page">
			
			<!-- CONTAINER -->

				<!-- CHECKOUT BLOCK -->
				<div >
					<ul class="checkout_nav">
						<li class="active_step">1. Delivery Address</li>
						<li>2. Delivery</li>
						<li>3. Payment</li>
						<li class="last">4. Confirm Orded</li>
					</ul>

					<?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
							/*check wether user log in or not*/?>
						<?php if (count($user_data)){ 
						  foreach ($user_data-> result_array() as $row){
						  $profile = array('user' => $row);	//we make new array so we can use it anyware	  
						  }
						
						  }
						}
						  ?>
					<form class="checkout_form clearfix" action="<?php echo base_url();?>index.php/checkout/saveAddress" method="POST" onsubmit="return deliverydetailsvalidation()">
						<div class="">
            <div >
                <p align="justify">
                  We consider the details of "Delivary Address" as your final delivary destination address and your own contact number, thus
           Sri Lanka and no extra charges will be applied to weight of the pakages. Order will be delivered to you 
             within seven days. 
              We value your online orders.
            Thank You.
                </p>

            </div>

            <div class="col-xs-12 col-sm-6">
                        
            
            
                <label>Customer Name</label><br/>
               <?php  echo $profile['user']['title'];?>. <?php  echo $profile['user']['fname'];?>
                <?php  echo $profile['user']['lname'];?>
             </br></br>
                <label>Code</label>
                <div class="has-error">
                    <input class="form-control" type="text" placeholder="Enter your address" id="add" name="add" value="<?php if (isset($_SESSION['billingaddress'])){echo $_SESSION['billingaddress']['add'];}else{ echo $profile['user']['address'];}?>">
                    <br>
                    </div>
              
                <label>Address Line1</label>
             <div class="has-error">
                    <input class="form-control" type="text" placeholder="Enter your address line1" name="add1" value="<?php if (isset($_SESSION['billingaddress'])){echo $_SESSION['billingaddress']['add1'];}else{ echo $profile['user']['address1'];}?>">
                    <br>
                    <span class="error"></span> 
              </div>
              
                <label>City</label>
              <div class="has-error">
                    <input class="form-control" type="text" placeholder="Enter your city" id="city" name="city" value="<?php if (isset($_SESSION['billingaddress'])){echo $_SESSION['billingaddress']['city'];}else{ echo $profile['user']['city'];}?>">
                    <br>
                    <span class="error"></span> </div>
             
                <label>Postal Code</label>
                <div class="has-error">
                    <input class="form-control" type="text" placeholder="Enter your postal code" id="postal" name="postal" value="<?php if (isset($_SESSION['billingaddress'])){echo $_SESSION['billingaddress']['postal'];}else{
						 echo $profile['user']['postal_code'];}?>">
                    <br>
                     </div>
             
                <label>Contact No</label>
                <div class="has-error">
                    <input class="form-control" typeclass="btn btn-default "="text" placeholder="Enter your Mobile Number" id="Mobile" name="Mobile" value="<?php if (isset($_SESSION['billingaddress'])){echo $_SESSION['billingaddress']['Mobile'];}else{ echo $profile['user']['telephone'];}?>">
                    <br>
                    <span class="error"></span> </div>
             
              <a class="btn btn-default " href="<?php echo base_url();?>index.php/shop/shopping_bag" style="float:left;margin-right:50px">SHOPPING BAG</a></td>
      
            <input class="btn btn-default btn-cart" type="submit" value="Continue">
            

                        </div>
                        </div> 

                             
						
						
					</form>
				</div><!-- //CHECKOUT BLOCK -->
		</section><!-- //CHECKOUT PAGE -->


    </div>
</div>
</div>

