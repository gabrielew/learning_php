<?php

    class Contato {

        private $pdo;

        public function __construct() {
            
            $this->pdo = new PDO("mysql:dbname=crudeoo;host=localhost",
            "root", "");
        }

        public function insert(){
             
        }

    }

?>