<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdicionarUsuario extends CI_Controller {

	public $nome_usuario;
	public $setor;
	
	public function __construct() {
		parent::__construct();
		$this->load->model('adcusuarios_model', 'modeladcusuarios');
	}

	public function index()
	{
		$data['titulo'] = "Adicionar Colaborador";
	    $this->load->view('frontend/template/adcUsuarios', $data);	   
	}

	public function inserir()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome_usuario', 'required|min_length[3]');
		$this->form_validation->set_rules('setor', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		} else {
			$
		}
	}
	
}
