<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function validar()
	{
		
		$ci = $this->input->post('ci');
		$clave = $this->input->post('clave');
		$resultado =$this->usuarios->obtener($ci,$clave);

		if($resultado){
			echo "eseta entrando aqui";
			$this->session->set_userdata('ci',$ci);
			redirect(base_url('bienvenida'));
		}else{
			redirect(base_url('login'));	
		}
	}
}
