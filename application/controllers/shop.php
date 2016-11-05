<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

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
		}
	
	public function index() {	
		$data['title'] = "Property Mgt System";
		$data['main'] = 'home';
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['slider1']=$this-> MainSlider->slider1(); //get main slider1 details
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
		//$data['categories'] = $this->Store->getAllMenCategories();
		//$data['brands'] = $this->Store->getbrand();
		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		}
		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
	
	}
		
				
/*============================================================================
 view single products details page.
 */
	
	 public function products_catalog()
	   {	
	   	$data['getallcategories'] = $this->Store->getAllCategories();
	   		
	   	$data['product'] = $this->Store->getAllCategoryProducts( );
	  // 	print_r($data['product']);die;
	  	//$data['getall'] = $this->Store->getAllProduct();
	   	
	


	//	$data['Wcategories'] = $this->Store->getAllWomenCategories();
		//$data['categories'] = $this->Store->getAllMenCategories();
		//$data['kidsGirlcategories'] = $this->Store->getAllKidsGirlCategories();
		//$data['kidscategories'] = $this->Store->getAllKidsCategories();
	
		$this   -> load   -> vars($data);
		$this -> view('category_all');
		
	}

public function product_catergory()
		{	



		$_SESSION['priceFrom']=0;
		$_SESSION['priceTo']=100000;


		$pid 				= 	$this->uri->segment(3);
			//price
	   	   if(isset($_POST['pricefrom']) && $_POST['pricefrom']!='' && is_numeric($_POST['pricefrom'])){
		    $_SESSION['priceFrom']=$_POST['pricefrom'];
		   }
	       if(isset($_POST['priceto']) && $_POST['priceto']!='' && is_numeric($_POST['priceto'])){
		    $_SESSION['priceTo']=$_POST['priceto'];
		   }
		$data['catname'] = $this->Store->getCategoryName($pid);
		$data['product'] = $this->Store->getAllCategoryProduct($pid);
		$this   -> load   -> vars($data);
		$this -> view('category_products');
		
 		}
		
				
//============================================================================
// view single products details page.
	
	 public function product_details($product_id)
	 
	  {

	 
	  	$pid = 	$this->uri->segment(3);

	  	$data['product_details'] = $this->Store->productDetails($pid); //product details

	  	$category= $data['product_details']->result_array[0]['product_type_id'];
	  	$data['related_product'] = $this->Store->relatedProduct($pid,$category);
	  //	echo count($data['related_product']);die;
		$this->load->model('Product_Comment'); 
		
	
		$data['product_comment'] = $this-> Product_Comment-> getProductcomment($pid );
		$data['count_comment'] = $this-> Product_Comment-> count_all($pid );
	
		$this  -> load  -> vars($data);
		
		$this -> view('product_details');
		
	    }
		
				
//============================================================================
// get relevent size for color in single products details page.
			
		 public function product_color_details($product_id,$color_id)
		 {	
		 $return = array();
	   	 
         $return['msg'] = '';
		 $productSize= 	$this->Store->getSizeD($product_id,$color_id);
		 if (count($productSize)){ 
		 foreach ($productSize-> result_array() as $products){
		 $return['msg'].='<li>
								<input id="'.$products['type'].'" value="'.$products['type'].'" type="radio" name="size" style=" display:inline; " required="required" />
								<label for="'.$products['type'].'"><b>'.$products['type'].'</b></label>
							</li>';
				}
				}
		
		echo json_encode($return);
		
		
		
	}


/*	

=====================================================================================
product view.
*/		
		
	public function product_View()
		{		
		$pid 				= 	$this->uri->segment(3);
//		echo $pid;die;

		$data['catname'] = $this->Store->getCategoryName($pid);
		$data['product'] = $this->Store->getAllCategoryProduct($pid);
		$this   -> load   -> vars($data);
		$this -> view('product_view');
		
 		}
		
		
		
/*
===============================================================================================
Cart controler
*/		
	public function shopping_bag()
		{		
		
		//$this   -> load   -> vars($data);
		$this -> view('Shopping_cart');
		
 		}
