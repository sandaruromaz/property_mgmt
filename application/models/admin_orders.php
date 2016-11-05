<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_orders extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

//orders  related	
/*======================================================================================================================
get all orders  details
*/


	function getAllOrders(){	
		
		$sql='SELECT *
		FROM `orders`';
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
	
	}
/*======================================================================================================================
edit order status	
*/
	function orderstatusEdit($order_id){
		$status = $_POST['status'];
		$date=date('Y-m-d');
		
		if($status=="Delivered"){
			$deliverydate=",`delivery_date`='".$date."'";
			}
			
		$sql="UPDATE `orders` 
		SET `status`='$status' ".$deliverydate."
		WHERE order_id =".$order_id."";
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errororder', ' Unable to  edit the <strong>'.$order_id.'</strong> order status.');	
	    redirect('admin/orders', 'location');	
		}else{
		return true;		
		}
		
	
	}
/*======================================================================================================================
delete color details	
*/	
	public function orderDelete($order_id){
		
		$sql = 'DELETE FROM orders
		WHERE order_id = '.$order_id.'';				
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		if ($this->db->_error_number() == 1451){
		$this->session->set_userdata('errororder', ' Unable to  delete the <strong>'.$order_id.'</strong> order.');	
	    redirect('admin/orders', 'location');	
		}else{
		return true;		
		}
	}

/*======================================================================================================================
get all orders  details
*/

	function orderdetails($order_id) {
      
		
		$sql = 'SELECT orders.* ,customer.*
				FROM `orders` 
				INNER JOIN customer ON customer.customer_id = orders.customer_id
				WHERE `order_id` = '.$order_id.''
		;
        $Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
  
  
	}
	
/*======================================================================================================================
get all product details for order
*/

	function orderproductdetails($order_id) {
		$sql = 'SELECT order_detail . * , product.product_name
		FROM order_detail
		JOIN product ON product.product_id = order_detail.product_id
		WHERE order_id ='.$order_id.'';
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

	function ordersCount(){
			
		$sql= 'SELECT COUNT( * ) AS numrows
		FROM orders
		WHERE status = "Pending"
		';	
		$Q = $this-> db-> query($sql);
		return $Q->row ()->numrows;
			
		}	
}