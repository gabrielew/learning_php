<?php

    
    include 'usuario.class.php';
    $usuario = new Usuario();
    
    if(!empty($_GET['id_usuario'])) {
        $id_usuario = $_GET['id_usuario'];
        $usuario->delete($id_usuario);
        header("Location: ../index.php");
    }
    else{
        header("Location: ../index.php");
    }