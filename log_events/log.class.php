<?php

    class Log {

        private $pdo;

        public function __construct() {
            $this->pdo = new PDO(
                "mysql:dbname=blog;
                host=localhost",
                "root",
                "");
        }

        public function register($acao) {
            $ip = $_SERVER['REMOTE_ADDR'];

            $sql = "INSERT INTO log_events SET ip = :ip, date_action = NOW(), acao = :acao";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":ip", $ip);
            $sql->bindValue(":acao", $acao);
            $sql->execute();
        }

    }

?>