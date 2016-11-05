 <!-- Order details report -->

        
<!-- Start my account Site Container -->
 <table width="70%" border="2" style="font-family:'Times New Roman', Times, serif; ">
  <tr>
    <td style="color:#666;">The Report Name</td>
    <td style="color:#000; font-family:'Times New Roman', Times, serif; ">: Cake Customization Growth Report</td>
  </tr>
  <tr>
    <td style="color:#666;">The Report For</td>
    <td style="color:#000; font-family:'Times New Roman', Times, serif; ">: <?php echo $start;?> - <?php echo $end;?> period</td>
  </tr>
  <tr>
    <td style="color:#666;">The Report Day</td>
    <td style="color:#000; font-family:'Times New Roman', Times, serif; ">: <?php echo date("l");?>,<?php echo date("d-m-Y"); ?> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
 <?php if ($design != "empty"){?>
 <table class="tableClass">
                        <thead class="theadClass">
                                <tr class="headerRow">
                                        <th>Month</th>
                                      
                                        <th>Number Of Design Orders</th>
                                        
                                </tr>
                        </thead>
                <tbody>
 
                    <?php  foreach ($design as $row){?>        
  <tr >
    <td align="center"><?php  echo $row ->Month?></td>
    <td align="center"><?php  echo $row ->NumOrder ?></td>
   
  </tr>
<?php }} else {
	 
echo "There are no records to display.";	 
	 
	 
 }?>

 </tbody> 
</table>
 <hr/>  

	<!-- End Order details report -->