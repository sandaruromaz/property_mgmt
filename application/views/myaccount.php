<?php if (!isset($_SESSION['user_id']) || $_SESSION['user_id']=='')
			{		 redirect('/pages/signin', 'location');	 		}
		?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />  
<!-- BREADCRUMBS -->

<!-- TOVAR DETAILS -->
<section class="tovar_details padbot70"> 
        <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
              /*check wether user log in or not*/?>
        <?php if (count($user_data)){ 
              foreach ($user_data-> result_array() as $row){
              $profile = array('user' => $row); //we make new array so we can use it anyware    
              }
            
              }
            }
              ?>

       <!--main contet-->
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="content">
    
    
  <!--Errors-->
      <?php if($this -> session -> userdata('errorUpdateData')){ ?>
      <div class="alert alert-danger">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <strong><?php echo $this -> session -> userdata('errorUpdateData'); ?></strong> </div>
      <?php $this->session->unset_userdata('errorUpdateData');}?>
      <!-- Error Message-->
      <?php if($this -> session -> userdata('SuccessUpdateData')){ ?>
      <div class="alert alert-success">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <strong><?php echo $this -> session -> userdata('SuccessUpdateData'); ?></strong> </div>
      <?php $this->session->unset_userdata('SuccessUpdateData');}?>
      <!--end Errors-->
    
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="body-content">

                    <!-- Breadcrumbs  -->
                    <div class="ft-breadcrumbs">
                        
                    </div>
                    
                    
                      <div class="page-header">
            <h2 itemprop="name">
              My Account
            </h2>
             </div> 

             <!--code-->  
              <div itemprop="articleBody" class="edit_profile_page">
                <div class="row ac_header">
                  <div class="col-xs-12 col-sm-12 col-md-3 ac_same ac_details" id="detail_one">
                    My Account
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 ac_same ac_email" id="detail_two">
                    Emai Notification
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 ac_same ac_order" id="detail_three">
                  Order & Resevation History
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 ac_same ac_oredr_history" id="detail_four">
                  Design Order History
                </div>
                
             </div>

             <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 loading_img">
                <img src="<?php echo base_url(); ?>/assets/images/loading.png?>" class="img-responsive" alt="loading">
              </div>
             </div>

             <div class="row" id="ac_first_tab">
              <div class="col-xs-12 col-sm-12 col-md-12 ac_small_account">
                <div class="row" id="ac_small_one">
                  <div class="col-xs-12 col-sm-12 col-md-12 ac_personal">
                    <div class="ac_myprof">
                      <div class="ac_profle">
                      <span class="glyphicon glyphicon-expand ac_toggle_up"></span>
                      <span style="display:none;" class="glyphicon glyphicon-collapse-down ac_toggle_up"></span> <span class="ac_hdng"> My Profile </span>
                    </div>
                      
                      <div class="ac_prof_details">
                        <h4>personal details</h4>
                        <p> At New Monis Bakery, we believe in convenience, at all times. Whether it be in-store or online. Which is why we have made it possible for you to create your own Account – that is simple, accessible and updatable. Wherever you may be.</p>

