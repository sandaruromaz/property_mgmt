<?php 
class CompanyDetails extends CI_Model{

	function _construct(){

	parent::_construct();
	}

// model to get company logo.
	function getLogo(){

	$Q = $this->db->query('SELECT `logo` FROM `branch` LIMIT 1');
	if ($Q-> num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$logo= $row['logo'];
	}
	return $logo;
	}
	}
	

// model to get company Main branch details
	
	function getMainBranchDetails(){
	$this-> db-> select();	
	$this-> db-> from('branch');
	$this-> db-> where('branch_id',1); // select details from branch table where branch_id=1
	$Q = $this-> db-> get();	
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
		}
	return $Q;
	}
	}
	
	// model to get company  branch details
	
	function getBranchDetails(){	
    $Q = $this-> db-> get('branch');//table name
	
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
		}
	return $Q;
	}
	}
	
	// model to get company  branch details
	
	function getAbout(){	
    $Q = $this-> db-> get('about_us');//table name
	
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
		}
	return $Q;
	}
	}
	
	//=====================
	//   Add new Service
	//=====================
	function addService(){
		$name = trim($_POST['name']);
	    $topic = trim($_POST['topic']);
		$description = trim($_POST['description']); 
	     	
		
		$sql= "INSERT INTO `services`(`name`, `topic`, `description`) 
		VALUES ('$name','$topic','$description')";		
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('erroruserdetails', ' Unable to  add the <strong>'.$email.'</strong> user because <strong>'.$email.'</strong> user is already exists.');	
	    redirect('admin/service_information', 'location');	
		}else{
		return true;		
		}		
	}
}


?>