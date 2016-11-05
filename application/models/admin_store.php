<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_store extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

//Product category related	
/*======================================================================================================================
get all category details
*/


	function getAllProductsCategories(){	
		
		$sql='SELECT *
		FROM `product_type`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
edit category details	
*/
	function productCatEdit($product_type_id){
		
		$catename= trim($_POST['catename']);
		$status = $_POST['status'];
			
		$sql="UPDATE `product_type` 
		SET `type_name`='$catename',`status`='$status'
		WHERE product_type_id =".$product_type_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorproductcategory', ' Unable to  edit the category because <strong>'.$catename.'</strong> category already exists.');	
	    redirect('admin/product_category', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
add category details	
*/	
	function productCatAdd(){
		
		
		$catename = trim($_POST['catename']);
		$status= $_POST['pstatus'];
		
		$sql= "INSERT INTO 
		`product_type`(`type_name`,`status` )
		VALUES ('$catename','$status')";		
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorproductcategory', ' Unable to  add the <strong>'.$catename.'</strong> category because <strong>'.$catename.'</strong> category already exists.');	
	    redirect('admin/product_category', 'location');	
		}else{
		return true;		
		}		
	
	}
/*======================================================================================================================
delete category details	
*/	
	public function productCatDelete(){
		$product_type_id = $_POST['catid'];
		$catename = $_POST['catename'];
		$sql = 'DELETE FROM product_type
		WHERE product_type_id = '.$product_type_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errorproductcategory', ' Unable to  delete the <strong>'.$catename.'</strong> category as it was associated with products.');	
	    redirect('admin/product_category', 'location');	
		}else{
		return true;		
		}
	}
/*======================================================================================================================
get id details	
*/
function getproductCatid(){
	
	$catename = trim($_POST['catename']);
		
		$sql= "SELECT product_type_id
		FROM `product_type`
		WHERE type_name = '$catename'";
		
		$Q = $this-> db-> query($sql);
		
	if ($Q-> num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$d = $row['product_type_id'];
	}
	return $d;
	
	}
	}


//product reviews related	
/*======================================================================================================================
get all product reviews details
*/


	function getAllproductreviews(){	
		
		$sql='SELECT *
		FROM `product_review`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;	
	}
	
/*======================================================================================================================
edit product reviews details	
*/
	function reviewEdit($product_review_id){
		
		$reviewid= trim($_POST['reviewid']);
		$status = $_POST['status'];
			
		$sql="UPDATE `product_review` 
		SET `status`='$status'
		WHERE product_review_id =".$product_review_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);		
		return true;		
		
	}
	
/*======================================================================================================================
delete product reviews details	
*/	
	public function reviewDelete(){
		$reviewid = $_POST['reviewid'];
		
		$sql = 'DELETE FROM product_review
		WHERE product_review_id = '.$reviewid.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);		
		return true;		
		
	}
