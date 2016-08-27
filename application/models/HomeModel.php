<?php
class HomeModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function getBannerPost(){
		$query = $this->db->query("SELECT * FROM POST WHERE banner_show = 1 ORDER BY id DESC");
		return $query->result();
	}

	public function getBlogPost(){
		$query = $this->db->query("SELECT * FROM POST ORDER BY id DESC");
		return $query->result();
	}
}