<?php 
class Admin_about_us extends CI_Model{

function _construct(){

	parent::_construct();
}

//about us related
/*======================================================================================================================
display about us details
*/


	
	function about(){
			
		$sql='SELECT * FROM `about_us`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;		
		
		}

/*======================================================================================================================
edit  about us details
*/
	function aboutusEdit($about_id){
		
		$vision= trim($_POST['vision']);
		$mission= trim($_POST['mission']);
		$about= trim($_POST['about']);
		$history = trim($_POST['history']);
			
		$sql="UPDATE `about_us` SET `vision`='$vision',
		`mission`='$mission',`about`='$about',`history`='$history'  
		WHERE about_id =".$about_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorabout', ' Unable to  edit the about us details .');	
	    redirect('admin/about_us', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
edit director details	
*/
	function directorEdit($about_id){
		
		$name= trim($_POST['name']);
		$position= trim($_POST['position']);
				
		$dimg= trim($_POST['pic']);
		
		
		//director upload
		if (isset($_FILES['dimg']['tmp_name']) && $_FILES['dimg']['tmp_name'] != '') {
	
		$file=$_FILES['dimg']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['dimg']['tmp_name']));
		$image_name= addslashes($_FILES['dimg']['name']);
		$image_size= getimagesize($_FILES['dimg']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorabout', ' Please upload a image file for director image.');	
			redirect('admin/about_us', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["dimg"]["tmp_name"],"assets/images/team/" . $_FILES["dimg"]["name"]); 
			$dimg=$_FILES["dimg"]["name"];   
		}
		
		}
		
			
		$sql="UPDATE `about_us` SET `name`='$name',`position`='$position',`img`='$dimg'
		 WHERE about_id =".$about_id." ";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorabout', ' Unable to  edit the director details .');	
	    redirect('admin/about_us', 'location');	
		}else{
		return true;		
		}
		
	
	}
//branch details related
/*======================================================================================================================
display main ranch details
*/


	
	function mainBranch(){
			
		$sql='SELECT * FROM `branch` WHERE `branch_type` ="main"';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;		
		
		}
/*======================================================================================================================
edit display main  details
*/
	function mainbranchsEdit($branch_id){
		
		$name= trim($_POST['name']);
		$location= trim($_POST['location']);
		$address= trim($_POST['address']);
		$email = trim($_POST['email']);
		$contact1= trim($_POST['contact1']);
		$contact2= trim($_POST['contact2']);
		$contact3= trim($_POST['contact3']);
		$fax= trim($_POST['fax']);
		$map = $_POST['map'];
		$logo = $_POST['logoimage'];
		//logo upload
		if (isset($_FILES['logo']['tmp_name']) && $_FILES['logo']['tmp_name'] != '') {
	
		$file=$_FILES['logo']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['logo']['tmp_name']));
		$image_name= addslashes($_FILES['logo']['name']);
		$image_size= getimagesize($_FILES['logo']['tmp_name']);

	
		if ($image_size==FALSE) {
			$this->session->set_userdata('errorbranch', ' Please upload a image file for logo.');	
			redirect('admin/branch_information', 'location');
			
		}else{
			
			move_uploaded_file($_FILES["logo"]["tmp_name"],"assets/images/" . $_FILES["logo"]["name"]); 
			$logo=$_FILES["logo"]["name"];   
		}
		
		}
			
		$sql="UPDATE `branch` SET `name`='$name',`location`='$location',`address`='$address',
		`contact1`='$contact1',`contact2`='$contact2',`contact3`='$contact3',`email`='$email',`fax`='$fax',`map`='$map',
		`logo`='$logo' 
		WHERE branch_id =".$branch_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorbranch', ' Unable to  edit the main branch details details .');	
	    redirect('admin/branch_information', 'location');	
		}else{
		return true;		
		}
		
	
	}		
		
/*======================================================================================================================
display other branch details
*/


	
	function otherBranch(){
			
		$sql='SELECT * FROM `branch` WHERE `branch_type` !="main"';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;		
		
		}	
/*======================================================================================================================
add other branch details
*/
	function otherbranchsAdd(){
		
		
		$location= trim($_POST['location']);
		$address= trim($_POST['address']);
		$email = trim($_POST['email']);
		$contact1= trim($_POST['contact1']);
		$contact2= trim($_POST['contact2']);
		$contact3= trim($_POST['contact3']);
		$fax= trim($_POST['fax']);
		$map = $_POST['map'];
		
		
			
		$sql="INSERT INTO `branch`( `location`, `address`, `contact1`, `contact2`, `contact3`, `email`, 
		`fax`, `map` ) VALUES ('$location','$address', '$email','$contact1','$contact2','$contact3',
		'$fax','$map')";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorbranch', ' Unable to  edit the other branch details details .');	
	    redirect('admin/branch_information', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
edit other branch details
*/
	function otherbranchsEdit($branch_id){
		
		
		$location= trim($_POST['location']);
		$address= trim($_POST['address']);
		$email = trim($_POST['email']);
		$contact1= trim($_POST['contact1']);
		$contact2= trim($_POST['contact2']);
		$contact3= trim($_POST['contact3']);
		$fax= trim($_POST['fax']);
		$map = $_POST['map'];
		
		
			
		$sql="UPDATE `branch` SET `location`='$location',`address`='$address',
		`contact1`='$contact1',`contact2`='$contact2',`contact3`='$contact3',`email`='$email',`fax`='$fax',`map`='$map'
		 
		WHERE branch_id =".$branch_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorbranch', ' Unable to  edit the other branch details details .');	
	    redirect('admin/branch_information', 'location');	
		}else{
		return true;		
		}
		
	
	}	
/*======================================================================================================================
delete other branch details	
*/	
	public function otherbranchsDelete($branch_id){
		
		$location = $_POST['location'];
		$sql = 'DELETE FROM branch
		WHERE branch_id = '.$branch_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errorbranch', ' Unable to  delete the <strong>'.$location.'</strong> branch details.');	
	    redirect('admin/branch_information', 'location');	
		}else{
		return true;		
		}
	}
	
	/*======================================================================================================================
display services_info
*/


	
	function getSerivceInfo(){
			
		$sql='SELECT * FROM `services`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;		
		
		}
	
}


?>