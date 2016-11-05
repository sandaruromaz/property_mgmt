<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Pages for this controller.
	 *
	
	 */
/*
=====================================================================================
load models controller.
*/
	
	 function __construct()
  		{        // Call the Model constructor
        parent::__construct(); 
		session_start();
		$this->load->model('CompanyDetails');
		$this->load->model('MainSlider');
		$this->load->model('Member');
		$this->load->model('NewsAlert');
		$this->load->model('NewsDetails');
		$this->load->model('Store');
		$this->load->model('OrderDetails');
		$this->load->model('ReserveDetails');
		$this->load->model('Design');


		
		}
/*
=====================================================================================
Index Page for this controller.
*/	
	public function index() {	
		$data['title'] = "Property Mgt System";
		$data['main'] = 'home';
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['slider']=$this-> MainSlider->slider(); //get main slider1 details
		$data['slider2']=$this-> MainSlider->slider2(); //get main slider2 details
		$data['slider3']=$this-> MainSlider->slider3(); //get main slider3 details
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		$data['getallcategories'] = $this->Store->getAllCategories();
		//print_r($data['getallcategories']);die();
		//$data['categories'] = $this->Store->getAllMenCategories();
		//$data['brands'] = $this->Store->getbrand();
		
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
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		$data['getallcategories'] = $this->Store->getAllCategories();
		
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		}
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
	
	}

/*
=====================================================================================
sign in controller.
*/	


	public function signin()
	{		
		$this -> view('signin');	
	}

/*
=====================================================================================
register controller.
*/	

	public function register()
	{		
		$this -> view('register');
	}
/*
=====================================================================================
forgetpassword page controller.
*/	

	public function forgotten_password()
	{		
	
		$this -> view('forgotten_password');
	
	}	

/*
=====================================================================================
contact page controller.
*/	


	public function contact()
	{		
	
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		$data['branch_details']=$this-> CompanyDetails->getBranchDetails();//get other branch details 
		$this -> load -> vars($data);
		$this -> view('contact');
	
	}
/*
=====================================================================================
my account page controller.
*/	

	public function myaccount()
	{		
	
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['orderdata']=$this->OrderDetails->order_details();
		$data['designorderdata']=$this->OrderDetails->designorder_details();	 
		$data['pref']=$this->Member->showNewsLetter();

		$data['ordershowhistory']=$this->OrderDetails->ordershowhistory();
		$data['reservation']=$this->ReserveDetails->reservehowhistory();

	//	$data['reservehowhistory']=$this->ReserveDetails->reservehowhistory();
		//print_r($data['reservation']);die;
		$this   -> load   -> vars($data);
		$this -> view('myaccount');}else{
		redirect('/pages/signin', 'location');	
		}
	
	}

/*
=====================================================================================
order_details page controller.

*/		
	public function order_details($order_id)
	{		
	
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		
		$data['oredredetails']=$this-> OrderDetails->orderdetails($order_id);
		$data['productdetails']=$this-> OrderDetails->orderproductdetails($order_id); 
		$data['billingdetails']=$this-> OrderDetails->billingdetails($order_id);
		$this   -> load   -> vars($data);
		$this -> view('order_details');
		} else {
		redirect('/pages/signin', 'location');	
	
		}
	}
	/*gallery page*/
		public function gallery()
	{	
		$this->load->model('Admin_slider');	
		$data['category']=$this-> Admin_slider->getAllGalleryCategory(); //get about us details
		$this   -> load   -> vars($data);
		$this -> view('gallery');
	
	}


	public function gallery_category($cat_id){

		//echo $cat_id;die;
		$this->load->model('Admin_slider');	
		//$data['images']=$this-> Admin_slider->getCategoryName($cat_id);
		$data['images']=$this-> Admin_slider->getAllGalleryCategoryData($cat_id); //get about us details
		$this   -> load   -> vars($data);
		$this -> view('gallery_images');

	}



/*
=====================================================================================
order_details page controller.

*/		
	public function designorder_details($design_order_id)
	{		
	
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		
		$data['designorderdetails']=$this-> OrderDetails->designorderdetails($design_order_id);
		$data['designdetails']=$this-> OrderDetails->designdetails($design_order_id); 
		$data['countquantity']=$this-> OrderDetails->getquantity($design_order_id);
		$this   -> load   -> vars($data);
		$this -> view('designorder_details');
		} else {
		redirect('/pages/signin', 'location');	
		
		}
	}
/*
=====================================================================================
about us page controller.
*/	

	public function aboutus()
	{		
		$data['about']=$this-> CompanyDetails->getAbout(); //get about us details
		$this   -> load   -> vars($data);
		$this -> view('about-us');
	
	}
/*



=====================================================================================
customers-opinion page controller.
*/	

	public function customers_opinion()
	{		
	
		$this -> view('terms/customers-opinion');
	
	}
/*
=====================================================================================
buying-guides page controller.
*/	

	public function buying_guide()
	{		
	
		$this -> view('terms/buying-guides');
	
}
/*
=====================================================================================
returns-information page controller.
*/	

	public function return_information()
	{		
	
		$this -> view('terms/returns-information');
	
	}
/*
=====================================================================================
privacy-polic page controller.
*/	

	public function privacy_policy()
	{		
	
		$this -> view('terms/privacy-policy');
	
	}