//product  related	
/*======================================================================================================================
get all product details
*/


	function getAllproduct(){	
		

		$sql='SELECT DISTINCT  product. * , product_type.type_name FROM product
				INNER JOIN product_type ON product.product_type_id = product_type.product_type_id';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
get all product details
*/


	function  getoneproduct($product_id){	
		
		$sql='SELECT DISTINCT  product. * , product_type.type_name FROM product
				INNER JOIN product_type ON product.product_type_id = product_type.product_type_id
				
				WHERE product.product_id='.$product_id.'';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}

/*======================================================================================================================
get relevet product details
*/


	function getotherproductdetails1($product_id){	
		
		$sql='SELECT product_color_size.* , size.type, color.color_name, product.product_name
		FROM `product_color_size` 
		INNER JOIN size ON size.size_id = product_color_size.size_id
		INNER JOIN color ON color.color_id = product_color_size.color_id
		INNER JOIN product ON product.product_id = product_color_size.product_id
		WHERE product_color_size.product_id='.$product_id.'';
		$Q = $this-> db-> query($sql);
		if($Q->num_rows()>0)
		foreach ($Q-> result_array() as $row){
		return $Q;
		}
		else
		return 'empty';
	   }
/*======================================================================================================================
edit product details	
*/
	function productsAdd(){
		
		$productname= trim($_POST['productname']);
		$type= trim($_POST['type']);
		$price= trim($_POST['price']);
		$description= trim($_POST['description']);
		$quantity= trim($_POST['quantity']);
		$no_bits= trim($_POST['no_bits']);
		$re= trim($_POST['re']);
		$date=date('Y-m-d');
		//brand image upload
		if (isset($_FILES['pimg1']['tmp_name']) && $_FILES['pimg1']['tmp_name'] != '') {
	
		$file=$_FILES['pimg1']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['pimg1']['tmp_name']));
		$image_name= addslashes($_FILES['pimg1']['name']);
		$image_size= getimagesize($_FILES['pimg1']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorproduct', ' Please upload a image file for products image 1.');	
			redirect('admin/products', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["pimg1"]["tmp_name"],"assets/images/products/" . $_FILES["pimg1"]["name"]); 
			$pimg1=$_FILES["pimg1"]["name"];   
		}
		
		}
		
		if (isset($_FILES['pimg2']['tmp_name']) && $_FILES['pimg2']['tmp_name'] != '') {
	
		$file=$_FILES['pimg2']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['pimg2']['tmp_name']));
		$image_name= addslashes($_FILES['pimg2']['name']);
		$image_size= getimagesize($_FILES['pimg2']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorproduct', ' Please upload a image file for products image 2.');	
			redirect('admin/products', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["pimg2"]["tmp_name"],"assets/images/products/" . $_FILES["pimg2"]["name"]); 
			$pimg2=$_FILES["pimg2"]["name"];   
		}
		
		}	

		if (isset($_FILES['pimg3']['tmp_name']) && $_FILES['pimg3']['tmp_name'] != '') {
	
		$file=$_FILES['pimg3']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['pimg3']['tmp_name']));
		$image_name= addslashes($_FILES['pimg3']['name']);
		$image_size= getimagesize($_FILES['pimg3']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorproduct', ' Please upload a image file for products image 2.');	
			redirect('admin/products', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["pimg3"]["tmp_name"],"assets/images/products/" . $_FILES["pimg3"]["name"]); 
			$pimg3=$_FILES["pimg3"]["name"];   
		}
		
		}	

		if (isset($_FILES['pimg4']['tmp_name']) && $_FILES['pimg4']['tmp_name'] != '') {
	
		$file=$_FILES['pimg4']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['pimg4']['tmp_name']));
		$image_name= addslashes($_FILES['pimg4']['name']);
		$image_size= getimagesize($_FILES['pimg4']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorproduct', ' Please upload a image file for products image 2.');	
			redirect('admin/products', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["pimg4"]["tmp_name"],"assets/images/products/" . $_FILES["pimg4"]["name"]); 
			$pimg4=$_FILES["pimg4"]["name"];   
		}
		
		}	
		//print_r($_POST);die;


		$sql="INSERT INTO `product`( `product_name`, `product_type_id`, `price`, `description`, 
		`last_updated_date`,`quantity` ,`no_bits` ,`reorder_level` , `img1`, `img2`, `img3`, `img4`) VALUES ('$productname','$type',
		'$price','$description','$date','$quantity','$no_bits', '$re', '$pimg1','$pimg2', '$pimg3','$pimg4')";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorproductadd', ' Unable to  add the product because <strong>'.$productname.'</strong> product already exists.');	
	    redirect('admin/productadd', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
get  product id details	
*/
function getproductid(){
	
	$productname = trim($_POST['productname']);
		
		$sql= "SELECT product_id
		FROM `product`
		WHERE product_name = '$productname'";
		
		$Q = $this-> db-> query($sql);
	if ($Q-> num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$d = $row['product_id'];
	}
	return $d;
	
	}
	}

