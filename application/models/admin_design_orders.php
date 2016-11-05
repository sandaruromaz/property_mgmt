<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_design_orders extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

//orders  related	
/*======================================================================================================================
get all orders  details
*/


	function getAllDesignOrders(){	
		
		$sql='SELECT *
		FROM `design_order`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
edit order status	
*/
	function designorderstatusEdit($design_order_id){
		$status = $_POST['status'];
		$date=date('Y-m-d');
		
		if($status=="Confirmed"){
			$confirmeddate=",`confirmed_date`='".$date."'";
			}
			
		$sql="UPDATE `design_order` 
		SET `status`='$status' ".$confirmeddate."
		WHERE design_order_id =".$design_order_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errordesignorder', ' Unable to  edit the <strong>'.$design_order_id.'</strong> order status.');	
	    redirect('admin/design_orders', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
delete color details	
*/	
	public function designorderDelete($design_order_id){
		
		$sql = 'DELETE FROM design_order
		WHERE design_order_id = '.$design_order_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errordesignorder', ' Unable to  delete the <strong>'.$design_order_id.'</strong> order.');	
	    redirect('admin/design_orders', 'location');	
		}else{
		return true;		
		}
	}

/*======================================================================================================================
get all orders  details
*/

	function designorderdetails($design_order_id) {
      
		
		$sql = 'SELECT design_order.* ,customer.*
				FROM `design_order` 
				INNER JOIN customer ON customer.customer_id = design_order.customer_id
				WHERE `design_order_id` = '.$design_order_id.''
		;
        $Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
  
  
	}
	
/*======================================================================================================================
get all product details for order
*/

  function designdetails($design_order_id) {
      
		
		$sql = 'SELECT * FROM `design_order_details` WHERE design_order_id = '.$design_order_id.''
		;
        $Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
	}
			
	

/*======================================================================================================================
get billing   details for relevent order
*/

	function billingdetails($order_id) {
		$sql = 'SELECT *
			FROM `billing_details`
			WHERE billing_details.order_id ='.$order_id.'';
			$Q = $this-> db-> query($sql);
			foreach ($Q-> result_array() as $row){
			}
			return $Q;
	        }  
/*======================================================================================================================
count all pending orders
*/

	function designordersCount(){
			
		// $sql= 'SELECT COUNT( * ) AS numrows
		// FROM design_order
		// WHERE status = "Pending"
		// ';	
		// $Q = $this-> db-> query($sql);
		// return $Q->row ()->numrows;
			
		}	
		
/*======================================================================================================================
check 
*/

	function getquantity($design_order_id){
			
		$sql= 'SELECT design_order_details. * , sum(quantity) AS items FROM `design_order_details` 
		WHERE `design_order_id`= '.$design_order_id.'
		';	
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
	}
}