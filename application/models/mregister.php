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
		
	$newsalert=$this->input->post('unewsalert');
	if($newsalert!='active') $newsalert='inactive'; 
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
	'date_of_birth' => $this->input->post('dob'),
	'registered_date'=>date('Y-m-d'),
	'news_alert' =>$newsalert
  );
  
  
  $this->db->insert('customer',$data);
  
  
 /* $report = array();
    $report['error'] = $this->db->_error_number();
    $report['message'] = $this->db->_error_message();
    return $report;*/
  
}
/*
=====================================================================================
check email is already taken or not when user registration:
*/
	public function usrchkreg($username) {
   
	$username 		= htmlentities($username); // Get the username values
	$check_query	=  $this->db->query('SELECT * FROM customer WHERE email = "'.$username.'" '); // Check the database
	if($check_query->num_rows() > 0){
		return true;
		} // echo the num or rows 0 or greater than 0
		else{
		return false;	
			}

}
/*
=====================================================================================
check email is already taken or not when user update account:
*/
	public function usrchk($username) {
   
	$username 		= htmlentities($username); // Get the username values
	$check_query	=  $this->db->query('SELECT * FROM customer WHERE customer_id != '.$_SESSION['user_id'].' AND email = "'.$username.'" '); // Check the database
	if($check_query->num_rows() > 0){
		return true;
		} // echo the num or rows 0 or greater than 0
		else{
		return false;	
			}

}
//=============================================================================	
// customer verify account.
	function emailStatus($customer_id)	{
	$sql = 'UPDATE customer
	SET account= "active"
	WHERE customer_id= '.$customer_id.'
	';
	
	    $Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		  
	}


}
?>