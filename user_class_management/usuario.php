<?php

    class Usuario{

        private $id_usuario;
        private $usuario;
        private $nome;
        private $email;
        private $senha;
        
        private $pdo;

        public function __construct($id_usuario = ''){

            try{
                $this->pdo = new PDO(
                    "mysql:dbname=blog;
                    host=localhost",
                    "root", "");

            }catch(PDOException $exception){
                echo "FALHO: ".$exception->getMessage();
            }

            if(!empty($id_usuario)){
                
                $sql = "SELECT * FROM usuarios WHERE id_usuario = ?";

                $sql = $this->pdo->prepare($sql);
                $sql->execute(array($id_usuario));

                if($sql->rowCount() > 0){
                    $data = $sql->fetch();
                    $this->id_usuario = $data['id_usuario'];
                    $this->usuario = $data['usuario'];
                    $this->nome = $data['nome'];
                    $this->email = $data['email'];
                    $this->senha = $data['senha'];
                }
            }
        }

        public function getIdUsuario(){
            return $this->id_usuario;
        }

        public function setUsuario($sUsuario){
            $this->usuario = $sUsuario;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function setNome($sNome){
            $this->nome = $sNome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setEmail($sEmail){
            $this->email = $sEmail;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setSenha($sSenha){
            $this->senha = md5($sSenha);
        }

        public function saveInfo(){
            if(!empty($this->id_usuario)){
                $sql = "UPDATE usuarios SET 
                usuario = ?,
                nome = ?,
                email = ?,
                senha = ?
                WHERE id_usuario = ?";

                echo "update";
                $sql = $this->pdo->prepare($sql);
                $sql->execute(array(
                    $this->usuario,
                    $this->nome,
                    $this->email,
                    $this->senha,
                    $this->id_usuario));
            }
            else{
                $sql = "INSERT INTO usuarios SET 
                usuario = ?,
                nome = ?,
                email = ?,
                senha = ?";

                echo "insert";
                $sql = $this->pdo->prepare($sql);
                $sql->execute(array(
                    $this->usuario,
                    $this->nome,
                    $this->email,
                    $this->senha
                ));
            }
        }

        public function delete() {
            $sql = "DELETE FROM usuarios WHERE id_usuario = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($this->id_usuario));
        }
        
    }

?>