/*======================================================================================================================
edit product details	
*/
	function productsEdit($product_id){
		
		$productname= trim($_POST['productname']);
		$type= trim($_POST['type']);
		$price= trim($_POST['price']);
		$description= trim($_POST['description']);
		$pimg1= trim($_POST['image1']);
		$pimg2= trim($_POST['image2']);
		$pimg3= trim($_POST['image3']);
		$pimg4= trim($_POST['image4']);
		$quantity= trim($_POST['quantity']);
		$re= trim($_POST['re']);
		$date=date('Y-m-d');
		//brand image upload
		if (isset($_FILES['pimg1']['tmp_name']) && $_FILES['pimg1']['tmp_name'] != '') {
	
		$file=$_FILES['pimg1']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['pimg1']['tmp_name']));
		$image_name= addslashes($_FILES['pimg1']['name']);
		$image_size= getimagesize($_FILES['pimg1']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorproduct', ' Please upload a image file for products image 1.');	
			redirect('admin/products', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["pimg1"]["tmp_name"],"assets/images/products/" . $_FILES["pimg1"]["name"]); 
			$pimg1=$_FILES["pimg1"]["name"];   
		}
		
		}
		
		if (isset($_FILES['pimg2']['tmp_name']) && $_FILES['pimg2']['tmp_name'] != '') {
	
		$file=$_FILES['pimg2']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['pimg2']['tmp_name']));
		$image_name= addslashes($_FILES['pimg2']['name']);
		$image_size= getimagesize($_FILES['pimg2']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorproduct', ' Please upload a image file for products image 2.');	
			redirect('admin/products', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["pimg2"]["tmp_name"],"assets/images/products/" . $_FILES["pimg2"]["name"]); 
			$pimg2=$_FILES["pimg2"]["name"];   
		}
		
		}	

				if (isset($_FILES['pimg3']['tmp_name']) && $_FILES['pimg3']['tmp_name'] != '') {
	
		$file=$_FILES['pimg3']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['pimg3']['tmp_name']));
		$image_name= addslashes($_FILES['pimg3']['name']);
		$image_size= getimagesize($_FILES['pimg3']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorproduct', ' Please upload a image file for products image 1.');	
			redirect('admin/products', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["pimg3"]["tmp_name"],"assets/images/products/" . $_FILES["pimg3"]["name"]); 
			$pimg3=$_FILES["pimg3"]["name"];   
		}
		
		}


				if (isset($_FILES['pimg4']['tmp_name']) && $_FILES['pimg4']['tmp_name'] != '') {
	
		$file=$_FILES['pimg4']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['pimg4']['tmp_name']));
		$image_name= addslashes($_FILES['pimg4']['name']);
		$image_size= getimagesize($_FILES['pimg4']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorproduct', ' Please upload a image file for products image 1.');	
			redirect('admin/products', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["pimg4"]["tmp_name"],"assets/images/products/" . $_FILES["pimg4"]["name"]); 
			$pimg4=$_FILES["pimg4"]["name"];   
		}
		
		}
		$sql="UPDATE `product` SET `product_name`='$productname',`product_type_id`='$type',
		`price`='$price',`description`='$description',`last_updated_date`='$date',`quantity`='$quantity',`reorder_level`='$re',
		`img1`='$pimg1',`img2`='$pimg2',`img3`='$pimg3',`img4`='$pimg4' WHERE product_id=".$product_id." ";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorproduct', ' Unable to  edit the product because <strong>'.$productname.'</strong> product already exists.');	
	    redirect('admin/products', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
add advanced  product details	
*/	
	function productadavncAdd($product_id){
		
		$productname = trim($_POST['productname']);
		$colorid = trim($_POST['colorname']);
		$sizeid= trim($_POST['sizetype']);
		$quantit = trim($_POST['quantit']);
		$reorderlevel = trim($_POST['reorderlevel']);
		
			
		$sql= "INSERT INTO `product_color_size`(`product_id`, `color_id`, `size_id`,
		 `quantity`, `reorder_level`) VALUES ('$product_id','$colorid ','$sizeid','$quantit','$reorderlevel ')";		
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorproductedit', ' Unable to  add the <strong>'.$productname.'</strong> product details  because some details already exists.');	
	    redirect('admin/products_advance_edit/'.$product_id.'', 'location');	
		}else{
		return true;		
		}		
	
	}



/*======================================================================================================================
delete product 	
*/	
	public function productsDelete($product_id){
		$productname = $_POST['product_name']; 
		
		$sql = 'DELETE FROM product
		WHERE product_id = '.$product_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);		
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errorproduct', ' Unable to  edit the  <strong>'.$productname.'</strong> product as it was associated with other details.');	
	    redirect('admin/products/', 'location');	
		}else{
		return true;		
		}
		
	}
	
/*======================================================================================================================
get	 income for home 
*/
function getorderincome(){
	
	
		
		$sql= "SELECT orders.order_date AS DATE, SUM(orders.amount) AS Income
				FROM orders
				WHERE order_date >= CURRENT_DATE - INTERVAL 7 DAY
				AND order_date <=CURRENT_DATE 
				AND status = 'Delivered'
				GROUP BY DATE";
		
	$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
count all pending reviews
*/

	function reviewsCount(){
			
		$sql= 'SELECT COUNT( * ) AS numrows
		FROM product_review
		WHERE status = "inactive"
		';	
		$Q = $this-> db-> query($sql);
		return $Q->row ()->numrows;
			
		}
	
	
}