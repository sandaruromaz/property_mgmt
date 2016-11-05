<?php 
class NewsAlert extends CI_Model{

function _construct(){

	parent::_construct();
}

/*
=====================================================================================
This function will be insert news subcriber activation details:
*/
function addNewsSubcriber(){
	//$newsalert_women=$this->input->post('women');
	//if($newsalert_women!='active') $newsalert_women='inactive'; 
	//$newsalert_men=$this->input->post('men');
	//if($newsalert_men!='active') $newsalert_men='inactive';
	//$newsalert_kids=$this->input->post('kids');
	//if($newsalert_kids!='active') $newsalert_kids='inactive';
	$data=array(

    'email'=>$this->input->post('newsemail'),
   //	'women' =>$newsalert_women,
	//'men' =>$newsalert_men,
	//'kids' =>$newsalert_kids
	
  );
  $this->db->insert('news_subcriber',$data);
}
/*
=====================================================================================
This function will be get news subcriber activation code:
*/
	function getnewsletterid(){
	
	$r = $_POST["newsemail"];		
	$sql= "SELECT subcriber_id 
	FROM `news_subcriber`
	WHERE email = '$r'";
	
	$Q = $this-> db-> query($sql);
	if ($Q-> num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$d = $row['subcriber_id'];
	}
	return $d;	
	}}
     
/*=============================================================================	
 news subcriber activation with email
 */
	function activation($subcriber_id){
	$sql = 'UPDATE news_subcriber
	SET status= "active"
	WHERE subcriber_id= '.$subcriber_id.'';

	$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);	  
	}

//================================================================================

   public function deactivation($subcriber_id)	{
   $sql = 'UPDATE news_subcriber
	SET status= "inactive"
	WHERE subcriber_id= '.$subcriber_id.'';
	
	$Q = $this-> db-> query($sql);
		$this-> db-> set($Q);	  
	}	
	}


?>