<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email  = $this->input->post('email');
		$password  = $this->input->post('password');

		$user  = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) { } else { }
	}
}
