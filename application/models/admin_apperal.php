<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_apperal extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

//apparel category related	
/*======================================================================================================================
get all category details
*/


	function getAllapparelsCategories(){	
		
		$sql='SELECT *
		FROM `customize_apparel_category` 
		ORDER BY `customize_apparel_category`.`apparel_category_id` ASC ';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
edit category details	
*/
	function apparelCatEdit($apparel_type_id){
		
		$catename= trim($_POST['catename']);
		
			
		$sql="UPDATE `customize_apparel_category` 
		SET `name`='$catename' 
		WHERE apparel_category_id =".$apparel_type_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorapparelcategory', ' Unable to  edit the cake category because <strong>'.$catename.'</strong> category already exists.');	
	    redirect('admin/cake_category', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
add category details	
*/	
	function apparelCatAdd(){
		
		
		$catename = trim($_POST['catename']);
		
		
		$sql= "INSERT INTO 
		`customize_apparel_category`(`name`)
		VALUES ('$catename')";		
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorapparelcategory', ' Unable to  add the <strong>'.$catename.'</strong> cake  category because <strong>'.$catename.'</strong> category already exists.');	
	    redirect('admin/cake_category', 'location');	
		}else{
		return true;		
		}		
	
	}
/*======================================================================================================================
delete category details	
*/	
	public function apparelCatDelete($apparel_type_id){
		
		$catename = $_POST['catename'];
		$sql = 'DELETE FROM customize_apparel_category
		WHERE apparel_category_id = '.$apparel_type_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errorapparelcategory', ' Unable to  delete the <strong>'.$catename.'</strong> category as it was associated with cakes.');	
	    redirect('admin/cake_category', 'location');	
		}else{
		return true;		
		}
	}


//apparel  related	
/*======================================================================================================================
get all apparel details
*/


	function getAllapparels(){	
		
		$sql='SELECT DISTINCT  customize_apparel_product. * , customize_apparel_category.name 
		FROM customize_apparel_product
		INNER JOIN customize_apparel_category ON customize_apparel_product.customize_apparel_category_id = customize_apparel_category.apparel_category_id 	';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
add apparel details	
*/
	function apparelsAdd(){
		
		$productname= trim($_POST['productname']);
		$type= trim($_POST['type']);
		$price= trim($_POST['price']);		
		//$date=date('Y-m-d');
		//apparel image upload
		if (isset($_FILES['aimg1']['tmp_name']) && $_FILES['aimg1']['tmp_name'] != '') {
	
		$file=$_FILES['aimg1']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['aimg1']['tmp_name']));
		$image_name= addslashes($_FILES['aimg1']['name']);
		$image_size= getimagesize($_FILES['aimg1']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorapparel', ' Please upload a image file for cake image 1.');	
			redirect('admin/cakes', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["aimg1"]["tmp_name"],"assets/images/design/" . $_FILES["aimg1"]["name"]); 
			$aimg1=$_FILES["aimg1"]["name"];   
		}
		
		}
		
		if (isset($_FILES['aimg2']['tmp_name']) && $_FILES['aimg2']['tmp_name'] != '') {
	
		$file=$_FILES['aimg2']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['aimg2']['tmp_name']));
		$image_name= addslashes($_FILES['aimg2']['name']);
		$image_size= getimagesize($_FILES['aimg2']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorapparel', ' Please upload a image file for cake image 2.');	
			redirect('admin/cakes', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["aimg2"]["tmp_name"],"assets/images/design/" . $_FILES["aimg2"]["name"]); 
			$aimg2=$_FILES["aimg2"]["name"];   
		}
		
		}	
		$sql="INSERT INTO `customize_apparel_product`(`customize_apparel_category_id`, 
		`apparel_name`, `price`, `front_img`, `back_img`)
		 VALUES ('$type','$productname','$price','$aimg1','$aimg2')";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorapparel', ' Unable to  add the cake because <strong>'.$productname.'</strong> cake already exists.');	
	    redirect('admin/cakes', 'location');	
		}else{
		return true;		
		}
		
	
	}

