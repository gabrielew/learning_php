<?php

    Class Blog  extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('blog_model', 'modelblog');
            $this->titulo = $this->modelblog->get_last_tree();         
        }
        public function index()
        {
            $data['inserir'] = $this->inserir;
            $data['titulo'] = $this->titulo;
            $data['page_title'] = "Postagem";
            $this->load->view('post', $data);
            if($this->inserir = $this->modelblog->insert()){
                
            }
        }
    }