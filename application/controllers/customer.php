<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
/*
	=====================================================================================
	Index Page for this controller.
	*/
	
	 function __construct()
  	{        // Call the Model constructor
        parent::__construct();
		session_start();
		$this->load->model('Member');
		$this->load->model('MRegister');
		$this->load->model('CompanyDetails');
		$this->load->library('My_PHPMailer'); 
		
		
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		 }
		
	}
		
		
	public function index()
	{	$this->load->model('NewsAlert');
		$data['title'] = "Property Mgt System";
		$data['main'] = 'home';
		$data['logo']=$this-> CompanyDetails-> getLogo();
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		 }
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
		
	}
/*
	=====================================================================================
	other Page for this controller.
	*/	
	
	
	public function view($page)
	{	
		$data['title'] = "Property Mgt System";
		$data['main'] = $page;
		$data['logo']=$this-> CompanyDetails-> getLogo();
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		 if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		}
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
		
	}
	function dashbord(){
		$data['title'] = "Property Mgt System";
		$data['main'] = 'dashbord';
		 if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		 }
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
			
		} 
/*
	=====================================================================================
	 check email controller.
	*/	
	
	
	
        public function chk_usrreg()
	{             
		if(isset($_POST['username']))
                {
                    $this->load->model('MRegister');
                    $usr_name = $_POST['username'];
                    if($this->MRegister->usrchkreg($usr_name))
					echo 1;
					else 
					echo 0;
                }
	}	
/*
	=====================================================================================
	 check email is exixts or not controller.
	*/	
	
	
	
        public function chk_usr()
	{             
		if(isset($_POST['username']))
                {
                    $this->load->model('MRegister');
                    $usr_name = $_POST['username'];
                    if($this->MRegister->usrchk($usr_name))
					echo 1;
					else 
					echo 0;
                }
	}
/*
	=====================================================================================
	member signin controller.
	*/	
		
	public function signin()
	{	
  
  if($this->Member->memberSignIn()){
	$this->view('home');
	redirect('/', 'location');
	//redirect('/customer/view/dashbord', 'location');// if ok user will redirect to this page
    }else{
  $this->session->set_userdata('errorlogin', 'The Username and password are invalid!');
   redirect('/pages/signin', 'location');
  }
	}

/*
	=====================================================================================
	member sign out controller.
	*/	
	
	public function signout(){
	$this->session->sess_destroy();// this destroy user's cookies ;)
	unset($_SESSION['user_id']); 
	session_destroy();
	redirect('/', 'location');
	}
	
	
	
  /*
	=====================================================================================
	user register controller.
	*/	
		
	public function register()
	{
	
	//$this->load->library('form_validation');
	
	//$this->form_validation->set_rules('email', 'email', 'trim|is_unique[customer.email]');
	if($this->MRegister->usrchkreg($_POST['email'])){
	$this->session->set_userdata('error', 'Email Address Already Taken!');
  	
   //	$this->session->set_userdata('error', 'Email Should be unique!');
   	redirect('pages/register', 'location');
  	}
  	else
  	{	
	
	
	
	$error=false;
	
	// check title
	if ( $_POST['title']==''){
		 $error=true;
    $this->session->set_flashdata('titleError', 'Please Select a Title');
	}else{	
	}
	// check first name
	if ( $_POST['fname']==''){
		 $error=true;
    $this->session->set_flashdata('fnameError', 'First name must be entered');
	}else{	
	}
	// check Last name
	if ( $_POST['lname']==''){
		 $error=true;
    $this->session->set_flashdata('lnameError', 'Last name must be entered');
	}else{	
	}
		// check Last name
	if ( $_POST['lname']==''){
		 $error=true;
    $this->session->set_flashdata('lnameError', 'Last name must be entered');
	}else{	
	}
	// email validate
	// http://www.php.net//manual/en/filter.examples.validation.php
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
   // valid 
  	
  	}else{
		 $this->session->set_flashdata('emailError', 'Email Address is not valid');
		 $error=true;
	}	
	// check password
	if ( $_POST['pass']==''){
		 $error=true;
    $this->session->set_flashdata('passError', 'Your password must be entered');
	}else{	
	}
	// check password
	/*if ( $_POST['pass']!='' && $_POST['cpass']==''){
		 $error=true;
    $this->session->set_flashdata('cpassError', 'Your confirm password must be entered');
	}else{	
	}*/		
     if(($error==false)&& (isset($_POST['register']))){
	$this->MRegister->add_user();
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = 'smtp';
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	// or try these settings (worked on XAMPP and WAMP):
	// $mail->Port = 587;
	// $mail->SMTPSecure = 'tls';
	
	
	$mail->Username = "newmonisbakeryrestuarents@gmail.com";
    $mail->Password = "92702688@com";
	
	
	$mail->IsHTML(true); // if you are going to send HTML formatted emails
	$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
	
	$mail->From = "newmonisbakeryrestuarents@gmail.com";
	$mail->FromName = "Property Mgt System";
	
		$address = $_POST['email'];
		$mail->AddAddress($address, "Guest");
	   
	
	$mail->Subject = "Property Mgt System Email verification ";
	
	$data = $this-> Member-> get_customerid();
	
	
	$this   -> load   -> vars($data);
	 
	
	$mail->Body ="<a href='".base_url()."index.php/customer/verifyEmail/$data'>Hi, Please click  here to verify your registration.</a>";
	
	
	
	   
		//$mail->AddAttachment("images/logo1.png");      // attachment
		//$mail->AddAttachment("images/engr mudasir.jpg"); // attachment
	
	if(!$mail->Send()){
		$this->session->set_userdata('error', 'PHPMailer Error:'. $mail->ErrorInfo.'');
		//echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	}else{
		$this->session->set_userdata('Success', 'Registration Success! Please Check Your Email and Spam too.');
	}
	}
		 
	
   //$this->session->set_userdata('error', 'Registration Success! Please Check Email and Spam too.');
		}
   	redirect('pages/register', 'location');
    }
	

