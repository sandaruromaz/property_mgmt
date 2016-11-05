

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">

<!-- Breadcrumbs  -->
<div class="ft-breadcrumbs">

</div>
<?php if (count($product_details)){ 
foreach ($product_details-> result_array() as $product){ ?>                

<div class="page-header">
<h2 itemprop="name">
<?php echo $product['product_name']; ?>
</h2>
<!--Errors-->
<?php if($this -> session -> userdata('errorSendComment')){ ?>
<div class="alert alert-danger">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
<strong><?php echo $this -> session -> userdata('errorSendComment'); ?></strong> </div>
<?php $this->session->unset_userdata('errorSendComment');}?>
<!-- Error Message-->
<?php if($this -> session -> userdata('SuccessSendComment')){ ?>
<div class="alert alert-success">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
<strong><?php echo $this -> session -> userdata('SuccessSendComment'); ?></strong> </div>
<?php $this->session->unset_userdata('SuccessSendComment');}?>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 imgarea">
<?php 
$image_array= array('1' => $product['img1'],'2' => $product['img2'],'3' => $product['img3'],'4' => $product['img4'] );
print_r($image_array);
// $image_height = "200";
// $image_width = "200";
// $product_image=$product['img1'];
// $large_product_image =base_url().'assets/images/products/' . $product_image;
// $thumb_product_image =base_url(). "assets/timthumb.php?src=" . $large_product_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
?>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12 col-md-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-sm-12 col-md-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                    <?php foreach ($image_array as $gkey=> $galllery) {
                                     $active = ($gkey == 0) ? " active" : ""; ?>
                                        <div class="<?php echo $active  ?> item  gallery" data-slide-number="<?php echo $gkey ?>">
                                        <?php 
                                        $image_height = "514";
                                        $image_width = "770";
                                        $galllery_image=$galllery;
                                        
                                        $large_galllery_image = base_url().'assets/images/products/' . $galllery_image;
                                        $thumb_galllery_image = base_url(). "components/com_car_sale/assets/timthumb.php?src=" . $large_galllery_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";
                                      ?>
                                        <?php
                                        if($galllery_image!="") {?>
                                        <a href="<?php echo $large_galllery_image; ?>" rel="prettyPhoto" >
                                        <img src="<?php echo $thumb_galllery_image; ?>" class="img-responsive"> 
                                        </a>
                            
                                        <?php }?> 
                                        

                                        </div>
                                    <?php } ?>
                                       

                                    </div><!-- Carousel nav -->
                                    <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->
  

</div>


<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

<!-- Remaining Quantity : <?php echo $product['quantity']- $product['reorder_level'] ;?> 
 -->
<div><b><span class="tovar_price">LKR: <?php echo $product['price']; ?></span></b></div>
<!-- showing number of items in packets and ho many kg -->
<div><b><span class="tovar_price">No of Items: <?php echo $product['no_bits']; ?></span></b></div>



<div> 
<?php
if ( $product['reorder_level']  >  $product['quantity'] ){
$msg="<span class='label label-danger'>Out of Stock</span>";
}else{
$msg="<span class='label label-success'>In Stock</span>";
}  ?>

<?php echo $msg; ?>
</div>
<form action="<?php echo base_url();?>index.php/shop/add" method="post" onsubmit="return addcartvalidation()" id="myform"  class="addcartform">

<label>QTY:</label>
<div class="has-error">
<input type="text" class="form-control" id="qty" name="qty" style="width:20%" min="1"/>
<span class="error"></span>
</div>
<input name="reorder" id="reorder" type="hidden" value="<?php echo $product['reorder_level']; ?>" />
<input name="id" id="producttype" type="hidden" value="<?php echo $product['product_id']; ?>" />
<input name="name" id="productname" type="hidden" value="<?php echo $product['product_name']; ?>" />

<input name="price" id="productprice" type="hidden" value="<?php echo $product['price']; ?>" />
<input name="img" id="productimg" type="hidden" value="<?php echo $product['img1']; ?>" />
</br>
<input type="submit" class="btn btn-primary btn-cart" value="Add to Cart"/>
<br/>
</form> 
<form action="<?php echo base_url(); ?>index.php/customer/Wishlist/<?php echo $product['product_type_id'];?>/<?php echo $product['product_id'];?>" method="post" >
<input id="wishproductid" name="wishproductid"  type="hidden" value="<?php  echo $product['product_id'] ;?> ">
<input type="submit" value="Add to Wishlist"  title="Add to Wishlist"   class="btn btn-default btn-add">


</form> 
</div>
<div class="col-xs-12">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    <div class="tovar_price descriptionone" style="margin-top:10px"><?php echo $product['description']; ?></div>
ff
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
    	<div class="box" style="margin-top:10px">
<ul class="comments">
<?php if ($product_comment != "empty"){
foreach ($product_comment as $row){?>
<li>
<div class="clearfix">
<p class=""><strong><a href="javascript:void(0);" ><?php echo $row->fname; ?></a></strong></p>
<span class="date"><i class="glyphicon glyphicon-calendar"></i> <?php echo $row->date; ?> / <?php echo $row->time; ?></span>

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
<?php /* if (count($product_details)){ 
foreach ($product_details-> result_array() as $product){*/
?>
<form action=" <?php echo base_url(); ?>index.php/customer/comment/<?php echo $product['product_type_id'];?>/<?php echo $product['product_id'];?>/<?php echo $product['product_name'];?>" method="post" onsubmit="return reviewvalidation()" class="reviewform">
<div class="has-error">
<input id="product" name="product"  type="hidden" value="<?php echo $product['product_id'];?>">
<span class="error"></span>
</div>
<?php /*}}*/?>  
<table width="100%" border="0">

<tr>
<td width="10%" valign="top">Comment</td>
<td width="90%">
<div class="has-error" style="margin-bottom:5px">
<textarea name="comment" id="comments" cols="" rows="10"></textarea>
<br/>
<span class='error'></span> </div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>

<input type="submit" class="btn btn-primary btn-cart" value="Submit a Rreview">
</form>
</div>
<?php }else{?>
<h3 align="center">Leave a comment of this product. <a href="<?php echo  base_url(); ?>index.php/pages/signin/">Please <span style="color:#F00"> login </span>to the system.</a></h3> 

<?php }?>
</div>




    </div>
  </div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php  }}?>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name">Related Products</h2>

 <div class="col-md-12">
 <?php if($related_product == 'empty'){?>

No Related Product Found

 <?php }else{?>
               <div id="media" class="carousel slide media-carousel">
                <div class="carousel-inner">

                <?php 

                $count=0;
                $increment=0;

                $limit=4;

                $total = count($related_product);

                echo '<div class="item  active"><div class="row">';
                 foreach ($related_product as $row){
                   $image_height = "200";
$image_width = "200";
$products_image=$row->img1;
$large_products_image =base_url().'assets/images/products/' . $products_image;
$thumb_image =base_url(). "assets/timthumb.php?src=" . $large_products_image . "&h=" . $image_height . "&w=" . $image_width . "&zc=1";

                  ?> 

                        <div class="col-md-3 ">
                          <a href="<?php echo base_url();?>index.php/shop/product_details/<?php echo $row->product_id;?>" class="thumbnail">                   
                          <img  src="<?php echo $thumb_image; ?>"  class="img-responsive" alt="<?php echo $row->product_name; ?>"/>
                    
                          <div class="sname">
                          <?php echo $row->product_name; ?>
                          </div>
                         <div class="sprice">
                          LKR:<?php echo $row->price;?>             
                          </div>                    

                          </a>
                        </div>
               <?php 
               $count++;

                  if($count % 4 == 0 || $count == $total ){
                        echo '</div></div>' ;       
                    }
                  if($count % 4 == 0 &&  $count < $total){
                        echo '<div class="item "><div class="row">' ;      
                    }


                } // FOR EACH

                 ?> 






               

                </div>
                <a class="left carousel-control" href="#media" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#media" data-slide="next">›</a>
             </div>    
             <?php } ?>                      
</div>
  
                     
</div>
</div>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function(){

  $('#media').carousel({
    pause: true,
    interval: false,
  });
});
</script>