<?php if (isset($_SESSION['admin_id']))
			{		 redirect('/', 'location');	 		}
		?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>New Monis Bakery Admin </title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2-metronic.html" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url(); ?>admin/assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url(); ?>admin/assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>admin/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
	<link rel="shortcut icon" href=" <?php echo base_url(); ?>assets/images/favicon.ico">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	
	<h1><img src="<?php echo base_url(); ?>assets/images/<?php echo $logo; ?>" alt="MTC" width="52px"/> ADMINISTRATION</h1>
	
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?php echo base_url();?>index.php/admincontrol/adminlogin" method="post" onsubmit="return adminloginvalidation ()")>
		<h3 class="form-title">Login to New Monis Bakery</h3>
		
		<!-- Error Message-->
		<?php if($this -> session -> userdata('erroradminlogin')){ ?>
        <div class="alert alert-danger ">		
			<button class="close" data-close="alert"></button>
			<span><strong>Error !</strong><br>
            <?php echo $this -> session -> userdata('erroradminlogin'); ?>
		    </span>
		</div>
        <?php $this->session->unset_userdata('erroradminlogin');}?>
        <!-- Error Message-->
        <!-- Error Message-->
		<?php if($this -> session -> userdata('Successadminlogin')){ ?>
        <div class="Metronic-alerts alert alert-success fade in">		
			<button class="close" data-close="alert"></button>
			<span>
            <?php echo $this -> session -> userdata('Successadminlogin'); ?>
		    </span>
		</div>
        <?php $this->session->unset_userdata('Successadminlogin');}?>
        <!-- Error Message-->
		<div class="form-group"><div class="has-error" >
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				
                <input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="login_username" id="emailadmin1" required/>
			
            </div><span class='error'></span> </div>
		</div>
		<div class="form-group"><div class="has-error" >
        	
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
			   
                <input class="form-control placeholder-no-fix" type="password"  placeholder="Password" name="login_password" id="passadmin1" pattern=".{7,}" required title="Your password should be more than seven characters" required />
				
            </div><span class='error'></span> </div>
		</div>
		<div class="form-actions">

			<button type="submit" class="btn green pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		
		<div class="forget-password">
			<h4>Forgot your password ?</h4>
			<p>
				 no worries, click <a href="javascript:;" id="forget-password">
				here</a>
				 to reset your password.
			</p>
		</div>

	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="<?php echo base_url();?>index.php/admin/adminforgetpass" method="post" onsubmit="return adminresetvalidation()" >
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group"><div class="has-error" >
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
                
				<input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="emailforget" id="emailforget" required/>
			
            </div><span class='error'></span> </div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" class="btn green pull-right" name="forget">
			Submit <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 &copy; 2015 New Monis Bakery. All Rights Reserved. 
</div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/adminlog.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/validation/adminreset.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
		jQuery(document).ready(function() {     
		  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
		  Login.init();
		});
	</script>
<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script> <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>