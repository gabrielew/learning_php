<?php
    try {
        global $pdo;
        $pdo = new PDO("mysql:dbname=blog;host=localhost", "root", "");
    } catch (PDOException $ex) {
        echo "ERRO: ".$ex->getMessage();
        exit;
    }