<form class="form-horizontal" name"regform" id="regform" action="<?php echo base_url();?>index.php/customer/updateAcoount" method="POST" onsubmit="return updatevalidation()">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
     <select class="form-control" name="title"  id="title" >
      <?php $opt=array('Rev','Dr','Mr','Mrs','Miss'); ?>
      <option value="">Select </option>
            <?php foreach($opt as $val){?>
            <?php if ($profile['user']['title']==$val) {?>
            <option value="<?php echo $val; ?>" selected="selected"><?php echo $val; ?></option>
            <?php }else{?>
            <option value="<?php echo $val; ?>" ><?php echo $val; ?></option>
            <?php }}?>
     </select>
    </div>
  </div>
  <div class="form-group">

    <label for="inputPassword3" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" name="ufname"  id="ufname" value="<?php  echo $profile['user']['fname'];?>" class="form-control">
                             
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" id="ulname" name="ulname" value="<?php  echo $profile['user']['lname'];?>" class="form-control">
                                              
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" id="uemail" name="uemail" value="<?php  echo $profile['user']['email'];?>" class="form-control">
              <div class="username_avail_result" id="username_avail_result"></div>
              <span class='error'></span> 
    </div>                    
    </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Date of Birth</label>
    <div class="col-sm-10">
      <input type="text" name="udate" id="udate" class="form-control" readonly="readonly" value="<?php  echo $profile['user']['date_of_birth'];?>" /></td>
                    
    </div>                    
    </div>

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
      <input type="text" id="uadd" name="uadd" value="<?php  echo $profile['user']['address'];?>" class="form-control">
                                                                  
    </div>
  </div>



  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Address Line1</label>
    <div class="col-sm-10">
      <input type="text" id="uadd1" name="uadd1" value="<?php  echo $profile['user']['address1'];?>" class="form-control"></td>
                                                            
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
      <input type="text" id="ucity" name="ucity" value="<?php  echo $profile['user']['city'];?>" class="form-control">
                                                                  
    </div>
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Contatct No 1</label>
    <div class="col-sm-10">
      <input type="text" id="utel" name="utel" value="<?php  echo $profile['user']['telephone'];?>" class="form-control">
                                                                                      
    </div>
  </div>



  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Contatct No 2</label>
    <div class="col-sm-10">
      <input type="text" id="umob" name="umob" value="<?php  echo $profile['user']['mobile'];?>" class="form-control"></td>
                                                                                
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Postal Code</label>
    <div class="col-sm-10">
      <input type="text" id="upostal" name="upostal" value="<?php  echo $profile['user']['postal_code'];?>" class="form-control">
                                                                  
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Update</button>
    </div>
  </div>
</form>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 ac_personal">
                     <div class="ac_myprof ac_pass">
                      
                       <span class="glyphicon glyphicon-expand ac_toggle_up_two"></span><span style="display:none;" class="glyphicon glyphicon-collapse-down ac_toggle_up_two"></span><span class="ac_hdng">Change Password</span>
                     
                    </div>
                    <div class="row ac_changepass">
                     <div class="col-xs-12 col-sm-12 col-md-12"> 
                    <div class="row">
                   <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4>Change Password</h4>
                    <p>Your right to privacy is at the top of our list. Which is why we request you to create a password for your Account. This will ensure the security and confidentiality of all your data. At all times.</p>
                   </div>
                  </div>
                  <div class="row">
                   <div class="col-xs-12 col-sm-12 col-md-12">
                    <h4>Change your Password</h4>
                    <p>Enter your current password and new password (twice for verification). Then click SUBMIT. Passwords must contain at least 8 characters and can be composed of both UPPERCASE and LOWERCASE letters. </p>

                    <!-- <form class="form-horizontal"> -->
  <form name"changeregform" class="" action="<?php echo base_url();?>index.php/Customer/changePassword" method="POST" onsubmit="return changepwvalidation()">
                  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Current Password</label>
    <div class="col-sm-9">
      <div class="has-error">
      <input type="password" class="form-control" id="upass" name="upass" placeholder="Current Password">
      <span class='error'></span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">New Password</label>
    <div class="col-sm-9">
      <div class="has-error">
      <input type="password" class="form-control" id="unewpass" name="unewpass" placeholder="New Password">
    <span class='error'></span>
  </div>
    </div>
  </div><br/>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Confirm Password</label>
    <div class="col-sm-9">
      <div class="has-error">
      <input type="password" class="form-control" id="conpass" placeholder="Confirm Password">
      <span class='error'></span>
  </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-default monis_buttn">Update</button>
    </div>
  </div>

  </form>
