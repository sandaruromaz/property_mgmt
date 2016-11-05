 <!-- Order details report -->
 <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
 ?>
            
 <!--this array can be used in any where in this page-->
 <?php if (count($user_data)){ 
 foreach ($user_data-> result_array() as $row){
  $profile = array('user' => $row);	
  }}}
  ?> 
        
<!-- Start my account Site Container -->
        <h4>ORDER DETAILS</h4>
         <table width="50%" border="2">
                <tr>
                <td></td>
                <td></td>
                </tr>
                  <tr>
                    <td>Customer Name</td>
                    <td>: <?php echo $profile['user']['title']; ?>.<?php echo $profile['user']['fname']; ?>&nbsp;<?php echo $profile['user']['lname']; ?></td>
                  </tr>
                  <?php if (count($oredredetails)){
		
		  			foreach ($oredredetails-> result_array() as $order){
				
						?>
                  <tr>
                    <td>Order No</td>
                    <td>: <?php echo $order['order_id']; ?></td>
                  </tr>
                  <tr>
                    <td>Order Date</td>
                    <td>: <?php echo $order['order_date']; ?></td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>: <?php echo $order['status']; ?></td>
                  </tr>
                  <?php if($order['status']=="Delivered"){?>
                           <tr>
                            <td>Delivered Date</td>
                            <td>: <?php echo $order['delivery_date']; ?></td>
                          </tr>
                  <?php }?>
                 
    
               </table>

                <h4>Product Details</h4>
                <table class="tableClass">
                        <thead class="theadClass">
                                <tr class="headerRow">
                                        <th>Quantity</th>
                                        <th>Products</th>
                                        <th>Amount</th>
                                </tr>
                        </thead>
                <tbody>
               <?php if (count($productdetails)){
                foreach ($productdetails-> result_array() as $row){
                ?>
                <tr>
                <td class="tdClass"><?php echo $row['quantity']; ?></td>
                <td class="tdClass"><?php echo $row['product_name']; ?><br/>
                <td class="tdClass">LKR :<?php echo $row['price']; ?></td>
                </tr>
                <?php }}?>
                
                <tr >
                <td  style="font-weight: bold;padding-left: 10pt; vertical-align: bottom;background-gradient:  linear  #89908b #f1f1f1 0 2 0 0.2;border-top: 1px solid #FFFFFF;" colspan="3">
                Total:  LKR :<?php echo $order['amount']; ?></td>
                
                </tr>
                
                </tbody>
                </table>
                <?php }}?>
                <?php if (count($billingdetails)){		
		  		foreach ($billingdetails-> result_array() as $row){
				
				?>
                 <h4>Delivery Method &amp; Payment Method</h4>
                        <table width="100%">
                       <tbody style="background-color:#f5f5f5;">
						
									<tr>
                                                 <td style="float:left; padding:10px 10px 10px 10px" width="20%">
                                                    Delivery Method                                                                           
                                                    </td>
                                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                                    : <?php echo $row['delivery_method']; ?></td>										
                                                </tr>
                                                 <tr>
                                                    <td style="float:left; padding:10px 10px 10px 10px" width="20%">
                                                    Payment Method                                                                           
                                                    </td>
                                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                                    : <?php echo $row['payment_method']; ?></td>										
                                                </tr>						
								
													
							</tbody>
						</table>
                
                
                <h4>Delivery Address</h4>
                <table width="100%" border="0" >
               
              <tr>
                <td width="21%" style="padding-left:10px">Address</td>
                <td width="79%"><?php echo $profile['user']['title']; ?>.<?php echo $profile['user']['fname']; ?>&nbsp;<?php echo $profile['user']['lname']; ?>,</td>
               
              </tr>
              <tr >
                <td  style="padding-left:10px">&nbsp;</td>
				<td><?php echo $row['add']; ?>,</td>
                
              </tr>
              <?php if($row['add1']!="")  {?>
              <tr>
                <td  style="padding-left:10px">&nbsp;</td>
				<td><?php echo $row['add1']; ?>,</td>               
              </tr>
              <?php }?>
              <tr>
                <td  style="padding-left:10px">&nbsp;</td>
				<td><?php echo $row['city']; ?>.</td>
                
              </tr>
              <tr>
                <td  style="padding-left:10px">Postal Code</td>
				<td><?php echo $row['postal']; ?></td>
                
              </tr>
              <tr>
                <td  style="padding-left:10px">Contatct No</td>
				<td><?php echo $row['mobile']; ?></td>
                
              </tr>
               <?php }}?>
            </table> 
           <hr/>  

	<!-- End Order details report -->