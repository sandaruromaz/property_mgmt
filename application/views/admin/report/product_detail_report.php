
 
            
 <!--this array can be used in any where in this page-->
<!-- Start my account Site Container -->
 <table width="70%" border="2" style="font-family:'Times New Roman', Times, serif; ">
  <tr>
    <td style="color:#666;">The Report Name</td>
    <td style="color:#000; font-family:'Times New Roman', Times, serif; ">: Product Detail Report</td>
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
        
   <?php if ($orderd != "empty"){?>
     
 <table class="tableClass">
                        <thead class="theadClass">
                                <tr class="headerRow">
                                        <th>Order id</th>
                                        <th>Product Name</th>
                                        
                                        
                                        
                                        
                                </tr>
                        </thead>
                <tbody>
<?php
                      foreach ($orderd as $row){?>        
  <tr align="center">
    <td align="center"><?php  echo $row ->order_id?></td>
    <td align="center"><?php  echo $row ->product_name?></td>
    
    
    
  </tr>
 <?php }} else {
	 
echo "There are no records to display.";	 
	 
	 
 }?>

 </tbody> 
</table>
 <hr/>  

	<!-- End Order details report -->