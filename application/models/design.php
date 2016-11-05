<?php
class Design extends CI_Model {
	
	
	
	function __construct(){
		parent::__construct();
	}
/*
=====================================================================================
This function will be get products details from products table:
*/	
				function count_all($category_id){
					$sql= 'SELECT COUNT( * ) AS numrows
					FROM customize_apparel_product					
					WHERE customize_apparel_product.customize_apparel_category_id = '.$category_id.'';
					
					
					$Q = $this-> db-> query($sql);
					return $Q->row ()->numrows;
				}
	                
                function getAllApparelCategory()
				{	
				$sql = 'SELECT   *
				FROM  customize_apparel_category ORDER BY apparel_category_id ASC ';

				$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";
			
				
				}
				
				
				function getCategoryProducts($category_id,$limit,$start)
				{
				//$otherconditions='';
				if(!isset($_SESSION['porderby'])) $_SESSION['porderby']='apparel_product_id';
				//if(isset($_SESSION['filter'])) $otherconditions=$_SESSION['filter'];								
				$sql="SELECT customize_apparel_product. * , customize_apparel_category.name FROM customize_apparel_product

				INNER JOIN customize_apparel_category ON customize_apparel_product.customize_apparel_category_id = customize_apparel_category.apparel_category_id
				
				WHERE  customize_apparel_product.customize_apparel_category_id= ".$category_id." ORDER BY ".$_SESSION['porderby']."  ASC LIMIT ".$start.",".$limit;
				
				$result = $this->db->query($sql);
				if($result->num_rows()>0){
				return $result->result();
				}else{
				return 'empty';
				}
				}
				
				
				function getNumCatProducts($category_id){
				$result = $this->db->query('SELECT  * FROM  `customize_apparel_product` WHERE  `customize_apparel_category_id` = '.$category_id.'');
				if($result->num_rows()>0){
				return $result->num_rows();
				}else{
				return 0;
				}
				}
				
				
				function productsDetails($customize_apparel_category_id, $apparel_product_id){
	
				$sql='SELECT customize_apparel_product. *, customize_apparel_category.name
				FROM customize_apparel_product				
			
				JOIN customize_apparel_category ON customize_apparel_category.apparel_category_id = customize_apparel_product.customize_apparel_category_id
				
				WHERE customize_apparel_product.customize_apparel_category_id = '.$customize_apparel_category_id.'
				AND customize_apparel_product.apparel_product_id = '.$apparel_product_id.'';
					$Q = $this-> db-> query($sql);
					foreach ($Q-> result_array() as $row){
						}
					return $Q;				
				
				}
				
				
				function getAllArtWorkCategory()
				{	
				$sql = 'SELECT   *
				FROM  artwork_category';
					$Q = $this-> db-> query($sql);
					foreach ($Q-> result_array() as $row){
						}
					return $Q;			
				
				}
				
					function getArtwork($artwork_category_id){
					$sql='SELECT artwork.*,artwork_category.art_cat_name
					FROM  artwork
					INNER JOIN artwork_category ON artwork.`artwork_category_id` = artwork_category.`artwork_category_id`					
					
					WHERE artwork_category.`artwork_category_id` ='.$artwork_category_id.'';
					$Q=$this->db->query($sql);
					foreach ($Q-> result_array() as $row){
						}
					return $Q;
					
					
					
					}
				function getArtworks(){
					$sql='SELECT artwork.*,artwork_category.art_cat_name
					FROM  artwork
					INNER JOIN artwork_category ON artwork.`artwork_category_id` = artwork_category.`artwork_category_id`					
					';
					$Q=$this->db->query($sql);
					foreach ($Q-> result_array() as $row){
						}
					return $Q;
					
					
					
					}
					
/*======================================================================================================================
add design order
*/
	function designorderAdd($cat_id, $apparel_id){
		//redirect('customize/cake_design/1/2', 'location');
		$amount= trim($_POST['price']);
		$comment= trim($_POST['comment']);
		$qty= trim($_POST['qty']);
		$size= trim($_POST['size']);
		$dilivery_date= trim($_POST['dilivery_date']);
		$date=date('Y-m-d');
		$user=$_SESSION['user_id'];
		//front design image upload
		if (isset($_FILES['front']['tmp_name']) && $_FILES['front']['tmp_name'] != '') {
	
		$file=$_FILES['front']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['front']['tmp_name']));
		$image_name= addslashes($_FILES['front']['name']);
		$image_size= getimagesize($_FILES['front']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errordesign', ' Please upload a image file for front design.');	
			redirect('customize/cake_design/1/1', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["front"]["tmp_name"],"assets/images/design/orders/" . $_FILES["front"]["name"]); 
			$front=$_FILES["front"]["name"];   
		}
		
		}
		if (isset($_FILES['back']['tmp_name']) && $_FILES['back']['tmp_name'] != '') {
	
		$file=$_FILES['back']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['back']['tmp_name']));
		$image_name= addslashes($_FILES['back']['name']);
		$image_size= getimagesize($_FILES['back']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errordesign', ' Please upload a image file for back design.');	
			redirect('customize/cake_design/'.$cat_id.'/'.$apparel_id.'', 'location');	
			
		}else{
			
			move_uploaded_file($_FILES["back"]["tmp_name"],"assets/images/design/orders/" . $_FILES["back"]["name"]); 
			$back=$_FILES["back"]["name"];   
		}
		
		}
		//print_r($_POST);die;			
		$sql="INSERT INTO `design_order`( `design_front_img`, `design_back_img`, `amount`, `comment`, `qty`, `size`, 
		 `order_date`, `customer_id` ,`dilivery_date`) VALUES ('$front','$back','$amount','$comment','$qty','$size','$date',
		'$user' , '$dilivery_date')";

		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errordesign', ' Unable to  add order.');	
	    redirect('customize/cake_design/'.$cat_id.'/'.$apparel_id.'', 'location');	
		}else{
		return true;		
		}
		
	
	}					
					