/*
=====================================================================================
terms-conditions page controller.
*/	

	public function terms_condition()
	{		
	
		$this -> view('terms/terms-conditions');
	
	}
/*
=====================================================================================
table reservation page controller.
*/	

	public function table_reservation()
	{		

		if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
		redirect('pages/signin', 'location');
		}else{

		$this   -> load   -> vars();
		
		$this -> view('table_reservation');
	}
	
	}

/*
=====================================================================================
table reservation two page controller.
*/	

	public function table_reservation2()
	{	

		if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
		redirect('pages/signin', 'location');
		}else{

		$this   -> load   -> vars();
		$this -> view('table_reservation2');
	}
	
	}

/*
=====================================================================================
table reservation two page controller.
*/	

	public function table_reservation_success()
	{		

		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {

		$data['res_id']=$this-> ReserveDetails->addReservation();
		$this   -> load   -> vars($data);
		$this -> view('table_reservation_success');
		}
	}

/*
=====================================================================================
news page controller with pagination.
*/	


	public function news()
	{	
		
		$data['title'] = "Property Mgt System";
		$data['main'] = 'news';//news page
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		$data['getallcategories'] = $this->Store->getAllCategories();
		$data['categories'] = $this->Store->getAllCategories();
		$data['newitems'] = $this->Store->newItems();
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		}		
		
		$this->load->library('pagination');
		$config = array();
		$config["base_url"] = site_url('pages/news/');
		$config["total_rows"] =$this->NewsDetails->count_all();
		
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		
		$this->pagination->initialize($config);
			
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["results"] = $this->NewsDetails->get_news_list($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');


	}

/*
=====================================================================================
Wishlist page controller.
*/	

	public function wishlist()
	{		
		if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
		redirect('pages/signin', 'location');
		}else{
		$this->load->model('Wish_list');	
		$data['wishlistitems'] = $this-> Wish_list-> get_wishlist();
		$data['newitems'] = $this->Store->newItems();
		
		
		$this  -> load  -> vars($data);	
		$this -> view('wishlist');	
		}
	}




/*
=====================================================================================
terms-conditions page controller.
*/	


	public function category($cat_id ,$page=0)
	{
		$this->load->library('pagination');
		$config = array();
		$config["base_url"] = site_url('pages/category/'.$cat_id.'/');
		$config["total_rows"] =$this->Store->count_all();
		
		if(!isset($_SESSION['viewby'])) $_SESSION['viewby']=3;
		$config["per_page"] = $_SESSION['viewby'];
		$config["uri_segment"] = 4;
		
		$this->pagination->initialize($config);
		$start=$page;
		
		$data["cresults"] = $this->Store->getCategoryProducts($cat_id,$config["per_page"], $start);
		$data["product_count"] = $this->Store->getNumCatProducts($cat_id);
		$data["clinks"] = $this->pagination->create_links();
		
		$this   -> load   -> vars($data);
		$this->view('category_products'); 
	
	}

     function reservation_indetails($reservation_id)
	{
	// echo $reservation_id;die;
			if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {

				$data['reservehowhistory']=$this-> ReserveDetails->reserveHowHistorys($reservation_id);
			 //   $data['billingdetails']=$this-> OrderDetails->billingdetails($order_id);
			    $this   -> load   -> vars($data);
			 	$this -> view('reservation_details');
			 	} else {
			 	redirect('/pages/signin', 'location');	
				
			 	}
	}


/*
=================================================================================
tshirt design categories
*/	
	public function design_category($category_id ,$page=0)
	{	
		$this->load->library('pagination');
		$config = array();
		$config["base_url"] = site_url('pages/design_category/'.$category_id.'/');
		$config["total_rows"] =$this->Design->count_all($category_id);
		
		if(!isset($_SESSION['viewbyapparel'])) $_SESSION['viewbyapparel']=3;
		$config["per_page"] = $_SESSION['viewbyapparel'];
		$config["uri_segment"] = 4;
		
		$this->pagination->initialize($config);
		$start=$page;
		//$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["temp_apparel"] = $this->Design->getCategoryProducts($category_id,$config["per_page"], $start);
		$data["product_count"] = $this->Design->getNumCatProducts($category_id);
		$data["clinks"] = $this->pagination->create_links();
		$data['tcategories'] = $this->Design->getAllApparelCategory();
		$data['type_name'] = $this->Design->getname($category_id);
		//$data['category_products'] = $this->Store->getCategoryProducts($this->uri->segment(3));
		$this   -> load   -> vars($data);
		$this->view('design_category');
		//$this -> view('design_category');
	}

/*
=====================================================================================
apparel product view controller.
*/		


	public function apparelView($cat_id ,$viewby){
		$_SESSION['viewbyapparel']=$viewby;
		redirect('/pages/design_category/'.$cat_id);
		}	


/*
=====================================================================================
test view controller.
*/		



	public function test_add()
	{		
	
		$this -> view('testAdd');
	
	}


	

public function test_view($test_id)
	{	//echo $test_id;die;	
		$data['test']=$this-> Member->test_view($test_id); //get about us details
		//print_r($data['test']);die;
		$this   -> load   -> vars($data);
		$this -> view('testView');
	
	}

	

	public function test_update()
	{		
	$data['test']=$this-> Member->test_update();
	$this   -> load   -> vars($data);
		$this -> view('testUpdate');
	
	}
	
	


	
	}


/* End of file pages.php */
/* Location: ./application/controllers/pages.php */