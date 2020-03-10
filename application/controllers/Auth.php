<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('id_level')==1) {
			redirect('admin');
		}elseif ($this->session->userdata('id_level')==2) {
			redirect('kasir');
		}elseif ($this->session->userdata('id_level')==3) {
			redirect('owner');
		}elseif ($this->session->userdata('id_level')==4) {
			redirect('waiter');
		}


		$data['title'] = "JuraganResto";

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header');
			$this->load->view('auth/index');
			$this->load->view('template/footer');
		}else{

			$this->_login();
		}
	}

	private function _login() 
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($user) {
			if 
				// (password_verify($password,$user['password'])) {
				// $data = [
				// 	'username' => $user ['username'],
				// 	'id_level' => $user ['id_level']
				// ];
				($password == $user['password']) {
                    $data = [
                        'username' => $user['username'],
                        'id_level' => $user['id_level'],
                        'login' => 'login'
                    ];
				$this->session->set_userdata($data);
				if ($user['id_level'] == 1) {
					redirect('admin');
				}elseif ($user['id_level'] == 2) {
					redirect('kasir');
				}elseif ($user['id_level'] == 3) {
					redirect('owner');
				}elseif ($user['id_level'] == 4) {
					redirect('waiter');
				}else{
					redirect('pelanggan');
				}

			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Password atau username anda salah</div>');
				redirect('login');

			}

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Password atau username anda salah</div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_level');
		redirect(base_url('auth'));
	}
}
