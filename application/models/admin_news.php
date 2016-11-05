<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_news extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}


//news related	
/*======================================================================================================================
get all news details
*/


	function getAllnews(){	
		
		$sql='SELECT * FROM `latest_news`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
add news details	
*/
	function newsAdd(){
		
		$news_topic= trim($_POST['news_topic']);
		$content= trim($_POST['content']);				
		$date=date('Y-m-d');
		$admin_id= $_SESSION['admin_id'];
		//news image upload
		if (isset($_FILES['nimg1']['tmp_name']) && $_FILES['nimg1']['tmp_name'] != '') {
	
		$file=$_FILES['nimg1']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['nimg1']['tmp_name']));
		$image_name= addslashes($_FILES['nimg1']['name']);
		$image_size= getimagesize($_FILES['nimg1']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errornews', ' Please upload a image file for news image.');	
			redirect('admin/news', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["nimg1"]["tmp_name"],"assets/images/news/" . $_FILES["nimg1"]["name"]); 
			$nimg1=$_FILES["nimg1"]["name"];   
		}
		
		}
			
		$sql="INSERT INTO `latest_news`( `news_topic`, `news_body`, `image`, `publish_date`,
		 `user_id`) VALUES ('$news_topic','$content','$nimg1','$date','$admin_id')";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errornews', ' Unable to  add the news because <strong>'.$news_topic.'</strong> news already exists.');	
	    redirect('admin/news', 'location');	
		}else{
		return true;		
		}
		
	
	}

/*======================================================================================================================
edit news details	
*/
	function newsEdit($latest_news_id){
		
		$news_topic= trim($_POST['news_topic']);
		$content= trim($_POST['content']);				
		$date=date('Y-m-d');
		$admin_id= $_SESSION['admin_id'];
		$nimg1= trim($_POST['image1']);
		
		
		//news image upload
		if (isset($_FILES['nimg1']['tmp_name']) && $_FILES['nimg1']['tmp_name'] != '') {
	
		$file=$_FILES['nimg1']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['nimg1']['tmp_name']));
		$image_name= addslashes($_FILES['nimg1']['name']);
		$image_size= getimagesize($_FILES['nimg1']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errornews', ' Please upload a image file for news image.');	
			redirect('admin/news', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["nimg1"]["tmp_name"],"assets/images/news/" . $_FILES["nimg1"]["name"]); 
			$nimg1=$_FILES["nimg1"]["name"];   
		}
		
		}
		
			
		$sql="UPDATE `latest_news` SET `news_topic`='$news_topic',`news_body`='$content',
		`image`='$nimg1',`publish_date`='$date',`user_id`='$admin_id'
		 WHERE latest_news_id =".$latest_news_id." ";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errornews', ' Unable to  edit the news because <strong>'.$news_topic.'</strong> news already exists.');	
	    redirect('admin/news', 'location');	
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
     
/*======================================================================================================================
get all subcriber's details 	
*/	
	public function newssubcriberDetails(){
		$sql='SELECT * FROM `news_subcriber`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
		}
	
	
		
/*======================================================================================================================
get emails for send news 	
*/
	public function getMails(){
		
		$sql='SELECT * FROM `news_subcriber` 
        WHERE `status` ="active"
		';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		}	
}