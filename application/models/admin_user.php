<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_user extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

//User role related	
/*======================================================================================================================
get all User role details
*/


	function getAllUserrole(){	
		
		$sql='SELECT *
		FROM `user_roles` ORDER BY user_role_id ASC';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
edit User role details	
*/
	function userroleEdit($user_role_id){
		
		$userrolename= trim($_POST['userrolename1']);
		
			
		$sql="UPDATE `user_roles` 
		SET `user_role_name`='$userrolename'
		WHERE user_role_id =".$user_role_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('erroruserrole', ' Unable to  edit the  user role because <strong>'.$userrolename.'</strong> user role already exists.');	
	    redirect('admin/user_role', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
add User role details	
*/	
	function userroleAdd(){
		
		
		$userrolename = trim($_POST['userrolename']);
		
		
		$sql= "INSERT INTO 
		`user_roles`(`user_role_name`)
		VALUES ('$userrolename')";		
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('erroruserrole', ' Unable to  add the <strong>'.$userrolename.'</strong> user role because <strong>'.$userrolename.'</strong> user role already exists.');	
	    redirect('admin/user_role', 'location');	
		}else{
		return true;		
		}		
	
	}
/*======================================================================================================================
delete User role details	
*/	
	public function userroleDelete(){
		$user_role_id = $_POST['userroleid'];
		$userrolename = $_POST['userrolename'];
		$sql = 'DELETE FROM user_roles
		WHERE user_role_id = '.$user_role_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('erroruserrole', ' Unable to  delete the <strong>'.$userrolename.'</strong> user role as it was associated with users.');	
	    redirect('admin/user_role', 'location');	
		}else{
		return true;		
		}
	}
//User menu related	
/*======================================================================================================================
get all User menu details
*/


	function getAllUsermenu(){	
		
		$sql='SELECT *
		FROM `user_menu_type` ORDER BY user_menu_type_id ASC';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
edit User role details	
*/
	function usermenuEdit($user_menu_type_id){
		
		$usermenuname= trim($_POST['usermenuname1']);
		
			
		$sql="UPDATE `user_menu_type` 
		SET `user_menu_type_name`='$usermenuname'
		WHERE user_menu_type_id =".$user_menu_type_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorusermenu', ' Unable to  edit the  user menu because <strong>'.$usermenuname.'</strong> user menu already exists.');	
	    redirect('admin/user_menu', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
add User role details	
*/	
	function usermenuAdd(){
		
		
		$usermenuname = trim($_POST['usermenuname']);
		
		
		$sql= "INSERT INTO 
		`user_menu_type`(`user_menu_type_name`)
		VALUES ('$usermenuname')";		
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorusermenu', ' Unable to  add the <strong>'.$usermenuname.'</strong> user menu because <strong>'.$usermenuname.'</strong> user menu already exists.');	
	    redirect('admin/user_menu', 'location');	
		}else{
		return true;		
		}		
	
	}
/*======================================================================================================================
delete User role details	
*/	
	public function usermenuDelete(){
		$user_menu_id = $_POST['usermenuid'];
		$usermenuname = $_POST['usermenuname'];
		$sql = 'DELETE FROM user_menu_type
		WHERE user_menu_type_id = '.$user_menu_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errorusermenu', ' Unable to  delete the <strong>'.$usermenuname.'</strong> user menu as it was associated with users.');	
	    redirect('admin/user_menu', 'location');	
		}else{
		return true;		
		}
	}
//User privileges related	
/*======================================================================================================================
get all User privileges details
*/


	function getAllUserprivileges(){	
		
		$sql='SELECT user_menu . * , user_roles.user_role_name, user_menu_type.user_menu_type_name
		FROM user_menu
                JOIN user_roles ON user_roles.user_role_id = user_menu .user_role_id
		JOIN user_menu_type ON user_menu_type.user_menu_type_id = user_menu .user_menu_type_id ORDER BY user_role_name ASC';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
	function getAllUserprivilegesname(){	
		
		$sql='SELECT DISTINCT   user_menu. user_role_id, user_roles.user_role_name
		FROM user_menu
        JOIN user_roles ON user_roles.user_role_id = user_menu .user_role_id
		ORDER BY user_role_id DESC;';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
add User privileg details	
*/	
	function userprivilegAdd(){
		$userrole = $_POST['userrole'];
	    $usermenu = $_POST['usermenu']; 	
		
		$sql= "INSERT INTO 
		`user_menu`(`user_role_id`,`user_menu_type_id`)
		VALUES ('$userrole','$usermenu')";		
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('erroruserprivilege', ' Unable to  add the <strong>'.$userrole.'</strong> user menu because <strong>'.$usermenu.'</strong> user menu already exists.');	
	    redirect('admin/user_privileges', 'location');	
		}else{
		return true;		
		}		
	
	}
/*======================================================================================================================
delete User privilege details	
*/	
	public function userprivilegesDelete(){
		$usermenuid = $_POST['usermenuid'];
		$userroleid = $_POST['userroleid'];
		$sql = 'DELETE FROM user_menu
		WHERE user_menu_type_id = '.$usermenuid.'
		AND user_role_id='.$userroleid.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		//if ($this->db->_error_number() == 1451){
		//$this->session->set_userdata('erroruserprivilege', ' Unable to  delete the <strong>'.$usermenuname.'</strong> user menu as it was associated with users.');	
	   // redirect('admin/user_privileges', 'location');	
		//}else{
		return true;		
		//}
	}
//system users related	
/*======================================================================================================================
get all system users  details
*/


	function getAllsystem_users(){	
		
		$sql='SELECT user . * , user_roles.user_role_name
		FROM user
        JOIN user_roles ON user_roles.user_role_id = user.user_role_id';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
	
	
	

/*======================================================================================================================
add all system users details	
*/	
	function userAdd(){
		$userrole = trim($_POST['userrole']);
	    $email = trim($_POST['email']);
		$password = sha1($_POST['password']);
	    $title = trim($_POST['title']);
		$fname =trim( $_POST['fname']);
	    $lname =trim( $_POST['lname']);
		$add1 = trim($_POST['add1']);
	    $add2 = trim($_POST['add2']);
		$city = trim($_POST['city']);
	    $cno = trim($_POST['cno']);
		$date=date('Y-m-d');
	     	
		
		$sql= "INSERT INTO `user`(`title`, `fname`, `lname`, `email`, `password`, `address`, `address1`, `city`, `contact_no`, `add_date`, `user_role_id`) 
		VALUES ('$title','$fname','$lname','$email','$password','$add1','$add2','$city','$cno','$date','$userrole')";		
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('erroruserdetails', ' Unable to  add the <strong>'.$email.'</strong> user because <strong>'.$email.'</strong> user is already exists.');	
	    redirect('admin/system_users', 'location');	
		}else{
		return true;		
		}		
	}
/*======================================================================================================================
edit system users details	
*/
	function userstatusEdit($user_id){
		$userrole = trim($_POST['userrole']);
		$status= $_POST['status'];
		
			
		$sql="UPDATE `user`
		SET `user_role_id`='$userrole',`status`='$status'
		WHERE user_id =".$user_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		return true;		
		}
/*======================================================================================================================
delete system users details	
*/	
	public function userDelete($user_id){
		$email = $_POST['email'];
		//$usermenuname = $_POST['usermenuname'];
		$sql = 'DELETE FROM user
		WHERE user_id = '.$user_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('erroruserdetails', ' Unable to  delete the  <strong>"'.$email.'"</strong>  user as this user  associated with task.');	
	    redirect('admin/system_users', 'location');	
		}else{
		return true;		
		}
	}		

/*======================================================================================================================
get current system users  details
*/


	function getcurrentsystem_user(){	
		
		$sql='SELECT user . * , user_roles.user_role_name
		FROM user
        JOIN user_roles ON user_roles.user_role_id = user.user_role_id
	
		WHERE  `user_id`='.$_SESSION['admin_id'].'
		';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
get relevent system user menu
*/


	function getcurrentsystem_usermenu(){	
		
		$sql='SELECT user .user_id , user_roles.user_role_name, user_menu.user_menu_type_id, user_menu_type.user_menu_type_name
		FROM user
        JOIN user_roles ON user_roles.user_role_id = user.user_role_id
		JOIN user_menu ON user_menu.user_role_id = user.user_role_id
		JOIN  user_menu_type ON  user_menu_type.user_menu_type_id =user_menu.user_menu_type_id
		WHERE  `user_id`='.$_SESSION['admin_id'].'
		';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
get relevent system user menu
*/	
	function updateAcoount(){

	$data2 = array(
	 'title' => trim($this->input->post('title')),
	'fname'=>trim($this->input->post('fname')),
	'lname'=>trim($this->input->post('lname')),
	'email'=>trim($this->input->post('email')),
	//'date_of_birth'=>$this->input->post('udate'),
	'address'=>trim($this->input->post('add')),
    'address1'=>trim($this->input->post('add1')),
  	'city'=>trim($this->input->post('city')),    
	'contact_no'=>trim($this->input->post('contact')),
	);
	$where = "user_id =".$_SESSION['admin_id']; 
	$this->db->update('user', $data2, $where);	
	if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorrmy', ' Unable to  edit the profile email is already taken.');	
	    redirect('admin/my_profile', 'location');	
		}else{
		return true;		
		}
	}
	
	//=============================================================================	
// change Password
	
	function changePasswords(){
	/*if user want to change the password*/
	if($this->input->post('cpass') && $this->input->post('newpass')){
    $pass=sha1($this->input->post('cpass'));
    $newpass=sha1($this->input->post('newpass'));
	
	$this-> db-> where('user_id =', $_SESSION['admin_id']);
	//$this-> db-> where('email =', $_SESSION['user_name']);
	$this-> db-> where('password =', $pass);
	$Q = $this-> db-> get('user');//table name
	if ($Q-> num_rows() > 0){
	
	$data = array('password' => $newpass);
	$where = "user_id =".$_SESSION['admin_id']; 
	$this->db->update('user', $data, $where);
	
	return true;
	}
	}
	}
	
	
	//Team members related	
/*======================================================================================================================
get all team members  details
*/


	function getAllteam_members(){	
		
		$sql='SELECT * FROM team_member';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
	
	//======================================
	//  Add team member
	//======================================
		function addTeamMember(){
		 
		$emp_id = trim($_POST['emp_id']);
	    $title = trim($_POST['title']);
		$fname =trim( $_POST['fname']);
	    $lname =trim( $_POST['lname']);
		$designation = trim($_POST['designation']);
		$fb_link = trim($_POST['fb_link']);
	    $description = trim($_POST['description']);
		$profile_image = trim($_POST['pro_image']);		
	     	
		
		$sql= "INSERT INTO `team_member`(`emp_id`,`title`, `first_name`, `last_name`, `designation`, `fb_link`, `description`, `profile_image`) 
		VALUES ('$emp_id','$title','$fname','$lname','$designation','$fb_link','$description','$profile_image')";		
		echo $sql;
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('erroruserdetails', ' Unable to  add the <strong>'.$email.'</strong> user because <strong>'.$email.'</strong> user is already exists.');	
	    redirect('admin/team_members', 'location');	
		}else{
		return true;		
		}		
	}
}