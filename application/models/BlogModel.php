<?php
class BlogModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function getPost($data){
		
		$query = $this->db->query("SELECT * FROM post WHERE title_slug = '".$data."'");
		return $query->result();
	}


}