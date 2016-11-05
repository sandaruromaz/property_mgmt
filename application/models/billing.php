<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	/*public function insert_customer($data)
	{
		$this->db->insert('customers', $data);

		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;		
	}*/
	
	//add to db
	
	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}
	
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
		$this->cart->destroy();
	}
	
	public function insert_billing_detail($data)
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