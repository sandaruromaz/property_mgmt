<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">

<h2 itemprop="name">Table Reservation</h2> 


                  <!-- Error Message-->   
                  <?php if($this -> session -> userdata('errorreservation')){ ?>   
                  <div class="alert alert-danger">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  <strong><?php echo $this -> session -> userdata('errorreservation'); ?></strong> 
                  </div>
                  <?php $this->session->unset_userdata('errorreservation');}?>
                  <!-- Error Message-->
                  <?php if($this -> session -> userdata('Successreservation')){ ?>   
                  <div class="alert alert-success">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  <strong><?php echo $this -> session -> userdata('Successreservation'); ?></strong>
                  </div>                               
                  <?php $this->session->unset_userdata('Successreservation');}?>
                  </div> 

		<!-- //PAGE HEADER --> 
		
	<!-- CHECK PAGE -->
		<section class="check_page">
			
			<!-- style-->
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-timepicker.css" />
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" /> 
  <style>
  .ui-datepicker-title{
    color: #000 !important;
  }
  </style>

				<!-- CHECK BLOCK -->
				<div >

					<ul class="checkout_nav">
						<li class="active_step">1. Find Table</li>
						<li>2. Reserve</li>
						<li class="last">3. Confirm</li>
						
					</ul>

					<?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
							/*check wether user log in or not*/?>
						<?php if (count($user_data)){ 
						  foreach ($user_data-> result_array() as $row){
						  $profile = array('user' => $row);	//we make new array so we can use it anyware	  
						  }
						
						  }
						}
						  ?>

            

					<form  name"reserveform" action="<?php echo base_url();?>index.php/customer/table_reserve" method="POST" onsubmit="return reservationvalidation()">
              
						<div class="">
            <div >
                <p align="justify">
                  You must make reservations at least 5 minutes in advance of the time at New Monis Bakery.
                </p>
                <p><h5>Consider : One Table have only FOUR Tables</h5> </p>

            </div>
            <br>

            <div class="col-xs-12 col-sm-6">
               
                
               
              <!-- Date -->
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Date <span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                    <input type="text" class="form-control"   id="date" name="date" readonly="readonly" placeholder="Enter your reservation date  " required/>
                    
                    <span class='error'></span> </div>
                    </div>
                  </div>
                  </br></br>
                  <!--start time -->

                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Start Time<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                    <input type="text"  id="st"  class="input-small timepicker form-control" name="checkin" readonly="readonly" placeholder="Start Time "/>
                    
                    <span class='error'></span> </div>
                    </div>
                  </div>
            </br></br>
          <!--start time -->

                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">End Time<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                    <input type="text"  id="totime" class="input-small timepicker form-control" name="checkout" readonly="readonly" placeholder="Start Time "/>
                    
                    <span class='error'></span> </div>
                    </div>
                  </div>


             </br></br>
           </div>
<!--Table -->               
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label  class="col-sm-4 control-label">Table<span class="mandatory">*</span></label>
                    <div class="col-sm-8">

                      <div class="has-error" >
                        <input type="number" class="form-control" name="table_count" id="table_count" placeholder="Enter Table count" onPaste="return false" onCopy="return false" >
                        <span class='error'>
                      </div>
                    </div>
                  </div>

               
             <br/><br/>
<!--Chair -->             
          <div class="form-group">
                    <label  class="col-sm-4 control-label">Chair<span class="mandatory">*</span></label>
                    <div class="col-sm-8">

                       <div class="has-error" >
                        <input type="number" class="form-control" name="chair_count" id="chair_count" placeholder="Enter Chair count" onPaste="return false" onCopy="return false"  >
                        
                         <span class='error'>
                       
                      </div>
                    </div>
                  </div>              
         
         </br></br>
            <input class="btn btn-default btn-cart" type="submit" value="Check Availability">
            

                        </div>
                        </div> 
						
						
					</form>



				</div><!-- //CHECKOUT BLOCK -->
		</section><!-- //CHECKOUT PAGE -->

    </div>
</div>
</div>

<!--js  -->


<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/validation/reservationval.js"></script>



<script type="text/javascript">
    $(document).ready(function(){

 $( "#date" ).datepicker({ 

  minDate: 0, //disable select previous dates
  dateFormat: "yy-mm-dd",
  changeMonth: true,//this option for allowing user to select month
      changeYear: true, //this option for allowing user to select from year range
 
  //maxDate: new Date() 
  });
});
</script>


<script type="text/javascript">
  $('.timepicker').timepicker({
                        minuteStep: 1,
                        showSeconds: true,
                        showMeridian: false,
                        });  

</script>


