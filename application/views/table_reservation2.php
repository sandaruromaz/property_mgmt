<?php 

if (!isset($_SESSION['reservation']))
			{		 redirect('/pages/table_reservation', 'location');	 		
			
			
			}
			
?>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name">Reservation Stage 2
</h2>   
		  <!-- Error Message-->   
                  <?php if($this -> session -> userdata('errorreservation2')){ ?>   
                  <div class="alert alert-danger">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  <strong><?php echo $this -> session -> userdata('errorreservation2'); ?></strong> 
                  </div>
                  <?php $this->session->unset_userdata('errorreservation2');}?>
                  <!-- Error Message-->
                  <?php if($this -> session -> userdata('Successreservation2')){ ?>   
                  <div class="alert alert-success">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  <strong><?php echo $this -> session -> userdata('Successreservation2'); ?></strong>
                  </div>                               
                  <?php $this->session->unset_userdata('Successreservation2');}?>
                  </div>

		<!-- //PAGE HEADER --> 
		
	<!-- CHECKOUT PAGE -->
		<section class="checkout_page">
			


				<!-- CHECKOUT BLOCK -->
				<div class="checkout_block">
					<ul class="checkout_nav">
						<li >1. Find Table</li>
						<li class="active_step">2. Reserve</li>
						<li class="last">3. Confirm</li>
						
					</ul>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ss-12 padbot40 column_item">
                        <p>
   <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
			/*check wether user log in or not*/?>
						<?php if (count($user_data)){ 
                          foreach ($user_data-> result_array() as $row){
                          $profile = array('user' => $row);	//we make new array so we can use it anyware	  
                          }
                        
                          }
                        }
  ?>                     
  

   <H3>RECERVATION DETAILS</H3>
<h4>Name </h4>
<?php  echo $profile['user']['title'];?>. <?php  echo $profile['user']['fname'];?> 
<?php  echo $profile['user']['lname'];?>

</br>
<h4>Recerved Date</h4>
<?php echo $_SESSION['reservation']['date'];?>,
<h4>Check In Time</h4>
<?php echo $_SESSION['reservation']['checkin'];?>
</br>
<h4>Check Out Time</h4>               
<?php echo $_SESSION['reservation']['checkout'];?>,
</br>
<h4>Number of Chairs</h4>
<?php echo $_SESSION['reservation']['chair_count'];?>.
</br>
<h4>Number of Tables</h4>
<?php echo $_SESSION['reservation']['table_count'];?>
</br>
</p>
                </div>


					<div class="clearfix">
                   <form  action="<?php echo base_url();?>index.php/pages/table_reservation_success" method="POST" >
				                      
                   <div class="checkout2btn">      
                   <a class="btn btn-default " href="<?php echo base_url();?>index.php/pages/table_reservation" class="btn inactive" style="float:left;margin-right:50px">BACK</a>
                   <input type="submit" class="btn btn-" value="Reserved" />         
                    </div> 

					</form>
						 
					</div>
                    
				</div><!-- //T BLOCK -->

		</section><!-- //CHECKOUT PAGE -->
		    </div>
</div>
</div>
</div>