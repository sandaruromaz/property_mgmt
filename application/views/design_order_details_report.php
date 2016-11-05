 <!-- cake Order details report -->
 <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
 ?>
            
 <!--this array can be used in any where in this page-->
 <?php if (count($user_data)){ 
 foreach ($user_data-> result_array() as $row){
  $profile = array('user' => $row);	
  }}}
  ?> 
        
<!-- Start my account Site Container -->
        <h4>DESIGN ORDER DETAILS</h4>
         <table width="50%" border="2">
                <tr>
                <td></td>
                <td></td>
                </tr>
                  <tr>
                    <td>Customer Name</td>
                    <td>: <?php echo $profile['user']['title']; ?>.<?php echo $profile['user']['fname']; ?>&nbsp;<?php echo $profile['user']['lname']; ?></td>
                  </tr>
                 <?php if (count($designorderdetails)){
		
		  			foreach ($designorderdetails-> result_array() as $order){
				
						?>
                  <tr>
                    <td><h5>Order No </h5></td>
                    <td><h5>: <?php echo $order['design_order_id']; ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Order Date </h5></td>
                    <td><h5>: <?php echo $order['order_date']; ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Confirmation </td>
                    <td><h5>: <?php echo $order['status']; ?></h5></td>
                  </tr>
                  <?php if($order['confirmed_date']!=""){?>
                           <tr>
                            <td><h5>Confirmed Date</h5></td>
                            <td><h5>: <?php echo $order['confirmed_date']; ?></h5></td>
                          </tr>
                  <?php }?>

                  <tr>
                    <td><h5>Dilivery Date </h5></td>
                    <td><h5>: <?php echo $order['dilivery_date']; ?></h5></td>
                  </tr>
                  <?php $unitprice=$order['amount'] ?>
    
               </table>
               <h4>SIZE DETAILS</h4>
                 <table width="50%" border="1" style=" padding:10px">
                <tr style="padding-right::10px">
                    <td><h5>Size Type </h5></td>
                    <td><h5>Quantity </h5></td>
                  </tr>
    
                  <tr>
                    <td ><h5> <?php echo $order['size']; ?></h5></td>
                     <td ><h5><?php echo $order['qty']; ?></h5></td>
                  </tr>
                 <tr>
                 <td>Unit Price
                 </td>
                 <td>LKR: <?php echo $unitprice ?>
                 </td>
                 </tr>
                 <tr>
                 <td>Total
                 </td>
                 <td>LKR: 
                 
                  <?php 
                                    $quantity=$order['qty'];
                                    $total= $quantity*$unitprice;
                                    echo $total;
					
					?>
                 
                 </td>
                 </tr>                   
                </table>
                <h3>&nbsp;</h3>
                <h4>DUMMY DESIGN</h4>
                
                <table width="100%" border="0">
                  <tr>
                    <td><h4 style="font-size:15px">Front View</h4></td>
                    <td><h4 style="font-size:15px">Back View</h4></td>
                  </tr>
                  <tr>
                    <td><img src="<?php echo base_url();?>assets/images/design/orders/<?php echo $order['design_front_img'];?>" alt="<?php echo $order['design_front_img'];?>" style=" width:80%;border: 2px solid #e9e9e9;padding-top:10px;padding-bottom:10px;padding-left:40px;padding-right:10px;"/></td>
                    <td><img src="<?php echo base_url();?>assets/images/design/orders/<?php echo $order['design_back_img'];?>" alt="<?php echo $order['design_back_img'];?>" style=" width:80%;border: 2px solid #e9e9e9;padding-top:10px;padding-bottom:10px;padding-left:40px;padding-right:10px;"/></td>
                  </tr>
                </table>
               <?php }}?>
            </table> 
           <hr/>  

	<!-- End Order cake details report -->