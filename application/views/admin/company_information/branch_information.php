<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-summernote/summernote.css">

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
							
							Company Information 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							Branches Information
						</li>
						
					</ul>
					<h3 class="page-title">
					Branches Information<small></small><a href="#addModalother" style="float:right"  data-toggle="modal" data-original-title="Add New Branc" data-placement="top" class="btn green tooltips" style="float:right" >Add New Branch</a>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
            <!--Errors-->
			  <?php if($this -> session -> userdata('errorbranch')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
				<?php echo $this -> session -> userdata('errorbranch'); ?></div>
              <?php $this->session->unset_userdata('errorbranch');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successbranch')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successbranch'); ?>
                </div>
              <?php $this->session->unset_userdata('successbranch');}?>
              <!--end Errors-->
            
			<!-- END PAGE HEADER-->
			
			
				
				
            <div class="row">
			<div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-sitemap"></i>Main Branch
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-advance table-hover" >
							<thead>
							<tr>
                                <th >
									Company Name
								</th>
								<th >
									 Location
								</th>
								<th >
									 address
								</th >
                                <th >
									 email 
								</th >
                                <th >
									 email 
								</th >
								
                                <th class="hidden-xs" style="width:10%">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_mainBranch)){
							foreach($admin_mainBranch-> result_array()as $row){ ?>
							<tr>
                            	<td >
									 <?php echo $row['name'];?>
								</td>
								<td >
									 <?php echo $row['location'];?>
								</td>
								<td >
									 <?php echo $row['address'];?>
								</td>
                                <td >
									 <?php echo $row['email'];?>
								</td>
                                <td >
									 <img src="<?php echo base_url();?>assets/images/<?php echo $row['logo'];?>" alt="<?php echo $row['name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
								</td>
                                <td style="width:15%">
                                     <a href="#viewModalmain<?php echo $row['branch_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
									 <a href="#catModalmain<?php echo $row['branch_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
								
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                    
                    <?php if(count($admin_mainBranch)){
					foreach($admin_mainBranch-> result_array()as $row){ ?>
					<div id="viewModalmain<?php echo $row['branch_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Main Branch Details </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal" >
                                        <div class="form-body">
                                            
                                          <div class="form-group">
                                                
                                                <div class="col-md-12">
                                                <table width="80%" border="0" align="center" style=" padding-bottom:50px">
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Main Branch Details </h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td width="35%">Company Name</td>
                                                    <td colspan="2">: <?php echo $row['name'];?></td>
                                                  </tr>                                                 
                                                  
                                                  <tr>
                                                    <td>Location</td>
                                                    <td colspan="2">: <?php echo $row['location'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Address</td>
                                                    <td colspan="2">: <?php echo $row['address'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Email</td>
                                                    <td colspan="2">: <?php echo $row['email'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Contact 1</td>
                                                    <td colspan="2">: <?php echo $row['contact1'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Contact 2</td>
                                                    <td colspan="2">: <?php echo $row['contact2'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Contact 3</td>
                                                    <td colspan="2">: <?php echo $row['contact3'];?></td>
                                                  </tr> 
                                                  <tr>
                                                    <td>Fax No</td>
                                                    <td colspan="2">: <?php echo $row['fax'];?></td>
                                                  </tr>                                                 
                                                   <tr>
                                                    <td width="30%" colspan="3"><h3>Company Logo</h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td valign="top">&nbsp;</td>
                                                    <td><img src="<?php echo base_url();?>assets/images/<?php echo $row['logo'];?>" alt="<?php echo $row['name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/></td>
                                                    <td>&nbsp;</td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Map</h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td valign="top">&nbsp;</td>
                                                    <td><iframe src="<?php echo $row['map']; ?>" width="100%" height="200" frameborder="0" style="border: 1px solid #e9e9e9;padding: 10px 10px 10px;"></iframe></td>
                                                    <td>&nbsp;</td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                </table>
                                                
                                                </div>
                                            </div>
                                           
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        
                                        </form>
										</div>
									</div>
								</div>
							</div>
                           <?php }}?> <!--end view-->
                    <?php if(count($admin_mainBranch)){
					foreach($admin_mainBranch-> result_array()as $row){ ?>
                    <div id="catModalmain<?php echo $row['branch_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Main Branch Details
</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/mainbranchedit/<?php echo $row['branch_id'];?>" method="post" enctype="multipart/form-data" onsubmit="return editmainbranchvalidation()">
                                        <div class="form-body">
                                                <div class="form-group">
                                                	<label class="control-label col-md-3">Company Name<font class="required">* </font></label>
                                                  <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Company Name" value="<?php echo $row['name'];?>" class="form-control" name="name" id="cname">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div> 
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Location<font class="required">* </font></label>
                                                    <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Location" value="<?php echo $row['location'];?>" class="form-control" name="location" id="clocation">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Address<font class="required">* </font></label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Address" value="<?php echo $row['address'];?>" class="form-control" name="address" id="caddress">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div> 
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Email<font class="required">* </font></label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Email" value="<?php echo $row['email'];?>" class="form-control" name="email" id="cemail">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div> 
                                                 
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Contact No 1<font class="required">* </font></label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Contact No 1" value="<?php echo $row['contact1'];?>" class="form-control" name="contact1" id="ccontact1">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Contact No 2</label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Contact No 2" value="<?php echo $row['contact2'];?>" class="form-control" name="contact2" id="ccontact2">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contact No 3</label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Contact No 3" value="<?php echo $row['contact3'];?>" class="form-control" name="contact3" id="ccontact3">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Fax No </label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Fax No " value="<?php echo $row['fax'];?>" class="form-control" name="fax" id="cfax">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                <label class="col-md-3 control-label">Company Logo<font class="required">* </font></label>
                                                <div class="col-md-8">
                                                 <div class="has-error" >
                                                    <img src="<?php echo base_url();?>assets/images/<?php echo $row['logo'];?>" alt="<?php echo $row['name'];?>" style=" width:100px;border: 1px solid #e9e9e9;padding: 10px 10px 10px;"/>
                                                    <input type="file"  placeholder="Name" class="btn grey fileinput-button" name="logo" id="clogo" style="margin-top:5px" onchange="return ValidateFileUpload1()"><br />
                                                    
                                                    <span class='error'></span> </div>
                                                </div>
                                           	 </div>
                                             <div style="width:100%; " class="alert alert-warning">
                                                <strong>Notes !</strong>  Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in logo.
                                            </div>
                                             <div class="form-group">
                                                    <label class="control-label col-md-3">Map<font class="required">* </font></label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <textarea id="cmap" name="map" class="form-control" placeholder="Map"><?php echo $row['map'];?></textarea>
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <input type="hidden" name="logoimage" value="<?php echo $row['logo'];?>" />
                                        <button class="btn yellow" type="submit">Save</button>
                                        </form>
										</div>
									</div>
								</div>
							</div>
                            <?php }}?>
							
					<!-- END EXAMPLE TABLE PORTLET-->
					
					</div>
                    <div class="col-md-12 ">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-madison">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-sitemap"></i>Main Branch
							</div>
                            <div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-advance table-hover" >
							<thead>
							<tr>
                                
								<th >
									 Location
								</th>
								<th >
									 address
								</th >
                                <th >
									 email 
								</th >
                                <th >
									 contact No 1
								</th >
								
                                <th class="hidden-xs" style="width:10%">
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            <?php if(count($admin_otherBranch)){
							foreach($admin_otherBranch-> result_array()as $row){ ?>
							<tr>
                            	
								<td >
									 <?php echo $row['location'];?>
								</td>
								<td >
									 <?php echo $row['address'];?>
								</td>
                                <td >
									 <?php echo $row['email'];?>
								</td>
                                 <td >
									 <?php echo $row['contact1'];?>
								</td>
                                
                                <td style="width:15%">
                                     <a href="#viewModalother<?php echo $row['branch_id'];?>" data-toggle="modal" data-original-title="VIEW" data-placement="top" class="btn default btn-xs blue tooltips" >
										<i class="fa fa-desktop"></i></a>
									 <a href="#catModalother<?php echo $row['branch_id'];?>" data-toggle="modal" data-original-title="EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
										<i class="fa fa-edit"></i></a>
                                        <a href="#delteModal<?php echo $row['branch_id'];?>" data-toggle="modal" data-original-title="REMOVE" data-placement="top" class="btn default btn-xs red tooltips" >
										<i class="fa fa-times"></i></a>
								
								</td>
							   </tr>
                                <?php }}?>
							
								</tbody>
							</table>
						</div>
					</div>
                    
                    <?php if(count($admin_otherBranch)){
					foreach($admin_otherBranch-> result_array()as $row){ ?>
					<div id="viewModalother<?php echo $row['branch_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title"><?php echo $row['location'];?> Branch Details </h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal" >
                                        <div class="form-body">
                                            
                                          <div class="form-group">
                                                
                                                <div class="col-md-12">
                                                <table width="80%" border="0" align="center" style=" padding-bottom:50px">
                                                 
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Main Branch Details </h3><hr /></td>                                                    
                                                  </tr>
                                                                                                  
                                                  
                                                  <tr>
                                                    <td>Location</td>
                                                    <td colspan="2">: <?php echo $row['location'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Address</td>
                                                    <td colspan="2">: <?php echo $row['address'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Email</td>
                                                    <td colspan="2">: <?php echo $row['email'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Contact 1</td>
                                                    <td colspan="2">: <?php echo $row['contact1'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Contact 2</td>
                                                    <td colspan="2">: <?php echo $row['contact2'];?></td>
                                                  </tr>
                                                  <tr>
                                                    <td>Contact 3</td>
                                                    <td colspan="2">: <?php echo $row['contact3'];?></td>
                                                  </tr> 
                                                  <tr>
                                                    <td>Fax No</td>
                                                    <td colspan="2">: <?php echo $row['fax'];?></td>
                                                  </tr>                                                 
                                                  
                                                  <tr>
                                                    <td width="30%" colspan="3"><h3>Map</h3><hr /></td>                                                    
                                                  </tr>
                                                  <tr>
                                                    <td valign="top">&nbsp;</td>
                                                    <td><iframe src="<?php echo $row['map']; ?>" width="100%" height="200" frameborder="0" style="border: 1px solid #e9e9e9;padding: 10px 10px 10px;"></iframe></td>
                                                    <td>&nbsp;</td>
                                                  </tr>
                                                  <tr>
                                                    <td width="30%" colspan="3">&nbsp;</td>                                                    
                                                  </tr>
                                                </table>
                                                
                                                </div>
                                            </div>
                                           
                                            
                                        </div>
                                        
                                    
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        
                                        </form>
										</div>
									</div>
								</div>
							</div>
                           <?php }}?> <!--end view-->
                    <?php if(count($admin_otherBranch)){
					foreach($admin_otherBranch-> result_array()as $row){ ?>
                    <div id="catModalother<?php echo $row['branch_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit <?php echo $row['location'];?> Branch Details
</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/otherbranchedit/<?php echo $row['branch_id'];?>" method="post"  onsubmit="return editbranchvalidation<?php echo $row['branch_id'];?>()">
                                        <div class="form-body">
                                                 
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Location<font class="required">* </font></label>
                                                    <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Location" value="<?php echo $row['location'];?>" class="form-control" name="location" id="blocation<?php echo $row['branch_id'];?>">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Address<font class="required">* </font></label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Address" value="<?php echo $row['address'];?>" class="form-control" name="address" id="baddress<?php echo $row['branch_id'];?>">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div> 
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Email</label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Email" value="<?php echo $row['email'];?>" class="form-control" name="email" id="bemail<?php echo $row['branch_id'];?>">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div> 
                                                 
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Contact No 1<font class="required">* </font></label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Contact No 1" value="<?php echo $row['contact1'];?>" class="form-control" name="contact1" id="bcontact1<?php echo $row['branch_id'];?>">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Contact No 2</label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Contact No 2" value="<?php echo $row['contact2'];?>" class="form-control" name="contact2" id="bcontact2<?php echo $row['branch_id'];?>">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contact No 3</label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Contact No 3" value="<?php echo $row['contact3'];?>" class="form-control" name="contact3" id="bcontact3<?php echo $row['branch_id'];?>">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Fax No </label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Fax No " value="<?php echo $row['fax'];?>" class="form-control" name="fax" id="bfax<?php echo $row['branch_id'];?>">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                               
                                           	 </div>
                                             <div class="form-group">
                                                    <label class="control-label col-md-3">Map</label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <textarea id="bmap<?php echo $row['branch_id'];?>" name="map" class="form-control" placeholder="Map"><?php echo $row['map'];?></textarea>
                                                        <span class='error'></span> </div>
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
                            
							 <?php if(count($admin_otherBranch)){
                            foreach($admin_otherBranch-> result_array()as $row){ ?>
                            <div id="delteModal<?php echo $row['branch_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Confirm Delete</h4>
                                                </div>
                                                <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/branchdelete/<?php echo $row['branch_id'];?>" method="post">
                                                    
                                                <div class="modal-body">
                                                    <p>
                                                         Do you want to delete "<span style="color:#06F"><?php echo $row['location'];?></span>" branch details ? 
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                     <input type="hidden" value="<?php echo $row['location'];?>" name="location" />
                                                    
                                                    <button class="btn blue" type="submit">Confirm</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }}?>
					 
                     
                      <div id="addModalother" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Add New Branch Details
</h4>
										</div>
										<div class="modal-body">
										<p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/otherbranchadd" method="post"  onsubmit="return addnewbranchvalidation()">
                                        <div class="form-body">
                                                 
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Location<font class="required">* </font></label>
                                                    <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Location" value="" class="form-control" name="location" id="blocation">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Address<font class="required">* </font></label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Address" value="" class="form-control" name="address" id="baddress">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div> 
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Email</label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Email" value="" class="form-control" name="email" id="bemail">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div> 
                                                 
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Contact No 1<font class="required">* </font></label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Contact No 1" value="" class="form-control" name="contact1" id="bcontact1">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Contact No 2</label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Contact No 2" value="" class="form-control" name="contact2" id="bcontact2">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contact No 3</label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Contact No 3" value="" class="form-control" name="contact3" id="bcontact3">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Fax No </label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <input type="text" placeholder="Fax No " value="" class="form-control" name="fax" id="bfax">
                                                        <span class='error'></span> </div>
                                                    </div>
                                                </div>
                                               
                                           	 </div>
                                             <div class="form-group">
                                                    <label class="control-label col-md-3">Map</label>
                                                     <div class="col-md-9">
                                                        <div class="has-error" >
                                                        <textarea id="bmap" name="map" class="form-control" placeholder="Map"></textarea>
                                                        <span class='error'></span> </div>
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
					<!-- END EXAMPLE TABLE PORTLET-->
					
					</div>
                    </div>
				</div></div>
			<!-- END PAGE CONTENT-->
		</div>
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>admin/assets/admin/pages/scripts/components-editors.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
 
 <!--EDIT GENDER VALIDATION -->
 <?php if(count($admin_otherBranch)){
 foreach($admin_otherBranch-> result_array()as $row){ ?>
<script>
	function editbranchvalidation<?php echo $row['branch_id'];?>(){
		
	$('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
	if($(this).val() !== "")
		   
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
	
	var errormessage="";
	
    //Location
	if($('#blocation<?php echo $row['branch_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#blocation<?php echo $row['branch_id'];?>'),'Location Name must be entered');
	errormessage += 1; 
	} 	else if(!$('#blocation<?php echo $row['branch_id'];?>').val().match(/^[0-9a-zA-Z ]+$/)){
	error_display($('#blocation<?php echo $row['branch_id'];?>'), 'Location Name must be alphabet characters &amp; numbers only');
	errormessage += 1;
	}	
	
    //Address
	if($('#baddress<?php echo $row['branch_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#baddress<?php echo $row['branch_id'];?>'),'Address  must be entered');
	errormessage += 1; 
	} 	else if(!$('#baddress<?php echo $row['branch_id'];?>').val().match(/^[0-9a-zA-Z,./ ]+$/)){
	error_display($('#baddress<?php echo $row['branch_id'];?>'), 'Address must be alphabet characters &amp; numbers only');
	errormessage += 1;
	}
		
	//email
	var x=$('#bemail<?php echo $row['branch_id'];?>').val();
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	 if( ($('#bemail<?php echo $row['branch_id'];?>').val() != '')&&(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length))
	{
	error_display($('#bemail<?php echo $row['branch_id'];?>'),'Email Address is not valid.');
	errormessage += 1;
	
	} 
	//contact 1
	if($('#bcontact1<?php echo $row['branch_id'];?>').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#bcontact1<?php echo $row['branch_id'];?>'),'Contatc no 1  must be entered');
	errormessage += 1; 
	}else if(!$('#bcontact1<?php echo $row['branch_id'];?>').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/)){
	error_display($('#bcontact1<?php echo $row['branch_id'];?>'), ' Contatc no 1  must be number & +XX XXX XXX XXX');
	errormessage += 1;
	}	
	//contact 2
	if( ($('#bcontact2<?php echo $row['branch_id'];?>').val() != '') && (!$('#bcontact2<?php echo $row['branch_id'];?>').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/))){
	error_display($('#bcontact2<?php echo $row['branch_id'];?>'), ' Contatc no 2  must be number & +XX XXX XXX XXX');
	errormessage += 1;
	}
	
	//contact 3
	if( ($('#bcontact3<?php echo $row['branch_id'];?>').val() != '') && (!$('#bcontact3<?php echo $row['branch_id'];?>').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/))){
	error_display($('#bcontact3<?php echo $row['branch_id'];?>'), ' Contatc no 3  must be number & +XX XXX XXX XXX');
	errormessage += 1;
	}	
	
	//fax
	if( ($('#bfax<?php echo $row['branch_id'];?>').val() != '') && (!$('#bfax<?php echo $row['branch_id'];?>').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/))){
	error_display($('#bfax<?php echo $row['branch_id'];?>'), ' Fax no  must be number & +XX XXX XXX XXX');
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
 	<SCRIPT type="text/javascript">
    function ValidateFileUpload1() {
		var fuData = document.getElementById('cmap');
		var FileUploadPath = fuData.value;
    
		//To check if user upload any file
		if (FileUploadPath == '') {
		alert("Please upload an image");
    
		} else {
		var Extension = FileUploadPath.substring(
		FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
    
		//The file uploaded is an image
		
		if (Extension == "gif" || Extension == "png" || Extension == "bmp"
		|| Extension == "jpeg" || Extension == "jpg") {
    	document.getElementById("Add").disabled = false; 
		// To Display
		if (fuData.files && fuData.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function(e) {
		$('#blah').attr('src', e.target.result);
		}
		
		reader.readAsDataURL(fuData.files[0]);
		}
		
		} 
		
		//The file upload is NOT an image
		else {
		alert("Logo image only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
		document.getElementById("Add").disabled = true; 
		}
		}
    }
    </SCRIPT> 
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
   ComponentsEditors.init();
});   
</script>