//=================================================================================
//when clicking on the email verification link, activate the system login for the registered customers.
	/*public function verify_email($customer_id) {
	
	$this->load->model('Member');
	$this-> Member-> email_status($customer_id); 
	 
    	//$this   -> load   -> vars($data);
		redirect('pages/signin', 'location');
	} */
	
	public function verifyEmail($customer_id) 
 	    {
		$this->load->model('MRegister');
		$this-> MRegister-> emailStatus($customer_id);
		
	
    	redirect('pages/Wishlist');

	} 	
	
	
/*
	=====================================================================================
	member update profile controller.
	*/	
		
	public function updateAcoount()
	{
	/*$this->load->model('Member');
    $this->Member->updateAcoount();
   	$this->session->set_userdata('Success', 'Update Done!');*/
	$this->load->library('form_validation');
	$this->load->model('Member');
	$this->form_validation->set_rules('uemail', 'email');
    if($this->MRegister->usrchk($_POST['uemail'])){$this->session->set_userdata('errorUpdateData', 'Email Should be unique!');
   	redirect('pages/myaccount', 'location');
  	}
	if($this->form_validation->run() == FALSE)
  	{
   	$this->session->set_userdata('errorUpdateData', 'Email Should be unique!');
   	redirect('pages/myaccount', 'location');
  	}
  	else
  	{
  		$this->Member->updateAcoount(); // call model
	$this->session->set_userdata('SuccessUpdateData', 'Update Account Success!');
   	//$this->view('pages/myaccount');
	redirect('pages/myaccount', 'location');
    }
	}
//========================================================================
//controller to change password of the customer accounts.

public function changePassword() 
	{
	$this->load->model('Member');	

		if($this->Member->changePassword()){
  	$this->session->set_userdata('SuccessUpdateData', 'Update Password Success!');
	redirect('pages/myaccount', 'location');
  }else{

  $this->session->set_userdata('errorUpdateData', 'Update failed...!');
  redirect('pages/myaccount', 'location');
 
}
}
public function updatePreference()
		{
		$this->load->model('Member');	
		if($this->Member->updatePreferences()){
			$this->session->set_userdata('SuccessUpdateData', 'Update Success!');
			redirect('pages/myaccount', 'location');
		  }else{
		  $this->session->set_userdata('errorUpdateData', 'Update failed...!');
		  redirect('pages/myaccount', 'location');
		 
		}	
	
		}


