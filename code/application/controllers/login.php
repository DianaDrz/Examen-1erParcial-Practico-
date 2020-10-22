<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('getmenu','url'));
	}

	public function index()
	{
		$data ['menu']= main_menu();
		$this->load->view('login',$data);
	}
	public function validar()
	{
		
		if (isset($_POST['ci']) && isset($_POST['clave'])) {

			$ci = $this->input->post('ci');
			$clave = $this->input->post('clave');
			$this->load->model('usuarios_model');
			$resultado= $this->usuarios_model->verificar($ci,$clave);
			if($resultado){
				$dato = array('ci'=>$resultado[0],'nombre'=>$resultado[1]);
				var_dump($resultado);
				$this->session->set_userdata($dato);
				redirect(base_url('bienvenida'));
			}else{
				$this->session->set_flashdata('mensaje', 'Usuario o clave no validos');
				redirect(base_url('login'));
			};
		}
		else{
			redirect(base_url('login'));
		}
	}
}
