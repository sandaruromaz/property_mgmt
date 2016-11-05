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
		
		
		<!-- TOVAR DETAILS -->
		<section class="tovar_details padbot70">

            <?php if (count($designorderdetails)){
		  foreach ($designorderdetails-> result_array() as $order){?>
			 <a style="float:right" href="<?php echo base_url();?>index.php/Customer/getdesignorderReport/<?php echo $order['design_order_id']; ?>" target="_blank"><i class="fa fa-print"></i> PRINT</a>	
			<?php }}?><!-- ROW -->
                <div class="col-lg-12 col-md-12 tovar_details_wrapper clearfix">
				<div class="row">
               <table width="20%" border="0">
               <?php if (count($designorderdetails)){
		
		  			foreach ($designorderdetails-> result_array() as $order){
				
						?>
                  <tr>
                    <td><h3>Order No </h3></td>
                    <td><h3>: <?php echo $order['design_order_id']; ?></h3></td>
                  </tr>
                  <tr>
                    
                    <td><h5>Order Date </h5></td>
                    <td><h5>: <?php echo $order['order_date']; ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Confirmation </td>
                    <td><h5>: <?php echo $order['status']; ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Dilivery Date  </td>
                    <td><h5>: <?php echo $order['dilivery_date']; ?></h5></td>
                  </tr>
                  <?php if($order['confirmed_date']!=""){?>
                           <tr>
                            <td><h5>Delivered Date</h5></td>
                            <td><h5>: <?php echo $order['design_order_id']; ?></h5></td>
                          </tr>
                  <?php }?>
                  <?php $unitprice=$order['amount'] ?>
                </table>
                <h3>Size Details</h3>
                
                <table width="20%" border="1" style=" padding:10px">
                <tr style="padding-right::10px">
                    <td><h5>Size Type </h5></td>
                    <td><h5>Quantity </h5></td>
                  </tr>
                

                   <tr >
                                <td> <?php echo $order['size']; ?></td>
                                <td><?php echo $order['qty']; ?></td>
                              </tr>

                 <tr>
                 <td >Unit Price
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
                <h3>Dummy Design</h3>
                
                <table width="100%" border="0">
                  <tr>
                    <td><h5>Front View</h5></td>
                    <td><h5>Back View</h5></td>
                  </tr>
                  <tr>
                    <td><img src="<?php echo base_url();?>assets/images/design/orders/<?php echo $order['design_front_img'];?>" alt="<?php echo $order['design_front_img'];?>" style=" width:80%;border: 1px solid #e9e9e9;padding-top:10px;padding-bottom:10px;padding-left:40px;padding-right:10px;"/></td>
                    <td><img src="<?php echo base_url();?>assets/images/design/orders/<?php echo $order['design_back_img'];?>" alt="<?php echo $order['design_back_img'];?>" style=" width:80%;border: 1px solid #e9e9e9;padding-top:10px;padding-bottom:10px;padding-left:40px;padding-right:10px;"/></td>
                  </tr>
                </table>
               <?php }}?>
			
				</div>	
				</div><!-- //ROW -->
		</section><!-- //TOVAR DETAILS -->
            </div>
</div>
</div>
</div>
        
