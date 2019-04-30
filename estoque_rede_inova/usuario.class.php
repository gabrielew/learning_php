<?php

    class Usuario {

        private $pdo;

        public function __construct() {
            
            $this->pdo = new PDO("mysql:dbname=estoque_rede_inova;host=localhost", "root", "");
        }

        public function insert($nome_usuario, $setor = ''){

            
                $sql = "INSERT INTO usuarios (nome_usuario, setor) VALUES (:nome_usuario, :setor)";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':nome_usuario', $nome_usuario);
                $sql->bindValue(':setor', $setor);
                $sql->execute();

        }

        public function selectById($id_usuario){

            $sql = "SELECT * FROM usuarios WHERE id_usuario = :id_usuario";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_usuario', $id_usuario);
            $sql->execute();

            if($sql->rowCount() > 0){
                return $sql->fetch();
            }
            else {
                return array();
            }
        }

        public function selectAll(){

            $sql = "SELECT * FROM usuarios";
            $sql = $this->pdo->query($sql);
            
            if($sql->rowCount() > 0)
                return $sql->fetchAll();
            else
                return array();
        }

        public function updateAll($nome_usuario, $setor, $id_usuario){

            if($this->existIdUsuario($id_usuario)){
                $sql = "UPDATE usuarios SET nome_usuario = :nome_usuario, setor = :setor WHERE id_usuario = :id_usuario";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':nome_usuario', $nome_usuario);
                $sql->bindValue(':setor', $setor);      
                $sql->bindValue(':id_usuario', $id_usuario);         
                $sql->execute();

                return true;
            } else {
                return false;
            }           
        }
        
        public function delete($id_usuario){
            if($this->existIdUsuario($id_usuario)){
                $sql = "DELETE FROM usuarios WHERE id_usuario = :id_usuario";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id_usuario', $id_usuario);
                $sql->execute();

                return true;
            }
            else
                return false;
        }

        private function existSetor($setor){
            $sql = "SELECT * FROM usuarios WHERE setor = :setor";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':setor', $setor);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        private function existNome($nome_usuario){
            $sql = "SELECT * FROM usuarios WHERE nome_usuario = :nome_usuario";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome_usuario', $nome_usuario);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        private function existIdUsuario($id_usuario){
            $sql = "SELECT * FROM usuarios WHERE id_usuario = :id_usuario";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_usuario', $id_usuario);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

    }

?>