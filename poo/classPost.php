<?php

    class Post {
        private $titulo;
        private $data;
        private $corpo;
        private $comentarios;
        private $qtdComentarios;

        public function __construct($t, $c) {
              $this->setTitulo($t); 
              $this->setCorpo($c);  
        }

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($t) {
            if(is_string($t))
                $this->titulo = $t;
        }

        public function getCorpo() {
            return $this->corpo;
        }

        public function setCorpo($c) {
            $this->corpo = $c;
        }

        public function addComentario($msg) {
            $this->comentarios[] = $msg;
            $this->contarComentarios();
        }

        public function getQtdComentarios() {
            return $this->qtdComentarios;
        }

        private function contarComentarios() {
            $this->qtdComentarios = count($this->comentarios);
        }
    }

    $post = new Post("Titulo da postagem", "Corpo da Mensagem");

    echo "Titulo: ".$post->getTitulo();
    echo "<br>";
    echo "Corpo: ".$post->getCorpo(); 
    echo "<br>";
    $post->addComentario("Teste1");
    $post->addComentario("Teste2");
    $post->addComentario("Teste3");
    $post->addComentario("Teste4");
    $post->addComentario("Teste5");
    $post->addComentario("Teste6");
    echo "Qtd coment: ".$post->getQtdComentarios();