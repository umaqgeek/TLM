<?php

class register extends CI_Controller{

	public function index() {
		$this->load->view("registration/view_register");

	}
	public function main() {
		$this->load->view("view_main");

	}
	public function searcher() {
		$this->load->view("search");

	}

	function search_patient() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('ic_number', 'ic_number', 'required');


		if($this->form_validation->run() == FALSE)
		{
			$this->load->view("registration/fail");
		}
		else
		{
			$this->load->model('model_search');

			$data['result'] = $this->model_search->search_patient();

			$this->load->view('profile', $data);
			
		}
	}


	function register_user() {

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('ic_number', 'ic_number', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view("registration/fail");
		}
		else
		{
			$this->load->model('model_user');
			$result = $this->model_user->register_user();
			if($result)
			{
				$this->load->view("registration/success", array("name" => $result));
			}
			else
			{
				$this->load->view("registration/view_register");
			}
		}
	}

	function add_to_queue() {

		$this->load->model('model_queue');

			$this->model_queue->m_queue();

			$data['result'] = $this->model_queue->get_queue();

			$this->load->view('queue', $data);

	}

	function current_queue() {

		$this->load->model('model_queue');

			$data['result'] = $this->model_queue->get_queue();

			$this->load->view('queuedoctor', $data);

		}

	function add_details() {

			$this->load->model('model_add');

			$data['result'] = $this->model_add->m_add();

			$this->load->view('add');

		}


}
