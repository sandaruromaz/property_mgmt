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
              
              Table Reservation
              <i class="fa fa-angle-right"></i>
            </li>
            <li>              
              View Reserves  
            </li>
            <h3 class="page-title">
           </h3>
          </ul>
          <h3 class="page-title">
          View Reserves  <small></small>
          </h3>
          <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
      </div>
            <!--Errors-->
        <?php if($this -> session -> userdata('errororder')){ ?>
              <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>Error !</strong> 
        <?php echo $this -> session -> userdata('errororder'); ?></div>
              <?php $this->session->unset_userdata('errororder');}?>
              <!-- Error Message-->
              <?php if($this -> session -> userdata('successorder')){ ?>
              
                <div class="Metronic-alerts alert alert-success fade in" id="prefix_534781156455">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                <strong> Success !</strong> 
                 <?php echo $this -> session -> userdata('successorder'); ?>
                </div>
              <?php $this->session->unset_userdata('successorder');}?>
              <!--end Errors-->
            
      <!-- END PAGE HEADER-->
      
      
        
        
            <div class="row">
      <div class="col-md-12 ">
          <!-- BEGIN EXAMPLE TABLE PORTLET-->
          <div class="portlet box blue-madison">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-square"></i>All Reservations
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
                   Reservation No
                </th>
                <th>
                   Type
                </th> 
                <th>
                   Total
                </th>              
                <th>
                     Available
                </th>
                <th>
                     Update
                </th>
               
                </tr>
              </thead>
              <tbody>
                            <?php if(count($reservationadd)){
              foreach($reservationadd-> result_array()as $row){ ?>
              <tr>
                              <td>
                   <?php echo $row['table_reservation_resourceid'];?>
                </td>
                <td>
                   <?php echo $row['type'];?>
                </td>
                <td>
                   <?php echo $row['total'];?>
                </td>
                <td>
                   <?php echo $row['available'];?>
                </td>
                  <td>
                    
                   <a href="#editoModal<?php echo $row['table_reservation_resourceid'];?>" data-toggle="modal" data-original-title="QUICK EDIT" data-placement="top" class="btn default btn-xs yellow tooltips" >
                    <i class="fa fa-edit"></i></a>                                     
                   
                </td>
                 </tr>
                                <?php }}?>
              
                </tbody>
              </table>
            </div>
          </div>
                     <?php if(count($reservationadd)){
          foreach($reservationadd-> result_array()as $row){ ?>
          <div id="editoModal<?php echo $row['table_reservation_resourceid'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                      <h4 class="modal-title">Edit Reserve Status
                                            </h4>
                    </div>
                    <div class="modal-body">
                    <p>
                                        <form role="form" class="form-horizontal"  action="<?php echo base_url(); ?>index.php/Admin/resourseedit/<?php echo $row['table_reservation_resourceid'];?>" method="post" onsubmit="return editcatevalidation()">
                                        <div class="form-body">
                                            
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                <strong style=" float:right">Reserved No</strong>
                                                </div>
                                                <div class="col-md-9">
                                                 <div class="has-error" >
                                                    <?php echo $row['table_reservation_resourceid'];?>
                                                <span class='error'></span> </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                            <label class="col-md-2 control-label">Type: <span class="required">
                              * </span>
                            </label>
                          <div class="col-md-10">
                            <input type="text" placeholder="" name="type" value="<?php echo $row['type'];?>" class="form-control" required>
                          </div>
                        </div>
                                            
                                        <div class="form-group">
                          <label class="col-md-2 control-label">Total: <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-10">
                            <input type="number" placeholder="" name="total" value="<?php echo $row['total'];?>" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Available: <span class="required">
                              * </span>
                            </label>
                          <div class="col-md-10">
                            <input type="number" placeholder="" name="available" value="<?php echo $row['available'];?>" class="form-control" required>
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
                     
                    
                    
        </div>
                  
        </div>
                
                </div>
                
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