<?php
class Store extends CI_Model {
	
	
	
	function __construct(){
		parent::__construct();
	}
/*
=====================================================================================
This function will be gets men products details from products table:
*/	
				function count_all($cat_id){
			
				$price="&& `price` >= ".$_SESSION['priceFrom']." && `price` <= ".$_SESSION['priceTo']." ";				
				$sql="SELECT COUNT( * ) AS numrows 
				FROM product
				INNER JOIN product_type ON product.product_type_id = product_type.product_type_id
				INNER JOIN brand ON product.brand_id = brand.brand_id
				JOIN product_people ON product_people.product_id = product.product_id
				WHERE product_people.people_cat_id = '2'
				AND product.product_type_id= ".$cat_id." ".$price."  ".$_SESSION['brand']." ";
					$Q = $this-> db-> query($sql);
					return $Q->row ()->numrows;
				}
/*
=====================================================================================
This function will be gets men products details from products table:
*/	
	                
                function getAllMenCategories()
				{	
				$sql = 'SELECT  product_type. * ,  product_type_people.people_cat_id
				FROM  product_type
				JOIN product_type_people ON product_type_people.product_type_id = product_type.product_type_id
				WHERE product_type_people.people_cat_id ="2"';

				$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";
				}
			
/*
=====================================================================================
This function will be gets men products details from products table:
*/	
				
					
		
				function getLatestProducts()
				{
				
				$this->db->select("*");
				$this->db->limit(5,0);
				$this->db->order_by('product_id','DESC');
				$result = $this->db->get('product');
				if($result->num_rows()>0)
				return $result->result();
				else
				return 'empty';
				
				}	
		
/*
=====================================================================================
This function will be shoe catergory from products table:
*/	


