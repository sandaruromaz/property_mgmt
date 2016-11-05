<?php 
class MDashboard extends CI_Model{

function _construct(){
parent::_construct();
}

/*
=====================================================================================
admin login controller.
*/

function adminSignIn(){
	$user=$this->input->post('login_username');
    $pass=sha1($this->input->post('login_password'));
	
  	$this-> db-> where('email =', $user);
	$this-> db-> where('password =', $pass);
	$this-> db-> where('status =', 'active');
	$Q = $this-> db-> get('user');//table name
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
	$_SESSION['admin_id']= $row['user_id'];
	$_SESSION['user_role_id']= $row['user_role_id'];
	}
	return true;
	}else{
	return false;
	}
	
}
/*
=====================================================================================
get user role access details controller.
*/
function getRoalAuth($path,$user_role_id){
	$sql='SELECT user_menu . * , user_menu_type.user_menu_type_name
		FROM user_menu
		JOIN user_menu_type ON user_menu_type.user_menu_type_id = user_menu .user_menu_type_id
        WHERE `user_role_id` ='.$user_role_id.' 
		AND `user_menu_type_name`="'.$path.'"';
	
	
	/*$this-> db-> where('user_role_id =', $user_role_id);
	$this-> db-> where('menu =', $path);
	$Q = $this-> db-> get('user_menu');//table name*/
	$Q = $this-> db-> query($sql);
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
	
	}
	return true;
	}else{
	return false;
	}
	}
/*
=====================================================================================
other Page for this controller.
*/	
function getUserInfo($user_id){
	$this-> db-> where('user_id =', $user_id);
	$Q = $this-> db-> get('user');
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
	
	}
	return $Q;// send entire object
	}
	
	}
/*
=====================================================================================
check email exist or not for forget password controller.
*/
 function checkUser()

	{
	$r = $_POST["emailforget"];		
	$sql= "SELECT user_id 
	FROM `user`
	WHERE email = '$r'";
	
	$Q = $this-> db-> query($sql);
	if ($Q-> num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$d = $row['user_id'];
	}
	return $d;
	
	}}
/*
=====================================================================================
admin password reset controller.
*/
 
 function passwordReset($pwd_reset)

	{
	$r = $_POST['emailforget'];
	$pwd_reset;
	$sql= "UPDATE user
	SET password= '$pwd_reset'
	WHERE email= '$r'";
	$Q = $this-> db-> query($sql);
	$this-> db-> set($Q);
	}
}
?>
