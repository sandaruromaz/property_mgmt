<?php
class Search extends CI_Model {
	
	
	
	function __construct(){
		parent::__construct();
	}
/*
=====================================================================================
This function will be get news details from latest_news table:
*/	

	
	function getSearch($id){
		 $this->db->select('*');
        $this->db->from('latest_news');
        $this->db->like('news_topic',$id);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
}

}
?>