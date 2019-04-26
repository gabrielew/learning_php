<?php

    class Usuarios{

        private $db;

        public function __construct(){
            
            try{
                $this->db = new PDO(
                    "mysql:dbname=blog;
                    host=localhost",
                    "root", "");

            } catch(PDOException $exception){
                echo "Falha: ".$exception->getMessage();
            }
        }

        public function select($id_usuario){
            
            $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = :id_usuario");
            $sql->bindValue(":id_usuario", $id_usuario);
            $sql->execute();

            $array = array();
            if($sql->rowCount() > 0)
                $array = $sql->fetch();

            return $array;
        }
        //Param usa sempre o valor da variável:
        public function insert($usuario, $nome, $email, $senha){
            $sql = $this->db->prepare("INSERT INTO usuarios SET usuario = :usuario, nome = :nome, email = :email, senha = :senha");
            $sql->bindParam(":usuario", $usuario);
            $sql->bindParam(":nome", $nome);
            $sql->bindParam(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->execute();
        }

        public function update($usuario, $nome, $email, $senha, $id_usuario){
            $sql = $this->db->prepare("UPDATE usuarios SET usuario = ?, nome = ?, email =  ?, senha = ? WHERE id_usuario = ?");
            $sql->execute(array($usuario, $nome, $email, md5($senha), $id_usuario));
        }

        public function delete($id_usuario){
            $sql = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario = ?");

            $sql->bindValue(1, $id_usuario);
            $sql->execute();
        }
    }

?>