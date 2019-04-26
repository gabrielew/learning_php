<?php

    include 'contato.class.php';
    $contato = new Contato();
    
    if(!empty($_POST['id_contato'])) {
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $id_contato = $_POST['id_contato'];
        $contato->updateAll($email, $nome, $id_contato);
        header("Location: index.php");
    }
    else{
        header("Location: index.php");
    }