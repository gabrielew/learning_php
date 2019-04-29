<?php

    class Equipamento_Usuario {

        private $pdo;

        public function __construct() {
            
            $this->pdo = new PDO("mysql:dbname=estoque_rede_inova;host=localhost", "root", "");
        }

        public function insert($id_f_equipamento, $id_f_usuario, $data_inicio = ''){

            if($this->existid_f_usuario($id_f_usuario) == false){
                $sql = "INSERT INTO equipamentos_usuarios (id_f_equipamento, id_f_usuario, data_inicio) VALUES (:id_f_equipamento, :id_f_usuario, :data_inicio)";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id_f_equipamento', $id_f_equipamento);
                $sql->bindValue(':id_f_usuario', $id_f_usuario);
                $sql->bindValue(':data_inicio', $data_inicio);
                $sql->execute();

                return true;
            }
            else {
                return false;
            }

        }

        public function selectById($id_equipamento_usuario){

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

            // $sql = "SELECT * FROM equipamentos_usuarios";
            $sql = "SELECT * FROM equipamentos
                    INNER JOIN (SELECT * FROM usuarios
                    INNER JOIN equipamentos_usuarios
                        ON usuarios.id_usuario = equipamentos_usuarios.id_f_usuario) AS equpUser
                        ON equipamentos.id_equipamento= equpUser.id_f_equipamento";
                        
            $sql = $this->pdo->query($sql);
            
            if($sql->rowCount() > 0)
                return $sql->fetchAll();
            else
                return array();
        }

        public function updateAll($id_f_equipamento, $id_f_usuario, $data_inicio, $data_fim, $id_equipamento_usuario){

            if($this->existEquipUsuario($id_equipamento_usuario)){
                $sql = "UPDATE equipamentos_usuarios SET id_f_equipamento = :id_f_equipamento, id_f_usuario = :id_f_usuario, data_inicio = :data_inicio, data_fim = :data_fim WHERE id_equipamento_usuario = :id_equipamento_usuario";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id_f_equipamento', $id_f_equipamento);
                $sql->bindValue(':id_f_usuario', $id_f_usuario);
                $sql->bindValue(':data_inicio', $data_inicio);
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

        private function existid_f_usuario($id_f_usuario){
            $sql = "SELECT * FROM equipamentos_usuarios WHERE id_f_usuario = :id_f_usuario";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_f_usuario', $id_f_usuario);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        private function existNome($id_f_equipamento){
            $sql = "SELECT * FROM equipamentos_usuarios WHERE id_f_equipamento = :id_f_equipamento";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_f_equipamento', $id_f_equipamento);
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