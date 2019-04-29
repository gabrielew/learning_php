<?php

    class Equipamento {

        private $pdo;

        public function __construct() {
            
            $this->pdo = new PDO("mysql:dbname=estoque_rede_inova;host=localhost", "root", "");
        }

        public function insert($nome_equipamento, $caixa, $ocupado = ''){

            
                $sql = "INSERT INTO equipamentos (nome_equipamento, caixa, ocupado) VALUES (:nome_equipamento, :caixa, :ocupado)";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':nome_equipamento', $nome_equipamento);
                $sql->bindValue(':caixa', $caixa);
                $sql->bindValue(':ocupado', $ocupado);
                $sql->execute();


        }

        public function selectById($id_equipamento){

            $sql = "SELECT * FROM equipamentos WHERE id_equipamento = :id_equipamento";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_equipamento', $id_equipamento);
            $sql->execute();

            if($sql->rowCount() > 0){
                return $sql->fetch();
            }
            else {
                return array();
            }
        }

        public function selectAll(){

            $sql = "SELECT * FROM equipamentos";
            $sql = $this->pdo->query($sql);
            
            if($sql->rowCount() > 0)
                return $sql->fetchAll();
            else
                return array();
        }

        public function updateAll($nome_equipamento, $caixa, $ocupado, $id_equipamento){
            if($this->existIdEquipamento($id_equipamento)){
                $sql = "UPDATE equipamentos SET nome_equipamento = :nome_equipamento, caixa = :caixa, ocupado = :ocupado WHERE id_equipamento = :id_equipamento";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':nome_equipamento', $nome_equipamento);
                $sql->bindValue(':caixa', $caixa);
                $sql->bindValue(':ocupado', $ocupado);
                $sql->bindValue(':id_equipamento', $id_equipamento);
                $sql->execute();
                
                return true;
            } else {
                return false;
            }           
        }
        
        public function delete($id_equipamento){
            if($this->existIdEquipamento($id_equipamento)){
                $sql = "DELETE FROM equipamentos WHERE id_equipamento = :id_equipamento";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id_equipamento', $id_equipamento);
                $sql->execute();

                return true;
            }
            else
                return false;
        }

        private function existCaixa($caixa){
            $sql = "SELECT * FROM equipamentos WHERE caixa = :caixa";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':caixa', $caixa);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        private function existNome($nome_equipamento){
            $sql = "SELECT * FROM equipamentos WHERE nome_equipamento = :nome_equipamento";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome_equipamento', $nome_equipamento);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        private function existIdEquipamento($id_equipamento){
            $sql = "SELECT * FROM equipamentos WHERE id_equipamento = :id_equipamento";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_equipamento', $id_equipamento);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

    }

?>