<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CDetails extends CI_Controller {

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
	 **/
	 
	 function __construct()
  	{        // Call the Model constructor
        parent::__construct();
		session_start();
		$this->load->model('Member');
		$this->load->model('CompanyDetails');
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		 }
		
	}
		
		
	public function index()
	{	
		$data['title'] = "NEW MONIS BAKERY";
		$data['main'] = 'home';
		$this->load->model('CompanyDetails');
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
		$data['title'] = "NEW MONIS BAKERY";
		$data['main'] = $page;
		// if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		//$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		// }
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
		
	}
	
	//controller to company details.

	
	
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */