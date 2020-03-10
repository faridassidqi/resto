<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class waiter extends CI_Controller {
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('username') != TRUE) {
			redirect(base_url());
	}

	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('waiter/index');
		$this->load->view('template/footer');
	}
}
