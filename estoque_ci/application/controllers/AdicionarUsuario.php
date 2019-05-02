<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdicionarUsuario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('usuarios_model', 'modelusuarios');
		$this->load->model('equipamentos_model', 'modelequipamentos');
		$this->load->model('equipamentosusuarios_model', 'modelequipamentosusuarios');
		$this->usuarios = $this->modelusuarios->get_usuarios($id_usuario);
		$this->equipamentos = $this->modelequipamentos->get_equipamentos();
		$this->equipamentosusuarios = $this->modelequipamentosusuarios->get_equipamentosUsuarios();
	}

	public function index($id_usuario, $slug=null)
	{
		$data['usuarios'] = $this->usuarios;
		$data['equipamentos'] = $this->equipamentos;
		$data['equipamentosusuarios'] = $this->equipamentosusuarios;
		// Titulos Pag.
		$data['titulo'] = "Adicionar Colaborador";
	   $this->load->view('frontend/template/html-header', $data);
	   
	}
	
}
