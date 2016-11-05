<?php if (!isset($_SESSION['user_id']) || $_SESSION['user_id']=='')
			{		 redirect('/pages/signin', 'location');	 		}
		?>	

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name"> Order Details
</h2>  
		
            <?php if (count($oredredetails)){
		  foreach ($oredredetails-> result_array() as $order){?>
			<?php }}?><!-- ROW -->		
		<!-- TOVAR DETAILS -->
		<section class="tovar_details padbot70">
<a style="float:right" href="<?php echo base_url();?>index.php/Customer/getorderReport/<?php echo $order['order_id']; ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> PRINT</a>

                <div class="col-lg-12 col-md-12 tovar_details_wrapper clearfix">
				<div class="row">
               <table width="20%" border="0">
               <?php if (count($oredredetails)){
		
		  			foreach ($oredredetails-> result_array() as $order){
				
						?>
                  <tr>
                    <td><h3>Order No </h3></td>
                    <td><h3>: <?php echo $order['order_id']; ?></h3></td>
                  </tr>
                  <tr>
                    <td><h5>Order Date </h5></td>
                    <td><h5>: <?php echo $order['order_date']; ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Status </td>
                    <td><h5>: <?php echo $order['status']; ?></h5></td>
                  </tr>
                  <?php if($order['status']=="Delivered"){?>
                           <tr>
                            <td><h5>Delivered Date</h5></td>
                            <td><h5>: <?php echo $order['delivery_date']; ?></h5></td>
                          </tr>
                  <?php }?>
                  
                </table>
                
					<table class="table type2">
							<thead style="background-color:#e0e0e0">
								<tr>
									<th><h5>Quantity</h5></th>
									<th><h5>Products</h5></th>
									<th><h5>Amount</h5></th>
								</tr>
							</thead>
							<tbody style="background-color:#f5f5f5;">
								<?php if (count($productdetails)){
                                 foreach ($productdetails-> result_array() as $row){
                                  ?>
								<tr>
									<td><?php echo $row['quantity']; ?></td>
									<td><?php echo $row['product_name']; ?><br/>
                                    <td>LKR: <?php echo $row['price']; ?></td>
								</tr>
								<?php }}?>
								<tr>
									<td colspan="3" ><h5 style="float:left;padding:0px 0px 0px 10px">Total : LKR: <?php echo $order['amount']; ?></h5></td>
								
								</tr>
                               <?php }}?>
							</tbody>
						</table>
                        <h3>Delivery Method &amp; Payment Method</h3>
                        <table width="100%">
                       <tbody style="background-color:#f5f5f5;">
								                                <?php if (count($billingdetails)){		
		  			    		foreach ($billingdetails-> result_array() as $row){
				                ?>
									<tr>
                                                 <td style="float:left; padding:10px 10px 10px 10px" width="15%">
                                                    Delivery Method                                                                           
                                                    </td>
                                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                                    : <?php echo $row['delivery_method']; ?></td>										
                                                </tr>
                                                 <tr>
                                                    <td style="float:left; padding:10px 10px 10px 10px" width="15%">
                                                    Payment Method                                                                           
                                                    </td>
                                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                                    : <?php echo $row['payment_method']; ?></td>										
                                                </tr>						
								
								<?php }}?>								
							</tbody>
						</table>
                        
						<h3>Delivery Address</h3>
                        <table width="100%">
						<?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
                        ?>
                        
                        <!--this array can be used in any where in this page-->
                            <?php if (count($user_data)){ 
                              foreach ($user_data-> result_array() as $row){
                              $profile = array('user' => $row);	
                              }
                            
                              }
                         }
                         ?>
                        <tbody style="background-color:#f5f5f5;">
								<tr>
									<td style="float:left; padding:10px 10px 10px 10px">
                        <?php if (count($billingdetails)){		
		  			    foreach ($billingdetails-> result_array() as $row){
				
						?>
                                    <?php echo $profile['user']['title']; ?>.<?php echo $profile['user']['fname']; ?>&nbsp;<?php echo $profile['user']['lname']; ?>.<br/>
                                    <?php echo $row['add']; ?>,<br/>
                                    <?php if($row['add1']!="")  { echo $row['add1'];?>, <br/> <?php } ?>
                                    <?php echo $row['city']; ?>.<br/>
                                    <?php echo $row['postal']; ?>.<br/>
                                    <?php echo $row['mobile']; ?><br/>
                                    
                          <?php }}?>          </td>									
								</tr>
																
							</tbody>
						</table>
			
				</div>	
				</div><!-- //ROW -->
		</section><!-- //TOVAR DETAILS -->
				</div>
</div>
</div>
</div>
        
