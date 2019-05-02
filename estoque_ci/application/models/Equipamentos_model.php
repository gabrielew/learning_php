<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Equipamentos_model extends CI_Model {

    public $id_equipamento;
    public $nome_equipamento;
    public $caixa;
    public $ocupado;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_equipamentos()
    {
        $this->db->order_by('nome_equipamento', 'ASC');
        $this->db->order_by('caixa');
        $this->db->order_by('ocupado');
        return $this->db->get('equipamentos')->result();
    }
}
