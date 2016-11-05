<?php 
class Feedback extends CI_Model{

function _construct(){

	parent::_construct();
}

/*
=====================================================================================
This function will be insert new customer registration:
*/
function sendFeedback(){
	$time=date('h:i:s A');
	$data=array(
	'date'=>date("Y-m-d"),
    'time'=>$time,	
    'name'=>$this->input->post('name'),
	'email'=>$this->input->post('femail'),
    'phone'=>$this->input->post('phone'),    
    'message'=>$this->input->post('message'),
  );




  $this->db->insert('feedback',$data);
}
}


?>