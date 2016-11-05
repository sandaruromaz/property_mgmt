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
			<div class="col-md-12">
					<form action="#" class="form-horizontal form-row-seperated">
						<div class="portlet">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-shopping-cart"></i>Test Product
								</div>
								<div class="actions btn-set">
									<button class="btn default" name="back" type="button"><i class="fa fa-angle-left"></i> Back</button>
									<button class="btn default"><i class="fa fa-reply"></i> Reset</button>
									<button class="btn green"><i class="fa fa-check"></i> Save</button>
									<button class="btn green"><i class="fa fa-check-circle"></i> Save &amp; Continue Edit</button>
									<div class="btn-group">
										<a data-toggle="dropdown" href="#" class="btn yellow">
										<i class="fa fa-share"></i> More <i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="#">
												Duplicate </a>
											</li>
											<li>
												<a href="#">
												Delete </a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="#">
												Print </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a data-toggle="tab" href="#tab_general">
											General </a>
										</li>
										<li class="">
											<a data-toggle="tab" href="#tab_meta">
											Meta </a>
										</li>
										<li class="">
											<a data-toggle="tab" href="#tab_images">
											Images </a>
										</li>
										<li>
											<a data-toggle="tab" href="#tab_reviews">
											Reviews <span class="badge badge-success">
											3 </span>
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#tab_history">
											History </a>
										</li>
									</ul>
									<div class="tab-content no-space">
										<div id="tab_general" class="tab-pane active">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Name: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" placeholder="" name="product[name]" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Description: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea name="product[description]" class="form-control"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Short Description: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea name="product[short_description]" class="form-control"></textarea>
														<span class="help-block">
														shown in product listing </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Categories: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<div class="form-control height-auto">
															<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;"><div data-always-visible="1" style="overflow: hidden; width: auto; height: 275px;" class="scroller" data-initialized="true">
																<ul class="list-unstyled">
																	<li>
																		<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Mens</label>
																		<ul class="list-unstyled">
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Footwear</label>
																			</li>
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Clothing</label>
																			</li>
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Accessories</label>
																			</li>
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Fashion Outlet</label>
																			</li>
																		</ul>
																	</li>
																	<li>
																		<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Football Shirts</label>
																		<ul class="list-unstyled">
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Premier League</label>
																			</li>
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Football League</label>
																			</li>
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Serie A</label>
																			</li>
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Bundesliga</label>
																			</li>
																		</ul>
																	</li>
																	<li>
																		<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Brands</label>
																		<ul class="list-unstyled">
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Adidas</label>
																			</li>
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Nike</label>
																			</li>
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Airwalk</label>
																			</li>
																			<li>
																				<label><div class="checker"><span><input type="checkbox" value="1" name="product[categories][]"></span></div>Kangol</label>
																			</li>
																		</ul>
																	</li>
																</ul>
															</div><div class="slimScrollBar" style="background: none repeat scroll 0% 0% rgb(187, 187, 187); width: 7px; position: absolute; opacity: 0.4; border-radius: 7px; z-index: 99; right: 1px; top: 0px; height: 196.429px; display: block;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
														</div>
														<span class="help-block">
														select one or more categories </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Available Date: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<div data-date-format="mm/dd/yyyy" data-date="10/11/2012" class="input-group input-large date-picker input-daterange">
															<input type="text" name="product[available_from]" class="form-control">
															<span class="input-group-addon">
															to </span>
															<input type="text" name="product[available_to]" class="form-control">
														</div>
														<span class="help-block">
														availability daterange. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">SKU: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" placeholder="" name="product[sku]" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Price: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" placeholder="" name="product[price]" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Tax Class: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<select name="product[tax_class]" class="table-group-action-input form-control input-medium">
															<option value="">Select...</option>
															<option value="1">None</option>
															<option value="0">Taxable Goods</option>
															<option value="0">Shipping</option>
															<option value="0">USA</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Status: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<select name="product[status]" class="table-group-action-input form-control input-medium">
															<option value="">Select...</option>
															<option value="1">Published</option>
															<option value="0">Not Published</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div id="tab_meta" class="tab-pane">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Title:</label>
													<div class="col-md-10">
														<input type="text" placeholder="" maxlength="100" name="product[meta_title]" class="form-control maxlength-handler">
														<span class="help-block">
														max 100 chars </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Keywords:</label>
													<div class="col-md-10">
														<textarea maxlength="1000" name="product[meta_keywords]" rows="8" class="form-control maxlength-handler"></textarea>
														<span class="help-block">
														max 1000 chars </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Meta Description:</label>
													<div class="col-md-10">
														<textarea maxlength="255" name="product[meta_description]" rows="8" class="form-control maxlength-handler"></textarea>
														<span class="help-block">
														max 255 chars </span>
													</div>
												</div>
											</div>
										</div>
										<div id="tab_images" class="tab-pane">
											<div class="alert alert-success margin-bottom-10">
												<button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
												<i class="fa fa-warning fa-lg"></i> Image type and information need to be specified.
											</div>
											<div class="text-align-reverse margin-bottom-10" id="tab_images_uploader_container" style="position: relative;">
												<a class="btn yellow" href="javascript:;" id="tab_images_uploader_pickfiles" style="position: relative; z-index: 1;">
												<i class="fa fa-plus"></i> Select Files </a>
												<a class="btn green" href="javascript:;" id="tab_images_uploader_uploadfiles">
												<i class="fa fa-share"></i> Upload Files </a>
											<div id="html5_18vltq9e71qef11pp1v8ddf4lrn3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input type="file" accept="image/jpeg,image/gif,image/png,application/zip" multiple="" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" id="html5_18vltq9e71qef11pp1v8ddf4lrn3"></div></div>
											<div class="row">
												<div class="col-md-6 col-sm-12" id="tab_images_uploader_filelist"></div>
											</div>
											<table class="table table-bordered table-hover">
											<thead>
											<tr class="heading" role="row">
												<th width="8%">
													 Image
												</th>
												<th width="25%">
													 Label
												</th>
												<th width="8%">
													 Sort Order
												</th>
												<th width="10%">
													 Base Image
												</th>
												<th width="10%">
													 Small Image
												</th>
												<th width="10%">
													 Thumbnail
												</th>
												<th width="10%">
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a data-rel="fancybox-button" class="fancybox-button" href="../../assets/admin/pages/media/works/img1.jpg">
													<img alt="" src="../../assets/admin/pages/media/works/img1.jpg" class="img-responsive">
													</a>
												</td>
												<td>
													<input type="text" value="Thumbnail image" name="product[images][1][label]" class="form-control">
												</td>
												<td>
													<input type="text" value="1" name="product[images][1][sort_order]" class="form-control">
												</td>
												<td>
													<label>
													<div class="radio"><span><input type="radio" value="1" name="product[images][1][image_type]"></span></div>
													</label>
												</td>
												<td>
													<label>
													<div class="radio"><span><input type="radio" value="2" name="product[images][1][image_type]"></span></div>
													</label>
												</td>
												<td>
													<label>
													<div class="radio"><span class="checked"><input type="radio" checked="" value="3" name="product[images][1][image_type]"></span></div>
													</label>
												</td>
												<td>
													<a class="btn default btn-sm" href="javascript:;">
													<i class="fa fa-times"></i> Remove </a>
												</td>
											</tr>
											<tr>
												<td>
													<a data-rel="fancybox-button" class="fancybox-button" href="../../assets/admin/pages/media/works/img2.jpg">
													<img alt="" src="../../assets/admin/pages/media/works/img2.jpg" class="img-responsive">
													</a>
												</td>
												<td>
													<input type="text" value="Product image #1" name="product[images][2][label]" class="form-control">
												</td>
												<td>
													<input type="text" value="1" name="product[images][2][sort_order]" class="form-control">
												</td>
												<td>
													<label>
													<div class="radio"><span><input type="radio" value="1" name="product[images][2][image_type]"></span></div>
													</label>
												</td>
												<td>
													<label>
													<div class="radio"><span class="checked"><input type="radio" checked="" value="2" name="product[images][2][image_type]"></span></div>
													</label>
												</td>
												<td>
													<label>
													<div class="radio"><span><input type="radio" value="3" name="product[images][2][image_type]"></span></div>
													</label>
												</td>
												<td>
													<a class="btn default btn-sm" href="javascript:;">
													<i class="fa fa-times"></i> Remove </a>
												</td>
											</tr>
											<tr>
												<td>
													<a data-rel="fancybox-button" class="fancybox-button" href="../../assets/admin/pages/media/works/img3.jpg">
													<img alt="" src="../../assets/admin/pages/media/works/img3.jpg" class="img-responsive">
													</a>
												</td>
												<td>
													<input type="text" value="Product image #2" name="product[images][3][label]" class="form-control">
												</td>
												<td>
													<input type="text" value="1" name="product[images][3][sort_order]" class="form-control">
												</td>
												<td>
													<label>
													<div class="radio"><span class="checked"><input type="radio" checked="" value="1" name="product[images][3][image_type]"></span></div>
													</label>
												</td>
												<td>
													<label>
													<div class="radio"><span><input type="radio" value="2" name="product[images][3][image_type]"></span></div>
													</label>
												</td>
												<td>
													<label>
													<div class="radio"><span><input type="radio" value="3" name="product[images][3][image_type]"></span></div>
													</label>
												</td>
												<td>
													<a class="btn default btn-sm" href="javascript:;">
													<i class="fa fa-times"></i> Remove </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
										<div id="tab_reviews" class="tab-pane">
											<div class="table-container">
												<div role="grid" class="dataTables_wrapper dataTables_extended_wrapper" id="datatable_reviews_wrapper"><div class="row"><div class="col-md-8 col-sm-12"><div class="dataTables_paginate paging_bootstrap_extended"><div class="pagination-panel"> Page <a title="Prev" class="btn btn-sm default prev disabled" href="#"><i class="fa fa-angle-left"></i></a><input type="text" style="text-align:center; margin: 0 5px;" maxlenght="5" class="pagination-panel-input form-control input-mini input-inline input-sm"><a title="Next" class="btn btn-sm default next disabled" href="#"><i class="fa fa-angle-right"></i></a> of <span class="pagination-panel-total"></span></div></div><div id="datatable_reviews_length" class="dataTables_length"><label><span class="seperator">|</span>View <select name="datatable_reviews_length" size="1" aria-controls="datatable_reviews" class="form-control input-xsmall input-sm"><option value="20" selected="selected">20</option><option value="50">50</option><option value="100">100</option><option value="150">150</option><option value="-1">All</option></select> records</label></div><div class="dataTables_info" id="datatable_reviews_info"></div></div><div class="col-md-4 col-sm-12"><div class="table-group-actions pull-right"></div></div></div><div class="table-scrollable"><table id="datatable_reviews" class="table table-striped table-bordered table-hover dataTable" aria-describedby="datatable_reviews_info">
												<thead>
												<tr class="heading" role="row"><th width="5%" class="sorting_asc" role="columnheader" tabindex="0" aria-controls="datatable_reviews" rowspan="1" colspan="1" aria-label="
														 Review&amp;nbsp;#
													: activate to sort column ascending">
														 Review&nbsp;#
													</th><th width="10%" class="sorting" role="columnheader" tabindex="0" aria-controls="datatable_reviews" rowspan="1" colspan="1" aria-label="
														 Review&amp;nbsp;Date
													: activate to sort column ascending">
														 Review&nbsp;Date
													</th><th width="10%" class="sorting" role="columnheader" tabindex="0" aria-controls="datatable_reviews" rowspan="1" colspan="1" aria-label="
														 Customer
													: activate to sort column ascending">
														 Customer
													</th><th width="20%" class="sorting" role="columnheader" tabindex="0" aria-controls="datatable_reviews" rowspan="1" colspan="1" aria-label="
														 Review&amp;nbsp;Content
													: activate to sort column ascending">
														 Review&nbsp;Content
													</th><th width="10%" class="sorting" role="columnheader" tabindex="0" aria-controls="datatable_reviews" rowspan="1" colspan="1" aria-label="
														 Status
													: activate to sort column ascending">
														 Status
													</th><th width="10%" class="sorting" role="columnheader" tabindex="0" aria-controls="datatable_reviews" rowspan="1" colspan="1" aria-label="
														 Actions
													: activate to sort column ascending">
														 Actions
													</th></tr>
												<tr class="filter" role="row"><td rowspan="1" colspan="1">
														<input type="text" name="product_review_no" class="form-control form-filter input-sm">
													</td><td rowspan="1" colspan="1">
														<div data-date-format="dd/mm/yyyy" class="input-group date date-picker margin-bottom-5">
															<input type="text" placeholder="From" name="product_review_date_from" readonly="" class="form-control form-filter input-sm">
															<span class="input-group-btn">
															<button type="button" class="btn btn-sm default"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
														<div data-date-format="dd/mm/yyyy" class="input-group date date-picker">
															<input type="text" placeholder="To" name="product_review_date_to" readonly="" class="form-control form-filter input-sm">
															<span class="input-group-btn">
															<button type="button" class="btn btn-sm default"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
													</td><td rowspan="1" colspan="1">
														<input type="text" name="product_review_customer" class="form-control form-filter input-sm">
													</td><td rowspan="1" colspan="1">
														<input type="text" name="product_review_content" class="form-control form-filter input-sm">
													</td><td rowspan="1" colspan="1">
														<select class="form-control form-filter input-sm" name="product_review_status">
															<option value="">Select...</option>
															<option value="pending">Pending</option>
															<option value="approved">Approved</option>
															<option value="rejected">Rejected</option>
														</select>
													</td><td rowspan="1" colspan="1">
														<div class="margin-bottom-5">
															<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
														</div>
														<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
													</td></tr>
												</thead>
												<tbody role="alert" aria-live="polite" aria-relevant="all">
												</tbody>
												</table></div><div class="row"><div class="col-md-8 col-sm-12"><div class="dataTables_paginate paging_bootstrap_extended"><div class="pagination-panel"> Page <a title="Prev" class="btn btn-sm default prev disabled" href="#"><i class="fa fa-angle-left"></i></a><input type="text" style="text-align:center; margin: 0 5px;" maxlenght="5" class="pagination-panel-input form-control input-mini input-inline input-sm"><a title="Next" class="btn btn-sm default next disabled" href="#"><i class="fa fa-angle-right"></i></a> of <span class="pagination-panel-total"></span></div></div><div class="dataTables_length"><label><span class="seperator">|</span>View <select name="datatable_reviews_length" size="1" aria-controls="datatable_reviews" class="form-control input-xsmall input-sm"><option value="20" selected="selected">20</option><option value="50">50</option><option value="100">100</option><option value="150">150</option><option value="-1">All</option></select> records</label></div><div class="dataTables_info"></div></div><div class="col-md-4 col-sm-12"></div></div></div>
											</div>
										</div>
										<div id="tab_history" class="tab-pane">
											<div class="table-container">
												<div role="grid" class="dataTables_wrapper dataTables_extended_wrapper dataTables_extended_wrapper" id="datatable_history_wrapper"><div class="row"><div class="col-md-8 col-sm-12"><div class="dataTables_paginate paging_bootstrap_extended"><div class="pagination-panel"> Page <a title="Prev" class="btn btn-sm default prev disabled" href="#"><i class="fa fa-angle-left"></i></a><input type="text" style="text-align:center; margin: 0 5px;" maxlenght="5" class="pagination-panel-input form-control input-mini input-inline input-sm"><a title="Next" class="btn btn-sm default next disabled" href="#"><i class="fa fa-angle-right"></i></a> of <span class="pagination-panel-total"></span></div></div><div id="datatable_history_length" class="dataTables_length"><label><span class="seperator">|</span>View <select name="datatable_history_length" size="1" aria-controls="datatable_history" class="form-control input-xsmall input-sm"><option value="20" selected="selected">20</option><option value="50">50</option><option value="100">100</option><option value="150">150</option><option value="-1">All</option></select> records</label></div><div class="dataTables_info" id="datatable_history_info"></div></div><div class="col-md-4 col-sm-12"><div class="table-group-actions pull-right"></div></div></div><div class="table-scrollable"><table id="datatable_history" class="table table-striped table-bordered table-hover dataTable" aria-describedby="datatable_history_info">
												<thead>
												<tr class="heading" role="row"><th width="25%" class="sorting_asc" role="columnheader" tabindex="0" aria-controls="datatable_history" rowspan="1" colspan="1" aria-label="
														 Datetime
													: activate to sort column ascending">
														 Datetime
													</th><th width="55%" class="sorting" role="columnheader" tabindex="0" aria-controls="datatable_history" rowspan="1" colspan="1" aria-label="
														 Description
													: activate to sort column ascending">
														 Description
													</th><th width="10%" class="sorting" role="columnheader" tabindex="0" aria-controls="datatable_history" rowspan="1" colspan="1" aria-label="
														 Notification
													: activate to sort column ascending">
														 Notification
													</th><th width="10%" class="sorting" role="columnheader" tabindex="0" aria-controls="datatable_history" rowspan="1" colspan="1" aria-label="
														 Actions
													: activate to sort column ascending">
														 Actions
													</th></tr>
												<tr class="filter" role="row"><td rowspan="1" colspan="1">
														<div data-date-format="dd/mm/yyyy hh:ii" class="input-group date datetime-picker margin-bottom-5">
															<input type="text" placeholder="From" name="product_history_date_from" readonly="" class="form-control form-filter input-sm">
															<span class="input-group-btn">
															<button type="button" class="btn btn-sm default date-set"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
														<div data-date-format="dd/mm/yyyy hh:ii" class="input-group date datetime-picker">
															<input type="text" placeholder="To" name="product_history_date_to" readonly="" class="form-control form-filter input-sm">
															<span class="input-group-btn">
															<button type="button" class="btn btn-sm default date-set"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
													</td><td rowspan="1" colspan="1">
														<input type="text" placeholder="To" name="product_history_desc" class="form-control form-filter input-sm">
													</td><td rowspan="1" colspan="1">
														<select class="form-control form-filter input-sm" name="product_history_notification">
															<option value="">Select...</option>
															<option value="pending">Pending</option>
															<option value="notified">Notified</option>
															<option value="failed">Failed</option>
														</select>
													</td><td rowspan="1" colspan="1">
														<div class="margin-bottom-5">
															<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
														</div>
														<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
													</td></tr>
												</thead>
												<tbody role="alert" aria-live="polite" aria-relevant="all">
												</tbody>
												</table></div><div class="row"><div class="col-md-8 col-sm-12"><div class="dataTables_paginate paging_bootstrap_extended"><div class="pagination-panel"> Page <a title="Prev" class="btn btn-sm default prev disabled" href="#"><i class="fa fa-angle-left"></i></a><input type="text" style="text-align:center; margin: 0 5px;" maxlenght="5" class="pagination-panel-input form-control input-mini input-inline input-sm"><a title="Next" class="btn btn-sm default next disabled" href="#"><i class="fa fa-angle-right"></i></a> of <span class="pagination-panel-total"></span></div></div><div class="dataTables_length"><label><span class="seperator">|</span>View <select name="datatable_history_length" size="1" aria-controls="datatable_history" class="form-control input-xsmall input-sm"><option value="20" selected="selected">20</option><option value="50">50</option><option value="100">100</option><option value="150">150</option><option value="-1">All</option></select> records</label></div><div class="dataTables_info"></div></div><div class="col-md-4 col-sm-12"></div></div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
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