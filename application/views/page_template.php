<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------
|	Author:chamira	
    Last Modify Date : 09/04/2015																	|
------------------------------------------------------------------------------------------------------------>
      

<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href=" <?php echo base_url(); ?>assets/images/favicon(1).ico" >
    
    <!-- CSS -->
     <!-- Bootstrap -->
<!--     <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet"> -->
    <!-- custom -->
<!--     <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" type="text/css" href="engine1/style.css" /> -->
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/calander/tcal.css" />
        <script type="text/javascript" src=" <?php echo base_url(); ?>assets/calander/tcal.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    
    <!-- FONTS -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href=" <?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet"> -->
<!-- new css-->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>



   
</head>
<body>
		<!--HEADER-->
        <?php $this-> load-> view('include/header');?>
        <!--END HEADER-->

		<!-- CONTAINER -->
        <?php $this-> load-> view($main);?>
        <!--END CONTAINER -->	
		
		<!--FOOTER-->
        <?php $this-> load-> view('include/footer');?>
        <!--END FOOTER-->

    
    <!-- SCRIPTS -->
    <!--[if IE]><script src="assets/http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
    

    <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
    
    <!--custom validation-->
    
    <script type="text/javascript" src=" <?php echo base_url(); ?>assets/js/validation/regval.js"></script>   
    <script type="text/javascript" src=" <?php echo base_url(); ?>assets/js/validation/logval.js"></script>
    <script src=" <?php echo base_url(); ?>assets/js/validation/feedbackval.js" type="text/javascript"></script>
    <script src=" <?php echo base_url(); ?>assets/js/validation/newsletter.js" type="text/javascript"></script> 
    <script src=" <?php echo base_url(); ?>assets/js/validation/updateval.js" type="text/javascript"></script>
    <script src=" <?php echo base_url(); ?>assets/js/validation/updatepwval.js" type="text/javascript"></script>
    <script src=" <?php echo base_url(); ?>assets/js/validation/addcartval.js" type="text/javascript"></script>
     <script src=" <?php echo base_url(); ?>assets/js/validation/reviewval.js" type="text/javascript"></script>
     
    

     <!--
    <script src=" <?php echo base_url(); ?>assets/js/validation/logval.js" type="text/javascript"></script>
   
    
   
    <script src=" <?php echo base_url(); ?>assets/js/validation/forgetval.js" type="text/javascript"></script>
    <script src=" <?php echo base_url(); ?>assets/js/validation/deliveryvalidation.js" type="text/javascript"></script>
	<script src=" <?php echo base_url(); ?>assets/js/validation/updatecart.js" type="text/javascript"></script>
	<script src=" <?php echo base_url(); ?>assets/js/validation/deliverymethodval.js" type="text/javascript"></script>-->
<!-- new js-->

<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.stellar.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/own-menu.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.nouislider.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<!--Strella JS-->
<script src="js/estate-pro.js"></script>
<script src="js/google-map-home.js"></script>
    
</body>

<!-- from evick.ru/themforest/glammy/index.html -->
</html>