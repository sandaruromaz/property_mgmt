<?php
class Wish_list extends CI_Model {
	
	
	
	function __construct(){
		parent::__construct();
	}


//=======================================================================================================================


	function count_all(){
		
		$sql= 'SELECT COUNT( * ) AS numrows
		FROM wish_list
		WHERE customer_id = '.$_SESSION['user_id'].'';
		
		$Q = $this-> db-> query($sql);
		return $Q->row ()->numrows;
		
		
	}

//==================================================================================================================================		
		
//
	function get_wishlist() {
      
		
		$sql = 'SELECT wish_list. * , product. *,  product_type.type_name
		FROM wish_list
		JOIN product ON product.product_id = wish_list.product_id
		JOIN product_type ON product_type.product_type_id = product.product_type_id
		WHERE wish_list.customer_id = '.$_SESSION['user_id'].''
		;
		$Q = $this-> db-> query($sql);
			if($Q->num_rows()>0)
						return $Q->result();
						
						else
						return "empty";		
  
		}
  
     
//=============================================================================	
// model to delete information of wish list to the database.
		public function wishListRemove($product_id)	{
		 $sql = 'DELETE FROM wish_list
		WHERE customer_id = '.$_SESSION['user_id'].'
		AND product_id = '.$product_id.'
		';
		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);

		}


   
//=============================================================================	
// model to post information of wish list to the database.
	
	
	   public function WishList($product_type_id, $product_id)	{
       $data = array(            
			'product_id' => $this->input->post('wishproductid'),
			'customer_id' => $_SESSION['user_id'],
			
        );
		$this->db->insert('wish_list', $data);
		
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorSendComment', ' Unable to  add wishlist the product is already exists in your wishlist.');	
	    redirect('shop/product_details/'.$product_id.'/');	
		}else{
		return true;		
		}
    
}







}

?>