<?php 
class Member extends CI_Model{

function _construct(){

	parent::_construct();
	
}

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
	'dob'=>$this->input->post('date'),
	'news_alert' => $this ->input->post('newsalert1'),
	
  );
 
}
function get_customerid(){
	
	$r = $_POST["email"];
		
		$sql= "SELECT customer_id
		FROM `customer`
		WHERE email = '$r'";
		
		$Q = $this-> db-> query($sql);
	if ($Q-> num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$d = $row['customer_id'];
	}
	return $d;
	
	}
	}
//=============================================================================	
// model to delete information of wish list to the database.
 function checkCustomer()

	{
	$r = $_POST["forgetemail"];		
	$sql= "SELECT customer_id 
	FROM `customer`
	WHERE email = '$r'";
	
	$Q = $this-> db-> query($sql);
	if ($Q-> num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$d = $row['customer_id'];
	}
	return $d;
	
	}}

    
//=============================================================================	
// model to delete information of wish list to the database.
 function passwordupdate($pwd_reset)

	{
	$r = $_POST['forgetemail'];
	$pwd_reset;
	$sql= "UPDATE customer
	SET password= '$pwd_reset'
	WHERE email= '$r'";
	$Q = $this-> db-> query($sql);
	$this-> db-> set($Q);
	}



//=============================================================================	
// memebr signin
	
function memberSignIn(){
	
	
    $user=$this->input->post('email2');
    $pass=sha1($this->input->post('pass2'));
	//$_SESSION['user_name']= $user;
  	$this-> db-> where('email =', $user);
	$this-> db-> where('password =', $pass);
	$this-> db-> where('account =', "active");
	$this-> db-> where('access =', "Yes");
	$Q = $this-> db-> get('customer');//table name
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
	$_SESSION['user_id'] = $row['customer_id'];
	$_SESSION['user_name']= $row['email'];
	}
	return true;
	}else{return false;}
	
}
//=============================================================================	
// get user info    
	 
	 function getUserInfo($id){
	$this-> db-> where('customer_id =', $id);
	$Q = $this-> db-> get('customer');//table name
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
	
	}
	return $Q;// send entire object
	}}
//=============================================================================	
// update account  
	function updateAcoount(){

	$data2 = array(
	 'title' => $this->input->post('title'),
	'fname'=>$this->input->post('ufname'),
	'lname'=>$this->input->post('ulname'),
	'email'=>$this->input->post('uemail'),
	'date_of_birth'=>$this->input->post('udate'),
	'address'=>$this->input->post('uadd'),
    'address1'=>$this->input->post('uadd1'),
  	'city'=>$this->input->post('ucity'),
    'postal_code'=>$this->input->post('upostal'),
    'telephone'=>$this->input->post('utel'),
	'mobile'=>$this->input->post('umob'),
	);
	$where = "customer_id =".$_SESSION['user_id']; 
	$this->db->update('customer', $data2, $where);
	return true;
	}	
//=============================================================================	
// change Password
	
	function changePassword(){
	/*if user want to change the password*/
	if($this->input->post('upass') && $this->input->post('unewpass')){
    $pass=sha1($this->input->post('upass'));
    $newpass=sha1($this->input->post('unewpass'));
	
	$this-> db-> where('customer_id =', $_SESSION['user_id']);
	$this-> db-> where('email =', $_SESSION['user_name']);
	$this-> db-> where('password =', $pass);
	$Q = $this-> db-> get('customer');//table name
	if ($Q-> num_rows() > 0){
	
	$data = array('password' => $newpass);
	$where = "customer_id =".$_SESSION['user_id']; 
	$this->db->update('customer', $data, $where);
	
	return true;
	}
	}
	}
	
	public function showNewsLetter(){
	$query = $this->db->query('SELECT * FROM customer WHERE customer_id='.$_SESSION['user_id']);
	if ($query->num_rows() > 0){
		 foreach ($query->result() as $p) {
                $data[] = $p;
            }
            return $data;
		
	}else{
		return false;
		}
	}
	
	public function updateNewsl(){
	$newsalert=$this->input->post('newsalert1');
	if($newsalert!='active') $newsalert='inactive'; 
	$data=array(
    
	'news_alert' =>$newsalert
  );
  	//$data = array('password' => $newpass);
	$where = "customer_id =".$_SESSION['user_id']; 
	$this->db->update('customer', $data, $where);
	return true;

	}


/*======================================================================*/

//table reservation

function add_reserve_save(){



$data=array(


    'date'=>$_SESSION['reservation']['date'],
	'start_time'=>$_SESSION['reservation']['checkin'],
    'end_time'=>$_SESSION['reservation']['checkout'],
    'chair_count'=>$_SESSION['reservation']['chair_count'],
	'table_count'=>$_SESSION['reservation']['table_count'],
	'customer_id'=>$_SESSION['user_id'],
	'created_date'=>DATE('Y-m-d'),
	'status'=>"pending",

);


$this->db->insert('table_reservation',$data);
	}


	function chairsAvilability(){
	
	$sql= "SELECT available 
	FROM `table_reservation_resource`
	WHERE type = 'chairs'";
	
	$Q = $this-> db-> query($sql);
	if ($Q-> num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$d = $row['available'];
	}
	return $d;
	
	}
	}


		function tableAvilability(){
	
	$sql= "SELECT available 
	FROM `table_reservation_resource`
	WHERE type = 'tables'";
	
	$Q = $this-> db-> query($sql);
	if ($Q-> num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$d = $row['available'];
	}
	return $d;
	
	}
	}




function add_test(){
	
$data=array(
    'test_name'=>$this->input->post('test_name'),
	'test_address'=>$this->input->post('test_address'),
    'test_number'=>$this->input->post('test_number'),

    
    
  );
//var_dump($_POST);die;
$this->db->insert('test',$data);
 
}



function test_view($test_id){
	$this-> db-> where('test_id =', $test_id);	
    $Q = $this-> db-> get('test');//table name
	
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
		}
	return $Q;
	}
	}


	function test_update(){	



		$data2 = array(
	'test_name' => $this->input->post('test_name'),
	'test_number'=>$this->input->post('test_number'),
		);
	$this->db->update('test',$data2);
	return true;

	}



	
 


	
	
}

   


?>