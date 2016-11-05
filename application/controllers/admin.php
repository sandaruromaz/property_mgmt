<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('CompanyDetails');
		$this->load->model('Admin_store');
		$this->load->model('Admin_orders');
		$this->load->model('Admin_apperal');
		$this->load->model('Admin_design_orders');
		$this->load->model('Admin_news');
		$this->load->model('Admin_slider');
		$this->load->model('Admin_feedback');
		$this->load->model('Admin_about_us');
		$this->load->model('Admin_customer');
		$this->load->model('Admin_user');
		$this->load->model('Admin_report');
		$this->load->model('Admin_reservation');
		$this->load->model('Admin_test');
		$this->load->library('My_PHPMailer'); 
		

  	}
	public function index()
	{   
	    if (isset($_SESSION['admin_id']) ) {
		$data['title'] = "Property Mgt System | Admin Dashboard";
		$data['main'] = 'admin/dashboard';
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['income'] = $this-> Admin_store-> getorderincome();
		$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
		$data['feedhead'] = $this-> Admin_feedback-> feedheader();
		$data['orderscount'] = $this-> Admin_orders-> ordersCount();
		$data['reviewscount'] = $this-> Admin_store-> reviewsCount();
		//$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
		$data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
     
		$this   -> load   -> vars($data);
		$this   -> load   -> view('admin/dashboard_template');
		}else{
		redirect('admin/login', 'location');	
		}
	}
	/*
	=====================================================================================
	Page autoloder for this controller.
	*/

	function view($path){
		if($this->MDashboard->getRoalAuth($path,$_SESSION['user_role_id'])){
		//if true do nothing
		}else{
		redirect('/admin/','location');	
		}
		$data['main'] = 'admin/'.$path;
		$data['title'] = "Property Mgt System | Admin Dashboard";
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
		$data['feedhead'] = $this-> Admin_feedback-> feedheader();
		$data['orderscount'] = $this-> Admin_orders-> ordersCount();
		$data['reviewscount'] = $this-> Admin_store-> reviewsCount();
		$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();			
		//get the "log in" admin informations
		$data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
		$this-> load-> vars($data);
		
		$this   -> load   -> view('admin/dashboard_template');
	
		}

    	function login(){
		$data['title'] = "Property Mgt System | Admin Dashboard";
	    $data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['income'] = $this-> Admin_store-> getorderincome();
		$this-> load-> vars($data);
		$this   -> load   -> view('admin/login');
		}	
			
