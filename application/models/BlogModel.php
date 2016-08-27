<?php
class BlogModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function getPost($data){
		$data = str_replace("%20"," ",$data);
		$query = $this->db->query("SELECT * FROM POST WHERE title = '".$data."'");
		return $query->result();
	}


}