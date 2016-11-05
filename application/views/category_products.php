

            <!--main contet-->
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="content">

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="body-content">

                    <!-- Breadcrumbs  -->
                    <div class="ft-breadcrumbs">
                        
                    </div>
                    
                    
                      <div class="page-header">
						<h2 itemprop="name">
						<?php echo $catname ;?>
						</h2>
	
					   </div> 

					   <!--code-->	
              <div itemprop="articleBody" class="login_page" >

			  </div>
			  <div class="row">
             <?php //echo $catname ;?>
             <div class="col-xs-12 col-sm-12 col-md-3 itemfilter">
             	<div>
             		<div class="sidepanel widget_pricefilter">
			          <h3>Filter by price</h3>
                    <form action="<?php echo base_url(); ?>index.php/shop/product_catergory/<?php echo $this->uri->segment(3); ?>" id="" method="post">
        
			             <input  type="text" id="pricefrom" class="input-text" name="pricefrom" value="<?php if(isset($_POST['pricefrom']) && $_POST['pricefrom']!='' ){ if ($_SESSION['priceFrom']==0){echo'from';}else{echo  $_SESSION['priceFrom'];}}?>" placeholder="from" size="2" style="width:25%; height:25px; padding:5px" maxlength="4"> - 
             <input  type="text" id="priceto" class="input-text" name="priceto" value="<?php if(isset($_POST['priceto']) && $_POST['priceto']!=''){  if ($_SESSION['priceTo']==100000){echo'to';}else{echo  $_SESSION['priceTo'];}}?>"  placeholder="to" size="2" style="width:25%; height:25px; padding:5px" maxlength="4"> &nbsp;
             <button style="padding:0px;height:25px; padding:0px 22px 0px 22px" class="btn btn-inverse" type="submit" title="Find">Find</button>
			  			      </form>
			        </div>
             	</div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-9 itemcategory">
             <div class="row">


                <?php if($product == 'empty'){
                echo '<div class="col-xs-12 col-sm-12"><div class="alert alert-warning" role="alert">Sorry - No category found</div></div>';
                  }else{

                  foreach($product as $products)
                  {?>


                <div class="col-xs-12 col-sm-4 category"> 
                <a href="<?php echo base_url();?>index.php/shop/product_details/<?php echo $products->product_id;?>" >
                 <div class="categoryimg">
                 		<?php 
						$image_height = "200";
			            $image_width = "200";
						$product_image=$products->img1;
			            $large_product_image =base_url().'assets/images/products/' . $product_image;
			            $thumb_product_image =base_url(). "assets/timthumb.php?src=" . $large_product_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
						?>
                 <img class="img" src="<?php echo $thumb_product_image; ?>" alt="<?php echo $products->img1; ?>" />
                 </div>
                 <div class="categoryname">	
                 	<?php echo $products->product_name;?>
                 </div>
                 <div class="categoryname price">
                 	LKR : <?php echo $products->price;?>
                 </div>
                 </a>

                </div>
              
                <?php  }
                } ?>
                 </div>
            </div>
            </div>



						<!--code-->
                </div> 
                </div>

            </div>
           </div>
           </div>
           <!--end main contet-->
			<script src="<?php echo base_url(); ?>assets/js/jquery.equalheights.js"></script>
