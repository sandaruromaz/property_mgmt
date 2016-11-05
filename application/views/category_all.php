<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name">All Products</h2>
		

			<div class="row">

							<?php 
							foreach ($getallcategories as $category) {?>

						<div class="col-md-4 col-sm-12">
								<h3><?php echo $category->type_name ; ?> </h3>
							
							
							
							<?php
							foreach ($product as $products) {
								if($category->product_type_id==$products->product_type_id){
									 echo '<a href="'.base_url().'index.php/shop/product_details/'.$products->product_id.'"><span>'.$products->product_name.'</span></a></br>';
							
								}
							}
							?>
						</div>
							<?php }?>

							
				</div>			
		
		
						    </div>
</div>
</div>
</div>
	
		

