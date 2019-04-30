<?php

    include 'equipamentos_usuarios.class.php';
    require '../equipamentos/equipamento.class.php';

    
    $equipamentoUsuario = new Equipamento_Usuario();
    $equipamento = new Equipamento();
    
    if(!empty($_POST['id_equipamento_usuario'])) {

        $id_equipamento = $_POST['id_equipamento'];
        $data_fim = $_POST['data_fim'];        
        $id_equipamento_usuario = $_POST['id_equipamento_usuario'];

        $equipamentoUsuario->updateAll($data_fim, $id_equipamento_usuario);
        $equipamento->updateNAO($id_equipamento);
        header("Location: ../index.php");
        
    }
    else{
        header("Location: ../index.php");
    }