/*======================================================================================================================
get  order id details	
*/
function getorderid(){
	
	$comment = trim($_POST['comment']);
		
		$sql= "SELECT design_order_id
		FROM `design_order`
		WHERE comment = '$comment'
		AND customer_id =".$_SESSION['user_id']."";
		
		$Q = $this-> db-> query($sql);
	if ($Q-> num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$d = $row['design_order_id'];
	}
	return $d;
	
	}
	}					
					
/*======================================================================================================================
add order details	
*/	
	function orderdetailsAdd($design_order_id){
		
		$x=0;
		$y=0;
		
		//$size=array();
		foreach ($_POST['size'] as $item){
		$size[$y++]=$item;
		}
		
		if(isset($_POST['qty'])){
			
		foreach ($_POST['qty'] as $qty){

		$sql= "INSERT INTO 
		`design_order_details`(`design_order_id`,`size`,`quantity`)
		VALUES ('$design_order_id','$size[$x]','$qty' )";	
		//echo $sql;die;	
		$Q = $this-> db-> query($sql);
		$this->db->insert($Q);
		$x=$x+1;
		
		}
		
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errordesign', ' Unable to  add the same details. one record added.');	
	    //redirect('admin/products', 'location');	
		}else{
		return true;		
		}
		}
	}			
					
					
					
					
					
					
					
					
					
					
					
					
				
/*


=====================================================================================
This function will be get women products details from products table:
*/	
				function count_all_women($cat_id){
					$sql= 'SELECT COUNT( * ) AS numrows
					FROM product
					JOIN product_people ON product_people.product_id = product.product_id
					WHERE product.product_type_id = '.$cat_id.'
					AND product_people.people_cat_id ="1"';
					
					$Q = $this-> db-> query($sql);
					return $Q->row ()->numrows;
				}
				
						
				function getAllWomenCategories()
				{	
				$sql = 'SELECT  product_type. * ,  product_type_people.people_cat_id
				FROM  product_type
				JOIN product_type_people ON product_type_people.product_type_id = product_type.product_type_id
				WHERE product_type_people.people_cat_id ="1"';

				$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";
				}
				function getWomenCategoryProducts($cat_id,$limit,$start)
				{
				$otherconditions='';
				if(!isset($_SESSION['orderby'])) $_SESSION['orderby']='product_id';
				if(isset($_SESSION['filter'])) $otherconditions=$_SESSION['filter'];				
				$sql="SELECT product. * , product_people.people_cat_id,brand.brand_name, color.color_name, product_type.type_name FROM product

				INNER JOIN product_type ON product.product_type_id = product_type.product_type_id
				INNER JOIN product_color ON product.product_id = product_color.product_id 
				INNER JOIN color ON product_color.color_id = color.color_id
				INNER JOIN brand ON product.brand_id = brand.brand_id
				JOIN product_people ON product_people.product_id = product.product_id
				WHERE product_people.people_cat_id = '1'
				AND product.product_type_id= ".$cat_id." ".$otherconditions." ORDER BY ".$_SESSION['orderby']."  DESC LIMIT ".$start.",".$limit;
				$result = $this->db->query($sql);
				if($result->num_rows()>0){
				$_SESSION['product_count']=$result->num_rows();
				return $result->result();
				}else{
				return 'empty';
				}
				}
				
/*


=====================================================================================
This function will be get kids boy products details from products table:
*/	
				function count_all_kids($cat_id){
					$sql= 'SELECT COUNT( * ) AS numrows
					FROM product
					JOIN product_people ON product_people.product_id = product.product_id
					WHERE product.product_type_id = '.$cat_id.'
					AND product_people.people_cat_id ="3"';
					
					$Q = $this-> db-> query($sql);
					return $Q->row ()->numrows;
				}
				
						
				function getAllKidsCategories()
				{	
				$sql = 'SELECT  product_type. * ,  product_type_people.people_cat_id
				FROM  product_type
				JOIN product_type_people ON product_type_people.product_type_id = product_type.product_type_id
				WHERE product_type_people.people_cat_id ="3"';

				$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";
				}
				function getKidsCategoryProducts($cat_id,$limit,$start)
				{
				$otherconditions='';
				if(!isset($_SESSION['orderby'])) $_SESSION['orderby']='product_id';
				if(isset($_SESSION['filter'])) $otherconditions=$_SESSION['filter'];				
				$sql="SELECT product. * , product_people.people_cat_id,brand.brand_name, color.color_name, product_type.type_name FROM product

				INNER JOIN product_type ON product.product_type_id = product_type.product_type_id
				INNER JOIN product_color ON product.product_id = product_color.product_id 
				INNER JOIN color ON product_color.color_id = color.color_id
				INNER JOIN brand ON product.brand_id = brand.brand_id
				JOIN product_people ON product_people.product_id = product.product_id
				WHERE product_people.people_cat_id = '3'
				AND product.product_type_id= ".$cat_id." ".$otherconditions." ORDER BY ".$_SESSION['orderby']."  DESC LIMIT ".$start.",".$limit;
				$result = $this->db->query($sql);
				if($result->num_rows()>0){
				$_SESSION['product_count']=$result->num_rows();
				return $result->result();
				}else{
				return 'empty';
				}
				}				
				
				
