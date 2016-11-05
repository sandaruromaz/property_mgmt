<?php 
class MDashboard extends CI_Model{

function _construct(){
parent::_construct();
}



function adminSignIn(){
	$user=$this->input->post('login_username');
    $pass=sha1($this->input->post('login_password'));
	
  	$this-> db-> where('username =', $user);
	$this-> db-> where('password =', $pass);
	$Q = $this-> db-> get('user');//table name
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
	$_SESSION['admin_id']= $row['user_id'];
	}
	return true;
	}else{
	return false;
	}
	
}


}
?>
