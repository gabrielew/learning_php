<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class EquipamentosUsuarios_model extends CI_Model {

    public $id_equipamento_usuario;
    public $id_equipamento;
    public $id_usuario;
    public $data_inicio;
    public $data_fim;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_equipamentosUsuarios()
    {
        $this->db->select('*');
        $this->db->from('equipamentos_usuarios as EU');
        $this->db->join('equipamentos', 'id_equipamento = EU.id_equipamentos');
        $this->db->join('usuarios', 'id_usuario = EU.id_usuarios');
        $this->db->where('equipamentos.ocupado = "SIM"');
        $this->db->order_by('data_inicio', 'ASC');
        return $this->db->get()->result();
    }
}