<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->

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
							
							eCommerce 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Products Reviews 
						</li>
						
					</ul>
					<h3 class="page-title">
					Products Reviews <small></small>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorreview')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorreview'); ?></div>
              <?php $this->session->unset_userdata('errorreview');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successreview')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successreview'); ?>
                </div>
              <?php $this->session->unset_userdata('successreview');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-comment"></i>Products Reviews
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
                                <th>
									 Review ID
								</th>
								<th>
									 Product ID
								</th>
								<th>
									 Comment
								</th>
								<th>
									 Date
								</th>
								<th class="hidden-xs">
									 Time
								</th>
								
								<th class="hidden-xs">
									 Customer ID
								</th>
                                <th class="hidden-xs">
									 Status
								</th>
                                <th class="hidden-xs">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_productreviews)){
							foreach($admin_productreviews-> result_array()as $row){ ?>
							<tr>
                            	<td>
									 <?php echo $row['product_review_id'];?>
								</td>
								<td>
									 <?php echo $row['product_id'];?>
								</td>
								<td style="width:30%">
									 <?php echo $row['comment'];?>
								<td>
									 <?php echo $row['date'];?>
								</td>
								<td>
									 <?php echo $row['time'];?>
								</td>
								<td>
									 <?php echo $row['customer_id'];?>
                                </td>
								<td>
									 <?php if ($row['status'] == "active"){?>
                                    <span class="badge badge-info badge-roundless">
                                    <?php } else{?> <span class="badge badge-default  badge-roundless"> <?php } ?>
                                    <?php echo $row['status'];?></span>
								</td>
                                <td>
									 <a href="#catModal<?php echo $row['product_review_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
									 <a href="#delteModal<?php echo $row['product_review_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
										<i class="fa fa-times"></i></a>
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                    <?php if(count($admin_productreviews)){
					foreach($admin_productreviews-> result_array()as $row){ ?>
                    <div id="catModal<?php echo $row['product_review_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Status
</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/productsreviewsedit/<?php echo $row['product_review_id'];?>" method="post" onsubmit="return editcatevalidation()">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Status</label>
                                                <div class="col-md-7">
                                                    <select class="form-control" name="status">
                                                      <?php $opt=array('active','inactive'); ?>
        
														<?php foreach($opt as $val){?>
                                                        <?php if ($row['status']==$val) {?>
                                                        <option value="<?php echo $val; ?>" selected="selected"><?php echo $val; ?></option>
                                                        <?php }else{?>
                                                        <option value="<?php echo $val; ?>" ><?php echo $val; ?></option>
                                                        <?php }}?>   												
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        <input type="hidden" value="<?php echo $row['product_review_id'];?>" name="reviewid" />
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn yellow" type="submit">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                            <?php }}?>
							 <?php if(count($admin_productreviews)){
                            foreach($admin_productreviews-> result_array()as $row){ ?>
                            <div id="delteModal<?php echo $row['product_review_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Confirm Delete</h4>
                                                </div>
                                                <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/productsreviewsdelete/<?php echo $row['product_review_id'];?>" method="post">
                                                    
                                                <div class="modal-body">
                                                    <p>
                                                         Do you want to delete "<span style="color:#06F"><?php echo $row['product_review_id'];?></span>" product review? 
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                     <input type="hidden" value="<?php echo $row['product_review_id'];?>" name="reviewid" />
                                                    
                                                    <button class="btn blue" type="submit">Confirm</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }}?>
					<!-- END EXAMPLE TABLE PORTLET-->
					
					</div>
                    </div>
				</div></div>
			<!-- END PAGE CONTENT-->
		</div>
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/tabletools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/table-advanced.js"></script> 
   <script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   TableAdvanced.init();
});
</script>