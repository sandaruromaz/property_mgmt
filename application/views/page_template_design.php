<?php  function __construct()
  	{        // Call the Model constructor
        parent::__construct();
		session_start();
		}
		?><!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href=" <?php echo base_url(); ?>assets/images/favicon(1).ico" >
    
    <!-- CSS -->
     <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- custom -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    
    <!-- CSS -->


    
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href=" <?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/design/fabric.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/design/jquery.miniColors.min.js"></script>
    
    <!-- Le styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/design/jquery.miniColors.css" />
   <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>assets/css/design/bootstrap-responsive.min.css" rel="stylesheet">
   
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
  
    <script type="text/javascript" src=" <?php echo base_url(); ?>assets/js/validation/regval.js"></script>   
    <script type="text/javascript" src=" <?php echo base_url(); ?>assets/js/validation/logval.js"></script>
    <script src=" <?php echo base_url(); ?>assets/js/validation/feedbackval.js" type="text/javascript"></script>
    <script src=" <?php echo base_url(); ?>assets/js/validation/newsletter.js" type="text/javascript"></script>
    
    <script src=" <?php echo base_url(); ?>assets/js/validation/designorder.js" type="text/javascript"></script>


    <script src=" <?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	    <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
	
</body>

<!-- Mirrored from evick.ru/themforest/glammy/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 01 May 2014 02:32:39 GMT -->
</html>