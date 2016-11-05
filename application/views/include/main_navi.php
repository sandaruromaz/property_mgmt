  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
   <!--    <div class="navbar-header">
        <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div> -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
       <!--  <div class="moduletable_menu">

          <ul class="nav menu nav navbar-nav">
          <li <?php if ($this->uri->segment(2)==""){ echo'class=" current active "';}?> ><a href="<?php echo base_url(); ?>">Home</a></li>
          <li <?php if ($this->uri->segment(2)=="products_catalog")
            {echo'class=" current active "';}?> class="deeper parent"><a href="<?php echo base_url(); ?>index.php/shop/products_catalog">Products</a>
            
            <ul class="nav-child unstyled small">
            
              <?php
              foreach ($getallcategories as $category) 
              { ?>
             <li ><a href="<?php echo base_url(); ?>index.php/shop/product_catergory/<?php echo $category->product_type_id; ?>"><?php echo $category->type_name; ?> </a></li>
              <?php } ?>
            
            </ul>

          </li>
         <li <?php if ($this->uri->segment(2)=="aboutus"){ echo'class=" current active "';}?>><a href="<?php echo base_url(); ?>index.php/pages/aboutus">About Us</a></li>
          <li <?php if ($this->uri->segment(2)=="gallery" || $this->uri->segment(2)=="gallery_category"){ echo'class=" current active "';}?>><a href="<?php echo base_url(); ?>index.php/pages/gallery">Gallery</a></li>
          <li <?php if ($this->uri->segment(2)=="design_category" || $this->uri->segment(2)=="cake_design"){ echo'class=" current active "';}?>><a href="<?php echo base_url(); ?>index.php/pages/design_category/1">Customize Cake</a></li>
         <li <?php if ($this->uri->segment(2)=="news"){ echo'class=" current active "';}?>><a href="<?php echo base_url(); ?>index.php/pages/news">News</a></li>
          <li <?php if ($this->uri->segment(2)=="contact"){ echo'class=" current active "';}?>><a href="<?php echo base_url(); ?>index.php/pages/contact">Contact Us</a></li>
          </ul>
        </div>   -->

 
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>  