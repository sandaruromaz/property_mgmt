	<!-- BREADCRUMBS -->
		<section class="breadcrumb parallax margbot30"></section>
		<!-- //BREADCRUMBS -->
		
			<!-- PAGE HEADER -->
            <section class="page_header"> 
                        <?php if (count($products_details)){ 
		  			    foreach ($products_details-> result_array() as $product){
						?>
              <!-- CONTAINER -->
              <div class="container">
                <h6 class="pull-left">Home &gt; <?php echo $product['type_name']; ?>&gt; <?php echo $product['product_name']; ?> </h6>
                <!--<div class="pull-right"> <a href="<?php echo base_url();?>index.php/shop/" >Back to shop<i class="fa fa-angle-right"></i></a> </div>-->
              </div>
              <!-- //CONTAINER --> 
              <?php }}?>
            </section>
				<!-- //PAGE HEADER --> 
		<!-- TOVAR DETAILS -->
		<section class="tovar_details padbot70">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
                
                		<!--Errors-->	
								<?php if($this -> session -> userdata('errorSendComment')){ ?>		
                                <div class="alert alert-danger">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong><?php echo $this -> session -> userdata('errorSendComment'); ?></strong> 
                                </div>
                                <?php $this->session->unset_userdata('errorSendComment');}?>
                                <!-- Error Message-->
								<?php if($this -> session -> userdata('SuccessSendComment')){ ?>		
                                <div class="alert alert-success">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong><?php echo $this -> session -> userdata('SuccessSendComment'); ?></strong>
                                </div>                               
                                <?php $this->session->unset_userdata('SuccessSendComment');}?>
                                			<!--end Errors-->
				
					
					<!-- TOVAR DETAILS WRAPPER -->
					<div class="span12">
						<?php if (count($products_details)){ 
		  			    foreach ($products_details-> result_array() as $product){
							$product['info']=$product;
						?>		
						<!-- CLEARFIX -->
						<div class="clearfix padbot40">
							<div class="tovar_view_fotos clearfix">
								<div id="slider2" class="flexslider">
									<ul class="slides">
										<li><a href="javascript:void(0);" ><img src="<?php echo base_url();?>assets/images/products/<?php echo $product['img1']; ?>" alt="<?php echo $product['img1']; ?>" /></a></li>
										<?php if($product['img2']!=""){?>
                                        <li><a href="javascript:void(0);" ><img src="<?php echo base_url();?>assets/images/products/<?php echo $product['img2']; ?>" alt="<?php echo $product['img2']; ?>" /></a></li>
										<?php }?>
                                </ul>
								</div>
								<div id="carousel2" class="flexslider">
									<ul class="slides">
										<li><a href="javascript:void(0);" ><img src="<?php echo base_url();?>assets/images/products/<?php echo $product['img1']; ?>" alt="<?php echo $product['img1']; ?>" /></a></li>
										<?php if($product['img2']!=""){?>
                                        <li><a href="javascript:void(0);" ><img src="<?php echo base_url();?>assets/images/products/<?php echo $product['img2']; ?>" alt="<?php echo $product['img2']; ?>" /></a></li>
									<?php }?>
                                    </ul>
								</div>
							</div>
							
														<div class="span4">
                            <table width="50%" border="0" style="float:right">
                                      <tr>
                                        <td><div class="tovar_view_title"><?php echo $product['product_name']; ?></div></td>
                                       
                                      </tr>
                                      <tr>
                                        <td><div class="tovar_article"><?php echo $product['product_id']; ?></div></td>
                                      
                                      </tr>
                                      <tr>
                                        <td><div class="clearfix tovar_brend_price">
                                            <div class="pull-left tovar_view_price">LKR: <?php echo $product['price']; ?></div>
                                            </div>
                                        </td>
                                        
                                      </tr>
                                      <tr>
                                        <td><form action="<?php echo base_url();?>index.php/shop/add" method="post" onsubmit="return addcartvalidation()" id="myform">
                                            <div class="tovar_color_select">
                                            <p>Select color</p>
                                            <div class="has-error" style="margin-bottom:5px">
                                            <select name="color"  id="colors"   onchange="colorSelect(this.value);"  style="width:150px">
                                                <option value="" selected="selected">Select</option>
                                                <?php if(count($product_color)){ 
											foreach ($product_color-> result_array() as $product_color){
											?>
                                            
                                            <option value="<?php echo $product_color['color_id']; ?>"><?php echo $product_color['color_name']; ?></option>
                                            
                                            <?php }}?>
                                            </select>
                                            <br/>
                   						    <span class='error'></span> </div>
                                            </div>
                                            <div class="tovar_size_select" style="margin-bottom:-50px">
                                            <div class="clearfix">
                                            <p class="pull-left">Select SIZE</p>
                                            &nbsp;
                                        <span class="pull-left"  id="erroMsg" style="color:#F00; margin-left:10px; font-size:12px">
                                            </div>
                                            <div class=""  style="width:75%" >
                                            <div class="checkout_size " style=" border: opx; ">
                                            <ul id="size">   
                                                                       
                                                                
                                            </ul>
                                            </div>
                                            </div>
                                        </td>
                                       
                                      </tr>
                                      
                                      <tr>
                                        <td><!-- //CHECKOUT BLOCK -->
                                        <div class="has-error" style="margin-bottom:5px;margin-top:20px">
                                            <input name="qty" id="qty" type="text" value="" class="basic" placeholder="QTY"  maxlength="2" min="1" style="height:40px" />
                                        <br/>
                   						<span class='error'></span> </div>
                                        </td>
                                       
                                      </tr>
                                    </table>
                                    <table width="50%" border="0" style="float:right; margin-top:20px">
                                      <tr>
                                        <td  width="10%"><div class="tovar_view_btn">
                                        <input name="type" id="producttype" type="hidden" value="<?php echo $product['product_type_id']; ?>" />
                                        <input name="id" id="productid" type="hidden" value="<?php echo $product['product_id']; ?>" />
                                        <input name="img" id="productimg" type="hidden" value="<?php  echo $product['img1']; ?>" />
                                        <input name="name" id="productname" type="hidden" value="<?php echo $product['product_name']; ?>" />
                                        <input name="price" id="productprice" type="hidden" value="<?php echo $product['price']; ?>" />
                                        
                                        
                                        <input type="submit" value="Add to bag" title="Add to bag"  style="background-color: #333333;color: #FFFFFF;display: inline-block;height:50px; ;font-weight: 900;line-height: 20px; margin-left: 0px;padding: 13px 42px;text-transform: uppercase;width: auto;">
                                        </form>
                                        
                                        </td>
                                        <td width="20%">
                                        <form action="<?php echo base_url(); ?>index.php/customer/Wishlist/<?php echo $product['product_type_id'];?>/<?php echo $product['product_id'];?>" method="post">
                                        <input id="wishproductid" name="wishproductid"  type="hidden" value="<?php  echo $product['product_id'] ;?> ">
                                        <input type="submit" value="Add to Wishlist" title="Add to Wishlist" style="background-color:#cc3333;color: #FFFFFF;display: inline-block;height:50px; ;font-weight: 900;line-height: 20px; margin-left: 7px;padding: 13px 42px;text-transform: uppercase;width: auto;">
                                        
                                        </form>	
                                        </td>
                                        <td width="40%">
                                        </div>
                                        </td>
                                      </tr>
                                      <tr >
                                      <td colspan="3">
                                      <a  target="_blank" href="<?php echo base_url(); ?>index.php/pages/buying_guide" class="btn inactive" style="margin-top:20px; padding:13px 27px">Buying Guides</a>
                                      </td>
                                      </tr>
                                      </table>
							</div>
						</div><!-- //CLEARFIX -->
						
						<!-- TOVAR INFORMATION -->
						<div class="tovar_information">
							<ul class="tabs clearfix">
								<li class="current">Details</li>
								<li>Reviews (<?php echo $count_comment; ?>)</li>
							</ul>
							<div class="box visible">
								<p><?php echo $product['description']; ?></p>
                                </div>
						
							 <?php }}?>
							<div class="box">
								<ul class="comments">
                                <?php if ($product_comment != "empty"){
		  				        foreach ($product_comment as $row){?>
									<li>
										<div class="clearfix">
											<p class="pull-left"><strong><a href="javascript:void(0);" ><?php echo $row->fname; ?></a></strong></p>
											<span class="date"><i class="fa fa-calendar"></i> <?php echo $row->date; ?> / <?php echo $row->time; ?></span>
											
										</div>
										<p><?php echo $row->comment; ?></p>
									 </li >
                                     <hr  size="2px"/>
                                   <?php }}else{
							   
							   echo'<h3 class="page-header" align="center">No comments of this product !</h3>';
							   } ?>
								</ul>
								 <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {?>
                                
								<h3>WRITE A REVIEW</h3>
								<p>Please write a (short) review..</p>
								<div class="clearfix">                           
                                 <form action=" <?php echo base_url(); ?>index.php/customer/comment/<?php echo $product['info']['product_type_id'];?>/<?php echo $product['info']['product_id'];?>/<?php echo $product['info']['product_name'];?>" method="post" onsubmit="return reviewvalidation()"   >
								 <input id="product" name="product"  type="hidden" value="<?php echo $product['info']['product_id'];?>">
                                    <table width="100%" border="0">
                                      
                                      <tr>
                                        <td width="10%" valign="top">Comment</td>
                                        <td width="90%"><div class="has-error" style="margin-bottom:5px">
                                        <textarea name="comment" id="comments" cols="" rows="10"></textarea>
                                        <br/>
                   						<span class='error'></span> </div></td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                    </table>

									
                                     
									<input type="submit" class="dark-blue big" value="Submit a review">
                                    </form>
								</div>
                                <?php }else{?>
								<h3 align="center">Leave a comment of this product. <a href="<?php echo  base_url(); ?>index.php/pages/signin/">Please <span style="color:#F00"> login </span>to the system.</a></h3>	
									
								<?php }?>
							</div>
						</div><!-- //TOVAR INFORMATION -->
					</div><!-- //TOVAR DETAILS WRAPPER -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //TOVAR DETAILS -->
		
		
		<!-- BANNER SECTION -->
		<section class="banner_section">
			
			<!-- CONTAINER -->
			<div class="container">

			</div><!-- //CONTAINER -->
		</section><!-- //BANNER SECTION -->
		
		
		<!-- NEW ARRIVALS -->
		<section class="new_arrivals padbot50">
			
			<!-- CONTAINER -->
			<div class="container">
            
		  	
				<h2>YOU MAY ALSO LIKE</h2>
				
				<!-- JCAROUSEL -->
				<div class="jcarousel-wrapper">
					
					<!-- NAVIGATION -->
					<div class="jCarousel_pagination">
						<a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
						<a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
					</div><!-- //NAVIGATION -->
					
					<div class="jcarousel">
						<ul>
							<!-- TOVAR -->
                            	
                                <?php if (count($related_products)){ 
		  			             foreach ($related_products-> result_array() as $row){
						         ?>
                                 <li>
								<div class="tovar_item_new">
									<div class="tovar_img">
										<a  href="<?php echo base_url(); ?>index.php/shop/products_details/<?php echo str_replace('-',' ',ucwords($this->uri->segment(3))); ?>/<?php echo $row['product_id'];?>/<?php echo url_title(strtolower($row['type_name'])); ?>/<?php echo url_title(strtolower($row['product_name']));?>" ><img src="<?php echo base_url();?>assets/images/products/<?php echo $row['img1']; ?>" alt="<?php echo $row['product_name']; ?>" /></a>
										 <!-- <div class="open-project-link">
                                      <a  href="<?php echo base_url(); ?>index.php/shop/products_details/<?php echo str_replace('-',' ',ucwords($this->uri->segment(3))); ?>/<?php echo $row['product_id'];?>" >quick view</a>
                                        </div>-->
									</div>
									<div class="tovar_description clearfix">
										<a class="tovar_title"  target="_blank" style="min-height: 0px;" href="<?php echo base_url(); ?>index.php/shop/product_details/<?php echo str_replace('-',' ',ucwords($this->uri->segment(3))); ?>/<?php echo str_replace('-',' ',ucwords($this->uri->segment(4))); ?>/<?php echo $row['product_id'];?>" ><?php  echo $row ['product_name'];?></a>
										<span class="tovar_price">LKR: <?php  echo $row ['price'];?></span>
									</div>
								</div>
                                </li>
                                <?php }}?>
                                
                                <!-- //TOVAR -->
                                
						</ul>
					</div>
				</div><!-- //JCAROUSEL -->
			</div><!-- //CONTAINER -->
		</section><!-- //NEW ARRIVALS -->
	<script type="text/javascript">
	function colorSelect(color){
			
                
                $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url(); ?>index.php/shop/product_color_details/<?php echo $product['info']['product_id']; ?>/'+color,
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (data) {
                                console.log(data);
								
                                $('#size').html(data.msg);
								
                        }
                });
	}
		$('select#color').change(function(event) {
			
        });
    </script>
	<script type="text/javascript">
	$(document).ready(function() {
	$('#myform').submit(function(){
		if($('input[name=size]:checked').length<=0){
	 $('#erroMsg').fadeIn('slow').html('Please select a size');
		  setTimeout(function(){
			 $('#erroMsg').fadeOut('slow');
		  },3000);
	}
		});
	   
	
	});
	</script>