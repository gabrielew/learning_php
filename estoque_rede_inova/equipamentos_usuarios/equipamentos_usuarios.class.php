<?php

    class Equipamento_Usuario {

        private $pdo;

        public function __construct() {
            
            $this->pdo = new PDO("mysql:dbname=estoque_rede_inova;host=localhost", "root", "");
        }

        public function insert($id_equipamento, $id_usuario, $data_inicio = ''){

            
                $sql = "INSERT INTO equipamentos_usuarios (id_equipamento, id_usuario, data_inicio) VALUES (:id_equipamento, :id_usuario, :data_inicio)";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id_equipamento', $id_equipamento);
                $sql->bindValue(':id_usuario', $id_usuario);
                $sql->bindValue(':data_inicio', $data_inicio);
                $sql->execute();

        }

        public function selectByName($id_equipamento_usuario) {

            $sql = "SELECT U.nome_usuario from equipamentos_usuarios as EU
            inner join usuarios as U on U.id_usuario = EU.id_usuario WHERE EU.id_equipamento_usuario = ?";
            
            $sql = $this->pdo->prepare($sql);
            $sql->bindParam(1, $id_equipamento_usuario);
            $sql->execute();
            // // $sql = $this->pdo->query($sql);
        }


        public function selectById($id_equipamento_usuario) {

            $sql = "SELECT * FROM equipamentos_usuarios WHERE id_equipamento_usuario = :id_equipamento_usuario";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_equipamento_usuario', $id_equipamento_usuario);
            $sql->execute();

            if($sql->rowCount() > 0){
                return $sql->fetch();
            }
            else {
                return array();
            }
        }

        public function selectAll(){

            
                $sql = "SELECT * FROM equipamentos_usuarios as EU
                    INNER JOIN equipamentos as EQ ON EU.id_equipamentos = EQ.id_equipamento 
                    INNER JOIN usuarios as Us ON EU.id_usuarios = Us.id_usuario  WHERE EQ.ocupado = 'SIM'";
                        
            $sql = $this->pdo->query($sql);
            
            if($sql->rowCount() > 0){                
                return $sql->fetchAll();
            }
            else{
                return array();
            }
        }


        public function updateAll($data_fim, $id_equipamento_usuario){

            if($this->existEquipUsuario($id_equipamento_usuario)){
                $sql = "UPDATE equipamentos_usuarios SET data_fim = :data_fim WHERE id_equipamento_usuario = :id_equipamento_usuario";
                $sql = $this->pdo->prepare($sql);
                // $sql->bindValue(':id_equipamento', $id_equipamento);
                // $sql->bindValue(':id_usuario', $id_usuario);
                $sql->bindValue(':data_fim', $data_fim);
                $sql->bindValue(':id_equipamento_usuario', $id_equipamento_usuario);         
                $sql->execute();

                return true;
            } else {
                return false;
            }           
        }
        
        public function delete($id_equipamento_usuario){
            if($this->existEquipUsuario($id_equipamento_usuario)){
                $sql = "DELETE FROM equipamentos_usuarios WHERE id_equipamento_usuario = :id_equipamento_usuario";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id_equipamento_usuario', $id_equipamento_usuario);
                $sql->execute();

                return true;
            }
            else
                return false;
        }

        private function existidusuario($id_usuario){
            $sql = "SELECT * FROM equipamentos_usuarios WHERE id_usuario = :id_usuario";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_usuario', $id_usuario);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        private function existNome($id_equipamento){
            $sql = "SELECT * FROM equipamentos_usuarios WHERE id_equipamento = :id_equipamento";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_equipamento', $id_equipamento);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        private function existEquipUsuario($id_equipamento_usuario){
            $sql = "SELECT * FROM equipamentos_usuarios WHERE id_equipamento_usuario = :id_equipamento_usuario";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_equipamento_usuario', $id_equipamento_usuario);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

    }

?>