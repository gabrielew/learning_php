<?php
    try {
        $pdo = new PDO(
            "mysql:dbname=blog;
            host=localhost",
            "root",
            ""
        );
    } catch (PDOException $ex) {
        echo "ERROR: ".$ex->getMessage();
    }
?>