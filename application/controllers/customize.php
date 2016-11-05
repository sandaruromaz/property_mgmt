<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customize extends CI_Controller {

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
		$this->load->model('NewsDetails');
		$this->load->model('Store');
		$this->load->model('OrderDetails');
		$this->load->model('Design');
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
		$this   -> load   -> view('page_template_design');
		
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
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		 }
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template_design');
		
		}
	


//============================================================================
// view single apparel page.
	
	 public function cake_design($customize_apparel_category_id, $apparel_product_id)
	   {	
	 
		if (isset($_SESSION['user_id'])) {
		//$this->load->model('Product_Comment');  
		
		$data['products_details'] = $this-> Design-> productsDetails($customize_apparel_category_id, $apparel_product_id);
		$data['ArtWorkCategory'] = $this-> Design-> getAllArtWorkCategory();
		$data['ArtWork'] = $this-> Design-> getArtworks();
		//$data['sizes'] = $this->Store-> getadultsize();
		//$data['product_comment'] = $this-> Product_Comment-> getProductcomment($product_id);
		//$data['count_comment'] = $this-> Product_Comment-> count_all($product_id);
		//$data['productSizee']	= 	$this->Store->getSize($product_id);
		//$data['procom_details'] = $this-> Product_details_model-> productcomment($product_code);
		
		$this  -> load  -> vars($data);
		
		$this -> view('custormize_cake');
		}else {
		redirect('/pages/signin', 'location');	
		}
		
	}
//============================================================================
// view artworks
	
	public function artWorks($artwork_category_id)
	   {	
	   $return = array();
	   	 
         $return['msg'] = '';
		 
		$Artwork = $this->Design->getArtwork($artwork_category_id);
		if (count($Artwork)){ 
		foreach ($Artwork-> result_array() as $Artwork){
		
		 $return['msg'].='<img style="cursor:pointer;" class="img-polaroid" src="'.base_url().'assets/images/design/'.$Artwork['img'].'" width="105" height="120"/>';
				}
				}
		
		echo json_encode($return);
	}
//============================================================================
// view artworks
	
	public function addorder($cat_id, $cakeid){
		
	    
	$this->Design-> designorderAdd($cat_id, $cakeid);
	$design_order_id = $this-> Design -> getorderid();
	//$this->Design-> orderdetailsAdd($design_order_id);
	$this->session->set_userdata('Successdesign', ' Successfull ! Your order No is '.$design_order_id.'. Please check your cake design order history.');
	redirect('customize/cake_design/'.$cat_id.'/'.$cakeid.'/', 'location');	
		}	
		
}
/* End of file pages.php */
/* Location: ./application/controllers/pages.php */