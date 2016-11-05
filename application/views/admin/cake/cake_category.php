<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
<!-- BEGIN THEME STYLES -->

<div class="page-content-wrapper">
		<div class="page-content">						
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url(); ?>index.php/admin">
							Home </a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							
							Customize Cake
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Cake Category
						</li>
						
					</ul>
					<h3 class="page-title">
					Cake Category <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorapparelcategory')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorapparelcategory'); ?></div>
              <?php $this->session->unset_userdata('errorapparelcategory');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successapparelcategory')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successapparelcategory'); ?>
                </div>
              <?php $this->session->unset_userdata('successapparelcategory');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			<div class="row">
				<div class="col-md-6">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								All Cake Categories
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-advance table-hover">
								<thead>
								<tr>
									<th>
										 #
									</th>
									<th >
										Category Name
									</th>									
									<th>
									      Action
									</th>
								</tr>
								</thead>
								<tbody>
                                <?php if(count($admin_apparel_categories)){
								foreach($admin_apparel_categories-> result_array()as $row){ ?>
								<tr>
									<td class="highlight">
									<?php echo $row['apparel_category_id'];?>
									</td>
									<td class="hidden-xs">
									<?php echo $row['name'];?>
									</td>									
									<td>
										<a href="#catModal<?php echo $row['apparel_category_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
										<a href="#delteModal<?php echo $row['apparel_category_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
										<i class="fa fa-times"></i></a>
									</td>
								</tr>
                                <?php }} ?>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
                    <?php if(count($admin_apparel_categories)){
					foreach($admin_apparel_categories-> result_array()as $row){ ?>
					<div id="catModal<?php echo $row['apparel_category_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Cake Category
                                            </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/apparelCategoryedit/<?php echo $row['apparel_category_id'];?>" method="post" 
                                        onsubmit="return editapparelcategvalidation<?php echo $row['apparel_category_id'];?>()">
                                        <div class="form-body">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Category Name</label>
                                                <div class="col-md-9">
                                                 <div class="has-error" >
                                                    <input type="text" placeholder="Category Name" value="<?php echo $row['name'];?>" class="form-control" name="catename" id="catenames<?php echo $row['apparel_category_id'];?>">
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>
                                          
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn yellow" type="submit">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                     <?php }}?>  
                     
                     <?php if(count($admin_apparel_categories)){
					foreach($admin_apparel_categories-> result_array()as $row){ ?>
					<div id="delteModal<?php echo $row['apparel_category_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/apparelCategorydelete/<?php echo $row['apparel_category_id'];?>" method="post">
                                            
										<div class="modal-body">
											<p>
												 Do you want to delete "<span style="color:#06F"><?php echo $row['name'];?></span>" category? 
											</p>
										</div>
										<div class="modal-footer">
											<button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                             <input type="hidden" value="<?php echo $row['apparel_category_id'];?>" name="catid" />
                                             <input type="hidden" value="<?php echo $row['name'];?>" name="catename" />
											<button class="btn blue" type="submit">Confirm</button>
											</form>
                                        </div>
									</div>
								</div>
							</div>
                     <?php }}?>     
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			<div class="col-md-6 ">
					
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box blue ">
						<div class="portlet-title">
							<div class="caption">
								Add New Cake Category
							</div>
							<div class="tools">
								<a class="collapse" href="#">
								</a>
								
								
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/apparelCategoryadd" method="post" onsubmit="return addapparelcatevalidation()">
								<div class="form-body">
									
									<div class="form-group">
										<label class="col-md-3 control-label">Category Name</label>
										<div class="col-md-9">
                                        <div class="has-error" >
											<input type="text" placeholder="Category Name" class="form-control" name="catename" id="catenames">
                                         
                    					<span class='error'></span> </div>   
										</div>
									</div>									
								
									
								</div>
								<div class="form-actions right1">
									<button class="btn default" type="reset">Reset</button>
									<button class="btn green" type="submit">Add Category</button>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div></div>
			<!-- END PAGE CONTENT-->
		</div>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/components-dropdowns.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

 
<!--EDIT CATEGORY VALIDATION -->
 <?php if(count($admin_apparel_categories)){
 foreach($admin_apparel_categories-> result_array()as $row){ ?>
<script>
	function editapparelcategvalidation<?php echo $row['apparel_category_id'];?>(){
		
	$('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
	if($(this).val() !== "")
		   
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
	
	var errormessage="";
    //name
	if($('#catenames<?php echo $row['apparel_category_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#catenames<?php echo $row['apparel_category_id'];?>'),'Category Name must be entered');
	errormessage += 1; 
	} 	else if(!$('#catenames<?php echo $row['apparel_category_id'];?>').val().match(/^[a-zA-Z- ]+$/)){
	error_display($('#catenames<?php echo $row['apparel_category_id'];?>'), 'Category Name must be alphabet characters &amp; "-" only');
	errormessage += 1;
	}
	
			
	if(errormessage != ''){
		return false;
	}

}
  
    
	// error
	function error_display(field,msg){
       field.css({  'border-color' :'#f00','background-image':'url(http://localhost/mtc/assets/js/images/invalid.png)','background-repeat': 'no-repeat','background-position': 'right center','margin-bottom':'2px'}).parent('div.has-error').children('span.error').html(msg);	
}
	
</script> 
<?php }}?> 
<!--END-->        
<script>
        jQuery(document).ready(function() {       
           // initiate layout and plugins
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
           ComponentsDropdowns.init();
        });   
</script>        
<!--<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initIntro();
   Tasks.initDashboardWidget();
});
</script>-->