<?php
class HomeModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function getBannerPost(){
		$query = $this->db->query("SELECT * FROM POST WHERE banner_show = 1");
		return $query->result();
	}
}