<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bienvenida extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
	}
	public function index()
	{
		$this->load->view('bienvenida');
	}
	public function cerrarsecion() {
		$this->session->sess_destroy();
		redirect(base_url("login"));
	}
}
