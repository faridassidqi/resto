<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->userdata('status') !="login") {
			redirect(base_url("login"));
		}
	}

	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('laporan/index');
		$this->load->view('template/footer');
	}
}