/*======================================================================================================================
edit apparel details	
*/
	function apparelsEdit($apparel_product_id){
		
		$productname= trim($_POST['productname']);
		$type= trim($_POST['type']);
		$price= trim($_POST['price']);		
		$aimg1= trim($_POST['image1']);
		$aimg2= trim($_POST['image2']);
		
		//apparel image upload
		if (isset($_FILES['aimg1']['tmp_name']) && $_FILES['aimg1']['tmp_name'] != '') {
	
		$file=$_FILES['aimg1']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['aimg1']['tmp_name']));
		$image_name= addslashes($_FILES['aimg1']['name']);
		$image_size= getimagesize($_FILES['aimg1']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorapparel', ' Please upload a image file for cake image 1.');	
			redirect('admin/cakes', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["aimg1"]["tmp_name"],"assets/images/design/" . $_FILES["aimg1"]["name"]); 
			$aimg1=$_FILES["aimg1"]["name"];   
		}
		
		}
		
		if (isset($_FILES['aimg2']['tmp_name']) && $_FILES['aimg2']['tmp_name'] != '') {
	
		$file=$_FILES['aimg2']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['aimg2']['tmp_name']));
		$image_name= addslashes($_FILES['aimg2']['name']);
		$image_size= getimagesize($_FILES['aimg2']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorapparel', ' Please upload a image file for cake image 2.');	
			redirect('admin/cakes', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["aimg2"]["tmp_name"],"assets/images/design/" . $_FILES["aimg2"]["name"]); 
			$aimg2=$_FILES["aimg2"]["name"];   
		}
		
		}	
		$sql="UPDATE `customize_apparel_product` SET `customize_apparel_category_id`='$type',
		`apparel_name`='$productname',`price`='$price',`front_img`='$aimg1',`back_img`='$aimg2'
		 WHERE apparel_product_id =".$apparel_product_id." ";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorapparel', ' Unable to  edit the cake because <strong>'.$productname.'</strong> cake already exists.');	
	    redirect('admin/cakes', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
delete apparel 	
*/	
	public function apparesDelete($apparel_product_id){
		$productname = $_POST['product_name']; 
		
		$sql = 'DELETE FROM customize_apparel_product
		WHERE apparel_product_id = '.$apparel_product_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);		
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errorapparel', ' Unable to  edit the  <strong>'.$productname.'</strong> cake as it was associated with other details.');	
	    redirect('admin/cakes/', 'location');	
		}else{
		return true;		
		}
		
	}
	
//art work category related	
/*======================================================================================================================
get art work category details
*/


	function getAllartworksCategories(){	
		
		$sql='SELECT *
		FROM `artwork_category` 
		ORDER BY `artwork_category`.`artwork_category_id` ASC ';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}	
	
/*======================================================================================================================
edit art work  category details	
*/
	function artworkCatEdit($artwork_category_id){
		
		$catename= trim($_POST['catename']);
		
			
		$sql="UPDATE `artwork_category` 
		SET `art_cat_name`='$catename' 
		WHERE artwork_category_id =".$artwork_category_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorartworkcategory', ' Unable to  edit the art work category because <strong>'.$catename.'</strong> category already exists.');	
	    redirect('admin/artwork_category', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
add art work  category details	
*/	
	function artworkCatAdd(){
		
		
		$catename = trim($_POST['catename']);
		
		
		$sql= "INSERT INTO 
		`artwork_category`(`art_cat_name`)
		VALUES ('$catename')";		
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorartworkcategory', ' Unable to  add the <strong>'.$catename.'</strong> art work category because <strong>'.$catename.'</strong> category already exists.');	
	    redirect('admin/artwork_category', 'location');	
		}else{
		return true;		
		}		
	
	}
/*======================================================================================================================
delete art work  category details	
*/	
	public function artworkCatDelete($artwork_category_id){
		
		$catename = $_POST['catename'];
		$sql = 'DELETE FROM artwork_category
		WHERE artwork_category_id = '.$artwork_category_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errorartworkcategory', ' Unable to  delete the <strong>'.$catename.'</strong> category as it was associated with art works.');	
	    redirect('admin/artwork_category', 'location');	
		}else{
		return true;		
		}
	}
	
