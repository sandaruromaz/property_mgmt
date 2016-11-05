
  <script src=" <?php echo base_url(); ?>assets/album/js/jquery.prettyPhoto.js"></script>
  <link href="<?php echo base_url(); ?>assets/album/css/prettyPhoto.css" rel="stylesheet" type="text/css" />


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

<?php if (count($images)){ 
							foreach ($images-> result_array() as $row){

                  $image_height = "90";
                  $image_width = "150";
                  $galery_img=$row['image'];
                  $large_lleryga_image =base_url().'assets/images/galleryimages/' . $galery_img;
                  $thumb_ga_image =base_url(). "assets/timthumb.php?src=" . $large_lleryga_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
            
							?>

             <div class="col-md-4 col-xs-12" style="margin-bottom:10px;">
               
                <div class="pg-csv-box">
                 <div class="pg-csv-box-img pg-box1">
                  <div class="pg-box2">
                   <div class="pg-box3">
                   <div class="gallery">
                <a href="<?php echo $large_lleryga_image; ?>" rel="prettyPhoto" title="">
                <img alt="<?php echo $row['name']?>" width="100%" src="<?php echo $thumb_ga_image;?>" style="padding:10px"></a>
                   </div>
                    </div>
                  </div>
                 </div>
                <div class="pg-csv-name">
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
<script type="text/javascript" charset="utf-8">
      jQuery(document).ready(function($){


        $("area[rel^='prettyPhoto']").prettyPhoto();
        
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
    
        $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
          custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
          changepicturecallback: function(){ initialize(); }
        });

        $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
          custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
          changepicturecallback: function(){ _bsap.exec(); }
        });
        
        $('.infinite-container').waypoint('infinite');
      });
</script>
