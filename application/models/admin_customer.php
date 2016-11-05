<?php 
class Admin_customer extends CI_Model{

function _construct(){

	parent::_construct();
}

//about us related
/*======================================================================================================================
display about us details
*/


	
	function getAllcustomers(){
			
		$sql='SELECT * FROM `customer`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;		
		
		}

/*======================================================================================================================
edit  about us details
*/
	function customerEdit($customer_id){		
		$access= trim($_POST['access']);	
		$sql="UPDATE `customer` SET  `access`='$access'		
		WHERE customer_id =".$customer_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorcustomer', ' Unable to  edit the customer .');	
	    redirect('admin/customers', 'location');	
		}else{
		return true;		
		}
		
	
	}
}


?>