<?php
class NewsDetails extends CI_Model {
	
	
	
	function __construct(){
		parent::__construct();
	}
/*
=====================================================================================
This function will be get news details from latest_news table:
*/	

	
	function count_all(){
		return $this->db->count_all('latest_news');//table name
	}
	
	function get_news_list($limit, $start) {
        $this->db->limit($limit, $start);
		$this->db->order_by('latest_news_id','desc'); //get all news details ordery by descending
        $query = $this->db->get("latest_news");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
		
/*
=====================================================================================
This function will be search news details from latest_news table:
*/	
		
		function getSearch($id){
				$Q = $this->db->query("SELECT * 
				FROM  `latest_news` 
				WHERE  (`latest_news_id` ='".$id."'
				OR  `news_topic` LIKE '%".$id."%'
				
				OR  `publish_date` LIKE  '%".$id."%')");
		return $Q->result_array();		
	
/*		 $this->db->select('*');
		
        $this->db->from('latest_news');
        $this->db->like('news_topic',$id);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();*/
}

}
?>