<?php if (!isset($_SESSION['user_id']) || $_SESSION['user_id']=='')
			{		 redirect('/pages/signin', 'location');	 		}
		?>	

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name"> Reservation Details
</h2>  
		
            <?php if (count($reservehowhistory)){
		  foreach ($reservehowhistory-> result_array() as $reserve){?>
			<?php }}?><!-- ROW -->		
		<!-- TOVAR DETAILS -->
		<section class="tovar_details padbot70">
<a style="float:right" href="<?php echo base_url();?>index.php/Customer/getreserveReport/<?php echo $reserve['table_reservation_id']; ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> PRINT</a>

                <div class="col-lg-12 col-md-12 tovar_details_wrapper clearfix">
				<div class="row">
               <table width="50%" border="0">
               <?php if (count($reservehowhistory)){
		
		  			foreach ($reservehowhistory-> result_array() as $reserve){
				
						?>
                  <tr>
                    <td><h4>Reservation No </h4></td>
                    <td> <h4>: <?php echo $reserve['table_reservation_id']; ?></h4></td>
                  </tr>
                  <tr>
                    <td><h5>Reserve Date </h5></td>
                    <td><h5>: <?php echo $reserve['created_date']; ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Status </td>
                    <td><h5>: <?php echo $reserve['status']; ?></h5></td>
                  </tr>
                  <?php if($reserve['status']=="Delivered"){?>
                           <tr>
                            <td><h5>Check in</h5></td>
                            <td><h5>: <?php echo $reserve['start_time']; ?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Check Out</h5></td>
                            <td><h5>: <?php echo $reserve['end_time']; ?></h5></td>
                          </tr>
                  <?php }?>
                  
                </table>
                
					
                     <h3>Reservation</h3>
                        <table align="center" style="width:100%" class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Date 
                                                    </th>
                                                    <th>
                                                        Check In
                                                    </th>
                                                    <th>
                                                        Check Out
                                                    </th>
                                                    <th>
                                                        No of Chairs
                                                    </th>
                                                    <th>
                                                        No of Tables
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                               <?php if (count($reservehowhistory)){
                                               foreach ($reservehowhistory-> result_array() as $row){
                                                ?>
                                                 <tr>
                                                   <td>                                                                                                                                                                                                                                                                                               
                                                    <?php echo $row['date']; ?>
                                                    </td>
                                                    <td class="hidden-xs">
                                                    <?php echo $row['start_time']; ?><br/>
                                                    </td>
                                                    <td class="hidden-xs">
                                                     <?php echo $row['end_time']; ?>
                                                    </td>
                                                    <td class="hidden-xs">
                                                     <?php echo $row['chair_count']; ?>
                                                    </td>
                                                    <td class="hidden-xs">
                                                     <?php echo $row['table_count']; ?>
                                                    </td>
                                                </tr>
                                                <?php }}?>
                                                                                                                                                <tr>
                                                    <td class="highlight" colspan="3">
                                                    <strong>Reserved Date :<?php echo $reserve['created_date']; ?></strong>
                                                    </td>
                                                   
                                                    
                                                </tr>
                                                                                                
                                                </tbody>
                                                </table>
                                                <?php }}?>
                        
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
                        <?php  /*if (count($billingdetails)){    
              foreach ($billingdetails-> result_array() as $row){
        */
            ?>    
                                    <?php echo $profile['user']['title']; ?>.<?php echo $profile['user']['fname']; ?>&nbsp;<?php echo $profile['user']['lname']; ?>.<br/>
                                    <?php echo $row['address']; ?>,<br/>
                                    <?php echo $row['address1']; ?><br/>
                                    <?php echo $row['city']; ?>.<br/>
                                    <?php echo $row['email']; ?>.<br/>
                                    <?php echo $row['telephone']; ?><br/>
                                    
                          <?php //}}?>          </td>									
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
        