public function updateNewsLetter() 
	{
	$this->load->model('Member');	
		if($this->Member->updateNewsl()){
  	$this->session->set_userdata('SuccessUpdateData', 'Update Success!');
	redirect('pages/myaccount', 'location');
  }else{
  $this->session->set_userdata('errorUpdateData', 'Update failed...!');
  redirect('pages/myaccount', 'location');
 
}
}	
	
/*
	=====================================================================================
	member send feedback controller.
	*/	
		
	public function sendFeedback()
	{
	
	$this->load->library('form_validation');
	$this->form_validation->set_rules('name', 'name', 'required|xss_clean');
 	$this->form_validation->set_rules('message', 'message', 'required|xss_clean');
	if($this->form_validation->run() == FALSE)
  	{
   	$this->session->set_userdata('error', 'Please Fill!');
   	redirect('pages/contact', 'location');
  	}
  	else
  	{	
		
	$this->load->model('Feedback');
    $this->Feedback->sendFeedback();
   	$this->session->set_userdata('Success', 'Send !');
   	redirect('pages/contact', 'location');
    }
   }
/*
	=====================================================================================
	news subcriber activation.
	*/	
		
	public function newsLetter()
	{
	
	$this->load->library('form_validation');
 	$this->form_validation->set_rules('newsemail', 'email', 'is_unique[news_subcriber.email]|required|valid_email|xss_clean');
	if($this->form_validation->run() == FALSE)
  	{
   	$this->session->set_userdata('errornews', 'Email Address Already Refistered To Newsletter!');
   	redirect('/', 'location');
  	}
  	else
  	{ if((isset($_POST['newsletter']))){
	$this->load->model('NewsAlert');
    $this->NewsAlert->addNewsSubcriber();
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = 'smtp';
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	// or try these settings (worked on XAMPP and WAMP):
	// $mail->Port = 587;
	// $mail->SMTPSecure = 'tls';
	
	
	$mail->Username = "newmonisbakeryrestuarents@gmail.com";
    $mail->Password = "92702688@com";
	
	
	$mail->IsHTML(true); // if you are going to send HTML formatted emails
	$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
	
	$mail->From = "newmonisbakeryrestuarents@gmail.com";
	$mail->FromName = "Property Mgt System";
	
		$address = $_POST['newsemail'];
		$mail->AddAddress($address, "Guest");
	   //send html body
	  
	//$body= file_get_contents($path);
	
	
	$mail->Subject = "Property Mgt System Newsletter Activation ";
	
	$this->load->model('NewsAlert');
	$data =$this-> NewsAlert->getnewsletterid();	
	//$this-> load -> vars($data);
	 
	
	$mail->Body ="
	
	You can activate your newsletter: <br/>
	<a href='".base_url()."index.php/customer/newsletteractivation/$data'>Hi, You are subscribed for Newsletters of Property Mgt System & Restuarant please click here.</a> <br/> <br/>
	
	You can deactivate your newsletter : <br/>
	<a href='".base_url()."index.php/customer/newsletterdeactivation/$data'>Hi, You can be unsubscribed for Property Mgt System & Restuarant please click here.</a>";

	//$mail->MsgHTML($body);
	
	   
	// $mail->AddAttachment("'.base_url().'assets/images/logo.png");      // attachment
		//$mail->AddAttachment("images/engr mudasir.jpg"); // attachment
	
	if(!$mail->Send()){
		$this->session->set_userdata('errornews', 'PHPMailer Error:'. $mail->ErrorInfo.'');
		//echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	}else{
		$this->session->set_userdata('Successnews', 'Newsletter Activation Success! Please Check Your Email and Spam too.');
	}
	}
	//$this->session->set_userdata('Successnews', 'Registration Success!eck Your Email and Spam too.');				
	 redirect('/', 'location');
    }
	}
	
	
	
//=================================================================================
//when clicking on the email verification link, activate the news subscriber functionality for customers.
public function newsletteractivation($subcriber_id) {
	    $this->load->model('NewsAlert');
	
		$data =$this-> NewsAlert->activation($subcriber_id);
		 
	 
    	$this   -> load   -> vars($data);
		$this->session->set_userdata('Successnews', ' Success Activation! .');
		redirect('/', 'location');
	} 
	
