<?php

    
    require 'equipamentos_usuarios.class.php';

    $equipamentoUsuario = new Equipamento_Usuario();
    
    if(!empty($_GET['id_equipamento_usuario'])) {
        $id_equipamento_usuario = $_GET['id_equipamento_usuario'];
        $equipamentoUsuario->delete($id_equipamento_usuario);
        header("Location: ../index.php");
    }
    else{
        header("Location: ../index.php");
    }