<?php 

class model_add extends CI_Model {

	function m_add(){

		$ic = $_GET['ic'];
		
		$query=$this->db->query("SELECT * FROM pesakit WHERE no_ic = '$ic'");

		return $query->result();

	}
}