/*


=====================================================================================
This function will be get kids girl products details from products table:
*/	
				function count_all_kids_Girl($cat_id){
					$sql= 'SELECT COUNT( * ) AS numrows
					FROM product
					JOIN product_people ON product_people.product_id = product.product_id
					WHERE product.product_type_id = '.$cat_id.'
					AND product_people.people_cat_id ="4"';
					
					$Q = $this-> db-> query($sql);
					return $Q->row ()->numrows;
				}
/*


=====================================================================================
This function will be get kids girl products category
*/
					
						
				function getAllKidsGirlCategories()
				{	
				$sql = 'SELECT  product_type. * ,  product_type_people.people_cat_id
				FROM  product_type
				JOIN product_type_people ON product_type_people.product_type_id = product_type.product_type_id
				WHERE product_type_people.people_cat_id ="4"';

				$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";
				}
				
/*


=====================================================================================
This function will be get kids girl products details from products table:
*/	
					
				function getKidsGirlCategoryProducts($cat_id,$limit,$start)
				{
				$otherconditions='';
				if(!isset($_SESSION['orderby'])) $_SESSION['orderby']='product_id';
				if(isset($_SESSION['filter'])) $otherconditions=$_SESSION['filter'];				
				$sql="SELECT product. * , product_people.people_cat_id,brand.brand_name, color.color_name, product_type.type_name FROM product

				INNER JOIN product_type ON product.product_type_id = product_type.product_type_id
				INNER JOIN product_color ON product.product_id = product_color.product_id 
				INNER JOIN color ON product_color.color_id = color.color_id
				INNER JOIN brand ON product.brand_id = brand.brand_id
				JOIN product_people ON product_people.product_id = product.product_id
				WHERE product_people.people_cat_id = '4'
				AND product.product_type_id= ".$cat_id." ".$otherconditions." ORDER BY ".$_SESSION['orderby']."  DESC LIMIT ".$start.",".$limit;
				$result = $this->db->query($sql);
				if($result->num_rows()>0){
				$_SESSION['product_count']=$result->num_rows();
				return $result->result();
				}else{
				return 'empty';
				}
				}				
/*


=====================================================================================
This function will be get search result:
*/	
					
				function getSearch($id){
				$Q = $this->db->query("SELECT product. * ,  product_type.type_name
				FROM product
				JOIN product_type ON product_type.product_type_id = product.product_type_id 
				WHERE  product_type.type_name LIKE '%".$id."%'
				OR product.product_id LIKE '%".$id."%'
				OR product.price LIKE '%".$id."%'
				OR product.product_name LIKE '%".$id."%'");
				return $Q->result_array();		
		        }
/*


=====================================================================================
This function will be product type name:
*/	
		 
				function getname($category_id){
				

				$Q = $this->db->query('SELECT name
								FROM customize_apparel_category
								
								WHERE apparel_category_id = '.$category_id.'');
				if ($Q-> num_rows() > 0){
				foreach ($Q->result_array() as $row){
				$type_name= $row['name'];
				}
				return $type_name;
				}
				}
				
				
//====================================================================================================================================

//  display related products.

				function relatedProducts($people_cat_id, $product_type_id, $product_id)
				{
						
				$sql= 'SELECT product. *
				FROM product
				JOIN product_people ON product_people.product_id = product.product_id
				WHERE product.product_type_id = '.$people_cat_id.'
				AND product_people.people_cat_id = '.$product_type_id.'
				AND product.product_id != '.$product_id.'
				ORDER BY product.product_id DESC';
				
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				}
				return $Q;
				
				}
				
//====================================================================================================================================

//  display related products.

				function relatedProductsSearch($product_type_id, $product_id)
				{
				$sql= 'SELECT product. *
				FROM product
				WHERE product.product_type_id = '.$product_type_id.'
				AND product.product_id != '.$product_id.'
				ORDER BY product.product_id DESC';
				
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				}
				return $Q;
				}				

//======================================================================================================

// display new items limit 5 products.

				function newItems(){
				$sql = 'SELECT *
				FROM product
				ORDER BY product.product_id DESC
				LIMIT 5' 
				;
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				}
				return $Q;
				}


}
?>