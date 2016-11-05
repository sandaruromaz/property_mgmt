<?php 
class Product_Comment extends CI_Model{

	function _construct(){

	parent::_construct();
	}


//=======================================================================================================================


	function count_all($product_id){
		
		$sql= 'SELECT COUNT( * ) AS numrows
		FROM product_review
		WHERE product_review.product_id='.$product_id.'
		AND product_review.status="active"';
		
		$Q = $this-> db-> query($sql);
				return $Q->row ()->numrows;
				
		
	 }


//=============================================================================	
// model to post information of comment to the database.
	
	
	public function Productcomment()	{
	   date_default_timezone_set('Asia/Kolkata');
        $time= date("h:i:s A");
       $data = array(
	   		'product_id' => $this->input->post('product'),
            'comment' => $this->input->post('comment'),
			'date'   => date('Y-m-d'),
			'time' 			=> $time,
            'customer_id' => $_SESSION['user_id'],		      
						  
            
        );
		
		$this->db->insert('product_review', $data);

	
	
   }
/*
===========================================================================
*/   
		function getProductcomment($product_id){
			
		 $sql= 'SELECT  product_review . * , customer.fname
		FROM product_review
		JOIN customer ON customer.customer_id = product_review.customer_id
		WHERE product_id = '.$product_id.'		
		AND status = "active"
		ORDER BY product_review.product_review_id DESC';	
		
		$Q = $this-> db-> query($sql);
		if($Q->num_rows()>0)
		return $Q->result();
		else
		return "empty";

		
		}   
   




}
?>