/*
===============================================================================================
add to cart controler
*/		

	public function add()
	{
		
	if (!isset($_SESSION['user_id']) || $_SESSION['user_id']=='')
			{		 redirect('/pages/signin', 'location');	 		
	}else{
	
		


		$insert_room = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => $this->input->post('qty'),
			'img'=> $this->input->post('img'),
			'dilivery_date'=> $this->input->post('dilivery_date'),

			
			
		);	
		

		
		$oldQuantity=$this->Store->getQuantity($insert_room['id']);
		$reOrderlevel=$this->Store->getreOrderlevel($insert_room['id']);
		$newQuantity=$oldQuantity-$insert_room['qty'];
		
		if($newQuantity < $reOrderlevel){
		$this->session->set_userdata('errorcart', 'The '.$insert_room['name'].' is out of stock. Please adjust your order quantity!');	
		redirect('shop/shopping_bag/'.$reOrderlevel.'/'.$newQuantity.'/');	
		}else{
			
		$this->cart->insert($insert_room);
			
		redirect('shop/shopping_bag/');
		}
		
		}
	}
/*
===============================================================================================
update cart controler
*/		
	function update_cart2(){
		foreach($_POST['cart'] as $id => $cart)
		{ 
			echo 'price '.$cart['price']; echo '<br/>';
			echo 'qty '. $cart['qty']; echo '<br/>';
			echo 'amount '.$cart['price'] * $cart['qty']; echo '<br/>';
		}
	}
		
	function update_cart(){
 		foreach($_POST['cart'] as $id => $cart)
		{ 
			//echo "hit";die;
			$price = $cart['price'];
			$qty=$cart['qty'];
			$amount = $price * $cart['qty'];
			//$oldQuantity=$cart['Maxqty'];
			$Relevel=$cart['Relevel'];
			$name=$cart['name'];
			//$newQuantity=$oldQuantity-$qty;
			
			//echo $Relevel;die;

			if($qty > $Relevel){
				$data['error'][$cart['id']]="************";
				$this->session->set_userdata('errorcart', 'The '.$name.' is out of stock. Please adjust your order quantity.');
				}else{
				 $data['error'][$cart['id']]='';
		         $this->ShoppingCart->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
				}
		     }
		
	
		redirect('shop/shopping_bag/');
		
	}
	
/*
===============================================================================================
remove item in cart controler
*/		
	
	function remove($rowid) {
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		$data['error']=$error;
		redirect('shop/shopping_bag');
	}	
		/*public function checkout($user_arr)
		{		
		
	     $user_arr = array ( 
		'name' => 'f',
		'age' => 'h'
		 ); 
		$_SESSION['userarr'] = $user_arr;
  
   	//redirect('shop/checkout', 'location');
		//$this   -> load   -> vars($data);
		$this -> view('check');
		
 		}*/
/*
===============================================================================================
product search controler
*/		
		
public function search()

		{		

		$this->load->library('form_validation');/* there is no point of autoloding this library*/
		$this->form_validation->set_rules('search', 'invalid Value', 'trim|required|xss_clean');
		if($this->form_validation->run() == FALSE){
		$search='';
		}else{$search=$this->input->post('search');}
		$data['search_data']= $this-> Store-> getSearch($search);
		
		$data['title'] = "Property Mgt System ";
		$data['main'] = 'products_search';//news page
		$data['logo']=$this-> CompanyDetails-> getLogo(); //get company logo
		$data['main_details']=$this-> CompanyDetails->getMainBranchDetails(); //get main branch details 
		$data['getallcategories'] = $this->Store->getAllCategories();
	//	$data['newitems'] = $this->Store->newItems();


		if (isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) {
		$data['user_data'] = $this-> Member-> getUserInfo($_SESSION['user_id']);//get user informations
		 }

		$this   -> load   -> vars($data);
		$this   -> load   -> view('page_template');
		
 		}
		 
}
/* End of file shop.php */
/* Location: ./application/controllers/shop.php */