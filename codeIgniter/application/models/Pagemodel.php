<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pagemodel extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}
 
	public function record_count() {
		return $this->db->count_all("user_details");
	}
 
	public function get_table($limit, $start) {
		$this->db->limit($limit, $start);
		$query = $this->db->get("user_details");
 		return $query->result();
		
   }
}	