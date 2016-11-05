<?php
class ReserveDetails extends CI_Model {
	
	
	
	function __construct(){
		parent::__construct();
	}


		
//=============================================================================	
//get relevent product details

	function reservehowhistory() {
      
		$sql = 'SELECT   * 
				FROM  table_reservation';
		
			
				$Q = $this-> db-> query($sql);
				if($Q->num_rows()>0)
				return $Q->result();
				
				else
				return "empty";
				}	


/**/



	function reserveHowHistorys($table_reservation_id) {
		// /echo 'ff';die;

		$sql = 'SELECT table_reservation.* ,customer.*
				FROM `table_reservation` 
				INNER JOIN customer ON customer.customer_id = table_reservation.customer_id
				WHERE `table_reservation_id` = '.$table_reservation_id.''
		;
        $Q = $this-> db-> query($sql);
		foreach ($Q-> result_array() as $row){
			}
		return $Q;

	}


	function addReservation(){

		$sql= "INSERT INTO `table_reservation`( `date`, `start_time`, `end_time`, `chair_count`, `table_count`, `customer_id`, `created_date`, `status`, `confirm_date`) 
		VALUES ('".$_SESSION['reservation']['date']."','".$_SESSION['reservation']['checkin']."','".$_SESSION['reservation']['checkout']."',".$_SESSION['reservation']['chair_count'].",".$_SESSION['reservation']['table_count'].",".$_SESSION['user_id'].",'".DATE('Y-m-d')."','pending','')";


		$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);
		$id = $this->db->insert_id();
		if ($this->db->_error_number() == 1062){
		$this->session->set_userdata('errorreservation2', ' Unable');	
	    redirect('pages/table_reservation2', 'location');	
		}else{
		return $id;		
		}	


	}


		
	
}

?>