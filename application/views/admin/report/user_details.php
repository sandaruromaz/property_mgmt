 <!-- System User details report -->

        
<!-- Start my account Site Container -->
 <table width="70%" border="2" style="font-family:'Times New Roman', Times, serif; ">
  <tr>
    <td style="color:#666;">The Report Name</td>
    <td style="color:#000; font-family:'Times New Roman', Times, serif; ">:User Details Report</td>
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
 <?php if ($user != "empty"){?>
 <table class="tableClass">
                        <thead class="theadClass">
                                <tr class="headerRow">
                                        <th>Date</th>                                   
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>User Role</th>
                                        <th>Status</th>
                                        
                                </tr>
                        </thead>
                <tbody>
 
                    <?php  foreach ($user as $row){?>        
  <tr style="border-bottom:2px solid #333" >
    <td ><?php  echo $row ->Month?></td>
    <td ><?php  echo $row ->Name ?></td>
    <td ><?php  echo $row ->Email?></td>
    <td ><?php  echo $row ->Role ?></td>
    <td ><?php  echo $row ->Status ?></td>
  </tr>
<?php }} else {
	 
echo "There are no records to display.";	 
	 
	 
 }?>

 </tbody> 
</table>
 <hr/>  

	<!-- End System User details report -->