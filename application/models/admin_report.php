<?php 
class Admin_report extends CI_Model{

	function _construct(){

	parent::_construct();
	}

//report related
//============================================================================================================================
//   model to get Order details report.
	
	function getorderreport(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}
	
	$date='`order_date` >= "'.$start.'" && `order_date`  <= "'.$end.'"';	
	$sql ='SELECT *
		  FROM  `orders`	
	      WHERE '.$date.'
		 ';
	$Q = $this-> db-> query($sql);		
    if($Q->num_rows()>0)
				return $Q->result();
				else
				return 'empty';

    
}
//
//============================================================================================================================
// model to get all Canceled Order details report.
	
	function getcanceledsorderreport(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}
	
	$date='`order_date` >= "'.$start.'" && `order_date`  <= "'.$end.'"';	
	$sql ='SELECT *
	FROM  `orders`	
	WHERE '.$date.'
	AND `status`="Canceled"
	';
	$Q = $this-> db-> query($sql);		
	if($Q->num_rows()>0)
	return $Q->result();
	else
	return 'empty';

    
}

//
//============================================================================================================================
// model to get all Delivered Order details report.
	
	function getpendingorderreport(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}
	
	$date='`order_date` >= "'.$start.'" && `order_date`  <= "'.$end.'"';	
	$sql ='SELECT *
	FROM  `orders`	
	WHERE '.$date.'
	AND `status`="Pending"
	';
	$Q = $this-> db-> query($sql);		
	if($Q->num_rows()>0)
	return $Q->result();
	else
	return 'empty';

    
}

//
//============================================================================================================================
// model to get all Delivered Order details report.
	
	function getdeliveredorderreport(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}
	
	$date='`order_date` >= "'.$start.'" && `order_date`  <= "'.$end.'"';	
	$sql ='SELECT *
	FROM  `orders`	
	WHERE '.$date.'
	AND `status`="Delivered"
	';
	$Q = $this-> db-> query($sql);		
	if($Q->num_rows()>0)
	return $Q->result();
	else
	return 'empty';

    
}

// model to get Income report.

function getincomereport(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}
		
		$del = ',';
		$del2 = '';
	//$end=$this->input->post('end');
	$date='`order_date` >= "'.$start.'" && `order_date`  <= "'.$end.'"';

	$sql ='SELECT DATE_FORMAT(`order_date`,"%M") AS Month, sum( REPLACE( (amount), 
	"'.$del.'" , "'.$del2.'" ) ) AS Income FROM `orders`

	WHERE '.$date.'
	AND status = "Delivered"
	GROUP BY DATE_FORMAT( `order_date` , "%M" )
	ORDER BY Month DESC';
	$Q = $this-> db-> query($sql);		
    if($Q->num_rows()>0)
				return $Q->result();
				else
				return 'empty';

    
}


// 3) model to get admin details

function getsysUserDetails(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}
		
		
		$del = ',';
		$con = ' ';
		
	//$end=$this->input->post('end');
	$date='`add_date` >= "'.$start.'" && `add_date`  <= "'.$end.'"';

	$sql ='SELECT `add_date` AS Month, `user_id` AS ID, 
			CONCAT( `title` , "'.$con.'" , `fname` , "'.$con.'" , `lname` ) AS Name, 
			`email` AS Email,  `user_role_name` AS Role, `status` AS Status
			FROM `user`
			JOIN user_roles ON user_roles.user_role_id = user.user_role_id
			WHERE '.$date.'
			ORDER BY Month DESC';
			//join kranwa, user roles table eke primary key eka(user_role_id) and user table eke forign key _user_role id 
	$Q = $this-> db-> query($sql);		
    if($Q->num_rows()>0)
				return $Q->result();
				else
				return 'empty';

    
}
function getEchannelIncomereport(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('toDate'))!='')
	{
	$end=$this->input->post('toDate');
		}
	else{
	$end='';		
		}
		
		
	//$end=$this->input->post('end');
	$date='`doc_date` >= "'.$start.'" && `doc_date`  <= "'.$end.'"';	
	$sql ='SELECT DATE_FORMAT(`doc_date`,"%M") AS Month, sum((Fee) ) AS Income FROM `reservation_number`
JOIN  reservation ON  reservation_number.reservation_code = reservation.reservation_code
WHERE '.$date.'
AND channeling_status = "confirmed"
GROUP BY DATE_FORMAT( `doc_date` , "%M" )
ORDER BY Month DESC';
	$Q = $this-> db-> query($sql);		
    if($Q->num_rows()>0)
				return $Q->result();
				else
				return 'empty';

    
}

