<?php 
class Admin_feedback extends CI_Model{

function _construct(){

	parent::_construct();
}

//feedback related	
/*======================================================================================================================
count all unread feedback messages.
*/

	function feedbackCount(){
			
		$sql= 'SELECT COUNT( * ) AS numrows
		FROM feedback
		WHERE status = "unread"
		AND  type=1
		';	
		$Q = $this-> db-> query($sql);
		return $Q->row ()->numrows;
			
		}

/*======================================================================================================================
display unread messages in header.
*/


	
	function feedheader(){
			
		$sql='SELECT *
		FROM `feedback`
		WHERE status= "unread"
		AND  type=1
		ORDER BY feedback_id DESC';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;		
		
		}

/*======================================================================================================================
 get feedback details.
*/



	function feedDetails(){
		$sql='SELECT *
		FROM `feedback`
		WHERE  `type` = "1"
		ORDER BY feedback_id DESC';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
}

/*======================================================================================================================
read feedback message.
*/




	function feedbackread($feedback_id){
		$sql="UPDATE `feedback`
		SET 
		`status`='read'
		WHERE feedback_id =".$feedback_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		return true;
	}



/*======================================================================================================================
view feedback message.
*/


	function onefeedDetails($feedback_id){
		$sql='SELECT *
		FROM `feedback`
		WHERE feedback_id = '.$feedback_id.'';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;	
	
	}
/*======================================================================================================================
save reply message.
*/


	function saveFeed(){
		$name = trim($_POST['name']);
		$to = trim($_POST['to']);
		$message = trim($_POST['message']);
		$date=date('Y-m-d');
		date_default_timezone_set('Asia/Kolkata');
        $time= date("h:i:s A");
		$status="read";
		
		$sql="INSERT INTO `feedback`( `date`, `time`, `name`, `email`,  `message`, `status`, `type`) VALUES 
		('$date','$time', '$name', '$to','$message','$status','0')";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		//$this->session->set_userdata('errordesignorder', ' Unable to  edit the <strong>'.$design_order_id.'</strong> order status.');	
	   }else{
		return true;		
		}
	}
/*======================================================================================================================
 get otbox details.
*/



	function outboxDetails(){
		$sql='SELECT *
		FROM `feedback`
		WHERE  `type` = "0"
		ORDER BY feedback_id DESC';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
}


}


?>