<!-- </form> -->
                   </div>
                  </div>
                  </div>
                  </div>
                 </div> 

                </div>
                

              </div>
             </div>

             <div class="row" id="ac_second_tab">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <p>The New Monis Bakery Newsletter periodically updates you on the latest trends, products, services and promotions. It gives you a sneak peak at just about everything 'New Monis Bakery'. So that you are well informed, each time you shop. </p>
            
            <form  action="<?php echo base_url();?>index.php/Customer/updateNewsLetter" method="POST" >
                   
                 <div> <h3>
                    <p>Newsletter & Alerts</p>
                      <input type="checkbox" name="newsalert1" id="newsalert1" value="active" <?php if($profile['user']['news_alert']=='active') echo 'checked'; ?>>
                      <label for="newsalert1"></label>
                    </h3>
                </div>
                  <div><input type="submit" value="UPDATE" class="btn btn-general"></div>
              </form>
              
              </div>
             </div>

             <div class="row" id="ac_third_tab">
              <div class="col-xs-12 col-sm-12 col-md-12">
        <?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
              /*check wether user log in or not*/?>
        <?php if (count($user_data)){ 
              foreach ($user_data-> result_array() as $row){
              $profile = array('user' => $row); //we make new array so we can use it anyware    
              }
            
              }
            }

              ?>
               

<div class="box">
  <h3>Order History</h3>
            <?php if ($orderdata != "empty"){?>
            <table class="table type1">
              <thead>
                <tr>
                  <th>Order No</th>
                  <th>Order Date</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>


                <?php foreach ($orderdata as $order){?>
                <tr>
                  <th><?php  echo $order->order_id ;?></th>
                  <td><?php  echo $order->order_date;?></td>
                  <td><?php  echo $order->status ;?></td>
                  <td>LKR:
                    <?php  echo $order->amount ;?></td>
                  <td><a href="<?php echo base_url(); ?>index.php/pages/order_details/<?php echo $order->order_id; ?>" style="color:#900">VIEW</a></td>
                </tr>
                <?php }}else{
                 
                 echo'<h3 align="center">No order in your order history !</h3>';
                 } ?>
              </tbody>
            </table>

<!-- reservation details -->
<h3>Reservaton History</h3>

<?php if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
              /*check wether user log in or not*/?>
        <?php if (count($user_data)){ 
              foreach ($user_data-> result_array() as $row){
              $profile = array('user' => $row); //we make new array so we can use it anyware    
              }
            
              }
            }

              ?>
            <?php if ($reservation != "empty"){?>
            <table class="table type1">
              <thead>
                <tr>
                  <th>Reservation No</th>
                  <th>Created Date</th>
                  <th>Chech in</th>
                  <th>Check Out</th>
                  <th>No of Chairs</th>
                  <th>No of Tables</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($reservation as $reserve){?>
                <tr>
                  <th><?php  echo $reserve->table_reservation_id ;?></th>
                  <td><?php  echo $reserve->created_date;?></td>
                  <td><?php  echo $reserve->start_time ;?></td>
                  <td><?php  echo $reserve->end_time ;?></td>
                  <td><?php  echo $reserve->chair_count ;?></td>
                  <td><?php  echo $reserve->table_count ;?></td>
                  <td><a href="<?php echo base_url(); ?>index.php/pages/reservation_indetails/<?php echo $reserve->table_reservation_id; ?>" style="color:#900">VIEW</a></td>
                </tr>
                <?php }}else{
                 
                 echo'<h3 align="center">No Reservations  in your history !</h3>';
                 } ?>
              </tbody>
            </table>


          </div>
          

              </div>
             </div>

             <div class="row" id="ac_fourth_tab">
              <div class="col-xs-12 col-sm-12 col-md-12">
            <?php if ($designorderdata != "empty"){?>
            <table class="table type1">
              <thead>
                <tr>
                  <th>Order No</th>
                  <th>Order Date</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($designorderdata as $design){?>
                <tr>
                  <th><?php  echo $design->design_order_id ;?></th>
                  <td><?php  echo $design->order_date;?></td>
                  <td><?php  echo $design->status ;?></td>
                  <td>LKR:
                    <?php  $quantity=$design->qty;
                                    $total= $quantity*$unitprice=$design->amount;
                                    echo $total;?></td>
                  <td><a href="<?php echo base_url(); ?>index.php/pages/designorder_details/<?php echo $design->design_order_id; ?>" style="color:#900">VIEW</a></td>
                </tr>
                <?php }}else{
                 
                 echo'<h3 align="center">No order in your order history !</h3>';
                 } ?>
              </tbody>
            </table>
              </div>
             </div>


             

            <!--code-->


                    </div> 
                  </div>


            </div>
           </div>
           </div>
           <!--end main contet-->
</div>





    <!-- Load jQuery JS --
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Load jQuery UI Main JS  -->
 <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/jquery.edit_profile_tabs.js"></script>
<script>
	$(function() {
    $( "#udate" ).datepicker({ 
	dateFormat: "yy-mm-dd",
	changeMonth: true,//this option for allowing user to select month
      changeYear: true, //this option for allowing user to select from year range
	maxDate: '-18Y',
	//maxDate: new Date() 
	});
  });
  </script>
<!---check Email avalilability--> 
<script type="text/javascript">
    $(document).ready(function(){
	$('#uemail').keyup(function(){ // Keyup function for check the user action in input
		var Username = $(this).val(); // Get the username textbox using $(this) or you can use directly $('#username')
        var atpos=Username.indexOf("@");
        var dotpos=Username.lastIndexOf(".");
		var UsernameAvailResult = $('#username_avail_result'); // Get the ID of the result where we gonna display the results
		if( atpos<1 || dotpos<atpos+2 || dotpos+2>=Username.length ) { // check if email is valid or not
		
		UsernameAvailResult.html('<span class="error">Email Address is not valid</span>');//not valid
			
		}else{
			
			UsernameAvailResult.html('Loading..'); // Preloader, use can use loading animation here
			var UrlToPass = 'action=username_availability&username='+Username;
			$.ajax({ // Send the username val to another checker.php using Ajax in POST menthod
			type : 'POST',
			data : UrlToPass,
			url  : '<?php echo base_url();?>index.php/Customer/chk_usr',
			success: function(responseText){ // Get the result and asign to each cases
				if(responseText == 0){
					UsernameAvailResult.html('<span class="success">Email address available</span>');
				}
				else if(responseText > 0){
					UsernameAvailResult.html('<span class="error">Email address already taken</span>');
					
									}
				else{
					alert('Problem with sql query');
				}
			}
			});
			
		}
		if(Username.length == 0) {
			UsernameAvailResult.html('');
		}
	});
	
	
	
	$('#upass, #uemail,#unewpass,#ucpass,#umob').keydown(function(e) { // Dont allow users to enter spaces for their username and passwords
		if (e.which == 32) {
			return false;
  		}
	});
	
	
	$('#unewpass').keyup(function() { // As same using keyup function for get user action in input
		var Password = $(this).val();
		var PasswordLength = $(this).val().length; // Get the password input using $(this)
		var PasswordStrength = $('#password_strength'); // Get the id of the password indicator display area
		
		if(PasswordLength <= 0) { // Check is less than 0
			PasswordStrength.html(''); // Empty the HTML
			PasswordStrength.removeClass('weak normal  strong verystrong'); //Remove all the indicator classes
		}
		if(!/[a-z]/.test(Password)||!/[0-9]/.test(Password)||!/[A-Z]/.test(Password)|| PasswordLength <8) { // If string length less than 4 add 'weak' class
			PasswordStrength.html('weak');
			PasswordStrength.removeClass('normal strong verystrong').addClass('weak');
		}
		else if(PasswordLength >=8 && PasswordLength < 12){ // If string length greater than 4 and less than 8 add 'normal' class
			PasswordStrength.html('Normal');
			PasswordStrength.removeClass('weak strong verystrong').addClass('normal');			
		}
		else if(PasswordLength >=12 && PasswordLength < 15){ // If string length greater than 4 and less than 8 add 'normal' class
			PasswordStrength.html('Strong');
			PasswordStrength.removeClass('weak normal verystrong').addClass('strong');			
		}
		else if(PasswordLength >=15){ // If string length greater than 4 and less than 8 add 'normal' class
			PasswordStrength.html('Very Strong');
			PasswordStrength.removeClass('weak normal strong').addClass('verystrong');			
		}
	});
});
</script> 
