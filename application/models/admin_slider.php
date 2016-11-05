<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_slider extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}


//news related	
/*======================================================================================================================
get all news details
*/


	function getAllsliders(){	
		
		$sql='SELECT * FROM `slider`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}

/*======================================================================================================================
edit slider details	
*/

function sliderDelete(){
		$slider_id = $_POST['slider_id']; 
		//$name = $_POST['name']; 
		$sql = 'DELETE FROM slider
		WHERE slider_id = '.$slider_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);		
		 
		return true;		
		 
		
	}


	function sliderEdit($slider_id){
		
		$main= trim($_POST['main']);
		$sub= trim($_POST['sub']);
		$mainimage= trim($_POST['mainimage']);
		$simg1= trim($_POST['simage1']);
		$simg2= trim($_POST['simage2']);
		$simg3= trim($_POST['simage3']);
		
		
		//main image upload
		if (isset($_FILES['mainimg']['tmp_name']) && $_FILES['mainimg']['tmp_name'] != '') {
		//	echo 'dd'; die;
	
		$file=$_FILES['mainimg']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['mainimg']['tmp_name']));
		$image_name= addslashes($_FILES['mainimg']['name']);
		$image_size= getimagesize($_FILES['mainimg']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorslider', ' Please upload a image file for main image.');	
			redirect('admin/slider', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["mainimg"]["tmp_name"],"assets/images/slider/" . $_FILES["mainimg"]["name"]); 
			$mainimage=$_FILES["mainimg"]["name"];   
		}
		
		}
		//1 image upload
		if (isset($_FILES['simg1']['tmp_name']) && $_FILES['simg1']['tmp_name'] != '') {
	
		$file=$_FILES['simg1']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['simg1']['tmp_name']));
		$image_name= addslashes($_FILES['simg1']['name']);
		$image_size= getimagesize($_FILES['simg1']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorslider', ' Please upload a image file for image 1.');	
			redirect('admin/slider', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["simg1"]["tmp_name"],"assets/images/slider/" . $_FILES["simg1"]["name"]); 
			$simg1=$_FILES["simg1"]["name"];   
		}
		
		}
		//2 image upload
		if (isset($_FILES['simg2']['tmp_name']) && $_FILES['simg2']['tmp_name'] != '') {
	
		$file=$_FILES['simg2']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['simg2']['tmp_name']));
		$image_name= addslashes($_FILES['simg2']['name']);
		$image_size= getimagesize($_FILES['simg2']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorslider', ' Please upload a image file for  image 2.');	
			redirect('admin/slider', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["simg2"]["tmp_name"],"assets/images/slider/" . $_FILES["simg2"]["name"]); 
			$simg2=$_FILES["simg2"]["name"];   
		}
		
		}
		//3 image upload
		if (isset($_FILES['simg3']['tmp_name']) && $_FILES['simg3']['tmp_name'] != '') {
	
		$file=$_FILES['simg3']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['simg3']['tmp_name']));
		$image_name= addslashes($_FILES['simg3']['name']);
		$image_size= getimagesize($_FILES['simg3']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorslider', ' Please upload a image file for image 3.');	
			redirect('admin/slider', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["simg3"]["tmp_name"],"assets/images/slider/" . $_FILES["simg3"]["name"]); 
			$simg3=$_FILES["simg3"]["name"];   
		}
		
		}
			
		$sql="UPDATE `slider` SET `main_img`='$mainimage',`img1`='$simg1',`img2`='$simg2',
		`img3`='$simg3',`main_text`='$main',`sub_text`='$sub' 
		 WHERE slider_id =".$slider_id." ";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorslider', ' Unable to  edit the slider because <strong>'.$slider_id.'</strong> slider already exists.');	
	    redirect('admin/slider', 'location');	
		}else{
		return true;		
		}
		
	
	}


/*======================================================================================================================
gallery edit*/
	function gallerycatedit($gallery_cat_id){
		

		$sub= trim($_POST['sub']);
		$mainimage= trim($_POST['mainimage']);

		
		
		//main image upload
		if (isset($_FILES['mainimg']['tmp_name']) && $_FILES['mainimg']['tmp_name'] != '') {
		//	echo 'dd'; die;
	
		$file=$_FILES['mainimg']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['mainimg']['tmp_name']));
		$image_name= addslashes($_FILES['mainimg']['name']);
		$image_size= getimagesize($_FILES['mainimg']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorslider', ' Please upload a image file for main image.');	
			redirect('admin/slider', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["mainimg"]["tmp_name"],"assets/images/gallerycategory/" . $_FILES["mainimg"]["name"]); 
			$mainimage=$_FILES["mainimg"]["name"];   
		}
		
		}

			
		$sql="UPDATE `gallery_catergory` SET `catergory_image`='$mainimage',`name`='$sub'
		 WHERE gallery_category_id  =".$gallery_cat_id." ";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorgallerycategory', ' Unable to  edit the Gallery Category because <strong>'.$gallery_cat_id.'</strong> slider already exists.');	
	    redirect('admin/gallery_category', 'location');	
		}else{
		return true;		
		}
		
	
	}

