<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller {

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
		$this->load->model('CompanyDetails');
		$this->load->model('MainSlider');
		$this->load->model('Member');
		$this->load->model('NewsAlert');
		//$this->load->model('NewsDetails');
		$this->load->model('Store');
		$this->load->model('ShoppingCart');
		$this->load->model('Billing');
		}
	
	public function index()
		{	
		$data['title'] = "New Monis Bakery";
		$data['main'] = 'home';
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['slider1']=$this-> MainSlider->slider1(); //get main slider1 details
		$data['slider2']=$this-> MainSlider->slider2(); //get main slider2 details
		$data['slider3']=$this-> MainSlider->slider3(); //get main slider3 details
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		$data['Wcategories'] = $this->Store->getAllWomenCategories();
		$data['categories'] = $this->Store->getAllMenCategories();
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
		$data['title'] = "New Monis Bakery";
		$data['main'] = $page;
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		$data['getallcategories'] = $this->Store->getAllCategories();
		//$data['Wcategories'] = $this->Store->getAllWomenCategories();
		//$data['categories'] = $this->Store->getAllMenCategories();
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		 }
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
		
		}

			/*
	=====================================================================================
	checkout controller.
	*/	
				
	
		public function checko()
		{		
		$data['getallcategories'] = $this->Store->getAllCategories();
		$this   -> load   -> vars($data);
		$this -> view('check');
		
 		}
		public function checkout_delivery_address()
		{		
		
		$data['getallcategories'] = $this->Store->getAllCategories();
		$this   -> load   -> vars($data);
		$this -> view('checkout1');
		
 		}
		
		public function checkout_delivery()
		{		
		
		$data['getallcategories'] = $this->Store->getAllCategories();
		$this   -> load   -> vars($data);
		$this -> view('checkout2');
		
 		}
		
				
		public function checkout_payment()
		{		
		
		$data['getallcategories'] = $this->Store->getAllCategories();
		$this   -> load   -> vars($data);
		$this -> view('checkout3');
		
 		}
		
		public function checkout_confirm()
		{		
		
		$data['getallcategories'] = $this->Store->getAllCategories();
		$this   -> load   -> vars($data);
		$this -> view('checkout4');
		
 		}
		
		public function checkout_success()
		{		
		
		$data['getallcategories'] = $this->Store->getAllCategories();
		$this   -> load   -> vars($data);
		$this -> view('checkout_success');
		
 		}
		//	==============================================================================
//
		public function saveAddress()
		{		
		
		
			//store follwing data as session data before post to database.
		
		 $billingaddress=array( 
		 'add'=> $this->input->post('add'),
		 'add1'=>$this->input->post('add1'),
		'city'=>$this->input->post('city'),
		'postal'=>$this->input->post('postal'),
		'Mobile'=>$this->input->post('Mobile'),		
		
		

		); 
		 // adds it to our session 
		 $_SESSION['billingaddress']=$billingaddress; 		
		 redirect('checkout/checkout_delivery/');
 		}
		
 		//	==============================================================================
//
		public function saveDelivery()
		{		
		
		
			//store follwing data as session data before post to database.
		
		 $delivery=array( 
		 'delivery'=> $this->input->post('delivery'),
			
		
		

		); 
		 // adds it to our session 
		 $_SESSION['delivery']=$delivery; 		
		 redirect('checkout/checkout_payment/');
 		}
		
		 		//	==============================================================================
//
		public function savePayment()
		{		
		
		
			//store follwing data as session data before post to database.
		
		 $payment=array( 
		 'payment'=> $this->input->post('payment'),
			
		
		

		); 
		 // adds it to our session 
		 $_SESSION['payment']=$payment; 		
		 redirect('checkout/checkout_confirm/');
 		}
				
		public function save_order()
	{
		/*$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('address'),
			'phone' 	=> $this->input->post('phone')
		);		*/
		date_default_timezone_set('Asia/Kolkata');
        $time= date("h:i:s A");
		$cust_id = $_SESSION['user_id'];
		$grand_totals = $this->input->post('grand_total');
		//$grand_total = 0;
      
	 if ($cart = $this->cart->contents()){
		//foreach ($cart as $item){
		//$grand_total = $grand_total + $item['subtotal'];
		
		$order = array(
			'order_date'   => date('Y-m-d'),
			'customer_id'  => $cust_id,
			'time' 			=> $time,
			'amount'       =>$grand_totals
		);		

		$order_id = $this->Billing->insert_order($order);
			
		}
		
		
		if ($cart = $this->cart->contents()){
			foreach ($cart as $item){
				$order_detail = array(
					'order_id' 	  => $order_id,
					'product_id' 	=> $item['id'],
					'quantity' 	  => $item['qty'],
					'price' 		 => $item['price'],
					//'color'         => $item['color'],
					//'size'          => $item['size'],
				);
				//echo $order_detail['quantity'];die;
				$cust_id= $this->Billing->insert_order_detail($order_detail);	
			//	$color_name=$this->Store->getcolorId($item['color']);
			//	$size_name=$this->Store->getsizeId($item['size']);
				//$cust_id= $this->Billing->insert_order_detail($order_detail);
				/**/
				$oldQuantity=$this->Store->getQuantity($order_detail['product_id']);

				$newQuantity=$oldQuantity-$order_detail['quantity'];
				//echo $oldQuantity.' '.$order_detail['quantity'].'= '.$newQuantity; die;
				//update new quantitys
				//echo $newQuantity; die;
				$query=$this->Store->setQuantity($order_detail['product_id'],$newQuantity);
				
				
				if($query){
					}
			}
		}
		if (isset($_SESSION['billingaddress']) || isset($_SESSION['delivery']) || isset($_SESSION['payment']) ){
		$billing_address = array(
					'order_id'     => $order_id,
					'add' 	      => $_SESSION['billingaddress']['add'],
					'add1' 	     => $_SESSION['billingaddress']['add1'],
					'city' 		 => $_SESSION['billingaddress']['city'],
					'postal'       => $_SESSION['billingaddress']['postal'],
					'mobile'       => $_SESSION['billingaddress']['Mobile'],
					'delivery_method' => $_SESSION['delivery']['delivery'],
					'payment_method' => $_SESSION['payment']['payment'],
					
				);		

		    $cust_id= $this->Billing->insert_billing_detail($billing_address);
		}
		
		redirect('checkout/checkout_success/'.$order_id.'/');
		/*putenv("TZ=US/Eastern");
		$d = date(" h:i:s A");
		echo $d;
		echo "Original Time: ". date("h:i:s")."\n";
        date_default_timezone_set('Asia/Kolkata');
      $g= "Indian Standart time Time: ". date("h:i:s")."\n";
	  echo $g;*/
		
	}
	public function getcolorid2($color_name){
	$color_id = $this->Store->getcolorId($color_name);	
	return $color_id;
	}
		
	public function getsizeid2($size_name){
	$size_id = $this->Store->getsizeId($size_name);
	return 	$size_id;
	}
	public function getQuantity2($product_id,$color_name,$size_name){
	$Quantity = $this->Store->getQuantity($product_id,$color_name,$size_name);
	return 	$Quantity;
	}	 
}
/* End of file pages.php */
/* Location: ./application/controllers/pages.php */