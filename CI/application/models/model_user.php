<?php 

class model_user extends CI_Model {

	function register_user()
	{
		$new_member_insert_data = array(
			'name' => $this->input->post('name'),
			'no_ic' => $this->input->post('ic_number'),
			'address' => $this->input->post('address'),
			'gender' => $this->input->post('gender')
			);

			$insert = $this->db->insert('pesakit',$new_member_insert_data);
			$name = $this->input->post('name');

			return $name ;

			
	}
}