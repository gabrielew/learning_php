<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('usuarios_model', 'modelusuarios');
		$this->load->model('equipamentos_model', 'modelequipamentos');
		$this->load->model('equipamentosusuarios_model', 'modelequipamentosusuarios');
		$this->usuarios = $this->modelusuarios->get_usuarios();
		$this->equipamentos = $this->modelequipamentos->get_equipamentos();
		$this->equipamentosusuarios = $this->modelequipamentosusuarios->get_equipamentosUsuarios();
	}

	public function index()
	{
		$data['usuarios'] = $this->usuarios;
		$data['equipamentos'] = $this->equipamentos;
		$data['equipamentosusuarios'] = $this->equipamentosusuarios;
		// Titulos Pag.
		$data['titulo'] = "Estoque Rede Inova";
	   $this->load->view('frontend/template/html-header', $data);
	   
	}
	
}
