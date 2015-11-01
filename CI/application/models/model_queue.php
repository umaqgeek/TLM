<?php 

class model_queue extends CI_Model {

	function m_queue()
	{
		$new_member_insert_data = array(
			'name' => $this->input->post('name'),
			'no_ic' => $this->input->post('ic_number'),
			'address' => $this->input->post('address'),
			'gender' => $this->input->post('gender')
			);

			$insert = $this->db->insert('queue',$new_member_insert_data);


			return ;

			
	}
		function get_queue()
	{
		$query=$this->db->query("SELECT * FROM queue");

		return $query->result();

			
	}
}