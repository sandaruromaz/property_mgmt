<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newssearch extends CI_Controller {

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
		//$this->load->model('MainSlider');
		$this->load->model('Member');
		$this->load->model('NewsAlert');
		$this->load->model('NewsDetails');
		$this->load->model('Store');
		$this->load->model('Search');
		}
	

/*
	=====================================================================================
	other Page for this controller.
	*/	
	
	
	public function view($page)
		{	
		$data['title'] = "NEW MONIS BAKERY ";
		$data['main'] = $page;
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
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
	sign in controller.
	*/	
	
	
	public function search()
		{			
		$this->load->library('form_validation');/* there is no point of autoloding this library*/
		$this->form_validation->set_rules('search', 'invalid Value', 'trim|required|xss_clean');
		if($this->form_validation->run() == FALSE){
		$search='';
		}else{$search=$this->input->post('search');}
		$data['search_data']= $this-> Search-> getSearch($search);
		$data['title'] = "MTC";
		$data['main'] = 'news_search';//news page
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		$data['Wcategories'] = $this->Store->getAllWomenCategories();
		$data['categories'] = $this->Store->getAllMenCategories();

		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		 }
		
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
		
 		}
}
/* End of file customer.php */
/* Location: ./application/controllers/customer.php */