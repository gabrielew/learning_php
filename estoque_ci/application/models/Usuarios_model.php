<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Usuarios_model extends CI_Model {

    public $id_usuario;
    public $nome_usuario;
    public $setor;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_usuarios()
    {
        $this->db->order_by('nome_usuario', 'ASC');
        $this->db->order_by('setor');
        return $this->db->get('usuarios')->result();
    }
}