//=================================================================================
//when clicking on the email verification link, deactivate the news subscriber functionality for customers.
public function newsletterdeactivation($subcriber_id) {
	$this->load->model('NewsAlert');
	
		
		$data2 =$this-> NewsAlert->deactivation($subcriber_id); 
	 
    	$this   -> load   -> vars($data);
		$this->session->set_userdata('Successnews', ' Success Deactivation! .');
		redirect('/', 'location');
	} 
		
/*
	=====================================================================================
	add to wishlist.
	*/	
	
	public function Wishlist($product_type_id, $product_id) 
 	    {
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {	

			

		$this->load->model('Wish_list');		
		
		$this-> Wish_list-> WishList($product_type_id, $product_id);
		
		$this->session->set_userdata('SuccessSendComment', ' The product is successfully added into your wishlist .');
    	redirect('shop/product_details/'.$product_id.'/');
  		}else{
	    redirect('pages/signin', 'location');
		 }
		}
/*==========================================================================================================
	product Wishlist delete controller for the registered customers..
*/	
	public function wishListRemove($product_id) 
 	    {
		$this->load->model('Wish_list');
		$this-> Wish_list-> WishListRemove($product_id);
		
		$this->session->set_userdata('Successwishlist', ' The product is successfully deleted in your wishlist .');
    	redirect('pages/Wishlist');

	} 
/*==========================================================================================================
	product comment form controller for the registered customers..
*/

	
	public function comment($product_type_id, $product_id, $product_name) 
 	    {
			
		$this->load->model('Product_Comment');	
		if($this-> Product_Comment-> Productcomment()){
		$this->session->set_userdata('SuccessSendComment', 'Send Review Success "'.$product_name.'"');
			   redirect('shop/product_details/'.$product_id.'/');

	   }else{
	   $this->session->set_userdata('SuccessSendComment', 'Send Review Success "'.$product_name.'"');
	   redirect('shop/product_details/'.$product_id.'/');
 	
	   }
	   }
		
//=================================================================================
//

	public function reset_password() {
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emailf', 'email', 'valid_email|xss_clean');
		if($this->form_validation->run() == FALSE)
		{
		$this->session->set_userdata('errorforget', 'Please Enter Valid Email!');
		redirect('Pages/forgotten_password', 'location');
		}
		else
		{			
		
		if((isset($_POST['reset']))){
		//$this->load->model('Forget_pass_updatestatus');
		$rs_check=$this-> Member->  checkCustomer();
		//$num = mysql_num_rows($rs_check);
		if ( count($rs_check)<= 0 ) { 
		$this->session->set_userdata('errorforget', 'Sorry No Such Account Exists or Registered!');
		redirect('Pages/forgotten_password', 'location');
		//exit();
		}else{ 
		
		
		function GenPwd($length = 9)
	   {
		  $password = "";
		  $possible = "0123456789bcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%"; //no vowels		  
		  $i = 0; 			
		  while ($i < $length) { 
		  $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
		  if (!strstr($password, $char)) { 
		  $password .= $char;
		  $i++;
		}
	
	  }
	
	  return $password;
	
	}
	 
		
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = 'smtp';
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	// or try these settings (worked on XAMPP and WAMP):
	// $mail->Port = 587;
	// $mail->SMTPSecure = 'tls';
	
	
	$mail->Username = "newmonisbakeryrestuarents@gmail.com";
    $mail->Password = "92702688@com";
	
	
	$mail->IsHTML(true); // if you are going to send HTML formatted emails
	$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
	
	$mail->From = "newmonisbakeryrestuarents@gmail.com";
	$mail->FromName = "Property Mgt System";
	
	$address = $_POST['forgetemail'];
	$mail->AddAddress($address, "Guest");
	//send html body
	//$body= file_get_contents('controllers/contents.html');
	   
	
	$mail->Subject = "Property Mgt System Password Reset";
	
	//$this->load->model('Email_sub_code');
	//$data =$this-> Email_sub_code->getemailsubrcode();
	
	
	//$this   -> load   -> vars($data);
	//$new_pwd = GenPwd();
	//$pwd_reset = sha1($new_pass);
		
		
	 $new_pass = GenPwd();

	  $pwd_reset=sha1($new_pass); 
	  $this-> Member->passwordupdate($pwd_reset);	
	
	$mail->Body ="
	
	Here are your new password details ...<br/><br/>
	
	Reset Password Code: $new_pass <br/><br/>
	<a href='".base_url()."index.php/pages/signin/$data'>Hi, Please click  here to log.</a><br/><br/>
	
	Thank You";
	
	if(!$mail->Send()){
		$this->session->set_userdata('errorforget', 'PHPMailer Error:'. $mail->ErrorInfo.'');
		redirect('Pages/forgotten_password', 'location');
	}else{
		$this->session->set_userdata('Successforget', 'Reset Code has been sent. Please Check Email and Spam too!');
	}
	}
	
	
		//$this->session->set_userdata('Successforget', 'Reset Code has been sent. Please Check Email and Spam too!');
		redirect('Pages/forgotten_password', 'location');
	}
	}
			 
	} 

