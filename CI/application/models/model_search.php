<?php 

class model_search extends CI_Model {

	function search_patient()
	{
		$ic = $this->input->post('ic_number');
		$query=$this->db->query("SELECT * FROM pesakit WHERE no_ic = '$ic'");

		return $query->result();

		//$ic = $_POST['ic_number'];

		//$this->db->select();
		//$this->db->from('pesakit');
		//$this->db->where('no_ic',$ic);
		//$query = $this->db->get();
		//$data['patient'] = $query->result();


		//return $patient ;
		}

			
}