<?php
class OrderDetails extends CI_Model {
	
	
	
	function __construct(){
		parent::__construct();
	}




//==============================================================================		
//get order detils for relevent customer	
//
	function order_details() {
      
		
		$sql = 'SELECT *
		FROM `orders`
		WHERE customer_id = '.$_SESSION['user_id'].'
		ORDER BY order_id DESC ';
		$Q = $this-> db-> query($sql);
		if($Q->num_rows()>0)
		return $Q->result();
		else
		return "empty";
		
	}
  
     
//=============================================================================	
//get more details

	function orderdetails($order_id) {
      
		
		$sql = 'SELECT *
		FROM `orders`
		WHERE orders.order_id = '.$order_id.''
		;
        $Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
		
  
  
	}
	
//=============================================================================	
//get relevent product details

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
			
//=============================================================================	
//get relevent product details

	function ordershowhistory() {
      
		//echo hit;die;
		$sql = 'SELECT *
		FROM `orders`
		WHERE customer_id = '.$_SESSION['user_id'].'
		ORDER BY order_id DESC ';
		$Q = $this-> db-> query($sql);
			foreach ($Q-> result_array() as $row){
				}
			return $Q;
				
		  
		  
			}
	
		
//=============================================================================	
//get relevent billing details

	function billingdetails($order_id) {
      
		
		$sql = 'SELECT *
		FROM `billing_details`
		WHERE billing_details.order_id ='.$order_id.''
		;
		$Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
	  
		}
  
//Apparel customization
//==============================================================================		
//get order detils for relevent customer	
//
	function designorder_details() {
      
		
		$sql = 'SELECT *
		FROM `design_order`
		WHERE customer_id = '.$_SESSION['user_id'].'
		ORDER BY design_order_id DESC ';
		$Q = $this-> db-> query($sql);
		if($Q->num_rows()>0)
		return $Q->result();
		else
		return "empty";
		
	}
//=============================================================================	
//get more details

	function designorderdetails($design_order_id) {
      
		
		$sql = 'SELECT *
		FROM `design_order`
		WHERE design_order.design_order_id = '.$design_order_id.''
		;
        $Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
	}
//=============================================================================	
//get more details

	function designdetails($design_order_id) {
      
		
		$sql = 'SELECT * FROM `design_order_details` WHERE design_order_id = '.$design_order_id.''
		;
        $Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;
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

?>