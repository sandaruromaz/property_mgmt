<style>
	.recent_post_date , .recent_post_date img, .post_image{
		margin-right: 10px;
	}
	.post {
		margin: 10px 0;
	}
</style>		
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name">News
</h2>
		
		
		
		<!-- BLOG BLOCK -->
		<section class="blog">

			
			<img width="100%" src="<?php echo base_url();?>assets/images/banner/news.jpg">
			<p> </p>
				<!-- ROW -->
				<div class="row">
					<!-- SIDEBAR -->
					<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">
					<h6></h6>
						<!-- WIDGET SEARCH -->
						<div class="sidepanel widget_search">
							<form class="search_form" action="<?php echo base_url();?>index.php/news/search" method="POST" name="search_form">
								<input type="text" name="search" placeholder="Search News..." onFocus="if (this.value == 'search') this.value = '';" onBlur="if (this.value == '') this.value = 'search';" style="margin-bottom: 7px;width: 100%;"/>
							</form>
						</div><!-- //WIDGET SEARCH -->
		
						
						<!-- BANNERS WIDGET -->
						<div class="sidepanel widget_categories">
							<h3>NEW ITEMS</h3>
							<ul>
							  
							</ul>
						</div><!-- //BANNERS WIDGET -->
                        <div class="sidepanel widget_categories">
                            <ul class="tovar_items_small clearfix">
        <?php if(count($newitems)){ 
		foreach ($newitems-> result_array() as $newitem){
		?>
							<li class="clearfix">
								<a href="<?php echo base_url();?>index.php/shop/product_details/<?php echo $newitem['product_id']; ?>" style="float:left; margin-right:10px;margin-bottom:10px">
                    <?php 
            $image_height = "70";
                  $image_width = "70";
            $product_images=$newitem['img1'];
                  $large_product_images =base_url().'assets/images/products/' . $product_images;
                  $thumb_product_images =base_url(). "assets/timthumb.php?src=" . $large_product_images . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
            ?>
                 <img class="img" src="<?php echo $thumb_product_images; ?>" alt="<?php echo $newitem['img1']; ?>" />
</a>
								<a class="tovar_item_small_title" href="<?php echo base_url();?>index.php/shop/product_details/<?php echo $newitem['product_id']; ?>"><?php echo $newitem['product_name']; ?></a><br/>
								<span class="tovar_item_small_price">LKR: <?php echo $newitem['price']; ?></span>
							</li>
							
                            <?php }}?>
                            </ul>
                        </div>
					</div><!-- //SIDEBAR -->
					
					<!-- BLOG LIST -->
					<div class="col-lg-9 col-md-9 col-sm-9 padbot30" >
                    <p>&nbsp;</p>
					<p>Search results for "<?php echo $_REQUEST['search']; ?>"</p>
		<?php $i=1;
     if (count($search_data)){ 
	foreach ($search_data as $row){
			$image_news_height = "100";
				$image_news_width = "100";
				$news_images=$row['image'];
				$large_news_images =base_url().'assets/images/news/' . $news_images;
				$thumb_news_images =base_url(). "assets/timthumb.php?src=" . $large_news_images . "&h=" . $image_news_height . "&w=" . $image_news_width . "&zc=1";
	
					echo '<article class="post margbot40 clearfix" data-appear-top-offset="-100" data-animated="fadeInUp">';
							echo '<a class="post_image pull-left" >';
								echo '<div class="recent_post_date"><span>'.$row['publish_date'].'</span></div>';
								echo '<img src="'; echo $thumb_news_images.'" alt="" />';
							echo '</a>';
							echo '<a class="post_title"  >'.$row['news_topic'].'</a>';
							echo '<div class="post_content">'.$row['news_body'].'</div>';
					echo '</article>';
							}}else{
echo " <p> Sorry, no records were found to match your search term. </p> ";
}?>
                       <hr>
						
						<!-- PAGINATION -->
						<div class="pagination clearfix">
						</div><!-- //PAGINATION -->
						<p>&nbsp;</p>			
					</div><!-- //BLOG LIST -->
					
					
					
				</div><!-- //ROW -->
		</section><!-- //BLOG BLOCK -->
							    </div>
</div>
</div>
</div>