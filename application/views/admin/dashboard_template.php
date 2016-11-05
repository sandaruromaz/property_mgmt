<?php if (!isset($_SESSION['admin_id']) || $_SESSION['admin_id']=='')
			{		 redirect('/admin/login/', 'location');	 		}
		?>
<!DOCTYPE html>
<!----------------------------------------------------------------------------------------------------------- 
|	Template Name: Conquer –Responsive Admin Dashboard Template		|
|	Version: 1.1.2																							|
|	Author: KeenThemes																						|
|	Website: http://www.keenthemes.com/preview/conquer/layout_sidebar_fixed.html												|				|
|	Editor:Chamira																						|
------------------------------------------------------------------------------------------------------------>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title>New Monis Bakery | Admin Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="font-awesome.css" rel="stylesheet">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?php echo base_url(); ?>admin/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url(); ?>admin/assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url(); ?>admin/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href=" <?php echo base_url(); ?>assets/images/favicon.ico">


<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>


</head>


<body class="page-header-fixed">
	
	
    	<!--HEADER-->
        <?php $this-> load-> view('include/admin_header');?>
        <!--END HEADER-->
        <div class="clearfix">
        </div>
        
        <div class="page-container">
        <!--SIDE MENU-->
        <?php $this-> load-> view('include/admin_side_menu');?>
        <!--END SIDE MENU-->
        

		<!-- CONTAINER -->
        <?php $this-> load-> view($main);?>
        <!--END CONTAINER -->	
		</div>
		<!--FOOTER-->
        <?php $this-> load-> view('include/admin_footer');?>
        <!--END FOOTER-->
    
    
    
    


<!-- custom validation-->
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addcate.js" type="text/javascript"></script>

<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addproduct.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/editproduct.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addapparelcate.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addapparel.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addartworkcate.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addartwork.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addnews.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/sendnews.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/sendmail.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/editaboutus.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/editdirector.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/editmainbranch.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addnewbranch.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/adduserrole.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addusermenu.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addprivileges.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/addnewuser.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/edituserprofile.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/editpassword.js" type="text/javascript"></script>
<script src=" <?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/reportgenerate.js" type="text/javascript"></script>
<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->
 <!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->   
    

	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