		function getCategoryName ($id){

			$sql=$this->db->query('SELECT  `type_name` FROM `product_type` WHERE product_type_id = '.$id.'');
			if ($sql->num_rows() >0) {
				foreach ($sql->result_array() as $row) {
					$type_name = $row['type_name'];
				}
				return $type_name;
			}



		}


/*
=====================================================================================
This function will bdetails from products table:
*/




/*
=====================================================================================
This function  details from products table:
*/


		
				function getCategoryProducts($cat_id,$limit,$start)
				{
				//$otherconditions='';
				//$_SESSION['priceFrom']=0;
				if(!isset($_SESSION['orderby'])) $_SESSION['orderby']='price';
				if(!isset($_SESSION['orderbymen'])) $_SESSION['orderbymen']='ASC';
				//if(!isset($_SESSION['color'])){ $_SESSION['colorq']='color.color_name,';} else {$_SESSION['colorq']=''; }
				if(!isset($_SESSION['priceFrom'])) $_SESSION['priceFrom']='0';
				if(!isset($_SESSION['priceTo'])) $_SESSION['priceTo']='100000';
				$price="&& `price` >= ".$_SESSION['priceFrom']." && `price` <= ".$_SESSION['priceTo']." ";				
				$sql="SELECT DISTINCT  product. * , product_people.people_cat_id,brand.brand_name, product_type.type_name FROM product

				INNER JOIN product_type ON product.product_type_id = product_type.product_type_id
				INNER JOIN product_color_size ON product.product_id = product_color_size.product_id 
				INNER JOIN color ON product_color_size.color_id = color.color_id
				INNER JOIN size ON product_color_size.size_id = size.size_id
				INNER JOIN brand ON product.brand_id = brand.brand_id
				JOIN product_people ON product_people.product_id = product.product_id
				WHERE product_people.people_cat_id = '2'
				AND product.product_type_id= ".$cat_id." ".$price."  ".$_SESSION['size']." ".$_SESSION['brand']."  ".$_SESSION['color']." ORDER BY ".$_SESSION['orderby']." ".$_SESSION['orderbymen']." LIMIT ".$start.",".$limit;
				
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
This function will be gets men products details from products table:
*/	
				
				function getNumCatProducts($cat_id){
				$result = $this->db->query('SELECT  * FROM  `product` WHERE  `product_type_id` ='.$cat_id);
				if($result->num_rows()>0){
				return $result->num_rows();
				}else{
				return 0;
				}
				}
				
				/*function getProductDetails($id)
				{
				
				$this->db->select("*");
				$this->db->where('product_id',$id);
				$result = $this->db->get('product');
				if($result->num_rows()>0)
				return $result->row();
				else
				return 'empty';
				
				}*/
/*
=====================================================================================
This function will be gets men products details from products table:
*/	
				
				function productDetails($product_id){
	
				$sql='SELECT  * FROM product				
				
				WHERE  product_id = '.$product_id.'';
					$Q = $this-> db-> query($sql);
					foreach ($Q-> result_array() as $row){
						}
					return $Q;				
				
				}
/*
=====================================================================================
This function will be gets men products details from products table:
*/	
				
				function productsDetails1($product_type_id, $product_id){
	
				$sql='SELECT product. *, product_type.type_name
				FROM product				
			
				JOIN product_type ON product_type.product_type_id = product.product_type_id
				
				WHERE product.product_type_id = '.$product_type_id.'
				AND product.product_id = '.$product_id.'';
					$Q = $this-> db-> query($sql);
					foreach ($Q-> result_array() as $row){
						}
					return $Q;				
				
				}
				/*function getSize($product_id){
					$sql='SELECT  product.product_name,size.type,color.color_name
					FROM  product_color_size
					INNER JOIN product ON product_color_size.`product_id` = product.`product_id`
					INNER JOIN size ON product_color_size.`size_id` = size.`size_id`
					INNER JOIN color ON product_color_size.`color_id` = color.`color_id`
					
					WHERE product_color_size.`product_id` ='.$product_id.'';
					$Q=$this->db->query($sql);
					foreach ($Q-> result_array() as $row){
						}
					return $Q;
					
					
					
					}*/
					
/*
=====================================================================================
This function will be gets men products details from products table:
*/	
					
				function getProductcolors($product_id){
					$sql='SELECT DISTINCT product_color_size.color_id, product_color_size.product_id,  color.color_name
					FROM  product_color_size	
					INNER JOIN color ON product_color_size.`color_id` = color.`color_id`
					
					WHERE product_color_size.`product_id` ='.$product_id.'';
					$Q=$this->db->query($sql);
					foreach ($Q-> result_array() as $row){
						}
					return $Q;
					}					
/*
=====================================================================================
This function will be gets men products details from products table:
*/	
					
				function getSizeD($product_id,$color_id){
					$sql='SELECT product_color_size.*, size.type, color.color_name
					FROM  product_color_size
					INNER JOIN product ON product_color_size.`product_id` = product.`product_id`
					INNER JOIN size ON product_color_size.`size_id` = size.`size_id`
					INNER JOIN color ON product_color_size.`color_id` = color.`color_id`
					AND product_color_size.`color_id`='.$color_id.'
					WHERE product_color_size.`product_id` ='.$product_id.'';
					$Q=$this->db->query($sql);
					foreach ($Q-> result_array() as $row){
						}
					return $Q;
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
				
/*
=====================================================================================
This function will be gets ALL CATERGORY products details from products table:
*/	
						
				function getAllCategories()
				{	
				$sql = 'SELECT   * 
				FROM  product_type 
				WHERE status ="active"';
		
				

				$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";
				}
				
/*
=====================================================================================
This function will be gets ALL CATERGORY details from products table:
*/	


/*
=====================================================================================
This function will be gets  PRODUCT details from products table:
*/	
						
				function getAllCategoryProduct($id)
				{	
				//$price="&& `price` >= ".$_SESSION['priceFrom']." && `price` <= ".$_SESSION['priceTo']." ";	
				$sql = 'SELECT   * 
				FROM  product ';
				
				//.//''.$price="&& `price` >= ".$_SESSION['priceFrom']." && `price` <= ".$_SESSION['priceTo'].'';
		
			
				$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";
				}
/*
=====================================================================================
This function will be gets  PRODUCT details from products table:
*/	
						
				function getAllCategoryProducts()
				{	
				$sql = 'SELECT   * 
				FROM  product';
		
			
				$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";
				}				
/*
=====================================================================================
This function will be  products details from products table:
*/

	
				function getWomenCategoryProducts($cat_id,$limit,$start)
				{
				
				if(!isset($_SESSION['sortbywomen'])) $_SESSION['sortbywomen']='price';
				if(!isset($_SESSION['orderbywomen'])) $_SESSION['orderbywomen']='ASC';
				$price="&& `price` >= ".$_SESSION['priceFrom']." && `price` <= ".$_SESSION['priceTo']." ";				
				$sql="SELECT DISTINCT  product. * , product_people.people_cat_id,brand.brand_name,  product_type.type_name 
				FROM product
				INNER JOIN product_type ON product.product_type_id = product_type.product_type_id
				INNER JOIN product_color_size ON product.product_id = product_color_size.product_id 
				INNER JOIN color ON product_color_size.color_id = color.color_id
				INNER JOIN size ON product_color_size.size_id = size.size_id
				INNER JOIN brand ON product.brand_id = brand.brand_id
				JOIN product_people ON product_people.product_id = product.product_id
				WHERE product_people.people_cat_id = '1'
				AND product.product_type_id= ".$cat_id." ".$price." ".$_SESSION['size']." ".$_SESSION['brandOpt']."  ".$_SESSION['color']." ORDER BY ".$_SESSION['sortbywomen']."  ".$_SESSION['orderbywomen']."  LIMIT ".$start.",".$limit;
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
		 
				function getname($cat_id){
				

				$Q = $this->db->query('SELECT type_name
								FROM product_type
								
								WHERE product_type_id = '.$cat_id.'');
				if ($Q-> num_rows() > 0){
				foreach ($Q->result_array() as $row){
				$type_name= $row['type_name'];
				}
				return $type_name;
				}
				}
				
				
//====================================================================================================================================

//  display related products.

				function relatedProducts($people_cat_id, $product_type_id, $product_id)
				{
						
				$sql= 'SELECT DISTINCT product. *, product_type.type_name
				FROM product
				JOIN product_people ON product_people.product_id = product.product_id
				JOIN product_color_size ON product_color_size.product_id = product.product_id
				JOIN product_type ON product_type.product_type_id = product.product_type_id
				WHERE product.product_type_id = '.$product_type_id.'
				AND product_people.people_cat_id = '.$people_cat_id.'
				AND product.product_id != '.$product_id.'
				ORDER BY product.product_id DESC';
				
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				}
				return $Q;
				
				}

			function relatedProduct($product_id,$category){
				$sql= 'SELECT DISTINCT product. *
				FROM product
				WHERE 
				product_id !='.$product_id.'
				and product_type_id='.$category.'
				ORDER BY product_id DESC';
				
				$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";
				}
				
//====================================================================================================================================

//  display related products.

				function relatedProductsSearch($product_type_id, $product_id)
				{
				$sql= 'SELECT DISTINCT  product. *, product_type.type_name
				FROM product
				JOIN product_color_size ON product_color_size.product_id = product.product_id
				JOIN product_type ON product_type.product_type_id = product.product_type_id
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
				$sql = 'SELECT *,product_type.type_name
				FROM product
				JOIN product_type ON product_type.product_type_id = product.product_type_id 
				ORDER BY product.product_id DESC
				LIMIT 5' 
				;
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				}
				return $Q;
				}

						
//======================================================================================================

// display all brands in products.

				function getbrand(){
				$sql = 'SELECT *
				FROM  brand	';
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				}
				return $Q;
				}
											
//======================================================================================================

// display all colors in products.

				function getcolor(){
				$sql = 'SELECT *
				FROM  color	';
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				}
				return $Q;
				}

//======================================================================================================
//get relevent color id
 			function getcolorId($color_name){
				$sql='SELECT color_id FROM color	WHERE color_name ="'.$color_name.'"';
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				$color_id= $row['color_id'];
				}
				return $color_id;
				
				}

//======================================================================================================				
//get cuurent quantity
 			function getQuantity($product_id){
				//echo $product_id." ".$color_id." ".$size_id; 
				$sql='SELECT quantity  FROM `product` WHERE `product_id` = '.$product_id.'';
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				$quantity= $row['quantity'];
				}
				return $quantity;
				
				}
//======================================================================================================			
//get reorder level
 			function getreOrderlevel($product_id){
				
				$sql='SELECT reorder_level  FROM `product` WHERE `product_id` = '.$product_id.'';
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				$reorder_level= $row['reorder_level'];
				}
				return $reorder_level;
				
				}
//======================================================================================================									
//update Quantity
 			function setQuantity($product_id,$newQuantity){
				$sql="UPDATE `product` SET `quantity` = '$newQuantity'  WHERE `product_id` = $product_id";
				$Q = $this-> db-> query($sql);
				if($Q){
				return true;
				}else{
				return false;	
				}
				}			
}
?>