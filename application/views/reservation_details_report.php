 <!--reservation details report -->
 <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
 ?>
            
 <!--this array can be used in any where in this page-->
 <?php if (count($user_data)){ 
 foreach ($user_data-> result_array() as $row){
  $profile = array('user' => $row);	
  }}}
  ?> 
        
<!-- Start my account Site Container -->
        <h4>RESERVATION DETAILS</h4>
         <table width="50%" border="2">
                <tr>
                <td></td>
                <td></td>
                </tr>
                  <tr>
                    <td>Customer Name</td>
                    <td>: <?php echo $profile['user']['title']; ?>.<?php echo $profile['user']['fname']; ?>&nbsp;<?php echo $profile['user']['lname']; ?></td>
                  </tr>
                 <?php if (count($reservehowhistory)){
      foreach ($reservehowhistory-> result_array() as $reserve){?>
      
                  <tr>
                    <td>Reservation No</td>
                    <td>: <?php echo $reserve['table_reservation_id']; ?></td>
                  </tr>
                  <tr>
                    <td>Reserve Date</td>
                    <td>:  <?php echo $reserve['created_date']; ?></td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>: <?php echo $reserve['status']; ?></td>
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

                <h4>Reservation</h4>
                <table class="tableClass">
                        <thead class="theadClass">
                                <tr class="headerRow">
                                        <th>Date</th>
                                        <th>Check in</th>
                                        <th>Check Out</th>
                                        <th>No of Chairs</th>
                                        <th>No of Tables</th>
                                </tr>
                        </thead>
                <tbody>
               <?php if (count($reservehowhistory)){
                    foreach ($reservehowhistory-> result_array() as $row){
                ?>
                <tr>
                <td class="tdClass"><?php echo $row['date']; ?></td>
                <td class="tdClass"><?php echo $row['start_time']; ?><br/>
                <td class="tdClass"><?php echo $row['end_time']; ?></td>
                <td class="tdClass"><?php echo $row['chair_count']; ?></td>
                <td class="tdClass"><?php echo $row['table_count']; ?></td>
                </tr>
                <?php }}?>
                
                <br/>
                <tr>
                <td  style="font-weight: bold;padding-left: 10pt; vertical-align: bottom;background-gradient:  linear  #89908b #f1f1f1 0 2 0 0.2;border-top: 1px solid #FFFFFF;" colspan="3">
                Created Date :<?php echo $row['created_date']; ?></td>
                
                </tr>
                
                </tbody>
                </table>
                
                       
                
                
                <h4>Cutomer Home Address</h4>
                <table width="100%" border="0" >
               
              <tr>
                <td width="21%" style="padding-left:10px">Address : </td>
                <td width="79%"><?php echo $profile['user']['title']; ?>.<?php echo $profile['user']['fname']; ?>&nbsp;<?php echo $profile['user']['lname']; ?>,</td>
              </tr>
              <tr>
                <td></td>
                <td><?php echo $row['address']; ?>,</td>
              </tr>  
              <tr>
                <td></td>
                <td ><?php echo $row['address1']; ?></td>         
              </tr>
              <tr>
                <td></td>
                <td><?php echo $row['city']; ?>.</td>
              </tr>
              <tr>
                <td  style="padding-left:10px">Postal Code : </td>
				<td><?php echo $row['postal_code']; ?></td>
                
              </tr>
              <tr>
                <td  style="padding-left:10px">Contatct No : </td>
				<td><?php echo $row['telephone']; ?></td>
                
              </tr>
               <?php }}?>
            </table> 
           <hr/>  

	<!-- End Order details report -->