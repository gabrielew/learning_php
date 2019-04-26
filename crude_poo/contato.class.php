<?php

    class Contato {

        private $pdo;

        public function __construct() {
            
            $this->pdo = new PDO("mysql:dbname=crudeoo;host=localhost", "root", "");
        }

        public function insert($email, $nome = ''){

            if($this->existEmail($email) == false){
                $sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':nome', $nome);
                $sql->bindValue(':email', $email);
                $sql->execute();

                return true;
            }
            else {
                return false;
            }

        }

        public function selectNome($email){

            $sql = "SELECT nome FROM contatos WHERE email = :email";
            $sql->bindValue(':email', $email);
            $sql = $this->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0){
                $info = $sql->fetch();

                return $info['nome'];
            }
            else {
                return '';
            }
        }

        public function selectAll(){

            $sql = "SELECT * FROM contatos";
            $sql = $this->pdo->query($sql);
            
            if($sql->rowCount() > 0)
                return $sql->fetchAll();
            else
                return array();
        }

        public function updateAll($id_contato, $email, $nome){

            if($this->existIdContato($id_contato)){
                $sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id_contato = :id_contato";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id_contato', $id_contato);
                $sql->bindValue(':email', $email);
                $sql->bindValue(':nome', $nome);               
                $sql->execute();

                return true;
            } else {
                return false;
            }
                
            
        }

        public function delete($id_contato){
            if($this->existIdContato($id_contato)){
                $sql = "DELETE FROM contatos WHERE id_contato = :id_contato";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id_contato', $id_contato);
                $sql->execute();

                return true;
            }
            else
                return false;
        }

        private function existEmail($email){
            $sql = "SELECT * FROM contatos WHERE email = :email";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        private function existNome($nome){
            $sql = "SELECT * FROM contatos WHERE nome = :nome";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        private function existIdContato($id_contato){
            $sql = "SELECT * FROM contatos WHERE id_contato = :id_contato";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_contato', $id_contato);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

    }

?>