function galleryimgedit($image_id){
		

		$name= trim($_POST['name']);
		$mainimage= trim($_POST['mainimage']);

		
		
		//main image upload
		if (isset($_FILES['mainimg']['tmp_name']) && $_FILES['mainimg']['tmp_name'] != '') {
		//	echo 'dd'; die;
	
		$file=$_FILES['mainimg']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['mainimg']['tmp_name']));
		$image_name= addslashes($_FILES['mainimg']['name']);
		$image_size= getimagesize($_FILES['mainimg']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorslider', ' Please upload a image file for main image.');	
			redirect('admin/slider', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["mainimg"]["tmp_name"],"assets/images/galleryimages/" . $_FILES["mainimg"]["name"]); 
			$mainimage=$_FILES["mainimg"]["name"];   
		}
		
		}

			
		$sql="UPDATE `gallery_images` SET `image`='$mainimage',`name`='$name'
		 WHERE gallery_images_id  =".$image_id." ";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorgalleryimages', ' Unable to  edit the Gallery image because <strong>'.$gallery_cat_id.'</strong> slider already exists.');	
	    redirect('admin/gallery_images', 'location');	
		}else{
		return true;		
		}
}

function gallerycatdelete(){
		$gallery_category_id = $_POST['gallery_category_id']; 
		$name = $_POST['name']; 
		$sql = 'DELETE FROM gallery_catergory
		WHERE gallery_category_id = '.$gallery_category_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);		
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errorgallerycategory', ' Unable to  edit the  <strong>'.$name.'</strong> gallery category as it was associated with other details.');	
	    redirect('admin/gallery_category/', 'location');	
		}else{
		return true;		
		}
		
	}

function galleryimgdelete(){

		$gallery_images_id = $_POST['gallery_images_id']; 
		$name = $_POST['name']; 
		$sql = 'DELETE FROM gallery_images
		WHERE gallery_images_id = '.$gallery_images_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);		
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errorgalleryimages', ' Unable to  edit the  <strong>'.$name.'</strong> gallery image as it was associated with other details.');	
	    redirect('admin/gallery_images/', 'location');	
		}else{
		return true;		
		}
		
	}
/*======================================================================================================================
delete news 	
*/	
	public function newsDelete($latest_news_id){
		$topic = $_POST['topic']; 
		
		$sql = 'DELETE FROM latest_news
		WHERE latest_news_id = '.$latest_news_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);		
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errornews', ' Unable to  edit the  <strong>'.$topic.'</strong> news as it was associated with other details.');	
	    redirect('admin/news/', 'location');	
		}else{
		return true;		
		}
		
	}	


/*Gallery*/

	function getAllGalleryCategory(){	
		
		$sql='SELECT * FROM `gallery_catergory`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}

	function getAllGalleryImages(){

		$sql='SELECT gallery_images.* , gallery_catergory.name as cat_name
FROM `gallery_images`
		JOIN gallery_catergory ON gallery_catergory.gallery_category_id = gallery_images.gallery_category_id';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;

	}
	function gallerycatadd(){
		
		$catename= trim($_POST['catename']);
		//news image upload
		if (isset($_FILES['categoryimg']['tmp_name']) && $_FILES['categoryimg']['tmp_name'] != '') {
	
		$file=$_FILES['categoryimg']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['categoryimg']['tmp_name']));
		$image_name= addslashes($_FILES['categoryimg']['name']);
		$image_size= getimagesize($_FILES['categoryimg']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errornews', ' Please upload a image file for news image.');	
			redirect('admin/news', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["categoryimg"]["tmp_name"],"assets/images/gallerycategory/" . $_FILES["categoryimg"]["name"]); 
			$categoryimg=$_FILES["categoryimg"]["name"];   
		}
		
		}
			
		$sql="INSERT INTO `gallery_catergory`( `name`, `catergory_image`) VALUES ('$catename','$categoryimg')";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorgallerycategory', ' Unable to  add the category because <strong>'.$news_topic.'</strong>  already exists.');	
	    redirect('admin/gallery_category', 'location');	
		}else{
		return true;		
		}
		
	
	}

	function galleryimgadd(){
		
		$name= trim($_POST['name']);
		$type= trim($_POST['type']);
		//news image upload
		if (isset($_FILES['categoryimg']['tmp_name']) && $_FILES['categoryimg']['tmp_name'] != '') {
	
		$file=$_FILES['categoryimg']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['categoryimg']['tmp_name']));
		$image_name= addslashes($_FILES['categoryimg']['name']);
		$image_size= getimagesize($_FILES['categoryimg']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errornews', ' Please upload a image file for news image.');	
			redirect('admin/news', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["categoryimg"]["tmp_name"],"assets/images/galleryimages/" . $_FILES["categoryimg"]["name"]); 
			$categoryimg=$_FILES["categoryimg"]["name"];   
		}
		
		}
			
		$sql="INSERT INTO `gallery_images`( `gallery_category_id`, `name`, `image`) VALUES ('$type','$name','$categoryimg')";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorgalleryimages', ' Unable to  add the Image because <strong>'.$news_topic.'</strong>  already exists.');	
	    redirect('admin/gallery_images', 'location');	
		}else{
		return true;		
		}
}


	function getAllGalleryCategoryData($cat_id){
				$sql='SELECT gallery_images.* , gallery_catergory.name as cat_name
				FROM `gallery_images`
						JOIN gallery_catergory ON gallery_catergory.gallery_category_id = gallery_images.gallery_category_id
						WHERE gallery_images.gallery_category_id='.$cat_id.'';
						$Q = $this-> db-> query($sql);
						foreach ($Q-> result_array() as $row){
							}
						return $Q;


	}
		
	
}