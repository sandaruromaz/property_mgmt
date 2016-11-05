<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

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
		//$this->load->model('Search');
		}
	

/*
	=====================================================================================
	other Page for this controller.
	*/	
	
	
	public function view($page)
		{	
		$data['title'] = "NEW MONIS BAKERY";
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
	news page controller with pagination.
	*/	
	
			
		public function news_details($page=0)
		{	
			
		$data['title'] = "NEW MONIS BAKERY ";
		$data['main'] = 'news';//news page
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		$data['getallcategories'] = $this->Store->getAllCategories();
		$data['newitems'] = $this->Store->newItems();

		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		 }		
		/*$this->load->model('News','',TRUE);
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);

		$data['mainss'] = $this->News->get_news_list($this->limit, $offset)->result();
		
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('pages/news/');
 		$config['total_rows'] = $this->News->count_all();
 		$config['per_page'] = $this->limit;
		$config['uri_segment'] = $uri_segment;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();*/
		$this->load->library('pagination');
		$config = array();
        $config["base_url"] = site_url('news/news_details/');
        $config["total_rows"] =$this->NewsDetails->count_all();
		if(!isset($_SESSION['viewbyn'])) $_SESSION['viewbyn']=5;
        $config["per_page"] = $_SESSION['viewbyn'];
        //$config["per_page"] = 5;
        $config["uri_segment"] = 3;
 
        $this->pagination->initialize($config);
 		$start=$page;
       // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->NewsDetails->get_news_list($config["per_page"], $start);
        $data["links"] = $this->pagination->create_links();
 
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
		
		
 		}
		
		
		/*
	=====================================================================================
	news search controller.
	*/	
	
	
	public function search()
		{			
		$this->load->library('form_validation');/* there is no point of autoloding this library*/
		$this->form_validation->set_rules('search', 'invalid Value', 'trim|required|xss_clean');
		if($this->form_validation->run() == FALSE){
		$search='';
		}else{$search=$this->input->post('search');}
		$data['search_data']= $this-> NewsDetails-> getSearch($search);
		$data['title'] = "NEW MONIS BAKERY";
		$data['main'] = 'news_search';//news page
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		$data['getallcategories'] = $this->Store->getAllCategories();
		$data['newitems'] = $this->Store->newItems();
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		 }

		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
		
 		}
		
	public function newsView($viewbyn){
		$_SESSION['viewbyn']=$viewbyn;
		redirect('news/news_details/');
		}
}
/* End of file customer.php */
/* Location: ./application/controllers/customer.php */