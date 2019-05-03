<?php

    class Blog_model extends CI_Model {

        public $titulo;

        public function __construct() {
            parent::__construct();
        }

        public function get_last_tree()
        {
            $this->db->get('postagem');
            return $this->db->get('postagem')->result();
        }

        public function insert()
        {
            $this->inserir = $_POST['titulo'];
            $this->db->insert('postagem', $this);
        }
    }