/*==========================================================================================================
	get oreder report in PDF.
*/	
function getorderReport($order_id){
	
if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
	
		$data['title'] = "Property Mgt System";
		$this->load->model('Member');
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');

		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();		
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);	
        
		$data['productdetails']=$this-> OrderDetails->orderproductdetails($order_id); 
		$data['billingdetails']=$this-> OrderDetails->billingdetails($order_id);
		$data['oredredetails']=$this-> OrderDetails->orderdetails($order_id);
		
/*        $html='<table width="100%" border="2"> ';
		foreach($oredredetails as $row){
        $html.='<tr><td>'. $row->order_id.'</td>';
        $html.='<td>'. $row->order_id.'</td></tr>';
	    }
  $html.='</table>';*/
        $data['main'] = 'order_details_report';
		date_default_timezone_set('Asia/Kolkata');
        $time= date("h:i:s A");
		
		ini_set('memory_limit','32M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
	   // $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
	 
	
		$pdf->WriteHTML($html); // write the HTML into the PDF
	
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System & Restuarant .</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		$pdf->Output('ORDER DETAILS -'.$order_id, 'I'); // save to file because we can
	
		}else{
			redirect('pages/signin', 'location');
			
		}
}
/*==========================================================================================================
	get design order report
*/
function getdesignorderReport($design_order_id){
	
if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
	
		$data['title'] = "Property Mgt System";
		$this->load->model('Member');
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');

		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();		
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);	
        
		$data['designorderdetails']=$this-> OrderDetails->designorderdetails($design_order_id);
		$data['designdetails']=$this-> OrderDetails->designdetails($design_order_id);
		$data['countquantity']=$this-> OrderDetails->getquantity($design_order_id); 

        $data['main'] = 'design_order_details_report';
		date_default_timezone_set('Asia/Kolkata');
        $time= date("h:i:s A");
		
		ini_set('memory_limit','32M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.02;
	   // $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
	 	
	
		$pdf->WriteHTML($html); // write the HTML into the PDF
	
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System & Restuarant.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		$pdf->Output('DESIGN ORDER DETAILS -'.$design_order_id, 'I'); // save to file because we can
	
		}else{
			redirect('pages/signin', 'location');
			
		}
}


