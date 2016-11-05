<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->

<div class="page-content-wrapper">
		<div class="page-content">						
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url(); ?>index.php/admin">
							Home </a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							
							Customize Cake 
							<i class="fa fa-angle-right"></i>
						</li>
                        <li>
							<a href="<?php echo base_url(); ?>index.php/admin/design_orders">
							Customize Cake Orders  </a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Order Details
						</li>
						
					</ul>
					<h3 class="page-title">
					Order Details <small></small><a style="float:right" class="btn green tooltip-button" href="<?php echo base_url(); ?>index.php/admin/design_orders">View All Orders</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errororderdetilsdesign')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errororderdetilsdesign'); ?></div>
              <?php $this->session->unset_userdata('errororderdetilsdesign');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successorderdetilsdesign')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successorderdetilsdesign'); ?>
                </div>
              <?php $this->session->unset_userdata('successorderdetilsdesign');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-square"></i>Order Details 
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
                        <table width="20%" border="0">
                                 <tbody>
                           <?php if (count($admin_orderdetails)){		
		  			       foreach ($admin_orderdetails-> result_array() as $order){?>      
                          <tr>
                            <td><h3>Order No </h3></td>
                            <td><h3>: <?php echo $order['design_order_id']; ?></h3></td>
                          </tr>
                          <tr>
                            <td><h5>Order Date </h5></td>
                            <td><h5>: <?php echo $order['order_date']; ?></h5></td>
                          </tr>
                          
                          <tr>
                            <td><h5>Status </h5></td>
                            <td><h5>: <?php if ($order['status'] == "Pending"){?>
                                    <span class="badge badge-error badge-roundless">
                                    <?php } else if($order['status'] == "Confirmed"){?> <span class="badge badge-success badge-roundless"> <?php } else{?>
									<span class="badge badge-danger badge-roundless">	
								    <?php }?>
                                    <?php echo $order['status'];?></span>
                            
                               </h5>
                            </td>
                          </tr>
                          <?php if($order['status'] == "Confirmed"){?>
                           <tr>
                            <td><h5>Confirmed Date</h5></td>
                            <td><h5>: <?php echo $order['confirmed_date']; ?></h5></td>
                          </tr>
                          <?php }?>
                        </tbody>
                        </table>
                        <h3>Customer Information</h3>
                                            <table width="100%">
                        
            <!--Customer Information-->
                        <tbody style="background-color:#f5f5f5;">
                                <tr>
                                    <td style="float:left; padding:10px 10px 10px 10px" width="15%">
                                    Customer ID                                                                           
                                    </td>
                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                    : <?php echo $order['customer_id'];?></td>										
                                </tr>
                                 <tr>
                                    <td style="float:left; padding:10px 10px 10px 10px" width="15%">
                                    Customer Name                                                                           
                                    </td>
                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                    : <?php echo $order['title'];?>. <?php echo $order['fname'];?> <?php echo $order['lname'];?></td>										
                                </tr>
                                <tr>
                                    <td style="float:left; padding:10px 10px 10px 10px" width="15%">
                                    Contact No 1                                                                           
                                    </td>
                                    <td style="float:left; padding:10px 10px 10px 10px">                                                                           
                                    : <?php echo $order['telephone'];?></td>										
                                </tr>
                                                                
                            </tbody>
                        </table>
                         <?php $unitprice=$order['amount'] ?>
                             <h3>Size Details</h3>
                            <table width="20%" border="1">
                            <tr>
                                <td style="padding:10px"><h5>Size Type </h5></td>
                                <td style="padding:10px"><h5>Quantity </h5></td>
                              </tr>

                              <tr >
                                <td style="padding:10px"><h5> <?php echo $order['size']; ?></h5></td>
                                <td style="padding:10px"><h5><?php echo $order['qty']; ?></h5></td>
                              </tr>
                               <tr>
                                 <td style="padding:10px">Unit Price
                                 </td>
                                 <td style="padding:10px">LKR: <?php echo $unitprice ?>
                                 </td>
                                 </tr>
                                 <tr>
                                 <td style="padding:10px">Total
                                 </td>
                                 <td style="padding:10px">LKR: 
                                 
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
                                <td><h4 style="font-size:15px">Front View</h4></td>
                                <td><h4 style="font-size:15px">Back View</h4></td>
                              </tr>
                              <tr>
                                <td><img src="<?php echo base_url();?>assets/images/design/orders/<?php echo $order['design_front_img'];?>" alt="<?php echo $order['design_front_img'];?>" style=" width:95%;border: 2px solid #e9e9e9;padding-top:10px;padding-bottom:10px;padding-left:40px;padding-right:10px;"/></td>
                                <td><img src="<?php echo base_url();?>assets/images/design/orders/<?php echo $order['design_back_img'];?>" alt="<?php echo $order['design_back_img'];?>" style=" width:95%;border: 2px solid #e9e9e9;padding-top:10px;padding-bottom:10px;padding-left:40px;padding-right:10px;"/></td>
                              </tr>
                            </table>
                             <h3>Customer Comment</h3>
                             <table width="100%" border="0">
                              <tr>
                                <td><h4 style="font-size:15px">comment</h4></td>                                
                              </tr>
                              <tr>
                                <td style="border: 1px solid #e9e9e9;padding: 10px 10px 10px; width:100%" colspan="2"><?php echo $order['comment'];?></td>                               
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><a href="#replyModal<?php echo $order['design_order_id'];?>" style="float:right" data-toggle="modal" data-original-title="REPLY" data-placement="top" class="btn green tooltips">REPLY</a></td>                                
                              </tr>
                             </table>
                          <?php }}?> 
                   

						</div>
					</div>
                       
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
					 <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <?php if(count($admin_orderdetails)){
                            foreach($admin_orderdetails-> result_array()as $row){ ?>  
					 <div id="replyModal<?php echo $order['design_order_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Send Message</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/AdminControl/replydesignorders/<?php echo $order['design_order_id'];?>" method="post" enctype="multipart/form-data" onsubmit="return sendmailvalidation()" >
                                        <div class="form-body">
                                           <div class="form-group">
                                                <label class="col-md-2 control-label">To</label>
                                                <div class="col-md-10">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="To" value="<?php echo $order['email'];?>" class="form-control" name="to" id="to"  readonly="readonly">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-2">Message</label>
                                                <div class="col-md-10">
                                                <div class="has-error" >
                                                <textarea class="wysihtml5 form-control" name="message" rows="10" id="sendmessage"></textarea>
                                                  <span class='error'></span> </div>   
                                                    </div>
                                                </div>
                                            
                                             <div class="form-group">
                                                <label class="col-md-2 control-label">Attach File</label>
                                                <div class="col-md-10">
                                                 <div class="has-error" >
                                                   <input type="file"  placeholder="Brand Name" class="btn grey fileinput-button" name="attach"  style="margin-top:5px" id="fileChooser2" onchange="return ValidateFileUpload2()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                       
                                        <button class="btn green" type="submit" name="btnFeed">SEND</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                            <?php }}?>
                            <!---->			
                    
                    
				</div>
                  
				</div>
                
                </div>
                
			<!-- END PAGE CONTENT-->
		</div>
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/tabletools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/table-advanced.js"></script> 
   <SCRIPT type="text/javascript">
    function ValidateFileUpload2() {
        var fuData = document.getElementById('fileChooser2');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload coorect file");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "pdf" || Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Allows file types of PDF, GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }
</SCRIPT>
   <script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   TableAdvanced.init();
});
</script>