<?php

    include 'usuario.class.php';
    $usuario = new Usuario();
    
    if(!empty($_POST['id_usuario'])) {
        $nome_usuario = $_POST['nome_usuario'];
        $setor = $_POST['setor'];
        $id_usuario = $_POST['id_usuario'];
        $usuario->updateAll($nome_usuario, $setor, $id_usuario);
        header("Location: index.php");
    }
    else{
        header("Location: index.php");
    }