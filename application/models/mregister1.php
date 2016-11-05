<?php 
class MRegister extends CI_Model{

function _construct(){

	parent::_construct();
}

/*
=====================================================================================
This function will be insert new customer registration:
*/
function add_user(){
$data=array(
    'title'=>$this->input->post('title'),
	'fname'=>$this->input->post('fname'),
    'lname'=>$this->input->post('lname'),
    'email'=>$this->input->post('email'),
    'password'=>sha1($this->input->post('pass')),
    'address'=>$this->input->post('add'),
    'address1'=>$this->input->post('add1'),
  	'city'=>$this->input->post('city'),
    'postal_code'=>$this->input->post('postal'),
    'telephone'=>$this->input->post('tel'),
	'mobile'=>$this->input->post('mob'),
	'dob' => date("Y-m-d"),
	
  );
  $this->db->insert('customer',$data);
}
}


?>