/*==========================================================================================================
	get reservation report in PDF.
*/	
function getreserveReport($reservation_id){
	
if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
	
		$data['title'] = "Property Mgt System";
		$this->load->model('Member');
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		$this->load->model('ReserveDetails');

		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();		
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);	
        
		$data['reservehowhistory']=$this-> ReserveDetails->reserveHowHistorys($reservation_id);
			 
        $data['main'] = 'reservation_details_report';
		date_default_timezone_set('Asia/Kolkata');
        $time= date("h:i:s A");
		
		ini_set('memory_limit','32M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.02;
	   // $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
	 	
	
		$pdf->WriteHTML($html); // write the HTML into the PDF
	
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System & Restuarant.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		$pdf->Output('DESIGN ORDER DETAILS -'.$design_order_id, 'I'); // save to file because we can
	
		}else{
			redirect('pages/signin', 'location');
			
		}
}
/*
============================================================================
table reservation
*/


	function table_reserve(){

	$this->load->library('form_validation');

	//print_r($_POST);die;

	$chair_count= $_POST['chair_count']; 
	$table_count= $_POST['table_count'];

	$max_table_chair_count = 4;
	$new_total_chair_count= $max_table_chair_count * $table_count;




$total_chairs="chairs_availability";
$total_tables="tables_avialability";

	if($new_total_chair_count >= $chair_count)
	{	

		$chair_ava_count=$this-> Member-> chairsAvilability();
		$table_ava_count=$this-> Member-> tableAvilability();

//echo $chair_count.''.$chair_ava_count;die;
		if($chair_ava_count < $chair_count){
				$this->session->set_userdata('errorreservation', 'Notice Reservation. Please Ajust Your Chair Count.');
				//$this->session->set_userdata('Success', 'Send !');
				redirect('pages/table_reservation', 'location');	
		}elseif($table_ava_count < $table_count){
				$this->session->set_userdata('errorreservation', 'Notice Reservation. Please Ajust Your table Count.');
				//$this->session->set_userdata('Success', 'Send !');
				redirect('pages/table_reservation', 'location');
		}else{
				$reservation=array( 
				'date'=> $this->input->post('date'),
				'checkin'=>$this->input->post('checkin'),
				'checkout'=>$this->input->post('checkout'),
				'chair_count'=>$this->input->post('chair_count'),
				'table_count'=>$this->input->post('table_count'),		
				); 
				// adds it to our session 
				$_SESSION['reservation']=$reservation; 	

				$this->session->set_userdata('Successreservation2', 'Success Primary Step.');
				//$this->session->set_userdata('Success', 'Send !');
				redirect('pages/table_reservation2', 'location');	
		}




//check availability chairs
	}
/*elseif($total_chairs < $chair_count){

		echo "hi";
	}
	//check availability tables

	else if ($total_tables < $table_count) {
	echo 'false';
}

*/	
	 
	else{
			$this->session->set_userdata('errorreservation', ' Reach Maximum chair count . Please try again!');
			//$this->session->set_userdata('Success', 'Send !');
	       redirect('pages/table_reservation', 'location');
	   // echo "awl";

		}

	}

/*===============================================================================*/

	function table_reserve_save(){

		$this->load->model('Member');
    $this->Member->add_reserve_save();
	

}

		
	public function test_add()
	{
print($_POST);die;

$this->load->model('Member');
    $this->Member->add_test();


}

public function test_update($test_id) 
	{

	$this->load->model('Member');	
		if($this->Member->test_update($test_id)){

$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = 'smtp';
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	// or try these settings (worked on XAMPP and WAMP):
	// $mail->Port = 587;
	// $mail->SMTPSecure = 'tls';
	
	
	$mail->Username = "newmonisbakeryrestuarents@gmail.com";
    $mail->Password = "92702688@com";
	
	
	$mail->IsHTML(true); // if you are going to send HTML formatted emails
	$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
	
	$mail->From = "newmonisbakeryrestuarents@gmail.com";
	$mail->FromName = "Property Mgt System";
	
		$address = "chamirasithmal@gmail.com";
		$mail->AddAddress($address, "Guest");
	   //send html body
	  
	//$body= file_get_contents($path);
	
	
	$mail->Subject = "NEW ";
	
	$this->load->model('NewsAlert');
	$data =$this-> NewsAlert->getnewsletterid();	
	//$this-> load -> vars($data);
	 
	
	$mail->Body ="dddd";

	//$mail->MsgHTML($body);
	
	   
	// $mail->AddAttachment("'.base_url().'assets/images/logo.png");      // attachment
		//$mail->AddAttachment("images/engr mudasir.jpg"); // attachment
	
	if(!$mail->Send()){
		$this->session->set_userdata('errornews', 'PHPMailer Error:'. $mail->ErrorInfo.'');
		//echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	}else{
		$this->session->set_userdata('Successnews', 'Newsletter Activation Success! Please Check Your Email and Spam too.');
	}

  	$this->session->set_userdata('SuccessUpdateData', '  Success!'); //Display in Php Error Message
	redirect('pages/test_view/'.$test_id.'', 'location');
  }else{


    
  $this->session->set_userdata('errorUpdateData', 'Update failed...!'); //Display in Php Error Message
  redirect('index.php', 'location');
 
}
}




		
}
/* End of file customer.php */
/* Location: ./application/controllers/customer.php */