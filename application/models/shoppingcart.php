<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ShoppingCart extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

//update cart
	function update_cart($rowid, $qty, $price, $amount) {
 		$data = array(
			'rowid'   => $rowid,
			'qty'     => $qty,
			'price'   => $price,
			'amount'   => $amount
		);

		$this->cart->update($data);
	}
	
	    			
//======================================================================================================			
//get reorder level
 		function Reorderlevel($product_id){
				
				$sql='SELECT reorder_level  FROM `product` WHERE `product_id` = '.$product_id.'';
				$Q = $this-> db-> query($sql);
				foreach ($Q-> result_array() as $row){
				$reorder_level= $row['reorder_level'];
				}
				return $reorder_level;
				
				}
			

	}


	
