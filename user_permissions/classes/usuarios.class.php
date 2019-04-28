<?php

    class Usuarios {

        private $pdo;
        private $id_usuario;
        private $permission;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function fazerLogin($email, $senha) {
            $sql = "SELECT * FROM usuarios WHERE email = :email and senha = :senha";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", $senha);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $sql = $sql->fetch();

                $_SESSION['logado'] = $sql['id_usuario'];

                return true;
            }
            
            return false;
        }

        public function setUsuario($id_usuario) {
            $this->id_usuario = $id_usuario;

            $sql = "SELECT * FROM usuarios WHERE id_usuario = :id_usuario";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":id_usuario", $id_usuario);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $sql = $sql->fetch();
                $this->permission = explode(',', $sql['permission']);
            }
        }

        public function getPermissoes(){
            return $this->permission;
        }

        public function temPermissao($p) {
            if(in_array($p, $this->permission)) {
                return true;
            } else {
                return false;
            }
        }
    }