/*====================================================================================================================================================
Product category controller
*/		
		
	function product_category(){
	//check user authentication
	if (isset($_SESSION['admin_id'])) {
	if($this->MDashboard->getRoalAuth($path='product_category',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access Product category page.');	
	redirect('/admin/','location');	
				}
	$data['main'] = 'admin/store/product_category';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['admin_product_categories'] = $this->Admin_store-> getAllProductsCategories();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
	$data['reviewscount'] = $this-> Admin_store-> reviewsCount();
		//get the "log in" admin informations
	$data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
Product category edit controller
*/

	function productCategoryedit($product_type_id){  
	
	$catename= $_POST['catename']; 
	$data = $this->Admin_store-> productCatEdit($product_type_id);
	$this-> load-> vars($data);
	$this->session->set_userdata('successproductcategory', ' The <strong>'.$catename.'</strong> category is successfully updated.');
	redirect('admin/product_category', 'location');
	
	}	
	
/*====================================================================================================================================================
Product category add controller
*/	
	function productCategoryadd(){
	$catename = $_POST['catename'];    
	$this->Admin_store-> productCatAdd();
	$this->session->set_userdata('successproductcategory', ' The <strong>'.$catename.'</strong> category is successfully added.');
	
	
		
	redirect('admin/product_category/'.$product_type_id.'', 'location');
	
	}

/*====================================================================================================================================================
Product category delete controller
*/	
	function productCategorydelete($product_type_id){
	$catename = $_POST['catename'];    
	$this->Admin_store-> productCatDelete($product_type_id);
	$this->session->set_userdata('successproductcategory', ' The <strong>'.$catename.'</strong> category is successfully deleted.');	
	redirect('admin/product_category', 'location');
	
	}




		
	function products_reviews(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='products_reviews',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access products reviews page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/store/products_reviews';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();			
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_productreviews'] = $this->Admin_store-> getAllproductreviews();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
gender category edit controller
*/

	function productsreviewsedit($product_review_id){  
	
	$reviewid= $_POST['reviewid']; 
	$data = $this->Admin_store-> reviewEdit($product_review_id);
	$this-> load-> vars($data);
	$this->session->set_userdata('successreview', ' The product review id <strong>'.$reviewid.'</strong>  is successfully updated.');
	redirect('admin/products_reviews', 'location');
	
	}	
	


/*====================================================================================================================================================
gender category delete controller
*/	
	function productsreviewsdelete($product_review_id){
	$reviewid = $_POST['reviewid'];    
	$this->Admin_store-> reviewDelete($product_review_id);
	$this->session->set_userdata('successreview', ' The product review id <strong>'.$reviewid.'</strong>  is successfully deleted.');	
	redirect('admin/products_reviews', 'location');
	
	}
/*====================================================================================================================================================
products  controller
*/		
		
	function products(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='products',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access products  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/store/products';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	//$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_products'] = $this->Admin_store-> getAllproduct();
	// $data['admin_productdetails'] = $this->Admin_store-> getotherproductdetails();
	// $data['admin_product_categories'] = $this->Admin_store-> getAllProductsCategories();
	// $data['admin_brand_categories'] = $this->Admin_store-> getAllbrandCategories();
	// $data['admin_other_details'] = $this->Admin_store-> getotherproductdetails();
	// // $data['admin_productreviews'] = $this->Admin_store-> getAllproductreviews();
	// $data['admin_genderproduct1_categories'] = $this->Admin_store-> getAllGenderProductCategories1();
	
	
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
products edit controller
*/	
	function productedit($product_id){
	$productname = $_POST['productname'];    
	$this->Admin_store-> productsEdit($product_id);
	$this->session->set_userdata('successproduct', ' The <strong>'.$productname.'</strong> products is successfully updated.');	
	redirect('admin/products', 'location');
	
	}
/*====================================================================================================================================================
products  adavance  delete controller
*/	
	function productadvadelete($product_id, $color_id, $size_id){
	$productname = $_POST['product_name'];    
	$this->Admin_store-> productadvaceDelete($product_id, $color_id, $size_id);
	$this->session->set_userdata('successproductedit', ' The  <strong>'.$productname.'</strong> details is successfully deleted.');	
	redirect('admin/products_advance_edit/'.$product_id.'', 'location');
	
	}
/*====================================================================================================================================================
products  adavance gender delete controller
*/	
	function productadvagenderdelete($product_id, $people_cat_id){
	$people_cat_name = $_POST['people_cat_name'];
	$productname = $_POST['product_name'];     
	$this->Admin_store-> productadvacegenderDelete($product_id, $people_cat_id);
	$this->session->set_userdata('successproductedit', ' The  <strong>'.$people_cat_name.'</strong> gender category of <strong>'.$productname.'</strong>  is successfully deleted.');	
	redirect('admin/products_advance_edit/'.$product_id.'', 'location');
	
	}
/*====================================================================================================================================================
products  adavance  add controller
*/	
	function productadavnceAdd($product_id){
	$productname = $_POST['productname'];    
	$this->Admin_store-> productadavncAdd($product_id);
	$this->session->set_userdata('successproductedit', ' The <strong>'.$productname.'</strong> product other details  is successfully added.');	
	redirect('admin/products_advance_edit/'.$product_id.'', 'location');
	
	}
/*====================================================================================================================================================
products  gender add controller
*/	
	function productadavncegenderAdd($product_id){
	$productname = $_POST['productname'];    
	$this->Admin_store-> productadavncgenderAdd($product_id);
	$this->session->set_userdata('successproductedit', ' The <strong>'.$productname.'</strong> product other details  is successfully added.');	
	redirect('admin/products_advance_edit/'.$product_id.'', 'location');
	
	}

/*====================================================================================================================================================
products  adavance edit  controller
*/	
	function productadvaedit($product_id, $color_id, $size_id){
	$productname = $_POST['product_name'];    
	$this->Admin_store-> productsadvaEdit($product_id, $color_id, $size_id);
	$this->session->set_userdata('successproduct', ' The <strong>'.$productname.'</strong> products is successfully updated.');	
	redirect('admin/products_advance_edit/'.$product_id.'', 'location');
	
	}

/*====================================================================================================================================================
products adv connce edit troller
*/		
		
	function products_advance_edit($product_id){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='products',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access product edit  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/store/products_edit';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	//$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_one_products'] = $this->Admin_store-> getoneproduct($product_id);
	$data['admin_product_categories'] = $this->Admin_store-> getAllProductsCategories();
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
products adv connce edit troller
*/		
		
	function products_add(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='products',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access product add  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/store/products_add';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	//$data['admin_one_products'] = $this->Admin_store-> getoneproduct($product_id);
	//$data['admin_productdetails'] = $this->Admin_store-> getotherproductdetails();
	$data['admin_product_categories'] = $this->Admin_store-> getAllProductsCategories();
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
products add controller
*/	
	function productadd(){
	$productname = $_POST['productname'];    
	$this->Admin_store-> productsAdd();
	$this->session->set_userdata('successproduct', ' The <strong>'.$productname.'</strong> products is successfully added.');	
	redirect('admin/products', 'location');
	
	}
/*====================================================================================================================================================
products delete controller
*/	
	function productdelete($product_id){
	$product_name = $_POST['product_name'];    
	$this->Admin_store-> productsDelete($product_id);
		$this->session->set_userdata('successproduct', ' The <strong>'.$product_name.'</strong> products is successfully deleted.');	
	redirect('admin/products', 'location');
	
	}
	
/*Orders
====================================================================================================================================================
order  controller
*/		
		
	function orders(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='orders',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access order  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/order/orders';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_orders'] = $this->Admin_orders-> getAllOrders();

	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*
====================================================================================================================================================
order  details controller
*/		
		
	function order_details($order_id){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='orders',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access order details page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/order/order_details';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_orderdetails'] = $this->Admin_orders-> orderdetails($order_id);
	$data['admin_order_productdetails'] = $this->Admin_orders->orderproductdetails($order_id);
	$data['admin_order_billingdetails'] = $this->Admin_orders-> billingdetails($order_id);

	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
order status edit controller
*/

	function orderedit($order_id){  
	
	
	$data = $this->Admin_orders-> orderstatusEdit($order_id);
	$this-> load-> vars($data);
	$this->session->set_userdata('successorder', ' The <strong>'.$order_id.'</strong> order status is successfully updated.');
	redirect('admin/orders', 'location');
	
	}
/*====================================================================================================================================================
order delete controller
*/	
	function orderdelete($order_id){
	   
	$this->Admin_orders-> orderDelete($order_id);
	$this->session->set_userdata('successorder', ' The <strong>'.$order_id.'</strong> order is successfully deleted.');	
	redirect('admin/orders', 'location');
	
	}

/*====================================================================================================================================================
apparel category controller
*/		
		
	function cake_category(){
	//check user authentication
	if (isset($_SESSION['admin_id'])) {
	if($this->MDashboard->getRoalAuth($path='cake_category',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access cake category page.');	
	redirect('/admin/','location');	
				}
	$data['main'] = 'admin/cake/cake_category';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_apparel_categories'] = $this->Admin_apperal-> getAllapparelsCategories();
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
apparel category edit controller
*/

	function apparelCategoryedit($apparel_type_id){  
	
	$catename= $_POST['catename']; 
	$data = $this->Admin_apperal-> apparelCatEdit($apparel_type_id);
	$this-> load-> vars($data);
	$this->session->set_userdata('successapparelcategory', ' The <strong>'.$catename.'</strong> category is successfully updated.');
	redirect('admin/cake_category', 'location');
	
	}	
	
/*====================================================================================================================================================
apparel category add controller
*/	
	function apparelCategoryadd(){
	$catename = $_POST['catename'];    
	$this->Admin_apperal-> apparelCatAdd();	
	$this->session->set_userdata('successapparelcategory', ' The <strong>'.$catename.'</strong> category is successfully added.');
	
	
		
	redirect('admin/cake_category/', 'location');
	
	}

/*====================================================================================================================================================
apparel category delete controller
*/	
	function apparelCategorydelete($apparel_type_id){
	$catename = $_POST['catename'];    
	$this->Admin_apperal-> apparelCatDelete($apparel_type_id);
	$this->session->set_userdata('successapparelcategory', ' The <strong>'.$catename.'</strong> category is successfully deleted.');	
	redirect('admin/cake_category', 'location');
	
	}

/*====================================================================================================================================================
apparel product controller
*/		
		
	function cakes(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='apparels',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access cakes   page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/cake/cakes';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();		
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();	
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_apparels'] = $this->Admin_apperal-> getAllapparels();
	$data['admin_apparel_categories'] = $this->Admin_apperal-> getAllapparelsCategories();
	
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
apparels add controller
*/	
	function appareladd(){
	$productname = $_POST['productname'];    
	$this->Admin_apperal-> apparelsAdd();	
	$this->session->set_userdata('successapparel', ' The <strong>'.$productname.'</strong> cake is successfully added.');	
	redirect('admin/cakes', 'location');
	
	}
/*====================================================================================================================================================
apparels edit controller
*/	
	function appareledit($apparel_product_id){
	$productname = $_POST['productname'];    
	$this->Admin_apperal-> apparelsEdit($apparel_product_id);
	$this->session->set_userdata('successapparel', ' The <strong>'.$productname.'</strong> cake is successfully updated.');	
	redirect('admin/cakes', 'location');
	
	}
/*====================================================================================================================================================
apparels delete controller
*/	
	function appareldelete($apparel_product_id){
	$product_name = $_POST['product_name'];    
	$this->Admin_apperal-> apparesDelete($apparel_product_id);
	$this->session->set_userdata('successapparel', ' The <strong>'.$product_name.'</strong> cake is successfully deleted.');	
	redirect('admin/cakes', 'location');
	
	}
/*====================================================================================================================================================
art work  category controller
*/		
		
	function artwork_category(){
	//check user authentication
	if (isset($_SESSION['admin_id'])) {
	if($this->MDashboard->getRoalAuth($path='cake_category',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access art work category page.');	
	redirect('/admin/','location');	
				}
	$data['main'] = 'admin/cake/artwork_category';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_artwork_categories'] = $this->Admin_apperal-> getAllartworksCategories();
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
art work  category edit controller
*/

	function artworkCategoryedit($artwork_category_id){  
	
	$catename= $_POST['catename']; 
	$data = $this->Admin_apperal-> artworkCatEdit($artwork_category_id);
	$this-> load-> vars($data);
	$this->session->set_userdata('successartworkcategory', ' The <strong>'.$catename.'</strong> category is successfully updated.');
	redirect('admin/artwork_category', 'location');
	
	}	
	
/*====================================================================================================================================================
art work  category add controller
*/	
	function artworkCategoryadd(){
	$catename = $_POST['catename'];    
	$this->Admin_apperal-> artworkCatAdd();	
	$this->session->set_userdata('successartworkcategory', ' The <strong>'.$catename.'</strong> category is successfully added.');	
		
	redirect('admin/artwork_category/', 'location');
	
	}

/*====================================================================================================================================================
art work  category delete controller
*/	
	function artworkCategorydelete($artwork_category_id){
	$catename = $_POST['catename'];    
	$this->Admin_apperal-> artworkCatDelete($artwork_category_id);
	$this->session->set_userdata('successartworkcategory', ' The <strong>'.$catename.'</strong> category is successfully deleted.');	
	redirect('admin/artwork_category', 'location');
	
	}

/*====================================================================================================================================================
art works controller
*/		
		
	function artworks(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='apparels',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access apparel product  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/cake/artworks';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_artworks'] = $this->Admin_apperal-> getAllartworks();
	$data['admin_artwork_categories'] = $this->Admin_apperal-> getAllartworksCategories();
	
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
artworks add controller
*/	
	function artworkadd(){
	$artworkname = $_POST['artworkname'];    
	$this->Admin_apperal-> artworksAdd();	
	$this->session->set_userdata('successartwork', ' The <strong>'.$artworkname.'</strong> art work is successfully added.');	
	redirect('admin/artworks', 'location');
	
	}
/*====================================================================================================================================================
artworks edit controller
*/	
	function artworkedit($artwork_id){
	$artworkname = $_POST['artworkname'];    
	$this->Admin_apperal-> artworksEdit($artwork_id);
	$this->session->set_userdata('successartwork', ' The <strong>'.$artworkname.'</strong> art work is successfully updated.');	
	redirect('admin/artworks', 'location');
	
	}
/*====================================================================================================================================================
artworks delete controller
*/	
	function artworkdelete($artwork_id){
	$artworkname = $_POST['artworkname'];    
	$this->Admin_apperal-> artworksDelete($artwork_id);
	$this->session->set_userdata('successartwork', ' The <strong>'.$artworkname.'</strong> art work is successfully deleted.');	
	redirect('admin/artworks', 'location');
	
	}
/*Orders
====================================================================================================================================================
order  controller
*/		
		
	function design_orders(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='apparels',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access design order  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/cake/design_orders';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_designorders'] = $this->Admin_design_orders-> getAllDesignOrders();

	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*
====================================================================================================================================================
order  details controller
*/		
		
	function designorder_details($design_order_id){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='apparels',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access design order details page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/cake/designorder_details';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_orderdetails'] = $this->Admin_design_orders-> designorderdetails($design_order_id) ;
	$data['admin_order_productdetails'] = $this->Admin_design_orders->designdetails($design_order_id);
	// $data['countquantity']=$this-> Admin_design_orders->getquantity($design_order_id);

	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
order status edit controller
*/

	function designorderedit($design_order_id){  
	
	
	$data = $this->Admin_design_orders-> designorderstatusEdit($design_order_id);
	$this-> load-> vars($data);
	$this->session->set_userdata('successdesignorder', ' The <strong>'.$design_order_id.'</strong> order status is successfully updated.');
	redirect('admin/design_orders', 'location');
	
	}
/*====================================================================================================================================================
order delete controller
*/	
	function designorderdelete($design_order_id){
	   
	$this->Admin_design_orders-> designorderDelete($design_order_id);
	$this->session->set_userdata('successdesignorder', ' The <strong>'.$design_order_id.'</strong> order is successfully deleted.');	
	redirect('admin/design_orders', 'location');
	
	}
	
/*News
====================================================================================================================================================
News  controller
*/		
		
	function news(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='news',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access news  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/news/news';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_news'] = $this->Admin_news-> getAllnews();

	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
news add controller
*/	
	function newsadd(){
	$newstopic = $_POST['news_topic'];    
	$this->Admin_news-> newsAdd();	
	$this->session->set_userdata('successnews', ' The <strong>'.$newstopic.'</strong> news is successfully added.');	
	redirect('admin/news', 'location');
	
	}
/*====================================================================================================================================================
news edit controller
*/	
	function newsedit($latest_news_id){
	$newstopic = $_POST['news_topic'];    
	$this->Admin_news-> newsEdit($latest_news_id);
	$this->session->set_userdata('successnews', ' The <strong>'.$newstopic.'</strong> news is successfully updated.');	
	redirect('admin/news', 'location');
	
	}
/*====================================================================================================================================================
news delete controller
*/	
	function newsdelete($latest_news_id){
	$topic = $_POST['topic'];    
	$this->Admin_news-> newsDelete($latest_news_id);
	$this->session->set_userdata('successnews', ' The <strong>'.$artworkname.'</strong> news is successfully deleted.');	
	redirect('admin/news', 'location');
	
	}


/*MainSlider
====================================================================================================================================================
Slider controller
*/		
		
	function slider(){
	//check user authentication
	if (isset($_SESSION['admin_id'])) {
	if($this->MDashboard->getRoalAuth($path='slider',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access slider page.');	
	redirect('/admin/','location');	
				}
	$data['main'] = 'admin/slider/slider';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_sliders'] = $this->Admin_slider-> getAllsliders();
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }

 /*MainSlider
====================================================================================================================================================
Slider controller
*/		
		
	function gallery_category(){
	//check user authentication
	if (isset($_SESSION['admin_id'])) {
	if($this->MDashboard->getRoalAuth($path='slider',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access gallery page.');	
	redirect('/admin/','location');	
				}
	$data['main'] = 'admin/gallery/gallery';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_sliders'] = $this->Admin_slider-> getAllsliders();
	$data['admin_gallery'] = $this->Admin_slider-> getAllGalleryCategory();
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }


/*images*/
function gallery_images(){
	//check user authentication
	if (isset($_SESSION['admin_id'])) {
	if($this->MDashboard->getRoalAuth($path='slider',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access gallery page.');	
	redirect('/admin/','location');	
				}
	$data['main'] = 'admin/gallery/gallery_images';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_sliders'] = $this->Admin_slider-> getAllsliders();
	$data['admin_gallery'] = $this->Admin_slider-> getAllGalleryCategory();
	$data['admin_images'] = $this->Admin_slider-> getAllGalleryImages();
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
Slider edit controller
*/	
	function slideredit($slider_id){
	  
	$this->Admin_slider-> sliderEdit($slider_id);
	$this->session->set_userdata('successslider', ' The slider id <strong>'.$slider_id.'</strong> slider is successfully updated.');	
	redirect('admin/slider', 'location');
	
	}
	
	function sliderdelete(){
	$main_text = $_POST['main_text'];    
	$this->Admin_slider-> sliderDelete();
	$this->session->set_userdata('successslider', ' The <strong>'.$main_text.'</strong> slider successfully deleted.');	
	redirect('admin/slider', 'location');
	
	}
 
/*====================================================================================================================================================
Gallery Cat edit controller
*/	
	function gallerycatedit($gallerycat_id){
	$sub = $_POST['sub'];    
	$this->Admin_slider-> gallerycatedit($gallerycat_id);
	$this->session->set_userdata('successgallerycategory', ' The Gallery Category  <strong>'.$sub.'</strong> is successfully updated.');	
	redirect('admin/gallery_category', 'location');
	
	}

	function galleryimgedit($image_id){
	$name = $_POST['name'];    
	$this->Admin_slider-> galleryimgedit($image_id);
	$this->session->set_userdata('successgalleryimages', ' The Gallery Image  <strong>'.$sub.'</strong> is successfully updated.');	
	redirect('admin/gallery_images', 'location');


	}


	function gallerycatdelete(){
	$name = $_POST['name'];    
	$this->Admin_slider-> gallerycatdelete();
	$this->session->set_userdata('successgallerycategory', ' The <strong>'.$name.'</strong> gallery category successfully deleted.');	
	redirect('admin/gallery_category', 'location');
	
	}	

	function galleryimgdelete(){
	$name = $_POST['name'];    
	$this->Admin_slider-> galleryimgdelete();
	$this->session->set_userdata('successgalleryimages', ' The <strong>'.$name.'</strong> gallery image successfully deleted.');	
	redirect('admin/gallery_images', 'location');


	}

	function gallerycatadd(){
	$catename = $_POST['catename'];    
	$this->Admin_slider-> gallerycatadd();	
	$this->session->set_userdata('successgallerycategory', ' The <strong>'.$catename.'</strong> category is successfully added.');
	
	
		
	redirect('admin/gallery_category/', 'location');	
	}


	function galleryimgadd(){
	$name = $_POST['name'];    
	$this->Admin_slider-> galleryimgadd();	
	$this->session->set_userdata('successgalleryimages', ' The <strong>'.$name.'</strong> image is successfully added.');
	
	
		
	redirect('admin/gallery_images/', 'location');	
	}
	
/*Company Information
====================================================================================================================================================
about us controller
*/		
		
	function about_us(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='about_us',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access about us page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/company_information/about_us';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();			
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	
	$data['admin_about'] = $this->Admin_about_us-> about();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
about us edit controller
*/	
	function aboutusedit($about_id){	    
	$this->Admin_about_us-> aboutusEdit($about_id);
	$this->session->set_userdata('successabout', ' The <strong>about us details </strong> is successfully updated.');	
	redirect('admin/about_us', 'location');
	
	}
/*====================================================================================================================================================
director   edit controller
*/	
	function directoredit($about_id){	    
	$this->Admin_about_us-> directorEdit($about_id);
	$this->session->set_userdata('successabout', ' The <strong>director details </strong> is successfully updated.');	
	redirect('admin/about_us', 'location');
	


	}
/*
====================================================================================================================================================
branch information controller
*/		
		
	function branch_information(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='branch_information',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access about us page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/company_information/branch_information';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();			
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	
	$data['admin_mainBranch'] = $this->Admin_about_us-> mainBranch();
	$data['admin_otherBranch'] = $this->Admin_about_us-> otherBranch();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
	
/*====================================================================================================================================================
service_information controller
*/	
function service_information(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='service_information',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access service information page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/company_information/service_information'; /* view */
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();			
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	
	$data['service_info'] = $this->Admin_about_us-> getSerivceInfo(); //access model
//$data['admin_otherBranch'] = $this->Admin_about_us-> otherBranch();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }



/*====================================================================================================================================================
main branch edit controller
*/	
	function mainbranchedit($branch_id){	    
	$this->Admin_about_us-> mainbranchsEdit($branch_id);
	$this->session->set_userdata('successbranch', ' The <strong>mian branch details </strong> successfully updated.');	
	redirect('admin/branch_information', 'location');
	
	}
/*====================================================================================================================================================
other branch edit controller
*/	
	function otherbranchadd(){
	$location= trim($_POST['location']);	    
	$this->Admin_about_us-> otherbranchsAdd();
	$this->session->set_userdata('successbranch', ' The <strong>'.$location.'</strong> branch details successfully added.');	
	redirect('admin/branch_information', 'location');
	
	}
/*====================================================================================================================================================
other branch edit controller
*/	
	function otherbranchedit($branch_id){
	$location= trim($_POST['location']);		    
	$this->Admin_about_us-> otherbranchsEdit($branch_id);
	$this->session->set_userdata('successbranch', ' The <strong>'.$location.'</strong> branch details successfully updated.');	
	redirect('admin/branch_information', 'location');
	
	}
/*====================================================================================================================================================
other branch delete controller
*/	
	function branchdelete($branch_id){
	$location = $_POST['location'];    
	$this->Admin_about_us-> otherbranchsDelete($branch_id);
	$this->session->set_userdata('successbranch', ' The <strong>'.$location.'</strong> branch details successfully deleted.');	
	redirect('admin/branch_information', 'location');
	
	}
	
/*customer
====================================================================================================================================================
customer  controller
*/		
		
	function customers(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='customers',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access customers information  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/customers/customers';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	
	$data['admin_customers'] = $this->Admin_customer-> getAllcustomers();
	$data['admin_news'] = $this->Admin_news-> getAllnews();

	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
customer edit controller
*/	
	function customeredit($customer_id){
	//$location= trim($_POST['location']);		    
	$this->Admin_customer-> customerEdit($customer_id);
	$this->session->set_userdata('successcustomer', ' The customer id <strong>'.$customer_id.'</strong> customer  is successfully updated.');	
	redirect('admin/customers', 'location');
	
	}
/*feedback
====================================================================================================================================================
feedback  controller
*/		
		
	function feedback(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='feedback',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access feedback  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/feedback/feedback';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	
	$data['admin_feedbacks'] = $this->Admin_feedback-> feedDetails();

	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }

/*
====================================================================================================================================================
feedback details controller
*/		
		
	function feedback_details($feedback_id){
	
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='feedback',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access feedback  page.');	
	redirect('/admin/','location');	
	}
	$this->Admin_feedback->feedbackread($feedback_id);
	$data['main'] = 'admin/feedback/feedback_details';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	
	$data['admin_feedback_details'] = $this->Admin_feedback-> onefeedDetails($feedback_id);

	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*feedback
====================================================================================================================================================
outbox  controller
*/		
		
	function outbox(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='feedback',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access feedback  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/feedback/feedback_out';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	
	$data['admin_outbox'] = $this->Admin_feedback-> outboxDetails();

	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }	
/*
User management
====================================================================================================================================================
User management controller
*/		
		
	function user_role(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='user_role',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access user role management page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/user/user_role';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_userrole'] = $this->Admin_user-> getAllUserrole();
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
User management edit controller
*/

	function user_roleedit($user_role_id){  
	
	$userrolename= $_POST['userrolename1']; 
	$data = $this->Admin_user-> userroleEdit($user_role_id);
	$this-> load-> vars($data);
	$this->session->set_userdata('successuserrole', ' The <strong>'.$userrolename.'</strong> user role is successfully updated.');
	redirect('admin/user_role', 'location');
	
	}	
	
/*====================================================================================================================================================
User management add controller
*/	
	function user_roleadd(){
	$userrolename = $_POST['userrolename'];    
	$this->Admin_user-> userroleAdd();
	$this->session->set_userdata('successuserrole', ' The <strong>'.$userrolename.'</strong> user role is successfully added.');	
	redirect('admin/user_role', 'location');
	
	}

/*====================================================================================================================================================
User management delete controller
*/	
	function user_roledelete($user_role_id){
	$userrolename = $_POST['userrolename'];    
	$this->Admin_user-> userroleDelete($user_role_id);
	$this->session->set_userdata('successuserrole', ' The <strong>'.$userrolename.'</strong> user role is successfully deleted.');	
	redirect('admin/user_role', 'location');
	
	}


/*
User management
====================================================================================================================================================
User menu controller
*/		
		
	function user_menu(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='user_menu',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access user menu management page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/user/user_menu';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_usermenu'] = $this->Admin_user-> getAllUsermenu();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*====================================================================================================================================================
User management edit controller
*/

	function user_menuedit($user_menu_type_id){  
	
	$usermenuname= $_POST['usermenuname1']; 
	$data = $this->Admin_user-> usermenuEdit($user_menu_type_id);
	$this-> load-> vars($data);
	$this->session->set_userdata('successusermenu', ' The <strong>'.$usermenuname.'</strong> user menu is successfully updated.');
	redirect('admin/user_menu', 'location');
	
	}	
	
/*====================================================================================================================================================
User management add controller
*/	
	function user_menuadd(){
	$usermenuname = $_POST['usermenuname'];    
	$this->Admin_user-> usermenuAdd();
	$this->session->set_userdata('successusermenu', ' The <strong>'.$usermenuname.'</strong> user menu is successfully added.');	
	redirect('admin/user_menu', 'location');
	}

/*====================================================================================================================================================
User management delete controller
*/	
	function user_menudelete($user_menu_type_id){
	$usermenuname = $_POST['usermenuname'];    
	$this->Admin_user-> usermenuDelete($user_menu_type_id);
	$this->session->set_userdata('successusermenu', ' The <strong>'.$usermenuname.'</strong> user menu is successfully deleted.');	
	redirect('admin/user_menu', 'location');
	}

/*
User management
====================================================================================================================================================
User privileges controller
*/		
		
	function user_privileges(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='user_privileges',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access user privileges management page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/user/user_privileges';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();			
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_userprivileges'] = $this->Admin_user-> getAllUserprivileges();
	$data['admin_userrole'] = $this->Admin_user-> getAllUserrole();
	//$data['admin_userprivilegesname'] = $this->Admin_user-> getAllUserprivilegesname();
	$data['admin_usermenu'] = $this->Admin_user-> getAllUsermenu();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
	
	
/*====================================================================================================================================================
User management add controller
*/	
	function user_privilegesadd(){
	$userrole = $_POST['userrole'];
	$usermenu = $_POST['usermenu'];     
	$this->Admin_user-> userprivilegAdd();
	$this->session->set_userdata('successuserprivilege', ' The <strong>'.$usermenu.'</strong> privilege of <strong>'.$userrole.'</strong> user role is successfully added.');	
	redirect('admin/user_privileges', 'location');
	}

/*====================================================================================================================================================
User management delete controller
*/	
	function user_privilegesdelete($user_menu_type_id){
	$usermenuname = $_POST['usermenuname'];
	$userrolename = $_POST['userrolename'];     
	$this->Admin_user-> userprivilegesDelete($user_menu_type_id);
	$this->session->set_userdata('successuserprivilege', ' The <strong>'.$usermenuname.'</strong> privilege of <strong>'.$userrolename.'</strong> user role is successfully deleted.');	
	redirect('admin/user_privileges', 'location');
	}

/*
User management
====================================================================================================================================================
system User  controller
*/		
		
	function system_users(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='system_users',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access system user details page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/user/system_users';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_users'] = $this->Admin_user-> getAllsystem_users();
	$data['admin_userrole'] = $this->Admin_user-> getAllUserrole();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
	
	function team_members(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='team_members',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access system user details page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/user/team_members';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_users'] = $this->Admin_user-> getAllsystem_users();
	$data['team_members'] = $this->Admin_user-> getAllteam_members();
	$data['admin_userrole'] = $this->Admin_user-> getAllUserrole();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
	
	
	
//========================
//     Add new service
//========================	
	function addService(){ 
	$name = $_POST['name'];     
	$this->CompanyDetails-> addService();
	$this->session->set_userdata('successuserdetails', ' The <strong>'.$name.'</strong>  service is successfully added.');	
	redirect('admin/service_information', 'location');
	}
	
	
	
		
//============================
//     Add new team member
//============================	
	function addTeamMember(){ 
	$name = $_POST['fname'].' '.$_POST['lname'];     
	$this->Admin_user-> addTeamMember();
	$this->session->set_userdata('successuserdetails', ' The <strong>'.$name.'</strong>  team member is successfully added.');	
	redirect('admin/team_members', 'location');
	}
	
/*====================================================================================================================================================
system User add controller
*/	
	function useradd(){
	$userrole = $_POST['userrole'];
	$email = $_POST['email'];     
	$this->Admin_user-> userAdd();
	$this->session->set_userdata('successuserdetails', ' The <strong>'.$email.'</strong>  user is successfully added.');	
	redirect('admin/system_users', 'location');
	}

/*====================================================================================================================================================
system User edit controller
*/

	function userstatusedit($user_id){  
	
	$email= $_POST['email']; 
	$data = $this->Admin_user-> userstatusEdit($user_id);
	$this-> load-> vars($data);
	$this->session->set_userdata('successuserdetails', ' The  <strong>"'.$email.'"</strong> user is  successfully updated.');
	redirect('admin/system_users', 'location');
	
	}	

/*====================================================================================================================================================
system User delete controller
*/	
	function userdelete($user_id){
	//$usermenuname = $_POST['usermenuname'];
	//$userrolename = $_POST['userrolename'];     
	$this->Admin_user-> userDelete($user_id);
	$this->session->set_userdata('successuserdetails', ' The user id <strong>'.$user_id.'</strong>  user  is successfully deleted.');	
	redirect('admin/system_users', 'location');
	}

/*
Report 
====================================================================================================================================================
Report   controller
*/		
		
	function reports(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='report',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access report page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/report/report';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();		
	//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_users'] = $this->Admin_user-> getAllsystem_users();
	$data['admin_userrole'] = $this->Admin_user-> getAllUserrole();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }

/*
my_profile
====================================================================================================================================================
my_profile   controller
*/		
		
	function my_profile(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	
	$data['main'] = 'admin/my_profile/my_profile';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();			
	//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_users'] = $this->Admin_user-> getAllsystem_users();
	$data['admin_userrole'] = $this->Admin_user-> getAllUserrole();
	$data['admin_user'] = $this->Admin_user-> getcurrentsystem_user();
	$data['admin_usermenu'] = $this->Admin_user-> getcurrentsystem_usermenu();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }

/* 
====================================================================================================================================================
my_profile   controller
*/	
	public function updateprofile()
	{
	/*$this->load->model('Member');
    $this->Member->updateAcoount();
   	$this->session->set_userdata('Success', 'Update Done!');*/
	$this->Admin_user->updateAcoount();
	$this->session->set_userdata('successmy', 'Update profile Success!');
   	//$this->view('pages/myaccount');
	redirect('admin/my_profile', 'location');
    
	}
/* 
====================================================================================================================================================
my_profile   controller
*/
	public function changepassword() 
	{
		
	if($this->Admin_user->changePasswords()){
  	$this->session->set_userdata('successmy', 'Update Password Success!');
	redirect('admin/my_profile', 'location');
	  }else{
	  $this->session->set_userdata('errorrmy', 'Unable to Update Password');
	  redirect('admin/my_profile', 'location');
	 
	}
	}	


/*
====================================================================================================================================================
table reservation controller
*/		
		
	function table_reserve(){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='reservation',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access about us page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/table_reserve/reservation'; //link view
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['reviewscount'] = $this-> Admin_store-> reviewsCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reservation'] = $this->Admin_reservation-> getAllReservations();
   // print_r($data['reservation']);die;
    $data['getallreservations'] = $this-> Admin_reservation-> getAllReservations();

	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();			
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	
	$data['admin_mainBranch'] = $this->Admin_about_us-> mainBranch();
	$data['admin_otherBranch'] = $this->Admin_about_us-> otherBranch();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }




/*
====================================================================================================================================================
reservation details controller
*/		
		
	function reserve_details($table_reservation_id){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='orders',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access order details page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/table_reserve/reserve_details';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	 $data['reviewscount'] = $this-> Admin_store-> reviewsCount();
	$data['reservation'] = $this->Admin_reservation-> getAllReservations();
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['reservedetails'] = $this->Admin_reservation-> reservedetails($table_reservation_id);
	
	//$data['reservedetails2'] = $this->Admin_reservation-> reservedetails2($table_reservation_id);
//print_r($data['reservedetails2']);die;

	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }





/*====================================================================================================================================================
reserve status edit controller
*/

	function reserveedit($table_reservation_id){  
	
	
	$data = $this->Admin_reservation-> reservestatusEdit($table_reservation_id);
	$this-> load-> vars($data);
	$this->session->set_userdata('successorder', ' The <strong>'.$table_reservation_id.'</strong> order status is successfully updated.');
	redirect('admin/table_reserve', 'location');
	
	}
/*====================================================================================================================================================
order delete controller
*/	
	function reservedelete($table_reservation_id){
	   
	$this->Admin_reservation-> reserveDelete($table_reservation_id);
	$this->session->set_userdata('successreservation', ' The <strong>'.$table_reservation_id.'</strong> reservation is successfully deleted.');	
	redirect('admin/table_reserve', 'location');
	
	}


/*reservation resourses */

/*====================================================================================================================================================
 add tables controller
*/	
	function add_reservation(){
	
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='products',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access product add  page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/table_reserve/add_reservation';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();	
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();

			$data['reservationadd'] = $this->Admin_reservation-> getAllReservations_add();
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	$data['admin_product_categories'] = $this->Admin_store-> getAllProductsCategories();

//	$data['reservation'] = $this->Admin_reservation-> getAllReservations();
	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    


	}



/*====================================================================================================================================================
update reservation resourses  controller
*/

	function resourseedit($table_reservation_resourceid){  
	
	
	$data = $this->Admin_reservation-> reserveresourseEdit($table_reservation_resourceid);
	$this-> load-> vars($data);
	$this->session->set_userdata('successorder', ' The <strong>'.$table_reservation_resourceid.'</strong> order status is successfully updated.');
	redirect('admin/table_reserve', 'location');
	
	}

/*********************************teeeeeeeeeeeeeeeeessssssssssstttt***************/


function test($test_id){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='reservation',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access about us page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/test'; //link view
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['reviewscount'] = $this-> Admin_store-> reviewsCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
   // $data['reservation'] = $this->Admin_reservation-> getAllReservations();
   // print_r($data['reservation']);die;
    $data['getalltest'] = $this-> Admin_test-> getAllTest();

	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();			
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	
	$data['admin_mainBranch'] = $this->Admin_about_us-> mainBranch();
	$data['admin_otherBranch'] = $this->Admin_about_us-> otherBranch();
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }


/*teeeeest deeeeeeeeelteee */

function testdelete($test_id){
	//print($test_id);die;
	   
	$this->Admin_test-> testdelete($test_id);
	$this->session->set_userdata('successreservation', ' The <strong>'.$test_id.'</strong> reservation is successfully deleted.');	
	redirect('admin/test', 'location');
	
	}


/*teeeeeeeeeeeeeest vvvvvvvvvvvvvviewwwwwwwwwwww*/

function test_view($test_id){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='orders',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access order details page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/test_view';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	 $data['reviewscount'] = $this-> Admin_store-> reviewsCount();

	 $data['getalltest'] = $this-> Admin_test-> getAllTest($test_id);

    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);

	$data['testdetails'] = $this->Admin_test-> testdetails($test_id);
	
	//$data['reservedetails2'] = $this->Admin_reservation-> reservedetails2($table_reservation_id);
//print_r($data['reservedetails2']);die;

	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }


/*teeeeeeeeeeeeeest vvvvvvvvvvvvvviewwwwwwwwwwww*/

    /*tttttttttttttttttttteessstt uppppppdaaaaateee*/


function test_update($test_id){
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='orders',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access order details page.');	
	redirect('/admin/','location');	
	}
	$data['main'] = 'admin/test_view';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	 $data['reviewscount'] = $this-> Admin_store-> reviewsCount();

	 $data['getalltest'] = $this-> Admin_test-> test_update();
	 
	

    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);

	$data['testdetails'] = $this->Admin_test-> testdetails($test_id);
	
	//$data['reservedetails2'] = $this->Admin_reservation-> reservedetails2($table_reservation_id);
//print_r($data['reservedetails2']);die;

	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }


/*
==========================================================================================
forget password
*/

function adminforgetpass(){
	


$this->load->library('form_validation');
 	$this->form_validation->set_rules('emailforget', 'email', 'valid_email|xss_clean');
	if($this->form_validation->run() == FALSE)
  	{
   	$this->session->set_userdata('erroradminlogin', 'Please Enter Valid Email!');
   	redirect('/admin/login','location');
  	}
  	else
  	{			
	
	if((isset($_POST['emailforget']))){
	$this->load->model('MDashboard');
    $rs_check=$this-> MDashboard->checkUser();
	if ( count($rs_check)<= 0 ) { 
		$this->session->set_userdata('erroradminlogin', 'Sorry No Such Account Exists!');
		redirect('/admin/login', 'location');
		//exit();
		}else{  
	
	
	function GenPwd($length = 7)
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
	 $new_pass = GenPwd();
	 
	
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
	
		$address = $_POST['emailforget'];
		$mail->AddAddress($address, "Guest");
	   
	
	$mail->Subject = "Property Mgt System Administrator reset password";
	
	//$this->load->model('Email_sub_code');
	//$data =$this-> Email_sub_code->getemailsubrcode();
	
	
	//$this   -> load   -> vars($data);
	//$new_pwd = GenPwd();
	//$pwd_reset = sha1($new_pass);
		
		
		
	  $pwd_reset=sha1($new_pass); 
	  $this-> MDashboard->passwordReset($pwd_reset);	
	
	$mail->Body ="Here are your new password details (Admin)...\n
	
	Password: $new_pass \n
	
	Thank You";
	
	
	
	if(!$mail->Send()){
		$this->session->set_userdata('erroradminlogin', 'PHPMailer Error:'. $mail->ErrorInfo.'');
		//echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	}else{
		echo "Message has been sent.Please Check Email and Spam too";
	}
	}
	
	
		$this->session->set_userdata('Successadminlogin', 'Password has been sent.Please Check Email and Spam too');
		redirect('/admin/login','location');
	}
			
			 
	}
		
				
	}
/*
====================================================================================================================================================
feedback details controller
*/		
		
	function send_news(){
	
	if (isset($_SESSION['admin_id'])) {
	//check user authentication
	if($this->MDashboard->getRoalAuth($path='news',$_SESSION['user_role_id'])){
	//if true do nothing
	}else{
	$this->session->set_userdata('erroruseraccess', ' The user cannot access news subcriber details  page.');	
	redirect('/admin/','location');	
	}
	//$this->Admin_feedback->feedbackread($feedback_id);
	$data['main'] = 'admin/news/send_news';
	$data['title'] = "Property Mgt System | Admin Dashboard";
	$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
	$data['feedcount'] = $this-> Admin_feedback-> feedbackCount();
	$data['feedhead'] = $this-> Admin_feedback-> feedheader();
	$data['orderscount'] = $this-> Admin_orders-> ordersCount();
    $data['reviewscount'] = $this-> Admin_store-> reviewsCount();
	$data['designordercount'] = $this-> Admin_design_orders-> designordersCount();			
		//get the "log in" admin informations
    $data['user_data'] = $this-> MDashboard-> getUserInfo($_SESSION['admin_id']);
	
	$data['admin_newssubcriber_details'] = $this->Admin_news-> newssubcriberDetails();

	
	$this-> load-> vars($data);
	$this   -> load   -> view('admin/dashboard_template');
	}else{
	redirect('admin/login', 'location');
	}
    }
/*
==========================================================================================
get reports
*/
	function getreport(){
	
	//order report		
		if($_POST['reporttype']=='order'){
		$data['title'] = "Property Mgt System ";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
		$data['orderd']=$this-> Admin_report->getorderreport();
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/order_report';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','32M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		//$html='<div>'.$productdetail['Detail']['product_name'].'</div>';
		
		//$footer="hhhh";
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		//$pdf->SetFooter('copyright@2014 Vision World OPTICALS '.'||'.date('Y-m-d').' / '.$time); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		$pdf->Output('Order Details', 'I'); // save to file because we can
		}	



//sales report		


		if($_POST['reporttype']=='income'){
		$data['title'] = "Property Mgt System";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
		$data['income']=$this-> Admin_report->getincomereport();
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/report_income';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','32M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		// Add a footer for good measure 
		
		$pdf->Output('Income', 'I'); // save to file because we can
		}


//design order growth


		if($_POST['reporttype']=='design order growth'){
		$data['title'] = "Property Mgt System";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
		$data['design']=$this-> Admin_report->getdesigngrowthreport();
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/design_growth';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','32M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		// Add a footer for good measure 
		
		$pdf->Output('Apparel Customization Growth', 'I'); // save to file because we can
		}	


//customer growth


		if($_POST['reporttype']=='cusgrowth'){
		$data['title'] = "Property Mgt System";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
		$data['design']=$this-> Admin_report->getCustomerGrowth();
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/customer_growth';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','32M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		// Add a footer for good measure 
		
		$pdf->Output('Customer Growth', 'I'); // save to file because we can
		}
//customer details
		if($_POST['reporttype']=='cusdetails'){
		$data['title'] = "Property Mgt System";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
		$data['design']=$this-> Admin_report->getCustomerDetails();
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/customer_details';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','64M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		// Add a footer for good measure 
		
		$pdf->Output('Customer Details', 'I'); // save to file because we can
		}
	
		
//admin details
		if($_POST['reporttype']=='sysuser'){
		$data['title'] = "Property Mgt System";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
		$data['user']=$this-> Admin_report->getsysUserDetails();
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/user_details';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','64M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		// Add a footer for good measure 
		
		$pdf->Output('System User Details', 'I'); // save to file because we can
		}
//			
//canceled orders
		if($_POST['reporttype']=='canceledorder'){
		$data['title'] = "Property Mgt System";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
		$data['orderd']=$this-> Admin_report->getcanceledsorderreport();
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/canceled_order';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','64M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		// Add a footer for good measure 
		
		$pdf->Output('Canceled order details', 'I'); // save to file because we can
	}	

//Pending orders
		if($_POST['reporttype']=='pendingorder'){
		$data['title'] = "Property Mgt System";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
		$data['orderd']=$this-> Admin_report->getpendingorderreport();
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/pending_order';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','64M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		// Add a footer for good measure 
		
		$pdf->Output('Pending order details', 'I'); // save to file because we can
	}
	
//Deleivered orders
		if($_POST['reporttype']=='deliveredorder'){
		$data['title'] = "Property Mgt System";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
		$data['orderd']=$this-> Admin_report->getdeliveredorderreport();
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/delivered_order';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','64M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		// Add a footer for good measure 
		
		$pdf->Output('Delivered order details', 'I'); // save to file because we can
	}


//Product detail report orders
		if($_POST['reporttype']=='productreport'){

		$data['title'] = "Property Mgt System";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
//main report query and orderd mean report check if  not empty
		$data['orderd']=$this-> Admin_report->getproductdetailreport();
//print_r($data['productDetails']);die;
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/product_detail_report';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','64M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		// Add a footer for good measure 
		
		$pdf->Output('Delivered order details', 'I'); // save to file because we can
	}


//*********************    TEST    ******************************//
	
//Product detail report orders
		if($_POST['reporttype']=='test'){

		$data['title'] = "Property Mgt System";
		
		$this->load->model('CompanyDetails');
		$this->load->model('OrderDetails');
		$this->load->model('Admin_apperal');
		
		$data['logo']=$this-> CompanyDetails-> getLogo();
		
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails();
//main report query and orderd mean report check if  not empty
		$data['testt']=$this-> Admin_report->getedesigndetailreport();
//print_r($data['productDetails']);die;
		$data['start']=$this->input->post('from');
		$data['end']=$this->input->post('to');		
		
		$data['main'] = 'admin/report/test';
		date_default_timezone_set('Asia/Kolkata');
		$time= date("h:i:s A");
		
		
		
		ini_set('memory_limit','64M'); // boost the memory limit if it's low <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley firstChild">
		$html = $this->load->view('admin/report/report_temp', $data, true); // render the view into HTML
		
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetWatermarkImage('http://localhost/new_monis_bakery/assets/images/logo.png', 1, array(150,68), array(29,110));
		$pdf->showWatermarkImage = true;
		$pdf->watermarkImageAlpha = 0.05;
		// $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="http://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley lastChild">
		
		
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$pdf->SetHTMLFooter('
		<hr style="margin-bottom:-0.5mm" color="#000000"/><table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 6pt; color: #000000;font-weight: bold;  font-style: italic;"><tr>
		<td width="33%"><span style=" font-style: italic;">copyright@2015 Property Mgt System.</span></td>
		<td width="33%" align="center" style="font-weight: bold; font-style: italic;"></td>
		<td width="33%" style="text-align: right; ">{DATE j-m-Y} / '.$time.'</td>
		</tr></table>
		');
		
		// Add a footer for good measure 
		
		$pdf->Output('test', 'I'); // save to file because we can
	}

	
/*====================================================================================================================================================
main branch edit controller
*/	
	/*function mainbranchedit($branch_id){	    
	$this->Admin_about_us-> mainbranchsEdit($branch_id);
	$this->session->set_userdata('successbranch', ' The <strong>mian branch details </strong> successfully updated.');	
	redirect('admin/branch_information', 'location');
	
	}
/*====================================================================================================================================================
other branch edit controller
*/	
	/*function otherbranchadd(){
	$location= trim($_POST['location']);	    
	$this->Admin_about_us-> otherbranchsAdd();
	$this->session->set_userdata('successbranch', ' The <strong>'.$location.'</strong> branch details successfully added.');	
	redirect('admin/branch_information', 'location');
	
	}
/*====================================================================================================================================================
other branch edit controller
*/	
	/*function otherbranchedit($branch_id){
	$location= trim($_POST['location']);		    
	$this->Admin_about_us-> otherbranchsEdit($branch_id);
	$this->session->set_userdata('successbranch', ' The <strong>'.$location.'</strong> branch details successfully updated.');	
	redirect('admin/branch_information', 'location');
	
	}
*/
				
}	





}



