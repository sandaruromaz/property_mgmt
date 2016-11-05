<!--main contet-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" /> 
<style>
  .ui-datepicker-title{
    color: #000 !important;
  }
</style>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="content">

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="body-content">

                    <!-- Breadcrumbs  -->
                    <div class="ft-breadcrumbs">
                        
                    </div>
                    
                    
                      <div class="page-header">
                        <h2 itemprop="name">
                          Register
                        </h2>

                  <!-- Error Message-->   
                  <?php if($this -> session -> userdata('error')){ ?>   
                  <div class="alert alert-danger">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  <strong><?php echo $this -> session -> userdata('error'); ?></strong> 
                  </div>
                  <?php $this->session->unset_userdata('error');}?>
                  <!-- Error Message-->
                  <?php if($this -> session -> userdata('Success')){ ?>   
                  <div class="alert alert-success">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  <strong><?php echo $this -> session -> userdata('Success'); ?></strong>
                  </div>                               
                  <?php $this->session->unset_userdata('Success');}?>
                  </div> 

             <!--code-->  
             <div itemprop="articleBody" class="registraion_page">
              <form class="form-horizontal" name"regform" action="<?php echo base_url();?>index.php/customer/register" method="POST" onsubmit="return registrvalidation()">
              <div class="row ">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h3>Customer Information</h3>
                            <!--title-->
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Title<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                              <select class="form-control" name="title"  id="title" >
                                <option value="" selected="selected"> Select </option>
                                <option value="Rev"> Rev</option>
                                <option value="Dr"> Dr </option>
                                <option value="Mr"> Mr</option>
                                <option value="Mrs"> Mrs </option>
                                <option value="Miss"> Miss </option>
                              </select>
                              
                              <span class='error'>
                              <?php if($this -> session -> flashdata('titleError')){ ?>
                              <?php echo $this -> session -> flashdata('titleError')?></span>
                              <?php }?>
                            </div>
                      </div>
                  </div>
                                 <!--first name -->
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">First Name<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                        <input type="text"  class="form-control" name="fname" id="fname" placeholder="Enter your first name" />
                        
                        <span class='error'>
                        <?php if($this -> session -> flashdata('fnameError')){ ?>
                        <?php echo $this -> session -> flashdata('fnameError')?></span>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                                  <!--last name-->
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Last Name<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter your last name" />
                        
                        <span class='error'>
                        <?php if($this -> session -> flashdata('lnameError')){ ?>
                        <?php echo $this -> session -> flashdata('lnameError')?></span>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                                  <!--email-->
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Email<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email address" autocomplete="off"/>
                        
                        <div class="username_avail_result" id="username_avail_result"></div>
                        <span class='error'>
                        <?php if($this -> session -> flashdata('emailError')){ ?>
                        <?php echo $this -> session -> flashdata('emailError')?></span>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                </div>
                              
                              
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                              <h3>Login Information</h3>
                              <!--password-->
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Password<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter your password" onPaste="return false" onCopy="return false"  >
                       <div class="password_strength" id="password_strength"></div>
                        <span class='error'>
                        <?php if($this -> session -> flashdata('passError')){ ?>
                        <?php echo $this -> session -> flashdata('passError')?></span>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                                  
                               <!-- confirm password --> 
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Confirm Password<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                        <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Enter your password again " onPaste="return false" onCopy="return false"/>
                        
                        <span class='error'>
                        <?php if($this -> session -> flashdata('cpassError')){ ?>
                        <?php echo $this -> session -> flashdata('cpassError')?></span>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
               <hr/>
                             
                             
              <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h3>Personal Information</h3>
                            <!--address-->
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Address<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                        <input type="text" class="form-control" name="add" id="add" placeholder="Enter your address"  >
                        
                        <span class='error'>
                        <?php if($this -> session -> flashdata('fnameError')){ ?>
                        <?php echo $this -> session -> flashdata('fnameError'); }?></span>
                      </div>
                    </div>
                  </div>
                            <!--Address Line1 -->     
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Address Line1</label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                        <input type="text" class="form-control" name="add1" placeholder="Enter your address line1"  >
                        
                        <span class='error'></span> 
                      </div>
                    </div>
                  </div>
                                 <!-- City-->
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">City<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter your city"  >
                        
                        <span class='error'></span> 
                      </div>
                    </div>
                  </div>
                                 <!-- Postal Code-->
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Postal Code<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                        <input type="text" class="form-control" class="form-control" name="postal" id="postal" placeholder="Enter your postal code"  >
                        
                        <span class='error'></span> 
                      </div>
                    </div>
                  </div>
                </div>
                              
                <div class="col-xs-12 col-sm-12 col-md-6 personal_info_two">
                    <!-- Contac No1-->
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Contac No1<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="Enter your telephone"  >
                    
                    <span class='error'></span> </div>
                    </div>
                  </div>
                                  
                                  <!-- Contact No2-->
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Contact No2</label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                    <input type="text" class="form-control" name="mob" id="mob" placeholder="Enter your mobile "  >
                    
                    <span class='error'></span> </div>
                    </div>
                  </div>
                                  
                                  <!-- Date of Birth-->
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Date of Birth<span class="mandatory">*</span></label>
                    <div class="col-sm-8">
                      <div class="has-error" >
                    <!--<input type="text" name="dob" id="dob" class="tcal" placeholder="Enter your date of birth " />-->
                    <input type="text" class="form-control"  id="dob" name="dob" readonly="readonly" placeholder="Enter your date of birth "/>
                    
                    <span class='error'></span> </div>
                    </div>
                  </div>
                   </div>
                </div>
                 <hr/>
                              
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
              <h3> Other Information</h3>
                <div class="form-group">
                <label class="col-sm-4 col-md-4 control-label">Newsletter & Alerts</label>
                 <input type="checkbox" class="check_reg" name="unewsalert" id="unewsalert" value="active">
                  </div>
                               <div class="form-group">
                    <div class="col-sm-11" style=" margin-left: 5px;">

                      <div class="checkbox check_reg_two">
                      <label> <div class="has-error" >
                       <input type="checkbox" class="" name="checkbox1" id="checkbox5"> <a class="readmore" href="<?php echo base_url();?>index.php/pages/privacy_policy" target="_blank">I read and agree Privacy Policy</a><span class="mandatory">*</span>
                      <br/>
                      <span class='error'></span>
                      </div>
                      </label>
                      </div>
                     </div>
                    </div>
                   <div class="form-group">
                    <div class="col-sm-6 required">
                                    * Required Fileds
                     </div>
                    </div>



                                    
                                </div>
                              </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="defult_submit">
                    <button type="reset" class="btn btn-warning " name="register">Reset</button>
                   <button type="submit" class="btn btn-default monis_buttn" name="register">Register</button>
                  </div>
                  
                  </div>
                </div>
                <div class="row registr_state">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="defult_submit">
                   <span class="registr_status"><a href="<?php echo base_url();?>index.php/pages/signin">Already Registered?</a></span>
                  </div>
                  </div>
                </div>
              </form>
             </div>

            <!--code-->
                    </div> 
                  </div>


            </div>
           </div>
           </div>
           <!--end main contet-->
           <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
           <script>
  $(function() {

  });
  </script>
           <script type="text/javascript">
    $(document).ready(function(){

 $( "#dob" ).datepicker({ 
  dateFormat: "yy-mm-dd",
  changeMonth: true,//this option for allowing user to select month
      changeYear: true, //this option for allowing user to select from year range
  maxDate: '-18Y',
  //maxDate: new Date() 
  });

  $('#email').keyup(function(){ // Keyup function for check the user action in input
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
      url  : '<?php echo base_url();?>index.php/Customer/chk_usrreg',
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
    
  
  
  $('#pass, #email,#upass,#fname,#lname').keydown(function(e) { // Dont allow users to enter spaces for their username and passwords
    if (e.which == 32) {
      return false;
      }
  });
  
  
  $('#pass').keyup(function() { // As same using keyup function for get user action in input
    var Password = $(this).val();
    var PasswordLength = $(this).val().length; // Get the password input using $(this)
    var PasswordStrength = $('#password_strength'); // Get the id of the password indicator display area
    
    if(PasswordLength <= 0) { // Check is less than 0
      PasswordStrength.html(''); // Empty the HTML
      PasswordStrength.removeClass('normal weak strong verystrong'); //Remove all the indicator classes
    }
    if(!/[a-z]/.test(Password)||!/[0-9]/.test(Password)||!/[A-Z]/.test(Password)|| PasswordLength <7) { // If string length less than 4 add 'weak' class
      PasswordStrength.html('weak');
      PasswordStrength.removeClass('normal strong verystrong').addClass('weak');
    }
    else if(PasswordLength >=7 && PasswordLength < 12){ // If string length greater than 4 and less than 8 add 'normal' class
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