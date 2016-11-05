
		<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name">Gallery
</h2>  
		
		<!-- TOVAR DETAILS -->
		<section class="tovar_details padbot70">			

				<!-- ROW -->
				<div class="row">			
				
					<!-- TOVAR DETAILS WRAPPER -->
					<div class="col-lg-12 col-md-12 tovar_details_wrapper clearfix"> 



  <!-- Nav tabs -->

<?php if (count($category)){ 
							foreach ($category-> result_array() as $row){

                  $image_height = "90";
                  $image_width = "150";
                  $galery_img=$row['catergory_image'];
                  $large_lleryga_image =base_url().'assets/images/gallerycategory/' . $galery_img;
                  $thumb_ga_image =base_url(). "assets/timthumb.php?src=" . $large_lleryga_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
            
							?>

             <div class="col-md-4 col-xs-12" style="margin-bottom:10px;">
               
                <div class="pg-csv-box">
                 <div class="pg-csv-box-img pg-box1">
                  <div class="pg-box2">
                   <div class="pg-box3">
                <a href="<?php echo base_url(); ?>index.php/pages/gallery_category/<?php echo $row['gallery_category_id']?>">
                <img alt="<?php echo $row['name']?>" width="100%" src="<?php echo $thumb_ga_image;?>" style="padding:10px"></a>
                    </div>
                  </div>
                 </div>
                <div class="pg-csv-name"><a href="/newmonisbakery/gallery/category/3-in-1980"><?php echo $row['name']?></a> 
                </div>
                </div>


             </div>

<?php }}?>	

						</div><!-- //TOVAR INFORMATION -->
				</div><!-- //ROW -->
		</section><!-- //TOVAR DETAILS -->
 </div>
</div>
</div>
</div>