// 4) model to get Customer Details.

function getCustomerDetails(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}
		
		
		$del = ',';
		$con = ' ';
		
	//$end=$this->input->post('end');
	$date='`registered_date` >= "'.$start.'" && `registered_date`  <= "'.$end.'"';	


	$sql ='SELECT `registered_date` AS Month,
	 CONCAT( `title` , "'.$con.'" , `fname` , "'.$con.'" , `lname` ) AS Name, 
	 `email` AS Email, CONCAT( `address` , "'.$del.'" , `address1` , "'.$del.'", `city` ) AS Address,
	  `date_of_birth` AS DOB, `telephone` AS Tel , `telephone` AS Tel,`postal_code` AS PC 
  	FROM `customer`

WHERE '.$date.'
AND account = "active"
AND access = "yes"

ORDER BY Month DESC';
	$Q = $this-> db-> query($sql);		
    if($Q->num_rows()>0)
				return $Q->result();
				else
				return 'empty';

    
}

// 5) model to get Customer growth report.

function getCustomerGrowth(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}
		
		
		
	//$end=$this->input->post('end');
	$date='`registered_date` >= "'.$start.'" && `registered_date`  <= "'.$end.'"';	

	$sql ='SELECT DATE_FORMAT(`registered_date`,"%M") AS Month,
	  COUNT( * ) AS NumCus
	 FROM `customer`
	WHERE '.$date.'
	AND account = "active"
	AND access = "yes"
	GROUP BY DATE_FORMAT( `registered_date` , "%M" )
	ORDER BY Month DESC';
	$Q = $this-> db-> query($sql);		
    if($Q->num_rows()>0)
				return $Q->result();
				else
				return 'empty';

    
}


// 6) model to get eChannel growth report.

function getdesigngrowthreport(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}
	//$end=$this->input->post('end');
	$date='`order_date` >= "'.$start.'" && `order_date`  <= "'.$end.'"';

	$sql ='SELECT DATE_FORMAT(`order_date`,"%M") AS Month,
			  COUNT( * ) AS NumOrder
			 FROM `design_order`
		
		WHERE '.$date.'
		
		GROUP BY DATE_FORMAT( `order_date` , "%M" )
		ORDER BY Month DESC';
	$Q = $this-> db-> query($sql);		
    if($Q->num_rows()>0)
				return $Q->result();
				else
				return 'empty';

    
}

// 7) get product detail report

function getproductdetailreport(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}
	//$end=$this->input->post('end');
		$date='`order_date` >= "'.$start.'" && `order_date`  <= "'.$end.'"';



$sql ='SELECT orders.*,order_detail.*,product.product_name FROM `orders` 
			JOIN order_detail ON order_detail.order_id = orders.order_id
			JOIN product ON product.product_id = order_detail.product_id
		WHERE '.$date.'

		GROUP BY product.product_id
		ORDER BY product.product_name ASC  
		';
		// PRODUCT NAME EKA, piliwelata danna
	//	echo $sql;die;
	$Q = $this-> db-> query($sql);		
    if($Q->num_rows()>0)
				return $Q->result();
				else
				return 'empty';

    
}


// 8) get design order report


function getedesigndetailreport(){
	if(($this->input->post('from'))!='')
	{
	$start=$this->input->post('from');
		}
	else{
	$start='';		
		}	
	if(($this->input->post('to'))!='')
	{
	$end=$this->input->post('to');
		}
	else{
	$end='';		
		}

			
		$del = ',';
		$con = ' ';
		
	//$end=$this->input->post('end');
		$date='`registered_date` >= "'.$start.'" && `registered_date`  <= "'.$end.'"';
	


	$sql ='SELECT `registered_date` AS Month,
	 CONCAT( `title` , "'.$con.'" , `fname` , "'.$con.'" , `lname` ) AS Name, 
	 `email` AS Email, CONCAT( `address` , "'.$del.'" , `address1` , "'.$del.'", `city` ) AS Address,
	  `date_of_birth` AS DOB, `telephone` AS Tel , `telephone` AS Tel,`postal_code` AS PC 
  	FROM `customer`;

		WHERE '.$date.'
AND account = "active"
AND access = "yes"

ORDER BY Month DESC';
    
}









}
?>