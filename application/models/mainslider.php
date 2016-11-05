<?php 
class MainSlider extends CI_Model{

	function _construct(){

	parent::_construct();
	}



// model to get slider  & details
	
	function slider(){
	$this-> db-> select();	
	$this-> db-> from('slider');
	$Q = $this-> db-> get();	
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
		}
	return $Q;
	}
	}
	
// model to get slider 2 & details
	
	function slider2(){
	$this-> db-> select();	
	$this-> db-> from('slider');
	$this-> db-> where('slider_id',2); // select details from slider table where slider_id=2
	$Q = $this-> db-> get();	
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
		}
	return $Q;
	}
	}
	
// model to get slider 3 & details
	
	function slider3(){
	$this-> db-> select();	
	$this-> db-> from('slider');
	$this-> db-> where('slider_id',3); // select details from slider table where slider_id=3
	$Q = $this-> db-> get();	
	if ($Q-> num_rows() > 0){
	foreach ($Q-> result_array() as $row){
		}
	return $Q;
	}
	}
}


?>