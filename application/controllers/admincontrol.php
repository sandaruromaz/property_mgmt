<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminControl extends CI_Controller {

	/**
	 * admin Page for this controller.
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
	 * map to index.php/admin/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 function __construct()
  	{        
        parent::__construct();
		session_start();
		// Call the Model constructor
		
		$this->load->model('Admin_feedback');
		$this->load->library('My_PHPMailer');
  	}
	public function index()
	{	
		$data['title'] = "New Monis Bakery | Admin Dashboard";
		$data['main'] = 'admin/dashboard';
		$this   -> load   -> vars($data);
		$this   -> load   -> view('admin/dashboard_template');
		
	}
/*
=====================================================================================
Page autoloder for this controller.
*/

	function view($path){
		$data['main'] = 'admin/'.$path;
		$data['title'] = "New Monis Bakery | Admin Dashboard";
		$this-> load-> vars($data);
		//$this   -> load   -> view('admin/dashboard_template');
		$this   -> load   -> view('admin/'.$path);
	}
/*
=====================================================================================
member sign in controller.
*/	
	
	function adminlogin(){
	//$this->load->library('form_validation');
  // $this->form_validation->set_rules('login_username', 'Username', 'required|xss_clean');
	//$this->form_validation->set_rules('login_password', 'Password', 'required|xss_clean');
	/*if($this->form_validation->run() == FALSE){
   		$this->session->set_userdata('error', 'The Username and password are invalid!');
   		$this->view('admin/login');
  		}else  {*/
  		if($this->MDashboard->adminSignIn()){
			
  			redirect('/admin/','location');
  		}else{
			$this->session->set_userdata('erroradminlogin', 'The Username and password are invalid!');
			//$_SESSION['error'] ='The Username and password are invalid!';
   			//$this->view('');
				redirect('/admin/login','location');
  		
  			}
		
	}
	
/*
=====================================================================================
member sign out controller.
*/	
	
	public function adminlogout(){
	$this->session->sess_destroy();// this destroy user's cookies ;)
	unset($_SESSION['admin_id']); 
	session_destroy();
	redirect('/admin/login', 'location');
	}
/*
=====================================================================================
send mail for design orders
*/

	function replydesignorders($design_order_id){	
	if((isset($_POST['btnFeed']))){
		
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = 'smtp';
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	
	
	
	$mail->Username = "newmonisbakeryrestuarents@gmail.com";
    $mail->Password = "92702688@com";
	
	
	$mail->IsHTML(true); // if you are going to send HTML formatted emails
	$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
	
	$mail->From = "newmonisbakeryrestuarents@gmail.com";
	$mail->FromName = "New Monis Bakery";
	
	$address = $_POST['to'];
	$mail->AddAddress($address, "Guest");
	$body = $_POST['message'];
	
	$mail->Subject = "New Monis Bakery-Customize Cake";
	
	
	
	$this   -> load   -> vars($data);
	 
	
	$mail->Body = $body ;
	//$img = $_POST['Attach'];
	
	//to send attachments.
	$mail->AddAttachment($_FILES["attach"]["tmp_name"],"" . $_FILES["attach"]["name"],  'base64', 'MIME');
	if(!$mail->Send()){
		$this->session->set_userdata('errororderdetilsdesign', 'PHPMailer Error:'. $mail->ErrorInfo.'');
		//echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	}else{
		$this->session->set_userdata('successorderdetilsdesign', 'Message was sent to <strong>'.$address.'</strong> .');
			
	}
	}
		 
	
	  
	
	//$this->view('register');
   	redirect('/admin/designorder_details/'.$design_order_id.'/','location');
    }
	
/*
=====================================================================================
send mail for feedback
*/

	function replyFeedback($feedback_id){	
	if((isset($_POST['btnFeed']))){
		
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = 'smtp';
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	
	
	
	$mail->Username = "newmonisbakeryrestuarents@gmail.com";
    $mail->Password = "92702688@com";
	
	
	$mail->IsHTML(true); // if you are going to send HTML formatted emails
	$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
	
	$mail->From = "newmonisbakeryrestuarents@gmail.com";
	$mail->FromName = "New Monis Bakery";
	
	$address = $_POST['to'];
	$mail->AddAddress($address, "Guest");
	$body = $_POST['message'];
	
	$mail->Subject = "New Monis Bakery-FeedBack";
	
	
	
	
	 
	
	$mail->Body = $body ;
	//$img = $_POST['Attach'];
	
	//to send attachments.
	$mail->AddAttachment($_FILES["attach"]["tmp_name"],"" . $_FILES["attach"]["name"],  'base64', 'MIME');
	
	$this->Admin_feedback-> saveFeed(); 
	$this   -> load   -> vars($data);  
	if(!$mail->Send()){
		$this->session->set_userdata('errorfeedd', 'PHPMailer Error:'. $mail->ErrorInfo.'');
		//echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	}else{
		$this->session->set_userdata('successfeedd', 'Feedback message was sent to <strong>'.$address.'</strong> .');
			
	}
	}
		 
	
	  
	
	//$this->view('register');
   	redirect('/admin/feedback_details/'.$feedback_id.'/','location');
    }
	
/*
=====================================================================================
send mail for news subcribers
*/

	function sendmail(){	
	if((isset($_POST['btnnews']))){
		
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = 'smtp';
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	
	
	
	$mail->Username = "newmonisbakeryrestuarents@gmail.com";
    $mail->Password = "92702688@com";
	
	
	$mail->IsHTML(true); // if you are going to send HTML formatted emails
	$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
	
	$mail->From = "newmonisbakeryrestuarents@gmail.com";
	$mail->FromName = "New Monis Bakery";
	
//	$address = "praveenniluu@gmail.com";
	$this->load->model('Admin_news');
	$add=$this->Admin_news->getMails();
	
	if(count($add)){
    foreach($add-> result_array()as $row){
	$mail->AddAddress($row["email"], "Guest");
	$body = $_POST['message'];
	$mail->Subject = "New Monis Bakery-Latest News";
	$this   -> load   -> vars($data);
	$mail->Body = $body ;
	//$img = $_POST['Attach'];
	
	//to send attachments.
	$mail->AddAttachment($_FILES["attach"]["tmp_name"],"" . $_FILES["attach"]["name"],  'base64', 'MIME');
	if(!$mail->Send()){
		$this->session->set_userdata('errorsub', 'PHPMailer Error:'. $mail->ErrorInfo.'');
		//echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	}else{
		$this->session->set_userdata('successsub', 'News message was sent to <strong>'.$address.'</strong> .');
			
	}
	$mail->ClearAddresses();
    $mail->ClearAttachments();

	}
	}
	
	  
	
	//$this->view('register');
   	redirect('/admin/send_news/','location');
    }
	

	}
	
}