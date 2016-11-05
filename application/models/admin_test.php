<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_test extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

//orders  related	
/*======================================================================================================================
get all orders  details
*/


	function getAllTest($test_id){	
		

	// $this-> db-> where('test_id =', $test_id);	
 //    $Q = $this-> db-> get('test');//table name
	
	// if ($Q-> num_rows() > 0){
	// foreach ($Q-> result_array() as $row){
	// 	}
	// return $Q;
	// }


		$sql='SELECT *
		FROM `test`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
	
		// $sql='SELECT *
		// FROM `test`';
		// $Q = $this-> db-> query($sql);
		// foreach ($Q-> result_array() as $row){
		// 	}
		// return $Q;
		
	
	}
/*======================================================================================================================
edit reserve status	
*/
	function reservestatusEdit($test_id){
		$status = $_POST['status'];
		$date=date('Y-m-d');
		
		if($status=="Confirmed"){
			$deliverydate=",`delivery_date`='".$date."'";
			}
			
		$sql="UPDATE `test` 
		SET `status`='$status' ".$confirm_date."
		WHERE tst_id =".$test_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errororder', ' Unable to  edit the <strong>'.$test_id.'</strong> reserve status.');	
	    redirect('admin/table_reserve', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
delete reserve details	
*/	
	public function testdelete($test_id){
		//print($test_id);die;
		
		$sql = 'DELETE FROM test
		WHERE test_id = '.$test_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errororder', ' Unable to  delete the <strong>'.$table_id.'</strong> Reservation.');	
	    redirect('admin/test', 'location');	
		}else{
		return true;		
		}
	}

/*======================================================================================================================
get all orders  details
*/

	function testdetails($test_id) {
      
		
		$this-> db-> where('test_id =', $test_id);	
    $Q = $this-> db-> get('test');//table name
	
	 if ($Q-> num_rows() > 0){
	 foreach ($Q-> result_array() as $row){
	 	}
	 return $Q;
	 }

	}

function reservedetails2($table_reservation_id) {	
	
		$sql = 'SELECT table_reservation.* ,customer.*
				FROM `table_reservation` 
				INNER JOIN customer ON customer.customer_id = table_reservation.customer_id
		WHERE table_reservation_id = '.$table_reservation_id.'';
		//echo $sql;die;

		$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";

			

	}


/*reservation resourses actions*/

/*======================================================================================================================
add reservation
*/


	
function getAllReservations_add(){	
		
		$sql='SELECT *
		FROM `table_reservation_resource`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}



/*======================================================================================================================
udate reservation resourse reserve status	
*/
	function reserveresourseEdit($table_reservation_resourceid){
		//$status = $_POST['status'];
		//$date=date('Y-m-d');
		
		$type= trim($_POST['type']);
		$total= trim($_POST['total']);
		$available= trim($_POST['available']);

		
			

		$sql="UPDATE `table_reservation_resource` SET `type`='$type',`total`='$total',`available`='$available'
		 WHERE table_reservation_resourceid =".$table_reservation_resourceid." ";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorabout', ' Unable to  edit the reservation .');	
	    redirect('admin/resourseedit', 'location');	
		}else{
		return true;		
		}
		
		
		
	
	}
 
/*======================================================================================================================
count all pending orders
*/

	function ordersCount(){
			
		$sql= 'SELECT COUNT( * ) AS numrows
		FROM orders
		WHERE status = "Pending"
		';	
		$Q = $this-> db-> query($sql);
		return $Q->row ()->numrows;
			
		}	

public function insert_reservation_detail($data)
	{
		$this->db->insert('billing_details', $data);
		
		//distroy card after billed 

		$this->session->sess_destroy();
	    unset($_SESSION['billingaddress']);
		unset($_SESSION['delivery']);
		unset($_SESSION['payment']);
		$this->cart->destroy();
	}










}


