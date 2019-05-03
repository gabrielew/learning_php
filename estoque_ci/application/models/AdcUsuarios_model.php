<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class AdcUsuarios_model extends CI_Model {

    public $nome_usuario;
    public $setor;

    public function __construct()
    {
        parent::__construct();
    }

    // public function set_usuarios($nome_usuario, $setor)
    // {
    //     $data = array(
    //         'nome_usuario' => $this->nome_usuario,
    //         'setor' => $this->setor
    //     );
    
    //     $this->db->insert('usuarios', $data);
    //     $this->db->salvar($nome_usuario, $setor);
    // }

    public function insert($table, $data)
    {
        return $this->db->insert('usuarios', $data);
    }
}