//artwork  related	
/*======================================================================================================================
get all artwork details
*/


	function getAllartworks(){	
		
		$sql='SELECT  artwork. * , artwork_category.art_cat_name
		FROM artwork
		INNER JOIN artwork_category ON artwork_category.artwork_category_id = artwork.artwork_category_id';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
add artwork details	
*/
	function artworksAdd(){
		
		$artworkname= trim($_POST['artworkname']);
		$type= trim($_POST['type']);
		$price= trim($_POST['price']);		
		//$date=date('Y-m-d');
		//artwork image upload
		if (isset($_FILES['aimg1']['tmp_name']) && $_FILES['aimg1']['tmp_name'] != '') {
	
		$file=$_FILES['aimg1']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['aimg1']['tmp_name']));
		$image_name= addslashes($_FILES['aimg1']['name']);
		$image_size= getimagesize($_FILES['aimg1']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorartwork', ' Please upload a image file for art work image.');	
			redirect('admin/artworks', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["aimg1"]["tmp_name"],"assets/images/design/artworks/" . $_FILES["aimg1"]["name"]); 
			$aimg1=$_FILES["aimg1"]["name"];   
		}
		
		}
			
		$sql="INSERT INTO `artwork`(`art_name`, `img`, `unit_price`, `artwork_category_id`) 
		VALUES ('$artworkname','$aimg1','$price','$type')";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorartwork', ' Unable to  add the art work because <strong>'.$artworkname.'</strong> art work already exists.');	
	    redirect('admin/artworks', 'location');	
		}else{
		return true;		
		}
		
	
	}

/*======================================================================================================================
edit artwork details	
*/
	function artworksEdit($artwork_id){
		
		$artworkname= trim($_POST['artworkname']);
		$type= trim($_POST['type']);
		$price= trim($_POST['price']);		
		$aimg1= trim($_POST['image1']);
		
		
		//artwork image upload
		if (isset($_FILES['aimg1']['tmp_name']) && $_FILES['aimg1']['tmp_name'] != '') {
	
		$file=$_FILES['aimg1']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['aimg1']['tmp_name']));
		$image_name= addslashes($_FILES['aimg1']['name']);
		$image_size= getimagesize($_FILES['aimg1']['tmp_name']);

	
	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorartwork', ' Please upload a image file for art work image.');	
			redirect('admin/artworks', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["aimg1"]["tmp_name"],"assets/images/design/artworks/" . $_FILES["aimg1"]["name"]); 
			$aimg1=$_FILES["aimg1"]["name"];   
		}
		}
		
		
			
		$sql="UPDATE `artwork` SET `art_name`='$artworkname',`img`='$aimg1',`unit_price`='$price',
		`artwork_category_id`='$type'
		 WHERE artwork_id =".$artwork_id." ";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorartwork', ' Unable to  edit the art work because <strong>'.$artworkname.'</strong> art work already exists.');	
	    redirect('admin/artworks', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
delete artwork 	
*/	
	public function artworksDelete($artwork_id){
		$artworkname = $_POST['artworkname']; 
		
		$sql = 'DELETE FROM artwork
		WHERE artwork_id = '.$artwork_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);		
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errorartwork', ' Unable to  edit the  <strong>'.$artworkname.'</strong> art work as it was associated with other details.');	
	    redirect('admin/artworks/', 'location');	
		}else{
		return true;		
		}
		
	}
	
	
}